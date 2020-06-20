@extends ('templates.template')

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Detalhes</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td>ID: {{$carros->id ?? ''}}</td>
    </tr>
    <tr>
      <td>MARCA: {{$carros->marca ?? ''}}</td>
    </tr>
    <tr>
      <td>MODELO: {{$carros->modelo ?? ''}}</td>
    </tr>  
    <tr>
      <td>ANO: {{$carros->ano ?? ''}}</td>
    </tr>
    <tr>
      <td>KM: {{$carros->km ?? ''}}</td>
    </tr>
    <tr>
      <td>PREÇO: {{$carros->price ?? ''}}</td>
    </tr>
  </tbody>
</table>
<a href ="{{route('home')}}">
  <button class="btn btn-primary">Voltar</button>
</a>
<a href ="{{route('edit',$carros->id)}}">
  <button class="btn btn-success">Editar</button>
</a>

@endsection