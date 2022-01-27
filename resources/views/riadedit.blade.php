@extends('admin')
@section('Usercontent')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
    {{ Form::model($riad,['route'=>['riad.update',$riad->id],'method'=>'PATCH']) }} @include('riadform')
        {{ form::close()}}
    </div>
</div>
@endsection