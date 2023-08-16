
@extends('backend.master_dashboard')

@section('fav_name')
    Blog | Add Category
@endsection


@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                         <div class="card-header " style="display:flex;align-items:centre;justify-content:space-between;">
                                <h3>View Category</h3>
                                <a href="{{ route('view_category') }}" class="btn btn-primary ">view Category</a>
                            </div>
                        <div class="card-body">
                            <form action="" method="POST" >
                                @csrf

                                <label class="my-1">Category Name</label>
                                <input type="text" class="form-control" id="c_name">

                                <label class="my-1">Category slug</label>
                                <input type="text" class="form-control" id="c_slug">

                                <label class="my-1">Order By</label>
                                <input type="number" class="form-control" min="1" id="order_by">

                                <label class="my-1">Status</label>
                                <select class="form-control" id="status">
                                        <option >-select status-</option>
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                </select>

                                <button type="submit" class="btn btn-primary mt-3">Save Category</button>

                            </form>
                        </div>
                   </div>
                </div>
            </div>
        </div>



@endsection

@section('footer_script')




@endsection
