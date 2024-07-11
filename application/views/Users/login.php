<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?= base_url('assets/bootswatch-5/dist/vapor/bootstrap.min.css'); ?>" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 500px;
            width: 100%;
            padding: 20px;
            /* background-color: #ffffff; */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="text-center">CinemaXX Login</h2>
        <?php if($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
        <?php endif; ?>
        <form action="<?= site_url('user/login_process'); ?>" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3 w-100">Login</button>
        </form>
        <div class="mt-3 text-center">
            <a href="<?= site_url('user/add_user'); ?>" class="btn btn-secondary w-100">Add User</a>
        </div>
    </div>
</body>
</html>
