<?php
$defaultLength = '100';

if(isset($maxLength)){
 $defaultLength = $maxLength;
}
?>
<div class="<?= $class ?>">
 <div class="text-base text-black"><?= $label ?></div>
 <input maxlength="<?= $defaultLength ?>"  type="<?= $type ?>" value="<?= $value ?>" id="<?= $id ?>" name="<?= $id ?>"  class="border border-black w-full h-[40px] rounded-lg p-2"/>
</div>