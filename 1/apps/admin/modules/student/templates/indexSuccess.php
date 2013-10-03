<div id="content" class="border rounded-big-border container_16 clearFix">
							
				<div class="sectionHead border-bottom rounded-big-border-top">
					<table>
						<tr>
							<td class="leftCell vAlignMiddle">
								<h3>Program Listings</h3>
								<p>Manage your programs.</p>								
							</td>
							<td class="rightCell vAlignMiddle">
								<button class="whiteLarge large emphasize omega hasIcon">
									<span class="strong"><img class="btnIcon" src="/images/clientapp/iconPlus.png" alt="" /> Create New Listing</span>
								</button>
							</td>
						</tr>
					</table>
				</div> <!-- end .sectionHead -->
				
				<div class="sectionTab">
					<ul class="tab clearFix">
						<li>
							<a class="alpha selected" href="layoutv2-view_all_listings.html">All Listings</a>
						</li>
						<li>
							<a href="layoutv2-view_listing_drafts.html">Drafts (10)</a>
						</li>						
						<li>
							<a href="layoutv2-view_listing_archives.html">Archives</a>
						</li>												
					</ul>
				</div> end <!-- .sectionTab -->
				
											
				<div class="contentFlow clearFix">

					
					<p id="breadcrumb" class="type1"> 
						<a href="#" title="">Root</a> /
						<a href="#" title="">Child 1</a> /
						Child 2
					</p> 
					<!-- end breadcrumb -->
				
					<div id="main" class="alpha">
					
						<h3>All Listings</h3>
						
						<p>
							Below are all of the GoAbroad.com listings that you have created for your programs. You have complete control of your information that is published on our site. We encourage you to keep your data current and fresh in an effort to keep the visitors of GoAbroad.com well informed of your services and programs. 
						</p>
					
						<div class="error clear">
							<span class="icon alignLeft" id="errorIcon"></span>
							<p class="hasIcon">You have <a href="#" class="strong">3 expired listings</a></p>							
						</div>
						
						<div class="notice clear">
							<span class="icon alignLeft" id="noticeIcon"></span>
							<p class="hasIcon"><a class="strong" href="#">3 of your listings</a> are due to expire next week.</p>
						</div>
						
						<div class="success clear">
							<span class="icon alignLeft" id="successIcon"></span>
							<p class="hasIcon">You have successfully upgraded a listing.</p>
						</div>												
						
						<table class="data">
							<col width="20px"/>
							<col width="30px"/>
							<col width="489px"/>
							<col width="200px"/>
							<col width="100px"/>
							<col width="80px"/>							
							<thead> 
								<tr class="controls">
									<th class="border-bottom" colspan="6">					
										<form class="clear" action="actionHere">					
											<div class="clearFix">
												<button class="small whiteSmall emphasize alignLeft" title="Upgrade listing(s) to premium package">
													<span>Upgrade</span>
												</button>									
												<button class="small whiteSmall alignLeft" title="Archive listing(s)">
													<span>Archive</span>
												</button>
												<button class="small whiteSmall alignLeft" title="Delete listing(s)">
													<span>Delete</span>
												</button>
												
												<div class="alignRight selectWrap omega">
													<label>Country</label>
													<select class="selectBox">
														<option selected="selected">All/Any</option>
														<option>...</option>
														<option>...</option>
													</select>														
												</div>														
														
												<div class="alignRight selectWrap">
													<label>Directory</label>
													<select class="selectBox">
														<option>All</option>
														<option>Study Abroad</option>
														<option>Teach Abroad</option>
													</select>														
												</div>	
												
												<div class="alignRight selectWrap">
													<label>Sort By</label>
													<select class="selectBox">
														<option>Listing ID</option>
														<option>Date Created</option>
														<option>Expiration Date</option>
													</select>														
												</div>	
												
												<div class="alignRight selectWrap">
													<label>Filter</label>
													<select class="selectBox">
														<optgroup label="By Listing Status">
															<option selected="selected">Active</option>
															<option>Pending</option>															
															<option>Expired</option>																													
														</optgroup>
														<optgroup label="By Listing Plan">
															<option selected="selected">Free</option>
															<option>Premium</option>
														</optgroup>

													</select>														
												</div>											
											</div> <!-- end .clearFix -->
											
											<div class="clearFix">
												<div class="actions clear alignLeft">
													<span class="label alignLeft">Select:</span>
													<a class="alpha setBlock alignLeft" href="#" title="Select all items below.">All</a>
													<a class="omega setBlock alignLeft" href="#" title="Unselect the items below.">None</a>
													<span class="alignLeft separator">/</span>
													<span class="alignLeft label"><span class="strong">46</span> items selected</span>
												</div>	
											</div>
											
										</form>										
									</th>							
								</tr>
								<tr class="dataHeader">
									<th class="alpha textCenter">
										<input type="checkbox" name="All" class="checkBox">
									</th>
									<th class="textCenter">
										ID
									</th>
									<th class="textLeft">
										Details
									</th>
									<th class="textLeft">
										Directories
									</th>			
									<th class="textLeft">
										Countries
									</th>																				
									<th class="omega textCenter">
										Package
									</th>							
								</tr>
							</thead>
							<tbody>
						
								<tr>
									<td colspan="6">
										<p class="textCenter">No items to display yet. Why not <a title="" href="#"><strong>Create</strong></a> one?</p>
									</td>
								</tr>
								
								<tr>
									<td class=" textCenter"><input type="checkbox" value="78383" name="chkListing" class="checkBox"></td>
									<td class="textCenter">
										78383
									</td>
									<td class="">
										<p>
											<a class="strong" title="" href="#">Affordable Volunteer Programs in 18 Countries in Asia, Africa, Latin America</a>
											<span class="details setBlock">
												Expires on <span class="strong"> 22 Sep 2010</span>, Created 12 Jan 2009
											</span>
										</p>
										<div class="actions clear">
											<a class="setBlock alignLeft" href="/client.php/listing_inquiry?listingID=78383" title="">Inquiries</a>
											<a class="setBlock alignLeft" href="#" title="">Edit</a>
											<a class="setBlock alignLeft" href="#" title="">Send to Archive</a>
											<a class="setBlock alignLeft" href="#" title="">Delete</a>
										</div>										
									</td>
									<td>
										Study Abroad, Volunteer Abroad
									</td>
									<td>
										Argentina
									</td>
									<td class="textCenter">
										<span class="positive">Premium</span>
									</td>							
								</tr>
								
								
								<tr class="tFoot clearBoth">
									<td colspan="6">
										<div class="pagination border-top clear">
											<div class="selectWrap alignLeft">
												<select class="selectBox itemNoSelectBox"> 
													<option>##</option>
													<option>##</option>
													<option>##</option>
												</select>										
												<label class="selectLabel">Items per page</label>											
											</div>
	
											<div class="pages alignRight">
												<span class="disabled first">First</span>
												<span class="disabled previous">Prev</span>
													 <strong class="pageLinkSelected">1</strong>
													 <a href="#" title="Page 2" class="pageLink">2</a> 
													 <a href="#" title="Page 3" class="pageLink">3</a>
													 <a href="#" title="Page 4" class="pageLink">4</a>
													 <a href="#" title="Page 5" class="pageLink">5</a>
													 <a title="Next page" href="#"> <span class="next">Next</span></a> 
													 <a title="Proceed to the last page" href="#"><span class="last">Last</span></a>
											 </div>	
										</div>										
									</td>
								</tr>								
																	
							</tbody>		
						</table>									
							
					</div> <!-- end #main -->
				
				</div> <!-- end contentFlow -->				

			</div> <!-- end content -->