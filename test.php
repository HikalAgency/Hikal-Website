<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Horizontal Scroll Test</title>

    <!-- GSAP and ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/ScrollTrigger.min.js"></script>

    <style>
        html {
            overflow-y: scroll;
            height: 100%;
            -webkit-overflow-scrolling: touch;
            overflow-scrolling: touch;
        }

        body {
            overflow-y: visible;
            position: relative;
            height: unset;
        }

        html,
        body {
            width: 100vw;
            overflow-x: hidden;
            margin: 0;
        }

        .flow-container {
            width: 400%;
            height: 100vh;
            display: flex;
            flex-wrap: nowrap;
        }

        .panel {
            width: 100vw;
        }

        .firstContainer {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: yellow;
        }

        .lastContainer {
            display: flex;
            height: 100vh;
            background: yellow;
        }

        .blue {
            background-color: blue;
        }
        
        .red {
            background-color: red;
        }
        
        .purple {
            background-color: purple;
        }
        
        .orange {
            background-color: orange;
        }
    </style>
</head>

<body>
    <div class="firstContainer">
        <h1>Testing horizontal scrolling w/ three sections</h1>
        <h2>First Container</h2>
    </div>
    <div class="flow-container">
        <div class="description panel blue">
            <div>
                SCROLL DOWN
                <div class="scroll-down">
                    <div class="arrow"></div>
                </div>
            </div>
        </div>

        <section class="panel red">
            ONE
        </section>
        <section class="panel orange">
            TWO
        </section>
        <section class="panel purple">
            THREE
        </section>
    </div>
    <div class="lastContainer">
        Last Container
    </div>

    <script>
        gsap.registerPlugin(ScrollTrigger);

        let sections = gsap.utils.toArray(".panel");

        gsap.to(sections, {
            xPercent: -100 * (sections.length - 1),
            ease: "none",
            scrollTrigger: {
                trigger: ".flow-container",
                pin: true,
                scrub: 1,
                snap: 1 / (sections.length - 1),
                end: () => "+=" + document.querySelector(".flow-container").offsetWidth
            }
        });


    </script>
</body>

</html>