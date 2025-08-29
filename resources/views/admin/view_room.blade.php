<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style type="text/css">
        .table-deg {
            border: 2px solid white;
            margin: auto;
            width: 80%;
            text-align: center;
            margin-top: 40px;
        }

        .th_deg {
            background-color: #EA2264;
            padding: 15px;
            color: white;
        }

        tr {
            border: 3px solid white;
        }

        th {
            border-right: 2px solid white;
        }

        td {
            padding: 10px;
            border-right: 2px solid white;
        }
    </style>
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="container-fluid">
                <table class="table-deg">
                    <tr>
                        <th class="th_deg">Room Title</th>
                        <th class="th_deg">Description</th>
                        <th class="th_deg">Price</th>
                        <th class="th_deg">Wifi</th>
                        <th class="th_deg">Room Type</th>
                        <th class="th_deg">Image</th>
                    </tr>

                    @foreach($data as $a)
                    <tr>
                        <td>{{$a->room_title}}</td>
                        <td>{!! Str::limit($a->description, 50) !!}</td>
                        <td>{{$a->price}}</td>
                        <td>{{$a->wifi}}</td>
                        <td>{{$a->room_type}}</td>
                        <td class="flex justify-center">
                            <img width="100" src="room/{{$a->image}}" alt="">
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            @include('admin.footer')
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="admin/vendor/chart.js/Chart.min.js"></script>
    <script src="admin/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admin/js/charts-home.js"></script>
    <script src="admin/js/front.js"></script>
</body>

</html>