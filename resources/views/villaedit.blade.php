@extends('admin')
@section('Usercontent')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
    {{ Form::model($villa,['route'=>['villa.update',$villa->id],'method'=>'PATCH']) }} @include('villaform')
        {{ form::close()}}
    </div>
</div>
@endsection