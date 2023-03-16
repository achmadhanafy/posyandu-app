
<div class="<?= $class ?>">
 <div class="text-base text-black"><?= $label ?></div>
 <input onKeyPress='if(this.value.length==<?= $maxLength ?>) return false;' type="<?= $type ?>" value="<?= $value ?>" id="<?= $id ?>" name="<?= $id ?>"  class="border border-black w-full h-[40px] rounded-lg p-2" required/>
</div>