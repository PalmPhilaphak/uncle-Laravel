<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css"> <!-- เพิ่ม Bootstrap -->
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar border-end px-4 pt-2">
            <div class="sidebar-header border-bottom mb-4">
                <div class="sidebar-brand fs-2">CoreUI</div>
            </div>
            <ul class="sidebar-nav list-unstyled">
                <li class="nav-title">Nav Title</li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <i class="nav-icon cil-speedometer"></i> Nav item
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="nav-icon cil-speedometer"></i> With badge
                        <span class="badge bg-primary ms-auto">NEW</span>
                    </a>
                </li>
                <li class="nav-item nav-group show">
                    <a class="nav-link nav-group-toggle" href="#">
                        <i class="nav-icon cil-puzzle"></i> Nav dropdown
                    </a>
                    <ul class="nav-group-items list-unstyled">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nav dropdown item</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nav dropdown item</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item mt-5">
                    <a class="nav-link" href="https://coreui.io">
                        <i class="nav-icon cil-cloud-download"></i> Download CoreUI
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://coreui.io/pro/">
                        <i class="nav-icon cil-layers"></i> Try CoreUI
                        <strong>PRO</strong>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer border-top d-flex">
                <button class="sidebar-toggler" type="button"></button>
            </div>
        </div>

        <!-- Main Content -->
        <div class="content-wrapper d-flex justify-content-center">
            @yield('content')
        </div>
    </div>

    <script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>
