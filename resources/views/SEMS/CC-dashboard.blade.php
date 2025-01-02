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
            <div class="col">
                <h3 class="page-title">Welcome Dr. Qistina!</h3>
                <ul class="breadcrumb justify-content-center" style="list-style: none; padding: 0; margin-top: 20px;">
                    <li class="breadcrumb-item">
                        <a href="SEMS-dashboard" style="color: #000000; text-decoration: none;">SEMS</a>
                    </li>
                    <li class="breadcrumb-item active" style="color: #000000;">Review Questions</li>
                </ul>
            </div>
        </div>
    </div>
    <div style="margin-top: 15px;">
        <a href="{{ route('create.question') }}" class="btn btn-primary btn-lg" style="margin-bottom: 10px;">CREATE NEW QUESTION</a>
    </div>

    <div class="student-group-form">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search by ID ...">
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
                                @foreach([
                                    ['id' => 'PRE2209', 'name' => 'Mathematics', 'class' => '5', 'status' => 'Recheck'],
                                    ['id' => 'PRE2213', 'name' => 'History', 'class' => '6', 'status' => 'Done'],
                                    ['id' => 'PRE2143', 'name' => 'Science', 'class' => '3', 'status' => 'Recheck'],
                                    ['id' => 'PRE2431', 'name' => 'Geography', 'class' => '8', 'status' => 'Done'],
                                    ['id' => 'PRE1534', 'name' => 'Botony', 'class' => '9', 'status' => 'Done'],
                                    ['id' => 'PRE2153', 'name' => 'English', 'class' => '4', 'status' => 'Done']
                                ] as $subject)
                                <tr>
                                    <td>
                                        <div class="form-check check-tables">
                                            <input class="form-check-input" type="checkbox" value="something">
                                        </div>
                                    </td>
                                    <td>{{ $subject['id'] }}</td>
                                    <td>
                                        <h2>
                                            <a>{{ $subject['name'] }}</a>
                                        </h2>
                                    </td>
                                    <td>{{ $subject['class'] }}</td>
                                    <td>{{ $subject['status'] }}</td>
                                    <td>
                                        <a href="edit-question" class="btn btn-sm bg-primary-light d-flex align-items-center justify-content-center">
                                            <i class="fa fa-edit me-0"></i>
                                            <span>Edit Question</span>
                                        </a>
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

@endsection
