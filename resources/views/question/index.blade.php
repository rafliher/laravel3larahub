@extends('adminlte.master')

@section('content')
<div class="card-header">
  <h3 class="card-title">Questions</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
  <table id="example1" class="table table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Content</th>
        </tr>
        @foreach ($questions as $index => $question)
            <tr id="{{$question->id}}">
            <td>{{$index+1}}</td>
            <td><a href="/answer/{{$question->id}}">{{$question->title}}</a></td>
            <td>{{$question->content}}</td>
            </tr>
        @endforeach
    </table>
    <div class="offset-2 col-8">
        <a href="/question/create"><button  class="btn btn-primary col-12" style="margin: 30px">Add Question</button></a>
    </div>
</div>
@endsection