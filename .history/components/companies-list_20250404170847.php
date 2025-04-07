<?php
?>
<style>
    .company-card img.thumb {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 8px;
    }

    .company-card .collapse img.full {
        width: 100%;
        border-radius: 10px;
        margin-top: 10px;
    }

    .company-card {
        transition: box-shadow 0.3s ease;
        overflow: hidden;
    }

    .company-card:hover {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .company-card.expanded {
        min-height: 50vh;
    }

    .card-header {
        cursor: pointer;
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