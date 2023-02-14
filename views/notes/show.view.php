<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<section class="w-full py-6 px-5">
  <div class="h-auto bg-sky-600 py-6 px-5 rounded-md shadow-xl">
    <div class="flex align-center justify-between">
      <p class="text-3xl font-bold mb-5">
        <?= $note['name'] ?>
      </p>
      <form method="POST" id="delete_form">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">
        <button class="text-xs text-white rounded-md py-2 px-3 bg-blue-900">
          <i class="ri-edit-2-fill"></i>
        </button>
      </form>
    </div>
    <hr class="mb-5">
    <p class="text-white">
      <?= $note['body'] ?>
    </p>
    <div class="flex">
      <form class="mt-6 ml-auto" method="POST" id="delete_form">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $note['id'] ?>">
        <button class="text-xs text-white rounded-md py-2 px-3 bg-red-500">
          <i class="ri-delete-bin-fill"></i>
        </button>
      </form>
    </div>
  </div>
</section>

<?php require base_path('views/partials/footer.php'); ?>