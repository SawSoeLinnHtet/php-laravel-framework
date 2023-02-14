<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
  <div class="mx-auto max-w-7xl px-10 py-3">
    <div class="mb-4 flex">
      <a href="/notes/create" class="px-2 py-1 text-sm bg-green-600 text-white rounded-md ml-auto flex align-center gap-2">
        <i class="ri-add-box-fill"></i>
        <span class="text-sm">Add Note</span>
      </a>
    </div>
    <div class="p-4 shadow-xl rounded-md bg-gray-100">
      <table id="data_table" class="mt-5">
        <thead class="text-center">
          <tr>
            <th>
              No
            </th>
            <th>
              Name
            </th>
            <th>
              Action
            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($notes as $key => $note) :  ?>
            <tr>
              <td>
                <?= $key + 1 ?>
              </td>
              <td>
                <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                  <?= htmlspecialchars($note['name']) ?>
                </a>
              </td>
              <td>
                <form class="ml-auto" method="POST" id="delete_form" action="/note">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="id" value="<?= $note['id'] ?>">
                  <button class="text-xs text-white rounded-md py-2 px-3 bg-red-500">
                    <i class="ri-delete-bin-fill"></i>
                  </button>
                </form>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>