@extends('admin.layout.app')
@section('title')
    Cập nhật bài viết
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Cập Nhật Bài Viết</h5>
                <div class="row">
                    <div class="col-6">
                        <a href="" class="btn btn-warning mb-4"><i class="fa-solid fa-rotate-left"></i> Quay Lại</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label class="form-label">Tiêu Đề</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="form-label">Danh Mục</label>
                                    <select class="form-select" name="category_id">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>                                      
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="form-label">Hình</label>
                                    <input type="file" class="form-control mb-3">
                                    <img class="img-fluid w-50" src="https://via.placeholder.com/640x480.png/000022?tex...">
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="form-label">Video</label>
                                    <input type="file" class="form-control mb-3">
                                    <img class="img-fluid w-50" src="https://via.placeholder.com/640x480.png/000022?tex...">
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label">Nội Dung</label>
                                    <textarea name="" id="editor"></textarea>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
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
