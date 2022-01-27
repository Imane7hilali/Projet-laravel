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

<div class="form-group">
{{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>
</div>