<?php
?>
<style>
    .options-vertical {
        display: flex;
        flex-direction: column;
        height: 90vh;
        width: 100%;
        margin: 20px auto;
        overflow: hidden;
        border-radius: 20px;
    }

    .options-vertical .option {
        position: relative;
        flex-grow: 1;
        background: var(--optionBackground) no-repeat center center;
        background-size: cover;
        margin: 5px 0;
        border-radius: 15px;
        overflow: hidden;
        transition: 0.6s ease-in-out;
        cursor: pointer;
    }

    .options-vertical .option.active {
        flex-grow: 10;
    }

    .options-vertical .shadow {
        position: absolute;
        bottom: 0;
        height: 100px;
        width: 100%;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.5), transparent);
    }

    .options-vertical .label {
        position: absolute;
        bottom: 20px;
        left: 20px;
        display: flex;
        align-items: center;
        color: white;
        z-index: 2;
    }

    .options-vertical .icon {
        background: white;
        color: #333;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .options-vertical .info {
        margin-left: 10px;
    }

    .options-vertical .main {
        font-size: 1.2rem;
        font-weight: bold;
    }

    .options-vertical .sub {
        font-size: 0.9rem;
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
    const collapses = document.querySelectorAll('.collapse');

    collapses.forEach(collapse => {
        collapse.addEventListener('show.mdb.collapse', () => {
            document.querySelectorAll('.company-card').forEach(card => card.classList.remove('expanded'));
            const parentCard = collapse.closest('.company-card');
            parentCard.classList.add('expanded');
        });

        collapse.addEventListener('hide.mdb.collapse', () => {
            const parentCard = collapse.closest('.company-card');
            parentCard.classList.remove('expanded');
        });
    });
</script>