<ul class="list-unstyled topbar-menu float-end mb-0">
    <li class="dropdown notification-list d-lg-none">
        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <i class="dripicons-search noti-icon"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
            <form class="p-3" action="{{ route('search') }}" method="GET">
                <input type="text" name="query" class="form-control" placeholder="Tìm kiếm chức năng..." required aria-label="Recipient's username">
            </form>
            
        </div>
    </li>

    <li class="dropdown notification-list">
        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <i class="dripicons-bell noti-icon"></i>
            <span class="noti-icon-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

            <!-- item-->
            <div class="dropdown-item noti-title">
                <h5 class="m-0">
                    <span class="float-end">
                        <a href="javascript: void(0);" class="text-dark">
                            <small>Xóa tất cả</small>
                        </a>
                    </span>Thông báo
                </h5>
            </div>

            <div style="max-height: 230px;" data-simplebar="">
                <!-- item-->
                <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-primary">
                            <i class="mdi mdi-comment-account-outline"></i>
                        </div>
                        <p class="notify-details">Caleb Flakelar commented on Admin
                            <small class="text-muted">1 min ago</small>
                        </p>
                    </a> -->
                <p class="dropdown-item text-center text-success notify-item notify-all">Không có thông báo nào</p>

            </div>

            <!-- All-->
            <a href="#" class="dropdown-item text-center text-primary notify-item notify-all">
                Xem tất cả
            </a>

        </div>
    </li>

    <li class="dropdown notification-list d-none d-sm-inline-block">
        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <i class="dripicons-view-apps noti-icon"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

            <div class="p-2">
                <div class="row g-0">
                    <div class="col">
                        <a class="dropdown-icon-item" href="https://www.google.com">
                            <img src="{{ asset('assets/images/brands/g-suite.png') }}" alt="G Suite">
                            <span>Google</span>
                        </a>
                    </div>

                    <div class="col">
                        <a class="dropdown-icon-item" href="https://classroom.google.com">
                            <img src="{{ asset('assets/images/brands/google-classroom.jpg') }}" alt="G Suite">
                            <span>Google Classroom</span>
                        </a>
                    </div>

                    <div class="col">
                        <a class="dropdown-icon-item" href="https://zoom.us">
                            <img src="{{ asset('assets/images/brands/zoom.png') }}" alt="G Suite">
                            <span>Zoom</span>
                        </a>
                    </div>
                </div> <!-- end row-->
            </div>

        </div>
    </li>

    <li class="notification-list">
        <a class="nav-link end-bar-toggle" href="javascript: void(0);">
            <i class="dripicons-gear noti-icon"></i>
        </a>
    </li>

    <li class="dropdown notification-list">
        <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <span class="account-user-avatar">
                <img src="{{ asset('assets/images/users/user.jpg') }}" alt="user-image" class="rounded-circle">
            </span>
            <span>
                <span class="account-user-name">{{ session('user_name') }}</span>
                <span class="account-position">Admin</span>
            </span>
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
            <!-- item-->
            <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">ID của bạn là: {{ session('user_id') }}</h6>
            </div>

            <!-- item-->
            <a href="{{ route('thongtin') }}" class="dropdown-item notify-item">
                <i class="mdi mdi-account-circle me-1"></i>
                <span>Tài khoản</span>
            </a>

            <!-- item-->
            <a href="#" class="dropdown-item notify-item">
                <i class="uil-cog font-16 me-1"></i>
                <span>Cài đặt</span>
            </a>

            <!-- item-->
            <!-- <a href="#" class="dropdown-item notify-item">
                    <i class="mdi mdi-lifebuoy me-1"></i>
                    <span>Hỗ trợ</span>
                </a> -->

            <!-- item-->
            <!-- <a href="#" class="dropdown-item notify-item">
                    <i class="mdi mdi-lock-outline me-1"></i>
                    <span>Khóa tài khoản</span>
                </a> -->

            <!-- item -->
            <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                <i class="mdi mdi-logout me-1"></i>
                <span>Đăng xuất</span>
            </a>
        </div>
    </li>

</ul>