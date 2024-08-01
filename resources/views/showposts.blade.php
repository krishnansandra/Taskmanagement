@extends("layout.master")
@section("title","Posts")
@section("page-content")

<div class="text-center">
<form method="post" action="/posts/{{$post->id}}">
@csrf
@method("DELETE")
<dl class="row">
  <dt class="col-sm-3">{{$post->title}}</dt>
  <dd class="col-sm-9">{{$post->description}}</dd>
 </dl>
   
  <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?');">Delete</button>
</form>
</div>

@endsection