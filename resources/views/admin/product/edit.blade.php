@extends('admin.main')
@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
    @include('admin.alert')
    <div class="container p-5">
        <h2 class="text-center text-danger"> Chỉnh sửa sản phẩm</h2>
        <form action="/admin/products/add" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" class="form-control" id="name" value="{{ $product->name }}" name="name">
            </div>
             <div class="form-group">
                <label for="name">Price:</label>
                <input type="text" class="form-control" id="price" value="{{ $product->price }}" name="price">
            </div>
             <div class="form-group">
                <label for="name">Pice Sale:</label>
                <input type="text" class="form-control" id="price_sale" value="{{ $product->price_sale }}" name="price_sale">
            </div>
             <div class="form-group">
                <label for="name">Description:</label>
                <input type="text" class="form-control" id="name" value="{{ $product->description }}" name="description">
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea id="editor" name="content"></textarea>
            </div>
            <div class="form-group">
                 <label>Danh Mục</label>
                <select class="form-control" name="menu_id">
                    @foreach($menus as $menu)
                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="menu">Ảnh Sản Phẩm</label>
                <input type="file"  class="form-control" id="upload">
                <div id="image_show">
                    <a href="{{ $product->image }}" target="_blank">
                        <img src="{{ $product->image }}" width="100px">
                    </a>
                </div>
                <input type="hidden" name="thumb" value="{{ $product->thumb }}" id="thumb">
            </div>
            <div class="checkbox">
                <label for="active"> Active: </label>
                Có<input name="active" type="radio" value=1>
                Không<input name="active" type="radio" value=0>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
