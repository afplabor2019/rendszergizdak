
    <?php var_dump($_SESSION) ?>
    <form action="register/register_user" method="POST">
    <label>User Name</label>
    <input type="text" name="name" required>
    <label>Password</label>
    <input type="password" name="password" required>
    <label>Confirm Password</label>
    <input type="password" name="confirmPassword" required>
    <button type="submit">Register</button>
</form>

<P>
    <?=$ads?>
    <?=$_SESSION['message']?>
</p>
<?php 
    if (isset($_SESSION['message']) && !empty($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    }
?>