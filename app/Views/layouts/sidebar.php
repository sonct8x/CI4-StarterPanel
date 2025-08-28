<aside class="sidebar">
    <div class="sidebar__inner scrollable-content">

        <!-- This element is only visible when sidebar Stick mode is active. -->
        <div class="sidebar__stuck align-item-center mb-3 px-4">
            <p class="m-0 text-danger">Close the sidebar =></p>
            <button type="button" class="sidebar-toggler btn-close btn-lg rounded-circle ms-auto" aria-label="Close"></button>
        </div>

        <!-- Sidebar tabs nav -->
        <div class="sidebar__wrap">
            <nav class="px-3">
                <div class="nav nav-callout nav-fill flex-nowrap" id="nav-tab" role="tablist">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav-chat" type="button" role="tab" aria-controls="nav-chat" aria-selected="true">
                        <i class="d-block demo-pli-speech-bubble-5 fs-3 mb-2"></i>
                        <span>Chat</span>
                    </button>

                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-reports" type="button" role="tab" aria-controls="nav-reports" aria-selected="false">
                        <i class="d-block demo-pli-information fs-3 mb-2"></i>
                        <span>Reports</span>
                    </button>

                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-settings" type="button" role="tab" aria-controls="nav-settings" aria-selected="false">
                        <i class="d-block demo-pli-wrench fs-3 mb-2"></i>
                        <span>Settings</span>
                    </button>
                </div>
            </nav>
        </div>
        <!-- End - Sidebar tabs nav -->

        <!-- Sideabar tabs content -->
        <div class="tab-content sidebar__wrap" id="nav-tabContent">

            <!-- Chat tab Content -->
            <?= $this->include('layouts/components/chat_tab') ?>
            <!-- End - Chat tab content -->

            <!-- Reports tab content -->
            <?= $this->include('layouts/components/report_tab') ?>
            <!-- End - Reports tab content -->

            <!-- Settings content -->
            <?= $this->include('layouts/components/settings_tab') ?>
            <!-- End - Settings content -->

        </div>
        <!-- End - Sidebar tabs content -->

    </div>
</aside>