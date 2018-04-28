@extends('partials.layout')

@section('content')


<div class="header">
    <div class="container">  
        <div class="header-mdl agileits-logo"><!-- header-two --> 
            <h1><a href="index.html" style="color: black;">The Winner Team</a></h1> 
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
                        {{-- <li><a href="{{route('selecciones.index')}}" style="color: black;" data-hover="Admin">Admin</a></li> --}}
                        <li><a href="{{route('selecciones')}}" style="color: black; text-decoration: underline;" class="active" data-hover="Selecciones">Selecciones</a></li> 
                        <li><a href="{{route('partidos')}}" style="color: black;" data-hover="Partidos">Partidos</a></li>
                    </ul>  
                    <div class="clearfix"> </div>   
                </div>
            </nav>    
        </div>  
    </div>  
</div> 

<br>


@if(empty($historial->Id_Historial))

<center>
    <div style="margin-right: 35px;" class="crear">
        <a class="agile-icon" href="{{route('crearSelecciones')}}"><i class="fa fa-plus"></i> Añadir Historial Selección</a>
    </div>    
</center>

@else

    <center>
    <div style="margin-right: 35px;" class="crear">
            <a class="agile-icon" href=""><i class="fa fa-plus"></i> Modificar Historial</a>
        </div>
    </center>

@endif

@if(!empty($historial->Id_Historial))

    <div style="margin-top:100px;" class="container">

        <div class="col-md-6">
            <div class="bs-docs-example">
                <b>Partidos Ganados:{{$historial->PartidosGanados_Historial}} </b> 
            </div>

            <div class="bs-docs-example"> 
                <b>Partidos Jugados: {{$historial->PartidosJugados_Historial}} </b>
            </div>
        </div>

        <div class="col-md-6">
            <div class="bs-docs-example">
                <b>Partidos Empatados: {{$historial->PartidosEmpatados_Historial}}</b>
            </div>

            <div class="bs-docs-example">
                <b>Partidos Perdidos: {{$historial->PartidosPerdidos_Historial}} </b>
            </div>
        </div>

    </div>

@else
<div style="margin-top:100px;" class="container">
    <div class="alert alert-danger" role="alert">
    <center>  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="sr-only">Error:</span> No existe Información </center>
    </div>
</div>
@endif


@endsection


