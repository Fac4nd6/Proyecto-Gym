<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

require "header.php";
?>


<main>

    <!-- HERO -->
    <section class="Inicio-hero negro">

        <div class="hero2-content">
            <h2>Welcome</h2>   
            <?php echo "<p>" . $_SESSION['username'] . "</p>"; ?>  
        </div>

    </section>



    <section class="Inicio-hero chest">

    <div class="hero2-content">
        
        <h2>
            Chest Day, Best Day.
        </h2>

        <p>
            Challenge yourself with our Chest Day routine. A complete workout designed to build strength, improve your posture and push your limits one rep at a time.
        </p>

        <a class="a-link" href="chest.php">VIEW EXERCISES</a>

    </div>

    </section>

     <section class="Inicio-hero leg">

    

    <div class="hero2-content">
        
        <h2>
            Leg Day, Strongest Day.
        </h2>

        <p>
            Challenge yourself with our Leg Day routine. A complete workout designed to build powerful legs, improve your balance and push your endurance to the next level.
        </p>

        <a class="a-link" href="leg.php">VIEW EXERCISES</a>

    </div>

    </section>

     <section class="Inicio-hero arm">

    

    <div class="hero2-content">
        
        <h2>
            Arm Day, Pump Day.
        </h2>

        <p>
            Challenge yourself with our Arm Day routine. A complete workout designed to build stronger arms, increase your muscle definition and push your strength to the limit.
        </p>

        <a class="a-link" href="arm.php">VIEW EXERCISES</a>

    </div>

    </section>

     <section class="Inicio-hero shoulder">

    

    <div class="hero2-content">
        
        <h2>
            Shoulder Day, Power Day.
        </h2>

        <p>
            Challenge yourself with our Shoulder Day routine. A complete workout designed to build powerful shoulders, improve your stability and push your strength to new heights.
        </p>

        <a class="a-link" href="shoulder.php">VIEW EXERCISES</a>

    </div>

    </section>

     <section class="Inicio-hero back">

    

    <div class="hero2-content">
        
        <h2>
            Back Day, Wing Day.
        </h2>

        <p>
          Challenge yourself with our Back Day routine. A complete workout designed to strengthen your back, improve your posture and build the foundation of a stronger body.
        </p>

        <a class="a-link" href="back.php">VIEW EXERCISES</a>

    </div>

    </section>


</main>

<?php
require "footer.php";
?>