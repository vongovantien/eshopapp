@extends('layout')
@section('content')
<form action="{{ route('home') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" >
    <button type="submit">Upload</button>
</form
    
@endsection
