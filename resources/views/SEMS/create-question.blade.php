@extends('layouts.master')

@section('content')

<div class="content container-fluid">
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

    <!-- Course Information Section -->
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
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Section</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Enter Section Number">
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

 <!-- Questions Section -->
 @for ($i = 1; $i <= 4; $i++)
 <div class="row">
     <div class="col-lg-12">
         <div class="card">
             <div class="card-header">
                 <h5 class="card-title">Question {{ $i }}</h5>
             </div>
             <div class="card-body">
                 <form action="#" id="questionForm{{ $i }}">
                     <div class="form-group row">
                         <label class="col-form-label col-md-2">Question</label>
                         <div class="col-md-10">
                             <textarea class="tinymce form-control" name="question{{ $i }}"></textarea>
                         </div>
                     </div>
                     <div class="form-group row">
                         <label class="col-form-label col-md-2">Answer</label>
                         <div class="col-md-10">
                             <textarea class="tinymce form-control" name="answer{{ $i }}"></textarea>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 @endfor

 <!-- Submit Buttons -->
 <div class="form-group mb-0 row">
     <div class="col-md-10 offset-md-2">
         <button type="button" class="btn btn-success me-2">Send for Vetting</button>
         <button type="button" class="btn btn-secondary">Save Draft</button>
     </div>
 </div>
</div>

<!-- Include TinyMCE -->
<script src="{{ asset('assets/js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script>
 tinymce.init({
     selector: 'textarea.tinymce',
     plugins: 'lists link image table code',
     toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code',
     height: 300
 });
</script>

@endsection
