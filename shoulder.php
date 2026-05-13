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
            <h2>Shoulder Day.</h2>
            <p>The shoulder is the joint connecting the arm to the torso, responsible for upper body movement and stability.</p>
        </div>

    </section>

    <!-- Anterior deltoid -->

    <section class="section-hero upper">

        <div class="hero-chest-content ">
            <h2>Anterior deltoid</h2>
            <p>The anterior deltoid is the front portion of the shoulder muscle located between the clavicle and the upper arm, playing a key role in shoulder flexion and pressing movements.</p>
        </div>

    </section>

    <section class="split">

        <div class="hero-left">
            <div class="gif Front-Raise"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Front Raise
                </h2>

                <p>Build front shoulder strength with controlled lifting movement. <br><br> 🏋️ Dumbbells <br>  🔥 Shoulder Focus <br> 🎯 Front Activation</p>

            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left">
            <div class="gif Arnold-Press"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Arnold Press
                </h2>

                <p>Develop shoulder size and stability through rotational pressing movement. <br><br> 🏋️ Dumbbells <br> 🔥 Compound Movement <br> 🎯 Full Shoulder Range</p>


            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left">
            <div class="gif Dumbbell-Shoulder-Press"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Dumbbell Shoulder Press
                </h2>

                <p>Increase upper body pressing strength and shoulder development. <br><br> 🏋️ Dumbbells <br> 🔥 Strength Building <br> 🎯 Controlled Press</p>


            </div>
        </div>

    </section>


    <section></section>


    <!-- Lateral deltoid -->

    <section class="section-hero middle">

        <div class="hero-chest-content ">
            <h2>Lateral deltoid</h2>
            <p>The lateral deltoid is the side portion of the shoulder muscle responsible for shoulder width and arm abduction. Training this area helps create a broader and more sculpted upper body appearance.</p>
        </div>

    </section>


    <section class="split">

        <div class="hero-left">
            <div class="gif Lateral-Raise"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Lateral Raise
                </h2>

                <p>Target shoulder width with controlled side arm movement. <br><br> 🏋️ Dumbbells <br> 🔥 Isolation Exercise <br>  🎯 Side Delts</p>


            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left">
            <div class="gif Upright-Row"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Upright Row
                </h2>

                <p>Build shoulder and upper trap strength through vertical pulling movement. <br><br> 🏋️ Barbell <br> 🔥 Upper Body Focus <br>  🎯 Shoulder Width </p>

            </div>
        </div>



    </section>

    <section class="split">

        <div class="hero-left">
            <div class="gif Cable-Lateral-Raise"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Cable Lateral Raise
                </h2>

                <p>Maintain constant tension on the lateral deltoids for muscle growth. <br><br> 🏋️ Cable Machine <br>  🔥 Isolation Exercise <br>  🎯 Constant Tension </p>

            </div>
        </div>

    </section>

    <!-- Posterior deltoid -->

    <section class="section-hero lower">

        <div class="hero-chest-content ">
            <h2>Posterior deltoid</h2>
            <p>The posterior deltoid is the rear portion of the shoulder muscle located at the back of the upper arm and shoulder, contributing to pulling movements and rear shoulder development for a balanced upper body appearance.</p>
        </div>

    </section>


    <section class="split ">

        <div class="hero-left">
            <div class="gif Rear-Delt-Fly"></div>
        </div>

        <div class="hero-right">

            <div class="content-right ">
                <h2>
                    Rear Delt Fly
                </h2>

                <p>Strengthen the rear shoulders and improve upper back balance. <br><br> 🏋️ Dumbbells <br> 🔥 Rear Delt Focus <br> 🎯 Shoulder Stability</p>


            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left">
            <div class="gif Face-Pull"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Face Pull
                </h2>

                <p>Improve posture and rear shoulder activation with pulling movement. <br><br> 🏋️ Cable Machine <br> 🔥 Posture Support <br> 🎯 Rear Activation</p>

            </div>
        </div>



    </section>

    <section class="split">

        <div class="hero-left">
            <div class="gif Reverse-Pec-Deck"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                   Reverse Pec Deck
                </h2>

                <p>Isolate the posterior deltoids with controlled machine movement. <br><br> 🏋️ Machine <br> 🔥 Isolation Exercise <br>  🎯 Rear Shoulder Control </p>


            </div>
        </div>

    </section>

</main>

<?php

require "footer.php";

?>