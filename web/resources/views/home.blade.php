@extends('partials.layout')

@section('content')



<div class="header">
                <div class="container">  
                    <div class="header-mdl agileits-logo"><!-- header-two --> 
                        <h1><a href="index.html" style="color: black;">Bienvenido {{Auth()->user()->name}}</a></h1> 
                    </div>


                    <div class="header-nav"><!-- header-three -->   
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button> 
                            </div>
                            <!-- top-nav -->

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav cl-effect-16">
                                    <li><a href="" style="color: black;" data-hover="Admin">Admin</a></li>

                                    <li><a href="{{url('/selecciones')}}" style="color: black;" data-hover="Equipos">Equipos</a></li> 
                                    
                                    <li><a href="contact.html" style="color: black;" data-hover="Partidos">Partidos</a></li>
                                </ul>  
                                <div class="clearfix"> </div>   
                            </div>
                        </nav>    
                    </div>  
                </div>  
            </div>  


@endsection
