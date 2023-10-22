<div class="page-title">
  <div class="row">
    <div class="col-12 col-md-6 order-md-1 order-last">
      <h3><?= $page_title ?? 'NOT_NAMED' ?></h3>
      <p class="text-subtitle text-muted"><?= $page_description ?? 'NO_DESCRIPTION' ?></p>
    </div>
    <div class="col-12 col-md-6 order-md-2 order-first">
      <?= $this->setData(['breadcrumb' => $breadcrumb ?? []])->render('admin/layouts/partial/breadcrumb.php') ?>
    </div>
  </div>
</div>