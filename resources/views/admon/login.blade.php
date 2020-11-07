@extends('layouts.mastertwo')
@section('frase', 'INGRESA POR FAVOR TU USUARIO Y CONTRASEÑA')
@section('title', 'login')

@section('header')
    @parent
    @stop

@section('contenido')
    <form action="{{action('PruebaController@validarLogin')}}" method="POST">
        {{csrf_field()}}
        <label for="user">Usuario</label>
        <input type="text" name="user">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password">
        <br>
        <label for="key">Key</label>
        <input type="text" name="key">
        <br>
        <input type="submit" value="submit">
    </form>
    @stop

@section('footer')
    @parent
    @stop
