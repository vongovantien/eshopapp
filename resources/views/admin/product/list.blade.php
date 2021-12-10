@extends('admin.main')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="container">
        <h2 class="text-center text-danger">Danh sách danh mục</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Miêu tả</th>
                    <th>Giá sản phẩm</th>
                    <th>Giá sau khi giảm</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($products as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->description }}</td>
                    <td>{{ $p->price }}</td>
                    <td>{{ $p->price_sale }}</td>
                    <td>
                        <a href="/admin/products/edit/{{ $p->id }}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                        <a href="/admin/products/list/{{ $p->id }}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
          {{ $products->links('vendor.pagination.bootstrap-4') }}
    </div>
@endsection
