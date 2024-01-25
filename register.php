<?php
include("con_db.php");

if (isset($_POST['register1'])) {
    if (
        strlen($_POST['moving_input_label']) >= 1 &&
        strlen($_POST['moving_input_label2']) >= 1 &&
        strlen($_POST['moving_date']) >= 1 &&
        strlen($_POST['moving_people']) >= 1
    ) {

        $moving_pick_up = trim($_POST['moving_input_label']);
        $moving_drop_off = trim($_POST['moving_input_label2']);
        $moving_date = trim($_POST['moving_date']);
        $moving_people = trim($_POST['moving_people']);

        $consulta = "INSERT INTO moving(pick_up, drop_off, date, people) VALUES ('$moving_pick_up','$moving_drop_off','$moving_date','$moving_people')";
        $result = mysqli_query($conex, $consulta);
        if ($result) {
            ?>
            <h3 class="ok">
                <script>alert("Your information has been sent, an agent will contact within the next 30 minutes")</script>
            </h3>
            <?php
            // Display page.php after alert
            echo '<script>window.location.href = "page.php";</script>';
        } else {
            ?>
            <h3 class="bad">
                <script>alert("An error has occurred")</script>
            </h3>
            <?php
        }
    } else {
        ?>
        <h3 class="bad"> Please, fill out correctly all the fields </h3>
        <?php
    }
}
?>
<?php
include("con_db.php");
if (isset($_POST['register2'])) {
    if (
        strlen($_POST['transporting_input_label']) >= 1 &&
        strlen($_POST['transporting_input_label2']) >= 1 &&
        strlen($_POST['transporting_date']) >= 1 &&
        strlen($_POST['transporting_description']) >= 1
    ) {

        $transporting_pick_up = trim($_POST['transporting_input_label']);
        $transporting_drop_off = trim($_POST['transporting_input_label2']);
        $transporting_date = trim($_POST['transporting_date']);
        $transporting_description = trim($_POST['transporting_description']);

        $consulta2 = "INSERT INTO transporting(pick_up, drop_off, date, description) VALUES ('$transporting_pick_up','$transporting_drop_off','$transporting_date','$transporting_description')";
        $result2 = mysqli_query($conex, $consulta2);
        if ($result2) {
            ?>
            <h3 class="ok">
                <script>alert("Your information has been sent, an agent will contact you ASAP")</script>
            </h3>
            <?php
            // Display page.php after alert
            echo '<script>window.location.href = "page.php";</script>';
        } else {
            ?>
            <h3 class="bad">
                <script>alert("An error has ocurred")</script>
            </h3>
            <?php
        }
    } else {
        ?>
        <h3 class="bad"> Please, fill out correctly all the fields </h3>
        <?php
    }

}
?>

<?php
include("con_db.php");
if (isset($_POST['register3'])) {
    if (
        strlen($_POST['commuting_input_label']) >= 1 &&
        strlen($_POST['commuting_input_label2']) >= 1 &&
        strlen($_POST['commuting_date']) >= 1 &&
        strlen($_POST['commuting_people']) >= 1
    ) {

        $commuting_pick_up = trim($_POST['commuting_input_label']);
        $commuting_drop_off = trim($_POST['commuting_input_label2']);
        $commuting_date = trim($_POST['commuting_date']);
        $commutingg_people = trim($_POST['commuting_people']);

        $consulta2 = "INSERT INTO commuting(pick_up, drop_off, date, people) VALUES ('$commuting_pick_up','$commuting_drop_off','$commuting_date','$commuting_people')";
        $result2 = mysqli_query($conex, $consulta2);
        if ($result2) {
            ?>
            <h3 class="ok">
                <script>alert("Your information has been sent, an agent will contact you ASAP")</script>
            </h3>
            <?php
            // Display page.php after alert
            echo '<script>window.location.href = "page.php";</script>';
        } else {
            ?>
            <h3 class="bad">
                <script>alert("An error has ocurred")</script>
            </h3>
            <?php
        }
    } else {
        ?>
        <h3 class="bad"> Please, fill out correctly all the fields </h3>
        <?php
    }

}