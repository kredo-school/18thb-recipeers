{{-- Edit Recipe Delete --}}
<div class="modal fade" id="recipeTrashModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center align-items-center">
                <h3 class="modal-title color1">
                    <i class="fa-solid fa-trash"></i> Delete Recipe
                </h3>
            </div>
            <div class="horizontal-line3"></div>
            <div class="horizontal-line4"></div>

            <div class="modal-body py-5">
                <p class="fw-light mb-5 text-center">You are about to deactivate the account below.</p>

                {{-- Card --}}
                <div class="card d-flex flex-column p-2 w-50 mx-auto">

                    {{-- Card Header --}}
                    <div class="card-header">
                        {{-- Recipe Title --}}
                        <h4>Recipe Title</h4>
                    </div>

                    {{-- Card Body --}}
                    <div class="card-body bg-white mx-auto">
                        <img src="{{ asset('/assets/images/food_sample.jpg') }}" alt=""
                            class="img-card img-fluid">
                    </div>
                </div>

            </div>
            <div class="modal-footer border-0 d-flex justify-content-center mb-5">
                <form action="">
                    @csrf
                    @method('DELETE')

                    <button type="button" class="btn btn-sub btn-block w-25 me-4" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-main btn-block w-25">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
