<?php require base_path('views/partials/header.php'); ?>

<section class="w-full py-5 px-7">
  <div class="flex align-center justify-center">
    <div class="w-3/12 h-auto bg-white py-4 px-6 rounded-lg shadow shadow-white">
      <p class="font-bold text-3xl mb-3">
        Login
      </p>
      <hr class="mb-3">
      <form method="POST" action="/login" id="form">
        <?php if (isset($errors['password'])) : ?>
          <p class="text-red-500 text-xs mt-22"><?= $errors['password'] ?></p>
        <?php endif; ?>
        <?php if (isset($errors['email'])) : ?>
          <p class="text-red-500 text-xs mt-22"><?= $errors['email'] ?></p>
        <?php endif; ?>
        <div class="w-full mb-3">
          <label for="email" class="block mb-2 text-sm text-gray-900">
            Email <span class="text-red-900">*</span>
          </label>
          <input type="email" id="email" class="bg-gray-200 border-gray-200 w-full py-2 px-4 text-sm rounded-sm" name="email" required>
        </div>
        <div class="w-full mb-3">
          <label for="password" class="block mb-2 text-sm text-gray-900">
            Password <span class="text-red-900">*</span>
          </label>
          <input type="password" id="password" class="bg-gray-200 border-gray-200 w-full py-2 px-4 text-sm rounded-sm" name="password" required>
        </div>
        <p class="text-sm mt-2 mb-2 text-gray-800">New user?<a href="/" class="text-blue-800">Register Here</a></p>
        <div class="w-full flex justify-end mt-4">
          <a href="/" class="bg-gray-400 text-sm text-black py-1 px-2 rounded-sm mr-2">Cancel</a>
          <button type="submit" class="bg-green-700 text-sm text-white py-1 px-2 rounded-sm">Login</button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php require base_path('views/partials/footer.php'); ?>