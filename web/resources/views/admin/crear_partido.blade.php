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
                        <li><a href="{{route('selecciones')}}" style="color: black;" data-hover="Selecciones">Selecciones</a></li> 
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
        <b>Crear Un Nuevo Partido</b>
    </div>    
</center>

<br><br>

<div class="container">

<div class="bs-docs-example">
    <div class="col-md-8 contact-w3ls">

                    <form action="/crearPartidop" method="POST">

                    <div style="margin-left: 50%;" class="col-md-6 col-sm-5 agileits-w3layouts">
                        
                        {{ csrf_field() }}

                        <div class="f-control"> 
                            <label class="header1">Fecha <span>:</span></label>
                            <input type="text" name="date" id="datepicker" required="">
                        </div>
                        
                        <div class="f-control"> 
                            <label class="header1" >Primer Equipo <span>:</span></label><br/>

                            <select name="equipo1" style="display: block; width: 100%; height: 45.8px">
                                @foreach($nombres as $data)
                                <option value="{{$data->Nombre_Seleccion}}">{{$data->Nombre_Seleccion}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br/>
                        
                        <div class="f-control">
                            <label class="header1">Goles Primer Equipo<span>:</span></label>
                            <input type="text" name="score1"  required="">
                        </div>

                         <div class="f-control"> 
                            <label class="header1">Segundo Equipo <span>:</span></label><br/>
                            <select name="equipo2" style="display: block; width: 100%; height: 45.8px">
                                @foreach($nombres as $data)
                                <option value="{{$data->Nombre_Seleccion}}">{{$data->Nombre_Seleccion}}</option>
                                @endforeach
                            </select>
                        </div>

                        <br/>
                        
                        <div class="f-control">
                            <label class="header1">Goles Segundo Equipo<span>:</span></label>
                            <input type="text" name="score2"  required="">
                        </div>  

                        <div class="clearfix"> </div> 

                        <input type="submit" value="Enviar">

                    </div> 

                </form>

                </div>

</div>

</div>


@endsection


