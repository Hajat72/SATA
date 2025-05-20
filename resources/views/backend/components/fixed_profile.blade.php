<div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3">
    <div class="hstack gap-3">
        <div class="john-img">
            <img src="{{ asset('backend/images/profile/user-1.jpg') }}" class="rounded-circle" width="40" height="40" alt="modernize-img" />
        </div>
        <div class="john-title">
            <h6 class="mb-0 fs-4 fw-semibold">Admin</h6>
            <span class="fs-2">Logout !</span>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="border-0 bg-transparent text-primary ms-auto" type="submit"
                aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                <i class="ti ti-power fs-6"></i>
            </button>
        </form>
    </div>
</div>
