@extends("layout.master")
@section("page-content")
<br>
<br>
<br>
<br>
<div class="container">
<div class="w3-panel w3-border">
<form method="post" action="/posts">
  <h1>Enter new task</h1>
  <br><br>
@csrf
<div class="mb-3">
  <label for="title" class="form-label">Title</label>
  <input type="text" class="form-control" value="{{old('title')}}" name="title" id="title" >
  <p style="color:red">{{$errors->first('title')}}</p>
</div>
<div class="mb-3">
  <label for="des" class="form-label">Description</label>
  <textarea class="form-control" name="description" id="des" rows="3">{{old('description')}}</textarea>
  <p style="color:red">{{$errors->first('description')}}</p>
</div>
<div class="mb-3">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>
@endsection