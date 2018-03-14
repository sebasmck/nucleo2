<!DOCTYPE html>
<html lang="en">

@include('partials.head')

    <body class="menubar-hoverable header-fixed ">
		
		<a class="pull-right" style="color: red;" href="{{auth()->logout()}}">Logout</a>
	

    </body>

@include('partials.footer')    

</html>
