<div class="app-search dropdown d-none d-lg-block">
        <form action="{{ route('search') }}" method="GET">
            <div class="input-group">
                <input type="text" name="query" class="form-control dropdown-toggle" placeholder="Tìm kiếm chức năng..." id="top-search">
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