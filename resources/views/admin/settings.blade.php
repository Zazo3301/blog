@include('admin._header')
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->


        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">

            <li>
                <a href="/admin/edit-posts">
                    <i class="fa fa-pencil-square-o"></i> <span>Edit Posts</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                </a>
            </li>


            <li>
                <a href="/admin/categories">
                    <i class="fa fa-th-large"></i> <span>Categories</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                </a>
            </li>
            <li>
                <a href="/admin/edit-users">
                    <i class="fa fa-users"></i> <span>Edit Users</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                </a>
            </li>

            <li>
                <a href="/admin/settings">
                    <i class="fa fa-cog"></i> <span>Settings</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                </a>
            </li>



        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Simple Tables

        </h1>

    </section>

    <!-- Main content -->
    <section class="content">

    </section>
@include('admin._footer')
