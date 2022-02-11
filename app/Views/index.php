<?= $this->extend('layout/templates') ?>

<?= $this->section('content') ?>
<div class="row">
   <div class="list-group p-4">
      <?php if(session()->getFlashdata('msg')) : ?>
      <div class="alert alert-success" role="alert">
         <?= session()->getFlashdata('msg'); ?>
      </div>
      <?php endif; ?>
      <?php foreach ($todo as $data): ?>
         <?php if($data['time'] > $date_now) : ?>
            <section class="list-group-item d-flex gap-3 py-3 p-4" aria-current="true">
               <i class="fas fa-clipboard fa-2x text-primary"></i>
               <div class="d-flex gap-2 w-100 justify-content-between">
                  <div>
                     <h6 class="mb-0"><?= $data['title'] ?></h6>
                     <p class="mb-0 opacity-75"><?= $data['desc'] ?></p>
                  </div>
                  <small class="opacity-50 text-nowrap"><?= $data['time'] ?></small>
               </div>
            </section>
         <?php else : ?>
            <section class="list-group-item d-flex gap-3 py-3 p-4" aria-current="true" style="background-color: #f2f2f2;">
               <i class="fas fa-clipboard fa-2x text-primary"></i>
               <div class="d-flex gap-2 w-100 justify-content-between">
                  <div>
                     <h6 class="mb-0"><?= $data['title'] ?></h6>
                     <p class="mb-0 opacity-75"><?= $data['desc'] ?></p>
                  </div>
                  <small class="opacity-50 text-nowrap"><?= $data['time'] ?></small>
               </div>
            </section>
         <?php endif; ?>
      <?php endforeach; ?>
   </div>
</div>
<?= $this->endsection(); ?>
