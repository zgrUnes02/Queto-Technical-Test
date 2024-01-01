<!-- Modal create new product -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Create new product : </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('product.create') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1" class="form-label"> Product name </label>
                    <input placeholder="Enter the product name" type="text" class="form-control" name="product_name" id="exampleInputPassword1" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close </button>
                    <button type="submit" class="btn btn-primary"> Create </button>
                </div>
            </form>
        </div>
    </div>
</div>
