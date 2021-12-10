@extends('admin.main')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="container">
        <h2 class="text-center text-danger">Danh sách danh mục</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($cate as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->description }}</td>
                    <td>
                    <a href="/admin/menus/edit/{{ $c->id }}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                    <a href="#" onclick="removeCate({{ $c->id }}, '/admin/menus/destroy/{{ $c->id }}')" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
          {{ $cate->links('vendor.pagination.bootstrap-4') }}
    </div>
@endsection
