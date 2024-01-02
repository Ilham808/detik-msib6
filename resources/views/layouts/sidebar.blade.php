<nav id="sidebar" class="active">
    <div class="sidebar-header">
        <img src="{{ asset('assets/img/bootstraper-logo.png')}}" alt="bootraper logo" class="app-logo">
    </div>
    <ul class="list-unstyled components text-secondary">
        <li>
            <a href="dashboard.html"><i class="fas fa-home"></i>Manage Book</a>
        </li>
        <li>
            <a href="{{ route('categorybooks.index') }}"><i class="fas fa-file-alt"></i>Category Book</a>
        </li>
    </ul>
</nav>