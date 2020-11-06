<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    //


public function validarLogin(Request $request){
    $user = $request->input('user');
    $pass = $request->input('password');
    $key = $request->input('key');

    if ($user === 'sara.soto' and $pass==='cacahuate123'){
        $url='admon.dashboard';
    }else{
        $url='admon.login';
    }
    return view($url,[
        'user'=>$request->input('user')
    ]);

}
    public function login (){
        return view('admon.login');
    }

    public function pintorone()
    {

        return view('pintorone', ['title'=> 'vanGogh',

        'dato'=> 'En vida solo vendió un cuadro y se suicidó de un disparo en el pecho.'

        ]);}

    public function pintortwo()
    {

        return view('pintortwo', [ 'title'=> 'Picasso',

        'dato'=> 'Es él artista más robado de la historia, entre 350 obras fueron objeto de robos.'

        ]);}

    public function pintorthree()
    {

        return view('pintorthree', [   'title'=> 'Vinci',


        'dato'=> 'La mayor parte de las pinturas y demás obras de Leonardo da Vinci quedaron incompletas.'

        ]);}

    public function pintorfour()
    {

        return view('pintorfour', [ 'title'=> 'Dali',

        'dato'=> ' Dalí rediseñó el logo de Chupa Chups.'

        ]);}

    public function pintorfive()
    {

        return view('pintorfive', [ 'title'=> 'Velazquez',
        'dato'=> 'Con 19 años se casó con la hija de su maestro, Francisco Pacheco, de 15 años de edad mediante un matrimonio de conveniencia.'

        ]);}

    public function acerca()
    {

        return view('acerca', [
            'title'=> 'Acerca',


        ]);}


}



