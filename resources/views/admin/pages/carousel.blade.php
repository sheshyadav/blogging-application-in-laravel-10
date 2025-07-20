@push("header-section")
<title>Softwala | Blog Carousel</title>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" />
@endpush

@extends("admin.app")
@section("content")
<!-- Include navigation section -->
@include("admin.layouts.header")
<!-- Include navigation section -->

<!-- Start Body section -->
<div class="container-fluid">
    <div class="container">
        <div class="row my-5">
            @if(Session::get('success'))
                <div class="alert alert-success" role="alert">
                    <strong>Success! </strong> {{Session::get('success')}}
                </div>
            @elseif(Session::get('error'))
                <div class="alert alert-danger" role="alert">
                    <strong>Error! </strong> {{Session::get('error')}}
                </div>
            @endif
            <div class="col-12 headline">
                <h1 class="text-theme fw-bold my-5"> Carousel </h1>
            </div>
            <div class="col-12 text-end mb-3">
                <a
                    href="{{url('admin/carousel/add-new')}}"
                    class="btn btn-theme btn-outline btn-rounded"
                > <i class="fas fa-plus"></i> Add New
                </a>
            </div>
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped data-table-list border">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carousels as $carousel)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $carousel->title }}</td>
                                <td>{{ $carousel->description }}</td>
                                <td>
                                    <a
                                        href="{{url('admin/carousel/'.$carousel->id.'/update')}}"
                                        class="text-decoration-none"
                                        ><i class="fas fa-edit text-success px-1"></i>
                                    </a>
                                    <a
                                        role="button"
                                        class="tableDatadelete"
                                        for='@json(["id"=>$carousel->id, "url"=>"/admin/carousel/delete"])'
                                        ><i class="fas fa-trash text-danger px-1"></i>
                                    </a>
                                    <div class="mx-1 align-middle form-check form-check-inline form-switch">
                                        <input
                                            class="form-check-input updateStatus"
                                            type="checkbox"
                                            for='@json(["id"=>$carousel->id, "url"=>"/admin/carousel/status"])'
                                            {{$carousel->status ? 'checked':''}}
                                        />
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
@include("admin.layouts.footer")
<!-- Include footer section -->
@endsection

@push('script-section')
<script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
@endpush
