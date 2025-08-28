<div class="dropdown">

    <!-- Toggler -->
    <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-label="User dropdown" aria-expanded="false">
        <i class="demo-psi-male"></i>
    </button>

    <!-- User dropdown menu -->
    <div class="dropdown-menu dropdown-menu-end w-md-450px">

        <!-- User dropdown header -->
        <div class="d-flex align-items-center border-bottom px-3 py-2">
            <div class="flex-shrink-0">
                <img class="img-sm rounded-circle" src='<?= $PATH_ASSET_IMG . "profile-photos/1.png" ?>' alt="Profile Picture" loading="lazy">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5 class="mb-0"><?= $user['fullname']; ?></h5>
                <span class="text-muted fst-italic">a<?= $user['username']; ?></span>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-md-7">

                <div class="list-group list-group-borderless mb-3">
                    <div class="list-group-item text-center border-bottom mb-3">
                        <p class="h1 display-1 text-green">17</p>
                        <p class="h6 mb-0"><i class="demo-pli-basket-coins fs-3 me-2"></i> New orders</p>
                        <small class="text-muted">You have new orders</small>
                    </div>
                    <div class="list-group-item py-0 d-flex justify-content-between align-items-center">
                        Today Earning
                        <small class="fw-bolder">$578</small>
                    </div>
                    <div class="list-group-item py-0 d-flex justify-content-between align-items-center">
                        Tax
                        <small class="fw-bolder text-danger">- $28</small>
                    </div>
                    <div class="list-group-item py-0 d-flex justify-content-between align-items-center">
                        Total Earning
                        <span class="fw-bold text-primary">$6,578</span>
                    </div>
                </div>

            </div>
            <div class="col-md-5">

                <div class="list-group list-group-borderless h-100 py-3">
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <span><i class="demo-pli-mail fs-5 me-2"></i> Messages</span>
                        <span class="badge bg-danger rounded-pill">14</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="demo-pli-male fs-5 me-2"></i> Profile
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="demo-pli-gear fs-5 me-2"></i> Settings
                    </a>

                    <a href="#" class="list-group-item list-group-item-action mt-auto">
                        <i class="demo-pli-computer-secure fs-5 me-2"></i> Lock screen
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="demo-pli-unlock fs-5 me-2"></i> Logout
                    </a>
                </div>

            </div>
        </div> -->

    </div>
</div>