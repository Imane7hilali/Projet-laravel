@extends('admin') 
@section('admincontent')
<div class="row ">
   <div class="col-lg-12 margin-tb">
       <div class="pull-left">
          <h2> Hotel</h2>
       </div>
   <div class="pull-right">
      <br/>
      <a class="btn btn-primary" href="{{ route('hotel.index') }}"> <i class="bi bi-arrow-left"></i></a>
   </div>
</div>
</div>
<div class="row">
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          <strong>Name : </strong>
            {{ $hotel->name}}
     </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>city : </strong>
         {{ $hotel->city}}
     </div>
 </div>
</div> 
@endsection