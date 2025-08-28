<div class="dropdown">

    <!-- Toggler -->
    <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-label="Notification dropdown" aria-expanded="false">
        <span class="d-block position-relative">
            <i class="demo-psi-bell"></i>
            <span class="badge badge-super rounded bg-danger p-1">

                <span class="visually-hidden">unread messages</span>
            </span>
        </span>
    </button>

    <!-- Notification dropdown menu -->
    <div class="dropdown-menu dropdown-menu-end w-md-300px">
        <div class="border-bottom px-3 py-2 mb-3">
            <h5>Notifications</h5>
        </div>

        <div class="list-group list-group-borderless">

            <!-- List item -->
            <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                <div class="flex-shrink-0 me-3">
                    <i class="demo-psi-data-settings text-muted fs-2"></i>
                </div>
                <div class="flex-grow-1 ">
                    <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Your storage is full</a>
                    <small class="text-muted">Local storage is nearly full.</small>
                </div>
            </div>

            <!-- List item -->
            <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                <div class="flex-shrink-0 me-3">
                    <i class="demo-psi-file-edit text-blue-200 fs-2"></i>
                </div>
                <div class="flex-grow-1 ">
                    <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Writing a New Article</a>
                    <small class="text-muted">Wrote a news article for the John Mike</small>
                </div>
            </div>

            <!-- List item -->
            <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                <div class="flex-shrink-0 me-3">
                    <i class="demo-psi-speech-bubble-7 text-green-300 fs-2"></i>
                </div>
                <div class="flex-grow-1 ">
                    <div class="d-flex justify-content-between align-items-start">
                        <a href="#" class="h6 mb-0 stretched-link text-decoration-none">Comment sorting</a>
                        <span class="badge bg-info rounded ms-auto">NEW</span>
                    </div>
                    <small class="text-muted">You have 1,256 unsorted comments.</small>
                </div>
            </div>

            <!-- List item -->
            <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                <div class="flex-shrink-0 me-3">
                    <img class="img-xs rounded-circle" src='<?= $PATH_ASSET_IMG . "profile-photos/7.png" ?>' alt="Profile Picture" loading="lazy">
                </div>
                <div class="flex-grow-1 ">
                    <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Lucy Sent you a message</a>
                    <small class="text-muted">30 minutes ago</small>
                </div>
            </div>

            <!-- List item -->
            <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                <div class="flex-shrink-0 me-3">
                    <img class="img-xs rounded-circle" src='<?= $PATH_ASSET_IMG . "profile-photos/3.png" ?>' alt="Profile Picture" loading="lazy">
                </div>
                <div class="flex-grow-1 ">
                    <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Jackson Sent you a message</a>
                    <small class="text-muted">1 hours ago</small>
                </div>
            </div>

            <div class="text-center mb-2">
                <a href="#" class="btn-link">Show all Notifications</a>
            </div>

        </div>
    </div>
</div>