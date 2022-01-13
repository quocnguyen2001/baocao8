<div class="navigation" id="navigation">
            <div class="container100  container h-100">
                <div class="row h-100">
                    <div class="col-sm-3 div-logo">
                       <a href="/"> <img src="images/LittleLogo.png"  class="align-items-center " id="logo" alt=""></a>
                    </div>
                    <div class="col-sm-6  div-menu  ">
                        <ul class="d-flex nav nav-header align-items-center w-100 d-flex justify-content-around  ">
                        
                                
                            
                            <li class="nav-item ">
                              <a class=" nav-link @if($url=='http://127.0.0.1:8000')   a-focus @endif  " href="/">Trang chủ </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link   @if($url=='http://127.0.0.1:8000/su-kien')   a-focus @endif " href="/su-kien">Sự kiện</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link  @if($url=='http://127.0.0.1:8000/lien-he')   a-focus @endif" href="/lien-he">Liên hệ</a>
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
<script>
    $(document).ready(()=>{
    
    $(".bgr-dark").click(()=>{
        $(".bgr-dark").hide();
    });

});
</script>