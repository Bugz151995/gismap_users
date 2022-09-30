<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<main id="signinWrapper">
    <?= form_open('signup', ['id' => 'signinForm']) ?>
    <h1>Users Sign Up</h1>
    <hr>
    <div class="row row-cols-1 g-3">
        <div class="col">
            <label for="fname" class="mb-2">First Name</label>
            <input type="text" name="fname" id="fname" value="<?= set_value('fname') ?>" class="form-control">
            <?= isset($validation) ? $validation->showError('fname') : null ?>
        </div>
        <div class="col">
            <label for="mname" class="mb-2">Middle Name</label>
            <input type="text" name="mname" id="mname" value="<?= set_value('mname') ?>" class="form-control">
            <?= isset($validation) ? $validation->showError('mname') : null ?>
        </div>
        <div class="col">
            <label for="lname" class="mb-2">Last Name</label>
            <input type="text" name="lname" id="lname" value="<?= set_value('lname') ?>" class="form-control">
            <?= isset($validation) ? $validation->showError('lname') : null ?>
        </div>
        <div class="col">
            <label for="cnum" class="mb-2">Contact Number</label>
            <input type="number" name="cnum" id="cnum" value="<?= set_value('cnum') ?>" class="form-control">
            <?= isset($validation) ? $validation->showError('cnum') : null ?>
        </div>
        <div class="col">
            <label for="username" class="mb-2">Username</label>
            <input type="text" name="username" id="username" value="<?= set_value('username') ?>" class="form-control">
            <?= isset($validation) ? $validation->showError('username') : null ?>
        </div>
        <div class="col">
            <label for="password" class="mb-2">Password</label>
            <input type="password" name="password" id="password" value="<?= set_value('password') ?>" class="form-control">
            <?= isset($validation) ? $validation->showError('password') : null ?>
        </div>
        <div class="col">
            <label for="confpassword" class="mb-2">Confirm Password</label>
            <input type="password" name="confpassword" id="confpassword" value="<?= set_value('confpassword') ?>" class="form-control">
            <?= isset($validation) ? $validation->showError('confpassword') : null ?>
        </div>
    </div>
    <hr>
    <input type="submit" id="signinBtn" value="Sign Up" class="btn btn-primary">
    <p>Already have an account? <a href="<?= base_url() ?>" class="link-light">Sign In.</a></p>
    <?= form_close() ?>
</main>
<?= $this->endSection() ?>