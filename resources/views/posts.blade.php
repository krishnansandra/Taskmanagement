@extends("layout.master")
@section("title","Posts")
@section("page-content")
<br>
<br>
<br><br>
<br><br>
<div class="container" >
<h1>The task</h1>
<br><br><br><br><br><br>
<a href="/posts/create" class="link-primary">Create New Posts</a>
<table class="table table-success table-striped" width="60%" align="center">
  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Description</th>
    <th></th>
    <th></th>
</tr>
@foreach($post as $p)

 <tr>
  <td>{{$p->id}}</td>
  <td><a href="/posts/{{$p->id}}">{{$p->title}}</a> </td>
  <td>{{$p->description}} </td>
  <td><a href="/posts/{{$p->id}}/edit" class="link-primary">Edit</a></td>
  <td><a href="/posts/{{$p->id}}/delete" class="link-primary">Delete</a></td>
</tr>

@endforeach
</table>


</div>
@endsection
