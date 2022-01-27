@extends('admin')
@section('Usercontent')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
    {{ Form::model($user,['route'=>['user.update',$user->id],'method'=>'PATCH']) }} @include('userform')
        {{ form::close()}}
    </div>
</div>
@endsection