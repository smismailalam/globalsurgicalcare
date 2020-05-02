<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 5.2 CRUD Application</title>

    <link href="{{ URL::to('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
<h3 class="text-center"> Product Details </h3>

<div class="container-fluid">
    <div class="row">
        <div  class="col-md-8 col-md-offset-2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product name</th>
                        <th>Specification</th>
                        <th>Unit</th>
                        <th>Price name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->specification }}</td>
                        <td>{{ $product->unit }}</td>
                        <td>{{ $product->price }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ URL::to('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>