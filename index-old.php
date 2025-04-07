<?php
error_reporting(1);
include ("data/companies.php");
include ("data/services.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hikal Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP 5.3.3 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- FONT AWESOME 6.5.2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FONT FAMILY -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@300;400;500&family=Noto+Sans+Devanagari:wght@300;400;500&family=Noto+Sans+Hebrew:wght@300;400;500&family=Noto+Sans+TC:wght@300;400;500&family=Noto+Sans:wght@300;400;500&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:wght@300&display=swap"
        rel="stylesheet">

    <!-- THREE JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/89/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- ICON -->
    <link rel="icon" type="image/png" href="assets/images/logo/icon.png" />

    <style>
        .map-bg {
            background-image: url(assets/images/graphics/mapwithpin.png);
        }
    </style>
</head>

<body>
    <?php
    $page = "home";
    include_once ('header.php')
        ?>

    <div class="home">
        <!-- TITLE -->
        <div class="home-title font-700 gold-grad-anim">
            HIKAL GROUP
        </div>
        <!-- BACKGROUND MAP -->
        <div class="map-bg"></div>
        <!-- BOTTOM BACKGROUND -->
        <div class="color-bg"></div>
        <!-- MONUMENTS -->
        <!-- <img class="burjkhalifa" src="assets/images/graphics/6-burjkhalifa.png" alt="Hikal Group">
            <img class="mosque" src="assets/images/graphics/8-mosque.png" alt="Hikal Group">
            <img class="pyramid" src="assets/images/graphics/pyramid.png" alt="Hikal Group"> -->
        <img class="monument" src="assets/images/graphics/monument.png" alt="Hikal Group">
    </div>
    <div class="bg-black pb-5" style="margin-top: -10px;">
        <div class="container container-fluid text-center">
            <h3 class="text-white">
                Redefining Excellence Across Borders
            </h3>
            <div class="primary-border"></div>
            <p class="text-white">
                Welcome to Hikal Group, where innovation meets integrity to deliver exceptional services across the
                Middle East and beyond. Our diversified portfolio spans real estate, marketing management, and
                technology solutions, each division driven by a commitment to excellence and client satisfaction.
            </p>
        </div>
    </div>
    <!-- COMPANIES  -->
    <div id="companies" class="container container-fluid text-center py-5" style="z-index: -1;">
        <h2 class="gold-grad-anim">Our Companies</h2>
        <h6 class="text-white">INNOVATING ACROSS DIVERSE INDUSTRIES</h6>
        <div class="primary-border"></div>
        <div class="text-center py-5 mb-5" style="display: grid; place-items: center; min-height: 90vh; z-index: -1;">
            <?php include_once ("components/companies-list.php"); ?>
        </div>
    </div>

    <!-- SERVICES -->
    <div id="services" class="bg-black py-5">
        <div class="container container-fluid my-5 text-center">
            <h2 class="gold-grad-anim">Our Services</h2>
            <h6>COMPREHENSIVE SOLUTIONS FOR EVERY NEED</h6>
            <div class="mb-5"></div>
            <?php include_once ("components/services-list.php"); ?>
            <div id="sub-services">
            </div>
        </div>
    </div>

    <!-- ABOUT -->
    <div id="about" class="container container-fluid my-5 text-center">
        <h2 class="gold-grad-anim">About Us</h2>
        <h6>INNOVATING ACROSS DIVERSE INDUSTRIES</h6>
        <div class="primary-border"></div>
        <p>
            Welcome to Hikal Group, where we are dedicated to redefining excellence across a broad spectrum of
            industries. From real estate consultation and marketing strategies to custom software development and
            professional cleaning services, we provide comprehensive solutions tailored to your needs. Our commitment to
            innovation, quality, and customer satisfaction sets us apart, driving us to deliver exceptional results in
            every project we undertake.
        </p>
        <p>
            At Hikal Group, we believe in the power of collaboration and the importance of adapting to the ever-changing
            market landscape. Our team of experts brings a wealth of experience and a passion for excellence, ensuring
            that we consistently exceed our clients' expectations.
        </p>
        <p>
            Join us on our journey as we continue to innovate and excel across diverse industries, making a lasting
            impact on the communities we serve.
        </p>
    </div>

    <!-- <div class="three-marble">
        <div data-stage>
        </div>
    </div> -->

    <!-- CONTACT -->
    <div class=" py-5">
        <div id="contact" class="container container-fluid my-5 text-center">
            <h2 class="gold-grad-anim">Contact Us</h2>
            <h6>YOUR CONNECTION TO EXCELLENCE</h6>
            <div class="primary-border"></div>
            <p class="mb-5">
                We’d love to hear from you! Whether you have questions, need more information about our services, or
                want to discuss a potential project, our team is here to help.
            </p>
            <div class="p-4 text-start mb-5">
                <h6 class="text-center">GET IN TOUCH</h6>
                <div class="primary-border"></div>
                <div class="d-flex flex-column gap-2 gap-md-5 flex-md-row align-items-center justify-content-center">
                    <a href="mailto:info@hikalgroup.ae" class="text-white">
                        <i class="fa-solid fa-envelope gold-grad"></i>
                        <span class="mx-2">info@hikalgroup.ae</span>
                    </a>
                    <a href="tel:+97142722249" class="text-white">
                        <i class="fa-solid fa-phone gold-grad"></i>
                        <span class="mx-2">+971 4 272 2249</span>
                    </a>
                </div>
            </div>
            <h6 class="text-center">VISIT US</h6>
            <div class="primary-border"></div>
            <div class="row">
                <div class="col-12 col-md-4 p-2 px-5 px-md-2">
                    <div class="contact-card p-4 ">
                        <p class="gold-grad">UNITED ARAB EMIRATES</p>
                        <p>API World Tower, 2704, Sheikh Zayed Road, Dubai, UAE</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 p-2 px-5 px-md-2">
                    <div class="contact-card p-4">
                        <p class="gold-grad">EGYPT</p>
                        <p>Skies Plaza Mall, 51, 90th Street, 5th Settlement, New Cairo, Egypt</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 p-2 px-5 px-md-2">
                    <div class="contact-card p-4">
                        <p class="gold-grad">PAKISTAN</p>
                        <p>Islamabad, Pakistan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once ('footer.php') ?>


    <!-- BACKGROUND MAP  -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let mapbg = 0;
            const speed = 0.5;
            const mapBgElement = document.querySelector('.map-bg');

            function animateBackground() {
                mapbg -= speed;
                mapBgElement.style.backgroundPosition = `${mapbg}px 0px`;
                requestAnimationFrame(animateBackground);
            }

            animateBackground();
        });
    </script>

    <!-- SERVICES -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const isMobile = window.innerWidth <= 750;
            const dotCircle = document.querySelector('.dotCircle');
            const itemDots = document.querySelectorAll('.itemDot');
            const contentCircles = document.querySelectorAll('.CirItem');
            const subServicesContainer = document.getElementById('sub-services');
            let activeTab = 2;

            const services = <?php echo json_encode($services); ?>;

            const updateSubServices = (index) => {
                const service = services[index];
                if (!service.subservices || service.subservices.length === 0) {
                    subServicesContainer.innerHTML = '';
                    return;
                }

                let subServicesHtml = `
                        <div class="mt-4">
                            <div class="row d-flex justify-content-center">`;

                service.subservices.forEach(subservice => {
                    subServicesHtml += `
                        <div class="col-12 col-md-4 p-2">
                            <div class="p-4 text-center" style="border-radius: 20px; box-shadow: 5px 5px 10px #333333, -5px -5px 10px #555555;">
                                <p class="gold-grad" style="text-transform: uppercase;">${subservice.title}</p>
                                <p class="m-0" style="font-size: small;">${subservice.subtitle}</p>
                            </div>
                        </div>`;
                });

                subServicesHtml += `
                        </div>
                    </div>`;

                subServicesContainer.innerHTML = subServicesHtml;
            };

            const handleTabClick = (index) => {
                activeTab = index;
                itemDots.forEach((item) => item.classList.remove('active'));
                document.querySelector(`.itemDot${index}`).classList.add('active');
                contentCircles.forEach((item) => item.classList.remove('active'));
                document.querySelector(`.CirItem${index}`).classList.add('active');

                dotCircle.style.transform = `rotate(${360 - (index * 36)}deg)`;
                dotCircle.style.transition = '2s';

                itemDots.forEach((item) => {
                    item.style.transform = `rotate(${index * 36}deg)`;
                    item.style.transition = '1s';
                });

                updateSubServices(index);
            };

            itemDots.forEach((item, index) => {
                item.addEventListener('click', () => handleTabClick(index));
            });

            const radius = isMobile ? 150 : 200;
            const step = (2 * Math.PI) / itemDots.length;

            itemDots.forEach((item, index) => {
                const angle = index * step;
                const x = Math.round(radius + radius * Math.cos(angle) - item.clientWidth / 2);
                const y = Math.round(radius + radius * Math.sin(angle) - item.clientHeight / 2);
                item.style.left = `${x}px`;
                item.style.top = `${y}px`;
            });

            setInterval(() => {
                activeTab = activeTab === itemDots.length - 1 ? 0 : activeTab + 1;
                handleTabClick(activeTab);
            }, 5000);

            // Initial call to display the sub-services for the active tab
            updateSubServices(activeTab);
        });

    </script>

    <!-- THREE -->
    <!-- <script>
        console.clear();
        class App {
            constructor(opts) {
                this.opts = Object.assign({}, App.defaultOpts, opts);
                this.world = new World();
                this.init();
            }
            init() {
                this.threeEnvironment();
                window.requestAnimationFrame(this.animate.bind(this));
            }
            threeEnvironment() {
                const light = new Light();
                this.world.sceneAdd(light.ambient);
                this.world.sceneAdd(light.sun);
                const lights = lightBalls(this.world, light.lights);
                const composition = new Composition({
                    sideLength: 10,
                    amount: 15,
                    radius: 6,
                    thickness: 2,
                    offset: 0.3
                });

                this.world.sceneAdd(composition.tubes);
            }
            animate() {
                this.world.renderer.render(this.world.scene, this.world.camera);
                window.requestAnimationFrame(this.animate.bind(this));
            }
        }


        App.defaultOpts = {
            debug: false
        };

        function lightBalls(world, meshes) {
            const radius = 12.4;
            const mainTl = new TimelineMax();
            meshes.forEach(function (group) {
                world.sceneAdd(group);
                createAnimation(group);
            });
            function createAnimation(group) {
                const tl = new TimelineMax({
                    yoyo: true
                });

                tl.
                    set(group.position, {
                        x: THREE.Math.randInt(-2, 2) * radius + radius * 0.5,
                        z: THREE.Math.randInt(-2, 2) * radius + radius * 0.5
                    }).

                    to(group.position, 2, {
                        y: 18,
                        ease: Linear.easeNone
                    }).

                    to(
                        group.children[0],
                        1.2,
                        {
                            intensity: 4.0,
                            distance: 18,
                            ease: Linear.easeNone
                        },

                        "-=1.2");

                tl.paused(true);
                mainTl.to(
                    tl,
                    1.2,
                    {
                        progress: 1,
                        ease: SlowMo.ease.config(0.0, 0.1, true),
                        onComplete: createAnimation,
                        onCompleteParams: [group],
                        delay: THREE.Math.randFloat(0, 0.8)
                    },

                    mainTl.time());

            }
        }
        class Light {
            constructor() {
                this.lights = [];
                this.ambient = null;
                this.sun = null;
                this.createLights();
                this.createAmbient();
                this.createSun();
            }
            createLights() {
                for (let i = 0; i < 3; i++) {
                    const group = new THREE.Group();
                    const light = new THREE.PointLight(0xc2b080);
                    light.intensity = 4.0;
                    light.distance = 6;
                    light.decay = 1.0;
                    group.add(light);
                    const geometry = new THREE.SphereBufferGeometry(2, 16, 16);
                    const material = new THREE.MeshBasicMaterial({
                        color: 0xc2b080
                    });

                    const mesh = new THREE.Mesh(geometry, material);
                    group.add(mesh);
                    group.position.set(0, -5, 0);
                    this.lights.push(group);
                }
            }
            createAmbient() {
                this.ambient = new THREE.AmbientLight(0xffffff, 0.03);
            }
            createSun() {
                this.sun = new THREE.SpotLight(0xffffff); // 0.1
                this.sun.intensity = 0.4;
                this.sun.distance = 100;
                this.sun.angle = Math.PI;
                this.sun.penumbra = 2.0;
                this.sun.decay = 1.0;
                this.sun.position.set(0, 50, 0);
            }
        }

        class World {
            constructor(opts) {
                this.opts = Object.assign({}, World.defaultOpts, opts);
                this.init();
            }
            init() {
                this.initScene();
                this.initCamera();
                this.initRenderer();
                this.addRenderer();
                window.addEventListener("resize", this.resizeHandler.bind(this));
            }
            initScene() {
                this.scene = new THREE.Scene();
            }
            initCamera() {
                this.camera = new THREE.PerspectiveCamera(
                    this.opts.camFov,
                    window.innerWidth / window.innerHeight,
                    this.opts.camNear,
                    this.opts.camFar);

                this.camera.position.set(
                    this.opts.camPosition.x,
                    this.opts.camPosition.y,
                    this.opts.camPosition.z);

                this.camera.lookAt(this.scene.position);
                this.scene.add(this.camera);
            }
            initRenderer() {
                this.renderer = new THREE.WebGLRenderer({
                    alpha: true,
                    antialias: true,
                    logarithmicDepthBuffer: true
                });

                this.renderer.setSize(window.innerWidth, window.innerHeight);

                this.renderer.shadowMap.enabled = true;
                this.renderer.shadowMap.type = THREE.PCFSoftShadowMap;
            }
            addRenderer() {
                this.opts.container.appendChild(this.renderer.domElement);
            }
            resizeHandler() {
                this.renderer.setSize(window.innerWidth, window.innerHeight);
                this.camera.aspect = window.innerWidth / window.innerHeight;
                this.camera.updateProjectionMatrix();
            }
            sceneAdd(obj) {
                this.scene.add(obj);
            }
        }

        World.defaultOpts = {
            container: document.body,
            camPosition: new THREE.Vector3(150, 200, 400),
            camFov: 6,
            camNear: 0.1,
            camFar: 800
        };

        class Composition {
            constructor(opts) {
                this.opts = Object.assign({}, Composition.defaultOpts, opts);
                this.tube = Tube({
                    amount: this.opts.amount,
                    radius: this.opts.radius,
                    thickness: this.opts.thickness
                });

                this.tubes = this.createTubes();
            }
            createRow() {
                const radius = this.opts.radius + this.opts.offset;
                const geometry = new THREE.Geometry();
                for (let i = 0; i < this.opts.sideLength; i++) {
                    const t = this.tube.clone();
                    t.translate(i * radius * 2, 0, 0);
                    geometry.merge(t);
                }
                return geometry;
            }
            createTubes() {
                const row = this.createRow();
                const radius = this.opts.radius + this.opts.offset;
                const geometry = new THREE.Geometry();

                for (let i = 0; i < this.opts.sideLength; i++) {
                    const r = row.clone();
                    r.translate(0, 0, i * radius * 2);
                    geometry.merge(r);
                }
                geometry.center();
                const bufferGeometry = new THREE.BufferGeometry().fromGeometry(geometry);
                const materials = [
                    new THREE.MeshStandardMaterial({
                        color: 0x333333,
                        roughness: 1.0,
                        metalness: 0.0,
                        emissive: 0x000000,
                        flatShading: true,
                        side: THREE.DoubleSide
                    }),

                    new THREE.MeshStandardMaterial({
                        color: 0x333333,
                        roughness: 0.6,
                        metalness: 0.0,
                        emissive: 0x000000,
                        flatShading: true,
                        side: THREE.DoubleSide
                    })];


                const mesh = new THREE.Mesh(bufferGeometry, materials);
                return mesh;
            }
        }

        Composition.defaultOpts = {
            sideLength: 10,
            amount: 15,
            radius: 6,
            thickness: 2,
            offset: 0.3
        };

        function createShape({ innerRadius = 4, outerRadius = 6, fineness = 30 }) {
            const outer = getPath(outerRadius, fineness, false);
            const baseShape = new THREE.Shape(outer);
            const inner = getPath(innerRadius, fineness, true);
            const baseHole = new THREE.Path(inner);
            baseShape.holes.push(baseHole);
            return baseShape;
        }
        const getPath = (radius, fineness, reverse) => {
            const c = radius * 0.55191502449;
            const path = new THREE.CurvePath();
            path.curves = [
                new THREE.CubicBezierCurve(
                    new THREE.Vector2(0, radius),
                    new THREE.Vector2(c, radius),
                    new THREE.Vector2(radius, c),
                    new THREE.Vector2(radius, 0)),

                new THREE.CubicBezierCurve(
                    new THREE.Vector2(radius, 0),
                    new THREE.Vector2(radius, -c),
                    new THREE.Vector2(c, -radius),
                    new THREE.Vector2(0, -radius)),

                new THREE.CubicBezierCurve(
                    new THREE.Vector2(0, -radius),
                    new THREE.Vector2(-c, -radius),
                    new THREE.Vector2(-radius, -c),
                    new THREE.Vector2(-radius, 0)),

                new THREE.CubicBezierCurve(
                    new THREE.Vector2(-radius, 0),
                    new THREE.Vector2(-radius, c),
                    new THREE.Vector2(-c, radius),
                    new THREE.Vector2(0, radius))];


            const points = path.getPoints(fineness);
            if (reverse) points.reverse();
            return points;
        };
        function Tube({ amount = 4, radius = 6, thickness = 2 }) {
            const shape = createShape({
                innerRadius: radius - thickness,
                outerRadius: radius,
                fineness: 14
            });

            const props = {
                amount: amount,
                bevelEnabled: true,
                bevelThickness: 0.3,
                bevelSize: 0.2,
                bevelSegments: 1
            };

            const geometry = new THREE.ExtrudeGeometry(shape, props);
            geometry.center();
            geometry.computeVertexNormals();
            for (var i = 0; i < geometry.faces.length; i++) {
                var face = geometry.faces[i];
                if (face.materialIndex == 1) {
                    for (var j = 0; j < face.vertexNormals.length; j++) {
                        face.vertexNormals[j].z = 0;
                        face.vertexNormals[j].normalize();
                    }
                }
            }
            geometry.rotateX(Math.PI * 0.5);
            geometry.rotateZ(Math.PI);
            return geometry;
        }
        const app = new App();
    </script> -->
</body>

</html>
<?php
?>