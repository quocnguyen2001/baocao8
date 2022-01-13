<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="{{url('/')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('/')}}/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{url('/')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include("admin.menu")
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include("admin.nav")

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                        <!-- Button trigger modal -->
                        

                        <!-- Modal -->
                        <div class="modal fade" id="themloaisanpham" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thêm loại sản phẩm</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form method="POST" role="form">
                                @csrf
                                <div class="form-group">
                                    <label for="tenloai">Tên loại</label>
                                    <input type="text" class="form-control" id="tenloai" name="cate_name" placeholder="Nhập loại sản phẩm">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Thêm</button>
                                </div>
                            </form>
  
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                        </div>
                        </div>                   

                    <!-- DataTales Example -->
                 

                </div>
                <!-- /.container-fluid -->
                <div class="container">
                <h3 class="text-center">Chi tiết vé #{{$kh->id_ve}}</h3><hr>
                    <div class="row">
                    <div class="col-6">
                                <h3>Thông tin khách hàng</h3>
                                <hr>
                                <li style="font-size:15pt">Tên khách hàng : <span style="color:red">{{$kh->hoten}}</span></li>
                                <li style="font-size:15pt">Số điện thoại : <span style="color:red">{{$kh->sdt}}</span></li>
                                <li style="font-size:15pt">Địa chỉ Email : <span style="color:red">{{$kh->email}}</span></li>
                            </div>
                            <div class="col-6">
                                <h3>Thông tin thanh toán </h3>
                                <hr>
                                <li style="font-size:15pt">Tên chủ tài khoản : <span style="color:red">{{$tt->name_order}}</span></li>
                                <li style="font-size:15pt">Số tài khoản : <span style="color:red">{{$tt->stk_payment}}</span></li>
                                <li style="font-size:15pt">Hạn sư dụng thẻ : <span style="color:red">{{$tt->hsd_the}}</span></li>
                            </div>
                    </div>
                    <hr>
                    <h3 class="text-center">Danh sách vé</h3><hr>
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Code</th>
      <th scope="col">QR</th>
      <th scope="col">HSD</th>
    </tr>
  </thead>
  <tbody>
      @foreach($ve as $v)
      
    <tr>
      <th scope="row">{{$loop->index}}</th>
      <td style="font-weight: 900;">{{$v->mave}}</td>
      <td><img class=""src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl={{$v->mave}}" width="50px" height="50px" alt="Card image cap"></td>
      <td>5/1/2022</td>
    </tr>
    @endforeach
  </tbody>
</table>
                </div>
            </div>
            <!-- End of Main Content -->
            <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>without bootstrap</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  </head>
  <body>
    
    
  </body>
</html>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{url('/')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{url('/')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('/')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('/')}}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{url('/')}}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('/')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{url('/')}}/js/demo/datatables-demo.js"></script>

</body>

</html>