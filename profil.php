<?php include "inc/header.php" ?>
<?php include "inc/nav.php" ?>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto my-5 border p-2">
                <h2 class="border my-2 bg-success">Name: <?php echo $_SESSION['auth'][0] ?> </h2>
                <h2 class="border my-2 bg-primary">Email: <?php echo $_SESSION['auth'][1] ?> </h2>
            </div>
        </div>
    </div>

<?php include "inc/footer.php" ?>
    