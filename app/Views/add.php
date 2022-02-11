<?= $this->extend('layout/templates') ?>

<?= $this->section('content') ?>
<div class="row p-4">
   <div class="col-12">
      <form method="post" action="/pages/save/">
         <?= csrf_field(); ?>
         <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" required>
         <div class="mt-3 mb-3">
            <label for="desc" class="form-label">Description</label>
            <textarea type="text" class="form-control" name="desc" required></textarea>
         </div>
         <div class="mb-3">
            <label for="date" class="form-label">Datetime</label>
            <input type="datetime-local" class="form-control" name="date" required>
         </div>
         <div class="mt-3 mb-3">
            <button type="submit" name="add" class="btn btn-primary">Add</button>
         </div>
      </form>
   </div>
</div>
<?= $this->endsection(); ?>