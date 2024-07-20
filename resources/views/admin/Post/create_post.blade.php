@extends('admin.layout.app')
@section('title')
    Thêm bài viết
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Thêm Bài Viết Mới</h5>
                <div class="row">
                    <div class="col-6">
                        <a href="{{ route('admin.post.index') }}" class="btn btn-warning mb-4"><i class="fa-solid fa-rotate-left"></i> Quay Lại</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label class="form-label">Tiêu Đề</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('name') }}">
                                    @error('title')
                                        <span class="text-danger mt-3">* {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="form-label">Danh Mục</label>
                                    <select class="form-select" name="category_id">
                                        <option>-- Chọn Danh Mục --</option>
                                        @foreach ($categories as $row)
                                            <option value="{{ $row->id }}" {{ old('category_id') == $row->id ? 'selected' : '' }}>{{ $row->name }}</option>
                                        @endforeach
                                    </select>      
                                    @error('category_id')
                                        <span class="text-danger mt-3">* {{ $message }}</span>
                                    @enderror                                
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="form-label">Hình</label>
                                    <input type="file" class="form-control mb-3" name="photo">
                                    <img class="img-fluid w-50" src="https://via.placeholder.com/640x480.png/000022?tex...">
                                    @error('photo')
                                        <span class="text-danger mt-3">* {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="form-label">Link Video</label>
                                    <input type="text" class="form-control mb-3" name="videoURL" value="{{ old('videoURL') }}">
                                    @error('videoURL')
                                        <span class="text-danger mt-3">* {{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">Nội Dung</label>
                                    <textarea name="content" id="editor">{{ old('content') }}</textarea>
                                    @error('conte')
                                        <span class="text-danger mt-3">* {{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="importmap">
        {
            "imports": {
                "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/42.0.0/ckeditor5.js",
                "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/42.0.0/"
            }
        }
    </script>
    <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Font,
            Paragraph
        } from 'ckeditor5';
    
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
                toolbar: {
                    items: [
                        'undo', 'redo', '|', 'bold', 'italic', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                    ]
                }
            } )
            .then( /* ... */ )
            .catch( /* ... */ );
    </script>
@endsection
