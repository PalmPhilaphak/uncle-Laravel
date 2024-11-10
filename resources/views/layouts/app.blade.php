<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar d-none d-md-block border-end px-4 pt-2">
            <div class="sidebar-header border-bottom mb-4">
                <div class="sidebar-brand fs-2 mb-2">LaraDon</div>
            </div>
            <ul class="sidebar-nav list-unstyled">
                <li class="nav-title">Don Title32</li>
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
            </div>
        </div>

        <!-- Main Content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
