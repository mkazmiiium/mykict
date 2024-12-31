@extends('layouts.master')

@section('content')

<div class="content container-fluid">
    <div style="margin-top: 15px;">
        <a href="{{ route('SEMS.dashboard') }}" class="btn btn-primary btn-lg" style="margin-bottom: 10px;">SEMS DASHBOARD</a>
    </div>

    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Final Exam</h3>
                <ul class="breadcrumb justify-content-center" style="list-style: none; padding: 0; margin-top: 20px;">
                    <li class="breadcrumb-item">
                        <a href="SEMS-dashboard" style="color: #000000; text-decoration: none;">SEMS</a>
                    </li>
                    <li class="breadcrumb-item active" style="color: #000000;">Create Question</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Course Information and TOS Table Section -->
    <div class="row mb-4">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form action="#" id="courseInfoForm">
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Course Name</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Enter Course Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Course ID</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Enter Course ID">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">TOS Table</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Question Number</th>
                                <th>Spec1</th>
                                <th>Spec2</th>
                                <th>Spec3</th>
                                <th>Spec4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Q1</td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td>Q2</td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td>Q3</td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td>Q4</td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Question 1 -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Question 1</h5>
                </div>
                <div class="card-body">
                    <form action="#" id="questionForm1">
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Question</label>
                            <div class="col-md-10">
                                <div style="border: 1px solid #ced4da; padding: 10px; border-radius: 5px; height: 300px; overflow: auto; position: relative;">
                                    <textarea class="form-control border-0" style="resize: none; height: 80%; width: 100%;" placeholder="Enter Question"></textarea>
                                    <div style="position: absolute; bottom: 10px; right: 10px; cursor: pointer; display: flex; align-items: center;">
                                        <label for="attachment" style="margin: 0; display: flex; align-items: center; cursor: pointer;">
                                            <i class="fa fa-upload" data-bs-toggle="tooltip" title="Upload File" style="font-size: 24px; color: #007bff; margin-right: 5px;"></i>
                                            <span style="font-size: 14px; color: #007bff;">Upload Image/File</span>
                                        </label>
                                        <input type="file" id="attachment" style="display: none;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Answer</label>
                            <div class="col-md-10">
                                <textarea class="form-control" rows="5" placeholder="Enter Answer"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Question 2 -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Question 2</h5>
                </div>
                <div class="card-body">
                    <form action="#" id="questionForm2">
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Question</label>
                            <div class="col-md-10">
                                <div style="border: 1px solid #ced4da; padding: 10px; border-radius: 5px; height: 300px; overflow: auto; position: relative;">
                                    <textarea class="form-control border-0" style="resize: none; height: 80%; width: 100%;" placeholder="Enter Question"></textarea>
                                    <div style="position: absolute; bottom: 10px; right: 10px; cursor: pointer; display: flex; align-items: center;">
                                        <label for="attachment" style="margin: 0; display: flex; align-items: center; cursor: pointer;">
                                            <i class="fa fa-upload" data-bs-toggle="tooltip" title="Upload File" style="font-size: 24px; color: #007bff; margin-right: 5px;"></i>
                                            <span style="font-size: 14px; color: #007bff;">Upload Image/File</span>
                                        </label>
                                        <input type="file" id="attachment" style="display: none;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Answer</label>
                            <div class="col-md-10">
                                <textarea class="form-control" rows="5" placeholder="Enter Answer"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Question 3 -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Question 3</h5>
                </div>
                <div class="card-body">
                    <form action="#" id="questionForm3">
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Question</label>
                            <div class="col-md-10">
                                <div style="border: 1px solid #ced4da; padding: 10px; border-radius: 5px; height: 300px; overflow: auto; position: relative;">
                                    <textarea class="form-control border-0" style="resize: none; height: 80%; width: 100%;" placeholder="Enter Question"></textarea>
                                    <div style="position: absolute; bottom: 10px; right: 10px; cursor: pointer; display: flex; align-items: center;">
                                        <label for="attachment" style="margin: 0; display: flex; align-items: center; cursor: pointer;">
                                            <i class="fa fa-upload" data-bs-toggle="tooltip" title="Upload File" style="font-size: 24px; color: #007bff; margin-right: 5px;"></i>
                                            <span style="font-size: 14px; color: #007bff;">Upload Image/File</span>
                                        </label>
                                        <input type="file" id="attachment" style="display: none;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Answer</label>
                            <div class="col-md-10">
                                <textarea class="form-control" rows="5" placeholder="Enter Answer"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

   <!-- Question 4 -->
   <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Question 4</h5>
            </div>
            <div class="card-body">
                <form action="#" id="questionForm4">
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Question</label>
                        <div class="col-md-10">
                            <div style="border: 1px solid #ced4da; padding: 10px; border-radius: 5px; height: 300px; overflow: auto; position: relative;">
                                <textarea class="form-control border-0" style="resize: none; height: 80%; width: 100%;" placeholder="Enter Question"></textarea>
                                <div style="position: absolute; bottom: 10px; right: 10px; cursor: pointer; display: flex; align-items: center;">
                                    <label for="attachment" style="margin: 0; display: flex; align-items: center; cursor: pointer;">
                                        <i class="fa fa-upload" data-bs-toggle="tooltip" title="Upload File" style="font-size: 24px; color: #007bff; margin-right: 5px;"></i>
                                        <span style="font-size: 14px; color: #007bff;">Upload Image/File</span>
                                    </label>
                                    <input type="file" id="attachment" style="display: none;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Answer</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="5" placeholder="Enter Answer"></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- Submit Buttons -->
    <div class="form-group mb-0 row">
        <div class="col-md-10 offset-md-2">
            <button type="button" class="btn btn-success me-2" onclick="handleButtonClick('Vetting')">Send for Vetting</button>
            <button type="button" class="btn btn-secondary" onclick="handleButtonClick('Draft')">Save Draft</button>
        </div>
    </div>

</div>

<script>
    function handleButtonClick(action) {
        alert('Successfully ' + (action === 'Vetting' ? 'sent for vetting' : 'saved draft') + '!');
    }
</script>

@endsection
