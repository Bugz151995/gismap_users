<footer class="bg-dark">
  <div class="container">
    <div class="row g-5 py-5">
      <div class="col text-light">
        <img src="<?= base_url() ?>/assets/logo_dark.png" class="rounded mb-3" width="160" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, nihil vel obcaecati repellendus voluptatem facere?</p>
        <div class="d-flex gap-2">
          <a href="" class=""><i class="fab fa-facebook fa-fw fa-2x"></i></a>
          <a href="mailto:gismap@gmail.com" class=""><i class="fas fa-envelope-open fa-fw fa-2x"></i></a>
          <a href="tel:+639511455532" class=""><i class="fas fa-phone fa-fw fa-2x"></i></a>
        </div>
      </div>
      <div class="col text-light">
        <h3>Contact Us</h3>
        <ul class="list-unstyled">
          <li><i class="fas fa-envelope fa-fw"></i> gismap@gmail.com</li>
          <li><i class="fas fa-phone fa-fw"></i> +639511455532</li>
          <li><i class="fab fa-viber fa-fw"></i> +639514457519</li>
          <li><i class="fas fa-location-dot fa-fw"></i> Lagonoy, Camarines Sur</li>
        </ul>
      </div>
      <div class="col">
        <h3 class="text-light">Send a Feedback</h3>
        <?= form_open('feedback', ['class' => 'needs-validation', 'novalidate' => '']) ?>
        <div class="form-floating mb-3">
          <textarea class="form-control" style="height: 160px;" placeholder="Tell us what you think about our app..." id="feedback" name="feedback" required></textarea>
          <div class="invalid-feedback">
            Please fill up the feedback field.
          </div>
          <label for="feedback">Tell us what you think...</label>
        </div>
        <input type="submit" value="Submit" class="btn btn-danger w-100">
        <?= form_close() ?>
      </div>
    </div>
    <div class="text-center text-light py-4">
      <p class="mb-0">GISMAP &copy; 2022 All Rights Reserved</p>
    </div>
  </div>
</footer>