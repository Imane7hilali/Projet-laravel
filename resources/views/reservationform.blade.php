<div style="width:100%;position:inherit;left:6%;margin-top:20px">
<div class="row" >
  <div class="col-sm-2">
    {!! form::label('name','Name') !!}
  </div>
  <div class="col-sm-10">
     <div class="form-group {{ $errors->has('city') ? 'has-error' : ""}}">
       {{ Form::text('name',NULL, ['class'=>'form-control', 'id'=>'name', 'placeholder'=>'Name']) }}
        {{ $errors->first('name', '<p class="help-block">:message</p>') }}
     </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-2">
    {!! form::label('email','Email') !!}
  </div>
 <div class="col-sm-10">
    <div class="form-group {{ $errors->has('name') ? 'has-error' : "" }}">
      {{ Form::text('email',NULL, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'email']) }}
      {{ $errors->first('email', '<p class="help-block">:message</p>') }}
   </div>
 </div>
</div>
<div class="row">
  <div class="col-sm-2">
    {!! form::label('arrival_date','Arrival_date') !!}
  </div>
 <div class="col-sm-10">
    <div class="form-group {{ $errors->has('arrival_date') ? 'has-error' : "" }}">
      {{ Form::date('arrival_date',NULL, ['class'=>'form-control', 'id'=>'arrival_date', 'placeholder'=>'arrival_date']) }}
      {{ $errors->first('arrival_date', '<p class="help-block">:message</p>') }}
   </div>
 </div>
</div>
<div class="row">
  <div class="col-sm-2">
    {!! form::label('going_date','Going_date') !!}
  </div>
 <div class="col-sm-10">
    <div class="form-group {{ $errors->has('arrival_date') ? 'has-error' : "" }}">
      {{ Form::date('going_date',NULL, ['class'=>'form-control', 'id'=>'going_date', 'placeholder'=>'going_date']) }}
      {{ $errors->first('going_date', '<p class="help-block">:message</p>') }}
   </div>
 </div>
</div>
<div class="row">
  <div class="col-sm-2">
    {!! form::label('Hotel_id','Hotel_id') !!}
  </div>
 <div class="col-sm-10">
    <div class="form-group {{ $errors->has('Hotel_id') ? 'has-error' : "" }}">
      {{ Form::text('Hotel_id',NULL, ['class'=>'form-control', 'id'=>'Hotel_id', 'placeholder'=>'Hotel_id']) }}
      {{ $errors->first('Hotel_id', '<p class="help-block">:message</p>') }}
   </div>
 </div>
</div>
<div class="form-group">
{{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>
</div>