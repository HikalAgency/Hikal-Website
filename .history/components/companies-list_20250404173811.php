<?php
?>
<style>
    .expand-card {
        width: 100%;
        height: 20vh;
        background-size: cover;
        background-position: center;
        overflow: hidden;
        transition: height 0.4s ease;
        cursor: pointer;
        position: relative;
    }

    .expand-card .collapsed-content {
        display: flex;
        padding: 20px;
        color: white;
    }

    .expand-card .expanded-content {
        display: none;
        padding: 20px;
        height: 100%;
        min-height: 80vh;
    }

    .expand-card.active {
        height: 80vh;
    }

    .expand-card.active .collapsed-content {
        display: none;
    }

    .expand-card.active .expanded-content {
        display: flex;
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
            'title' => 'HIKAL TECH',
            'country' => 'U.A.E.',
            'flag' => 'ae',
            'desc' => 'Empowering businesses with smart tech solutions. With AI-driven real estate CRMs, seamless mobile apps, and e-commerce platforms, Hikal Tech designs future-ready digital experiences. From automation, analytics, to a customized platform, we innovate to stay ahead of change.',
            'image' => 'https://picsum.photos/id/1012/800/600'
        ],
        [
            'title' => 'HIKAL PRIVATE LIMITED',
            'country' => 'Pakistan',
            'flag' => 'pk',
            'desc' => 'Transforming enterprises with groundbreaking digital solutions. Hikal Private Limited specializes in mobile applications, real estate CRMs, and web solutions, creating comprehensive digital experiences to enhance efficiency. Our solution specializations bring concepts to reality by creating functional platforms that drive business growth in a rapidly competitive digital age',
            'image' => 'https://picsum.photos/id/1012/800/600'
        ],
        [
            'title' => 'HIKAL AERIAL PHOTOGRAPHY',
            'country' => 'U.A.E.',
            'flag' => 'ae',
            'desc' => 'See the world from a different perspective. Hikal Aerial Photography captures breathtaking drone photography for real estate, construction, and events. From cinematic property tours to precise land mapping, our innovative drone services bring clarity, impact, and creativity to any project.',
            'image' => 'https://picsum.photos/id/1012/800/600'
        ],
        [
            'title' => 'MARAHEB CLEANING SERVICES',
            'country' => 'U.A.E.',
            'flag' => 'ae',
            'desc' => 'Spick and span rooms, hassle-free service. Maraheb Cleaning Services offers best-in-class villa, office, and industrial cleaning with eco-friendly solutions. Ranging from sparkling villa cleans to office sanitization, our team of experts assures spick and span rooms to ensure health, hygiene, and a fresh new feel for any space.',
            'image' => 'https://picsum.photos/id/1012/800/600'
        ],
        [
            'title' => 'HIKAL MARKETING AGENCY',
            'country' => 'Egypt',
            'flag' => 'ae',
            'desc' => 'Turning brands into dynamos. Hikal Marketing Agency unites strategy, imagination, and intuition to craft brand influence, activate engagement, and boost conversions. From social media viral promos to interactive video content, we develop marketing solutions that capture attention and drive business growth.',
            'image' => 'https://picsum.photos/id/1012/800/600'
        ],
        // [
        //     'title' => '', 
        //     'country' => 'U.A.E.',
        //     'flag' => 'ae',
        //     'desc' => '', 
        //     'image' => 'https://picsum.photos/id/1012/800/600'
        // ],
    ];
    foreach ($cards as $index => $card) {
        ?>
        <div class="expand-card" style="background-image: url('<?php echo $card['image']; ?>');"
            data-index="<?php echo $index; ?>">

            <!-- Collapsed content (title only) -->
            <div class="collapsed-content align-items-center justify-content-start gap-2 text-start text-white">
                <!-- <div class="d-flex align-items-center justify-content-start gap-2 text-start text-white"> -->
                    <h4 class="text-white"><?php echo $card['title']; ?></h4>
                    <span>|</span>
                    <h4 class="text-white"><?php echo $card['country']; ?></h4>
                <!-- </div> -->
            </div>

            <!-- Expanded content (title + desc or anything you want) -->
            <div class="expanded-content">
                <h4><?php echo $card['title']; ?></h4>
                <p><?php echo $card['desc']; ?></p>
                <!-- Add more content here if needed -->
            </div>
        </div>

    <?php } ?>

</div>

<script>
    // const cards = document.querySelectorAll('.expand-card');
    // let activeIndex = null;

    // cards.forEach((card, index) => {
    //     card.addEventListener('click', () => {
    //         // If the clicked card is already active, collapse it
    //         if (activeIndex === index) {
    //             card.classList.remove('active');
    //             activeIndex = null;
    //         } else {
    //             // Collapse any open card
    //             cards.forEach(c => c.classList.remove('active'));
    //             // Expand clicked card
    //             card.classList.add('active');
    //             activeIndex = index;
    //         }
    //     });
    // });

    const cards = document.querySelectorAll('.expand-card');
    let activeIndex = null;

    cards.forEach((card, index) => {
        card.addEventListener('click', () => {
            if (activeIndex === index) {
                card.classList.remove('active');
                activeIndex = null;
            } else {
                cards.forEach(c => c.classList.remove('active'));
                card.classList.add('active');
                activeIndex = index;
            }
        });
    });
</script>