<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đầm sen park</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/style.css">
    <style>
        
    </style>
</head>

<body>
    <header>
        @include('nguoidung.menu')
    </header>
    <section>
        
        
        <div class="main-section">
            
          
            <div class="container main-content">
                <div class=" div-top">
                    <div class="div-sticker1"></div>
                    <div class="div-text1">
                        ĐẦM SEN <br> PARK
                    </div>
                    <div class="div-sticker2"></div>
                    <div class="div-sticker3"></div>
                    <div class="div-sticker4"> </div>
                    <div class="div-sticker5"></div>
                    <div class="div-ticket row mar-0">
                        <div class="div-sticker9"></div>
                        <div class="div-sticker7"></div>
                        <div class="div-sticker6"></div>
            <div class="div-sticker8"></div>
                        <div class="div-left h-55">
                            <div class="tiket-left-child">
                                <div class="tiket-left-child-top">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis. <br> Suspendisse iaculis libero lobortis condimentum gravida. Aenean auctor iaculis risus, lobortis molestie lectus consequat a. </div>
                                <div class="tiket-left-child-bot">
                                    <div class="text-line-star">
                                        <div class="div-star">
                                            <div class="star1">
                                                <div class="star2"></div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    </div>
                                    <div class="text-line-star">
                                        <div class="div-star">
                                            <div class="star1">
                                                <div class="star2"></div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    </div>
                                    <div class="text-line-star">
                                        <div class="div-star">
                                            <div class="star1">
                                                <div class="star2"></div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    </div>
                                    <div class="text-line-star">
                                        <div class="div-star">
                                            <div class="star1">
                                                <div class="star2"></div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="div-center "></div>
                        <div class="div-right top360">
                            <div class="tiket-left-child">
                                <div class="div-tiket-child">
                                
                                </div>
                                <div class="div-form-tiket">
                                @include('nguoidung.flast-mess')
                                    <form action="#" method="POST">
                                    @csrf
                                        <div class="input-f  ">
                                            <select name="loaive" class="" id="select">
                                                @foreach($listloaive as $l)
                                                <option value="{{$l->id}}">{{$l->tenloai}}</option>
                                                @endforeach
                                            </select>
                                            <label for="select"><div class="btnselect"></div></label>
                                        
                                        </div>
                                        <div class="input-f  ">
                                           <input type="number" name="soluong" class="qty-ticket-input" placeholder="Số lượng vé" width="200px">
                                           
                                           <input type="text" name="ngaydung" id="date" class="date-ticket-input" placeholder="Ngày sử dụng" id="" width="50%">
                                           <label for="date"><div class="btndate"></div></label>
                                        </div>
                                        <div class="input-format input-f ">
                                            <input type="text" name="hoten" class="" placeholder="Họ và tên" >
                                           
                                         </div>
                                         <div class="input-format  input-f ">
                                            <input type="text" name="sdt" class="" placeholder="Số điện thoại" >
                                           
                                         </div>
                                         <div class="input-format input-f ">
                                            <input type="text" name="email" class="" placeholder="Địa chỉ Email" >
                                           
                                         </div>
                                        
                                            
                                         <div class="btn-order-ticket" >
                                         <button class="btnhover">Đặt vé ngay</button>
                                         </div>
                                         
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                 
            </div>

        </div>
     
      
    </section>
   
    <script src="assets/js/custom.js"></script>
</body>

</html>