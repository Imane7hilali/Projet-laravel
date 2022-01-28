@extends('admin')
@section('admincontent')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {{Form::open(['route'=>'reserver.store','method'=>'POST'])}} @include('reservationform')
        {{form::close()}}
    </div>
</div>
@endsection