@extends("layout.master")
@section("contenido")

<form action="{{route('post.update',$post->id)}}" method="POST">
{{csrf_field()}}
{{method_field('PUT')}}
<div class="form-group">
    <label for="email">Titulo:</label>
    <input type="text" class="form-control" id="titulo" name="titulo" value="{{$post->titulo}}">
  </div>
  <div class="form-group">
  <label for="desc">Descripcion</label>
  <textarea name="descripcion" class="form-control" id="descripcion" cols="30" rows="10" value="{{$post->descripcion}}"></textarea>
  </div>
  
  <div class="form-group">
    <label for="url">URL:</label>
    <input type="text" class="form-control" id="url" name="url" value="{{$post->url}}">
    
  </div>
  <button type="submit" class="btn btn-default">Crear</button>
</form>
@if(count($errors))
<div class="alert alert-danger">
<ul>
    @foreach($errors->all() as $e)
        <li>{{$e}}</li>

    @endforeach
</ul>

</div>
@endif



@endsection