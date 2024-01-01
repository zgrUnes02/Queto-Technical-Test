@include('../links/links')
@include('../layout.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Products that belong to {{ $product -> product_name }} </title>
</head>
<body>

    <div style="padding: 30px 100px">

        <div style="display:flex ;justify-content:space-between;">
            <div>
                <h3> Products that belong to {{ $product -> product_name }} </h3>
                <h6 href="/" class="mb-5"> Home </h6>
            </div>
            <div>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#create_food_product"> Create new food product </button>
            </div>
        </div>

        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th style="background-color: yellow;" scope="col"> # </th>
                    <th style="background-color: yellow;" scope="col"> Food product name </th>
                    <th style="background-color: yellow;" scope="col"> Quantity </th>
                    <th style="background-color: yellow;" scope="col"> Expiration date </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product )
                    <tr>
                        <th scope="row"> {{ $loop -> iteration }} </th>
                        <td> {{ $product -> food_product_name }} </td>
                        <td> {{ $product -> quantity }} </td>
                        <td> {{ $product -> expiration_date }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @include('food_product.create') 
        
        <a href="/products" class="btn btn-primary mt-4"> back </a>

    </div>
       
</body>
</html>