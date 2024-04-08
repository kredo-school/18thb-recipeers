{{-- Delete an Account --}}
{{-- * Change to variables --}}

<div class="modal fade" id="accountTrashModal">
    {{-- -{{ $user->id }} --}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center align-items-center">
                <h3 class="modal-title color1">
                    <i class="fa-solid fa-user-xmark me-3"></i>
                    Delete Account
                </h3>
            </div>
            <div class="horizontal-line3"></div>
            <div class="horizontal-line4"></div>

            <div class="modal-body justify-items-center py-5 text-center">
                <p class="fw-light mb-5">You are about to delete your account.</p>
                @if($user->avatar)
                    <img src="{{ $user->avatar }}" alt="avatar" class="rounded-circle img-lg mb-3">
                @else
                    <i class="fa-solid fa-circle-user icon-lg color1 mb-3"></i>
                @endif
                <p class="h4 fw-light">{{ $user->username}}</p>
            </div>
            <div class="modal-footer border-0 d-flex justify-content-center mb-5">
                {{-- <form action="{{ route('account.users.delete',$user->id) }}" method="post">
                    @csrf
                    @method('DELETE') --}}
                        <button type="button" class="btn btn-sub btn-block w-25 me-4" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-main btn-block w-25">
                            Delete
                        </button>
                    </div>
                {{-- </form> --}}
            </div>
        </div>
    </div>
</div>
