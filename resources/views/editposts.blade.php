@extends("layout.master")
@section("page-content")
<br><br>
<br>
<form method="post" action="/posts/{{$post->id}}">
  @csrf
  @method("PUT");
<div class="mb-3">
  <label for="title" class="form-label">Title</label>
  <input type="text" class="form-control" name="title" id="title" value="{{$post->title}}" >
</div>
<div class="mb-3">
  <label for="des" class="form-label">Description</label>
  <textarea class="form-control" name="description" id="des" rows="3">{{$post->description}}</textarea>
</div>
<div class="mb-3">
<button type="submit" class="btn btn-primary">Update</button>
</div>
</form>
@endsection