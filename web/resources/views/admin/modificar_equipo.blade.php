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
                        <li><a href="{{route('selecciones')}}" style="color: black; text-decoration: underline;" data-hover="Selecciones">Selecciones</a></li> 
                        <li><a href="{{route('partidos')}}" style="color: black;" data-hover="Partidos">Partidos</a></li>
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
        <b> Modificar selección </b> 
    </div>    
</center>

<br><br>

<div class="container">

<div class="bs-docs-example">
    <div class="col-md-8 contact-w3ls">
                <form action="/modificarSeleccion/{{$seleccion->Id_Seleccion}}" method="POST">
                    
                    {{ csrf_field() }}



                    <div style="margin-left: 50%;" class="col-md-6 col-sm-5 agileits-w3layouts">
                        <div class="f-control"> 
                            <label class="header1">Nombre <span>:</span></label>
                            <input type="text" name="Nombre_Seleccion" value="{{$seleccion->Nombre_Seleccion}}" required="">
                        </div>
                        <div class="f-control"> 
                            <label class="header1">Imagen <span>:</span></label>
                            <input type="text" name="Imagen_Seleccion" value="{{$seleccion->Imagen_Seleccion}}"  required="">
                        </div>
                        <div class="f-control">
                            <label class="header1"><span>Puntos Seleccion</span></label>
                            <input type="text" name="Puntos_Seleccion" value="{{$seleccion->Puntos_Seleccion}}" required="">
                        </div>  
                        <div class="clearfix"> </div> 
                        <input type="submit" value="Send">
                    </div> 
                </form>
    </div>

</div>

</div>


@endsection


