<div class="all-goods">
    <? foreach($goods as $obj => $description){?>
      <div class="obj">
          <div class="obj-name"><?=$description['name']?></div>
          <div class="obj-img" style="background: url('<?= $description['image'] ?>')  no-repeat"></div>
          <div class="obj-price"><?=$description['price']?></div>
          <div class="obj-description"><?=$description['description']?></div>
          <div class="obj-key"><?= $obj?></div>
      </div>
    <?}?>
</div>
