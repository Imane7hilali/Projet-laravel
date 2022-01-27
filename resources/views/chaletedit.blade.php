@extends('admin')
@section('Usercontent')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
    {{ Form::model($chalet,['route'=>['chalet.update',$chalet->id],'method'=>'PATCH']) }}@include('chaletform')
        {{ form::close()}}
    </div>
</div>
@endsection