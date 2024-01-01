@include('../links/links')
@include('../layout.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Products </title>
</head>
<body>

    <div style="padding: 30px 100px">

        <div style="display:flex ;justify-content:space-between;">
            <div>
                <h3> Products </h3>
                <h6 href="/" class="mb-5"> Home </h6>
            </div>
            <div>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"> Create new product </button>
            </div>
        </div>

        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th style="background-color: yellow;" scope="col"> # </th>
                    <th style="background-color: yellow;" scope="col"> Product name </th>
                    <th width="20%" style="background-color: yellow;" scope="col"> Actions </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product )
                    <tr>
                        <th scope="row"> {{ $loop -> iteration }} </th>
                        <td> {{ $product -> product_name }} </td>
                        <td>
                            <button title="edit" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit_product{{ $product -> id }}"> <i class='bx bx-edit-alt'></i> </button>
                            <button title="delete" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#product_delete{{ $product -> id }}"> <i class='bx bx-trash' ></i> </button>
                            <a title="display food products" class="btn btn-success" href="{{ route('food_product.show' , $product -> id) }}"> <i class='bx bxs-navigation'></i> </a>
                        </td>
                    </tr>
                    @include('product.edit')
                    @include('product.delete')
                @endforeach
            </tbody>
        </table>

        {{ $products -> links('pagination::bootstrap-5') }}
        @include('product.create')

    </div>
       
</body>
</html>
