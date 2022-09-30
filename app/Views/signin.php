<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<main id="signinWrapper">
    <?= form_open('signin', ['id' => 'signinForm']) ?>
    <h1>Users Sign In</h1>
    <hr>
    <div class="mb-3">
        <label for="username" class="mb-2">Username</label>
        <input type="text" name="username" id="username" class="form-control">
        <?= isset($validation) ? $validation->showError('username') : null ?>
    </div>
    <div class="mb-3">
        <label for="password" class="mb-2">Password</label>
        <input type="password" name="password" id="password" class="form-control">
        <?= isset($validation) ? $validation->showError('password') : null ?>
    </div>
    <hr>
    <input type="submit" id="signinBtn" value="Sign In" class="btn btn-primary">
    <?= form_close() ?>
</main>
<?= $this->endSection() ?>