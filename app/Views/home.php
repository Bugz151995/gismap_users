<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<?= $this->include('components/topbar') ?>

<main>
  <section id="hero">
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="<?= base_url() ?>/assets/hero.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold lh-1 mb-3">GIS Based Mapping System</h1>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam iste harum neque illo. Placeat aliquam corrupti, nam nesciunt harum obcaecati nemo minus eaque mollitia quia.</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="#footer" type="button" class="btn btn-primary btn-lg px-4 me-md-2">Contact Us</a>
            <a href="#footer" type="button" class="btn btn-outline-secondary btn-lg px-4">Learn More...</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features" class="my-5 py-5">
    <div class="container text-center">
      <h1 class="display-5 fw-bold lh-1 mb-5">Features</h1>
      <div class="row">
        <div class="col d-flex justify-content-center">
          <div class="card" style="width: 20rem;">
            <img src="<?= base_url() ?>/assets/gis_feature.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">GIS Based Mapping</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="card" style="width: 20rem;">
            <img src="<?= base_url() ?>/assets/mr_feature.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Marine Resources Data</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="card" style="width: 20rem;">
            <img src="<?= base_url() ?>/assets/online_feature.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?= $this->include('components/footer') ?>

<?= $this->endSection() ?>