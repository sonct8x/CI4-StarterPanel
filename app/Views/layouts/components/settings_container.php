<div id="_dm-settingsContainer" class="_dm-setting-container offcanvas offcanvas-end rounded-start" tabindex="-1">
    <button id="_dm-settingsToggler" class="_dm-btn-settings btn btn-sm btn-dark p-2 rounded-0 rounded-start shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#_dm-settingsContainer" aria-label="Customization button" aria-controls="_dm-settingsContainer">
        <i class="demo-psi-gear fs-1"></i>
    </button>

    <div class="offcanvas-body py-0">
        <div class="_dm-setting-container__content row">
            <div class="col-lg-3 p-4">

                <h5 class="fw-bold pb-3 mb-2">Layouts</h5>

                <!-- OPTION : Centered Layout -->
                <h6 class="mb-2 pb-1">Layouts</h6>
                <div class="d-flex align-items-center pt-1 mb-2">
                    <label class="form-check-label flex-fill" for="_dm-fluidLayoutRadio">Fluid Layout</label>
                    <div class="form-check form-switch">
                        <input id="_dm-fluidLayoutRadio" class="form-check-input ms-0" type="radio" name="settingLayouts" autocomplete="off" checked>
                    </div>
                </div>

                <!-- OPTION : Boxed layout -->
                <div class="d-flex align-items-center pt-1 mb-2">
                    <label class="form-check-label flex-fill" for="_dm-boxedLayoutRadio">Boxed Layout</label>
                    <div class="form-check form-switch">
                        <input id="_dm-boxedLayoutRadio" class="form-check-input ms-0" type="radio" name="settingLayouts" autocomplete="off">
                    </div>
                </div>

                <!-- OPTION : Boxed layout with background images -->
                <div id="_dm-boxedBgOption" class="opacity-50 d-flex align-items-center pt-1 mb-2">
                    <label class="form-label flex-fill mb-0">Background for boxed</label>
                    <button id="_dm-boxedBgBtn" class="btn btn-icon btn-primary btn-xs" type="button" data-bs-toggle="offcanvas" data-bs-target="#_dm-boxedBgContent" disabled>
                        <i class="demo-psi-dot-horizontal"></i>
                    </button>
                </div>

                <!-- OPTION : Centered Layout -->
                <div class="d-flex align-items-start pt-1 mb-2">
                    <label class="form-check-label flex-fill text-nowrap" for="_dm-centeredLayoutRadio">Centered Layout <br><span class="badge bg-danger">New in v.3.0</span></label>
                    <div class="form-check form-switch">
                        <input id="_dm-centeredLayoutRadio" class="form-check-input ms-0" type="radio" name="settingLayouts" autocomplete="off">
                    </div>
                </div>

                <!-- OPTION : Transition timing -->
                <h6 class="mt-4 mb-2 py-1">Transitions</h6>
                <div class="d-flex align-items-center pt-1 mb-2">
                    <select id="_dm-transtiionSelect" class="form-select" aria-label="select transition timing">
                        <option value="in-quart">In Quart</option>
                        <option value="out-quart">Out Quart</option>
                        <option value="in-back">In Back</option>
                        <option value="out-back">Out Back</option>
                        <option value="in-out-back" selected="true">In Out Back</option>
                        <option value="steps">Steps</option>
                        <option value="jumping">Jumping</option>
                        <option value="rubber">Rubber</option>
                    </select>
                </div>

                <!-- OPTION : Sticky Header -->
                <h6 class="mt-4 mb-2 py-1">Header</h6>
                <div class="d-flex align-items-center pt-1 mb-2">
                    <label class="form-check-label flex-fill" for="_dm-stickyHeaderCheckbox">Sticky header</label>
                    <div class="form-check form-switch">
                        <input id="_dm-stickyHeaderCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                    </div>
                </div>

                <!-- OPTION : Additional Offcanvas -->
                <h6 class="mt-4 mb-2 py-1">Additional Offcanvas <span class="badge bg-danger">New in BS v.5.0</span></h6>
                <p>Select the offcanvas placement.</p>
                <div class="text-nowrap">
                    <button type="button" class="_dm-offcanvasBtn btn btn-sm btn-primary" value="offcanvas-top">Top</button>
                    <button type="button" class="_dm-offcanvasBtn btn btn-sm btn-primary" value="offcanvas-end">Right</button>
                    <button type="button" class="_dm-offcanvasBtn btn btn-sm btn-primary" value="offcanvas-bottom">Btm</button>
                    <button type="button" class="_dm-offcanvasBtn btn btn-sm btn-primary" value="offcanvas-start">Left</button>
                </div>

            </div>
            <div class="col-lg-3 p-4 bg-gray-300">

                <h5 class="fw-bold pb-3 mb-2">Sidebars</h5>

                <!-- OPTION : Sticky Navigation -->
                <h6 class="mb-2 pb-1">Navigation</h6>
                <div class="d-flex align-items-center pt-1 mb-2">
                    <label class="form-check-label flex-fill" for="_dm-stickyNavCheckbox">Sticky navigation</label>
                    <div class="form-check form-switch">
                        <input id="_dm-stickyNavCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                    </div>
                </div>

                <!-- OPTION : Navigation Profile Widget -->
                <div class="d-flex align-items-center pt-1 mb-2">
                    <label class="form-check-label flex-fill" for="_dm-profileWidgetCheckbox">Widget Profile</label>
                    <div class="form-check form-switch">
                        <input id="_dm-profileWidgetCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off" checked>
                    </div>
                </div>

                <!-- OPTION : Mini navigation mode -->
                <div class="d-flex align-items-center pt-3 mb-2">
                    <label class="form-check-label flex-fill" for="_dm-miniNavRadio">Min / Collapsed Mode</label>
                    <div class="form-check form-switch">
                        <input id="_dm-miniNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off">
                    </div>
                </div>

                <!-- OPTION : Maxi navigation mode -->
                <div class="d-flex align-items-center pt-1 mb-2">
                    <label class="form-check-label flex-fill" for="_dm-maxiNavRadio">Max / Expanded Mode</label>
                    <div class="form-check form-switch">
                        <input id="_dm-maxiNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off" checked>
                    </div>
                </div>

                <!-- OPTION : Push navigation mode -->
                <div class="d-flex align-items-center pt-1 mb-2">
                    <label class="form-check-label flex-fill" for="_dm-pushNavRadio">Push Mode</label>
                    <div class="form-check form-switch">
                        <input id="_dm-pushNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off">
                    </div>
                </div>

                <!-- OPTION : Slide on top navigation mode -->
                <div class="d-flex align-items-center pt-1 mb-2">
                    <label class="form-check-label flex-fill" for="_dm-slideNavRadio">Slide on top (default)</label>
                    <div class="form-check form-switch">
                        <input id="_dm-slideNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off">
                    </div>
                </div>

                <!-- OPTION : Slide on top navigation mode -->
                <div class="d-flex align-items-center pt-1 mb-2">
                    <label class="form-check-label flex-fill" for="_dm-revealNavRadio">Reveal Mode</label>
                    <div class="form-check form-switch">
                        <input id="_dm-revealNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off">
                    </div>
                </div>

                <h6 class="mt-4 mb-2 py-1">Right sidebar</h6>

                <!-- OPTION : Disable sidebar backdrop -->
                <div class="d-flex align-items-center pt-1 mb-2">
                    <label class="form-check-label flex-fill" for="_dm-disableBackdropCheckbox">Disable backdrop</label>
                    <div class="form-check form-switch">
                        <input id="_dm-disableBackdropCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                    </div>
                </div>

                <!-- OPTION : Static position -->
                <div class="d-flex align-items-center pt-1 mb-2">
                    <label class="form-check-label flex-fill" for="_dm-staticSidebarCheckbox">Static position</label>
                    <div class="form-check form-switch">
                        <input id="_dm-staticSidebarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                    </div>
                </div>

                <!-- OPTION : Stuck sidebar -->
                <div class="d-flex align-items-center pt-1 mb-2">
                    <label class="form-check-label flex-fill" for="_dm-stuckSidebarCheckbox">Stuck Sidebar </label>
                    <div class="form-check form-switch">
                        <input id="_dm-stuckSidebarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                    </div>
                </div>

                <!-- OPTION : Unite Sidebar -->
                <div class="d-flex align-items-center pt-1 mb-2">
                    <label class="form-check-label flex-fill" for="_dm-uniteSidebarCheckbox">Unite Sidebar</label>
                    <div class="form-check form-switch">
                        <input id="_dm-uniteSidebarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                    </div>
                </div>

                <!-- OPTION : Pinned Sidebar -->
                <div class="d-flex align-items-start pt-1 mb-2">
                    <label class="form-check-label flex-fill" for="_dm-pinnedSidebarCheckbox">Pinned Sidebar <span class="badge bg-danger">New in v3.0</span></label>
                    <div class="form-check form-switch">
                        <input id="_dm-pinnedSidebarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                    </div>
                </div>

            </div>
            <div id="dm_colorSchemesContainer" class="col-lg-6 p-4">
                <h5 class="fw-bold pb-3 mb-2">Color Schemes</h5>

                <div class="row mb-3 pb-3">
                    <div class="col-md-6">

                        <div class="d-flex align-items-start position-relative">
                            <div class="flex-shrink-0 me-3">
                                <div class="_dm-color-box bg-light"></div>
                            </div>
                            <div class="flex-grow-1 ">
                                <a href="#" data-dir="light" data-single="true" class="_dm-themeColors schemes-btn h6 d-block mb-0 stretched-link text-decoration-none">Light</a>
                                <small class="text-muted">Completely bright color themes.</small>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="d-flex align-items-start position-relative">
                            <div class="flex-shrink-0 me-3">
                                <div class="_dm-color-box bg-dark"></div>
                            </div>
                            <div class="flex-grow-1 ">
                                <a href="#" data-dir="dark" data-hd="expanded" class="_dm-themeColors schemes-btn h6 d-block mb-0 stretched-link text-decoration-none">Dark</a>
                                <small class="text-muted">Completely dark color themes.</small>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row text-center my-3">

                    <!-- Expanded Header -->
                    <div class="col-md-4">
                        <h6 class="m-0">Expanded Header</h6>
                        <div class="_dm-colorShcemesMode">

                            <!-- Scheme Button -->
                            <button type="button" class="btn shadow-none">
                                <img src='<?= $PATH_ASSET_IMG . "color-schemes/expanded-header.png" ?>' alt="color scheme illusttration" loading="lazy">
                            </button>

                            <!-- Scheme Colors -->
                            <div class="_dm-colorSchemesMode__colors">
                                <div class="d-flex flex-wrap justify-content-center">
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-gray" type="button" data-dir="all-headers/gray" data-hd="expanded"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-navy active" type="button" data-dir="all-headers/navy" data-hd="expanded"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-ocean" type="button" data-dir="all-headers/ocean" data-hd="expanded"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-lime" type="button" data-dir="all-headers/lime" data-hd="expanded"></button>

                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-violet" type="button" data-dir="all-headers/violet" data-hd="expanded"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-orange" type="button" data-dir="all-headers/orange" data-hd="expanded"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-teal" type="button" data-dir="all-headers/teal" data-hd="expanded"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-corn" type="button" data-dir="all-headers/corn" data-hd="expanded"></button>

                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-cherry" type="button" data-dir="all-headers/cherry" data-hd="expanded"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-coffee" type="button" data-dir="all-headers/coffee" data-hd="expanded"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-pear" type="button" data-dir="all-headers/pear" data-hd="expanded"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-night" type="button" data-dir="all-headers/night" data-hd="expanded"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fair Header -->
                    <div class="col-md-4">
                        <h6 class="m-0">Fair Header</h6>
                        <div class="_dm-colorShcemesMode">

                            <!-- Scheme Button -->
                            <button type="button" class="btn shadow-none">
                                <img src='<?= $PATH_ASSET_IMG . "color-schemes/fair-header.png" ?>' alt="color scheme illusttration" loading="lazy">
                            </button>

                            <!-- Scheme Colors -->
                            <div class="_dm-colorSchemesMode__colors">
                                <div class="d-flex flex-wrap justify-content-center">
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-gray" type="button" data-dir="all-headers/gray" data-hd="fair"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-navy" type="button" data-dir="" data-hd="fair"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-ocean" type="button" data-dir="all-headers/ocean" data-hd="fair"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-lime" type="button" data-dir="all-headers/lime" data-hd="fair"></button>

                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-violet" type="button" data-dir="all-headers/violet" data-hd="fair"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-orange" type="button" data-dir="all-headers/orange" data-hd="fair"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-teal" type="button" data-dir="all-headers/teal" data-hd="fair"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-corn" type="button" data-dir="all-headers/corn" data-hd="fair"></button>

                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-cherry" type="button" data-dir="all-headers/cherry" data-hd="fair"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-coffee" type="button" data-dir="all-headers/coffee" data-hd="fair"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-pear" type="button" data-dir="all-headers/pear" data-hd="fair"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-night" type="button" data-dir="all-headers/night" data-hd="fair"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h6 class="m-0">Full Header</h6>

                        <div class="_dm-colorShcemesMode">

                            <!-- Scheme Button -->
                            <button type="button" class="btn shadow-none">
                                <img src='<?= $PATH_ASSET_IMG . "color-schemes/full-header.png" ?>' alt="color scheme illusttration" loading="lazy">
                            </button>

                            <!-- Scheme Colors -->
                            <div class="_dm-colorSchemesMode__colors">
                                <div class="d-flex flex-wrap justify-content-center">
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-gray" type="button" data-dir="all-headers/gray"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-navy" type="button" data-dir=""></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-ocean" type="button" data-dir="all-headers/ocean"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-lime" type="button" data-dir="all-headers/lime"></button>

                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-violet" type="button" data-dir="all-headers/violet"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-orange" type="button" data-dir="all-headers/orange"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-teal" type="button" data-dir="all-headers/teal"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-corn" type="button" data-dir="all-headers/corn"></button>

                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-cherry" type="button" data-dir="all-headers/cherry"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-coffee" type="button" data-dir="all-headers/coffee"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-pear" type="button" data-dir="all-headers/pear"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-night" type="button" data-dir="all-headers/night"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row text-center mb-3">
                    <div class="col-md-4">
                        <h6 class="m-0">Primary Nav</h6>

                        <div class="_dm-colorShcemesMode">

                            <!-- Scheme Button -->
                            <button type="button" class="btn shadow-none">
                                <img src= '<?= $PATH_ASSET_IMG . "color-schemes/navigation.png" ?>' alt="color scheme illusttration" loading="lazy">
                            </button>

                            <!-- Scheme Colors -->
                            <div class="_dm-colorSchemesMode__colors">
                                <div class="d-flex flex-wrap justify-content-center">
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-gray" type="button" data-dir="primary-nav/gray" data-hd="fair"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-navy" type="button" data-dir="primary-nav/navy" data-hd="fair"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-ocean" type="button" data-dir="primary-nav/ocean" data-hd="fair"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-lime" type="button" data-dir="primary-nav/lime" data-hd="fair"></button>

                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-violet" type="button" data-dir="primary-nav/violet" data-hd="fair"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-orange" type="button" data-dir="primary-nav/orange" data-hd="fair"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-teal" type="button" data-dir="primary-nav/teal" data-hd="fair"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-corn" type="button" data-dir="primary-nav/corn" data-hd="fair"></button>

                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-cherry" type="button" data-dir="primary-nav/cherry" data-hd="fair"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-coffee" type="button" data-dir="primary-nav/coffee" data-hd="fair"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-pear" type="button" data-dir="primary-nav/pear" data-hd="fair"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-night" type="button" data-dir="primary-nav/night" data-hd="fair"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h6 class="m-0">Brand</h6>

                        <div class="_dm-colorShcemesMode">

                            <!-- Scheme Button -->
                            <button type="button" class="btn shadow-none">
                                <img src='<?= $PATH_ASSET_IMG . "color-schemes/brand.png" ?>' alt="color scheme illusttration" loading="lazy">
                            </button>

                            <!-- Scheme Colors -->
                            <div class="_dm-colorSchemesMode__colors">
                                <div class="d-flex flex-wrap justify-content-center">
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-gray" type="button" data-dir="brand/gray"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-navy" type="button" data-dir="brand/navy"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-ocean" type="button" data-dir="brand/ocean"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-lime" type="button" data-dir="brand/lime"></button>

                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-violet" type="button" data-dir="brand/violet"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-orange" type="button" data-dir="brand/orange"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-teal" type="button" data-dir="brand/teal"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-corn" type="button" data-dir="brand/corn"></button>

                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-cherry" type="button" data-dir="brand/cherry"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-coffee" type="button" data-dir="brand/coffee"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-pear" type="button" data-dir="brand/pear"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-night" type="button" data-dir="brand/night"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h6 class="m-0">Tall Header <span class="badge bg-danger">New in v3.0</span></h6>
                        <div class="_dm-colorShcemesMode">

                            <!-- Scheme Button -->
                            <button type="button" class="btn shadow-none">
                                <img src='<?= $PATH_ASSET_IMG . "color-schemes/tall-header.png" ?>' alt="color scheme illusttration" loading="lazy">
                            </button>

                            <!-- Scheme Colors -->
                            <div class="_dm-colorSchemesMode__colors">
                                <div class="d-flex flex-wrap justify-content-center">
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-gray" type="button" data-dir="all-headers/gray" data-hd="fair,expanded,border"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-navy" type="button" data-dir="" data-hd="fair,expanded,border"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-ocean" type="button" data-dir="all-headers/ocean" data-hd="fair,expanded,border"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-lime" type="button" data-dir="all-headers/lime" data-hd="fair,expanded,border"></button>

                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-violet" type="button" data-dir="all-headers/violet" data-hd="fair,expanded,border"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-orange" type="button" data-dir="all-headers/orange" data-hd="fair,expanded,border"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-teal" type="button" data-dir="all-headers/teal" data-hd="fair,expanded,border"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-corn" type="button" data-dir="all-headers/corn" data-hd="fair,expanded,border"></button>

                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-cherry" type="button" data-dir="all-headers/cherry" data-hd="fair,expanded,border"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-coffee" type="button" data-dir="all-headers/coffee" data-hd="fair,expanded,border"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-pear" type="button" data-dir="all-headers/pear" data-hd="fair,expanded,border"></button>
                                    <button class="_dm-themeColors _dm-box-xs _dm-bg-night" type="button" data-dir="all-headers/night" data-hd="fair,expanded,border"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <h5 class="mt-5 fw-bold">Scrollbars</h5>
                <p>Hides native scrollbars and creates custom styleable overlay scrollbars.</p>
                <div class="row">
                    <div class="col-5">

                        <!-- OPTION : Apply the OverlayScrollBar to the body. -->
                        <div class="d-flex align-items-center pt-1 mb-2">
                            <label class="form-check-label flex-fill" for="_dm-bodyScrollbarCheckbox">Body scrollbar</label>
                            <div class="form-check form-switch">
                                <input id="_dm-bodyScrollbarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                            </div>
                        </div>

                        <!-- OPTION : Apply the OverlayScrollBar to content containing class .scrollable-content. -->
                        <div class="d-flex align-items-center pt-1 mb-2">
                            <label class="form-check-label flex-fill" for="_dm-sidebarsScrollbarCheckbox">Navigation and Sidebar</label>
                            <div class="form-check form-switch">
                                <input id="_dm-sidebarsScrollbarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                            </div>
                        </div>

                    </div>
                    <div class="col-7">

                        <div class="alert alert-warning" role="alert">
                            Please consider the performance impact of using any scrollbar plugin.
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>