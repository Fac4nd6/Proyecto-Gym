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
            <h2>Chest Day.</h2>
            <p>The chest (or thorax) is the upper front part of the body located between the neck and the diaphragm</p>
        </div>

    </section>

    <!-- Upper chest -->

    <section class="section-hero upper">

        <div class="hero-chest-content ">
            <h2>Upper Chest</h2>
            <p>The upper chest (or thorax) is the upper front part of the body located between the neck and the diaphragm</p>
        </div>

    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Incline-Dumbbell-Press"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Incline Dumbbell Press
                </h2>

                <p>Build strength with a deeper and more controlled pressing movement. <br><br> 🏋️ Dumbbells <br> 🔥 Compound Movement <br> 🎯 Controlled Range</p>

            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Low-Cable-Fly"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Low Cable Fly
                </h2>

                <p>Maintains constant tension for a smooth chest contraction. <br><br> 🎯 Cable Resistance <br> ⚡ Isolation Exercise <br> 🔥 Constant Tension</p>


            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Decline-Push-up"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Decline push-ups
                </h2>

                <p>A bodyweight exercise focused on control and endurance. <br><br> 🏠 Bodyweight <br> 💪 Upper Body Focus <br> ⚡ No Equipment</p>


            </div>
        </div>

    </section>


    <section></section>


    <!-- Middle Chest -->

    <section class="section-hero middle">

        <div class="hero-chest-content ">
            <h2>Middle Chest</h2>
            <p>The middle chest refers to the sternocostal head of the pectoralis major, specifically the inner muscle fibers connecting to the sternum. Training this area focuses on hypertrophy to deepen the visual line separating the pecs, creating a, sculpted appearance./p>
        </div>

    </section>


    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Bench-Press"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Bench press
                </h2>

                <p>A classic pressing movement for strength and power. <br><br> 🏋️ Barbell Exercise <br> 🔥 Compound Lift <br> 💪 Strength Focus</p>


            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Dumbbell-Fly"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Dumbbell fly
                </h2>

                <p>Improves chest stretch and muscle control. <br><br> 🏋️ Dumbbells <br> 🎯 Isolation Movement <br> 🔥 Deep Stretch </p>


            </div>
        </div>



    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Push-up"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Push-up
                </h2>

                <p>A versatile bodyweight movement for daily training. <br><br> 🏠 No Equipment <br> 💪 Full Upper Body <br> ⚡ Functional Movement </p>


            </div>
        </div>

    </section>

    <!-- Lower Chest -->

    <section class="section-hero lower">

        <div class="hero-chest-content ">
            <h2>Lower Chest</h2>
            <p>The lower chest, or sternocostal head, refers to the bottom portion of the pectoralis major muscle, which forms the lower boundary of the chest above the abdominals</p>
        </div>

    </section>


    <section class="split ">

        <div class="hero-left exercise-left">
            <div class="gif Decline-Bench-Press"></div>
        </div>

        <div class="hero-right">

            <div class="content-right ">
                <h2>
                    Decline bench press
                </h2>

                <p>A stable pressing movement with powerful lower chest activation. <br><br> 🏋️ Barbell Exercise <br> 🔥 Heavy Pressing <br> 🎯 Stable Movement</p>


            </div>
        </div>

    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif Dips"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    Dips
                </h2>

                <p>Develops pressing power and body control using your own weight.<br><br> 🏠 Bodyweight <br>💪 Compound Exercise <br> 🔥 Explosive Strength</p>

            </div>
        </div>



    </section>

    <section class="split">

        <div class="hero-left exercise-left">
            <div class="gif High-Cable-Fly"></div>
        </div>

        <div class="hero-right">

            <div class="content-right">
                <h2>
                    High cable fly
                </h2>

                <p>Creates smooth resistance with focused chest contraction. <br><br> 🎯 Cable Resistance <br> ⚡ Isolation Exercise <br> 🔥 Muscle Control </p>


            </div>
        </div>

    </section>

</main>

<?php

require "footer.php";

?>