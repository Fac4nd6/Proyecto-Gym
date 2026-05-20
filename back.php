<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

require 'header.php';

?>

<main>

    <!-- HERO -->
    <section class="hero-chest">

        <div class="hero-chest-content ">
            <h2>Back Day.</h2>
            <p>The back is the posterior upper body region responsible for posture, pulling strength, and spinal support.</p>
        </div>

    </section>

    <!-- Upper Back and Trapezius Muscles -->

    <section class="section-hero upper">

        <div class="hero-chest-content ">
            <h2>Upper Back and Trapezius Muscles</h2>
            <p>The upper back and trapezius muscles are located across the upper posterior torso and neck region, supporting posture, shoulder movement, and upper body stability during pulling and lifting exercises.</p>
        </div>

    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Barbell-Shrug"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Barbell Shrug
                </h2>

                <p>Build upper trap strength with controlled shoulder elevation movement. <br><br> 🏋️ Barbell <br> 🔥 Trap Focus <br> 🎯 Upper Back Activation</p>

            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Seated-Cable-Row"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Seated Cable Row
                </h2>

                <p>Strengthen the upper back with controlled horizontal pulling movement. <br><br> 🏋️ Cable Machine <br> 🔥 Back Development <br> 🎯 Posture Support</p>


            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif T-Bar-Row"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    T-Bar Row
                </h2>

                <p>Develop upper back thickness through powerful rowing movement. <br><br> 🏋️ Barbell <br> 🔥 Compound Movement <br> 🎯 Back Thickness</p>


            </div>
        </div>

    </section>


    <section></section>


    <!-- Dorsal Width -->

    <section class="section-hero middle">

        <div class="hero-chest-content ">
            <h2>Dorsal Width</h2>
            <p>The dorsal width refers to the outer portion of the latissimus dorsi muscles, responsible for creating a wider and more V-shaped back appearance through pulling and rowing movements.</p>
        </div>

    </section>


    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Lat-Pulldown"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Lat Pulldown
                </h2>

                <p>Increase back width with controlled vertical pulling movement. <br><br> 🏋️ Cable Machine <br> 🔥 Lat Focus <br> 🎯 Wide Back Development</p>


            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Pull-Up"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Pull-Up
                </h2>

                <p>Build upper body strength and dorsal width using bodyweight resistance. <br><br> 🏋️ Bodyweight <br> 🔥 Compound Movement <br> 🎯 Upper Back Strength </p>


            </div>
        </div>



    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Straight-Arm-Pulldown"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Straight Arm Pulldown
                </h2>

                <p>Target the lats with constant tension and controlled arm movement. <br><br> 🏋️ Cable Machine <br> 🔥 Isolation Exercise <br> 🎯 Lat Activation </p>


            </div>
        </div>

    </section>

    <!-- Lumbar region and spinal erectors -->

    <section class="section-hero lower">

        <div class="hero-chest-content ">
            <h2>Lumbar region and spinal erectors</h2>
            <p>The lumbar region and spinal erectors are located in the lower back alongside the spine, supporting posture, spinal stability, and hip extension during lifting and bending movements.</p>
        </div>

    </section>


    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Back-Extension"></div>
        </div>

        <div class="hero-right">

            <div class="content-right ">
                <h2>
                    Back Extension
                </h2>

                <p>Strengthen the lower back and improve spinal stability. <br><br> 🏋️ Bodyweight <br> 🔥 Lower Back Focus <br> 🎯 Posture Control</p>


            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Deadlift"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Deadlift
                </h2>

                <p>Build full posterior chain strength with hip hinge movement. <br><br> 🏋️ Barbell <br>🔥 Compound Movement <br> 🎯 Full Body Power</p>

            </div>
        </div>



    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif good-morning"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    good morning
                </h2>

                <p>Target the spinal erectors and hamstrings with controlled hip flexion. <br><br> 🏋️ Barbell <br> 🔥 Posterior Chain <br> 🎯 Core Stability </p>


            </div>
        </div>

    </section>

</main>

<?php

require "footer.php";

?>