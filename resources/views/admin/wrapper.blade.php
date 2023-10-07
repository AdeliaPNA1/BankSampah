<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">BankSampah</div>
        <div class="list-group list-group-flush my-3">
            <ul>
            <a href="{{ route('sampahs.index') }}" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                    class="fas fa-tachometer-alt me-2"></i>Daftar Jenis Sampah</a>
            </ul>
            <ul class="dropdown">
                <a class="dropdown list-group-item list-group-item-action bg-transparent second-text fw-bold" data-toggle="dropdown" href="#" ><i
                    class="fas fa-project-diagram me-2"></i>Jenis Sampah
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="">Data PTK</a></li>
                    <li><a href="">Data Kepala Sekolah</a></li>
                    <li><a href="">Data Struktur Organisai</a></li>
                </ul>
            </ul>
            <a class="list-group-item list-group-item-action fas fa-power-off me-2 bg-transparent text-danger fw-bold" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </ul>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                <h2 class="fs-2 m-0">Halaman Admin</h2>
            </div>

        
            @if (auth()->user())
                <div class="dropdown show">
                    <a href="#" role="button" class="nav-link contact dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                @endif
                </li>
            </ul>
        
        </nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function () {
        el.classList.toggle("toggled");
    };
</script>
