@extends('admin.layout.master')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>New Permission</h4>
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
                                    Permissions
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Add Permission
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- horizontal Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Permission Information</h4>
                    </div>
                </div>
                <form id="new-permission">
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <div class="form-group">
                                <label>Permission Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Permission Name" />
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <input type="hidden" class="new-permission-url" value="{{url('/')}}/admin/add-new-permission">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection