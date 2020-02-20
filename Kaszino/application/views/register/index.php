<section class="container-fluid" >
    <div class="container-form">   
        <?php 
            if (isset($_SESSION['message']) && !empty($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            }
        ?>
        <form class="register" action="register/register_user" method="POST">
            <div>
                <label>User Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div>
                <label>Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div>
                <label>Confirm Password</label>
                <input type="password"  class="form-control" name="confirmPassword" required>
            </div>
            <button class="btn btn-outline-info" type="submit">Register</button>
        </form>
    </div>
</section>