@extends('layouts.master')

@section('title', $title)
@section('frase', 'EL ARTE ES SOBRE TODO UN ESTADO DEL ALMA')

@section('header')
    @parent
@stop

@section('navbar')
    @parent
@stop

@section('contenido')
    <div class="content-all">
        <div class="content-carrousel">
            <figure><img src="images/pintura1.jpg"></figure>
            <figure><img src="images/pintura2.jpg"></figure>
            <figure><img src="images/pintura3.jpg"></figure>
            <figure><img src="images/pintura4.jpg"></figure>
            <figure><img src="images/pintura5.jpg"></figure>

        </div>
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br   > <br> <br> <br> <br> <br> <br> <br> <br>
    <a href="https://www.todocuadros.com.mx/pintores-famosos/van-gogh/" ><img src="images/vincentp.png" class="principal" alt="" title="Da click para mas informacion"></a>
    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Dato Interesante</div>
        <div class="card-body">
            <h5 class="card-title">{{$title}}</h5>
            <p class="card-text">{{$dato}}</p>
        </div>
    </div>
    <br> <br> <br> <br> <br> <br>
    <a href="{{action('PruebaController@login')}}"><img src="images/flechaizquierda.png" alt="" class="derecha" title="Da click para ir al menu"></a>
    <a href="{{route('pintortwo')}}"><img src="images/flechaderecha.png" alt="" class="izquierda" title="Da click para ir al otro pintor"></a>

@stop

@section('footer')
    @parent
@stop

