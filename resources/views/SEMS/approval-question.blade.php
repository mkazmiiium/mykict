@extends('layouts.master')

@section('content')

<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Question Approval</h3>
                <ul class="breadcrumb justify-content-center" style="list-style: none; padding: 0; margin-top: 20px;">
                    <li class="breadcrumb-item">
                        <a href="SEMS-dashboard" style="color: #000000; text-decoration: none;">SEMS</a>
                    </li>
                    <li class="breadcrumb-item active" style="color: #000000;">Review Questions</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <form action="#" id="courseInfoForm">
                    <div class="form-group row">
                        <label class="col-form-label col-md-4">Course Name</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="Random Question" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-4">Course ID</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="QSTN-143" readonly>
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
                            <td><input type="checkbox" checked readonly></td>
                            <td><input type="checkbox" checked readonly></td>
                            <td><input type="checkbox" readonly></td>
                            <td><input type="checkbox" readonly></td>
                        </tr>
                        <tr>
                            <td>Q2</td>
                            <td><input type="checkbox" readonly></td>
                            <td><input type="checkbox" checked readonly></td>
                            <td><input type="checkbox" checked readonly></td>
                            <td><input type="checkbox" readonly></td>
                        </tr>
                        <tr>
                            <td>Q3</td>
                            <td><input type="checkbox" readonly></td>
                            <td><input type="checkbox" readonly></td>
                            <td><input type="checkbox" checked readonly></td>
                            <td><input type="checkbox" checked readonly></td>
                        </tr>
                        <tr>
                            <td>Q4</td>
                            <td><input type="checkbox" checked readonly></td>
                            <td><input type="checkbox" readonly></td>
                            <td><input type="checkbox" checked readonly></td>
                            <td><input type="checkbox" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @foreach ([
        ['id' => 1, 'question' => 'What is the capital of France?', 'answer' => 'The capital of France is Paris.'],
        ['id' => 2, 'question' => 'What is 2 + 2?', 'answer' => '2 + 2 equals 4.'],
        ['id' => 3, 'question' => 'Who wrote "Hamlet"?', 'answer' => 'William Shakespeare wrote "Hamlet".'],
        ['id' => 4, 'question' => 'What is the chemical symbol for water?', 'answer' => 'The chemical symbol for water is H2O.'],
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
                            <textarea class="form-control" rows="3" readonly>{{ $data['question'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Answer</label>
                            <textarea class="form-control" rows="3" readonly>{{ $data['answer'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Comments</label>
                            <textarea class="form-control" rows="3" placeholder="Add comments"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Specs and TOS Table Section -->
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

            <div class="card mt-4">
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
                            <tr>
                                <td>Q{{ $data['id'] }}</td>
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
    @endforeach

    <!-- Submit Buttons -->
    <div class="form-group mb-0 row">
        <div class="col-md-10 offset-md-2">
            <button type="button" class="btn btn-success me-2" onclick="handleButtonClick('Approve')">Approve</button>
            <button type="button" class="btn btn-danger" onclick="handleButtonClick('Reject')">Reject</button>
        </div>
    </div>
</div>

<script>
    function handleButtonClick(action) {
        alert('Questions have been ' + action.toLowerCase() + 'ed!');
    }
</script>

@endsection
