<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>@yield('title', 'Dashboard')</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="{{ asset('themes/electro-master/css/bootstrap.min.css') }}"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="{{ asset('themes/electro-master/css/slick.css') }}"/>
 		<link type="text/css" rel="stylesheet" href="{{ asset('themes/electro-master/css/slick-theme.css') }}"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="{{ asset('themes/electro-master/css/nouislider.min.css') }}"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="{{ asset('themes/electro-master/css/font-awesome.min.css') }}">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="{{ asset('themes/electro-master/css/style.css') }}"/>

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="{{ asset('themes/electro-master/js/html5shiv.min.js') }}"></script>
 		  <script src="{{ asset('themes/electro-master/js/respond.min.js') }}"></script>
 		<![endif]-->

		<!-- TableDataTables -->
		<link href="{{ asset('plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />

    </head>
	<body>

		@include('admin.layouts.header')

		@include('admin.layouts.navigation')

		<!-- include breadcrumb -->

		<!-- include newsletter -->

		@yield('content')

		<!-- SECTION
		<div class="section">
			<!-- container
			<div class="container">
				<!-- row
				<div class="row">
				</div>
				<!-- /row
			</div>
			<!-- /container
		</div>
		<!-- /SECTION -->

		@include('admin.layouts.footer')

		<!-- jQuery Plugins -->

		<!--<script src="{{ asset('plugins/datatables/jquery-3.3.1.js') }}"></script>-->
		<script src="{{ asset('themes/electro-master/js/jquery.min.js') }}"></script>
		<script src="{{ asset('themes/electro-master/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('themes/electro-master/js/slick.min.js') }}"></script>
		<script src="{{ asset('themes/electro-master/js/nouislider.min.js') }}"></script>
		<script src="{{ asset('themes/electro-master/js/jquery.zoom.min.js') }}"></script>
		<script src="{{ asset('themes/electro-master/js/jquery.zoom.min.js') }}"></script>

		<script src="{{ asset('plugins/datatables/datatable.js') }}" type="text/javascript"></script>
		<script src="{{ asset('plugins/datatables/dataTables.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
		<script src="{{ asset('plugins/datatables/js/table.js') }}" type="text/javascript"></script>

		<script src="{{ asset('themes/electro-master/js/main.js') }}"></script>

	</body>
</html>
