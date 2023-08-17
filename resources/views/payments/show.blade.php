@extends('layout')
@section('content')


<div class="card">
  <div class="card-header">Payments</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Enrollment_id : {{ $payments->enrollment_id }}</h5>
        <p class="card-text">Paid_date : {{ $payments->paid_date }}</p>
        <p class="card-text">Amount : {{ $payments->amount }}</p>
  </div>

    </hr>

  </div>
</div>
@endsection
