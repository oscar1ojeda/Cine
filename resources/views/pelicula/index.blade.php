Mostrar la lista de peliculas:)

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<br>
<br>
<center>
<a href="{{url('pelicula/create')}} " class="btn btn-success">Registrar nueva pelicula</a>
</center>

<br>
<table  class="table table-striped">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Categoria</th>
            <th scope="col">Director</th>
            <th scope="col">Pais</th>
            <th scope="col">Estreno</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
   <table class="table table-striped ">
        @foreach($peliculas as $pelicula)
        <tr>
                
                <td> {{ $pelicula->id }}</td>
                <td>{{ $pelicula->Nombre }}</td>
                <td>{{ $pelicula->categorias->Nombre}}</td>
                <td>{{ $pelicula->Director}}</td>
                <td>{{ $pelicula->Pais }}</td>
                <td>{{ $pelicula->Estreno }}</td>
                <td>
                <a href="{{ url('/pelicula/'.$pelicula->id.'/edit') }}" class="btn btn-warning">  Editar </a>     
                    
                <form action="{{ url('/pelicula/'.$pelicula->id) }} "  class="d-inline" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Quieres borrar?')" class="btn btn-danger" value="Borrar">

                </form>
                </td>
              
        </tr>
        @endforeach
</table>
    </tbody>
</table>