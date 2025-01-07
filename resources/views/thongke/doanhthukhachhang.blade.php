<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Liên kết Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="table-title bg-dark">
    <div class="row">
        <div class="col-sm-6">
            <h2 class="text-light">Thống kê doanh thu theo Khách Hàng</h2>
        </div>
    </div>
</div>
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th scope="col">Mã khách hàng</th>
        <th scope="col">Họ tên</th>
        <th scope="col">Số hóa đơn</th>
        <th scope="col">Tổng doanh thu</th>
    </tr>
    </thead>

    <tbody>
    @foreach ($doanhThuKhachHang as $dtkh)
        <tr>
            <td>{{$dtkh->makh}}</td>
            <td>{{$dtkh->hoten}}</td>
            <td>{{$dtkh->sohd}}</td>
            <td>{{$dtkh->tongdoanhthu}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>