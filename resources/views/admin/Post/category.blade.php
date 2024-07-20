@extends('admin.layout.app')
@section('title')
    
@endsection
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Danh Sách Thể Loại</h5>
            <div class="row">
                <div class="col-6">
                    <a href="{{ route('admin.category.create') }}" class="btn btn-primary mb-4"><i class="fa-solid fa-plus"></i> Thêm Thể Loại</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    @if ($categories->isNotEmpty())
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="table-dark text-center">
                                <th width="5%"></th>
                                <th>Tên Thể Loại</th>
                                <th>Ngày Đăng</th>
                                <th>Ngày Cập Nhật</th>
                                <th width="15%" colspan="2">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody class="table-success">
                            @foreach ($categories as $row )
                                <tr class="text-center">
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $row->name }}</td>
                                    <td class="align-middle">{{ $row->created_at }}</td>
                                    <td class="align-middle">{{ $row->updated_at }}</td>
                                    <td class="align-middle"><a class="btn btn-warning" href="{{ route('admin.category.edit',$row) }}"><i class="fa fa-edit"></i></a></td>
                                    <form action="{{ route('admin.category.destroy',$row) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <td class="align-middle"><button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa {{ $row->name }} không?')"><i class="fa fa-trash"></i></button></td>
                                    </form>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7" class="text-center">{{ $categories->links() }}</td>
                            </tr>
                        </tfoot>
                    </table>
                    @else
                        <h2 class="text-center">Danh Sách Rỗng</h2>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection