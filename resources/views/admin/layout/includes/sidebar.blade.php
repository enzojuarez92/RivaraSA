<!-- Sidebar Menu -->
<ul class="sidebar-menu" data-widget="tree">
<li class="header">Web</li>
<li {{ request()->is('admin') ? 'class=active' : '' }}>
    <a href="{{ route('admin') }}"><i class="fa fa-dashboard">
</i> <span>Inicio</span></a>
</li>

{{--  menu blog  --}}
@can('view', new App\Post)
<li class="treeview {{ request()->is('admin/posts*') ? 'active' : '' }}">
    <a href="#"><i class="fa fa-rss"></i> <span>Blog</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
    <li><a {{ request()->is('admin/posts') ? 'class=active' : '' }} href="{{ route('admin.posts.index') }}"> <i class="fa fa-eye"></i> Todos los posteos</a></li>
    </ul>
</li>    
@endcan

{{--  menu proyectos  --}}
{{-- @can('view', new App\Project) --}}
<li class="treeview {{ request()->is('admin/projects*') ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-folder-open"></i>
        <span>Proyectos</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li><a {{ request()->is('admin/projects') ? 'class=active' : '' }} href="{{ route('admin.projects.index') }}"> <i class="fa fa-eye"></i> Todos los proyectos</a></li>
    </ul>
</li>    
{{-- @endcan --}}


{{--  menu Equipo  --}}
@can('view', new App\Team)
<li class="treeview {{ request()->is('admin/team*') ? 'active' : '' }}">
    <a href="#"><i class="fa fa-users"></i> <span>Equipo/Integrantes</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
    <li><a {{ request()->is('team.index') ? 'class=active' : '' }} href="{{ route('team.index') }}"> <i class="fa fa-eye"></i> Listar</a></li>
    </ul>
</li>  
@endcan
{{--  menu Equipo  --}}

{{--  menu Clientes  --}}
@can('view', new App\Client)
<li class="treeview {{ request()->is('admin/client*') ? 'active' : '' }}">
    <a href="#"><i class="fa fa-paperclip"></i> <span>Clientes</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
    <li><a {{ request()->is('client.index') ? 'class=active' : '' }} href="{{ route('client.index') }}"> <i class="fa fa-eye"></i> Listar</a></li>
    </ul>
</li>    
@endcan
{{--  menu Clientes  --}}

{{--  menu partners  --}}
@can('update', new App\Partner)
<li class="treeview {{ request()->is('admin/partner*') ? 'active' : '' }}">
    <a href="#"><i class="fa fa-tags"></i> <span>Partners/Marcas</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
    <li><a {{ request()->is('partner.index') ? 'class=active' : '' }} href="{{ route('partner.index') }}"> <i class="fa fa-eye"></i> Listar</a></li>
    </ul>
</li>    
@endcan
{{--  menu partners  --}}

{{--  menu tags  --}}
{{-- @can('view', new App\Tag) --}}
<li class="treeview {{ request()->is('admin/tags*') ? 'active' : '' }}">
    <a href="#"><i class="fa fa-tag"></i> <span>Etiquetas</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li><a {{ request()->is('admin/tags') ? 'class=active' : '' }} href="{{ route('admin.tags.index') }}"> <i class="fa fa-eye"></i> Todas las etiquetas</a></li>
    </ul>
</li>    
{{-- @endcan --}}

{{--  menu categories  --}}
{{-- @can('view', new App\Category) --}}
<li class="treeview {{ request()->is('admin/categories*') ? 'active' : '' }}">
    <a href="#"><i class="fa fa-list-alt"></i> <span>Categorias</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li><a {{ request()->is('admin/categories') ? 'class=active' : '' }} href="{{ route('admin.categories.index') }}"> <i class="fa fa-eye"></i> Todas las categorias</a></li>
    </ul>
</li>    
{{-- @endcan --}}
{{--  </ul>  --}}
<!-- /.sidebar-menu -->


<li class="header">Administración</li>
@role('Admin')
<li class="treeview {{ request()->is('admin/configuraciones*') ? 'active' : '' }}">
    <a href="#"><i class="fa fa-gears"></i> <span>Configuraciones Generales</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li><a {{ request()->is('admin/categories') ? 'class=active' : '' }} href="{{ route('admin.configuraciones') }}"> <i class="fa fa-bell"></i> Notificaciones y Google</a></li>
        <li><a {{ request()->is('admin/categories') ? 'class=active' : '' }} href="{{ route('admin.configuraciones.logo') }}"> <i class="fa fa-picture-o"></i> Logos</a></li>
    </ul>
</li>    
@endrole

@can('view', new App\User)
{{--  menu Usuarios  --}}
<li class="treeview {{ request()->is('admin/users*') ? 'active' : '' }}">
    <a href="#"><i class="fa fa-user"></i> <span>Usuarios</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
    <li><a {{ request()->is('admin/users') ? 'class=active' : '' }} href="{{ route('admin.users.create') }}"> <i class="fa fa-plus"></i> Crear Usuario</a></li>
    <li><a {{ request()->is('admin/users') ? 'class=active' : '' }} href="{{ route('admin.users.index') }}"> <i class="fa fa-eye"></i> Todos los Usuarios</a></li>
    @role('Admin')
    <li><a {{ request()->is('admin/roles') ? 'class=active' : '' }} href="{{ route('admin.roles.index') }}"> <i class="fa fa-lock"></i> Roles de usuarios</a></li>
    @endrole
    </ul>
</li>
{{--  menu Usuarios  --}}
@endcan

{{--  menu Contactos  --}}
@can('view', new App\Lead)
<li class="treeview {{ request()->is('admin/leads*') ? 'active' : '' }}">
    <a href="#"><i class="fa fa-address-book"></i> <span>Contactos</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
    <li><a {{ request()->is('admin/leads') ? 'class=active' : '' }} href="{{ route('admin.leads.index') }}"> <i class="fa fa-eye"></i> Listar</a></li>
    </ul>
</li>    
@endcan
{{--  menu Contactos  --}}
