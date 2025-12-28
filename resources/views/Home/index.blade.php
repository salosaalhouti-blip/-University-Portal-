@extends('layouts.guest')

@section('title', 'University Portal - Home')

@section('content')
<!-- Home Section -->
<section id="home" class="hero-section">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center">
                    <h1 class="display-3 fw-bold mb-4 text-white">
                        <i class="bi bi-mortarboard"></i>
                        Welcome to University Portal
                    </h1>
                    <p class="lead mb-4 text-white" style="font-size: 1.5rem;">
                        Your comprehensive platform for managing academic excellence. 
                        Connect, learn, and excel in your educational journey.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="landing-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="landing-card">
                    <h2 class="fw-bold mb-4">
                        <i class="bi bi-info-circle text-primary"></i>
                        About University Portal
                    </h2>
                    <p class="mb-3">
                        University Portal is a comprehensive management system designed to streamline 
                        academic operations and enhance the educational experience for students, 
                        professors, and administrators.
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-4 mb-3">
                            <div class="p-3 border rounded">
                                <h5 class="fw-bold">
                                    <i class="bi bi-people-fill text-primary"></i>
                                    Student Management
                                </h5>
                                <p class="mb-0 small">
                                    Efficiently manage student records, enrollments, and academic progress.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="p-3 border rounded">
                                <h5 class="fw-bold">
                                    <i class="bi bi-book-fill text-primary"></i>
                                    Course Management
                                </h5>
                                <p class="mb-0 small">
                                    Organize courses, track schedules, and manage academic resources.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="p-3 border rounded">
                                <h5 class="fw-bold">
                                    <i class="bi bi-person-badge-fill text-primary"></i>
                                    Faculty Management
                                </h5>
                                <p class="mb-0 small">
                                    Manage professor profiles and their course assignments.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="landing-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="landing-card">
                    <h2 class="fw-bold mb-4">
                        <i class="bi bi-envelope-fill text-primary"></i>
                        Contact Us
                    </h2>
                    <p class="mb-4">
                        Have questions or need assistance? We're here to help. Reach out to us through 
                        any of the following channels.
                    </p>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="p-3 border rounded">
                                <h5 class="fw-bold">
                                    <i class="bi bi-geo-alt-fill text-primary"></i>
                                    Address
                                </h5>
                                <p class="mb-0">
                                    123 University Avenue<br>
                                    Libyan City, baluon 12345
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="p-3 border rounded">
                                <h5 class="fw-bold">
                                    <i class="bi bi-telephone-fill text-primary"></i>
                                    Contact Information
                                </h5>
                                <p class="mb-0">
                                    <strong>Phone:</strong> (+218) 919999999<br>
                                    <strong>Email:</strong> info@limu.edu
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h5 class="fw-bold mb-3">Office Hours</h5>
                        <p class="mb-0">
                            Monday - Friday: 8:00 AM - 5:00 PM<br>
                            Saturday: 9:00 AM - 1:00 PM<br>
                            Sunday: Closed
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
