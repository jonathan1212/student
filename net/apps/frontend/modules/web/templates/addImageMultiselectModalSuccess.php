<div id="overlayScreen" class="unitPng" style="width: 100%; height: 100%; position: fixed;"></div>
	
	<!--Image Popup Container-->	
	<div>
		<!--Start Cut Here-->
		<div id="popup" class="prompt" style="width: 700px; height: 440px; z-index: 500; display: block; position: absolute; left: 550.5px; top: 109.667px;">
			<div id="dialogContent">
				<div id="dialogBox">
					<div class="head border-bottom">
						<h3 id="popup_header" class="header">Add Image</h3>
					</div>

					<div id="dContent">
						<div class="multiSelect">

							<div style="padding:15px 0;">
								<input type="file" onchange="$.fn.addInput();" name="SourceFile[]" class="fileInput">
							</div>


							<div class="content">
								<ul class="multiItemLayout2">
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li class="emphasize">
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>	
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li class="emphasize">
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>																							
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li class="emphasize">
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>	
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li class="emphasize">
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>	
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li class="emphasize">
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>																							
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li class="emphasize">
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>	
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li class="emphasize">
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>	
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li class="emphasize">
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>																							
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li class="emphasize">
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>																							
								</ul>	
							</div>
							<div class="controls clear">
								<div class="actCtrls alignLeft">
									<span class="label">Show</span>
									<a class="actLink active 	rounded-small-border" href="#" title="Show All Items"><span>All Items</span></a>
									<a class="actLink rounded-small-border" href="#" title="Show Selected Items"><span>Selected (0)</span></a>																				
								</div>
								<div class="searchCtrls alignRight">
									<span class="label">Find specific items</span>
									<label>
										<input class="rounded-small-border" type="text" value="Start typing an item" name="fieldName" />
										<a class="clearTxtBox" href="#" title="Clear">
											<img alt="Close" src="/images/clientapp/findClose.gif" />
										</a>
									</label>
								</div>
							</div>
							<!--Unnecessary but may be of use for the future-->
							<!--a class="expandControl" href="#" title="Drag Downward/Upward to expand/contract">
								<img src="/images/clientapp/multiSelExpand.gif" alt="Expand" />
							</a-->
						</div>
					</div>

					<div class="actions border-top">
						<button type="button" class="large whiteLarge"><span class="strong">Upload</span></button>
						<button type="button" class="large whiteLarge"><span class="strong">Close</span></button>
					</div>
				</div>
			</div>
		</div>
		<!--End Cut Here-->
	</div>
	
	
	<!--Video Popup Container-->
	
	<div style="position:absolute; top:600px;">
		<!--Start Cut Here-->
		<div id="popup" class="prompt" style="width: 700px; height: 440px; z-index: 500; display: block; position: absolute; left: 550.5px; /*top: 109.667px;*/">
			<div id="dialogContent">
				<div id="dialogBox">
					<div class="head border-bottom">
						<h3 id="popup_header" class="header">Add Video</h3>
					</div>
					

					<div id="dContent">
						<div class="multiSelect">

							<div style="padding:15px 0;">
								<div class="detailWrap">
									<span class="strong">Url:</span>
									<input type="text" size="30" name="video[url]" />
								</div>
								
								<div class="detailWrap">
									<span class="strong">Title:</span>
									<input type="text" size="30" name="video[url]" />
								</div>
								
								<div class="detailWrap">
									<span class="strong">Caption:</span>
									<input type="text" size="30" name="video[url]" />
								</div>
							</div>


							<div class="content">
								<ul class="multiItemLayout2">
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li class="emphasize">
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>	
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li class="emphasize">
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>																							
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li class="emphasize">
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>	
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li class="emphasize">
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>	
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li class="emphasize">
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>																							
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li class="emphasize">
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>	
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li class="emphasize">
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>	
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li class="emphasize">
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>																							
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li class="emphasize">
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>
									<li>
										<label>
											<input class="checkBox" type="checkbox" name="fieldName" />
											Sample Item
										</label>
									</li>																							
								</ul>	
							</div>
							<div class="controls clear">
								<div class="actCtrls alignLeft">
									<span class="label">Show</span>
									<a class="actLink active 	rounded-small-border" href="#" title="Show All Items"><span>All Items</span></a>
									<a class="actLink rounded-small-border" href="#" title="Show Selected Items"><span>Selected (0)</span></a>																				
								</div>
								<div class="searchCtrls alignRight">
									<span class="label">Find specific items</span>
									<label>
										<input class="rounded-small-border" type="text" value="Start typing an item" name="fieldName" />
										<a class="clearTxtBox" href="#" title="Clear">
											<img alt="Close" src="/images/clientapp/findClose.gif" />
										</a>
									</label>
								</div>
							</div>
							<!--Unnecessary but may be of use for the future-->
							<!--a class="expandControl" href="#" title="Drag Downward/Upward to expand/contract">
								<img src="/images/clientapp/multiSelExpand.gif" alt="Expand" />
							</a-->
						</div>
					</div>

					<div class="actions border-top">
						<button type="button" class="large whiteLarge"><span class="strong">Upload</span></button>
						<button type="button" class="large whiteLarge"><span class="strong">Close</span></button>
					</div>
				</div>
			</div>
		</div>
		<!--End Cut Here-->
	</div>