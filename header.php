<?php
?>
<header id="header">
    <div class="d-flex align-items-center justify-content-center gap-5 p-2 text-center">
        <div class="d-flex flex-column flex-lg-row gap-3 gap-lg-5">
            <a href="<?php if ($page === "home") { echo '#companies'; } else { echo 'https://hikalgroup.ae/companies'; } ?>" class="nav-title gold-grad">COMPANIES</a>
            <a href="<?php if ($page === "home") { echo '#services'; } else { echo 'https://hikalgroup.ae/services'; } ?>" class="nav-title gold-grad">SERVICES</a>
        </div>
        <a href="<?php if ($page == "home") { echo '#header'; } else { echo 'https://hikalgroup.ae'; } ?>">
            <img src="assets/images/logo/logo.png" loading="eager" alt="Hikal Group" style="width: 100px;">
        </a>
        <div class="d-flex flex-column flex-lg-row gap-3 gap-lg-5">
            <a href="<?php if ($page === "home") { echo '#about'; } else { echo 'https://hikalgroup.ae/about'; } ?>" class="nav-title gold-grad">ABOUT</a>
            <a href="<?php if ($page === "home") { echo '#contact'; } else { echo 'https://hikalgroup.ae/contact'; } ?>" class="nav-title gold-grad">CONTACT</a>
        </div>
    </div>
</header>
