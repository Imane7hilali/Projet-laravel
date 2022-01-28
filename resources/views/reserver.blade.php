@extends('layout')

@section('content')

<img src="{{ asset('images/wave1.png')}}" class="bottom-img1"> 
<?php $id=$_GET['hotel_id'];?>
<br><br>
@if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
 @endif
{{Form::open(['route'=>['reserver.store'],'method'=>'POST'])}}
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nom complet :</label>
    <div class="col-sm-10">
    {{ Form::text('name',NULL, ['class'=>'form-control', 'id'=>'name', 'placeholder'=>'Nom']) }}
        {{ $errors->first('name', '<p class="help-block">:message</p>') }}
  </div>
  </div>
   
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email :</label>
    <div class="col-sm-10">
    {{ Form::text('email',NULL, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'email']) }}
        {{ $errors->first('email', '<p class="help-block">:message</p>') }}
    </div>
  </div>
  <!-- <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Numéro de Télé :</label>
    <div class="col-sm-10">
      <input style='width:30%' type="text" class="form-control" placeholder="entrer votre numéro" >
    </div>
  </div> -->
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Arrivée :</label>
    <div class="col-sm-10">
    {{ Form::date('arrival_date',NULL, ['class'=>'form-control', 'id'=>'arrival_date', 'placeholder'=>'arrival_date']) }}
        {{ $errors->first('arrival_date', '<p class="help-block">:message</p>') }}
  </div>
  </div>
  <div  class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Départ :</label>
    <div class="col-sm-10">
    {{ Form::date('going_date',NULL, ['class'=>'form-control', 'id'=>'going_date', 'placeholder'=>'going_date']) }}
      {{ $errors->first('going_date', '<p class="help-block">:message</p>') }}
  </div>
  {{ Form::hidden('Hotel_id',$id)}}
  </div><br>
  <button class="submit-btn" style="position:absolute; left:40%; background-color: rgb(163, 205, 245);border-radius: 25px 25px 25px 25px; ">Envoyer</button> 
   
   
   
  {{form::close()}}
 
@stop
 