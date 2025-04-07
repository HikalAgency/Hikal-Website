<?php
?>
<style>
    .card-container {
        display: flex;
        flex-direction: column;
        gap: 0px;
    }

    .expand-card {
        height: 20vh;
        transition: height 0.5s ease;
        background-size: cover;
        background-position: center;
        cursor: pointer;
        border-radius: 0px;
        overflow: hidden;
        color: white;
        position: relative;
        display: flex;
        align-items: flex-end;
        padding: 15px;
    }

    .expand-card.active {
        height: 80vh;
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

<div class="card-container">
    <!-- PHP Loop -->
    <?php
    $cards = [
        [
            'title' => 'HIKAL REAL ESTATE', 
            'country' => 'U.A.E.',
            'flag' => 'ae',
            'desc' => 'Your trusted ally in luxury and investment real estate. From stunning apartments in Dubai Marina to high-end commercial spaces in Business Bay, we present to you high-value real estate. Safe, profitable, and tailored to your dreams your next investment starts with Hikal Real Estate.', 
            'image' => 'https://picsum.photos/id/1011/800/600'
        ],
        [
            'title' => '', 
            'country' => 'U.A.E.',
            'flag' => 'ae',
            'desc' => '', 
            'image' => 'https://picsum.photos/id/1012/800/600'
        ],
        [
            'title' => '', 
            'country' => 'U.A.E.',
            'flag' => 'ae',
            'desc' => '', 
            'image' => 'https://picsum.photos/id/1012/800/600'
        ],
        [
            'title' => '', 
            'country' => 'U.A.E.',
            'flag' => 'ae',
            'desc' => '', 
            'image' => 'https://picsum.photos/id/1012/800/600'
        ],
        [
            'title' => '', 
            'country' => 'U.A.E.',
            'flag' => 'ae',
            'desc' => '', 
            'image' => 'https://picsum.photos/id/1012/800/600'
        ],
        [
            'title' => '', 
            'country' => 'U.A.E.',
            'flag' => 'ae',
            'desc' => '', 
            'image' => 'https://picsum.photos/id/1012/800/600'
        ],
    ];
    foreach ($cards as $index => $card) {
        ?>
        <div class="expand-card" style="background-image: url('<?php echo $card['image']; ?>');"
            data-index="<?php echo $index; ?>">
            <div class="content">
                <h4><?php echo $card['title']; ?></h4>
                <p><?php echo $card['desc']; ?></p>
            </div>
        </div>
    <?php } ?>

</div>

<script>
    const cards = document.querySelectorAll('.expand-card');
    let activeIndex = null;

    cards.forEach((card, index) => {
        card.addEventListener('click', () => {
            // If the clicked card is already active, collapse it
            if (activeIndex === index) {
                card.classList.remove('active');
                activeIndex = null;
            } else {
                // Collapse any open card
                cards.forEach(c => c.classList.remove('active'));
                // Expand clicked card
                card.classList.add('active');
                activeIndex = index;
            }
        });
    });
</script>