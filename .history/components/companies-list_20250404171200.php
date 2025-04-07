<?php
?>
<style>
    .card-container {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .expand-card {
        height: 15vh;
        transition: height 0.5s ease;
        background-size: cover;
        background-position: center;
        cursor: pointer;
        border-radius: 12px;
        overflow: hidden;
        color: white;
        position: relative;
        display: flex;
        align-items: flex-end;
        padding: 15px;
    }

    .expand-card.active {
        height: 70vh;
    }

    .expand-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.6), transparent 60%);
        z-index: 0;
    }

    .expand-card .content {
        position: relative;
        z-index: 1;
    }

    .expand-card h4,
    .expand-card p {
        margin: 0;
    }
</style>
<div class="options-vertical">
    <div class="option active" style="--optionBackground:url('https://picsum.photos/id/1011/800/600');">
        <div class="shadow"></div>
        <div class="label">
            <div class="icon"><i class="fas fa-walking"></i></div>
            <div class="info">
                <div class="main">Blonkisoaz</div>
                <div class="sub">Omuke trughte a otufta</div>
            </div>
        </div>
    </div>

    <div class="option" style="--optionBackground:url('https://picsum.photos/id/1015/800/600');">
        <div class="shadow"></div>
        <div class="label">
            <div class="icon"><i class="fas fa-snowflake"></i></div>
            <div class="info">
                <div class="main">Oretemauw</div>
                <div class="sub">Omuke trughte a otufta</div>
            </div>
        </div>
    </div>

    <div class="option" style="--optionBackground:url('https://picsum.photos/id/1016/800/600');">
        <div class="shadow"></div>
        <div class="label">
            <div class="icon"><i class="fas fa-tree"></i></div>
            <div class="info">
                <div class="main">Iteresuselle</div>
                <div class="sub">Omuke trughte a otufta</div>
            </div>
        </div>
    </div>
</div>



<script>
    $(".option").on("click", function () {
        $(".option").removeClass("active");
        $(this).addClass("active");
    });
</script>