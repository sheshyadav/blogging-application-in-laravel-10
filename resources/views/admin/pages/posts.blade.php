@push('header-section')
    <title>Softwala | Blogs lists</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" />
@endpush

@extends('admin.app')
@section('content')
    <!-- Include navigation section -->
    @include('admin.layouts.header')
    <!-- Include navigation section -->

    <!-- Start Body section -->
    <div class="container-fluid">
        <div class="container">
            <div class="row my-5">
                @if (Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <strong>Success! </strong> {{ Session::get('success') }}
                    </div>
                @elseif(Session::get('error'))
                    <div class="alert alert-danger" role="alert">
                        <strong>Error! </strong> {{ Session::get('error') }}
                    </div>
                @endif

                <div class="col-12 headline">
                    <h1 class="text-theme fw-bold my-5">
                        @isset($category->name)
                            {{ $category->name }}
                        @endisset Posts
                    </h1>
                </div>
                <div class="col-12 text-end mb-3">
                    <a href="{{ url('admin/post/create') }}" class="btn btn-theme btn-outline btn-rounded"><i
                            class="fas fa-plus"></i> Add New
                    </a>
                </div>

                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped data-table-list border">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->slug }}</td>
                                        <td>{{ $post->Category->name }}</td>
                                        <td>
                                            @if ($post->status->value === 1)
                                                <span
                                                    class="badge badge-success rounded-pill">{{ $post->status->name }}</span>
                                            @elseif($post->status->value === 2)
                                                <span
                                                    class="badge badge-warning rounded-pill">{{ $post->status->name }}</span>
                                            @elseif ($post->status->value === 0)
                                                <span
                                                    class="badge badge-danger rounded-pill">{{ $post->status->name }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $post->created_at->format('d-M-Y') }}</td>
                                        <td>
                                            <!-- Post Edit button -->
                                            <a href="/admin/post/{{ $post->slug }}" class="px-1">
                                                <i class="fas fa-eye  text-theme"></i>
                                            </a>

                                            <!-- Post Edit button -->
                                            <a href="/admin/post/{{ $post->pid }}/update" class="px-1">
                                                <i class="fas fa-edit  text-success"></i>
                                            </a>

                                            <!-- Post Delete button -->
                                            <a role="button" class="tableDatadelete px-1"
                                                for='@json(['id' => $post->pid, 'url' => '/admin/post/delete'])'>
                                                <i class="fas fa-trash text-danger"></i>
                                            </a>
                                            <!-- status manage -->
                                            <div class="mx-1 align-middle form-check form-check-inline form-switch">
                                                <input class="form-check-input updateStatus" type="checkbox"
                                                    for='@json(['id' => $post->pid, 'url' => '/admin/post/status'])'
                                                    {{ $post->status->value == 1 ? 'checked' : '' }} />
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body section -->

    <!-- Include footer section -->
    @include('admin.layouts.footer')
    <!-- Include footer section -->
@endsection

@push('script-section')
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
@endpush
