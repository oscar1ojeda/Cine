Formulario que tendra datos en comun con create y edit

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<br>
@csrf
<center>
<div style="width: 400px;">
<label for="Nombre" class="form-label">Nombre</label>
<input type="text" name="Nombre" class="form-control" value="{{  isset($pelicula->Nombre)?$pelicula->Nombre:'' }}" id="Nombre">

<br>

<div id="select">
<label for="categoria_id" class="form-label"> Categoria</label>
<select name="categoria_id" id="categoria_id"  class="form-control">

@foreach($datos as $categoria_id)
<option name=""  value="{{isset($categoria_id->id )?$categoria_id->id:''  }}">{{$categoria_id->Nombre}}</option>
@endforeach
</select>
</div>

<label for="Director" class="form-label">Director</label>
<input type="text" name="Director"  class="form-control" value="{{isset($pelicula->Director)?$pelicula->Director:''}}"  id="Director">
<br>
<label for="Pais" class="form-label">Pais</label>
<input type="text" name="Pais"  class="form-control" value="{{isset($pelicula->Pais)?$pelicula->Pais:''}}" id="Pais">
<br>
<label for="Estreno" class="form-label">Estreno</label>
<input type="text" name="Estreno"  class="form-control" value="{{isset($pelicula->Estreno)?$pelicula->Estreno:''}}" id="Estreno">
<br>
<input type="submit" value="Guardar datos" class="btn btn-success" >

<a href="{{url('pelicula/')}}"  class="btn btn-primary" >Regresar</a>
</div>
</center>