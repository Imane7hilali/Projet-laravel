@extends('admin')
@section('Usercontent')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {{ Form::open(['route'=>'admin.store', 'method'=>'POST'])}} @include('hotelform')
        {{ form::close()}}
    </div>
</div>