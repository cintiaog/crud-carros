@extends ('templates.template')

@section('content')
    <h1 class="text-center">CRUD</h1>
    <hr>
    <div class="text-center mt-3 mb-4">
    <a href ="{{route('create')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
    @if (session('successMsg'))
    <div class="alert alert-success" role="alert">
      {{session('successMsg')}}

    </div>
   @endif
    <div class="col-12 m-auto">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Ano</th>
      <th scope="col">KM</th>
      <th scope="col">Preço</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($carros as $carro)
    <tr>
      <td>{{$carro->id}}</td>
      <td>{{$carro->marca}}</td>
      <td>{{$carro->modelo}}</td>
      <td>{{$carro->ano}}</td>
      <td>{{$carro->km}}</td>
      <td>{{$carro->price}}</td>
      <td> 
 

      <a href ="">
            <button class="btn btn-dark">Visualizar</button>
        </a>
        <a href ="">
            <button class="btn btn-primary">Editar</button>
        </a>
        <a href ="">
            <button class="btn btn-danger">Deletar</button>
        </a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

</div>
@endsection