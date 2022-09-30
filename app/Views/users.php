<?= $this->extend('layout') ?>

<?php
if (isset($_SESSION['validation'])) {
  $validation = $_SESSION['validation'];
}
?>
<?= $this->section('content') ?>

<header>
  <?= $this->include('components/sidebar') ?>
</header>

<main id="content">
  <?= $this->include('components/topbar') ?>
  <section class="container-fluid p-4">
    <?= $this->include('components/breadcrumb') ?>

    <div class="row mt-3 g-4">
      <div class="col-12 col-sm-4">
        <?= form_open('users/save', ['id' => 'form', 'class' => 'rounded rounded-3 p-4']) ?>
        <?= isset($sel_data) ? form_hidden('account_id', $sel_data['account_id'])  : null ?>
        <?= isset($sel_data) ? form_hidden('user_id', $sel_data['user_id'])  : null ?>
        <div class="mb-3">
          <h5><i class="fas fa-fw fa-<?= isset($sel_data) ? 'edit' : 'circle-plus' ?>"></i> <?= isset($sel_data) ? 'Edit' : 'Create' ?> User</h5>
        </div>
        <hr>
        <div class="row row-cols-1 row-cols-sm-2">
          <div class="col mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control form-control-sm" name="fname" value="<?= isset($sel_data) ? $sel_data['fname']  : null ?>" id="fname" placeholder="">
            <?= isset($validation) ? $validation->showError('fname') : null ?>
          </div>
          <div class="col mb-3">
            <label for="mname" class="form-label">Middle Name</label>
            <input type="text" class="form-control form-control-sm" name="mname" value="<?= isset($sel_data) ? $sel_data['mname']  : null ?>" id="mname" placeholder="">
            <?= isset($validation) ? $validation->showError('mname') : null ?>
          </div>
          <div class="col mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control form-control-sm" name="lname" value="<?= isset($sel_data) ? $sel_data['lname']  : null ?>" id="lname" placeholder="">
            <?= isset($validation) ? $validation->showError('lname') : null ?>
          </div>
          <div class="col mb-3">
            <label for="contactNumber" class="form-label">Contact Number</label>
            <input type="number" class="form-control form-control-sm" name="contact_number" value="<?= isset($sel_data) ? $sel_data['contact_number']  : null ?>" id="contactNumber" placeholder="">
            <?= isset($validation) ? $validation->showError('contact_number') : null ?>
          </div>
          <div class="col mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control form-control-sm" name="username" value="<?= isset($sel_data) ? $sel_data['username']  : null ?>" id="username" placeholder="">
            <?= isset($validation) ? $validation->showError('username') : null ?>
          </div>

          <?php if (!isset($sel_data)) : ?>
            <div class="col mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control form-control-sm" name="password" id="password" placeholder="">
              <?= isset($validation) ? $validation->showError('password') : null ?>
            </div>
            <div class="col mb-3">
              <label for="confPassword" class="form-label">Confirm Password</label>
              <input type="password" class="form-control form-control-sm" name="conf_password" id="confPassword" placeholder="">
              <?= isset($validation) ? $validation->showError('conf_password') : null ?>
            </div>
          <?php endif ?>
        </div>
        <hr>
        <div class="d-flex justify-content-<?= isset($sel_data) ? 'between' : 'end' ?>">
          <?php if (isset($sel_data)) : ?>
            <a href="<?= base_url() ?>/users" class="btn btn-secondary"><i class="fas fa-fw fa-times"></i> Cancel</a>
          <?php endif ?>
          <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-save"></i> Save</button>
        </div>
        <?= form_close() ?>
      </div>

      <div class="col-12 col-sm-8">
        <table id="table" class="table table-borderless table-light table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Last Name</th>
              <th>Username</th>
              <th>Contact #</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $key => $user) : ?>
              <tr>
                <td><?= ++$key ?></td>
                <td><?= $user['fname'] ?></td>
                <td><?= $user['mname'] ?></td>
                <td><?= $user['lname'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['contact_number'] ?></td>
                <td>
                  <a href="<?= base_url() ?>/users/<?= $user['account_id'] ?>" class="btn btn-sm btn-primary"><i class="fas fa-fw fa-edit"></i></a>

                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $user['account_id'] ?>">
                    <i class="fas fa-fw fa-trash-alt"></i>
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="deleteModal<?= $user['account_id'] ?>" tabindex="-1" aria-labelledby="deleteModal<?= $user['account_id'] ?>Label" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="deleteModal<?= $user['account_id'] ?>Label"><i class="fas fa-fw fa-trash-alt"></i> Delete User</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <?= form_open('users/delete', null, ['account_id' => $user['account_id'], 'user_id' => $user['user_id']]) ?>
                        <div class="modal-body">
                          <p>Are you sure that you want to delete the data?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-fw fa-times"></i> Cancel</button>
                          <button type="submit" class="btn btn-danger"><i class="fas fa-fw fa-trash-alt"></i> Delete</button>
                        </div>
                        <?= form_close() ?>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</main>

<?= $this->endSection() ?>