<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EMS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <!--include css files-->
  <jsp:include page="/WEB-INF/jsp/include-css.jsp"/>
  <style>
  
  .main-sidebar{
 background: #a9afb1e6;
  }
  .sidebar-menu{
  background: #5a4d4d1a;
color: #fff;
  }
  .sidebar-menu li{
  margin: 0px 0px 0px 5px;
  border-bottom: 1px solid #eeeeee1a;
  }
  .sidebar-menu li a{
  color:#fff;
  }
  .sidebar-menu li a:hover{
 
  background:#D0D6DA;
  color:#555;
  }
  .active{
  background:#D0D6DA;
  border-left:3px solid blue;
  color:#555;
  }
  .treeview-menu{
 background: #b1b7b9;
  }
  .treeview-menu li{}
  treeview-menu li a{
  }
  
  .main-header .navbar{
  background: #D0D6DA;
  color: #555;
  }
 .navbar-custom-menu.navbar-nav.dropdown
  
  
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo" style="background: #0fb7a0;position: fixed;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b></b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar  navbar-fixed-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #fff;
font-weight: bold;">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
          
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="background: #a9afb1e6;position: fixed;
margin-top: 0px;" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
   
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        
        </li>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
       
        </li>
		
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i>User Role</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Users</a></li>
          </ul>
        </li>
	
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Process Payments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         </li>
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Customer Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        
        </li>
			 <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         </li>
		   <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
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
     <h1 class="box-title">Products</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Products</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row">
  <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
             
            </div>
            <!-- form start -->
            <form role="form" action="AddProduct" method="post" enctype="multipart/form-data" >
	      <div class="col-md-6">
                <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="productname" class="form-control" id="" placeholder="">
                    </div>
                   <div class="form-group">
                  <label for="exampleInputPassword1">Product Description</label>
                <input type="text" name="productdescription" class="form-control" id="" placeholder="">
           </div>
        <div class="form-group">
       <label for="exampleInputFile">Upload Product Image</label>
      <input type="file" name="productimage" id="">
   </div>
 </div>
</div>
    <div class="col-md-6">
        <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Product Price</label>
                <input type="text" name="productprice" class="form-control" id="" placeholder="">
                  </div>
                        <div class="form-group">
                         <label for="exampleInputPassword1">Product Quantity</label>
                        <input type="text" name="productquantity" class="form-control" id="" placeholder="">
                     </div>
                 <div class="form-group">
                 <label for="exampleInputPassword1">Category</label>
              <input type="text" name="productcategory" class="form-control" id="" placeholder="">
            </div>
             <div class="form-group">
            <label for="exampleInputEmail1">Product Status</label>
         <input type="text" name="productstatus" class="form-control" id="" placeholder="">
      </div>
  </div>
 </div>
              <!-- /.box-body -->
  <div class="box-footer">
  <button type="submit" class="btn btn-primary pull-right">Submit</button>
 </div>
   </form>
        </div>
	</div>
          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
     
    </div>
    <strong>Copyright &copy; 2018 <a href="#">SkyWeb Technologies</a>.</strong> All rights
    reserved.
  </footer>


</div>
<!-- ./wrapper -->

<!--include js files-->
<jsp:include page="/WEB-INF/jsp/include-js.jsp"/>

</body>
</html>
