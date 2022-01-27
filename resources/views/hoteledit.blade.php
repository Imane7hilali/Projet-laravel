@extends('admin')
@section('admincontent')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
    {{ Form::model($hotel,['route'=>['hotel.update',$hotel->id],'method'=>'PATCH']) }}@include('hotelform')
        {{ form::close()}}
    </div>
</div>
@endsection