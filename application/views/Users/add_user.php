<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="<?= base_url('assets/bootswatch-5/dist/vapor/bootstrap.min.css'); ?>" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Add User</h2>
        <form action="<?= site_url('user/add_user_process'); ?>" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control" name="role">
                    <option value="0">User</option>
                    <option value="1">Admin</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Add User</button>
        </form>
    </div>
</body>
</html>
