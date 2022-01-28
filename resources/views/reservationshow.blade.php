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
            {{ $reservation->name}}
     </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>email : </strong>
         {{ $reservation->email}}
     </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>arrival_date : </strong>
         {{ $reservation->arrival_date}}
     </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>going_date : </strong>
         {{ $reservation->going_date}}
     </div>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Hotel_id : </strong>
         {{ $reservation->Hotel_id}}
     </div>
 </div>
</div> 
@endsection