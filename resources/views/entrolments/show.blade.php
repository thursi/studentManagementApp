@extends('layout')
@section('content')


<div class="card">
  <div class="card-header">Entrollments  Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Enroll_no : {{ $entrolments->enroll_no }}</h5>
        <p class="card-text">Batch_id : {{ $entrolments->batch_id }}</p>
        <p class="card-text">Student_id : {{ $entrolments->student_id }}</p>
        <p class="card-text">Join_date : {{ $entrolments->join_date }}</p>
        <p class="card-text">Fee : {{ $entrolments->fee}}</p>
  </div>

    </hr>

  </div>
</div>
@endsection
