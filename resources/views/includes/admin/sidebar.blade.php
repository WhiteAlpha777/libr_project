<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-header">ADMIN PANEL</li>
        <li class="nav-item">
                <a href="{{route('admin.book.index')}}" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                    Books
                    @if((url()->current()) == "http://localhost:8000/admin/book")
                        <span class="badge badge-info right">{{$books->total()}}</span>
                    @endif
                </p>
            </a>
        </li><!-- Category -->
        @can('view', auth()->user())
        <li class="nav-item">
            <a href="{{route('admin.category.index')}}" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                    Categories
                    @if((url()->current()) == "http://localhost:8000/admin/category")
                        <span class="badge badge-info right">{{$categories->count()}}</span>
                    @endif
                </p>
            </a>
        </li>
        @endcan

    </ul>
</nav>
<!-- /.sidebar-menu -->
