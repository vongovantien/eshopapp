@extends('layout')
@section('content')
<div class="container section_gap">
  <div class="container-fluid">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
<form method="post" action="{{ route('insert')}}" enctype="multipart/form-data">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="ProductName">Tên sản phẩm</label>
    <input type="text" class="form-control" id="ProductName" name="productname">
  </div>
   <div class="form-group">
    <label for="unit">Đơn vị tính:</label><br>
    <select class="form-control" name="unit" id="unit">
        <option value="Cái">Cái</option>
        <option value="Bộ">Bộ</option>
        <option value="Chiếc">Chiếc</option>
    </select>
  </div><br>
  <div class="form-group">
    <label for="price">Đơn giá:</label>
    <input type="text" class="form-control" id="price" name="price">
  </div>
   <div class="form-group">
    <label for="categories">Loại sản phẩm:</label><br>
    <select class="form-control" name="categories" id="categories">
        @foreach($cate as $c)
        <option value="{{ $c -> CategoryId }}"> {{ $c -> CategoryName }}</option>
        @endforeach
    </select>
  </div><br>
  <div class="form-group">
    <label for="fileUpload">Hình sản phẩm:</label>
    <input type="file" name="fileUpload" class="form-control" id="fileUpload">
  </div>
  <div class="text-center">
     <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
  </div>
</form>
</div>
@stop
