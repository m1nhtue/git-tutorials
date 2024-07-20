@extends('admin.layout.app')
@section('title')
    Cập nhật
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Cập Nhật Thể Loại</h5>
                <div class="row">
                    <div class="col-6">
                        <a href="{{ route('admin.category.index') }}" class="btn btn-warning mb-4"><i class="fa-solid fa-rotate-left"></i> Quay Lại</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.category.update',$category) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label class="form-label">Tên thể loại</label>
                                    <input type="text" class="form-control" name="name" value="{{ $category->name ?? old('name') }}">
                                    @error('name')
                                        <span class="text-danger mt-3">* {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
