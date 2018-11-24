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
				<div class="col-md-7">
					<h2>Missed Payments</h2>
					<!-- Breadcrumbs -->
					
				</div>
				<div class="col-md-5">
					<div>
						<input class="search-field" type="text" placeholder="Search Missed Payments" value=""/>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			
			<!-- Listings -->
			<div class="col-lg-12 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>Total Missed Payments <span class="h-status red">4</span></h4>
					<table class="basic-table">
						<thead>		
							<tr>
								<th>Names</th>
								<th>Loan ID</th>
								<th>Due Date</th>
								<th>Amount</th>
								<th>Balance</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td data-label="Column 1"><a href="merchant-loan-details.php">Richard Illescas</a></td>
								<td data-Label="Column-2">123512</td>
								<td data-Label="Column-2">12-01-2018</td>
								<td data-label="Column 3">10,000.00</td>
								<td data-label="Column 4">5,000.00</td>
								<td data-label="Column 5"><span class="status red">Unpaid</span></td>
							</tr>
							<tr>
								<td data-label="Column 1">Joshua Paylaga</td>
								<td data-Label="Column-2">45112</td>
								<td data-Label="Column-2">12-01-2018</td>
								<td data-label="Column 3">10,000.00</td>
								<td data-label="Column 4">5,000.00</td>
								<td data-label="Column 5"><span class="status red">Unpaid</span></td>
							</tr>
							<tr>
								<td data-label="Column 1">Dale Sicat</td>
								<td data-Label="Column-2">000254</td>
								<td data-Label="Column-2">12-01-2018</td>
								<td data-label="Column 3">10,000.00</td>
								<td data-label="Column 4">5,000.00</td>
								<td data-label="Column 5"><span class="status red">Unpaid</span></td>
							</tr>
							<tr>
								<td data-label="Column 1">Dave Duenas</td>
								<td data-Label="Column-2">36412</td>
								<td data-Label="Column-2">12-01-2018</td>
								<td data-label="Column 3">10,000.00</td>
								<td data-label="Column 4">5,000.00</td>
								<td data-label="Column 5"><span class="status red">Unpaid</span></td>
							</tr>
							</tr>
						</tbody>
					</table>

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