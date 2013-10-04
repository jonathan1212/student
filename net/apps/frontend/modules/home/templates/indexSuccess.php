

<div id="content" class="border rounded-big-border container_16 clearFix">
			
				<div class="sectionHead border-bottom rounded-big-border-top">
					<table>
						<tbody><tr>
							<td class="leftCell vAlignMiddle">
								<h3>Client UI Standards Proposal</h3>
								<p>An aim to ease development time by documenting known UI patterns and components.</p>								
							</td>
							<td class="rightCell vAlignMiddle">
								&nbsp;
							</td>
						</tr>
					</tbody></table>
				</div>				
				
				<div class="sectionTab">
					<ul class="tab clearFix">
						<li>
							<a href="#" class="alpha selected">Forms</a>
						</li>
						<li>
							<a href="#">Typography xx</a>
						</li>						
						<li>
							<a href="#">Layout</a>
						</li>
						<li>
							<a href="#">Tables</a>
						</li>							
						<li>
							<a href="#">Others</a>
						</li>																
					</ul>
				</div>	
				
				<div class="contentFlow clearFix">
				
					<p id="breadcrumb" class="type1">
						<a href="#" title="">Root</a> /
						<a href="#" title="">Child 1</a> /
						Child 2
					</p> <!-- end breadcrumb -->
				
								
					<div id="main" class="grid_12 alpha">
	
						<h3>Create a New Listing</h3>
						
						<p>
							Create a GoAbroad.com listing for your program. When you list on GoAbroad.com your listings will be accessible on every site which licenses our databases. It's like listing on dozens of different web sites at once and it all starts here.
						</p>							
									
<!--
						<div class="steps clearFix border-bottom">
							<div class="alignLeft">
								<h4 class="strong">Step 1: Program Details</h4>
							</div>
							<div class="alignRight">
								<button class="small whiteSmall emphasize" type="submit"><span>&nbsp;1&nbsp;</span></button>
								<button class="small whiteSmall" type="submit"><span>&nbsp;2&nbsp;</span></button>
								<button class="small whiteSmall" type="submit"><span>&nbsp;3&nbsp;</span></button>
							</div>
						</div>	
-->


						
						<form class="withCues" action="actionhere">
							
							<fieldset class="dotted-border-bottom">
								<div class="legend">Basic Program Information</div>
								<div class="fieldsetInfo">
									<p>Tell us more about this program. All fields below are required.</p>
								</div>
								
								<!-- add .first for first form/fieldset items -->
								<div class="item first">
									<label for="fieldName">Program Title:</label>
									<input type="text" name="fieldName" class="setBlock txtBox long"/>
								</div>
								
								<div class="item">
									<label for="fieldName">Expiration Date: </label>
									<input type="text" name="fieldName" class="setBlock txtBox short"/>
								</div>
								
								
								<div class="item active">
									<label for="fieldName">Choose your Listing Plan: </label>
									<p class="details">
										We strongly recommend you to choose the <span class="strong">Premium Plan</span> for better listing performance and ROI.
									</p>
		
									
									<div class="radio">
										<input type="radio" name="fieldName" class="radioBtn"/>
										Free Listing
										<div class="indent" style="display: none;">
											<input type="text" name="fieldName" value="youremail@email.com" class="setBlock txtBox long"/>
											<p class="details">Send all inquiries fpr this listing to this email address.</p>
										</div>
									</div>							
									<div class="radio">
										<input type="radio" name="fieldName" class="radioBtn"/>
										Paid Listing
										<div style="display:none;" >
											<div class="indent">
												<p class="details">	Send inquiries to this email </p>
												<input type="text" name="fieldName" value="youremail@email.com" class="setBlock txtBox short"/>
											</div>
											<div class="indent">
												<p class="details">or redirect users to an inquiry form or application on your website.	</p>
												<input type="text" name="fieldName" value="http://" class="setBlock txtBox long"/>
											</div>										
										</div>	
									</div>															
								</div>
								
								<div class="item">
									<label for="fieldName">Program Duration:</label>
									<p class="details">
										Please select all that applies.
									</p>
								
									<div class="clear">
										<div class="grid_6 alpha">
											<div class="check">
												<input type="checkbox" name="fieldName" class="checkBox">
												Checkbox Sample
											</div>							
								
											<div class="check">
												<input type="checkbox" name="fieldName" class="checkBox">
												Checkbox Sample
											</div>							
											
											<div class="check">
												<input type="checkbox" name="fieldName" class="checkBox">
												Checkbox Sample
											</div>																																		
										</div>
										<div class="grid_6 omega">																									
											<div class="check">
												<input type="checkbox" name="fieldName" class="checkBox">
												Checkbox Sample
											</div>							
								
											<div class="check">
												<input type="checkbox" name="fieldName" class="checkBox">
												Checkbox Sample
											</div>							
											
											<div class="check">
												<input type="checkbox" name="fieldName" class="checkBox">
												Checkbox Sample
											</div>																																											
										</div>
									</div>							
								</div>
								
								<div class="item">
									<label for="fieldName">This program is to:</label>
									<p class="details">
										Please select all that applies.
									</p>
								
									<div class="clear">
										<div class="grid_6 alpha">
											<div class="check">
												<input type="checkbox" name="fieldName" class="checkBox">
												Checkbox Sample
											</div>							
								
											<div class="check">
												<input type="checkbox" name="fieldName" class="checkBox">
												Checkbox Sample
											</div>							
											
											<div class="check">
												<input type="checkbox" name="fieldName" class="checkBox">
												Checkbox Sample
											</div>																																		
										</div>
										<div class="grid_6 omega">																									
											<div class="check">
												<input type="checkbox" name="fieldName" class="checkBox">
												Checkbox Sample
											</div>							
								
											<div class="check">
												<input type="checkbox" name="fieldName" class="checkBox">
												Checkbox Sample
											</div>							
											
											<div class="check">
												<input type="checkbox" name="fieldName" class="checkBox">
												Checkbox Sample
											</div>																																											
										</div>
									</div>							
								</div>
								
								<div class="item">
									<label for="fieldName">Listing Description:</label>
									<p class="details">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>							
									<textarea cols="80" rows="5" class="setBlock txtArea extraLong" name="fieldName"></textarea>
								</div>	
								
								<div class="item">
									<label for="fieldName">Listing Highlights:</label>
									<p class="details">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>							
									<textarea cols="80" rows="5" class="setBlock txtArea extraLong" name="fieldName"></textarea>
								</div>				
								
								<div class="item">
									<label for="fieldName">To which GoAbroad Directories will this listing belong?:</label>
									<p class="details">
										You can select multiple directories.
									</p>
								
									<div class="clear">
										<div class="grid_6 alpha">
											<div class="check">
												<input type="checkbox" name="fieldName" class="checkBox">
												Checkbox Sample
											</div>							
								
											<div class="check">
												<input type="checkbox" name="fieldName" class="checkBox">
												Checkbox Sample
											</div>							
											
											<div class="check">
												<input type="checkbox" name="fieldName" class="checkBox">
												Checkbox Sample
											</div>																																		
										</div>
										<div class="grid_6 omega">																									
											<div class="check">
												<input type="checkbox" name="fieldName" class="checkBox">
												Checkbox Sample
											</div>							
								
											<div class="check">
												<input type="checkbox" name="fieldName" class="checkBox">
												Checkbox Sample
											</div>							
											
											<div class="check">
												<input type="checkbox" name="fieldName" class="checkBox">
												Checkbox Sample
											</div>																																											
										</div>
									</div>							
								</div>																				
							</fieldset>
							
							<fieldset class="dotted-border-bottom">
								<div class="legend">Country Information</div>
								<div class="fieldsetInfo">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>
								</div>								
								
								<!-- add .first for first form/fieldset items -->
								<div class="item first">
									<label for="fieldName">To which country does your listing belong?:</label>
									<select class="setBlock long selectBox">
										<option>Sample Option</option>
										<option>Sample Option</option>
										<option>Sample Option</option>
										<optgroup label="Options Group">
											<option>Sample Option</option>
											<option>Sample Option</option>
											<option>Sample Option</option>																		
										</optgroup>
									</select>
								</div>
															
							</fieldset>
							
							<fieldset>
								<div class="legend">Directory Specific Information</div>
								<div class="fieldsetInfo">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
									</p>
								</div>								

								<!-- add .first for first form/fieldset items -->
								<div class="item first">
									<label for="fieldName">Univ. Admission Address:</label>
									<input type="text" name="fieldName" class="setBlock txtBox long">									
								</div>

								<div class="item">									
									<div class="clearFix">
										<div class="grid_4 alpha">
											<label for="fieldName">Univ. Admission State:</label>
											<select class="setBlock short selectBox">
												<option>Sample Option</option>
												<option>Sample Option</option>
												<option>Sample Option</option>
												<optgroup label="Options Group">
													<option>Sample Option</option>
													<option>Sample Option</option>
													<option>Sample Option</option>																		
												</optgroup>
											</select>
										</div>
										<div class="grid_4 omega">
											<label for="fieldName">Univ. Admission City:</label>
											<select class="setBlock short selectBox">
												<option>Sample Option</option>
												<option>Sample Option</option>
												<option>Sample Option</option>
												<optgroup label="Options Group">
													<option>Sample Option</option>
													<option>Sample Option</option>
													<option>Sample Option</option>																		
												</optgroup>
											</select>
										</div>
									</div>
								</div>								
								
								<div class="item">
									<label for="fieldName">University Attribute: <span class="required">*</span></label>
									<p class="details">
										Write something about this university.
									</p>							
									<textarea cols="80" rows="5" class="setBlock txtArea extraLong" name="fieldName"></textarea>
								</div>
								
								<div class="item">
									<label for="fieldName">High School Program Types:</label>
									<p class="details">
										Please select all that apply.
									</p>
								
									<div class="clear">
										<div class="grid_6 alpha">
											<div class="check">
												<input type="checkbox" class="checkBox" name="fieldName">
												Checkbox Sample
											</div>							
								
											<div class="check">
												<input type="checkbox" class="checkBox" name="fieldName">
												Checkbox Sample
											</div>							
											
											<div class="check">
												<input type="checkbox" class="checkBox" name="fieldName">
												Checkbox Sample
											</div>																																		
										</div>
										<div class="grid_6 omega">																									
											<div class="check">
												<input type="checkbox" class="checkBox" name="fieldName">
												Checkbox Sample
											</div>							
								
											<div class="check">
												<input type="checkbox" class="checkBox" name="fieldName">
												Checkbox Sample
											</div>							
											
											<div class="check">
												<input type="checkbox" class="checkBox" name="fieldName">
												Checkbox Sample
											</div>																																											
										</div>
									</div>							
								</div>	
								
								<div class="item">
									<label for="fieldName">Applicable terms for Internshio/Study Abroad Program:</label>
									<p class="details">
										Please select all that apply.
									</p>
								
									<div class="clear">
										<div class="grid_6 alpha">
											<div class="check">
												<input type="checkbox" class="checkBox" name="fieldName">
												Checkbox Sample
											</div>							
								
											<div class="check">
												<input type="checkbox" class="checkBox" name="fieldName">
												Checkbox Sample
											</div>							
											
											<div class="check">
												<input type="checkbox" class="checkBox" name="fieldName">
												Checkbox Sample
											</div>																																		
										</div>
										<div class="grid_6 omega">																									
											<div class="check">
												<input type="checkbox" class="checkBox" name="fieldName">
												Checkbox Sample
											</div>							
								
											<div class="check">
												<input type="checkbox" class="checkBox" name="fieldName">
												Checkbox Sample
											</div>							
											
											<div class="check">
												<input type="checkbox" class="checkBox" name="fieldName">
												Checkbox Sample
											</div>																																											
										</div>
									</div>							
								</div>
								
								<div class="item">
									<label for="fieldName">Degrees available in US university:</label>
									<p class="details">
										Please select all that apply.
									</p>
								
									<div class="clear">
										<div class="grid_6 alpha">
											<div class="check">
												<input type="checkbox" class="checkBox" name="fieldName">
												Checkbox Sample
											</div>							
								
											<div class="check">
												<input type="checkbox" class="checkBox" name="fieldName">
												Checkbox Sample
											</div>							
											
											<div class="check">
												<input type="checkbox" class="checkBox" name="fieldName">
												Checkbox Sample
											</div>																																		
										</div>
										<div class="grid_6 omega">																									
											<div class="check">
												<input type="checkbox" class="checkBox" name="fieldName">
												Checkbox Sample
											</div>							
								
											<div class="check">
												<input type="checkbox" class="checkBox" name="fieldName">
												Checkbox Sample
											</div>							
											
											<div class="check">
												<input type="checkbox" class="checkBox" name="fieldName">
												Checkbox Sample
											</div>																																											
										</div>
									</div>							
								</div>	
								
								<div class="item">
									<label for="fieldName">Graduate Program for Study Abroad Program:</label>
									<p class="details">
										Please select all that apply.
									</p>
									<div class="check">
										<input type="checkbox" class="checkBox" name="fieldName">
										Checkbox Sample
									</div>							
						
									<div class="check">
										<input type="checkbox" class="checkBox" name="fieldName">
										Checkbox Sample
									</div>							
									
									<div class="check">
										<input type="checkbox" class="checkBox" name="fieldName">
										Checkbox Sample
									</div>									
								</div>																																	
								
							</fieldset>														
							
							<div class="item actions border-top">
								<button type="submit" class="large whiteLarge emphasize hasIcon"><span><img alt="" src="/images/clientapp/icons/accept.png" class="btnIcon"> Create &amp; Preview Listing</span></button>
								<button class="large whiteLarge"><span>Save as Draft</span></button>
								<span class="separator">or</span> <a href="#">Discard</a>
							</div>							
						</form>		
						
																									
							
							
					</div> <!-- end main -->
	
					<div id="sidebar" class="grid_4 omega">
						<div class="sideBlock">
							<div class="notice">
								<h5 class="strong">Enhance your listing performance by upgrading.</h5>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>								
							</div>					
						</div> <!-- end sideBlock -->
					
						<ul>
							<li> xxx </li>
							<li> xxx </li>

						</ul>

					</div> <!-- end sidebar -->
				
				</div> <!-- end contentFlow -->

				

			</div> <!-- end content -->