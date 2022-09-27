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
                                    Role List
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">User List</h4>
                    <div>
                        <a href="{{url('/')}}/admin/new-role"> Add Role</a>
                    </div>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="table-plus datatable-nosort">Name</th>
                                <th>Age</th>
                                <th>Office</th>
                                <th>Address</th>
                                <th>Start Date</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($users)==0)
                            <tr style="text-align: center">
                                <td colspan="12"> No Record Found</td>
                            </tr>
                            @endif
                            @foreach($users as $key=>$user)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td class="table-plus">{{$user->first_name}} {{$user->last_name}}</td>
                                <td>{{$user->email }}</td>
                                <td>{{$user->account_number }}</td>
                                <td>{{$user->dob}}</td>
                                <td>{{$user->gender}}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Simple Datatable End -->
            <!-- multiple select row Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Data Table with multiple select row</h4>
                </div>
                <div class="pb-20">
                    <table class="data-table table hover multiple-select-row nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Name</th>
                                <th>Age</th>
                                <th>Office</th>
                                <th>Address</th>
                                <th>Start Date</th>
                                <th>Salart</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-plus">Gloria F. Mead</td>
                                <td>25</td>
                                <td>Sagittarius</td>
                                <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Gemini</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>20</td>
                                <td>Gemini</td>
                                <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Sagittarius</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>25</td>
                                <td>Gemini</td>
                                <td>2829 Trainer Avenue Peoria, IL 61602</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>20</td>
                                <td>Sagittarius</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>18</td>
                                <td>Gemini</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Sagittarius</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Sagittarius</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Gemini</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Gemini</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td class="table-plus">Andrea J. Cagle</td>
                                <td>30</td>
                                <td>Gemini</td>
                                <td>1280 Prospect Valley Road Long Beach, CA 90802</td>
                                <td>29-03-2018</td>
                                <td>$162,700</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Export Datatable End -->
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            DeskApp - Bootstrap 4 Admin Template By
            <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
        </div>
    </div>
</div>
@endsection