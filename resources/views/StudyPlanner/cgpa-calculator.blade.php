@extends('layouts.master')

@section('content')
<!--<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>-->

    <div class="container mt-5">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('SSP.welcome') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('SSP.dashboard') }}">Student Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('view.course') }}">View Suggested Courses</a></li>
                        <li class="breadcrumb-item active">CGPA Calculator</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center mb-4">
            <h1 class="text-primary">Smart CGPA Calculator & Forecaster</h1>
            <p class="text-muted">Plan your academic success with ease! Calculate your GPA, forecast CGPA changes, and
                explore various scenarios.</p>
        </div>

        <form id="cgpaForm" class="shadow p-4 rounded bg-light">
            <!-- Current CGPA Details -->
            <h4 class="text-secondary mb-4">Current CGPA Details</h4>
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="currentCgpa" class="form-label">Current CGPA</label>
                        <input type="number" class="form-control" id="currentCgpa" placeholder="e.g., 3.50" step="0.01"
                            min="0" max="4.00">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="totalCredits" class="form-label">Total Credit Hours Completed</label>
                        <input type="number" class="form-control" id="totalCredits" placeholder="e.g., 90" min="0">
                    </div>
                </div>
            </div>

            <!-- Target CGPA Input -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="targetCgpa" class="form-label">Target CGPA</label>
                    <input type="number" class="form-control" id="targetCgpa" placeholder="e.g., 3.75" step="0.01"
                        min="0" max="4.00">
                </div>
            </div>

            <!-- New Semester Courses -->
            <h4 class="text-secondary mb-4">New Semester Courses</h4>
            <div id="coursesContainer">
                <div class="row mb-3 course-entry">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Course Name" name="courseName[]">
                    </div>
                    <div class="col-md-3">
                        <input type="number" class="form-control" placeholder="Credit Hours" name="creditHours[]"
                            min="1">
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" name="grade[]">
                            <option value="" selected disabled>Grade</option>
                            <option value="4.00">A (4.00)</option>
                            <option value="3.67">A- (3.67)</option>
                            <option value="3.33">B+ (3.33)</option>
                            <option value="3.00">B (3.00)</option>
                            <option value="2.67">B- (2.67)</option>
                            <option value="2.33">C+ (2.33)</option>
                            <option value="2.00">C (2.00)</option>
                            <option value="1.67">C- (1.67)</option>
                            <option value="1.33">D+ (1.33)</option>
                            <option value="1.00">D (1.00)</option>
                            <option value="0.00">F (0.00)</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-outline-primary btn-sm mb-4" id="addCourse">+ Add Another Course</button>

            <!-- Calculate Button -->
            <div class="text-center">
                <button type="button" class="btn btn-primary btn-lg" id="calculateGpa">Calculate GPA/CGPA</button>
            </div>
        </form>

        <!-- Results -->
        <div class="mt-5">
            <h4 class="text-secondary">Results</h4>
            <div class="alert alert-info text-center" id="result" style="display: none;">
                <p class="mb-2"><strong>Semester GPA:</strong> <span id="semesterGpa" class="text-success"></span></p>
                <p class="mb-2"><strong>Updated CGPA:</strong> <span id="updatedCgpa" class="text-success"></span></p>
                <p><strong>Required GPA to Reach Target:</strong> <span id="requiredGpa" class="text-danger"></span></p>
            </div>

            <!-- Forecasting Section -->
            <div id="forecastSection" class="mt-5">
                <h4 class="text-secondary">Forecasting Scenarios</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Reach 3.50 (Min First Class):</strong> <span id="reachMinFirstClass"></span>
                    </li>
                    <li class="list-group-item">
                        <strong>Reach 4.00 (Max First Class):</strong> <span id="reachMaxFirstClass"></span>
                    </li>
                    <li class="list-group-item">
                        <strong>Reach Target CGPA:</strong> <span id="reachTargetCgpa"></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('addCourse').addEventListener('click', function() {
            const courseContainer = document.getElementById('coursesContainer');
            const courseEntry = `
            <div class="row mb-3 course-entry">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Course Name" name="courseName[]">
                </div>
                <div class="col-md-3">
                    <input type="number" class="form-control" placeholder="Credit Hours" name="creditHours[]" min="1">
                </div>
                <div class="col-md-3">
                    <select class="form-select" name="grade[]">
                        <option value="" selected disabled>Grade</option>
                        <option value="4.00">A (4.00)</option>
                        <option value="3.67">A- (3.67)</option>
                        <option value="3.33">B+ (3.33)</option>
                        <option value="3.00">B (3.00)</option>
                        <option value="2.67">B- (2.67)</option>
                        <option value="2.33">C+ (2.33)</option>
                        <option value="2.00">C (2.00)</option>
                        <option value="1.67">C- (1.67)</option>
                        <option value="1.33">D+ (1.33)</option>
                        <option value="1.00">D (1.00)</option>
                        <option value="0.00">F (0.00)</option>
                    </select>
                </div>
            </div>
        `;
            courseContainer.insertAdjacentHTML('beforeend', courseEntry);
        });

        document.getElementById('calculateGpa').addEventListener('click', function() {
            // Fetch user inputs and ensure default values are set
            const currentCgpa = parseFloat(document.getElementById('currentCgpa').value) || 0;
            const totalCredits = parseFloat(document.getElementById('totalCredits').value) || 0;
            const targetCgpa = parseFloat(document.getElementById('targetCgpa').value) || 0;

            // Initialize semester totals
            let semesterPoints = 0;
            let semesterCredits = 0;

            // Calculate total grade points and credit hours for the semester
            const courses = document.querySelectorAll('.course-entry');
            courses.forEach(course => {
                const creditHours = parseFloat(course.querySelector('input[name="creditHours[]"]').value) ||
                    0;
                const gradePoint = parseFloat(course.querySelector('select[name="grade[]"]').value) || 0;
                semesterPoints += creditHours * gradePoint;
                semesterCredits += creditHours;
            });

            // Calculate Semester GPA and Updated CGPA
            const semesterGpa = semesterCredits > 0 ? (semesterPoints / semesterCredits).toFixed(2) : '0.00';
            const updatedCgpa = totalCredits + semesterCredits > 0 ?
                ((currentCgpa * totalCredits + semesterPoints) / (totalCredits + semesterCredits)).toFixed(2) :
                '0.00';

            // Display Semester GPA and Updated CGPA
            document.getElementById('semesterGpa').innerText = semesterGpa;
            document.getElementById('updatedCgpa').innerText = updatedCgpa;

            // Calculate Required GPA for benchmarks and target CGPA
            const calculateRequiredGpa = (targetCgpa) => {
                return semesterCredits > 0 ?
                    ((targetCgpa * (totalCredits + semesterCredits)) - (currentCgpa * totalCredits)) /
                    semesterCredits :
                    0;
            };

            const requiredGpaForMinFirstClass = calculateRequiredGpa(3.50).toFixed(2);
            const requiredGpaForMaxFirstClass = calculateRequiredGpa(4.00).toFixed(2);
            const requiredGpaForTarget = calculateRequiredGpa(targetCgpa).toFixed(2);

            // Display the required GPA to reach the target CGPA
            document.getElementById('requiredGpa').innerText = requiredGpaForTarget > 0 ? requiredGpaForTarget :
                "N/A";

            // Display Forecasting Scenarios
            document.getElementById('reachMinFirstClass').innerText = requiredGpaForMinFirstClass > 0 ?
                requiredGpaForMinFirstClass :
                "N/A";
            document.getElementById('reachMaxFirstClass').innerText = requiredGpaForMaxFirstClass > 0 ?
                requiredGpaForMaxFirstClass :
                "N/A";
            document.getElementById('reachTargetCgpa').innerText = updatedCgpa >= targetCgpa ?
                "Achieved!" :
                `Requires at least ${requiredGpaForTarget} GPA this semester.`;

            // Show Results and Forecasting Section
            document.getElementById('result').style.display = 'block';
            document.getElementById('forecastSection').style.display = 'block';
        });
    </script>
@endsection
