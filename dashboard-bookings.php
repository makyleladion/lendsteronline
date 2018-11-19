<?php include('header.php') ?>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fixed fullwidth dashboard">

	<?php include('dashboard-header-nav.php') ?>

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<?php include('dashboard-sidebar-nav.php') ?>

	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Bookings</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Bookings</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			
			<!-- Listings -->
			<div class="col-lg-12 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					
					<!-- Booking Requests Filters  -->
					<div class="booking-requests-filter">

						<!-- Sort by -->
						<div class="sort-by">
							<div class="sort-by-select">
								<select data-placeholder="Default order" class="chosen-select-no-single">
									<option>All Listings</option>	
									<option>Burger House</option>
									<option>Tom's Restaurant</option>
									<option>Hotel Govendor</option>
								</select>
							</div>
						</div>

						<!-- Date Range -->
						<div id="booking-date-range">
						    <span></span>
						</div>
					</div>

					<!-- Reply to review popup -->
					<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
						<div class="small-dialog-header">
							<h3>Send Message</h3>
						</div>
						<div class="message-reply margin-top-0">
							<textarea cols="40" rows="3" placeholder="Your Message to Kathy"></textarea>
							<button class="button">Send</button>
						</div>
					</div>

					<h4>Booking Requests</h4>
					<ul>

						<li class="pending-booking">
							<div class="list-box-listing bookings">
								<div class="list-box-listing-img"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=120" alt=""></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3>Sunny and Modern Apartment <span class="booking-status pending">Pending</span><span class="booking-status unpaid">Unpaid</span></h3>

										<div class="inner-booking-list">
											<h5>Booking Date:</h5>
											<ul class="booking-list">
												<li class="highlighted">20.08.2018 - 24.08.2018</li>
											</ul>
										</div>
													
										<div class="inner-booking-list">
											<h5>Booking Details:</h5>
											<ul class="booking-list">
												<li class="highlighted">2 Adults</li>
											</ul>
										</div>		
													
										<div class="inner-booking-list">
											<h5>Price:</h5>
											<ul class="booking-list">
												<li class="highlighted">$147</li>
											</ul>
										</div>		

										<div class="inner-booking-list">
											<h5>Client:</h5>
											<ul class="booking-list">
												<li>John Smith</li>
												<li><a href="http://www.vasterad.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="741e1b1c1a34110c15190418115a171b19">[email&#160;protected]</a></li>
												<li>123-456-789</li>
											</ul>
										</div>

										<a href="#small-dialog" class="rate-review popup-with-zoom-anim"><i class="sl sl-icon-envelope-open"></i> Send Message</a>

									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray reject"><i class="sl sl-icon-close"></i> Reject</a>
								<a href="#" class="button gray approve"><i class="sl sl-icon-check"></i> Approve</a>
							</div>
						</li>

						<li class="approved-booking">
							<div class="list-box-listing bookings">
								<div class="list-box-listing-img"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=120" alt=""></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3>Burger House <span class="booking-status">Approved</span></h3>

										<div class="inner-booking-list">
											<h5>Booking Date:</h5>
											<ul class="booking-list">
												<li class="highlighted">10.12.2017 at 12:30 pm - 13:30 pm</li>
											</ul>
										</div>
													
										<div class="inner-booking-list">
											<h5>Booking Details:</h5>
											<ul class="booking-list">
												<li class="highlighted">2 Adults, 2 Children</li>
											</ul>
										</div>		

										<div class="inner-booking-list">
											<h5>Client:</h5>
											<ul class="booking-list">
												<li>Kathy Brown</li>
												<li><a href="http://www.vasterad.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="305b51445849705548515d405c551e535f5d">[email&#160;protected]</a></li>
												<li>123-456-789</li>
											</ul>
										</div>

										<a href="#small-dialog" class="rate-review popup-with-zoom-anim"><i class="sl sl-icon-envelope-open"></i> Send Message</a>

									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray reject"><i class="sl sl-icon-close"></i> Cancel</a>
							</div>
						</li>

						<li class="canceled-booking">
							<div class="list-box-listing bookings">
								<div class="list-box-listing-img"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=120" alt=""></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3>Tom's Restaurant <span class="booking-status">Canceled</span></h3>

										<div class="inner-booking-list">
											<h5>Booking Date:</h5>
											<ul class="booking-list">
												<li class="highlighted">21.10.2017 at 9:30 am - 10:30 am</li>
											</ul>
										</div>
													
										<div class="inner-booking-list">
											<h5>Booking Details:</h5>
											<ul class="booking-list">
												<li class="highlighted">2 Adults</li>
											</ul>
										</div>		

										<div class="inner-booking-list">
											<h5>Client:</h5>
											<ul class="booking-list">
												<li>Kathy Brown</li>
												<li><a href="http://www.vasterad.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2f444e5b47566f4a574e425f434a014c4042">[email&#160;protected]</a></li>
												<li>123-456-789</li>
											</ul>
										</div>

									</div>
								</div>
							</div>
						</li>
						
					</ul>
				</div>
			</div>


			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">© 2018 Lendster Online. All Rights Reserved.</div>
			</div>
		</div>

	</div>
	<!-- Content / End -->


</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>

<!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
<script src="scripts/moment.min.js"></script>
<script src="scripts/daterangepicker.js"></script>

<script>
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#booking-date-range span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    cb(start, end);
    $('#booking-date-range').daterangepicker({
    	"opens": "left",
	    "autoUpdateInput": false,
	    "alwaysShowCalendars": true,
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);

});

// Calendar animation and visual settings
$('#booking-date-range').on('show.daterangepicker', function(ev, picker) {
	$('.daterangepicker').addClass('calendar-visible calendar-animated bordered-style');
	$('.daterangepicker').removeClass('calendar-hidden');
});
$('#booking-date-range').on('hide.daterangepicker', function(ev, picker) {
	$('.daterangepicker').removeClass('calendar-visible');
	$('.daterangepicker').addClass('calendar-hidden');
});
</script>


</body>

<!-- Mirrored from www.vasterad.com/themes/listeo_latest/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Nov 2018 03:43:53 GMT -->
</html>