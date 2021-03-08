<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>moora &middot; @yield('title')</title>

    {{-- Icon --}}
    <link rel="shortcut icon" href="{{ url('img/3.png') }}" type="image/png">

    {{-- Style --}}
    <link rel="stylesheet" href="{{ url('modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('modules/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('modules/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ url('modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/components.min.css') }}">

    @stack('scripts')

</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ url('img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Do your best!</div>
                            <a href="#" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{ route('guest.home') }}">Moora</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="{{ route('guest.home') }}">Moo</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="nav-item {{ (request()->is('admin/dashboard')) ? "active" : '' }}"><a
                                class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-fire"></i>
                                <span>Dashboard</span></a></li>
                        <li class="nav-item {{ (request()->is('admin/map')) ? "active" : '' }}"><a class="nav-link"
                                href="{{ route('admin.map') }}"><i class="fas fa-map"></i>
                                <span>Map</span></a></li>
                        <li class="menu-header">Info</li>
                        <li class="nav-item dropdown {{ (request()->is('admin/data*')) ? 'active' : '' }}">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-columns"></i> <span>Data</span></a>
                            <ul class="dropdown-menu">
                                <li class="{{ (request()->is('admin/data/alternatives')) ? "active" : '' }}"><a
                                        class="nav-link" href="{{ route('alternatives.read') }}">Alternatives</a></li>
                                <li class="{{ (request()->is('admin/data/criterias')) ? "active" : '' }}"><a
                                        class="nav-link" href="{{ route('criterias.read') }}">Criterias</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown {{ (request()->is('admin/criteria*')) ? 'active' : '' }}">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="far fa-file-alt"></i> <span>Criterias</span></a>
                            <ul class="dropdown-menu">
                                @php
                                $sidebar = Help::criteriaMenu();
                                @endphp
                                @foreach ($sidebar as $criteria)
                                <li
                                    class="nav-item {{ (request()->is('admin/criteria/'. $criteria->id)) ? 'active' : '' }}">
                                    <a href="{{ route('criteria.show', $criteria->id) }}"
                                        class="nav-link">{{ Str::limit($criteria->nama, 22, '...') }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item {{ (request()->is('admin/classification')) ? "active" : '' }}"><a
                                class="nav-link" href="{{ route('classification.read') }}"><i class="far fa-square"></i>
                                <span>Classification</span></a></li>
                        <li class="menu-header">Equation</li>
                        <li class="nav-item dropdown {{ (request()->is('admin/moora*')) ? 'active' : '' }}">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i>
                                <span>Moora</span></a>
                            <ul class="dropdown-menu">
                                <li class="{{ (request()->is('admin/moora/matrix')) ? "active" : '' }}"><a
                                        class="nav-link" href="{{ route('moora.matrix') }}">Matrix</a></li>
                                <li class="{{ (request()->is('admin/moora/normalization')) ? "active" : '' }}"><a
                                        class="nav-link" href="{{ route('moora.normalization') }}">Normalization</a>
                                </li>
                                <li class="{{ (request()->is('admin/moora/optimization')) ? "active" : '' }}"><a
                                        class="nav-link" href="{{ route('moora.optimization') }}">Optimization</a>
                                </li>
                                <li class="{{ (request()->is('admin/moora/ranking')) ? "active" : '' }}"><a
                                        class="nav-link" href="{{ route('moora.ranking') }}">Ranking</a></li>
                            </ul>
                        </li>
                        <li class="menu-header">Auth</li>
                        <li class="nav-item {{ (request()->is('admin/users')) ? "active" : '' }}"><a class="nav-link"
                                href="{{ route('users.read') }}"><i class="far fa-user"></i>
                                <span>Users</span></a></li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('title')</h1>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item">@yield('pages')</div>
                            <div class="breadcrumb-item">@yield('title')</div>
                        </div>
                    </div>
                    @include('alert')
                    @yield('content')
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2021 <div class="bullet"></div><a href="#">Muhammad Farrell Denando</a>
                </div>
                <div class="footer-right">
                    Powered by <a href="https://getstisla.com">Stisla</a>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{ url('modules/jquery.min.js') }}"></script>
    <script src="{{ url('modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('modules/datatables/datatables.min.js') }}"></script>
    <script src="{{ url('modules/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ url('modules/popper.js') }}"></script>
    <script src="{{ url('modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ url('js/stisla.js') }}"></script>
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('js/custom.js') }}"></script>
    <script src="{{ url('modules/jquery-ui/jquery-ui.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#DataTables, #Tables').DataTable({
              'paging'      : true,
              'lengthChange': true,
              'searching'   : true,
              'ordering'    : true,
              'info'        : true,
              'autoWidth'   : true
            });
          });
    </script>
    <script>
        $(document).ready(function() {
            $('#Criteria').DataTable({
              'paging'      : false,
              'lengthChange': true,
              'searching'   : true,
              'ordering'    : true,
              'info'        : true,
              'autoWidth'   : true
            });
          });
    </script>

</body>

</html>