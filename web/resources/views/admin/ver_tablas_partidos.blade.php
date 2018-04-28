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
                        <li><a href="{{route('selecciones')}}" style="color: black;" class="active" data-hover="Selecciones">Selecciones</a></li> 
                        <li><a href="{{route('partidos')}}" style="color: black; text-decoration: underline;" data-hover="Partidos">Partidos</a></li>
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
        <a class="agile-icon" href="{{route('crearPartido')}}"><i class="fa fa-plus"></i> Crear partido</a>
    </div>    
</center>

<div class="container">

<div class="bs-docs-example">
    <table class="table text-center">
        <thead >
            <tr>
                <th class="text-center">Fecha partido</th>
                <th class="text-center">Primer equipo</th>
                <th class="text-center">Marcador</th>
                <th class="text-center">Segundo equipo</th>
                <th class="text-center">Accion</th>
            </tr>
        </thead>
        <tbody>

            @foreach($partidos as $partido)
            <tr>
                <td>{{$partido->Fecha_Partido}}</td>
                <td>{{$partido->Equipo_1}}</td>
                <td>{{$partido->Goles_1}} - {{$partido->Goles_2}}</td>
                <td>{{$partido->Equipo_2}}</td>
                <td>
                    <div class="col-sm-6">
                        <a href="/modificarPartido/{{$partido->Id_Partido}}" class="btn btn-default btn-group-xs"><span class="fa fa-cogs"></span></a>
                    </div>
                    
                    <div class="col-sm-6">
                        <a href="/eliminarPartido/{{$partido->Id_Partido}}" class="btn btn-default btn-group-xs"><span class="fa fa-trash"></span></a>
                    </div>                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>


@endsection




