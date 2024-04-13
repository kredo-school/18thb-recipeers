{{-- Delete an Account (SoftDelete) --}}

<div class="modal fade" id="account-softdelete{{ $user->id }}">
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
                <p class="h4 fw-light">{{ $user->username }}</p>
            </div>
            <div class="modal-footer border-0 d-flex justify-content-center mb-5">
                <form action="{{ route('user.account.delete', $user->id) }}" method="post" id="delete">
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-sub btn-block" data-bs-dismiss="modal">
                                Cancel
                            </button>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-main btn-block">
                                Delete
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('javascript')
<script>
$(document).ready(function() {
    $('#account-softdelete{{ $user->id }}').on('hidden.bs.modal', function () {
        window.location.href = "{{ route('home') }}";
    });
});
</script>
@endsection
