<?php include "inc/header.php" ?>
<?php include "inc/nav.php" ?>


<div class="container">
    <div class="row">
        <div class="col-8 mx-auto my-3">
        <h2 class="border p-2 my-2 text-center">Login</h2>
            <?php if(isset($_SESSION['errors'])):?>     
                <?php foreach($_SESSION['errors'] as $error): ?>
                    <div class="alert alert-danger text-center">
                        <?php echo $error; ?>
                    </div>
                <?php endforeach ?>
        <?php endif ?>
         <form action="handelers/handelLogin.php" method="POST" class="border p-3">
         
            <div class="form-group p-2 my-1">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group p-2 my-1">
                <label for="password">password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group p-2 my-1">
                <input type="submit" value="Register" class="form-control btn btn-success">
            </div>
         </form>
            </div>
        </div>
    </div>


<?php include "inc/footer.php" ?>
    