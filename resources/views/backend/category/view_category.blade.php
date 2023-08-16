
@extends('backend.master_dashboard')

@section('fav_name')
    Blog | Category
@endsection


@section('content')

    <div class="container">

           <div class="card">
                <div class="card-header " style="display:flex;align-items:centre;justify-content:space-between;">
                    <h3>Add Category</h3>
                    <a href="{{ route('add_category') }}" class="btn btn-primary "  >Add Category</a>
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
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Education</td>
                                            <td>education</td>
                                            <td>active</td>
                                            <td>active</td>
                                        </tr>
                                    </tbody>
                                </table>
                           </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>

@endsection

@section('footer_script')


@endsection
