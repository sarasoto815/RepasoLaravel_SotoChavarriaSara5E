@extends('layouts.master')
@section('title', $title)
@section('frase', 'EL ARTE LIMPIA DEL ALMA EL POLVO DE LA VIDA COTIDIANA')

@section('header')
    @parent
@stop

@section('navbar')
    @parent
@stop

@section('contenido')

    <div class="content-all">
        <div class="content-carrousel">
            <figure><img src="images/pintura21.jpg"></figure>
            <figure><img src="images/pintura22.jpg"></figure>
            <figure><img src="images/pintura23.jpg"></figure>
            <figure><img src="images/pintura24.jpg"></figure>
            <figure><img src="images/pintura25.jpg"></figure>

        </div>
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <a href="https://www.todocuadros.com.mx/pintores-famosos/velazquez/" ><img src="images/diegop.png" class="principal" alt="" title="Da click para mas informacion"></a>
    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Dato Interesante</div>
        <div class="card-body">
            <h5 class="card-title">{{$title}}</h5>
            <p class="card-text">{{$dato}}</p>
        </div>
    </div>
    <br> <br> <br> <br> <br> <br>
    <a href="{{route('pintorfour')}}"><img src="images/flechaizquierda.png" alt="" class="derecha" title="Da click para el anterior pintor"></a>

@stop

@section('footer')
    @parent
@stop

