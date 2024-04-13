{{-- Deactivate --}}
<div class="modal fade" id="deactivate-account-{{ $user->id }}">
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
                @if($user->avatar)
                    <img src="{{ $user->avatar }}" alt="{{ $user->username }}" class="rounded-circle img-lg mx-auto d-block">
                @else
                    <i class="fa-solid fa-circle-user color1 icon-lg d-block text-center"></i>
                @endif
                <p class="h4 fw-light mt-3">{{ $user->username}}</p>
            </div>
            <div class="modal-footer border-0 d-grid justify-content-center mb-5">
                <form action="{{ route('admin.users.deactivate', $user->id) }}" method="post">
                    @csrf
                    @method('DELETE')

                    <button type="button" class="btn btn-sub px-4 me-2" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-main">
                        Deactivate
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>