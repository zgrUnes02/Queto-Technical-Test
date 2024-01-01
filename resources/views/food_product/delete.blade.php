<!-- Modal -->
<div class="modal fade" id="food_product_delete{{ $product -> id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Delete food product : </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('food_product.delete' , $product -> id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <p>
                        Are you sure you want to delete this food product ?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Cancel </button>
                    <button type="submit" class="btn btn-primary"> Yes </button>
                </div>
            </form>
        </div>
    </div>
</div>
