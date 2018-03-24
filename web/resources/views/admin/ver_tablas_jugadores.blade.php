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
        <a class="agile-icon" href="/selecciones/{{$Id_Seleccion}}/createJugador"><i class="fa fa-plus"></i> Crear Jugador</a>
    </div>    

    
</center>

<div class="container">

<div class="bs-docs-example">
    <table class="table">
    @if(!empty($jugadores))
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Puntaje</th>
                <th>Foto</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        
            @foreach($jugadores as $jugador)
                <tr>
                    <td>{{$jugador->Nombre_Jugador}}</td>
                    <td>{{$jugador->PuntajeGeneral_Jugador}}</td>
                    <td>{{$jugador->Foto_Jugador}}</td>
                    <td>Borrar/Editar</td>
                </tr>
            @endforeach
        
            @else
            <div style="margin-top:100px;" class="container">
                    <div class="alert alert-danger" role="alert">
                    <center>  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="sr-only">Error:</span> No existe Información </center>
                    </div>
                </div>

            @endif
        </tbody>
    </table>
</div>

</div>


@endsection


