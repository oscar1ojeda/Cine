Formulario de edicion peliculas

<form action="{{url('/pelicula/'.$pelicula->id) }}" method="post">

@csrf
{{ method_field('PATCH') }}

@include('pelicula.form');


</form>
