<!DOCTYPE html>

<head>
    <title>لوحة تحكم موقع إيفا - إدارة المنتجات</title>
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
</head>
<style>
</style>

</head>

<body>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
            </div>

            @extends('layout.app')
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{ route('dashboard') }}" class="nav-link">الصفحة الرئيسية</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a class="nav-link" style="font-size:15px" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
                            تسجيل خروج
                        </a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
            </nav>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <h1 class="m-0">إدارة المنتجات</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">إدارة المنتجات</a></li>
                                    <li class="breadcrumb-item active">الصفحة الرئيسية</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid --><br>
                    <div class="place">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary ml-5 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">إضافة</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">إضافة منتج</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <form action="{{route('product.store')}}" method="POST" class="decor" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">صورة</label>
                                                    <input type="file" class="form-control" id="recipient-name" name="image">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">السعر</label>
                                                    <input type="number" class="form-control" id="recipient-name" name="price">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">اللون</label>
                                                    <input type="color" class="form-control" id="recipient-name" name="color">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">القياس</label>
                                                    <input type="number" class="form-control" id="recipient-name" name="size">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">العدد</label>
                                                    <input type="number" class="form-control" id="recipient-name" name="cont">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">موديل المنتج</label>
                                                    <input type="text" class="form-control" id="recipient-name" name="model">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">اسم الصنف</label>
                                                    <select name="CategoryId" class="form-control" id="recipient-name">
                                                        @foreach ($category as $c )
                                                        <option value="{{$c->id}}">{{$c->name_ar}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                                            <button type="submit" class="btn btn-primary">إضافة</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered table-hover col-12 ml-5" id="table_id">
                                <thead>
                                    <tr>
                                        <th>الصورة</th>
                                        <th>السعر</th>
                                        <th>اللون</th>
                                        <th>القياس</th>
                                        <th>العدد</th>
                                        <th>موديل المنتج</th>
                                        <th>اسم الصنف</th>
                                        <th>وقت و تاريخ الإضافة</th>
                                        <th>وقت و تاريخ التعديل</th>
                                        <th class="text-center">الأحداث</th>
                                        <?php $i=1;?>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($shoes as $s)

                                    <tr>
                                        <td><img id="im" src="{{ asset('imgs/' . $s->image) }}" style="width:70px;height:70px"></td>
                                        <td>{{$s->price}}</td>
                                        <td>
                                            <div style="background:{{$s->color}};00 width:7rem;height:3rem;"></div>
                                        </td>
                                        <td>{{$s->size}}</td>
                                        <td>{{$s->cont}}</td>
                                        <td>{{$s->model}}</td>
                                        @foreach($category as $c)
                                        @if($s->CategoryId==$c->id)
                                        <td>{{$c->name_ar}}</td>
                                        @endif
                                        @endforeach
                                        {{-- <td>{{$s->created_at}}</td>
                                        <td>{{$s->updated_at}}</td> --}}
                                        <td> <button type="button" class="btn btn-outline-danger mr-5 ml-5" data-bs-toggle="modal" data-bs-target="#delete{{$c->id}}" data-bs-whatever="@mdo">حذف</button>
                                         <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#edit{{$s->id}}" data-bs-whatever="@mdo">تعديل</button>
                                            <div class="modal fade" id="delete{{$c->id}}" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel2">رسالة تحذير</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('product.destroy',$s->id)}}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <p>هل أنت متأكد من عملية الحذف؟</p>
                                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                                    <button type="button" class=" btn-outline-primary  m-1" data-bs-dismiss="modal" aria-label="Close">إغلاق</button>

                                                                    <button type="submit" class="btn  btn-outline-danger m-1" focus>حذف</button>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="edit{{$s->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel3">تعديل صنف</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('product.update',$s->id)}}" method="POST" class="decor" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')

                                                                <div class="mb-3">
                                                                    <label for="recipient-name" class="col-form-label">السعر</label>
                                                                    <input type="number" class="form-control" id="recipient-name" name="price" value="{{$s->price}}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name" class="col-form-label">اللون</label>
                                                                    <input type="color" class="form-control" id="recipient-name" name="color" value="{{$s->color}}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name" class="col-form-label">القياس</label>
                                                                    <input type="number" class="form-control" id="recipient-name" name="size" value="{{$s->size}}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name" class="col-form-label">العدد</label>
                                                                    <input type="number" class="form-control" id="recipient-name" name="cont" value="{{$s->cont}}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name" class="col-form-label">الموديل</label>
                                                                    <input type="text" class="form-control" id="recipient-name" name="model" value="{{$s->model}}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name" class="col-form-label">اسم الصنف</label>
                                                                    <select name="CategoryId" class="form-control" id="recipient-name">
                                                                        @foreach ($category as $c )
                                                                        <option value="{{$c->id}}">{{$c->name_ar}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name" class="col-form-label">صورة</label>
                                                                    <input type="file" class="form-control" id="recipient-name" name="image">
                                                                    <img id="" src="{{ asset('imgs/' . $s->image) }}" style="width:40px;height:40px;margin-left:40px">

                                                                </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                                                            <button type="submit" class="btn btn-primary" focus>حفظ التعديل</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <!-- /.content-wrapper -->
                        <footer class="main-footer">
                            <strong>Copyright &copy; 2023-2024 <a href="https://eva.io">EVA.io</a>.</strong>
                            All rights reserved.
                            <div class="float-right d-none d-sm-inline-block">
                                <b>Version</b> 3.2.0
                            </div>
                        </footer>

                        <!-- Control Sidebar -->
                        <aside class="control-sidebar control-sidebar-dark">
                            <!-- Control sidebar content goes here -->
                        </aside>
                        <!-- /.control-sidebar -->
                    </div>
                </div>
                <!-- ./wrapper -->


                <script>
                    $(document).ready(function() {
                        $('#table_id').DataTable({

                            dom: 'Bfrtip'
                            , responsive: true
                            , pageLength: 25,
                            // lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],

                            buttons: [
                                'copy', 'csv', 'excel', 'pdf', 'print'
                            ]

                        });
                    });

                </script>
                <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
                <!-- jQuery UI 1.11.4 -->
                <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
                <script>
                    $.widget.bridge('uibutton', $.ui.button)

                </script>
                <!-- Bootstrap 4 -->
                <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                <!-- ChartJS -->
                <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
                <!-- Sparkline -->
                <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
                <!-- JQVMap -->
                <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
                <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
                <!-- jQuery Knob Chart -->
                <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
                <!-- daterangepicker -->
                <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
                <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
                <!-- Tempusdominus Bootstrap 4 -->
                <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
                <!-- Summernote -->
                <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
                <!-- overlayScrollbars -->
                <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
                <!-- AdminLTE App -->
                <script src="{{ asset('dist/js/adminlte.js') }}"></script>
                <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
                <!-- Bootstrap core JS-->
                <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}"></script>
                <!-- Core theme JS-->
                <script src="{{ asset('js/scripts.js') }}"></script>
                <script>
                    var msg = '{{ Session::get('
                    alert ') }}';
                    var exist = '{{ Session::has('
                    alert ') }}';
                    if (exist) {
                        alert(msg);
                    }

                </script>
    </body>
    </html>
