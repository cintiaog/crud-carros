@extends ('templates.template')

@section('content')
<h1 class="text-center">Cadastro Imagem</h1>
<hr>

<form action="{{route('imagem')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="enviarImagem">UploadImagem</label>
      <input type="file" class="form-control-file" id="enviarImagem" name="image"><br>
      <input class="btn btn-primary" type="submit" value="Enviar">
     
    </div>
  </form>

@endsection