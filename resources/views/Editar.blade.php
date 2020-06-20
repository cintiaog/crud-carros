@extends ('templates.template')

@section('content')
<h1 class="text-center">Editar</h1>
    <hr>
<div class="container">
    @if ($errors)
    @foreach ($errors->all as $error)
    <div class="alert alert-danger" role="alert">
        {{$error}}
    </div>
    @endforeach   
    @endif
<form name="formCad" id="formCad" method="POST" action="{{route('update', $carro->id)}}">
     @csrf
    
<input class="form-control" type="text" name="marca" id="marca" placeholder="Marca"  value="{{$carro->marca}}"><br>
    <input class="form-control" type="text" name="modelo" id="modelo" placeholder="Modelo:" value="{{$carro->modelo}}"><br>
<input class="form-control" type="text" name="ano" id="ano" placeholder="Ano:" value="{{$carro->modelo}}"><br>
    <input class="form-control" type="text" name="km" id="km" placeholder="KM:" value="{{$carro->km}}"><br>
    <input class="form-control" type="text" name="price" id="price" placeholder="Preço:"  value="{{$carro->price}}"><br>
    
    <input class="btn btn-primary" type="submit" value="Atualizar">
</form>
    
</div>

@endsection