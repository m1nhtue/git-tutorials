@extends('admin.layout.app')
@section('title')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Danh Sách Bài Viết</h5>
                <div class="row">
                    <div class="col-6">
                        <a href="{{ route('admin.post.create') }}" class="btn btn-primary mb-4"><i class="fa-solid fa-plus"></i> Thêm Bài Viết</a>
                    </div>
                    <div class="col-6 text-end">
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#trashCategoryModal">
                            <i class="fa-regular fa-trash-can"></i> Thùng Rác <span
                                class="badge rounded-pill bg-danger"></span>
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        @if ($posts->isNotEmpty())
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="table-dark text-center">
                                        <th width="5%"></th>
                                        <th>Hình</th>
                                        <th>Danh Mục</th>
                                        <th>Tác Giả</th>
                                        <th>Tiêu Đề</th>
                                        <th colspan="3">Thao Tác</th>
                                    </tr>
                                </thead>
                                <tbody class="table-success">
                                    @foreach ($posts as $row)
                                        <tr class="text-center">
                                            <td class="align-middle">{{ $row->id }}</td>
                                            <td width="15%" class="align-middle"><img class="img-thumbnail w-40"
                                                    src="{{ $row->image }}"></td>
                                            <td class="align-middle">{{ $row->category->name }}</td>
                                            <td class="align-middle">{{ $row->user->name }}</td>
                                            <td class="align-middle">{{ $row->title }}</td>
                                            <td class="align-middle">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                    data-bs-target="#modal-{{ $row->id }}">
                                                    <i class="fa-regular fa-eye"></i>
                                                </button>
                                            </td>
                                            <td class="align-middle"><a class="btn btn-warning" href=""><i
                                                        class="fa fa-edit"></i></a></td>
                                            <td class="align-middle"><a class="btn btn-danger" href=""><i
                                                        class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <!-- Modal -->
                                        <div class="modal fade" id="modal-{{ $row->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="card">
                                                                <img class="card-img-top h-75" src="{{ $row->image }}" alt="Title" />
                                                                <div class="card-body">
                                                                    <h2 class="mb-3">{{ $row->title }}</h2>
                                                                    <h6 class="mb-3">Danh mục: {{ $row->category->name }}</h6>
                                                                    <h6 class="mb-3">Lượt Xem: {{ $row->view }} <i class="fa-regular fa-eye text-primary"></i></h6>
                                                                    <div class="author d-flex mb-3">
                                                                        <div class="avatar  me-3">
                                                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" style="width: 60px; border-radius:50%;" title="" alt="">
                                                                        </div>
                                                                        <div class="media-body d-flex flex-column justify-content-center">
                                                                            <label>{{ $row->user->name }}</label>
                                                                            <span>Ngày Đăng: {{ $row->created_at->format('d/m/Y') }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <p class="card-text">{{ $row->content }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                                <tfoot class="table-dark">
                                    <tr>
                                        <td colspan="8" class="text-center align-middle">{{ $posts->links() }}</td>
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
