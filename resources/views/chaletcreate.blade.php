@extends('admin')
@section('admincontent')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {{Form::open(['route'=>'chalet.store','method'=>'POST'])}} @include('chaletform')
        {{form::close()}}
    </div>
</div>
@endsection