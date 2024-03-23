{{-- Deactivate --}}
{{-- * Change to variables --}}
<div class="modal fade" id="deactivate-account">
    {{-- *put this in the id -> -{{ $user->id }} --}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center align-items-center">
                <h3 class="modal-title color1">
                    <i class="fa-solid fa-user-minus me-3"></i>Deactivate Account
                </h3>
            </div>
            <div class="horizontal-line3"></div>
            <div class="horizontal-line4"></div>
        
            <div class="modal-body justify-items-center py-5">
                <p class="fw-light mb-5">You are about to deactivate the account below.</p>
                <img src="../assets/images/user.jpg" alt="avatar" class="rounded-circle img-lg mb-3">
                <p class="h4 fw-light">Username</p>
            </div>
            <div class="modal-footer border-0 d-flex justify-content-center mb-5">
                {{-- <form action="{{ route('admin.users.deactivate',$user->id) }}" method="post">
                    @csrf
                    @method('DELETE') --}}

                        <button type="button" class="btn btn-sub btn-block w-25 me-4" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-main btn-block w-25">
                            Deactivate
                        </button>
                    </div>

                {{-- </form> --}}
            </div>
        </div>
    </div>
</div>