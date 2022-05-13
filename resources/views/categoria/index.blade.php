Mostrar la lista de categorias
Modifique esto para ver en github
<table class="table table-light">
   
  <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($categorias as $categoria)
        <tr>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->Nombre}}</td>
            <td>Editar | Borrar</td>
        </tr>
        @endforeach
    </tbody>
</table>