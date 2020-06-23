@extends ('templates.template')

@section('content')
<h1 class="text-center">Editar</h1>
    <hr>
<div class="container">
    @if (session('successMsg'))
    <div class="alert alert-success" role="alert">
      {{session('successMsg')}}

    </div>
   @endif
    @if ($errors)
    @foreach ($errors->all as $error)
    <div class="alert alert-danger" role="alert">
        {{$error}}
    </div>
    @endforeach   
    @endif
<form name="formCad" id="formCad" method="POST" action="{{route('update', $carros->id)}}" enctype="multipart/form-data">
     @csrf
    
<input class="form-control" type="text" name="marca" id="marca" placeholder="Marca"  value="{{$carros->marca}}"><br>
    <input class="form-control" type="text" name="modelo" id="modelo" placeholder="Modelo:" value="{{$carros->modelo}}"><br>
<input class="form-control" type="text" name="ano" id="ano" placeholder="Ano:" value="{{$carros->ano}}"><br>
    <input class="form-control" type="text" name="km" id="km" placeholder="KM:" value="{{$carros->km}}"><br>
    <input class="form-control" type="text" name="price" id="price" placeholder="Preço:"  value="{{$carros->price}}"><br>
    <input type="file" class="form-control-file" id="enviarImagem" name="image" value="{{$carros->image}}">
    <input class="btn btn-success" type="submit" value="Atualizar">
    <a href ="{{route('home')}}">
        <button class="btn btn-primary">Voltar</button>
      </a>
</form>
    
</div>

@endsection