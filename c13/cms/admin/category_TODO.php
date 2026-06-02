<?php
// @TODO
?>
<?php include '../includes/admin-header.php'; ?>
  <main class="container admin" id="content">
    <form action="category.php?id=<?= $id ?>" method="post" class="narrow">
      <h1>Edit Category</h1>
      <?php if ($errors['warning']) { ?>
        <div class="alert alert-danger"><?= $errors['warning'] ?></div>
      <?php } ?>

      <div class="form-group">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name"
               value="<?= html_escape($category['name']) ?>" class="form-control">
        <span class="errors"><?= $errors['name'] ?></span>
      </div>

      <div class="form-group">
        <label for="description">Description: </label>
        <textarea name="description" id="description"
                  class="form-control"><?= html_escape($category['description']) ?></textarea>
        <span class="errors"><?= $errors['description'] ?></span>
      </div>

      <div class="form-check">
        <input type="checkbox" name="navigation" id="navigation"
               value="1" class="form-check-input"
          <?= ($category['navigation'] === 1) ? 'checked' : '' ?>>
        <label class="form-check-label" for="navigation">Navigation</label>
      </div>

      <input type="submit" value="Save" class="btn btn-primary btn-save">
    </form>
  </main>
<?php include '../includes/admin-footer.php'; ?>