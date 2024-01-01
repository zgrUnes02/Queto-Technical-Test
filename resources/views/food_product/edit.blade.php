<!-- Modal edit food product -->
<div class="modal fade" id="update_food_product{{ $product -> id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Update food product : </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('food_product.update' , $product -> id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1" class="form-label"> Food product name </label>
                    <input value="{{ $product -> food_product_name }}" placeholder="Enter the food product name" type="text" class="form-control" name="food_product_name" id="exampleInputPassword1" required>

                    <label for="exampleInputPassword1" class="form-label mt-3"> Quantity </label>
                    <input value="{{ $product -> quantity }}" placeholder="Enter the product quantity" type="number" class="form-control" name="quantity" id="exampleInputPassword1" required>

                    <label for="exampleInputPassword1" class="form-label mt-3"> Expiration date </label>
                    <input value="{{ $product -> expiration_date }}" placeholder="Enter the expiration date" type="date" class="form-control" name="expiration_date" id="exampleInputPassword1" required>

                    <label for="exampleInputPassword1" class="form-label mt-3"> Product </label>
                    <select class="form-select" name="product_id" aria-label="Default select example">
                        <option value="{{ $product -> product -> id }}" selected> {{ $product -> product -> product_name }} </option>
                        @foreach ($products as $product)
                            <option value="{{ $product -> id }}"> {{ $product -> product_name }} </option>
                        @endforeach
                    </select>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close </button>
                    <button type="submit" class="btn btn-primary"> Create </button>
                </div>
            </form>
        </div>
    </div>
</div>