@extends('layouts.master')
@section('title', $title)
@section('frase', 'EL ARTE ES LA UNICA FORMA DE ESCAPAR, SIN SALIR DE CASA')

@section('header')
    @parent
@stop

@section('navbar')
    @parent
@stop

@section('contenido')
    <div class="content-all">
        <div class="content-carrousel">
            <figure><img src="images/pintura6.jpg"></figure>
            <figure><img src="images/pintura7.jpg"></figure>
            <figure><img src="images/pintura8.jpg"></figure>
            <figure><img src="images/pintura9.jpg"></figure>
            <figure><img src="images/pintura10.jpg"></figure>

        </div>
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <a href="https://www.todocuadros.com.mx/pintores-famosos/picasso/" ><img src="images/picassop.png" class="principal" alt="" title="Da click para mas informacion"></a>
    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Dato Interesante</div>
        <div class="card-body">
            <h5 class="card-title">{{$title}}</h5>
            <p class="card-text">{{$dato}}</p>
        </div>
    </div>
    <br> <br> <br> <br> <br> <br>
    <a href="{{route('pintorone')}}"><img src="images/flechaizquierda.png" alt="" class="derecha" title="Da click para el anterior pintor"></a>
    <a href="{{route('pintorthree')}}"><img src="images/flechaderecha.png" alt="" class="izquierda" title="Da click para ir al otro pintor"></a>

@stop

@section('footer')
    @parent
@stop

