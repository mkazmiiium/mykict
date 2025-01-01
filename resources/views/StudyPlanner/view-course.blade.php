@extends('layouts.master')

@section('content')
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Subject</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('SSP.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Subjects</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="student-group-form">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Course Code ...">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Name ...">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Class ...">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="search-student-btn">
                        <button type="btn" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">

                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Subjects</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i>
                                        Download</a>
                                    <a href="add-subject.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-center add-table-items">
                                <thead>
                                    <tr>
                                        <th>Course Code</th>
                                        <th>Course Title</th>
                                        <th>Credit Hour</th>
                                        <th>Prerequisite</th>
                                        <th>Year</th>
                                        <th>Semester</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-form-control add-row">
                                        <td>
                                            <input type="text" class="form-control" placeholder="Item Name">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Category Name">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="2">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="$10">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="$20">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="4%">
                                        </td>
                                        <td class="add-remove text-end">
                                            <a href="javascript:void(0);" class="add-btn me-2"><i
                                                    class="fas fa-plus-circle"></i></a>
                                            <a href="#" class="copy-btn me-2"><i class="fe fe-copy"></i></a><a
                                                href="javascript:void(0);" class="remove-btn"><i
                                                    class="fe fe-trash-2"></i></a>
                                        </td>
                                    </tr>
                                    <tr class="table-form-control add-row">
                                        <td>
                                            <input type="text" class="form-control" placeholder="Item Name">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Category Name">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="4">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="$10">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="$40">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="6%">
                                        </td>
                                        <td class="add-remove text-end">
                                            <a href="javascript:void(0);" class="add-btn me-2"><i
                                                    class="fas fa-plus-circle"></i></a>
                                            <a href="#" class="copy-btn me-2"><i class="fe fe-copy"></i></a><a
                                                href="javascript:void(0);" class="remove-btn"><i
                                                    class="fe fe-trash-2"></i></a>
                                        </td>

                                        <div class="modal custom-modal fade" id="save_invocies_details" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="form-header">
                                                            <h3>Save Subject Details</h3>
                                                            <p>Are you sure want to save?</p>
                                                        </div>
                                                        <div class="modal-btn delete-action">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <a href="javascript:void(0);" data-bs-dismiss="modal"
                                                                        class="btn btn-primary paid-continue-btn">Save</a>
                                                                </div>
                                                                <div class="col-6">
                                                                    <a href="javascript:void(0);" data-bs-dismiss="modal"
                                                                        class="btn btn-primary paid-cancel-btn">Cancel</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <body>
        <html>
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="assets/js/feather.min.js"></script>

        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="assets/plugins/select2/js/select2.min.js"></script>

        <script src="assets/plugins/moment/moment.min.js"></script>
        <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

        <script src="assets/js/script.js"></script>
    </body>

    </html>
@endsection
