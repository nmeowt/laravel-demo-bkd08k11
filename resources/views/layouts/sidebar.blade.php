<div class="sidebar" data-background-color="brown" data-active-color="danger">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            08
        </a>

        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            BKD08K11
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="info">
                <a href="#">
                    <span>
                        Chào {{ Session::get('fullName') }}
                    </span>
                </a>
            </div>
        </div>
        <ul class="nav">
            <li>
                <a href="{{ route('major.index') }}">
                    <i class="ti-calendar"></i>
                    <p>Quản lý ngành học</p>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="ti-heart"></i>
                    <p>Quản lý lớp</p>
                </a>
            </li>
            <li>
                <a href="{{ route('file.view-form') }}">
                    <i class="ti-bar-chart-alt"></i>
                    <p>Demo form</p>
                </a>
            </li>
        </ul>
    </div>
</div>
