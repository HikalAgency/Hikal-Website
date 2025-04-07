<?php
?>
<style>
    .company-container {
        display: flex;
        gap: 10px;
        width: 100%;
        height: 100px;
        justify-content: center;
        z-index: -1;
        margin-bottom: 150px;
    }

    .company-point {
        transition-duration: 0.5s;
        border-radius: 50%;
        display: grid;
        place-items: center;
        width: 120px;
        height: 150px;
        position: relative;
    }

    .company-point::before {
        content: "";
        z-index: -1;
        border-radius: 50%;
        position: absolute;
        /* background: conic-gradient(var(--primary) var(--angle),
                transparent 0deg 360deg); */
        animation: rotateBorder 2s linear var(--delay) forwards;
        position: absolute;
        width: 134px;
        height: 134px;
        background: conic-gradient(var(--primary) var(--angle), transparent 0deg 360deg);
        mask: radial-gradient(farthest-side, transparent calc(100% - 5px), black 0);
        -webkit-mask: radial-gradient(farthest-side, transparent calc(100% - 5px), black 0);
    }

    .company-point:nth-child(odd)::before {
        transform: rotate(-90deg);
    }

    .company-point:nth-child(even)::before {
        transform: rotate(90deg) scaleY(-1);
    }

    @property --angle {
        syntax: "<angle>";
        initial-value: 0deg;
        inherits: false;
    }

    .company-point:nth-child(1) {
        --delay: 2s;
    }

    .company-point:nth-child(2) {
        --delay: 4s;
    }

    .company-point:nth-child(3) {
        --delay: 6s;
    }

    .company-point:nth-child(4) {
        --delay: 8s;
    }

    .company-point:nth-child(5) {
        --delay: 10s;
    }

    .company-point:nth-child(6) {
        --delay: 12s;
    }

    .company-point:nth-child(odd) .popup {
        bottom: 140px;
    }

    .company-point:nth-child(even) .popup {
        top: 140px;
    }

    .company-point:nth-child(odd) .popup:before {
        top: calc(100% + 47px);
        transform: rotateX(180deg);
        transform-origin: top;
    }

    .popup {
        width: 250px;
        height: auto;
        max-height: 0;
        position: absolute;
        color: white;
        border-radius: 10px;
        box-shadow: 5px 5px 10px #080a10, -5px -5px 10px #22283e;
        transform-origin: bottom bottom;
        animation: expandPopup 0.5s linear calc(var(--delay) + 0.5s) forwards;
        z-index: 1;
        /* background: #10131d; */
        background: #151927;
    }

    /* .popup::before {
        content: "";
        width: 5px;
        height: 0;
        border-radius: 20px;
        background-color: var(--primary);
        position: absolute;
        left: 50%;
        top: -47px;
        display: flex;
        animation: drawLine 0.5s linear var(--delay) forwards;
    } */
    .company-flag {
        height: 50px;
        /* box-shadow: 0 0 5px rgba(238, 238, 238, 0.5); */
        border-radius: 5px;
        width: 80px;
        object-fit: cover;
        object-position: center;
        box-shadow: 2px 2px 5px #9b8d66, -2px -2px 5px #e9d39a;
    }

    .popup-details {
        opacity: 0;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        flex-direction: column;
        animation: fadeIn 0.5s linear calc(var(--delay) + 0.7s) forwards;
    }

    @keyframes rotateBorder {
        from {
            --angle: 0deg;
        }

        to {
            --angle: 180deg;
        }
    }

    @keyframes expandPopup {
        0% {
            max-height: 0;
        }

        100% {
            max-height: 200px;
        }
    }

    @keyframes drawLine {
        0% {
            height: 0%;
            opacity: 0;
        }

        100% {
            height: 33.5px;
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }

    @media (max-width: 1024px) {
        .company-container {
            flex-direction: column;
            height: auto;
            margin-bottom: 50px;
        }

        .company-point {
            width: 105px;
            height: 105px;
            flex-shrink: 0;
            left: calc(-300px / 2.2);
            margin: 0px auto;
            position: relative;
        }

        .company-point::before {
            width: 120px;
            height: 120px;
        }

        .company-point:nth-child(odd)::before {
            transform: rotate(0deg);
        }

        .company-point:nth-child(even)::before {
            transform: rotate(0deg) scaleX(-1);
        }

        .company-point .popup:before {
            display: none;
        }

        .company-point:nth-child(odd) .popup {
            bottom: auto;
            left: 120px;
        }

        .company-point:nth-child(even) .popup {
            top: auto;
            left: 120px;
        }

        .company-flag {
            height: 45px;
            width: 70px;
        }
    }
</style>

<div class="company-container">
    <?php
    foreach ($companies as $index => $company) {
        ?>
        <div class="company-point">
            <img src="<?php echo $company['flag']; ?>" class="company-flag" />
            <div class="popup">
                <div class="popup-details p-3">
                    <h6 class="font-600 m-0">
                        <?php echo $company['company']; ?>
                    </h6>
                    <div class="d-none d-lg-flex gap-2 align-items-center justify-content-center">
                        <p class="m-0">
                            <?php echo $company['country']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<div class="container py-4">
    <div class="d-flex flex-column gap-3">
        <?php
        foreach ($companies as $company) {
            ?>
            <div class="card company-card" data-mdb-toggle="collapse" data-mdb-target="#<?php echo $company['id']; ?>"
                aria-expanded="false" aria-controls="<?php echo $company['id']; ?>">
                <div class="card-body d-flex align-items-center">
                    <img src="<?php echo $company['image']; ?>" class="thumb me-3" alt="logo">
                    <h5 class="mb-0"><?php echo $company['name']; ?></h5>
                </div>
                <div id="' . $company['id'] . '" class="collapse" data-mdb-parent=".container">
                    <div class="card-body border-top">
                        <p>' . $company['description'] . '</p>
                        <img src="' . $company['image'] . '" class="full" alt="company">
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>div>