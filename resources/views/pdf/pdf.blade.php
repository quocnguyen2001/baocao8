<style>
    h1{
        color:red;
    }
    body {
    font-family: DejaVu Sans, sans-serif;
    }
</style>
<body>
    

<h1>Bạn đã đặt thành công vé</h1>
<li>Họ Tên : Nguyễn Văn Quốc</li>
<li>Số điện thoại : 0389598412</li>

<hr>
<h3>Tất cả các vé</h3>
@foreach($vedat as $v)
            
                                            <div class="col-md-3" style="float:left">
                                                <div class="card mb-2">
                                                    <div class="img-qr"> 
                                                        <img class="card-img-top"
                                                        src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl={{$v->mave}}" width="100px"
                                                            alt="Card image cap">
                                                       </div>
                                                    <div class="card-body text-center">
                                                        <h4 class="card-title" style="color:red;">{{$v->mave}}</h4>
                                                        <p class="vecong mb-0">Vé cổng</p>  
                                                        
                                                        <p class="card-date"> Ngày sử dụng: 31/05/2021  |</p>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            @endforeach
                                            </body>