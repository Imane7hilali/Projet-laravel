@extends('admin') @section('admincontent')
@if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
 @endif
<table class="table table-bordered " style="width:80%;position:absolute;left:12%;height:4em;" id="hotel_content" >
  <tr>
     <th width="50px">No</th>
     <th>name</th>
     <th>city</th>
     <th width="140px" class="text-center">
       <a href="{{route('hotel.create')}}" class="btn btn-success">
         <i class="bi bi-plus"></i>
      </a>
   </th>
</tr>
<?php $no=1; ?>
@foreach ($hotel as $key => $value)
<tr>
   <td>{{$no++}}</td>
   <td>{{ $value->name }}</td>
   <td>{{ $value->city }}</td>
   <td>
      <a class="btn btn-info" href="{{route('hotel.show',$value->id)}}">
         <i class="bi bi-microsoft" style="color:white"></i></a>
      <a class="btn btn-primary" href="{{route('hotel.edit',$value->id)}}">
         <i class="bi bi-pencil"></i></a>
   {!! Form::open(['method' => 'DELETE','route' => ['hotel.destroy',$value->id],'style'=>'display:inline']) !!}
           <button type="submit" style="display: inline;" class="btn btn-danger">
           <i class="bi bi-trash" ></i> </button>
    {!! Form::close() !!} 
  </td>
</tr> 
@endforeach
</table> 
</div>
@endsection