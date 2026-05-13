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
            <h2>Leg Day.</h2>
            <p>The legs are the lower limbs of the body located below the hips and are responsible for movement, balance, and support.</p>
        </div>

    </section>

    <!-- Upper chest -->

    <section class="section-hero upper">

        <div class="hero-chest-content ">
            <h2>Quadriceps</h2>
            <p>The quadriceps, often called the quads, are a group of muscles located at the front of the thigh, connecting the hip and femur to the kneecap and lower leg, helping with walking, running, and knee extension.</p>
        </div>

    </section>

    <section class="split">

        <div class="hero-left">
            <div class="gif Barbell-Squat"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Barbell Squat
                </h2>

                <p>Build lower body strength with a deep compound movement. <br><br> 🏋️ Barbell <br> 🔥 Compound Movement <br> 🎯 Quad Focus</p>

            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left">
            <div class="gif Leg-Extension"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Leg Extension
                </h2>

                <p>Isolate the quadriceps with controlled knee extension. <br><br> 🏋️ Machine <br> ⚡ Isolation Exercise <br> 🎯 Muscle Control</p>


            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left">
            <div class="gif Bulgarian-Split-Squat"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Bulgarian Split Squat
                </h2>

                <p>Improve quad strength and balance with unilateral training. <br><br> 🏋️ Dumbbells <br> 🔥 Single-Leg Movement <br> 🎯 Stability Focus</p>


            </div>
        </div>

    </section>


    <section></section>


    <!-- Middle Chest -->

    <section class="section-hero middle">

        <div class="hero-chest-content ">
            <h2>hamstrings/Femoral</h2>
            <p>The hamstrings, also known as the femoral muscles, are a group of muscles located at the back of the thigh, connecting the pelvis to the lower leg. Training this area focuses on strength, flexibility, and hypertrophy, helping improve leg power, stability, and overall athletic performance.</p>
        </div>

    </section>


    <section class="split">

        <div class="hero-left">
            <div class="gif Romanian-Deadlift"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Romanian Deadlift
                </h2>

                <p>Target the hamstrings and glutes with a hip hinge movement. <br><br> 🏋️ Barbell <br> 🔥 Posterior Chain <br> 🎯 Stretch Tension</p>


            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left">
            <div class="gif Lying-Leg-Curl"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Lying Leg Curl
                </h2>

                <p>Isolate the hamstrings through controlled leg flexion. <br><br> 🏋️ Machine <br>  🔥 Isolation Exercise <br> 🎯 Controlled Tempo </p>


            </div>
        </div>



    </section>

    <section class="split">

        <div class="hero-left">
            <div class="gif Nordic-Curl"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Nordic Curl
                </h2>

                <p>Develop advanced hamstring strength and control. <br><br> 🏋️ Bodyweight <br> 🔥 High Intensity <br> 🎯 Eccentric Control </p>


            </div>
        </div>

    </section>

    <!-- Glutes/calves -->

    <section class="section-hero lower">

        <div class="hero-chest-content ">
            <h2>Glutes/calves</h2>
            <p>The glutes and calves are important lower-body muscle groups responsible for movement, stability, and strength. The glutes are located in the buttocks and help with hip movement and posture, while the calves are located at the back of the lower legs and assist with walking, running, and jumping</p>
        </div>

    </section>


    <section class="split ">

        <div class="hero-left">
            <div class="gif Hip-Thrust"></div>
        </div>

        <div class="hero-right">

            <div class="content-right ">
                <h2>
                   Hip Thrust
                </h2>

                <p>Build glute strength and power through controlled hip extension. <br><br> 🏋️ Barbell <br>  🔥 Glute Focus <br>  🎯 Strong Contraction</p>


            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left">
            <div class="gif Step-Up"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                  Step-Up
                </h2>

                <p>Improve lower body balance and unilateral leg strength.<br><br> 🏋️ Dumbbells <br> 🔥 Functional Movement <br>  🎯 Single-Leg Control</p>

            </div>
        </div>



    </section>

    <section class="split">

        <div class="hero-left">
            <div class="gif Sumo-Deadlift"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Sumo Deadlift
                </h2>

                <p>Target the glutes and hamstrings with a wide stance pulling movement. <br><br> 🏋️ Barbell <br>  🔥 Compound Movement <br>  🎯 Hip Drive </p>

            </div>
        </div>

    </section>

</main>

<?php

require "footer.php";

?>