<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>CRUDPosts</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Danh sách thẻ tích điểm</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mã khách hàng</th>
                            <th scope="col">Điểm tích lũy</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($thetichdiems as $thetichdiem)
                            <tr>
                                <th scope="row">{{ $thetichdiem->makh}}</th>
                                <td>{{ $thetichdiem->diemtichluy }}</td>
                                <td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</body>

</html>