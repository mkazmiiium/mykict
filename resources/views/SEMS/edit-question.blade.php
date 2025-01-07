@extends('layouts.master')

@section('content')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Edit Question</h3>
                <ul class="breadcrumb justify-content-center" style="list-style: none; padding: 0; margin-top: 20px;">
                    <li class="breadcrumb-item">
                        <a href="SEMS-dashboard" style="color: #000000; text-decoration: none;">SEMS</a>
                    </li>
                    <li class="breadcrumb-item active" style="color: #000000;">Review Questions</li>
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
                                <input type="text" class="form-control" value="Mathematics" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Course ID</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="MATH101" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Section No.</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="2" readonly>
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
                                <th>Question</th>
                                <th>Spec1</th>
                                <th>Spec2</th>
                                <th>Spec3</th>
                                <th>Spec4</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (['Q1', 'Q2', 'Q3', 'Q4'] as $q)
                            <tr>
                                <td>{{ $q }}</td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @foreach ([
        ['id' => 1, 'question' => 'What is the square root of 16?', 'answer' => 'The square root of 16 is 4.'],
        ['id' => 2, 'question' => 'Solve: 2x = 10. What is x?', 'answer' => 'x equals 5.'],
        ['id' => 3, 'question' => 'What is the formula for the area of a circle?', 'answer' => 'The formula is πr².'],
        ['id' => 4, 'question' => 'What is the derivative of x²?', 'answer' => 'The derivative is 2x.']
    ] as $data)
    <div class="row">
        <!-- Question Section -->
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Question {{ $data['id'] }}</h5>
                </div>
                <div class="card-body">
                    <form action="#" id="questionForm{{ $data['id'] }}">
                        <div class="form-group">
                            <label>Question</label>
                            <textarea class="tinymce form-control" rows="3">{{ $data['question'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Answer</label>
                            <textarea class="tinymce form-control" rows="3">{{ $data['answer'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Comments</label>
                            <textarea class="form-control" rows="3" placeholder="Add comments"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Specs Section -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Specifications</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Spec #</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 10; $i++)
                            <tr>
                                <td>Spec {{ $i }}</td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Submit Button -->
    <div class="form-group mb-0 row">
        <div class="col-md-10 offset-md-2">
            <button type="button" class="btn btn-success me-2" onclick="handleCompleteEdit()">Complete Edit</button>
        </div>
    </div>
</div>

<!-- TinyMCE Script -->
<script src="{{ asset('assets/js/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script>
    tinymce.init({
        selector: 'textarea.tinymce',
        plugins: 'lists link image table code',
        toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code',
        height: 300,
        branding: false
    });

    function handleCompleteEdit() {
        alert('Success! The edits have been completed and sent back to the department.');
    }
</script>

@endsection
