<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }

        .div_deg {
            padding-top: 30px;
        }

        .div_center {
            text-align: center;
            padding-top: 40px;
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
                <div class="div_center">
                    <h1 style="font-size: 30px; font-weight: bold;">Add Room</h1>
                    <form action="{{ url('add_room') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="div_deg">
                            <label for="">Room Title</label>
                            <input type="text" name="title">
                        </div>

                        <div class="div_deg">
                            <label for="">Description</label>
                            <textarea name="description"></textarea>
                        </div>

                        <div>
                            <label for="">Price</label>
                            <input type="number" name="price">
                        </div>

                        <div class="div_deg">
                            <label for="">Room Type</label>
                            <select name="type">
                                <option selected value="regular">Regular</option>
                                <option value="premium">Premium</option>
                                <option value="deluxe">Deluxe</option>
                            </select>
                        </div>

                        <div class="div_deg">
                            <label for="">Free Wifi</label>
                            <select name="wifi">
                                <option selected value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>

                        <div class="div_deg">
                            <label for="">Upload Image</label>
                            <input type="file" name="image" />
                        </div>

                        <div class="div_deg">
                            <input class="btn btn-primary" type="submit" value="Add Room">
                        </div>
                    </form>
                </div>
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