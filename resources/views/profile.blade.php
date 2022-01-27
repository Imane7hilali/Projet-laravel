@extends('admin')
@section('admincontent') 
<br><br>
<form  style="font-size:20px;">
<div class="form-group"  >
    <label >Name :</label>
    <input width="30%" class="form-control" value="{{Auth::user()->name}}" >
  </div><br>
  <div class="form-group">
    <label>Email address :</label>
    <input style="width:30%" type="email" class="form-control" value="{{Auth::user()->email}}" >
  </div><br>
  <div class="form-group">
    <label>Password :</label>
    <input style="width:30%" type="password" class="form-control" value="{{Auth::user()->password}}" placeholder="Password">
  </div><br>
  <div class="form-group">
    <label>Leave a message :</label>
    <textarea style="width:40%"class="form-control" rows="4"></textarea>
  </div>
</form>

@endsection