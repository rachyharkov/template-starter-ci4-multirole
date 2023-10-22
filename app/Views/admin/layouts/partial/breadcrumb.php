<nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
  <ol class="breadcrumb">

  <?php
  $count = count($breadcrumb) - 1;
  foreach($breadcrumb as $key => $value): ?>
    <?php if($key == $count): ?>
      <li class="breadcrumb-item active" aria-current="page"><?= $value['name'] ?></li>
    <?php else: ?>
      <li class="breadcrumb-item"><a href="<?= url_to($value['to'])  ?>"><?= $value['name'] ?></a></li>
    <?php endif; ?>
  <?php endforeach; ?>
  </ol>
</nav>