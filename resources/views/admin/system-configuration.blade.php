<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Configuration</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- custom css -->
    <link type="text/css" href="{{url('css/system-config.css')}}" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark sticky-top navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('auth.logout-admin')}}"><img class="img-logo" style="height:48px; width: 48px" src="https://www.lnu.edu.ph/images/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto font-weight-semibold">
                    <li class="nav-item px-2">
                        <a class="nav-link active">Welcome, <b></b></a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="/staff/admin/manage-users">Manage Users</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="/staff/admin/system-configuration">System Configuration</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="">Logout</a>
                    </li>
                </ul>
            </div>
    </nav>

    <section class="manage-users-section">
        <div class="manage-users-body container mt-5 px-4">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>System Configuration</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addNewSemester" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalForm"><i class="material-icons">&#xE147;</i> <span>Add New Semester</span></a>
                    </div>
                </div>
            </div>
            <hr>
            <!-- RH: this is bootstrap 5 tabbed panel -->
            <ul class="nav nav-tabs nav-fill mt-4 mb-2" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link link-dark active" id="active-semester-tab" data-bs-toggle="tab" href="#active-semester" role="tab" aria-controls="active-semester" aria-selected="true">Active Semester</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link link-dark" id="announcement-tab" data-bs-toggle="tab" href="#announcement" role="tab" aria-controls="announcement" aria-selected="false">Announcement</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link link-dark" id="faqs-tab" data-bs-toggle="tab" href="#faqs" role="tab" aria-controls="faqs" aria-selected="false">FAQs</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link link-dark" id="technical-support-tab" data-bs-toggle="tab" href="#technical-support" role="tab" aria-controls="technical-support" aria-selected="false">Technical Support</a>
                </li>
            </ul>
            <div class="manage-user-body container px-4">
                <div class="tab-content mb-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="active-semester" role="tabpanel" aria-labelledby="active-semester-tab">
                        <div class="table-wrapper row">
                            <table class="table table-fixed table-hover">
                                <thead>
                                    <tr>
                                        <th>School Year</th>
                                        <th>Semester</th>
                                        <th>Status</th>
                                        <th>Toggle Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>
                                            <a href="" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                            <a href="" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>
                                            <a href="" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                            <a href="" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>
                                            <a href="" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                            <a href="" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>
                                            <a href="" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                            <a href="" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>
                                            <a href="" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--announcement-tab-->
                    <div class="tab-pane fade" id="announcement" role="tabpanel" aria-labelledby="announcement-tab">
                        <div class="tab-pane fade active show" id="announcement" role="tabpanel" aria-labelledby="announcement-tab" style="max-width: 100%;">
                            <h4 class="title mb-2" style="width: 100%;">Configure Announcement and Updates</h4>
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="button" autocomplete="on">Post New Announcement</button>
                            <div class="alert alert-success" style="display: none;"></div>
                            <hr class="default-divider ml-auto mt-1 mb-2">
                            <table class="table default-table">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Date Posted</th>
                                            <th>Title</th>
                                            <th>Preview</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                </table>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="faqs" role="tabpanel" aria-labelledby="faqs-tab">
                    </div>
                    <div class="tab-pane fade" id="technical-support" role="tabpanel" aria-labelledby="technical-support-tab">
                        .
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer mb-0">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-8">
                    <div class="row text-white">
                        <div class="col col-12 col-sm-6">
                            <h5>Contact Us</h5>
                            <ul>
                                <li><a>Leyte Normal University</a></li>
                                <li><a>B. Paterno Street</a></li>
                                <li><a>Tacloban City, Leyte 6500</a></li>
                                <li><a><b>Phone:</b>+63 (53) 321 2176</a></li>
                                <li><a><b>Email:</b>info@lnu.edu.ph</a></li>
                            </ul>
                        </div>
                        <div class="col col-12 col-sm-3">
                            <h5>Useful Links</h5>
                            <ul>
                                <li><a href="#">LNU Official Website</a></li>
                                <li><a href="#">LNU Student Portal</a></li>
                                <li><a href="#">Enrollment Updates</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 my-auto">
                    <img class="footer-logo" src="https://www.enrollment.lnu.edu.ph/assets/images/lnu_logo.png" alt="logo" />
                    <p>Follow our official social media platforms:</p>
                    <div class="row">
                        <div class="col col-xs-6 ml-2">
                            <i class="bi bi-facebook" style="font-size: 2rem; margin-right: 20px;"></i>
                            <i class="bi bi-youtube" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>
                <hr>
                <p class="text-light text-center">© Copyright <b>Leyte Normal University</b> . All Rights Reserved 2022</p>
            </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>