        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <div class="app-brand justify-content-center">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="<?= base_url() ?>assets/img/logo/LOGO_SURYA_GANESA-HITAM-01.png" alt="logo-lagadelas" width="50">
                        </span>
                        <span class="app-brand-text demo text-body fw-bolder mt-3">INISIATOR <p style="font-size: 1.05rem;">LAGADELAS 2024</p> </span>
                    </a>
                </div>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Rekap -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Rekap</span></li>
                <li class="menu-item <?= ($this->uri->segment(1) == 'admin' ? 'active' : '') ?>">
                    <a href="<?= base_url() ?>admin" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-notepad"></i>
                        <div data-i18n="Basic">Rekap Perlombaan</div>
                    </a>
                </li>
            </ul>
        </aside>
        <!-- / Menu -->