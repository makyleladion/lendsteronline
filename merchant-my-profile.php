<?php include('header.php') ?>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fixed fullwidth dashboard">

	<?php include('merchant-header-nav.php') ?>

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<?php include('merchant-sidebar-nav.php') ?>

	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>My Profile</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>My Profile</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">

			<!-- Profile -->
			<div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4 class="gray">Profile Details</h4>
					<div class="dashboard-list-box-static">
						
						<!-- Avatar -->
						<div class="edit-profile-photo">
							<img src="images/user-avatar.jpg" alt="">
							<div class="change-photo-btn">
								<div class="photoUpload">
								    <span><i class="fa fa-upload"></i> Upload Photo</span>
								    <input type="file" class="upload" />
								</div>
							</div>
						</div>
	
						<!-- Details -->
						<div class="my-profile">

							<label>Your Name</label>
							<input value="Tom Perrin" type="text">

							<label>Phone</label>
							<input value="(123) 123-456" type="text">

							<label>Email</label>
							<input value="tom@example.com" type="text">

							<label>Notes</label>
							<textarea name="notes" id="notes" cols="30" rows="10">Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper</textarea>

							<label><i class="fa fa-twitter"></i> Twitter</label>
							<input placeholder="https://www.twitter.com/" type="text">

							<label><i class="fa fa-facebook-square"></i> Facebook</label>
							<input placeholder="https://www.facebook.com/" type="text">

							<label><i class="fa fa-google-plus"></i> Google+</label>
							<input placeholder="https://www.google.com/" type="text">
						</div>
	
						<button class="button margin-top-15">Save Changes</button>

					</div>
				</div>
			</div>

			<!-- Change Password -->
			<div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4 class="gray">Change Password</h4>
					<div class="dashboard-list-box-static">

						<!-- Change Password -->
						<div class="my-profile">
							<label class="margin-top-0">Current Password</label>
							<input type="password">

							<label>New Password</label>
							<input type="password">

							<label>Confirm New Password</label>
							<input type="password">

							<button class="button margin-top-15">Change Password</button>
						</div>

					</div>
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
<script type="text/javascript" src="assets/scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="assets/scripts/mmenu.min.js"></script>
<script type="text/javascript" src="assets/scripts/chosen.min.js"></script>
<script type="text/javascript" src="assets/scripts/slick.min.js"></script>
<script type="text/javascript" src="assets/scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="assets/scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="assets/scripts/waypoints.min.js"></script>
<script type="text/javascript" src="assets/scripts/counterup.min.js"></script>
<script type="text/javascript" src="assets/scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/scripts/tooltips.min.js"></script>
<script type="text/javascript" src="assets/scripts/custom.js"></script>


</body>

</html>