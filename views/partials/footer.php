        <?php include('footer-section.php') ?>
        <div class="w-full text-center py-2 bg-gray-800">
            <p class="text-sm text-white">
                2023@Copy Right from Hazel@
            </p>
        </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
        <script src="/js/data_tables/jquery.dataTables.min.js"></script>
        <script src="/js/summer-note/summernote.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#data_table').DataTable();

                $('#form').validate();
            });
        </script>
        </body>

        </html>