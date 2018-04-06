<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('partials.head')

<body class="menubar-hoverable header-fixed ">
	<a class="pull-right" style="color: red; margin-right: 35px; margin-top: 35px;" href="{{auth()->logout()}}">Logout</a>
@yield('content')

@include('partials.footer')


</body>

</html>