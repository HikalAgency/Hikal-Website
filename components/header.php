<?php
$scheme = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$base = $scheme . '://' . $host;
?>
<div class="header row">
    <div class="col-4 p-2 h-100 d-flex justify-content-start">
        <div class="d-flex flex-column flex-md-row align-items-center justiy-content-center gap-2 gap-md-4">
            <h6>
                <a href="<?php if ($page === "home") {
                    echo '#companies';
                } else {
                    echo $base . '/#companies';
                } ?>" class="nav-title gold-grad">COMPANIES</a>
            </h6>
            <h6>
                <a href="<?php if ($page === "home") {
                    echo '#services';
                } else {
                    echo $base . '/#services';
                } ?>" class="nav-title gold-grad">SERVICES</a>
            </h6>
        </div>
    </div>
    <div class="col-4 p-2 h-100 d-flex align-items-center justify-content-center">
        <a href="<?php if ($page == "home") {
            echo '#header';
        } else {
            echo $base;
        } ?>">
            <img src="assets/images/logo/logo.png" loading="eager" alt="Hikal Group" style="width: 100px;">
        </a>
    </div>
    <div class="col-4 p-2 h-100 d-flex justify-content-end">
        <div class="d-flex flex-column flex-md-row align-items-center justiy-content-center gap-2 gap-md-4">
            <h6>
                <a href="<?php if ($page === "home") {
                    echo '#about';
                } else {
                    echo $base . '/#about';
                } ?>" class="nav-title gold-grad">ABOUT</a>
            </h6>
            <h6>
                <a href="<?php echo $base . '/careers'; ?>" class="nav-title gold-grad">CAREERS</a>
            </h6>
        </div>
    </div>

    <!-- SPOTLIGHT -->
    <div class="spotlight">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>