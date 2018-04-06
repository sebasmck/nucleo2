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
                        <li><a href="contact.html" style="color: black;" data-hover="Partidos">Partidos</a></li>
                    </ul>  
                    <div class="clearfix"> </div>   
                </div>
            </nav>    
        </div>  
    </div>  
</div> 

<br>

<center>
    <div style="margin-right: 35px;" class="crear">
        <a class="agile-icon" href="{{route('crearSelecciones')}}"><i class="fa fa-plus"></i> Crear Selección</a>
    </div>    
</center>

<div class="container">

<div class="bs-docs-example">
    <table class="table">
        <thead>
            <tr>
                <th>Equipo</th>
                <th>Partidos Ganados</th>
                <th>Jugadores</th>
                <th>Historial</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

            @foreach($selecciones as $seleccion)
            <tr>
                <td>{{$seleccion->Nombre_Seleccion}}</td>
                <td>{{$seleccion->Imagen_Seleccion}}</td>
                <td>
                    <div class="col-sm-1">
                        <a href="/selecciones/{{$seleccion->Id_Seleccion}}/jugadores" class="btn btn-default btn-group-xs"><span class="fa fa-users"></span></a>
                    </div>
                </td>
                <td>
                    <div class="col-sm-1">
                        <a href="/selecciones/{{$seleccion->Id_Seleccion}}/historial" class="btn btn-default btn-group-xs"><span class="fa fa-users"></span></a>
                    </div>
                </td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>


@endsection


