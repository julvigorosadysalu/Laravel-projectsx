 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('layout') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-house-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">H' PROGRESS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('layout') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard User</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        POINT OF VIEW
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-address-card"></i>
            <span>User Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Components:</h6>
                <a class="collapse-item" href="{{ route('users') }}"><i class="fas fa-fw fa-user-circle" style="padding-right: 40px"></i>User</a>
                <a class="collapse-item" href="{{ route('buttons') }}"><i class="fas fa-fw fa-tasks" style="padding-right: 40px"></i>Tasks</a>
                <a class="collapse-item" href="{{ route('cards') }}"><i class="fas fa-fw fa-chalkboard-teacher" style="padding-right: 40px"></i>Classmates</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-cogs"></i>
            <span>User Speciality</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">The Utilities:</h6>
                <a class="collapse-item" href="{{ route('skills') }}"><i class="fas fa-fw fa-check-circle" style="padding-right: 40px"></i>Skills</a>
                <a class="collapse-item" href="{{ route('awards') }}"><i class="fas fa-fw fa-award" style="padding-right: 40px"></i>Award</a>
                <a class="collapse-item" href="{{ route('projects') }}"><i class="fas fa-fw fa-cog" style="padding-right: 40px"></i>Projects</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Other Stuff
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>User Files</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="{{ route('ebooks') }}">E-Books</a>
                <a class="collapse-item" href="{{ route('notes') }}">Notes</a>
                <a class="collapse-item" href="{{ route('novels', ['id'=>1]) }}">novels</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Important Files:</h6>
                <a class="collapse-item" href="{{ route('midtest') }}">Midtest</a>
                <a class="collapse-item" href="{{ route('finaltest') }}">Final test</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('improvement') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>User Improvement</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('schedule') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Schedule</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->

</ul>
<!-- End of Sidebar -->
