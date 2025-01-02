@extends('layouts.master')

@section('content')


<link rel="shortcut icon" href="assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/feather/feather.css">

<link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/icons/feather/feather.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>

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
        <div class="table-responsive">
            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
            <thead class="student-thread">
            <tr>
            <th>
            <div class="form-check check-tables">
            <input class="form-check-input" type="checkbox" value="something">
            </div>
            </th>
            <th>Course Code</th>
            <th>Course Title</th>
            <th>Credit Hour</th>
            <th>Pre-Requisite</th>
            <th>Year</th>
            <th>Semester</th>
            <th>Specialization</th>
            <th class="text-end">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>
            <div class="form-check check-tables">
            <input class="form-check-input" type="checkbox" value="something">
            </div>
            </td>
            <td>PRE2209</td>
            <td>
            <h2>
            <a>Science</a>
            </h2>
            </td>
            <td>5</td>
            <td>INFO 3305</td>
            <td>3</td>
            <td>1</td>
            <td>Kulliyyah Required</td>
            
            <td class="text-end">
            <div class="actions">
            <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
            <i class="feather-eye"></i>
            </a>
            <a href="edit-course" class="btn btn-sm bg-danger-light">
            <i class="feather-edit"></i>
            </a>
            </div>
            </td>
            </tr>
            <tr>
            <td>
            <div class="form-check check-tables">
            <input class="form-check-input" type="checkbox" value="something">
            </div>
            </td>
            <td>PRE2209</td>
            <td>
            <h2>
            <a>Mathematics</a>
            </h2>
            </td>
            <td>5</td>
            <td>INFO 3305</td>
            <td>3</td>
            <td>1</td>
            <td>Department Required</td>
            <td class="text-end">
            <div class="actions">
            <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
            <i class="feather-eye"></i>
            </a>
            <a href="edit-course" class="btn btn-sm bg-danger-light">
            <i class="feather-edit"></i>
            </a>
            </div>
            </td>
            </tr>
            <tr>
            <td>
            <div class="form-check check-tables">
            <input class="form-check-input" type="checkbox" value="something">
            </div>
            </td>
            <td>PRE2209</td>
            <td>
            <h2>
            <a>BI</a>
            </h2>
            </td>
            <td>5</td>
            <td>INFO 3305</td>
            <td>3</td>
            <td>1</td>
            <td>BIA Specialization</td>
            <td class="text-end">
            <div class="actions">
            <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
            <i class="feather-eye"></i>
            </a>
            <a href="edit-course" class="btn btn-sm bg-danger-light">
            <i class="feather-edit"></i>
            </a>
            </div>
            </td>
            </tr>
            <tr>
            <td>
            <div class="form-check check-tables">
            <input class="form-check-input" type="checkbox" value="something">
            </div>
            </td>
            <td>PRE2209</td>
            <td>
            <h2>
            <a>BM</a>
            </h2>
            </td>
            <td>5</td>
            <td>INFO 3305</td>
            <td>3</td>
            <td>1</td>
            <td>Kulliyyah Required</td>
            <td class="text-end">
            <div class="actions">
            <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
            <i class="feather-eye"></i>
            </a>
            <a href="edit-course" class="btn btn-sm bg-danger-light">
            <i class="feather-edit"></i>
            </a>
            </div>
            </td>
            </tr>
           
            
            </tbody>
            </table>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
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
