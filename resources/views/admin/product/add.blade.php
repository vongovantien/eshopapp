@extends('admin.main')
@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
    @include('admin.alert')
    <div class="container p-5">
        <h2 class="text-center text-danger"> Thêm mới sản phẩm</h2>
        <form action="/admin/products/add" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" class="form-control" id="name" value="{{ old('name') }}" name="name">
            </div>
             <div class="form-group">
                <label for="name">Price:</label>
                <input type="text" class="form-control" id="price" value="{{ old('price') }}" name="price">
            </div>
             <div class="form-group">
                <label for="name">Pice Sale:</label>
                <input type="text" class="form-control" id="price_sale" value="{{ old('price_sale') }}" name="price_sale">
            </div>
             <div class="form-group">
                <label for="name">Description:</label>
                <input type="text" class="form-control" id="name" value="{{ old('description') }}" name="description">
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
                <label for="file">Image:</label>
                <input type="file" name="file" id="file">
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
