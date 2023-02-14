<div class="flex items-center">
  <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
    <li>
      <a href="/" class="<?= urlIs('/') ? 'bg-gray-900 text-white p-2 rounded-lg' : ''; ?> hover:text-lime-300 hover:no-underline text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
    </li>
    <li>
      <a href="/notes" class="<?= urlIs('/notes') ? 'bg-gray-900 text-white p-2 rounded-lg' : ''; ?> hover:text-lime-300 hover:no-underline text-gray-900 dark:text-white hover:underline">Notes</a>
    </li>
    <li>
      <a href="/contact" class="<?= urlIs('/contact') ? 'bg-gray-900 text-white p-2 rounded-lg' : ''; ?> hover:text-lime-300 hover:no-underline text-gray-900 dark:text-white hover:underline">Contact</a>
    </li>
    <li>
      <a href="/about" class="<?= urlIs('/about') ? 'bg-gray-900 text-white p-2 rounded-lg' : ''; ?> hover:text-lime-300 hover:no-underline text-gray-900 dark:text-white hover:underline">About</a>
    </li>
  </ul>
</div>