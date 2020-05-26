<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <link href="{{asset('css/admin.css')}}" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('admin.home')}}">Админ панель</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <div class="ml-auto"></div>
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.exit')}}">Выход</a>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Основное</div>

                    <a class="nav-link" href="{{route('admin.home')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Заказы
                    </a>

                    <a class="nav-link" href="{{route('admin.categories.main.index')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Главные категории
                    </a>
                    <a class="nav-link" href="{{route('admin.categories.group.index')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Группы категорий
                    </a>
                    <a class="nav-link" href="{{route('admin.categories.all.index')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Категории
                    </a>

                    <div class="sb-sidenav-menu-heading">Сайт</div>

                    <a class="nav-link" href="{{route('admin.site.faq.show')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        FAQ
                    </a>

                    <a class="nav-link" href="{{route('admin.site.footer.show')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Подвал
                    </a>

                    <a class="nav-link" href="{{route('admin.site.other.show')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Прочее
                    </a>

                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">@yield('caption')</h1>
                @yield('content')
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; dostavkalenta.ru {{date('Y')}}</div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('js/admin.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
</body>
</html>
