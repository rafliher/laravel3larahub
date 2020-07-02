@extends('adminlte.master')

@section('content')
<div class="card-header">
    <h3 class="card-title">Answers of question {{$data['question_id']}}</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
          <tr>
              <th>No</th>
              <th>Answer</th>
          </tr>
          @foreach ($data['answers'] as $index => $answer)
              <tr id="{{$answer->id}}">
              <td>{{$index+1}}</td>
              <td>{{$answer->content}}</td>
              </tr>
          @endforeach
      </table>
      <div class="offset-2 col-8">
          <a href="/answer/{{$data['question_id']}}/create"><button  class="btn btn-primary col-12" style="margin: 30px 0 10px">Add Answer</button></a>
      </div>
      <div class="offset-2 col-8">
        <a href="/"><button  class="btn btn-primary col-12">Back Home</button></a>
    </div>
  </div>
@endsection