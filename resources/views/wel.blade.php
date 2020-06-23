@include( 'layout.head' )

<body>

	<!--	loading-->
	<!-- <center class="loader-container animated zoomInUp">
		<div class="cssload-wrap ">
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
		</div>
	</center> -->
	<!--	loading-->
	<div id="loadingScreen">
		<script type="text/javascript">
			setTimeout(function() {
				$('#loadingScreen').fadeOut('fast');
			}, 10000);
		</script>
	</div>
	<header> </header>
	<div class="container-fluid top display-none">
		<section>
			<div class="row top-container">
				<div class="col-6 download-container">
					<h2>Pay your County Fees Conviniently</h2>
					<p>Download the Revenue sure app and start paying for your county fees directly from your phone</p>
				</div>
			</div>
		</section>
	</div>
	<main role="main" class="display-none animated">
		<div class="container-fluid main-container"> <img src="img/logo/main-img2.png" class="county_img animated">
			<h2>Nairobi County Government Revenue Streams Portals</h2>
			<h4><span>You are Logged in as: <strong> {{ Session::get('resource')[0]['username'] }}</strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>
			<!-- <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" style="color:white:">
                <i class="ti-power-off"></i>Logout</a> -->
        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form></span></h4>
			<div class="container">
				<div class="row revenue-src-container">
					<div class="col-lg-3 col-md-4 col-sm-2 revenue-container parking-btn animated">
						<a href="http://102.133.165.199/revenuesuredashboard" target="_blank">
							<div class="icon-container"> <img src="img/revenue sure icons/star.svg"> </div>
							<h3>Executive Dashboard</h3>
							<p>Pay for your daily parking fee as well as seasonal parking and so much more</p>
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-2 revenue-container parking-btn animated">
						<a href="https://epayments.nairobi.go.ke" target="_blank" >
							<div class="icon-container"> <img src="img/revenue sure icons/self_service_portal.svg"> </div>
							<h3>Self Service Portal</h3>
							<p>Pay for your daily parking fee as well as seasonal parking and so much more</p>
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-2 revenue-container parking-btn animated">
						<a href="http://102.133.165.199/parking/" target="_blank">
							<div class="icon-container"> <img src="img/icons/black icons/parking fees.png"> </div>
							<h3>Parking Management Dashboard</h3>
							<p>Pay for your daily parking fee as well as seasonal parking and so much more</p>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-2 revenue-container animated">
						<a href="http://102.133.165.199/nccpermits/login" target="_blank">
							<div class="icon-container"> <img src="img/icons/black icons/business.png"> </div>
							<h3>Unified Business Permit Dashboard</h3>
							<p>Pay for your business license and register your business conviniently and efficiently</p>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-2 revenue-container animated">
						<a href="http://102.133.165.199/landrates/login" target="_blank">
							<div class="icon-container"> <img src="img/icons/black icons/landrate.png"> </div>
							<h3>Land Rates Dashboard</h3>
							<p>Pay for your business license and register your business conviniently and efficiently</p>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-2 revenue-container animated">
						<a href="http://102.133.165.199/houserents/login" target="_blank">
							<div class="icon-container"> <img src="img/icons/black icons/rent.png"> </div>
							<h3>House Rents & Market Stalls</h3>
							<p>Check for your rent status plus pay for your rent conviniently</p>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-2 revenue-container animated">
						<a href="http://102.133.165.199/e-construction/login" target="_blank">
							<div class="icon-container"> <img src="img/revenue sure icons/E_construction.svg"> </div>
							<h3>E-contruction Dashboard</h3>
							<p>Register your bill bord ads plus any other form of advertisment that the county government should be aware of</p>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-2 revenue-container animated">
						<a href="http://102.133.165.199/adverts/login" target="_blank">
							<div class="icon-container"> <img src="img/revenue sure icons/advertisments.svg"> </div>
							<h3>Advertisments Dashboard</h3>
							<p>Register your bill bord ads plus any other form of advertisment that the county government should be aware of</p>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-2 revenue-container animated">
						<a href="http://102.133.165.199/miscellaneous/login" target="_blank">
							<div class="icon-container"> <img src="img/icons/black icons/miss.png"> </div>
							<h3>Miscellaneous Dashboard</h3>
							<p>Pay for your business license and register your business conviniently and efficiently</p>
						</a>
					</div>

				<!-- 	<div class="col-lg-3 col-md-4 col-sm-2 revenue-container animated">
						<a href="http://102.133.166.14:3000/" target="_blank">
							<div class="icon-container"> <img src="img/revenue sure icons/bill.svg"> </div>
							<h3>Biller Portal</h3>
							<p>Register your construction projects at ease and conviniently</p>
						</a>
					</div> -->

					<!-- <div class="col-lg-3 col-md-4 col-sm-2 revenue-container animated">
						<a href="#" target="_blank" >
							<div class="icon-container"> <img src="img/revenue sure icons/cash.png"> </div>
							<h3>Cash Office Dashboard</h3>
							<p>Register your liquor store plus gain access to your receipts</p>
						</a>
					</div> -->
					<!-- <div class="col-lg-3 col-md-4 col-sm-2 revenue-container animated">
						<a href="http://102.133.166.14:4000/" target="_blank" >
							<div class="icon-container"> <img src="img/revenue sure icons/cash.png"> </div>
							<h3>Cash Office Portal</h3>
							<p>Register your liquor store plus gain access to your receipts</p>
						</a>
					</div>
					 -->
					
					<!--		working on it-->
				</div>
			</div>
		</div>
	</main>
	@include('layout.scripts')







@include( 'layout.head' )

<body>

	<!--	loading-->
	<!-- <center class="loader-container animated zoomInUp">
		<div class="cssload-wrap ">
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
			<div class="cssload-circle"></div>
		</div>
	</center> -->
	<!--	loading-->
	<div id="loadingScreen">
		<script type="text/javascript">
			setTimeout(function() {
				$('#loadingScreen').fadeOut('fast');
			}, 10000);
		</script>
	</div>
	<header> </header>
	<div class="container-fluid top display-none">
		<section>
			<div class="row top-container">
				<div class="col-6 download-container">
					<h2>Pay your County Fees Conviniently</h2>
					<p>Download the Revenue sure app and start paying for your county fees directly from your phone</p>
				</div>
			</div>
		</section>
	</div>
	<main role="main" class="display-none animated">
		<div class="container-fluid main-container"> <img src="img/logo/main-img2.png" class="county_img animated">
			<h2>Nairobi County Government Revenue Streams Portals</h2>
			<h4><span>You are Logged in as: <strong> {{ Session::get('resource')[0]['username'] }}</strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>
			<!-- <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" style="color:white:">
                <i class="ti-power-off"></i>Logout</a> -->
        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form></span></h4>
			<div class="container">
				<div class="row revenue-src-container">
					<div class="col-lg-3 col-md-4 col-sm-2 revenue-container parking-btn animated">
						<a href="https://www.revenuesure.co.ke/revenuesuredashboard/" target="_blank">
							<div class="icon-container"> <img src="img/revenue sure icons/star.svg"> </div>
							<h3>Executive Dashboard</h3>
							<p>Pay for your daily parking fee as well as seasonal parking and so much more</p>
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-2 revenue-container parking-btn animated">
						<a href="https://epayments.nairobi.go.ke" target="_blank" >
							<div class="icon-container"> <img src="img/revenue sure icons/self_service_portal.svg"> </div>
							<h3>Self Service Portal</h3>
							<p>Pay for your daily parking fee as well as seasonal parking and so much more</p>
						</a>
					</div>

					<div class="col-lg-3 col-md-4 col-sm-2 revenue-container parking-btn animated">
						<a href="https://www.revenuesure.co.ke/nccparking/" target="_blank">
							<div class="icon-container"> <img src="img/icons/black icons/parking fees.png"> </div>
							<h3>Parking Management Dashboard</h3>
							<p>Pay for your daily parking fee as well as seasonal parking and so much more</p>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-2 revenue-container animated">
						<a href="https://www.revenuesure.co.ke/nccpermits" target="_blank">
							<div class="icon-container"> <img src="img/icons/black icons/business.png"> </div>
							<h3>Unified Business Permit Dashboard</h3>
							<p>Pay for your business license and register your business conviniently and efficiently</p>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-2 revenue-container animated">
						<a href="https://www.revenuesure.co.ke/landrates/login" target="_blank">
							<div class="icon-container"> <img src="img/icons/black icons/landrate.png"> </div>
							<h3>Land Rates Dashboard</h3>
							<p>Pay for your business license and register your business conviniently and efficiently</p>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-2 revenue-container animated">
						<a href="https://www.revenuesure.co.ke/houserents/login" target="_blank">
							<div class="icon-container"> <img src="img/icons/black icons/rent.png"> </div>
							<h3>House Rents & Market Stalls</h3>
							<p>Check for your rent status plus pay for your rent conviniently</p>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-2 revenue-container animated">
						<a href="https://www.revenuesure.co.ke/e-construction/login" target="_blank">
							<div class="icon-container"> <img src="img/revenue sure icons/E_construction.svg"> </div>
							<h3>E-contruction Dashboard</h3>
							<p>Register your bill bord ads plus any other form of advertisment that the county government should be aware of</p>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-2 revenue-container animated">
						<a href="https://www.revenuesure.co.ke/adverts/login" target="_blank">
							<div class="icon-container"> <img src="img/revenue sure icons/advertisments.svg"> </div>
							<h3>Advertisments Dashboard</h3>
							<p>Register your bill bord ads plus any other form of advertisment that the county government should be aware of</p>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-2 revenue-container animated">
						<a href="https://www.revenuesure.co.ke/miscellaneous/login" target="_blank">
							<div class="icon-container"> <img src="img/icons/black icons/miss.png"> </div>
							<h3>Miscellaneous Dashboard</h3>
							<p>Pay for your business license and register your business conviniently and efficiently</p>
						</a>
					</div>

					<!-- <div class="col-lg-3 col-md-4 col-sm-2 revenue-container animated">
						<a href="http://102.133.166.14:3000/" target="_blank">
							<div class="icon-container"> <img src="img/revenue sure icons/bill.svg"> </div>
							<h3>Biller Portal</h3>
							<p>Register your construction projects at ease and conviniently</p>
						</a>
					</div>
 -->
					<!-- <div class="col-lg-3 col-md-4 col-sm-2 revenue-container animated">
						<a href="https://www.revenuesure.co.ke/cashoffice" target="_blank" >
							<div class="icon-container"> <img src="img/revenue sure icons/cash.png"> </div>
							<h3>Cash Office Dashboard</h3>
							<p>Register your liquor store plus gain access to your receipts</p>
						</a>
					</div> -->
					<!-- <div class="col-lg-3 col-md-4 col-sm-2 revenue-container animated">
						<a href="http://102.133.166.14:4000/" target="_blank" >
							<div class="icon-container"> <img src="img/revenue sure icons/cash.png"> </div>
							<h3>Cash Office Portal</h3>
							<p>Register your liquor store plus gain access to your receipts</p>
						</a>
					</div>
					 -->
					
					<!--		working on it-->
				</div>
			</div>
		</div>
	</main>
	@include('layout.scripts')
