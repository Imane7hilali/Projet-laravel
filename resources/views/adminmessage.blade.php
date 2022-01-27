@extends('admin') @section('admincontent')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered " style="width:80%;position:absolute;left:12%;height:4em;" >
    <tr>
        <th width="50px">No</th>
        <th>name</th>
        <th>city</th>
        <th width="140px" class="text-center">
            message
        </th>
    </tr>
    <?php $no = 1; ?>
    @foreach ($message2 as $key => $value)
    <tr>
        <td>{{$no++}}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->message}}</td>
        <td>
            {!! Form::open(['method' => 'DELETE','route' => ['message.destroy',$value->id],'style'=>'display:inline']) !!}
            <button type="submit" style="display: inline;" class="btn btn-danger">
                <i class="bi bi-trash"></i> </button>
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>
</div>
@endsection