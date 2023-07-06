<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>

<body>
    <div id="login-wrapper">
        <h1>LOGIN</h1>
        <?php if (session()->getFlashdata('flash_msg')) : ?>
            <div class="alert"><?= session()->getFlashdata('flash_msg') ?></div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="InputForEmail">Email Address</label>
                <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
            </div>
            <div class="form-group">
                <label for="InputForPassword">Password</label>
                <input type="password" name="password" class="form-control" id="InputForPassword">
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>

</html>