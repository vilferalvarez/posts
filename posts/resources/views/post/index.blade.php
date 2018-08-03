@extends("layout.master")

@section("contenido")
<h2>Listado de posts</h2>
@foreach($posts as $p)
    <h3><a href="{{route("post.show",$p->id)}}">{{$p->titulo}}</a>
    <small class="pull-right">
     <a href="{{route('post.edit',$p->id)}}" class="btn btn-info btn-sm">Editar</a>
    </small>
    </h3>
    <p>{{$p->created_at->diffForHumans()}}</p>
   
@endforeach

{{$posts->render()}}

@endsection