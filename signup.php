<!DOCTYPE html>
<html lang="en">
    <?php include('head.php'); ?>
    <body>
        <!----Signup div Start-=--->    
        <div class="signup-div">
            <form action="" method="post">
                <input type="text" name="fname" id="" required><br>
                <input type="email" name="email" id="" required><br>
                <input type="submit" value="Sign Up">
            </form>
        </div>

        <!----Signup div End--->




        <?php include('footer.php');?>
    </body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Form Received:</p>";
        echo "<p>".$_POST['fname']."</p>";
        echo "<p>".$_POST['email']."</p>";
    }
?>