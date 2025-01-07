@extends('layouts.master')

@section('content')
    <!--<head>

                                        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

                                        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

                                        <link rel="stylesheet" href="assets/plugins/feather/feather.css">

                                        <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">

                                        <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
                                        <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
                                        <link rel="stylesheet" href="assets/css/style.css">

                                        </head>-->
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Welcome Nur Ain!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('SSP.welcome') }}">Home</a></li>
                            <li class="breadcrumb-item active">Student Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('view.course') }}">View Suggested Courses</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('cgpa.calculator') }}">CGPA Calculator</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Matric No</h6>
                                <h3>2127942</h3>

                                <h6>Name</h6>
                                <h3>Nur Ain binti Lizam</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/teacher-icon-01.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Major</h6>
                                <h3>BIT</h3>
                                <h6>Specialization</h6>
                                <h3>Business Intelligence and Analytics</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/teacher-icon-02.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Year</h6>
                                <h3>3</h3>
                                <h6>Semester</h6>
                                <h3>2</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/student-icon-01.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                    <div class="card-body">
                        <div class="db-widgets d-flex justify-content-between align-items-center">
                            <div class="db-info">
                                <h6>Current CGPA</h6>
                                <h3>3.54</h3>
                                <h6>Targetted CGPA</h6>
                                <h3>3.75</h3>
                            </div>
                            <div class="db-icon">
                                <img src="assets/img/icons/student-icon-02.svg" alt="Dashboard Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12 col-lg-12 col-xl-12">
                <div class="card flex-fill comman-shadow">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="card-title">Study Plan Summary </h5>
                                <p>for Upcoming Semester</p>
                            </div>
                            <div class="col-6">
                                <ul class="chart-list-out">
                                    <li><span class="circle-blue"></span><span class="circle-gray"></span><span
                                            class="circle-gray"></span></li>
                                    <li class="lesson-view-all"><a href="{{ url('view-course') }}">View Study Plan</a>
                                    </li>
                                    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="dash-circle">
                        <div class="row">
                            <div class="col-lg-3 col-md-12 dash-widget1">
                                <div class="circle-bar circle-bar2">
                                    <div class="circle-graph2" data-percent="75">
                                        <b>75%</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="dash-details">
                                    <div class="lesson-activity">
                                        <div class="lesson-imgs">
                                            <img src="assets/img/icons/lesson-icon-01.svg" alt="">
                                        </div>
                                        <div class="views-lesson">
                                            <h5>Total subjects </h5>
                                            <h4>6</h4>
                                        </div>
                                    </div>
                                    <div class="lesson-activity">
                                        <div class="lesson-imgs">
                                            <img src="assets/img/icons/lesson-icon-02.svg" alt="">
                                        </div>
                                        <div class="views-lesson">
                                            <h5>Total Credit Hours</h5>
                                            <h4>13.5</h4>
                                        </div>
                                    </div>
                                    <div class="lesson-activity">
                                        <div class="lesson-imgs">
                                            <img src="assets/img/icons/lesson-icon-03.svg" alt="">
                                        </div>
                                        <div class="views-lesson">
                                            <h5>Credit Hours Completed</h5>
                                            <h4>110/132</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="dash-details">
                                    <div class="lesson-activity">
                                        <div class="lesson-imgs">
                                            <img src="assets/img/icons/lesson-icon-04.svg" alt="">
                                        </div>
                                        <div class="views-lesson">
                                            <h5>Semester Left</h5>
                                            <h4>2</h4>
                                        </div>
                                    </div>
                                    <div class="lesson-activity">
                                        <div class="lesson-imgs">
                                            <img src="assets/img/icons/lesson-icon-05.svg" alt="">
                                        </div>
                                        <div class="views-lesson">
                                            <h5>Specialization</h5>
                                            <h4>Bachelor of Information Technology</h4>
                                        </div>
                                    </div>
                                    <div class="lesson-activity">
                                        <div class="lesson-imgs">
                                            <img src="assets/img/icons/lesson-icon-06.svg" alt="">
                                        </div>
                                        <div class="views-lesson">
                                            <h5>Year of Study</h5>
                                            <h4>3/4 years</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 d-flex align-items-center justify-content-center">
                                <div class="skip-group">
                                    <!--<button type="submit" href="{{ url('update-profile') }}" class="btn btn-info skip-btn">Edit</button>-->
                                    <form action="{{ url('update-profile') }}" method="get">
                                        <button type="submit" class="btn btn-info skip-btn">Edit</button>
                                    </form>
                                    <button type="submit" class="btn btn-info continue-btn">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-12 d-flex">
                        <div class="card flex-fill comman-shadow">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">GPA/CGPA Tracker</h5>
                                    </div>
                                    <!-- GPA/CGPA Chart -->
                                    <div class="card-body">
                                        <div id="gpaCgpaChart" style="height: 350px;"></div>
                                    </div>

                                    <!--<div class="col-6">
                                                    <ul class="chart-list-out">
                                                        <li><span class="circle-blue"></span>CGPA</li>
                                                        <li><span class="circle-green"></span>GPA</li>
                                                        <li class="star-menus"><a href="javascript:;"><i
                                                                    class="fas fa-ellipsis-v"></i></a></li>
                                                    </ul>
                                                </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xl-12 d-flex">
                    <div class="card flex-fill comman-shadow">
                        <div class="card-body">
                            <div id="calendar-doctor" class="calendar-container"></div>
                            <div class="calendar-info calendar-info1">
                                <div class="up-come-header">
                                    <h2>Upcoming Subjects</h2>
                                    <span><a href="{{ url('view-course') }}"><i class="feather-plus"></i></a></span>
                                </div>
                                <div class="upcome-event-date">
                                    <h3>Semester 2 2025/2026</h3>
                                    <span><i class="fas fa-ellipsis-h"></i></span>
                                </div>
                                <div class="calendar-details">
                                    <p>INFO 3301</p>
                                    <div class="calendar-box normal-bg">
                                        <div class="calandar-event-name">
                                            <h4>Web App Development</h4>
                                            <h5>Target Grade: A</h5>
                                        </div>
                                        <span>Credit Hour: 3</span>
                                    </div>
                                </div>
                                <div class="calendar-details">
                                    <p>INFO 3302</p>
                                    <div class="calendar-box normal-bg">
                                        <div class="calandar-event-name">
                                            <h4>Data Warehousing </h4>
                                            <h5>Target Grade: A-</h5>
                                        </div>
                                        <span>Credit Hour: 3</span>
                                    </div>
                                </div>
                                <div class="calendar-details">
                                    <p>INFO 4401</p>
                                    <div class="calendar-box normal-bg">
                                        <div class="calandar-event-name">
                                            <h4>Data Mining</h4>
                                            <h5>Target Grade: B+</h5>
                                        </div>
                                        <span>Credit Hour: 3</span>
                                    </div>
                                </div>
                                <div class="calendar-details">
                                    <p>INFO 4402</p>
                                    <div class="calendar-box normal-bg">
                                        <div class="calandar-event-name">
                                            <h4>E-Commerce</h4>
                                            <h5>Target Grade: A</h5>
                                        </div>
                                        <span>Credit Hour: 3</span>
                                    </div>
                                </div>
                                <div class="calendar-details">
                                    <p>CCUB 3301</p>
                                    <div class="calendar-box break-bg">
                                        <div class="calandar-event-name">
                                            <h4>Usrah In Action 2</h4>
                                            <h5>Target Grade: A</h5>
                                        </div>
                                        <span>Credit Hour: 1</span>
                                    </div>
                                </div>

                                <div class="calendar-details">
                                    <p>CCFA 3302</p>
                                    <div class="calendar-box normal-bg">
                                        <div class="calandar-event-name">
                                            <h4>First Aid Skill 2</h4>
                                            <h5>Target Grade: A</h5>
                                        </div>
                                        <span>Credit Hour: 0.5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="assets/js/jquery-3.6.0.min.js"></script> <!--assets ni yg buat tepi2 takleh tekan and circle tu ada bentuk-->
        <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
        <script>
            // ApexCharts Configuration for GPA/CGPA
            var options = {
                chart: {
                    height: 350,
                    type: 'line',
                    toolbar: {
                        show: false
                    },
                },
                series: [{
                        name: 'GPA',
                        data: [3.2, 3.4, 3.5, 3.6, 3.7, 3.8]
                    },
                    {
                        name: 'CGPA',
                        data: [3.2, 3.3, 3.4, 3.5, 3.54, 3.6]
                    }
                ],
                xaxis: {
                    categories: ['Sem 1', 'Sem 2', 'Sem 3', 'Sem 4', 'Sem 5', 'Sem 6'],
                    title: {
                        text: 'Semesters'
                    }
                },
                yaxis: {
                    title: {
                        text: 'GPA/CGPA'
                    }
                },
                colors: ['#1E90FF', '#32CD32'],
                stroke: {
                    width: 2,
                    curve: 'smooth'
                },
                markers: {
                    size: 4
                }
            };

            var chart = new ApexCharts(document.querySelector("#gpaCgpaChart"), options);
            chart.render();
        </script>
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


        <script src="assets/js/feather.min.js"></script>


        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/apexchart/apexcharts.min.js"></script>


        <script src="assets/js/circle-progress.min.js"></script>


        <script src="assets/js/script.js"></script>

        </body>
    @endsection
