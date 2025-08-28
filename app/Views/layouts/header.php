<header class="header">
    <div class="header__inner">

        <!-- Brand -->
        <div class="header__brand">
            <div class="brand-wrap">

                <!-- Brand logo -->
                <a href="index.html" class="brand-img stretched-link">
                    <img src="<?=$PATH_ASSET_IMG."logo.svg"?>" alt="Nifty Logo" class="Nifty logo" width="40" height="40">
                </a>

                <!-- Brand title -->
                <div class="brand-title">Nifty</div>

                <!-- You can also use IMG or SVG instead of a text element. -->

            </div>
        </div>
        <!-- End - Brand -->

        <div class="header__content">

            <!-- Content Header - Left Side: -->
            <div class="header__content-start">

                <!-- Navigation Toggler -->
                <button type="button" class="nav-toggler header__btn btn btn-icon btn-sm" aria-label="Nav Toggler">
                    <i class="demo-psi-view-list"></i>
                </button>

                <!-- Searchbox -->
                <div class="header-searchbox">

                    <!-- Searchbox toggler for small devices -->
                    <label for="header-search-input" class="header__btn d-md-none btn btn-icon rounded-pill shadow-none border-0 btn-sm" type="button">
                        <i class="demo-psi-magnifi-glass"></i>
                    </label>

                    <!-- Searchbox input -->
                    <form class="searchbox searchbox--auto-expand searchbox--hide-btn input-group">
                        <input id="header-search-input" class="searchbox__input form-control bg-transparent" type="search" placeholder="Type for search . . ." aria-label="Search">
                        <div class="searchbox__backdrop">
                            <button class="searchbox__btn header__btn btn btn-icon rounded shadow-none border-0 btn-sm" type="button" id="button-addon2">
                                <i class="demo-pli-magnifi-glass"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End - Content Header - Left Side -->

            <!-- Content Header - Right Side: -->
            <div class="header__content-end">

                <!-- Mega Dropdown -->
                <?= $this->include('layouts/components/mega_dropdown'); ?>
                <!-- End - Mega Dropdown -->

                <!-- Notification Dropdown -->
                <?= $this->include('layouts/components/notification_dropdown'); ?>
                <!-- End - Notification dropdown -->

                <!-- User dropdown -->
               <?= $this->include('layouts/components/users_dropdown'); ?>
                <!-- End - User dropdown -->

                <!-- Sidebar Toggler -->
                <button class="sidebar-toggler header__btn btn btn-icon btn-sm" type="button" aria-label="Sidebar button">
                    <i class="demo-psi-dot-vertical"></i>
                </button>

            </div>
        </div>
    </div>
</header>