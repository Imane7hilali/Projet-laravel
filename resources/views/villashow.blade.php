@extends('admin') 
@section('Usercontent')
<div class="row ">
   <div class="col-lg-12 margin-tb">
       <div class="pull-left">
          <h2> Show villa</h2>
       </div>
   <div class="pull-right">
      <br/>
      <a class="btn btn-primary" href="{{ route('admin.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
   </div>
</div>
</div>
<div class="row">
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          <strong>Name : </strong>
            {{ $villa->name}}
     </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>city : </strong>
         {{ $villa->city}}
     </div>
 </div>
</div> 
@endsection