@include('../links/links')
@include('../layout.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title> Home </title>
</head>
<body>

    <section>

        <div>
            <h2> Products </h2>
            <img src="https://images.pexels.com/photos/5498025/pexels-photo-5498025.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="products image">
            <p>
                Here you can see more about your products !
            </p>
            <a href="/products" class="btn btn-primary"> See more </a>
        </div>

        <div>
            <h2> Food products </h2>
            <img src="https://images.pexels.com/photos/5273044/pexels-photo-5273044.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="food products image">
            <p>
                Here you can see more about your food products !
            </p>
            <a href="/products/food" class="btn btn-primary"> See more </a>
        </div>

    </section>
    
</body>
</html>
