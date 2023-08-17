@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Paymentst</div>
  <div class="card-body">

      <form action="{{ url('payments/' .$payments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$payments->id}}" id="id" />
        <label>Enrollment_id</label></br>
        <input type="text" name="enrollment_id" id="enrollment_id" value="{{$payments->enrollment_id}}" class="form-control"></br>
        <label>Paid_date</label></br>
        <input type="text" name="paid_date" id="paid_date" value="{{$payments->paid_date}}" class="form-control"></br>
        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" value="{{$payments->amount}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
