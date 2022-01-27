<div style="width:100%;position:inherit;left:6%;margin-top:20px">
<div class="row">
  <div class="col-sm-2">
    {!! form::label('name','Name') !!}
  </div>
 <div class="col-sm-10">
    <div class="form-group {{ $errors->has('name') ? 'has-error' : "" }}">
      {{ Form::text('name',NULL, ['class'=>'form-control', 'id'=>'name', 'placeholder'=>'User name']) }}
      {{ $errors->first('name', '<p class="help-block">:message</p>') }}
   </div>
 </div>
</div>
<div class="row" >
  <div class="col-sm-2">
    {!! form::label('email','Email') !!}
  </div>
  <div class="col-sm-10">
     <div class="form-group {{ $errors->has('email') ? 'has-error' : ""}}">
       {{ Form::text('email',NULL, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'User email']) }}
        {{ $errors->first('email', '<p class="help-block">:message</p>') }}
     </div>
  </div>
</div>
<div class="row" >
  <div class="col-sm-2">
    {!! form::label('password','Password') !!}
  </div>
  <div class="col-sm-10">
     <div class="form-group {{ $errors->has('email') ? 'has-error' : ""}}">
       {{ Form::password('password',NULL, ['class'=>'form-control', 'id'=>'password', 'placeholder'=>'User password']) }}
        {{ $errors->first('password', '<p class="help-block">:message</p>') }}
     </div>
  </div>
</div>

<div class="form-group">
{{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>
</div>