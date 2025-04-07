<?php
?>
<style>
    .card-container {
        width: 100%;
    }

    .expand-card {
        width: 100%;
        height: 20vh;
        background-image: var(--card-image);
        background-size: cover;
        background-position: center;
        overflow: hidden;
        transition: height 0.4s ease;
        cursor: pointer;
        position: relative;
    }

    .expand-card .collapsed-content {
        display: flex;
        color: white;
        width: 100%;
        height: 100%;
    }

    .expand-card .expanded-content {
        display: none;
        height: 100%;
        min-height: 90vh;
        width: 100%;
        position: relative;
    }

    .expand-card.active {
        height: 90vh;
        background-image:
            linear-gradient(180deg, rgba(217, 217, 217, 0) 0%, #000000 100%),
            var(--card-image);
    }

    .expand-card.active .collapsed-content {
        display: none;
    }

    .expand-card.active .expanded-content {
        display: flex;
    }

    .expand-card .company-header {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        padding: 1rem;
        text-align: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1;
    }

    .expand-card.active .company-header {
        opacity: 1;
    }

    @media screen and (max-width: 750px) {
        .expand-card {
            background-image:
                linear-gradient(180deg, rgba(217, 217, 217, 0) 0%, rgba(0, 0, 0, 0.3) 100%),
                var(--card-image);
            height: 15vh;
        }

        .expand-card .expanded-content {
            min-height: 60vh;
        }

        .expand-card.active {
            height: 60vh;
        }
    }
</style>

<div class="card-container">
    <!-- PHP Loop -->
    <?php
    $cards = [
        [
            'title' => 'HIKAL REAL ESTATE',
            'country' => 'U.A.E.',
            'flag' => 'assets/images/graphics/flags/uae-flag.png',
            'desc' => 'Your trusted ally in luxury and investment real estate. From stunning apartments in Dubai Marina to high-end commercial spaces in Business Bay, we present to you high-value real estate. Safe, profitable, and tailored to your dreams your next investment starts with Hikal Real Estate.',
            'image' => 'assets/images/background/hre.png'
        ],
        [
            'title' => 'HIKAL TECH',
            'country' => 'U.A.E.',
            'flag' => 'assets/images/graphics/flags/uae-flag.png',
            'desc' => 'Empowering businesses with smart tech solutions. With AI-driven real estate CRMs, seamless mobile apps, and e-commerce platforms, Hikal Tech designs future-ready digital experiences. From automation, analytics, to a customized platform, we innovate to stay ahead of change.',
            'image' => 'assets/images/background/ht.png'
        ],
        [
            'title' => 'HIKAL PRIVATE LIMITED',
            'country' => 'PAKISTAN',
            'flag' => 'assets/images/graphics/flags/pakistan-flag.png',
            'desc' => 'Transforming enterprises with groundbreaking digital solutions. Hikal Private Limited specializes in mobile applications, real estate CRMs, and web solutions, creating comprehensive digital experiences to enhance efficiency. Our solution specializations bring concepts to reality by creating functional platforms that drive business growth in a rapidly competitive digital age',
            'image' => 'assets/images/background/hpl.png'
        ],
        [
            'title' => 'HIKAL AERIAL PHOTOGRAPHY',
            'country' => 'U.A.E.',
            'flag' => 'assets/images/graphics/flags/uae-flag.png',
            'desc' => 'See the world from a different perspective. Hikal Aerial Photography captures breathtaking drone photography for real estate, construction, and events. From cinematic property tours to precise land mapping, our innovative drone services bring clarity, impact, and creativity to any project.',
            'image' => 'assets/images/background/hap.png'
        ],
        [
            'title' => 'MARAHEB CLEANING SERVICES',
            'country' => 'U.A.E.',
            'flag' => 'assets/images/graphics/flags/uae-flag.png',
            'desc' => 'Spick and span rooms, hassle-free service. Maraheb Cleaning Services offers best-in-class villa, office, and industrial cleaning with eco-friendly solutions. Ranging from sparkling villa cleans to office sanitization, our team of experts assures spick and span rooms to ensure health, hygiene, and a fresh new feel for any space.',
            'image' => 'assets/images/background/mcs.png'
        ],
        [
            'title' => 'HIKAL MARKETING AGENCY',
            'country' => 'EGYPT',
            'flag' => 'assets/images/graphics/flags/egypt-flag.png',
            'desc' => 'Turning brands into dynamos. Hikal Marketing Agency unites strategy, imagination, and intuition to craft brand influence, activate engagement, and boost conversions. From social media viral promos to interactive video content, we develop marketing solutions that capture attention and drive business growth.',
            'image' => 'assets/images/background/hma.png'
        ],
    ];
    foreach ($cards as $index => $card) {
        ?>
        <div class="expand-card" style="--card-image: url('<?php echo $card['image']; ?>');"
            data-index="<?php echo $index; ?>">

            <div
                class="collapsed-content position-relative flex-column flex-md-row align-items-md-center justify-content-start gap-2 text-start text-white container-fluid">
                <h5 class="text-white"><?php echo $card['title']; ?></h5>
                <span class="d-none d-md-flex">|</span>
                <h5 class="text-white d-flex align-items-center gap-2">
                    <img src="<?php echo $card['flag']; ?>" alt="HIKAL" style="width: 25px" />
                    <?php echo $card['country']; ?>
                </h5>
                <div class="position-absolute top-0 end-0 h-100 d-flex align-items-center p-5">
                    <i class="fa-solid fa-plus text-white fs-xl"></i>
                </div>
            </div>

            <div
                class="expanded-content align-items-end justify-content-start gap-2 w-full text-start text-white container-fluid">
                <div class="company-header container-fluid">
                    <h3 class="gold-grad-anim mb-2">Our Companies</h3>
                    <h6 class="text-white">INNOVATING ACROSS DIVERSE INDUSTRIES</h6>
                    <div class="divider"></div>
                </div>
                <div class="row py-4">
                    <div class="col-12 col-md-6 p-2 d-flex flex-column gap-2">
                        <h4><?php echo $card['title']; ?></h4>
                        <div class="start-semi-divider"></div>
                        <h4 class="d-flex align-items-center gap-2">
                            <img src="<?php echo $card['flag']; ?>" alt="HIKAL" style="width: 25px" />
                            <?php echo $card['country']; ?>
                        </h4>
                    </div>
                    <div class="col-12 col-md-6 p-2">
                        <p><small><?php echo $card['desc']; ?></small></p>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>

</div>

<script>
    const cards = document.querySelectorAll('.expand-card');
    const scrollContainer = document.querySelector(".body-content");
    const mainHeader = document.querySelector(".companies-header"); // Main header in index.php
    let activeIndex = null;

    cards.forEach((card, index) => {
        card.addEventListener('click', () => {
            if (activeIndex === index) {
                // Collapsing
                card.classList.remove('active');
                activeIndex = null;
                mainHeader.style.display = "block"; // Show main header
            } else {
                // Expanding
                cards.forEach(c => c.classList.remove('active'));
                card.classList.add('active');
                activeIndex = index;
                mainHeader.style.display = "none"; // Hide main header

                setTimeout(() => {
                    card.scrollIntoView({ behavior: "smooth", block: "start" });
                }, 400);
            }
        });
    });
</script>