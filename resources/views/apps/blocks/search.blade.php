<div class="app-search dropdown d-none d-lg-block">
        <form action="{{ route('search') }}" method="GET">
            <div class="input-group">
                <input type="text" name="query" class="form-control" placeholder="Tìm kiếm chức năng..." id="top-search">
                <span class="mdi mdi-magnify search-icon"></span>
                <button class="input-group-text btn-primary" type="submit">Tìm kiếm</button>
            </div>
        </form>
    </div>