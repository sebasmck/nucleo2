<head>

		<title>@yield('title')</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Who will win the worldcup">
		<!-- END META -->
		

		<!-- Custom Theme files -->
		<link href="{{asset('css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
		<link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="all">   
		<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> <!-- font-awesome icons -->
		<!-- //Custom Theme files -->  
		<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" type="text/css" media="all">
		<link rel="stylesheet" href="{{asset('css/owl.theme.css')}}" type="text/css" media="all">

		<!-- web-fonts -->  
		<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
		<!-- //web-fonts -->


		<link rel="shortcut icon" href="{{asset('/img/favicon.ico')}}" type="image/vnd.microsoft.icon">

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>

		{{-- css\symetrixcss\validation --}}

		<link type="text/css" rel="stylesheet" href="{{asset('css/theme-default/bootstrap.css?1422792965')}}" />

		<link rel="stylesheet" type="text/css" href="{{asset('css/symetrixcss/popup.css')}}">
		

		<link type="text/css" rel="stylesheet" href="{{asset('css/theme-default/materialadmin.css?1425466319')}}" />
		
		<link type="text/css" rel="stylesheet" href="{{asset('css/theme-default/font-awesome.min.css?1422529194')}}" />
		
		<link type="text/css" rel="stylesheet" href="{{asset('css/theme-default/material-design-iconic-font.min.css?1421434286')}}" />
		
		<link type="text/css" rel="stylesheet" href="{{asset('css/theme-default/libs/rickshaw/rickshaw.css?1422792967')}}" />
		
		<link type="text/css" rel="stylesheet" href="{{asset('css/theme-default/libs/morris/morris.core.css?1420463396')}}" />

		<link type="text/css" rel="stylesheet" href="{{asset('css/theme-default/libs/DataTables/jquery.dataTables.css?1423553989')}}" />

		<link type="text/css" rel="stylesheet" href="{{asset('css/theme-default/libs/DataTables/extensions/dataTables.colVis.css?1423553990')}}" />

		<link type="text/css" rel="stylesheet" href="{{asset('css/theme-default/libs/DataTables/extensions/dataTables.tableTools.css?1423553990')}}" />

		<link type="text/css" rel="stylesheet" href="{{asset('css/datepicker3.css')}}" />

		<link type="text/css" rel="stylesheet" href="{{asset('css/pivot/pivot.css')}}" />

		<link type="text/css" rel="stylesheet" href="{{asset('css/theme-default/libs/dropzone/dropzone-theme.css?1424887864')}}" />
		
		<link type="text/css" rel="stylesheet" href="{{asset('css/styles.css')}}" />

		<link type="text/css" rel="stylesheet" href="{{asset('css/theme-default/libs/select2/select2.css?1424887856')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('css/theme-default/libs/nestable/nestable.css?1423393667')}}" />


		<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
		
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
		<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
		
		@include('toastr::alerts')


		@yield('addcss')


	</head>