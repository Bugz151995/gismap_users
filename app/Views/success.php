<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<main id="successPage">
    <div class="card shadow" style="width: 25rem;">
        <div class="card-img-top text-center bg-success text-light" style="font-size: 13rem;">
            <i class="far fa-circle-check"></i>
        </div>
        <div class="card-body text-center">
            <h5 class="card-title">Congratulations!</h5>
            <p class="card-text">You have successfully created your account! You can now sign in and continue using our app.</p>
            <a href="<?= base_url() ?>" class="btn btn-success rounded-pill px-4">Continue</a>
        </div>
    </div>
</main>
<?= $this->endSection() ?>