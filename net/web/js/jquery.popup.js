/**
 * jquery.popup.js 1.0
 *
 * @author: Augustianne Laurenne L. Barreta
 * @date: October 08, 2009
 * ----------------------------------------
 *
 * CHANGELOGS:
 * October 12, 2009 
 * - allowed popup to be bound to user-defined events (defaults to 'click')
 * - changed header default value to false 	
 * October 14, 2009
 * - added functionality: adding content from url
 * - modified createContent: append content immediately to dialogBox to accommodate scripts
 * October 16, 2009
 * - fixed bug (popup's settings are carried over if there are lots more than one popup initiated in page)
 * - changed default height to 440, to adjust container position
 * - added loading image
 * - added option to place popup at the center always (page scrolls and window resizes)
 * October 23, 2009
 * - allowed setting of dialog box templates
 * October 28, 2009
 * - added callback function to be fired after loading popup
 * - fixed alwaysCenter issue (popup remains in center even if alwaysCenter is set to false)
 *   -- unbind window events (scroll, resize) if alwaysCenter is false
 * December 4, 2009
 * - added option to close popup when esc is pressed
 * - added ganet theme
 * April 14, 2010
 * - added escapeCallback and fadeoutCallback to be called after escape and fadeout respectively
**/

(function($){
	
	$.extend($.fn, {
		popup : function(options){
			var popup = new $.popup(options);
			return this.each(function(){
				if(popup.settings.trigger != false){ // binds to specified event
					$(this).bind(popup.settings.trigger, function(){
						popup.createPopup();
					});
				}else{ // shows popup after plugin call
					popup.createPopup();
				}
			});
		}	
	});
	
	$.popup = function( options ) {
		this.settings = $.extend( {}, $.popup.defaults, options );
		
		// preload image
		this.imageLoader = new Image();
		this.imageLoader.src = this.settings.loader;
	};
	
	$.extend($.popup, {
		version: '1.0',
		defaults: {
			template: '<table id="dialogEffects">'+  // template to be used, can use other template as long as it has a div id=dialogBox to contain content 
							'<tbody>'+
								'<tr>'+
									'<td id="topLeft" class="corner unitPng">.</td>'+
									'<td id="top" class="unitPng">top</td>'+
									'<td id="topRight" class="corner unitPng">.</td>'+
								'</tr>'+
								'<tr>'+
									'<td id="left" class="unitPng">left</td>'+
									'<td id="dialogContent">'+
										'<div id="dialogWrapper" class="unitPng">'+
											'<div id="dialogBox"></div>'+
										'</div>'+
									'</td>'+
									'<td id="right" class="unitPng">right</td>'+
								'</tr>'+
								'<tr>'+
									'<td id="bottomLeft" class="corner unitPng">.</td>'+
									'<td id="bottom" class="unitPng">bottom</td>'+
									'<td id="bottomRight" class="corner unitPng">.</td>'+
								'</tr>'+
							'</tbody>'+
						'</table>',
			content: 'Lorem ipsum dolor sit amet, ' +  // content of popup, could be html or text
				'consectetur adipisicing elit, sed do ' +
				'eiusmod tempor incididunt ut labore et ' +
				'dolore magna aliqua. Ut enim ad minim ' +
				'veniam, quis nostrud exercitation ullamco ' +
				'laboris nisi ut aliquip ex ea commodo consequat. ' +
				'Duis aute irure dolor in reprehenderit in voluptate ' +
				'velit esse cillum dolore eu fugiat nulla pariatur.',
			buttons: {
				Okay : function(){
					$.popup.close();
				}
			},
			header: false, // popup will not have header if set to false
			width: 424, // width of container, could also be one of the following classes: narrow, medium, wide
			height: 440, // height of container, also controls vertical position
			theme: '', // TODO: apply themes
			fadeout: false, // if set to true, popup fades out 2s after rendering
			fadeoutCallback: false, // function called after fadeout, calls function if not false
			trigger: 'click', // specifies event to trigger popup, if set to false opens on plugin call
			url: false, // url of template which will serve as content (works for php templates), popup wll use content if set to false
			loader: '/images/clientapp/progressLoaderWhiteRegular.gif', // loading animation
			alwaysCenter: false, // popup is always center even after scroll/window resize
			callback: false, // if set, function is called after popup loads 
			escape: false, // if false, box will wait for button click or fadeout to close else close if esc key is pressed or mouse is clicked outside popup
			escapeCallback: false,
			overflow: false, // if set to true, height is fixed and scrollbar shows when content exceeds popup height
			allowLoader: false, // if set to true, loading animation will appear after clicking a button
			classSize: false // not to be called public
		},
		
		prototype: {
			init: function(){
				
				if(isNaN(this.settings.width)){
					this.settings.classSize  = this.settings.width;
					switch(this.settings.classSize){
						case 'narrow': this.settings.width = 380;break;
						case 'medium': this.settings.width = 480;break;
						case 'wide': this.settings.width = 607;break;
					}
				}
				
				this.dimmer = $('<div></div>')
					.attr('id','overlayScreen')
					.addClass('unitPng')
					.css({
						width: "100%",
						height: "100%",
						position: "fixed"
					})
					.appendTo($('body'));

				this.popup_box = $('<div></div>')
					.attr('id','popup')
					.addClass('prompt')
					.html(this.settings.template)
					.css({
						width: this.settings.width,
						height: this.settings.height,
						'z-index': 500
					})
					.appendTo($('body'))
					.hide();
			},
			
			createHeader: function(){
				wrapper = $('<div></div>');
				if(this.settings.header != false){
					boxHeader = $('<h3></h3>')
						.attr('id','popup_header')
						.addClass('header')
						.text(this.settings.header)
						.appendTo(wrapper);
					wrapper.addClass('head border-bottom');	
				}
				return wrapper;
			},

			createContent: function(){
				var dContentStyle = this.settings.overflow ? ' style="height:'+(this.settings.height-50)+'px;overflow:auto;"' : '';
				
				if(!this.settings.classSize){
					$('#dialogBox').css({
						width: this.settings.width
					});
					
					if(this.settings.overflow){
						$('#dialogBox').css({
							height: this.settings.height	
						});
					}
				}else{
					$('#dialogBox').addClass(this.settings.classSize);
				}
				
				if(!this.settings.url){
					$('#dialogBox').append('<div id="dContent"'+dContentStyle+'>'+this.settings.content+'</div>');
					this.createButtons().appendTo($('#dialogBox'));
					this.loading.remove();
					this.popup_box.show();
					
					if(this.settings.callback != false){
						this.settings.callback.call(this);
					}
					
					return $('#dialogBox');
				}

				this_popup = this;
				$.ajax({
					type: "GET",
					url: this.settings.url,
					cache: false,
					success: function(html){
						$('#dialogBox').append('<div id="dContent"'+dContentStyle+'>'+html+'</div>');
					},
					complete: function(html){
						this_popup.createButtons().appendTo($('#dialogBox'));
						this_popup.loading.remove();
						this_popup.popup_box.show();
						
						// fire callback function if any
						if(this_popup.settings.callback != false){
							this_popup.settings.callback.call(this_popup);
						}
					},
					error: function(a,b,c){
						if(a.status == 401){
							$.popup.close();
							setTimeout(function(){
								$('div').popup({
									header: 'Session Expired', trigger: false,
									content: '<p>You have been inactive for a while. Please login again to continue.</p>',
									buttons: {
										Login: function(){ window.location.reload(); }
									}
								});
							}, 2000);
						}
					}
				});
				
				return $('#dialogBox');
			},

			createButtons: function(){   
				if($.popup.isObjectEmpty(this.settings.buttons)) return $('<div></div>');
				buttonsContainer = $('<div></div>').addClass('actions border-top');
				$this = this;
				$.each(this.settings.buttons, function(label, action){
					$('<button type="button"></button>')
						.addClass('large whiteLarge')
						.click(function(){
							if($this.settings.allowLoader){ $this.createAfterSubmitLoader(); }
							action.apply(self, arguments);
						})
						.html('<span class="strong">'+label+'</span>')
						.appendTo(buttonsContainer);
				});
				return buttonsContainer;
			},

			showPopup: function(){
				this.init();
				this.createLoader();
				
				$.popup._center(this.popup_box);
				$.popup._applyTheme();

				this.createHeader().appendTo($('#dialogBox'));
				this.createContent(); // do adding of content immediately to dialogBox to accommodate html code with scripts
				// create buttons inside createContent
			},

			createPopup: function(){
				if($('#popup').length){
					return;
				}
				
				this.showPopup();
				// fire callback function if any
				if(this.settings.callback != false && !this.settings.url){
					this.settings.callback.call(this);
				}
				// fadeout if set
				if(this.settings.fadeout){
					$.popup.fadeout(this.settings.fadeoutCallback);
				}
				// bind scroll and window resize if popup is set to always center else unbind
				if(this.settings.alwaysCenter){
					$(window).bind('scroll',function(){
						$.popup._center($('#popup'));
					}).bind('resize',function(){
						$.popup._center($('#popup'));
					});
				}else{
					$(window).unbind('scroll').unbind('resize');
				}
				
				if(this.settings.escape){
					var esc_callback = this.settings.escapeCallback;
					$(document).bind('keydown', function(e){ 
						code = (e == null) ? event.keyCode : keycode = e.which; 
						if(code == 27){
							if(esc_callback != false) esc_callback.call(this);
							else $.popup.close(); 
						}
					});                                  
					
					$(document).bind('mousedown', function(e){ 
						var target = (e == null) ? $(event.target) : $(e.target);
						if(target.parents("#popup").length <= 0){
							$.popup.close();
						}
					});                
					
				}else{
					$(document).unbind('keydown').unbind('mousedown');
				}
			},
			
			createLoader: function(){
				this.loading = $('<div></div>')
					.attr('id','popup_loader')
					.html('<p class="details textCenter"><img width="20" height="20" alt="Loading..." src="'+this.imageLoader.src+'" /><br/>Please wait...</p>')
					.css({
						position: "absolute",
						width: 70,
						height: 50,
						'z-index': 300
					})
					.appendTo($('body'));
				$.popup._center(this.loading);	
			},
			
			createAfterSubmitLoader: function(){
				$('<div></div>').
				attr('id', 'popup_afterloader').
				attr('style', 'display:inline;').
				html('<p class="details textCenter" style="display:inline;"><img width="10" height="10" alt="Loading..." src="'+this.imageLoader.src+'" />&nbsp;Please wait ...</p>').
				appendTo($('#dialogBox .actions'));
			}
			
		},
		
		_center: function(elt){
			var pageWidth = (window.innerWidth != null) ? window.innerWidth: document.documentElement && document.documentElement.clientWidth ? document.documentElement.clientWidth:document.body != null? document.body.clientWidth:null;
			var pageHeight = (window.innerHeight != null) ? window.innerHeight: document.documentElement && document.documentElement.clientHeight ? document.documentElement.clientHeight:document.body != null? document.body.clientHeight:null;
			var posLeft = (typeof window.pageXOffset != 'undefined') ? window.pageXOffset:document.documentElement && document.documentElement.scrollLeft? document.documentElement.scrollLeft:document.body.scrollLeft? document.body.scrollLeft:0;
			var posTop = (typeof window.pageYOffset != 'undefined') ? window.pageYOffset:document.documentElement && document.documentElement.scrollTop? document.documentElement.scrollTop: document.body.scrollTop?document.body.scrollTop:0;
			
			var height = $(elt).height();  
			var width = $(elt).width();  
			$(elt).css({  
				"position" : "absolute",  
				"left" : posLeft + ((pageWidth - width)/ 2),  
				"top" : posTop + ((pageHeight - height)/ 3)
			});
		},
		
		// TODO: apply themes
		_applyTheme: function(){},
		
		show: function(){
			$.popup.createPopup();
		},

		close: function(){
			$('#popup').remove();
			$('#overlayScreen').remove();
		},

		fadeout: function(fn){
			setTimeout(function(){
				$('#popup').fadeOut('slow');
			}, 2000);
			setTimeout(function(){
				$('#popup').remove();
				$('#overlayScreen').remove();
			}, 3000);
			if(fn) setTimeout(function(){fn.call(this);}, 3000);
		},       
		
		isObjectEmpty: function(obj){
			for(var prop in obj){
		        if(obj.hasOwnProperty(prop)) return false;
		    }
		    return true;
		},

		getVersion: function(){
			$().popup({
				header: "Version",
				content: '<p class="details">You are currently using jquery.popup.js version '+$.popup.version+'</p>',
				trigger: false
			});
		}
		
	});

})(jQuery);