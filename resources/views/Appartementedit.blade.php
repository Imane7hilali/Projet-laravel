@extends('admin')
@section('Usercontent')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
    {{ Form::model($appartement,['route'=>['appartement.update',$appartement->id],'method'=>'PATCH']) }} @include('Appartementform')
        {{ form::close()}}
    </div>
</div>
@endsection