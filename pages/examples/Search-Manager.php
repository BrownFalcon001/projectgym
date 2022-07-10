<?php
session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
$uname = $_SESSION['uname'];
$link = 'manager_list.php';
$designation = 'Manager';

$conn = oci_connect('Abrar', 'saif0rrahman', 'localhost/xe')
  or die(oci_error());
if (!$conn) {
  echo "sorry";
} else {
  
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Enhanced Search Results</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper" >
       

         <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="admin_db.html" class="nav-link">Home</a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item float-right">
        <button  type="button" class="btn btn-primary">Logout</button>
      </li>

      
      
    </ul>
  </nav>
  <!-- /.navbar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                 <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          
              <li class="nav-item">
                <a href="../../admin_db.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          
     
    
          <li class="nav-item">
            
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                 
              <li class="nav-item">
                <a href="../examples/profilev2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../examples/userreg.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>   Manager Add</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="../examples/Branch.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Branch</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/Search-Manager.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search Manager</p>
                </a>
              </li>
               
              
              
              
            </ul>
          </li>
          
         
        
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>






        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="margin-top: 0;"style="margin-top: 0;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Search Manager</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Search Manager</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content" style="margin-bottom:50px ;">

                <div class="container-fluid">
                    <form action="Manager-results.html">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">General</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName">Manager Name</label>
                                        <input type="text" id="inputName" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Branch Name</label>
                                        <input type="text" id="inputName" class="form-control">
                                    </div>


                                    <div class="form-group">
                                        <label>Order By</label>
                                        <select class="select2" style="width: 100%;">
                                            <option selected>username</option>
                                            <option>salary</option>
                                            <option>Experience</option>
                                            <option>salary</option>
                                            <option>rating value</option>
                                        </select>
                                    </div>



                                    <div class="form-group">
                                        <label for="inputClientCompany">Salary</label>
                                        <input type="text" id="inputClientCompany" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputClientCompany">Experience</label>
                                        <input type="text" id="inputClientCompany" class="form-control">
                                    </div>


                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a href="#" class="btn btn-secondary">Cancel</a>
                            <input type="submit" value="Search" class="btn btn-success float-right">
                        </div>
                    </div>

                    
                </form>


                <?php
                  
                ?>
                </div>

                 <!-- Default box -->
       <div class="card card-solid" style="margin-top:20px ;">
        <div class="card-body pb-0">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-12">

                      <img src="../../dist/img/user8-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                      <h1><b>Shafin Bro</b></h1>
                      <p class=" text-sm"><b>Email: </b> Shafin@gmail.com <span  style="float: right;"> <b>Ratings: </b> 4 out of 5</span></p>
                      
                      <p class=" text-sm"><b>Branch: </b> Uttora<span  style="float: right;"> <b>Mobile No: </b>01550605580</span></p>
                  
                    </div>
                    
                  </div>
                </div>
                
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-12">

                      <img src="../../dist/img/user8-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                      <h1><b>Shafin Bro</b></h1>
                      <p class=" text-sm"><b>Email: </b> Shafin@gmail.com <span  style="float: right;"> <b>Ratings: </b> 4 out of 5</span></p>
                      
                      <p class=" text-sm"><b>Branch: </b> Uttora<span  style="float: right;"> <b>Mobile No: </b>01550605580</span></p>
                  
                    </div>
                    
                  </div>
                </div>
                
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-12">

                      <img src="../../dist/img/user8-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                      <h1><b>Shafin Bro</b></h1>
                      <p class=" text-sm"><b>Email: </b> Shafin@gmail.com <span  style="float: right;"> <b>Ratings: </b> 4 out of 5</span></p>
                      
                      <p class=" text-sm"><b>Branch: </b> Uttora<span  style="float: right;"> <b>Mobile No: </b>01550605580</span></p>
                  
                    </div>
                    
                  </div>
                </div>
                
              </div>
            </div>
           
            
            
          </div>
        </div>
        <!-- /.card-body -->
        
      </div>
      <!-- /.card -->
            </section>
            <!-- /.content -->
            <div style="margin-bottom:30px ;"></div>
        </div>
        <!-- /.content-wrapper -->












        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="../../plugins/select2/js/select2.full.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <script>
        $(function () {
            $('.select2').select2()
        });
    </script>
</body>

</html>