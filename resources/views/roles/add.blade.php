@extends('layout.layout')
@section('page_title','Roles - ')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Role</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form name="add_role"
                            action="{{URL::to('role/save')}}"
                            method="post">
                            @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="role_name">Name</label>
                                        <input required type="text" 
                                        class="form-control" 
                                        id="role_name" name="role_name"
                                        placeholder="Enter role name">
                                    </div>
                                    <div class="form-group">
                                        <label for="role_desc">Description</label>
                                        <input required type="text" 
                                        class="form-control" 
                                        id="role_desc" name="role_desc"
                                        placeholder="Enter role description">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('scripts')

@endpush

@push('styles')

@endpush
