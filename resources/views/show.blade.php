@extends("layout.master")
@section("title","Posts")
@section("page-content")
<h1>{{$post->title}}</h1>
<p>{{$post->description}}</p>
<a href="/posts" class="link-primary">Bact To Posts</a>
@endsection