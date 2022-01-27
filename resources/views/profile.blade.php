@extends('admin')
@section('admincontent')
<h1>{{Auth::user()->name}}</h1>
@endsection