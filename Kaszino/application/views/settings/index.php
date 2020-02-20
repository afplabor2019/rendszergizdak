<section class="container-fluid">
    <div class="container-form">
        <?php 
            if (isset($_SESSION['message']) && !empty($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            }
        ?>
        <form action="settings/update_user" method="POST">
            <div class="form-group">
                <label>Current Name</label>
                <input type="text"  class="form-control"  name="name" value="<?=$user['name']?>"required>
            </div>
            <div class="form-group">
                <label>Current Password</label>
                <input type="password"  class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label>New Name</label>
                <input type="text"  class="form-control"  name="newName" required>
            </div>
            <div class="form-group">
                <label>New Password</label>
                <input type="password"  class="form-control"  name="newPassword" required>
            </div>
            <button class="btn btn-outline-info">Update</button>
        </form>

        <form action="settings/loadup_balance"  method="POST">
            <div class="form-group">
                <label for="incresaseBalance">Loadup Balance</label>
                <input type="number"  class="form-control" name="increaseBalance" min=0>
            </div>
            <button class="btn btn-outline-info">Upload</button>
        </form>
    </div>
</section>