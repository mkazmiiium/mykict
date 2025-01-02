@extends('layouts.master')

@section('content')

<div class="content container-fluid">
    <div class="row">
        <div class="col-xl-12">

            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Edit Post</h3>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="bank-inner-details">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>CourseID<span class="text-danger">*</span></label>
                                    <label>CourseName<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="All the Lorem Ipsum generators on the Internet">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Blog Image</label>
                                    <div class="change-photo-btn">
                                        <div>
                                            <p>Upload File</p>
                                        </div>
                                        <input type="file" class="upload">
                                    </div>
                                </div>
                            </div>
                            <!-- Add PDF Upload Section -->
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Upload and Display PDF Document</label>
                                    <input type="file" class="upload" accept="application/pdf" onchange="previewPDF(this)">
                                </div>
                            </div>
                            <!-- PDF Display Section -->
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>PDF Preview</label>
                                    <embed id="pdfPreview" src="" type="application/pdf" width="100%" height="500px" style="border: 1px solid #ced4da; display: none;">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <div id="editor"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-categories-btn pt-0">
                        <div class="bank-details-btn">
                            <a href="blog.html" class="btn bank-cancel-btn me-2">Send to Department</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    function previewPDF(input) {
        const file = input.files[0];
        if (file && file.type === "application/pdf") {
            const reader = new FileReader();
            reader.onload = function (e) {
                const pdfPreview = document.getElementById('pdfPreview');
                pdfPreview.src = e.target.result;
                pdfPreview.style.display = "block";
            };
            reader.readAsDataURL(file);
        } else {
            alert("Please upload a valid PDF file.");
        }
    }
</script>

@endsection
