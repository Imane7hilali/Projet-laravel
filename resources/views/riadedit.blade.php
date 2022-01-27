@extends('admin')
@section('Usercontent')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {{ Form::open(['route'=>'riad.store', 'method'=>'POST'])}} @include('riadform')
        {{ form::close()}}
    </div>
</div>