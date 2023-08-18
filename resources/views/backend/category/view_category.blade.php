@extends('backend.master_dashboard')

@section('page_title')
    Blog | Category
@endsection


@section('content')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="" id="edit_cat" >
            @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <label class="my-2">Category Name</label>
                    <input type="text" id="up_name" class="form-control">

                    <label class="my-2">Order_by</label>
                    <input type="text" id="up_by" class="form-control">

                    <label class="my-2">Status</label>
                    <input type="text" id="up_status" class="form-control" >



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary update_category">Update Category</button>
                </div>
            </div>
        </div>
    </form>
    </div>
    <!-- Modal -->

    <div class="row  mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header " style="display:flex;align-items:centre;justify-content:space-between;">
                    <h3>Add Category</h3>
                    <a href="{{ route('add_category') }}" class="btn btn-primary">Add Category</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-dtriped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sr.number</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Order by</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($category as $key => $cat)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $cat->c_name }}</td>
                                                <td>{{ $cat->c_slug }}</td>
                                                <td>{{ $cat->order_by }}</td>
                                                <td>{{ $cat->status }}</td>
                                                <td>
            <a href="" data-id="{{ $cat->id }}" data-c_name="{{ $cat->c_name }}" data-order_by="{{ $cat->order_by }}"
            data-status="{{ $cat->status }}" class="btn btn-sm btn-info edit_category "  data-toggle="modal" data-target="#exampleModal"><i class="las la-marker "></i></a>
                                                    <a href="" class="btn btn-sm btn-danger"><i
                                                            class="las la-trash"></i></a>
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
        </div>
    </div>
@endsection

@section('footer_script')


    <script>

        $(document).ready(function(){
            $(document).on('click', '.edit_category', function(){

                let c_name = $(this).data('c_name');
                let order_by = $(this).data('order_by');
                let status = $(this).data('status');

                $('#up_name').val(c_name);
                $('#up_by').val(order_by);
                $('#up_status').val(status);

            });
        });

    </script>


@endsection
