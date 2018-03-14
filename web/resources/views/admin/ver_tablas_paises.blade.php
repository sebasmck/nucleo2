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
                        <li><a href="{{route('paises.index')}}" style="color: black;" data-hover="Admin">Admin</a></li>
                        <li><a href="" style="color: black;" data-hover="Equipos">Equipos</a></li> 
                        <li><a href="contact.html" style="color: black;" data-hover="Partidos">Partidos</a></li>
                    </ul>  
                    <div class="clearfix"> </div>   
                </div>
            </nav>    
        </div>  
    </div>  
</div> 

<br>

<div class="container">

<div class="bs-docs-example">
    <table class="table">
        <thead>
            <tr>
                <th>Equipo</th>
                <th>Partidos Ganados</th>
                <th>Jugadores</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

            @foreach($paises as $pais)
            <tr>
                <td>{{$pais->Nombre}}</td>
                <td>{{$pais->PartidosGanados}}</td>
                <td>
                    <div class="col-sm-1">
                        <a href="{{route('jugadores.show', $pais->IdPais) }}" class="btn btn-default btn-group-xs"><span class="fa fa-users"></span></a>
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


