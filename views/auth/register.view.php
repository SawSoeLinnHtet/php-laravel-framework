<?php require base_path('views/partials/header.php'); ?>

<section class="w-full py-2 px-7">
  <div class="flex align-center justify-center">
    <div class="w-2/12 h-auto bg-gradient-to-r from-cyan-500 to-blue-500 rounded-l-md">
    </div>
    <div class="w-5/12 h-auto bg-purple-300 py-2 px-6 rounded-r-md">
      <p class="font-bold text-2xl mb-2">
        Register Info
      </p>
      <hr class="mb-2">
      <form method="POST" action="/register" id="form">
        <div class="w-full flex justify-between gap-10 mb-3">
          <div class="w-6/12">
            <label for="first_name" class="block mb-2 text-sm text-gray-900">
              First Name <span class="text-red-900">*</span>
            </label>
            <input type="text" id="first_name" class="bg-gray-200 border-gray-200 w-full py-2 px-4 text-sm rounded-sm" name="first_name" required>
          </div>
          <div class="w-6/12">
            <label for="last_name" class="block mb-2 text-sm text-gray-900">
              Last Name <span class="text-red-900">*</span>
            </label>
            <input type="text" id="last_name" class="bg-gray-200 border-gray-200 w-full py-2 px-4 text-sm rounded-sm" name="last_name" required>
          </div>
        </div>
        <div class="w-full mb-3">
          <label for="email" class="block mb-2 text-sm text-gray-900">
            Email <span class="text-red-900">*</span>
          </label>
          <input type="email" id="email" class="bg-gray-200 border-gray-200 w-full py-2 px-4 text-sm rounded-sm" name="email" required>
        </div>
        <div class="w-full flex justify-between gap-10 mb-3">
          <div class="w-6/12">
            <label for="password" class="block mb-2 text-sm text-gray-900">
              Password <span class="text-red-900">*</span>
            </label>
            <input type="password" id="password" class="bg-gray-200 border-gray-200 w-full py-2 px-4 text-sm rounded-sm" name="password" required>
          </div>
          <div class="w-6/12">
            <label for="confirm_password" class="block mb-2 text-sm text-gray-900">
              Confirm Password <span class="text-red-900">*</span>
            </label>
            <input type="password" id="confirm_password" class="bg-gray-200 border-gray-200 w-full py-2 px-4 text-sm rounded-sm" name="confirm_password" required>
          </div>
        </div>
        <div class="w-full mb-3">
          <label for="" class="block mb-2 text-sm text-gray-900">
            Gender
          </label>
          <div class="flex flex-row gap-5">
            <div>
              <input type="radio" name="gender" id="male" value="Male">
              <label for=" male" class="text-sm text-gray-900">Male</label>
            </div>
            <div>
              <input type="radio" name="gender" id="female" value="Female">
              <label for="female" class="text-sm text-gray-900">Female</label>
            </div>
            <div>
              <input type="radio" name="gender" id="other" value="Other">
              <label for="other" class="text-sm text-gray-900">Other</label>
            </div>
          </div>
        </div>
        <div class="w-full mb-3">
          <label for="phone_number" class="block mb-2 text-sm text-gray-900">
            Phone Number
          </label>
          <input type="text" id="phone_number" class="bg-gray-200 border-gray-200 w-full py-2 px-4 text-sm rounded-sm" name="phone_number">
        </div>
        <div class="w-full mb-3">
          <label for="address" class="block mb-2 text-sm text-gray-900">
            Address
          </label>
          <textarea name="address" id="address" class="bg-gray-200 border-gray-200 w-full py-2 px-4 text-sm rounded-sm" rows="2"></textarea>
        </div>
        <div class="w-full mb-3">
          <div>
            <input type="checkbox" name="agree_terms" id="agree_terms">
            <label for="agree_terms" class="text-xs ml-2">
              Agree to Terms of Use and Privacy Policy
            </label>
          </div>
          <div>
            <input type="checkbox" name="send_mails" id="send_mails">
            <label for="send_mails" class="text-xs ml-2">
              Send me Termly news, feature updates, discounts, and offers
            </label>
          </div>
        </div>
        <?php if (isset($errors['password'])) : ?>
          <p class="text-red-500 text-xs mt-22"><?= $errors['password'] ?></p>
        <?php endif; ?>
        <?php if (isset($errors['email'])) : ?>
          <p class="text-red-500 text-xs mt-22"><?= $errors['email'] ?></p>
        <?php endif; ?>
        <div class="w-full flex justify-center mt-4">
          <a href="/" class="w-6/12 bg-gray-400 hover:bg-red-200 text-sm text-center text-black py-1 px-1 rounded-sm mr-2">Cancel</a>
          <button type="submit" class="w-6/12 bg-green-700 hover:bg-green-900 text-sm text-white py-1 px-1 rounded-sm">Register</button>
        </div>
        <p class="text-xs text-center mt-4 mb-2 text-gray-800">Already Account? <a href="/login" class="text-blue-800">Login Here</a></p>
      </form>
    </div>
  </div>
</section>

<?php require base_path('views/partials/footer.php'); ?>