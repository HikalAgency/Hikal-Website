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
?>

<div class="companies-section-wrapper">
    <div class="flow-container">
        <div class="panel">
            <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center">
                <h3 class="gold-grad-anim mb-2">Our Companies</h3>
                <h6 class="text-white">INNOVATING ACROSS DIVERSE INDUSTRIES</h6>
                <div class="divider"></div>
            </div>
        </div>
        <?php
        foreach ($cards as $index => $card) {
            ?>
            <section class="panel" style="--card-image: url('<?php echo $card['image']; ?>');"
                data-index="<?php echo $index; ?>">
                <div
                    class="d-flex flex-column h-100 position-relative align-items-end justify-content-between gap-2 py-4 w-full text-start text-white container-fluid">
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
            </section>
            <?php
        }
        ?>
    </div>
</div>

<style>
    /* Reset for this component */
    .companies-section-wrapper {
        position: relative;
        overflow: visible;
        width: 100%;
    }

    /* Container styles */
    .flow-container {
        width: 700%;
        height: 100vh;
        display: flex;
        flex-wrap: nowrap;
    }

    .panel {
        width: 100vw;
        height: 100vh;
        /* display: flex;
        justify-content: center;
        align-items: center; */
        color: white;
        background-image:
            linear-gradient(180deg, rgba(38, 38, 38, 0.9) 0%, transparent 50%, rgba(0, 0, 0, 0.9) 100%),
            var(--card-image);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .company-header {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
</style>

<script>
    // Wait for page load
    document.addEventListener('DOMContentLoaded', function () {
        // Make sure GSAP and ScrollTrigger are properly loaded
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            // Safety timeout to ensure everything is rendered
            setTimeout(function () {
                initHorizontalScroll();
            }, 500);
        } else {
            console.error('GSAP or ScrollTrigger not loaded!');
        }
    });

    function initHorizontalScroll() {
        // Register ScrollTrigger plugin
        gsap.registerPlugin(ScrollTrigger);

        // Get all panels
        let sections = gsap.utils.toArray(".companies-section-wrapper .panel");

        // Clear any existing ScrollTriggers that might interfere
        ScrollTrigger.getAll().forEach(st => {
            if (st.vars.trigger === ".flow-container") {
                st.kill();
            }
        });

        // Create the horizontal scroll animation
        gsap.to(sections, {
            xPercent: -100 * (sections.length - 1),
            ease: "none",
            scrollTrigger: {
                trigger: ".flow-container",
                start: "top top",
                pin: true,
                scrub: 1,
                snap: 1 / (sections.length - 1),
                end: () => "+=" + document.querySelector(".flow-container").offsetWidth,
                onUpdate: self => {
                    console.log("ScrollTrigger progress:", self.progress.toFixed(3));
                },
                onEnter: () => console.log("ScrollTrigger entered"),
                onLeave: () => console.log("ScrollTrigger left"),
                markers: true // Remove in production
            }
        });

        console.log("Horizontal scroll initialized");
    }
</script>