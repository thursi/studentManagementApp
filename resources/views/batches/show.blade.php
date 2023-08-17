@extends('layout')
@section('content')


<div class="card">
  <div class="card-header">Batches Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $batches->name }}</h5>
        <p class="card-text">Course_id : {{ $batches->course_id }}</p>
        <p class="card-text">Start_date : {{ $batches->Start_date }}</p>
  </div>

    </hr>

  </div>
</div>
@endsection
