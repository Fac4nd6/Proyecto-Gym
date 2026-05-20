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
            <h2>Arm Day.</h2>
            <p>The arm is the upper limb of the body located between the shoulder and the forearm.</p>
        </div>

    </section>

    <!-- Bicep -->

    <section class="section-hero upper">

        <div class="hero-chest-content ">
            <h2>Bicep</h2>
            <p>The bicep, or biceps brachii, is the muscle located on the front of the upper arm, connecting the shoulder to the forearm and assisting in elbow flexion and arm movemen</p>
        </div>

    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Barbell-Curl"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">

                <h2>
                    Barbell Curl
                </h2>

                <p>Build arm strength and bicep size through controlled curling movement. <br><br> 🏋️ Barbell <br> 🔥 Isolation Exercise <br> 🎯 Bicep Focus</p>


            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Hammer-Curl"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Hammer Curl
                </h2>

                <p>Target the biceps and forearms with a neutral grip movement. <br><br> 🏋️ Dumbbells <br> 🔥 Arm Development <br> 🎯 Grip Control</p>


            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Preacher-Curl"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Preacher Curl
                </h2>

                <p>Isolate the biceps with strict and controlled arm positioning. <br><br> 🏋️ Dumbbells <br> 🔥 Isolation Exercise <br> 🎯 Peak Contraction</p>


            </div>
        </div>

    </section>


    <section></section>


    <!-- Tricep -->

    <section class="section-hero middle">

        <div class="hero-chest-content ">
            <h2>Tricep</h2>
            <p>The tricep refers to the triceps brachii, the muscle located on the back of the upper arm responsible for elbow extension. Training this area helps build arm size, strength, and a more defined appearance.</p>
        </div>

    </section>


    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Tricep-Pushdown"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Tricep Pushdown
                </h2>

                <p>Build tricep strength through controlled elbow extension. <br><br> 🏋️ Cable Machine <br> 🔥 Isolation Exercise <br> 🎯 Arm Definition</p>


            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Skull-Crusher"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Skull Crusher
                </h2>

                <p>Target the triceps with a deep stretching movement. <br><br> 🏋️ Bar <br> 🔥 Muscle Growth <br> 🎯 Elbow Control </p>


            </div>
        </div>



    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Tricep-Extension"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Tricep Extension
                </h2>

                <p>Focus on the long head of the triceps with overhead extension. <br><br> 🏋️ Dumbbell <br> 🔥 Tricep Focus<br> 🎯 Full Stretch </p>


            </div>
        </div>

    </section>

    <!-- Forearm -->

    <section class="section-hero lower">

        <div class="hero-chest-content ">
            <h2>Forearm</h2>
            <p>The forearm refers to the lower portion of the arm located between the elbow and the wrist, containing the muscles responsible for grip strength, wrist movement, and finger control.</p>
        </div>

    </section>


    <section class="split ">

        <div class="hero-left exercise-left">
            <div class="gif Wrist-Curl"></div>
        </div>

        <div class="hero-right">

            <div class="content-right ">
                <h2>
                    Wrist Curl
                </h2>

                <p>Strengthen the forearms and improve wrist control. <br><br> 🏋️ Barbell <br> 🔥 Grip Development <br> 🎯 Wrist Flexion</p>

            </div>
        </div>

    </section>



    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Reverse-Wrist-Curl"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Reverse Wrist Curl
                </h2>

                <p>Target the upper forearm muscles with reverse wrist movement. <br><br> 🏋️ Barbell <br> 🔥 Forearm Focus <br> 🎯 Controlled Motion</p>


            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Farmer-Carry"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Farmer’s Carry
                </h2>

                <p>Develop grip strength and forearm endurance through loaded carries.<br><br> 🏋️ Dumbbells <br>🔥 Functional Strength <br> 🎯 Grip Endurance</p>

            </div>
        </div>



    </section>

</main>

<?php

require "footer.php";

?>