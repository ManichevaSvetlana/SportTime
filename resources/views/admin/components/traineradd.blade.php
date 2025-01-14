
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Fitness Time | Администратор</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="/css/app.css">
  
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  </head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="app" >

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
   
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- SEARCH FORM -->


    <!-- Right navbar links -->
   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
     
      <div class="info"> <span class="d-block">Fitness Time</span></div>
    </a>
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <a href="/admin"> <img src="/images/manager.png" class="img-circle elevation-2" alt="User Image"> </a>
        </div>
        <div class="info">
          <a href="/admin" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" >
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
          <a href="/admin" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
</a>
           
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
              Клієнти
                <i class="fas fa-angle-left right"></i>  
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/clients" class="nav-link ">
                <i class="fas fa-address-card"></i>
                  <p>Перегляд клієнтів</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                <i class="fas fa-user-plus"></i>
                  <p>Створити нового клієнта</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item has-treeview active">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
              Тренери
                <i class="fas fa-angle-left right"></i>  
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/trainers" class="nav-link active">
                <i class="fas fa-address-card"></i>
                  <p>Перегляд тренерів</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                <i class="fas fa-user-plus"></i>
                  <p>Створити нового тренера</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Статистика
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
            </ul>
          </li>

         
          <li class="nav-item">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
                  <i class=" nav-icon fa fa-power-off"></i>
                  <p>Вийти</p>
                </a>
              
              </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
      
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content">
      <div class="container-fluid">
      <form role="form" class="col-md-12 go-right" action="{{ url('/admin/inserttrainer') }}" method="post"
                  enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">ФІО</label>
                    <input id="Trainer_name" name="Trainer_name" type="text" class="form-control" value="" required>

                </div>


                <div class="form-group">
                    <label for="Trainer_birth">Дата народження</label>
                    <input id="Trainer_birth" name="Trainer_birth" type="date" class="form-control" value="" required>

                </div>

                <div class="form-group">
                    <label for="Trainer_start">Початок роботи</label>
                    <input id="Trainer_start" name="Trainer_start" type="date" class="form-control" value=""
                           required>

                </div>

                <div class="form-group">
                    <label for="Trainer_phone">Мобільний номер телефону</label>
                    <input id="Trainer_phone" name="Trainer_phone" type="text" class="form-control" value="" required>

                </div>


                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="col-md-6">


                            <p style="font-size: 20px;">Тренування</p>

                            <select id="select" name="Trainer_training" class="selectpicker" style="font-size: 20px;"
                                    required>
                                <option value=""> ---</option>
                                @foreach ($training as $training)
                                <option value="{{$training->id}}"> {{$training->name}}</option>
                                @endforeach
                              </select>

                        </div>

                    </div>
                </div>

               
                <div class="form-group">
                    <label for="Trainer_photo">Фото тренера</label>
                    <input type="file" name="Trainer_photo"><br>
                </div>

                <div class="form-group">
                    <input class="btn btn-success center-block btn-lg" type="submit" value="Додати">
                </div>


            </form>


      </div>
      </div>
    </div>
</div>

  <footer class="main-footer">
  &copy; Copyright Fitness Time 2019. Developed and designed by Bekk
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/js/app.js"></script>
</body>
</html>