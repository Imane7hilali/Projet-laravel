@extends('admin')
@section('admincontent')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {{Form::open(['route'=>'villa.store','method'=>'POST'])}} @include('villaform')
        {{form::close()}}
    </div>
</div>
@endsection