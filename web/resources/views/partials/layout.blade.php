<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('partials.head')

<body class="menubar-hoverable header-fixed ">
	
@yield('content')

@include('partials.footer')


</body>

</html>