@extends('layouts.master')

@section('content')
<style>
    .table th, .table td {
        vertical-align: middle;
        text-align: center;
    }
</style>
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col text-center">
                <h1 class="page-title">HOD SEMS DASHBOARD,       Welcome Dr Khairul!</h1>
                <ul class="breadcrumb justify-content-center" style="list-style: none; padding: 0; margin-top: 20px;">
                    <li class="breadcrumb-item">
                        <a href="SEMS-dashboard" style="color: #000000; text-decoration: none;">SEMS</a>
                    </li>
                    <li class="breadcrumb-item active" style="color: #000000;">assign vetters</li>
                </ul>
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
                                <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
                                <a href="add-subject.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Status</th>
                                    <th>Action</th>
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
                                            <a>Mathematics</a>
                                        </h2>
                                    </td>
                                    <td>5</td>
                                    <td>Pending</td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <!-- Assign Vetters Dropdown -->
                                            <div class="dropdown me-2">
                                                <button class="btn btn-sm bg-primary-light dropdown-toggle d-flex align-items-center" type="button" id="assignVettersDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-user-plus me-2"></i>
                                                    <span>Assign Vetters</span>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="assignVettersDropdown">
                                                    <li><a class="dropdown-item" href="#">1</a></li>
                                                    <li><a class="dropdown-item" href="#">2</a></li>
                                                    <li><a class="dropdown-item" href="#">3</a></li>
                                                    <li><a class="dropdown-item" href="#">4</a></li>
                                                </ul>
                                            </div>

                                            <!-- Approval Button -->
                                            <a href="approval-question" class="btn btn-sm bg-success-light me-2">
                                                <i class="fa fa-check"></i>
                                                <span>Approval</span>
                                            </a>

                                            <!-- Redo Button -->
                                            <button class="btn btn-sm" onclick="handleRedo()">
                                                <i class="fa fa-backward"></i>
                                                <span>Redo</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>PRE2213</td>
                                    <td>
                                        <h2>
                                            <a>History</a>
                                        </h2>
                                    </td>
                                    <td>6</td>
                                    <td>Done</td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <!-- Assign Vetters Dropdown -->
                                            <div class="dropdown me-2">
                                                <button class="btn btn-sm bg-primary-light dropdown-toggle d-flex align-items-center" type="button" id="assignVettersDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-user-plus me-2"></i>
                                                    <span>Assign Vetters</span>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="assignVettersDropdown">
                                                    <li><a class="dropdown-item" href="#">1</a></li>
                                                    <li><a class="dropdown-item" href="#">2</a></li>
                                                    <li><a class="dropdown-item" href="#">3</a></li>
                                                    <li><a class="dropdown-item" href="#">4</a></li>
                                                </ul>
                                            </div>

                                            <!-- Approval Button -->
                                            <a href="approval-question" class="btn btn-sm bg-success-light me-2">
                                                <i class="fa fa-check"></i>
                                                <span>Approval</span>
                                            </a>

                                            <!-- Redo Button -->
                                            <button class="btn btn-sm" onclick="handleRedo()">
                                                <i class="fa fa-backward"></i>
                                                <span>Redo</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>PRE2143</td>
                                    <td>
                                        <h2>
                                            <a>Science</a>
                                        </h2>
                                    </td>
                                    <td>3</td>
                                    <td>Pending</td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <!-- Assign Vetters Dropdown -->
                                            <div class="dropdown me-2">
                                                <button class="btn btn-sm bg-primary-light dropdown-toggle d-flex align-items-center" type="button" id="assignVettersDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-user-plus me-2"></i>
                                                    <span>Assign Vetters</span>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="assignVettersDropdown">
                                                    <li><a class="dropdown-item" href="#">1</a></li>
                                                    <li><a class="dropdown-item" href="#">2</a></li>
                                                    <li><a class="dropdown-item" href="#">3</a></li>
                                                    <li><a class="dropdown-item" href="#">4</a></li>
                                                </ul>
                                            </div>
                                            <!-- Approval Button -->
                                            <a href="approval-question" class="btn btn-sm bg-success-light me-2">
                                                <i class="fa fa-check"></i>
                                                <span>Approval</span>
                                            </a>

                                            <!-- Redo Button -->
                                            <button class="btn btn-sm" onclick="handleRedo()">
                                                <i class="fa fa-backward"></i>
                                                <span>Redo</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>PRE2431</td>
                                    <td>
                                        <h2>
                                            <a>Geography</a>
                                        </h2>
                                    </td>
                                    <td>8</td>
                                    <td>Done</td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <!-- Assign Vetters Dropdown -->
                                            <div class="dropdown me-2">
                                                <button class="btn btn-sm bg-primary-light dropdown-toggle d-flex align-items-center" type="button" id="assignVettersDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-user-plus me-2"></i>
                                                    <span>Assign Vetters</span>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="assignVettersDropdown">
                                                    <li><a class="dropdown-item" href="#">1</a></li>
                                                    <li><a class="dropdown-item" href="#">2</a></li>
                                                    <li><a class="dropdown-item" href="#">3</a></li>
                                                    <li><a class="dropdown-item" href="#">4</a></li>
                                                </ul>
                                            </div>
                                            <!-- Approval Button -->
                                            <a href="approval-question" class="btn btn-sm bg-success-light me-2">
                                                <i class="fa fa-check"></i>
                                                <span>Approval</span>
                                            </a>

                                            <!-- Redo Button -->
                                            <button class="btn btn-sm" onclick="handleRedo()">
                                                <i class="fa fa-backward"></i>
                                                <span>Redo</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>PRE1534</td>
                                    <td>
                                        <h2>
                                            <a>Botony</a>
                                        </h2>
                                    </td>
                                    <td>9</td>
                                    <td>Pending</td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <!-- Assign Vetters Dropdown -->
                                            <div class="dropdown me-2">
                                                <button class="btn btn-sm bg-primary-light dropdown-toggle d-flex align-items-center" type="button" id="assignVettersDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-user-plus me-2"></i>
                                                    <span>Assign Vetters</span>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="assignVettersDropdown">
                                                    <li><a class="dropdown-item" href="#">1</a></li>
                                                    <li><a class="dropdown-item" href="#">2</a></li>
                                                    <li><a class="dropdown-item" href="#">3</a></li>
                                                    <li><a class="dropdown-item" href="#">4</a></li>
                                                </ul>
                                            </div>
                                            <!-- Approval Button -->
                                            <a href="approval-question" class="btn btn-sm bg-success-light me-2">
                                                <i class="fa fa-check"></i>
                                                <span>Approval</span>
                                            </a>

                                            <!-- Redo Button -->
                                            <button class="btn btn-sm" onclick="handleRedo()">
                                                <i class="fa fa-backward"></i>
                                                <span>Redo</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>PRE2153</td>
                                    <td>
                                        <h2>
                                            <a>English</a>
                                        </h2>
                                    </td>
                                    <td>4</td>
                                    <td>Done</td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <!-- Assign Vetters Dropdown -->
                                            <div class="dropdown me-2">
                                                <button class="btn btn-sm bg-primary-light dropdown-toggle d-flex align-items-center" type="button" id="assignVettersDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-user-plus me-2"></i>
                                                    <span>Assign Vetters</span>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="assignVettersDropdown">
                                                    <li><a class="dropdown-item" href="#">1</a></li>
                                                    <li><a class="dropdown-item" href="#">2</a></li>
                                                    <li><a class="dropdown-item" href="#">3</a></li>
                                                    <li><a class="dropdown-item" href="#">4</a></li>
                                                </ul>
                                            </div>

                                            <!-- Approval Button -->
                                            <a href="approval-question" class="btn btn-sm bg-success-light me-2">
                                                <i class="fa fa-check"></i>
                                                <span>Approval</span>
                                            </a>

                                            <!-- Redo Button -->
                                            <button class="btn btn-sm" onclick="handleRedo()">
                                                <i class="fa fa-backward"></i>
                                                <span>Redo</span>
                                            </button>
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

<script>
    function handleRedo() {
        alert("The question has been sent back to the Course Coordinator.");
    }
</script>

@endsection
