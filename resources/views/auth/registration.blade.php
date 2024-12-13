<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form>
        <div class="row">
            <input type="text" value="" placeholder="Username" name="Nama" required>
        </div>
        <div class="row">
            <input type="text" value="" placeholder="Email" name="email" required>
        </div>
        <div class="row">
            <input type="text" value="" placeholder="Password" name="password" required>
        </div>
        <div class="row">
            <input type="text" value="" placeholder="Confirm Password" name="confirm_password" required>
        </div>
        <div>
            <select class="selectbox" name="is_role" id="" required>
                <option value="">Select Role</option>
                <option value="2">Super Admin</option>
                <option value="1">Admin</option>
                <option value="0">User</option>
            </select>
        </div>
    </form>
    <div>
        <input type="submit" value='Registrasi'>
    </div>
</body>

</html>
