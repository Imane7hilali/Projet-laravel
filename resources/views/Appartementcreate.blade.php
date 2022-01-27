@extends('admin')
@section('admincontent')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {{Form::open(['route'=>'appartement.store','method'=>'POST'])}} @include('Appartementform')
        {{form::close()}}
    </div>
</div>
@endsection