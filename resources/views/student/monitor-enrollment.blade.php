<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enrollment Status</title>

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
      <a class="navbar-brand" href="/welcome"><img class="img-logo" style="height:48px; width: 48px" src="https://www.lnu.edu.ph/images/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ms-auto font-weight-semibold">
          <li class="nav-item px-2">
            <a class="nav-link" href="#">Welcome, {{$LoggedUserInfo->first_name}}</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="/student/profile">Student Profile</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="{{route('auth.enrollment-status')}}">Monitor Enrollment</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="{{route('auth.logout-student')}}">Logout</a>
          </li>
        </ul>
      </div>
  </nav>

  <section class="manage-users-section">
    <div class="manage-users-body container mt-5 px-4">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-6">
          <div class="col-sm-8">
            <h2>Enrollment Profile</h2>
            <div class="alert alert-light">
              <div class="row">
                <div class="col-md-2">
                  <p class="mb-0" style="font-size: 40px; text-align: center;"><i class="bx bx-user-circle"></i></p>
                </div>
                <div class="col-md-5">
                  <p class="profile-text">Student Number: <span style="font-weight: 600;"> </span> </p>
                  <p class="profile-text">Contact Number: <span style="font-weight: 600;"> </span> </p>
                </div>
                <div class="col-md-5">
                  <p class="profile-text">Name: <span style="font-weight: 600; text-transform: uppercase;"> </span> </p>
                  <p class="profile-text">Email: <span style="font-weight: 600;"></span> </p>
                </div>
              </div>
            </div>
            <p class="form-header"><b>You are currently enrolled with the following details: </b></p>

          </div>
          <div class="row">
            <div class="col-md-4">
              <p class="sub-text">Student Type: <span style="font-weight: 600; color: #4285F4;"> Continuing</span> </p>
            </div>
            <div class="col-md-4">
              <p class="sub-text">Year Level: <span style="font-weight: 600; color: #4285F4;"> 4</span> </p>
            </div>
            <div class="col-md-4">
              <p class="sub-text">Program: <span style="font-weight: 600; color: #4285F4;"> BSIT</span> </p>
            </div>
          </div>
        </div>
        <hr>
        <!-- RH: this is bootstrap 5 tabbed panel -->
        <ul class="nav nav-tabs nav-fill mt-4 mb-2" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link link-dark active" id="active-semester-tab" data-bs-toggle="tab" href="#active-semester" role="tab" aria-controls="active-semester" aria-selected="true">Enrollment Process</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link link-dark" id="enrolled-tab" data-bs-toggle="tab" href="#enrolled-subjects" role="tab" aria-controls="enrolled-subjects" aria-selected="false">Enrolled Subjects</a>
          </li>
        </ul>

        <div class="manage-user-body container px-4">
          <div class="tab-content mb-5" id="myTabContent">
            <div class="tab-pane fade show active" id="active-semester" role="tabpanel" aria-labelledby="active-semester-tab">
              <div class="table-wrapper row">
                <table class="table table-fixed table-hover">
                  <h4 class="title mb-2">Status Monitoring</h4>

                </table>
                <table class="table default-table">
                  <thead>
                    <tr>
                      <th scope="col" style="width: 60%">Enrollment Procedure</th>
                      <th scope="col" style="width: 40%; text-align: center;">Current Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <p class="sub-text">1. Submission of Entrance Documents to the Registrar's Office <i>(for transferee/new students only):</i></p>
                      </td>
                      <td>
                        <p class="status-text"><span style="font-weight: 600; font-size: 12px; color: #c70e42">
                            <i class="bx bx-x-circle"></i> N/A</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="sub-text">2. Submission of Medical Examination Result to the Health Services Office <i>(for transferee/new students only):</i></p>
                      </td>
                      <td>
                        <p class="status-text"><span style="font-weight: 600; font-size: 12px; color: #c70e42">
                            <i class="bx bx-x-circle"></i> N/A</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="sub-text">3. Subject advisement by the Enrolling Teacher:</p>
                      </td>
                      <td>
                        <p class="status-text"><span style="font-weight: 600; font-size: 12px; color: #13a166">
                            <i class="bx bx-check-circle"></i> Assigned Subjects by the Enrolling Teacher @ 2022-08-04 10:38:02</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="sub-text ml-4">3.1. Unit Head Validation <i>(for on-probation students only):</i></p>
                      </td>
                      <td>
                        <p class="status-text"><span style="font-weight: 600; font-size: 12px; color: #c70e42">
                            <i class="bx bx-x-circle"></i> N/A</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="sub-text ml-4">3.2. Dean's Validation <i>(for on-probation students only):</i></p>
                      </td>
                      <td>
                        <p class="status-text"><span style="font-weight: 600; font-size: 12px; color: #c70e42">
                            <i class="bx bx-x-circle"></i> N/A</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="sub-text">4. Subject Enlistment at the Management Information System Office:</p>
                      </td>
                      <td>
                        <p class="status-text"><span style="font-weight: 600; font-size: 12px; color: #0e52c7">
                            <i class="bx bx-loader-circle"></i> Pending</span></p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="sub-text">5. Validation and issuance of the Entrance Slip:</p>
                      </td>
                      <td>
                        <p class="status-text"><span style="font-weight: 600; font-size: 12px; color: #0e52c7">
                            <i class="bx bx-loader-circle"></i> Pending</span></p>
                      </td>

                    </tr>
                  </tbody>
                </table>
                <hr class="default-divider ml-auto mt-1 mb-2">
                <p class="form-header">Legend: </p>
                <div class="row">
                  <div class="col-md-4">
                    <p class="sub-text"><span style="font-weight: 600; color: #c70e42"><i class="bx bx-x-circle"></i> N/A</span> - Process not applicable</p>
                  </div>
                  <div class="col-md-4">
                    <p class="sub-text"><span style="font-weight: 600; color: #0e52c7"><i class="bx bx-loader-circle"></i> Pending</span> - Process is ongoing </p>
                  </div>
                  <div class="col-md-4">
                    <p class="sub-text"><span style="font-weight: 600; color: #13a166"><i class="bx bx-check-circle"></i> Done</span> - Process is done </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade show active" id="enrolled-tab" role="tabpanel" aria-labelledby="active-semester-tab">
              <div class="tab-pane fade active show" id="subjects" role="tabpanel" aria-labelledby="subjects" style="max-width: 100%;">
                <h4 class="title mb-2" style="width: 100%;">Enrolled Subjects</h4>
                <div class="alert alert-success" style="display: none;"></div>
                <hr class="default-divider ml-auto mt-1 mb-2">
                <p class="profile-text">Enrollment Status: <span style="font-weight: 600; color: #135e24; text-transform: uppercase; "> Regular</span> </p>
                <hr class="default-divider ml-auto mt-1 mb-2">
                <p class="form-header">List of enrolled subjects: </p>
                <table class="table default-table">
                <thead>
              <tr>         
                <th scope="col" style="width: 50%; text-align: left;">Subject Name</th>
                <th scope="col" style="width: 20%; text-align: center;">Units</th>
              </tr>
            </thead>
            <tbody>
              <tr>               
                <td>
                  <p class="sub-text" style="text-align: left;">{{$LoggedUserInfo->first_period}}</p>
                </td>
                <td>
                  <p class="status-text" style="text-align: center;">3</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p class="sub-text" style="text-align: left;">{{$LoggedUserInfo->second_period}}</p>
                </td>
                <td>
                  <p class="status-text" style="text-align: center;">3</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p class="sub-text" style="text-align: left;">{{$LoggedUserInfo->third_period}}</p>
                </td>
                <td>
                  <p class="status-text" style="text-align: center;">3</p>
                </td>
              </tr>
            </tbody>
                  





                </table>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>







  </section>
=======
      </div>
      <!-- RH: this is bootstrap 5 tabbed panel -->
      <ul class="nav nav-tabs nav-fill mt-4 mb-2" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link link-dark active" id="enrollment-process-tab" data-bs-toggle="tab" href="#enrollment-process" role="tab" aria-controls="enrollment-process" aria-selected="true">Enrollment Process</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link link-dark" id="enrolled-subjects-tab" data-bs-toggle="tab" href="#enrolled-subjects" role="tab" aria-controls="enrolled-subjects" aria-selected="false">Enrolled Subject</a>
        </li>
      </ul>
      <div class="manage-user-body container px-4">
        <div class="tab-content mb-5" id="myTabContent">
          <div class="tab-pane fade show active" id="enrollment-process" role="tabpanel" aria-labelledby="enrollment-process-tab">
            <div class="table-wrapper row">
              <table class="table default-table">
                <thead>
                  <tr>
                    <th scope="col" style="width: 60%">Enrollment Procedure</th>
                    <th scope="col" style="width: 40%; text-align: center;">Current Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <p class="sub-text">1. Submission of Entrance Documents to the Registrar's Office <i>(for transferee/new students only):</i></p>
                    </td>
                    <td>
                      <p class="status-text"><span style="font-weight: 600; font-size: 12px; color: #c70e42">
                          <i class="bx bx-x-circle"></i> N/A</span></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="sub-text">2. Submission of Medical Examination Result to the Health Services Office <i>(for transferee/new students only):</i></p>
                    </td>
                    <td>
                      <p class="status-text"><span style="font-weight: 600; font-size: 12px; color: #c70e42">
                          <i class="bx bx-x-circle"></i> N/A</span></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="sub-text">3. Subject advisement by the Enrolling Teacher:</p>
                    </td>
                    <td>
                      <p class="status-text"><span style="font-weight: 600; font-size: 12px; color: #13a166">
                          <i class="bx bx-check-circle"></i> Assigned Subjects by the Enrolling Teacher @ 2022-08-04 10:38:02</span></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="sub-text ml-4">3.1. Unit Head Validation <i>(for on-probation students only):</i></p>
                    </td>
                    <td>
                      <p class="status-text"><span style="font-weight: 600; font-size: 12px; color: #c70e42">
                          <i class="bx bx-x-circle"></i> N/A</span></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="sub-text ml-4">3.2. Dean's Validation <i>(for on-probation students only):</i></p>
                    </td>
                    <td>
                      <p class="status-text"><span style="font-weight: 600; font-size: 12px; color: #c70e42">
                          <i class="bx bx-x-circle"></i> N/A</span></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="sub-text">4. Subject Enlistment at the Management Information System Office:</p>
                    </td>
                    <td>
                      <p class="status-text"><span style="font-weight: 600; font-size: 12px; color: #0e52c7">
                          <i class="bx bx-loader-circle"></i> Pending</span></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="sub-text">5. Validation and issuance of the Entrance Slip:</p>
                    </td>
                    <td>
                      <p class="status-text"><span style="font-weight: 600; font-size: 12px; color: #0e52c7">
                          <i class="bx bx-loader-circle"></i> Pending</span></p>
                    </td>

                  </tr>
                </tbody>
              </table>
              <hr class="default-divider ml-auto mt-1 mb-2">
              <p class="form-header">Legend: </p>
              <div class="row">
                <div class="col-md-4">
                  <p class="sub-text"><span style="font-weight: 600; color: #c70e42"><i class="bx bx-x-circle"></i> N/A</span> - Process not applicable</p>
                </div>
                <div class="col-md-4">
                  <p class="sub-text"><span style="font-weight: 600; color: #0e52c7"><i class="bx bx-loader-circle"></i> Pending</span> - Process is ongoing </p>
                </div>
                <div class="col-md-4">
                  <p class="sub-text"><span style="font-weight: 600; color: #13a166"><i class="bx bx-check-circle"></i> Done</span> - Process is done </p>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="enrolled-subjects" role="tabpanel" aria-labelledby="enrolled-subjects-tab">
            <h4 class="title mb-2" style="width: 100%;">Enrolled Subjects</h4>
            <hr class="default-divider ml-auto mt-1 mb-2">
            <p class="profile-text">Enrollment Status: <span style="font-weight: 600; color: #135e24; text-transform: uppercase; "> Regular</span> </p>
            <hr class="default-divider ml-auto mt-1 mb-2">
            <p class="form-header">List of enrolled subjects: </p>
            <table class="table default-table">
              <thead>
                <tr>
                  <th scope="col" style="width: 50%; text-align: left;">Subject Name</th>
                  <th scope="col" style="width: 20%; text-align: center;">Units</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p class="sub-text" style="text-align: left;">{{$LoggedUserInfo->first_period}}</p>
                  </td>
                  <td>
                    <p class="status-text" style="text-align: center;">3</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="sub-text" style="text-align: left;">{{$LoggedUserInfo->second_period}}</p>
                  </td>
                  <td>
                    <p class="status-text" style="text-align: center;">3</p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="sub-text" style="text-align: left;">{{$LoggedUserInfo->third_period}}</p>
                  </td>
                  <td>
                    <p class="status-text" style="text-align: center;">3</p>
                  </td>
                </tr>
              </tbody>
            </table>
            <hr class="default-divider ml-auto mt-1 mb-2">
            <p class="form-header" style="font-size: 14px; text-align: right"><b>Number of Units: 6</b></p>
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
>>>>>>> 7ad47c07828334680b98b1fd64f7a2ee7ffaa16c
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>