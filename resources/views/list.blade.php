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
<table class="table table-success table-striped" width="60%" align="center">
  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Description</th>
    
</tr>

@foreach($post as $p)

 <tr>
  <td>{{$p->id}}</td>
  <td><a href="/posts/{{$p->id}}">{{$p->title}}</a> </td>
  <td>{{$p->description}} </td>
</tr>

@endforeach
</table>


</div>
@endsection