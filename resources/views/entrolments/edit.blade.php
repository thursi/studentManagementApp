@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">

      <form action="{{ url('entrolments/' .$entrolments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$entrolments->id}}" id="id" />
        <label>Enroll_no</label></br>
        <input type="text" name="enroll_no" id="enroll_no" value="{{$entrolments->enroll_no}}" class="form-control"></br>
        <label>Batch_id</label></br>
        <input type="text" name="batch_id" id="batch_id" value="{{$entrolments->batch_id}}" class="form-control"></br>
        <label>Student_id</label></br>
        <input type="text" name="student_id" id="student_id" value="{{$entrolments->student_id}}" class="form-control"></br>
        <label>Join_date</label></br>
        <input type="text" name="join_date" id="join_date" value="{{$entrolments->join_date}}" class="form-control"></br>
        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" value="{{$entrolments->fee}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
