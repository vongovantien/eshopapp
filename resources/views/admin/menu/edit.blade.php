@extends('admin.main')
@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
    @include('admin.alert')
    <div class="container p-5">
        <h2 class="text-center text-danger"> Thêm mới danh mục sản phẩm</h2>
        <form action="/admin/menus/edit/{{ $cate->id }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="name">Category Name:</label>
                <input type="text" class="form-control" id="name" name="name" value={{ $cate->name }}>
            </div>
             <div class="form-group">
                <label for="name">Description:</label>
                <input type="text" class="form-control" id="name" name="description" value={{ $cate->description }}>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea id="editor" name="content" value="{{ $cate->name }}"></textarea>
            </div>
            <div class="checkbox">
                <label for="active"> Active: </label>
                Có<input name="active" type="radio" value=1 {{$cate->active === 1 ? 'checked' : ''}}>
                Không<input name="active" type="radio" value=0 {{$cate->active === 0 ? 'checked' : ''}}>
            </div>
            <button type="submit" class="btn btn-primary">Save and Continue</button>
            <a href="{{ route('list')}}" class="nav-link"><i class="fas fa-undo"></i>Danh sách danh mục</button>
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
