@extends('layouts.master')

@section('content')
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">My Profile</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">My Profile</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Update Profile</h5>
                        </div>
                        <div class="card-body">
                            <!--<form action="#" method="GET"> SHOULD BE USE THIS IN FYP2-->
                            <form action="#" method="GET">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="name"
                                            value="NUR AIN BINTI LIZAM">
                                    </div>
                                   <!-- <div class="col-md-10">
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Enter your name">
                                    </div>-->
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Matric Number</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="matric_number" value="2127942"
                                            readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Programme</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="programme" placeholder="BIT / BCS">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Specialization</label>
                                    <div class="col-md-10">
                                        <select class="form-control form-select" name="specialization">
                                            <option>-- Select --</option>
                                            <option>Information Assurance and Security</option>
                                            <option>Business Intelligence and Information Science</option>
                                            <option>Digital Media Design</option>
                                            <option>Enterprise Technology Management</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Year</label>
                                    <div class="col-md-10">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="year" value="1"> Year 1
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="year" value="2"> Year 2
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="year" value="3"> Year 3
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="year" value="4"> Year 4
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Semester</label>
                                    <div class="col-md-10">
                                        <select class="form-control form-select" name="semester">
                                            <option>-- Select --</option>
                                            <option>Sem 1</option>
                                            <option>Sem 2</option>
                                            <option>Sem 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Current CGPA</label>
                                    <div class="col-md-10">
                                        <input type="number" class="form-control" name="current_cgpa"
                                            placeholder="Enter your current CGPA" step="0.01" min="0"
                                            max="4.00">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Target CGPA</label>
                                    <div class="col-md-10">
                                        <input type="number" class="form-control" name="target_cgpa"
                                            placeholder="Enter your target CGPA" step="0.01" min="0"
                                            max="4.00">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">GPA & CGPA Results (Semester 1 - 8)</label>
                                    <div class="col-md-10">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Semester</th>
                                                    <th>GPA</th>
                                                    <th>CGPA</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @for ($i = 1; $i <= 8; $i++)
                                                    <tr>
                                                        <td>Semester {{ $i }}</td>
                                                        <td><input type="number" class="form-control"
                                                                name="gpa_semester_{{ $i }}"
                                                                placeholder="Enter GPA" step="0.01" min="0"
                                                                max="4.00"></td>
                                                        <td><input type="number" class="form-control"
                                                                name="cgpa_semester_{{ $i }}"
                                                                placeholder="Enter CGPA" step="0.01" min="0"
                                                                max="4.00"></td>
                                                    </tr>
                                                @endfor
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-10 offset-md-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

@endsection
