Formulario de creacion de peliculas

<form action="{{ url('/pelicula') }}" method="post" enctype="multipart/form-data" >
@csrf
@include('pelicula.form');


</form>