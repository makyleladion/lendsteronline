<?php include('header.php') ?>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Header -->
	<div id="header" class="not-sticky">

		<?php include('header-nav.php') ?>

	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Gradient-->
<div class="single-listing-page-titlebar"></div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row sticky-wrapper">
		<div class="col-lg-8 col-md-8 padding-right-30">

			<!-- Titlebar -->
			<div id="titlebar" class="listing-titlebar">
				<div class="listing-titlebar-title">
					<h2>Sunny and Modern Apartment<span class="listing-tag">Apartments</span></h2>
					<span>
						<a href="#listing-location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							2726 Shinn Street, New York
						</a>
					</span>
					<div class="star-rating" data-rating="5">
						<div class="rating-counter"><a href="#listing-reviews">(31 reviews)</a></div>
					</div>
				</div>
			</div>

			<!-- Listing Nav -->
			<div id="listing-nav" class="listing-nav-container">
				<ul class="listing-nav">
					<li><a href="#listing-overview" class="active">Overview</a></li>
					<li><a href="#listing-gallery">Gallery</a></li>
					<li><a href="#listing-pricing-list">Pricing</a></li>
					<li><a href="#listing-location">Location</a></li>
					<li><a href="#listing-reviews">Reviews</a></li>
					<li><a href="#add-review">Add Review</a></li>
				</ul>
			</div>
			
			<!-- Overview -->
			<div id="listing-overview" class="listing-section">

				<!-- Apartment Description -->
				<ul class="apartment-details">
					<li>2 rooms</li>
					<li>1 bedroom</li>
					<li>1 bed</li>
					<li>1 bathroom</li>
				</ul>

				<!-- Description -->
				<p>
					Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus.
				</p>

				<p>
					 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.
				</p>

				<!-- Amenities -->
				<h3 class="listing-desc-headline">Amenities</h3>
				<ul class="listing-features checkboxes">
					<li>Elevator in building</li>
					<li>Friendly workspace</li>
					<li>Instant Book</li>
					<li>Wireless Internet</li>
					<li>Free parking on premises</li>
					<li>Free parking on street</li>
				</ul>
			</div>


			<!-- Slider -->
			<div id="listing-gallery" class="listing-section">
				<h3 class="listing-desc-headline margin-top-70">Gallery</h3>
				<div class="listing-slider-small mfp-gallery-container margin-bottom-0">
					<a href="images/single-listing-02a.jpg" data-background-image="images/single-listing-02a.jpg" class="item mfp-gallery" title="Title 2"></a>
					<a href="images/single-listing-01a.jpg" data-background-image="images/single-listing-01a.jpg" class="item mfp-gallery" title="Title 1"></a>
					<a href="images/single-listing-03a.jpg" data-background-image="images/single-listing-03a.jpg" class="item mfp-gallery" title="Title 3"></a>
					<a href="images/single-listing-04a.jpg" data-background-image="images/single-listing-04a.jpg" class="item mfp-gallery" title="Title 3"></a>
				</div>
			</div>

			<!-- Location -->
			<div id="listing-location" class="listing-section">
				<h3 class="listing-desc-headline margin-top-60 margin-bottom-30">Location</h3>

				<div id="singleListingMap-container">
					<div id="singleListingMap" data-latitude="40.70437865245596" data-longitude="-73.98674011230469" data-map-icon="im im-icon-Hamburger"></div>
					<a href="#" id="streetView">Street View</a>
				</div>
			</div>
				
			<!-- Reviews -->
			<div id="listing-reviews" class="listing-section">
				<h3 class="listing-desc-headline margin-top-75 margin-bottom-20">Reviews <span>(12)</span></h3>

				<div class="clearfix"></div>

				<!-- Reviews -->
				<section class="comments listing-reviews">

					<ul>
						<li>
							<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
							<div class="comment-content"><div class="arrow-comment"></div>
								<div class="comment-by">Kathy Brown<span class="date">June 2017</span>
									<div class="star-rating" data-rating="5"></div>
								</div>
								<p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>

								<a href="#" class="rate-review"><i class="sl sl-icon-like"></i> Helpful Review <span>12</span></a>
							</div>
						</li>

						<li>
							<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /> </div>
							<div class="comment-content"><div class="arrow-comment"></div>
								<div class="comment-by">John Doe<span class="date">May 2017</span>
									<div class="star-rating" data-rating="4"></div>
								</div>
								<p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
								<a href="#" class="rate-review"><i class="sl sl-icon-like"></i> Helpful Review <span>2</span></a>
							</div>
						</li>

						<li>
							<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
							<div class="comment-content"><div class="arrow-comment"></div>
								<div class="comment-by">Kathy Brown<span class="date">June 2017</span>
									<div class="star-rating" data-rating="5"></div>
								</div>
								<p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>
								
								<a href="#" class="rate-review"><i class="sl sl-icon-like"></i> Helpful Review <span>4</span></a>
							</div>
						</li>

						<li>
							<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /> </div>
							<div class="comment-content"><div class="arrow-comment"></div>
								<div class="comment-by">John Doe<span class="date">May 2017</span>
									<div class="star-rating" data-rating="5"></div>
								</div>
								<p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
								<a href="#" class="rate-review"><i class="sl sl-icon-like"></i> Helpful Review</a>
							</div>

						</li>
					 </ul>
				</section>

				<!-- Pagination -->
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12">
						<!-- Pagination -->
						<div class="pagination-container margin-top-30">
							<nav class="pagination">
								<ul>
									<li><a href="#" class="current-page">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<!-- Pagination / End -->
			</div>


			<!-- Add Review Box -->
			<div id="add-review" class="add-review-box">

				<!-- Add Review -->
				<h3 class="listing-desc-headline margin-bottom-20">Add Review</h3>
				
				<span class="leave-rating-title">Your rating for this listing</span>
				
				<!-- Rating / Upload Button -->
				<div class="row">
					<div class="col-md-6">
						<!-- Leave Rating -->
						<div class="clearfix"></div>
						<div class="leave-rating margin-bottom-30">
							<input type="radio" name="rating" id="rating-1" value="1"/>
							<label for="rating-1" class="fa fa-star"></label>
							<input type="radio" name="rating" id="rating-2" value="2"/>
							<label for="rating-2" class="fa fa-star"></label>
							<input type="radio" name="rating" id="rating-3" value="3"/>
							<label for="rating-3" class="fa fa-star"></label>
							<input type="radio" name="rating" id="rating-4" value="4"/>
							<label for="rating-4" class="fa fa-star"></label>
							<input type="radio" name="rating" id="rating-5" value="5"/>
							<label for="rating-5" class="fa fa-star"></label>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="col-md-6">
						<!-- Uplaod Photos -->
						<div class="add-review-photos margin-bottom-30">
							<div class="photoUpload">
							    <span><i class="sl sl-icon-arrow-up-circle"></i> Upload Photos</span>
							    <input type="file" class="upload" />
							</div>
						</div>
					</div>
				</div>
	
				<!-- Review Comment -->
				<form id="add-comment" class="add-comment">
					<fieldset>

						<div class="row">
							<div class="col-md-6">
								<label>Name:</label>
								<input type="text" value=""/>
							</div>
								
							<div class="col-md-6">
								<label>Email:</label>
								<input type="text" value=""/>
							</div>
						</div>

						<div>
							<label>Review:</label>
							<textarea cols="40" rows="3"></textarea>
						</div>

					</fieldset>

					<button class="button">Submit Review</button>
					<div class="clearfix"></div>
				</form>

			</div>
			<!-- Add Review Box / End -->


		</div>


		<!-- Sidebar
		================================================== -->
		<div class="col-lg-4 col-md-4 margin-top-75 sticky">

				
			<!-- Verified Badge -->
			<div class="verified-badge with-tip" data-tip-content="Listing has been verified and belongs the business owner or manager.">
				<i class="sl sl-icon-check"></i> Verified Listing
			</div>

			<!-- Book Now -->
			<div class="boxed-widget booking-widget margin-top-35">
				<h3><i class="fa fa-calendar-check-o "></i> Booking <!-- <div class="listing-price">$49 <i>/night</i></div> --></h3>
				<div class="row with-forms  margin-top-0">

					<!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
					<div class="col-lg-12">
						<input type="text" id="date-picker" placeholder="Date" readonly="readonly">
					</div>

					<!-- Panel Dropdown -->
					<div class="col-lg-12">
						<div class="panel-dropdown">
							<a href="#">Guests <span class="qtyTotal" name="qtyTotal">1</span></a>
							<div class="panel-dropdown-content">

								<!-- Quantity Buttons -->
								<div class="qtyButtons">
									<div class="qtyTitle">Adults</div>
									<input type="text" name="qtyInput" value="1">
								</div>

								<div class="qtyButtons">
									<div class="qtyTitle">Children</div>
									<input type="text" name="qtyInput" value="0">
								</div>

							</div>
						</div>
					</div>
					<!-- Panel Dropdown / End -->

				</div>
				
				<!-- Book Now -->
				<a href="pages-booking.html" class="button book-now fullwidth margin-top-5">Request To Book</a>
				
				<!-- Estimated Cost -->
				<div class="booking-estimated-cost">
					<strong>Total Cost</strong>
					<span>$49</span>
				</div>
			</div>
			<!-- Book Now / End -->

			<!-- Contact -->
			<div class="boxed-widget margin-top-35">
				<div class="hosted-by-title">
					<h4><span>Hosted by</span> <a href="pages-user-profile.html">Tom Perrin</a></h4>
					<a href="pages-user-profile.html" class="hosted-by-avatar"><img src="images/dashboard-avatar.jpg" alt=""></a>
				</div>
				<ul class="listing-details-sidebar">
					<li><i class="sl sl-icon-phone"></i> (123) 123-456</li>
					<!-- <li><i class="sl sl-icon-globe"></i> <a href="#">http://example.com</a></li> -->
					<li><i class="fa fa-envelope-o"></i> <a href="#"><span class="__cf_email__" data-cfemail="43372c2e03263b222e332f266d202c2e">[email&#160;protected]</span></a></li>
				</ul>

				<ul class="listing-details-sidebar social-profiles">
					<li><a href="#" class="facebook-profile"><i class="fa fa-facebook-square"></i> Facebook</a></li>
					<li><a href="#" class="twitter-profile"><i class="fa fa-twitter"></i> Twitter</a></li>
					<!-- <li><a href="#" class="gplus-profile"><i class="fa fa-google-plus"></i> Google Plus</a></li> -->
				</ul>

				<!-- Reply to review popup -->
				<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
					<div class="small-dialog-header">
						<h3>Send Message</h3>
					</div>
					<div class="message-reply margin-top-0">
						<textarea cols="40" rows="3" placeholder="Your message to Tom"></textarea>
						<button class="button">Send Message</button>
					</div>
				</div>

				<a href="#small-dialog" class="send-message-to-owner button popup-with-zoom-anim"><i class="sl sl-icon-envelope-open"></i> Send Message</a>
			</div>
			<!-- Contact / End-->


			<!-- Share / Like -->
			<div class="listing-share margin-top-40 margin-bottom-40 no-border">
				<button class="like-button"><span class="like-icon"></span> Bookmark this listing</button> 
				<span>159 people bookmarked this place</span>

					<!-- Share Buttons -->
					<ul class="share-buttons margin-top-40 margin-bottom-0">
						<li><a class="fb-share" href="#"><i class="fa fa-facebook"></i> Share</a></li>
						<li><a class="twitter-share" href="#"><i class="fa fa-twitter"></i> Tweet</a></li>
						<li><a class="gplus-share" href="#"><i class="fa fa-google-plus"></i> Share</a></li>
						<!-- <li><a class="pinterest-share" href="#"><i class="fa fa-pinterest-p"></i> Pin</a></li> -->
					</ul>
					<div class="clearfix"></div>
			</div>

		</div>
		<!-- Sidebar / End -->

	</div>
</div>



<?php include('footer.php') ?>