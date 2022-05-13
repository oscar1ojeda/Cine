Formulario de creacion de categorias

<form action="{{ url('/categoria') }}" method="post" enctype="multipart/form-data" >
@csrf
<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" id="Nombre">
<br>
<input type="submit" value="Guardar datos" >

</form>