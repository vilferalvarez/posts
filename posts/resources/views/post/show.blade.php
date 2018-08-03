@extends("layout.master")
@section("contenido")
<h2>Detalle de post</h2>
<h3>{{$post->title}}</h3>
<p>{{$post->descripcion}}</p>
<p>{{$post->created_at->diffForHumans()}}</p>


@endsection