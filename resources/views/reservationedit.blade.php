@extends('admin')
@section('admincontent')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
    {{ Form::model($reservation,['route'=>['reserver.update',$reservation->id],'method'=>'PATCH']) }}@include('reservationform')
        {{ form::close()}}
    </div>
</div>
@endsection