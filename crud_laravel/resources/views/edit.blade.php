@extends('master')
@section('title','Loại')
@section('content')
<form action="" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Tên loại</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ten_loai" value="{{$loais->ten_loai}}">
        {!! ShowError($errors,'ten_loai') !!}
        
    </div>
    <button type="submit" class="btn btn-primary">Update loai</button>
</form>
@endsection