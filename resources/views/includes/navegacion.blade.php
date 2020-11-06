<nav class="navegacion">
    @section('navbar')
<ul class="menu">

    <li class="first-item">
        <a href="{{action('PruebaController@login')}}">
            <img src="images/home.jpg" alt="" class="imagen">
            <span class="text-item">Inicio</span>
            <span class="down-item"></span>
        </a>
    </li>

    <li>
        <a href="{{route('pintorone')}}" target="_blank">
            <img src="images/vincent.jpg" alt="" class="imagen">
            <span class="text-item">Vincent van Gogh</span>
            <span class="down-item"></span>
        </a>
    </li>



    <li>
        <a href="{{route('pintortwo')}}" target="_blank">
            <img src="images/picasso.jpg" alt="" class="imagen">
            <span class="text-item">Pablo Picasso</span>
            <span class="down-item"></span>
        </a>
    </li>

    <li>
        <a href="{{route('pintorthree')}}" target="_blank">
            <img src="images/leonardo.jpg" alt="" class="imagen">
            <span class="text-item">Leonardo da Vinci</span>
            <span class="down-item"></span>
        </a>
    </li>
    <li>
        <a href="{{route('pintorfour')}}" target="_blank">
            <img src="images/salvador.jpg" alt="" class="imagen">
            <span class="text-item">Salvador Dalí</span>
            <span class="down-item"></span>
        </a>
    </li>
    <li>
        <a href="{{route('pintorfive')}}" target="_blank">
            <img src="images/diego.jpg" alt="" class="imagen">
            <span class="text-item">Diego Velazquez</span>
            <span class="down-item"></span>
        </a>
    </li>


    <li>
        <a href="{{route('acerca')}}" target="_blank">
            <img src="images/web.jpg" alt="" class="imagen">
            <span class="text-item">Acerca</span>
            <span class="down-item"></span>
        </a>
    </li>

    <li>
        <a href="mailto:sarasotochavarria9@gmail.com" target="_blank">
            <img src="images/contacto.jpg" alt="" class="imagen">
            <span class="text-item">Contacto</span>
            <span class="down-item"></span>
        </a>
    </li>


</ul>
        @show
</nav>
