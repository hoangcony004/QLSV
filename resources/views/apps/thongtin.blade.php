@extends('layouts.client')
@section('slidebar')
<!-- LOGO -->
<a href="" class="logo text-center logo-light">
    <span class="logo-lg">
        <img src="{{ asset('assets/images/logo.png') }}" alt="" height="16">
    </span>
    <span class="logo-sm">
        <img src="{{ asset('assets/images/logo_sm.png') }}" alt="" height="16">
    </span>
</a>

<!-- LOGO -->
<a href="index.html" class="logo text-center logo-dark">
    <span class="logo-lg">
        <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="16">
    </span>
    <span class="logo-sm">
        <img src="{{ asset('assets/images/logo_sm_dark.png') }}" alt="" height="16">
    </span>
</a>

<div class="h-100" id="leftside-menu-container" data-simplebar="">

    @include('apps.blocks.sidemenu')

    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->
@endsection

@section('header')
<div class="navbar-custom">
    @include('apps.blocks.header')    

    <button class="button-menu-mobile open-left">
        <i class="mdi mdi-menu"></i>
    </button>
    <div class="app-search dropdown d-none d-lg-block">
        <form>
            <div class="input-group">
                <input type="text" name="search" class="form-control dropdown-toggle" placeholder="Tìm kiếm..." id="top-search">
                <span class="mdi mdi-magnify search-icon"></span>
                <button class="input-group-text btn-primary" type="submit">Tìm kiếm</button>
            </div>
        </form>

        <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="uil-notes font-16 me-1"></i>
                <span>Báo cáo học sinh</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="uil-life-ring font-16 me-1"></i>
                <span>Bạn cần hỗ trợ?</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="uil-cog font-16 me-1"></i>
                <span>Đổi mật khẩu</span>
            </a>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                    <li class="breadcrumb-item active">Thông tin học sinh</li>
                </ol>
            </div>
            <h4 class="page-title">Thông tin học sinh</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-4 col-lg-5">
        <!-- lay o apps/blocks -->
        <div class="card text-center">
            <div class="card-body">
                <img src="{{ asset('assets/images/users/user.jpg') }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                <h4 class="mb-0 mt-2">Soeng Souy</h4>
                <p class="text-muted font-14">Founder</p>

                <a class="btn btn-success btn-sm mb-2" href="">Đổi mật khẩu</a>
                <!-- <a class="btn btn-danger btn-sm mb-2" href="">Liên hệ giáo viên</a> -->

                <div class="text-start mt-3">
                    <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">Geneva
                            D. McKnight</span></p>

                    <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2">(123)
                            123 1234</span></p>

                    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2 ">user@email.domain</span></p>

                    <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ms-2">USA</span></p>

                    <!-- <h4 class="font-13 text-uppercase">About Me :</h4>
                    <p class="text-muted font-13 mb-3">
                        Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type.
                    </p> -->

                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card -->

    </div> <!-- end col-->

    <div class="col-xl-8 col-lg-7">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                    <li class="nav-item">
                        <a href="#aboutme" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                            Điểm danh
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#timeline" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                            Kết quả học tập
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                            Settings
                        </a>
                    </li> -->
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="aboutme">

                        <h5 class="text-uppercase"><i class="mdi mdi-briefcase me-1"></i>
                            Experience sjhdvjhs</h5>

                        <div class="timeline-alt pb-0">
                            <div class="timeline-item">
                                <i class="mdi mdi-circle bg-info-lighten text-info timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <h5 class="mt-0 mb-1">Lead designer / Developer</h5>
                                    <p class="font-14">websitename.com <span class="ms-2 font-12">Year: 2015 - 18</span></p>
                                    <p class="text-muted mt-2 mb-0 pb-3">Everyone realizes why a new common language
                                        would be desirable: one could refuse to pay expensive translators.
                                        To achieve this, it would be necessary to have uniform grammar,
                                        pronunciation and more common words.</p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-circle bg-primary-lighten text-primary timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <h5 class="mt-0 mb-1">Senior Graphic Designer</h5>
                                    <p class="font-14">Software Inc. <span class="ms-2 font-12">Year: 2012 - 15</span></p>
                                    <p class="text-muted mt-2 mb-0 pb-3">If several languages coalesce, the grammar
                                        of the resulting language is more simple and regular than that of
                                        the individual languages. The new common language will be more
                                        simple and regular than the existing European languages.</p>

                                </div>
                            </div>

                            <div class="timeline-item">
                                <i class="mdi mdi-circle bg-info-lighten text-info timeline-icon"></i>
                                <div class="timeline-item-info">
                                    <h5 class="mt-0 mb-1">Graphic Designer</h5>
                                    <p class="font-14">Coderthemes Design LLP <span class="ms-2 font-12">Year: 2010 - 12</span></p>
                                    <p class="text-muted mt-2 mb-0 pb-2">The European languages are members of
                                        the same family. Their separate existence is a myth. For science
                                        music sport etc, Europe uses the same vocabulary. The languages
                                        only differ in their grammar their pronunciation.</p>
                                </div>
                            </div>

                        </div>
                        <!-- end timeline -->

                        <h5 class="mb-3 mt-4 text-uppercase"><i class="mdi mdi-cards-variant me-1"></i>
                            Projects</h5>
                        <div class="table-responsive">
                            <table class="table table-borderless table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Clients</th>
                                        <th>Project Name</th>
                                        <th>Start Date</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="assets/images/users/avatar-2.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Halette Boivin</td>
                                        <td>App design and development</td>
                                        <td>01/01/2015</td>
                                        <td>10/15/2018</td>
                                        <td><span class="badge badge-info-lighten">Work in Progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="assets/images/users/avatar-3.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Durandana Jolicoeur</td>
                                        <td>Coffee detail page - Main Page</td>
                                        <td>21/07/2016</td>
                                        <td>12/05/2018</td>
                                        <td><span class="badge badge-danger-lighten">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="assets/images/users/avatar-4.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Lucas Sabourin</td>
                                        <td>Poster illustation design</td>
                                        <td>18/03/2018</td>
                                        <td>28/09/2018</td>
                                        <td><span class="badge badge-success-lighten">Done</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="assets/images/users/avatar-6.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Donatien Brunelle</td>
                                        <td>Drinking bottle graphics</td>
                                        <td>02/10/2017</td>
                                        <td>07/05/2018</td>
                                        <td><span class="badge badge-info-lighten">Work in Progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><img src="assets/images/users/avatar-5.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Karel Auberjo</td>
                                        <td>Landing page design - Home</td>
                                        <td>17/01/2017</td>
                                        <td>25/05/2021</td>
                                        <td><span class="badge badge-warning-lighten">Coming soon</span></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div> <!-- end tab-pane -->
                    <!-- end about me section content -->

                    <div class="tab-pane show active" id="timeline">

                        <h5 class="text-uppercase"><i class="dripicons-graduation"></i> Lớp 10</h5>
                        <div class="table-responsive">
                            <table class="table table-borderless table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Clients</th>
                                        <th>Project Name</th>
                                        <th>Start Date</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="assets/images/users/avatar-2.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Halette Boivin</td>
                                        <td>App design and development</td>
                                        <td>01/01/2015</td>
                                        <td>10/15/2018</td>
                                        <td><span class="badge badge-info-lighten">Work in Progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="assets/images/users/avatar-3.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Durandana Jolicoeur</td>
                                        <td>Coffee detail page - Main Page</td>
                                        <td>21/07/2016</td>
                                        <td>12/05/2018</td>
                                        <td><span class="badge badge-danger-lighten">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="assets/images/users/avatar-4.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Lucas Sabourin</td>
                                        <td>Poster illustation design</td>
                                        <td>18/03/2018</td>
                                        <td>28/09/2018</td>
                                        <td><span class="badge badge-success-lighten">Done</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="assets/images/users/avatar-6.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Donatien Brunelle</td>
                                        <td>Drinking bottle graphics</td>
                                        <td>02/10/2017</td>
                                        <td>07/05/2018</td>
                                        <td><span class="badge badge-info-lighten">Work in Progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><img src="assets/images/users/avatar-5.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Karel Auberjo</td>
                                        <td>Landing page design - Home</td>
                                        <td>17/01/2017</td>
                                        <td>25/05/2021</td>
                                        <td><span class="badge badge-warning-lighten">Coming soon</span></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <h5 class="text-uppercase"><i class="dripicons-graduation"></i> Lớp 11</h5>
                        <div class="table-responsive">
                            <table class="table table-borderless table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Clients</th>
                                        <th>Project Name</th>
                                        <th>Start Date</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="assets/images/users/avatar-2.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Halette Boivin</td>
                                        <td>App design and development</td>
                                        <td>01/01/2015</td>
                                        <td>10/15/2018</td>
                                        <td><span class="badge badge-info-lighten">Work in Progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="assets/images/users/avatar-3.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Durandana Jolicoeur</td>
                                        <td>Coffee detail page - Main Page</td>
                                        <td>21/07/2016</td>
                                        <td>12/05/2018</td>
                                        <td><span class="badge badge-danger-lighten">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="assets/images/users/avatar-4.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Lucas Sabourin</td>
                                        <td>Poster illustation design</td>
                                        <td>18/03/2018</td>
                                        <td>28/09/2018</td>
                                        <td><span class="badge badge-success-lighten">Done</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="assets/images/users/avatar-6.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Donatien Brunelle</td>
                                        <td>Drinking bottle graphics</td>
                                        <td>02/10/2017</td>
                                        <td>07/05/2018</td>
                                        <td><span class="badge badge-info-lighten">Work in Progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><img src="assets/images/users/avatar-5.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Karel Auberjo</td>
                                        <td>Landing page design - Home</td>
                                        <td>17/01/2017</td>
                                        <td>25/05/2021</td>
                                        <td><span class="badge badge-warning-lighten">Coming soon</span></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <hr>
                        <h5 class="text-uppercase"><i class="dripicons-graduation"></i> Lớp 12</h5>
                        <div class="table-responsive">
                            <table class="table table-borderless table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Clients</th>
                                        <th>Project Name</th>
                                        <th>Start Date</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="assets/images/users/avatar-2.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Halette Boivin</td>
                                        <td>App design and development</td>
                                        <td>01/01/2015</td>
                                        <td>10/15/2018</td>
                                        <td><span class="badge badge-info-lighten">Work in Progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="assets/images/users/avatar-3.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Durandana Jolicoeur</td>
                                        <td>Coffee detail page - Main Page</td>
                                        <td>21/07/2016</td>
                                        <td>12/05/2018</td>
                                        <td><span class="badge badge-danger-lighten">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="assets/images/users/avatar-4.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Lucas Sabourin</td>
                                        <td>Poster illustation design</td>
                                        <td>18/03/2018</td>
                                        <td>28/09/2018</td>
                                        <td><span class="badge badge-success-lighten">Done</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="assets/images/users/avatar-6.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Donatien Brunelle</td>
                                        <td>Drinking bottle graphics</td>
                                        <td>02/10/2017</td>
                                        <td>07/05/2018</td>
                                        <td><span class="badge badge-info-lighten">Work in Progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><img src="assets/images/users/avatar-5.jpg" alt="table-user" class="me-2 rounded-circle" height="24"> Karel Auberjo</td>
                                        <td>Landing page design - Home</td>
                                        <td>17/01/2017</td>
                                        <td>25/05/2021</td>
                                        <td><span class="badge badge-warning-lighten">Coming soon</span></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end timeline content-->

                    <div class="tab-pane" id="settings">
                        <form>
                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname" placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" placeholder="Enter last name">
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="userbio" class="form-label">Bio</label>
                                        <textarea class="form-control" id="userbio" rows="4" placeholder="Write something..."></textarea>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="useremail" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                                        <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="userpassword" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                        <span class="form-text text-muted"><small>If you want to change password please <a href="javascript: void(0);">click</a> here.</small></span>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building me-1"></i> Company Info</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="companyname" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="companyname" placeholder="Enter company name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="cwebsite" class="form-label">Website</label>
                                        <input type="text" class="form-control" id="cwebsite" placeholder="Enter website url">
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth me-1"></i> Social</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="social-fb" class="form-label">Facebook</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="mdi mdi-facebook"></i></span>
                                            <input type="text" class="form-control" id="social-fb" placeholder="Url">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="social-tw" class="form-label">Twitter</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="mdi mdi-twitter"></i></span>
                                            <input type="text" class="form-control" id="social-tw" placeholder="Username">
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="social-insta" class="form-label">Instagram</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="mdi mdi-instagram"></i></span>
                                            <input type="text" class="form-control" id="social-insta" placeholder="Url">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="social-lin" class="form-label">Linkedin</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="mdi mdi-linkedin"></i></span>
                                            <input type="text" class="form-control" id="social-lin" placeholder="Url">
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="social-sky" class="form-label">Skype</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="mdi mdi-skype"></i></span>
                                            <input type="text" class="form-control" id="social-sky" placeholder="@username">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="social-gh" class="form-label">Github</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="mdi mdi-github"></i></span>
                                            <input type="text" class="form-control" id="social-gh" placeholder="Username">
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="text-end">
                                <button type="submit" class="btn btn-success mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                            </div>
                        </form>
                    </div>
                    <!-- end settings content-->

                </div> <!-- end tab-content -->
            </div> <!-- end card body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
<!-- end row-->
@endsection

@section('footer')
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <script>
                    document.write(new Date().getFullYear())
                </script> © Hyper - Coderthemes.com
            </div>
            <div class="col-md-6">
                <div class="text-md-end footer-links d-none d-md-block">
                    <a href="javascript: void(0);">About</a>
                    <a href="javascript: void(0);">Support</a>
                    <a href="javascript: void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection

@section('rightslide')
<div class="end-bar">

    <div class="rightbar-title">
        <a href="javascript:void(0);" class="end-bar-toggle float-end">
            <i class="dripicons-cross noti-icon"></i>
        </a>
        <h5 class="m-0">Settings</h5>
    </div>

    <div class="rightbar-content h-100" data-simplebar="">

        <div class="p-3">
            <div class="alert alert-warning" role="alert">
                <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
            </div>

            <!-- Settings -->
            <h5 class="mt-3">Color Scheme</h5>
            <hr class="mt-1">

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked="">
                <label class="form-check-label" for="light-mode-check">Light Mode</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
            </div>


            <!-- Width -->
            <h5 class="mt-4">Width</h5>
            <hr class="mt-1">
            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked="">
                <label class="form-check-label" for="fluid-check">Fluid</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                <label class="form-check-label" for="boxed-check">Boxed</label>
            </div>


            <!-- Left Sidebar-->
            <h5 class="mt-4">Left Sidebar</h5>
            <hr class="mt-1">
            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                <label class="form-check-label" for="default-check">Default</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked="">
                <label class="form-check-label" for="light-check">Light</label>
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                <label class="form-check-label" for="dark-check">Dark</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked="">
                <label class="form-check-label" for="fixed-check">Fixed</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                <label class="form-check-label" for="condensed-check">Condensed</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                <label class="form-check-label" for="scrollable-check">Scrollable</label>
            </div>

            <div class="d-grid mt-4">
                <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

                <a href="../../product/hyper-responsive-admin-dashboard-template/index.htm" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
            </div>
        </div> <!-- end padding-->

    </div>
</div>

<div class="rightbar-overlay"></div>
@endsection