@extends('admin')
@section('Usercontent')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {{Form::open(['route'=>'user.store','method'=>'POST'])}} @include('Userform')
        {{form::close()}}
    </div>
</div>
@endsection