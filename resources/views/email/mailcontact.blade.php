<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gửi mail liên hệ</title>
</head>
<body>
    <h2>Khách hàng gửi liên hệ</h2>
    <hr>
    <h4>Thông tin khách hàng </h4>
    <li>Họ tên : <span style="color:red">{{$data['hoten']}}</span></li>
    <li>Email : <span style="color:red">{{$data['email']}}</span></li>
    <li>SDT : <span style="color:red">{{$data['sdt']}}</span></li>
    <li>Địa chỉ : <span style="color:red">{{$data['diachi']}}</span></li>
    <h4>
        Nội dung liên hệ
    </h4>
    <hr>
    <h3>{{$data['noidung']}}</h3>
</body>
</html>