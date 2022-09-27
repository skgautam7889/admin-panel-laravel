@extends('admin.layout.master')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Administration</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/')}}/admin/dashboard">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Administration
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Permission List
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Permission List</h4>
                    <div>
                        <a href="{{url('/')}}/admin/new-permission"> Add Permission</a>
                    </div>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="table-plus datatable-nosort">Permission Name</th>
                                <th>Guard Name</th>
                                <th>Create Date</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($permissions)==0)
                            <tr style="text-align: center">
                                <td colspan="12"> No Record Found</td>
                            </tr>
                            @endif
                            @foreach($permissions as $key=>$permission)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td class="table-plus">{{$permission->name }}</td>
                                <td>{{$permission->guard_name }}</td>
                                <td>{{$permission->created_at}}</td>
                                <td>
                                    <a href="{{ route('permission-edit', $permission->id) }}"><i class="dw dw-edit2"></i></a>
                                    <a href="#"><i class="dw dw-delete-3"></i></a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By
            <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
        </div>
    </div>
</div>
@endsection