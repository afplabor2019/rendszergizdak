
<form action="settings/update_user" method="POST">
    <label>Current Name</label>
    <input type="text" name="name" value="<?=$user['name']?>"required>
    <label>Current Password</label>
    <input type="password" name="password" required>
    <label>New Name</label>
    <input type="text" name="newName" required>
    <label>New Password</label>
    <input type="password" name="newPassword" required>
    <button>Update</button>
</form>

<form action="settings/loadup_balance"  method="POST">
    <label for="incresaseBalance">Loadup Balance</label>
    <input type="number" name="increaseBalance" min=0>
    <button>Upload</button>
</form>