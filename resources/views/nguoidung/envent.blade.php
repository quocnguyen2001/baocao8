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
        @include('nguoidung.menu')
    </header>
    <section>


        <div class="main-section">
            <div class="container main-content">
                <div class="line-left">

                </div>
                <div class="line-right">

                </div>
                <div class="text-event">
                    <p>Sự kiện nổi bật</p>
                </div>
                <div class=" my-4">


                    <!--Carousel Wrapper-->
                    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                        <!--Controls-->
                        <div class="controls-top">
                            <a class=" btn-prev" href="#multi-item-example" data-slide="prev"><img src="images/previousbtn.png" alt=""></a>
                            <a class=" btn-next " href="#multi-item-example" data-slide="next"><img src="images/nextbtn.png" alt=""></a>
                        </div>
                        <!--/.Controls-->

                        

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">

                            <!--First slide-->
                            @php
                                $soluong_sk = count($envent);

                                $soluong_slide = ceil(($soluong_sk -4) / 4);
                            @endphp
                            <div class="carousel-item active">
                            @for ($i = 0; $i < 4; $i++)
                                
                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2">
                                        <img class="card-img-top"
                                            src="{{url('/')}}/uploads/{{$envent[$i]->sk_img}}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">{{$envent[$i]->sk_name}}</h4>
                                            <p class="card-text">{{$envent[$i]->sk_address}}</p>
                                            <p class="card-date"><img src="images/calendar.png" width="18px" alt="">{{$envent[$i]->sk_time}}</p>
                                            <p class="card-price">{{number_format($envent[$i]->sk_price)}}đ</p>
                                            <a href="/su-kien-chi-tiet" class="card-btn btnhover">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            
                            </div>
                            <div class="carousel-item ">
                            @for ($i = 3; $i < 7; $i++)
                                
                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2">
                                        <img class="card-img-top"
                                            src="{{url('/')}}/uploads/{{$envent[$i]->sk_img}}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">{{$envent[$i]->sk_name}}</h4>
                                            <p class="card-text">{{$envent[$i]->sk_address}}</p>
                                            <p class="card-date"><img src="images/calendar.png" width="18px" alt="">{{$envent[$i]->sk_time}}</p>
                                            <p class="card-price">{{number_format($envent[$i]->sk_price)}}đ</p>
                                            <a href="/su-kien-chi-tiet" class="card-btn btnhover">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            
                            </div>

                           
                            <!--/.First slide-->

                            <!--Second slide-->
                            
                            <!--/.Second slide-->
                            

                        </div>
                        <!--/.Slides-->
                       
                    </div>
                    
                </div>
              
               
            </div>
         
           
        </div>
       
    </section>

    <script src="assets/js/custom.js"></script>
</body>

</html>