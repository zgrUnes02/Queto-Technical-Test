@include('../links/links')
@include('../layout.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Food products </title>
</head>
<body>

    <div style="padding: 30px 100px">

        <div style="display:flex ;justify-content:space-between;">
            <div>
                <h3> Food products </h3>
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
                    <th style="background-color: yellow;" scope="col"> Product name </th>
                    <th style="background-color: yellow;" scope="col"> Quantity </th>
                    <th style="background-color: yellow;" scope="col"> Expiration data </th>
                    <th width="20%" style="background-color: yellow;" scope="col"> Actions </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products_food as $product )
                    <tr>
                        <th scope="row"> {{ $loop -> iteration }} </th>
                        <td> {{ $product -> food_product_name }} </td>
                        <td> {{ $product -> product -> product_name }} </td>
                        <td> {{ $product -> quantity }} </td>
                        <td> {{ $product -> expiration_date }} </td>
                        <td>
                            <button title="edit" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update_food_product{{ $product -> id }}"> <i class='bx bx-edit-alt'></i> </button>
                            <button title="delete" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#food_product_delete{{ $product -> id }}"> <i class='bx bx-trash' ></i> </button>
                        </td>
                    </tr>
                    @include('food_product.edit')
                    @include('food_product.delete')
                @endforeach
            </tbody>
        </table>

        {{ $products_food -> links('pagination::bootstrap-5') }}
        @include('food_product.create')

    </div>
       
</body>
</html>