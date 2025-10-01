@extends('admin.dashboard')
@section('contenido')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <h2 style="margin-left: 1rem;">Usuarios</h2>
    <div class="p-4">

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Nivel</th>
      <th scope="col">Password</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($usuarios as $item)
            <tr>
                <td>{{$item -> id}}</td>
                <td>{{$item -> name}}</td>
                <td>{{$item -> email}}</td>
                <td>{{$item -> nivel}}</td>
                <td>*******</td>
                <td><button class ="btn btn-danger"> X </button></td>
            </tr>
    @endforeach
  </tbody>
</table>

    </div>
@endsection

@section('scripts')
<script>
    alert("Hola")
</script>
@endsection