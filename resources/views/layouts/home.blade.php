  @include('layouts._header')

  <div class="col-md-4">
          <div class="box box-solid">
            <div class="box-header with-border">

              <h3 class="box-title">Block Quotes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             BODY
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
   </div>
        <!-- ./col -->
  
  <div class="row">
    <div class="col-md-2">
      <div class="box box-primary">
       <div class="box-header with-border">
        <h3 class="box-title">Login</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
          </button>
        </div>
      </div>
      <div class="box-body box-profile">
        <p class="login-box-msg">(hidden if logged ) Sign in to start your session</p>

        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>


          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>

          <!-- /.col -->

          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>

          <!-- /.col -->

        </form>
      </div>
      <!-- /.box-body -->
      </div>
      <div class="box box-primary">
       <div class="box-header with-border">
        <h3 class="box-title">Profile</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
          </button>
        </div>
      </div>
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

        <h3 class="profile-username text-center">Admin</h3>

        <p class="text-muted text-center">Role: Admin</p>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
           <a href="#" class="btn btn-primary btn-block"><b>Upload New Lyric</b></a>
         </li>
         <li class="list-group-item">
           <a href="#" class="btn btn-success btn-block"><b>Profile</b></a>
         </li>

       </ul>

       <a href="#" class="btn btn-danger btn-block"><b>Logout</b></a>
     </div>
     <!-- /.box-body -->
   </div>

 </div>
 <!-- /.box -->
 <!-- /.box -->
</div>
<div class="col-md-4">

</div>
</section>
<!-- /.content -->
</div>
<!-- /.container -->
</div>
<!-- /.content-wrapper -->
@include('layouts._footer')