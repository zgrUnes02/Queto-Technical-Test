<!-- Modal edit product -->
<div class="modal fade" id="edit_product{{ $product -> id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Update product : </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('product.update' , $product -> id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1" class="form-label"> Product name </label>
                    <input value="{{ $product -> product_name }}" type="text" class="form-control" name="product_name" id="exampleInputPassword1" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close </button>
                    <button type="submit" class="btn btn-primary"> Update </button>
                </div>
            </form>
        </div>
    </div>
</div>