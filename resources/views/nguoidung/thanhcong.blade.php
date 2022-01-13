<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đầm sen park</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <div class="navigation" id="navigation">
            <div class="container100  container h-100">
                <div class="row h-100">
                    <div class="col-sm-3 div-logo">
                       <a href="index.html"> <img src="images/LittleLogo.png"  class="align-items-center " id="logo" alt=""></a>
                    </div>
                    <div class="col-sm-6  div-menu  ">
                        <ul class="d-flex nav nav-header align-items-center w-100 d-flex justify-content-around  ">
                            <li class="nav-item ">
                              <a class=" nav-link   " href="/">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link     " href="/su-kien">Sự kiện</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link  " href="/lien-he">Liên hệ</a>
                            </li>
                          </ul>
                    </div>
                    <div class="col-sm-3 d-flex div-tel align-items-center justify-content-end div-hotline">
                        <a href="tel:+840123456"><i class="tel-css bi bi-telephone"></i> 0123456874</a>
                    </div>
                    <div class="btn-menu" id="btn-menu">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>


        <div class="main-section">
            <div class="text-event">
                <p>Thanh toán thành công</p>
            </div>
            <div class="container div-contact">
            <div class="bgr-dark ">
                            <div class="message-contact">
                                Đặt vé thành công. <br>
                                Thông tin vé ở bên dưới và Email của bạn !
                                <div class="close-btn-contact"> X</div>
                            </div>
                            </div>
                <div class="contact-left w-100 h1500px">
                    <div class="sticker-girl2"></div>
                    
                        <div class="contact-left-child p-5 pad-5">
                            <div class="px-3 w-100 h-100"> 
                            <div class=" my-0">
                            
                            
                            
    
                                <!--Carousel Wrapper-->
                                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
            
                                    <!--Controls-->
                                    <div class="controls-top">
                                        <a class=" btn-prev btnprev" href="#multi-item-example" data-slide="prev"><img src="images/previousbtn.png" width="38px" alt=""></a>
                                        <a class=" btn-next btnnext" href="#multi-item-example" data-slide="next"><img src="images/nextbtn.png" width="38px" alt=""></a>
                                    </div>
                                    <!--/.Controls-->
            
                                    
            
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
            
                                        <!--First slide-->
                                        <div class="carousel-item active">
                                            @foreach(session('vedat') as $v)
            
                                            <div class="col-md-3" style="float:left">
                                                <div class="card mb-2">
                                                    <div class="img-qr"> 
                                                        <img class="card-img-top"
                                                        src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl={{$v->mave}}" width="100px"
                                                            alt="Card image cap">
                                                       </div>
                                                    <div class="card-body text-center">
                                                        <h4 class="card-title">{{$v->mave}}</h4>
                                                        <p class="vecong mb-0">Vé cổng</p>  
                                                        <p class="dot my-0 font-weight-bold">---</p>
                                                        <p class="card-date"> Ngày sử dụng: 31/05/2021</p>
                                                        <div class="mt-3">
                                                            <img src="images/tick.png" width="40px" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                           
            
                                        </div>
                                        <!--/.First slide-->

                                         <!--First slide-->
                                        
                                        <!--/.First slide-->
            
                                         
            
            
            
                                    </div>
                                    <!--/.Slides-->
            
                                </div>
                            </div>
                            <div class="qty-payment float-left">
                                Số lượng: 12 vé
                            </div>
                            <div class="qty-payment float-right">
                                Trang 1/3
                            </div>
                        </div>
                   
                    
                    
                        </div>
                    <div class="btn-double text-center mt-5">
                        <a href="/in-ve/{{session('id')}}" class="card-btn btnhover"> Tải về </a>
                        <a href="#" class="card-btn ml-3 btnhover marign-0">Gửi Email</a>
                    </div>
                </div>
                 
            </div>
        </div>


    </section>

    <script src="assets/js/custom.js"></script>
</body>

</html>
<script>
    $(document).ready(()=>{
    
    $(".bgr-dark").click(()=>{
        $(".bgr-dark").hide();
    });

});
</script>