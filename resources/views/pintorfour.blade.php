@extends('layouts.master')
@section('title', $title)
@section('frase', 'EL ARTE TIENE UN ENEMIGO QUE SE LLAMA IGNORANCIA')

@section('header')
    @parent
@stop

@section('navbar')
    @parent
@stop

@section('contenido')

    <div class="content-all">
        <div class="content-carrousel">
            <figure><img src="images/pintura16.jpg"></figure>
            <figure><img src="images/pintura17.jpg"></figure>
            <figure><img src="images/pintura18.jpg"></figure>
            <figure><img src="images/pintura19.jpg" ></figure>
            <figure><img src="images/pintura20.jpg" ></figure>

        </div>
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <a href="https://www.todocuadros.com.mx/pintores-famosos/dali/" ><img src="images/dalip.png" class="principal" alt="" title="Da click para mas informacion"></a>

    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Dato Interesante</div>
        <div class="card-body">
            <h5 class="card-title">{{$title}}</h5>
            <p class="card-text">{{$dato}}</p>
        </div>
    </div>
    <br> <br> <br> <br> <br> <br>
    <a href="{{route('pintorthree')}}"><img src="images/flechaizquierda.png" alt="" class="derecha" title="Da click para el anterior pintor"></a>
    <a href="{{route('pintorfive')}}"><img src="images/flechaderecha.png" alt="" class="izquierda" title="Da click para ir al otro pintor"></a>

@stop

@section('footer')
    @parent
@stop

