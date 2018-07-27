@extends("layout.master")

@section("contenido")
<h2>Listado de posts</h2>
@foreach($posts as $p)
    <h3>{{$p->titulo}}</h3>
    <p>{{$p->descripcion}}</p>
    <p>{{$p->url}}</p>
@endforeach


@endsection