@extends('layouts.master')

@section('content')

<div class="page-wrapper">
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
<form action="#">
<div class="form-group row">
<label class="col-form-label col-md-2">Name</label>
<div class="col-md-10">
<input type="text" class="form-control">
</div>
</div>
<!-- <div class="form-group row">
<label class="col-form-label col-md-2">Matric Number</label>
<div class="col-md-10">
<input type="text" class="form-control" disabled="disabled">
</div>
</div> -->
<div class="form-group row">
<label class="col-form-label col-md-2">Matric Number</label>
<div class="col-md-10">
<input type="text" class="form-control" value="readonly" readonly="readonly">
</div>
</div>
<div class="form-group row">
<label class="col-form-label col-md-2">Programme</label>
<div class="col-md-10">
<input type="text" class="form-control" placeholder="BIT / BCS">
</div>
</div>
<div class="form-group row">
<label class="col-form-label col-md-2">Specialization</label>
<div class="col-md-10">
<select class="form-control form-select">
<option>-- Select --</option>
<option></option>
<option>Option 2</option>
<option>Option 3</option>
<option>Option 4</option>
<option>Option 5</option>
</select>
</div>
</div>

<div class="form-group row">
<label class="col-form-label col-md-2">Year</label>
<div class="col-md-10">

<div class="radio">
    <label>
    <input type="radio" name="radio"> Year 1
    </label>
</div>

<div class="radio">
    <label>
    <input type="radio" name="radio"> Year 2
    </label>
</div>

<div class="radio">
    <label>
    <input type="radio" name="radio"> Year 3
    </label>
</div>

<div class="radio">
    <label>
    <input type="radio" name="radio"> Year 4
    </label>
</div>

</div>
</div>


</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>