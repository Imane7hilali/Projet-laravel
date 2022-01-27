<div style="width:100%;position:inherit;left:6%;margin-top:20px">
<div class="row" >
  <div class="col-sm-2">
    {!! form::label('city','City') !!}
  </div>
  <div class="col-sm-10">
     <div class="form-group {{ $errors->has('city') ? 'has-error' : ""}}">
       {{ Form::text('city',NULL, ['class'=>'form-control', 'id'=>'city', 'placeholder'=>'Appartement city']) }}
        {{ $errors->first('city', '<p class="help-block">:message</p>') }}
     </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-2">
    {!! form::label('name','Name') !!}
  </div>
 <div class="col-sm-10">
    <div class="form-group {{ $errors->has('name') ? 'has-error' : "" }}">
      {{ Form::text('name',NULL, ['class'=>'form-control', 'id'=>'name', 'placeholder'=>'Appartement name']) }}
      {{ $errors->first('name', '<p class="help-block">:message</p>') }}
   </div>
 </div>
</div>
<div class="row">
  <div class="col-sm-2">
    {!! form::label('address','Address') !!}
  </div>
 <div class="col-sm-10">
    <div class="form-group {{ $errors->has('address') ? 'has-error' : "" }}">
      {{ Form::text('address',NULL, ['class'=>'form-control', 'id'=>'address', 'placeholder'=>'appartement address']) }}
      {{ $errors->first('address', '<p class="help-block">:message</p>') }}
   </div>
 </div>
</div>
<div class="row">
  <div class="col-sm-2">
    {!! form::label('description','Description') !!}
  </div>
 <div class="col-sm-10">
    <div class="form-group {{ $errors->has('description') ? 'has-error' : "" }}">
      {{ Form::text('description',NULL, ['class'=>'form-control', 'id'=>'description', 'placeholder'=>'appartement description']) }}
      {{ $errors->first('description', '<p class="help-block">:message</p>') }}
   </div>
 </div>
</div>
<div class="row">
  <div class="col-sm-2">
    {!! form::label('mark','Mark') !!}
  </div>
 <div class="col-sm-10">
    <div class="form-group {{ $errors->has('mark') ? 'has-error' : "" }}">
      {{ Form::text('mark',NULL, ['class'=>'form-control', 'id'=>'mark', 'placeholder'=>'appartement mark']) }}
      {{ $errors->first('mark', '<p class="help-block">:message</p>') }}
   </div>
 </div>
</div>
<div class="form-group">
{{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>
</div>