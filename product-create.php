<?php include_once("./template/header.php"); ?>
<?php include_once("./template/sidebar.php"); ?>

<section class="bg-gray-100 p-6 rounded-lg">
    <h3 class="my-5 text-blue-400 text-3xl font-bold font-serif">Create Product</h3>

    <form action="./product-save.php" method="post" enctype="multipart/form-data">
        <div class="mb-5">
            <label for="product_name" class="block text-sm font-medium mb-2 dark:text-white">Product Name</label>
            <input required type="text" id="product_name" name="product_name" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="your product">
        </div>

        <div class="mb-5">
            <label for="product_price" class="block text-sm font-medium mb-2 dark:text-white">Product Price</label>
            <input required type="number" name="product_price" id="product_price" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="product price">
        </div>

        <div class="mb-5">
            <label for="" class="block text-sm font-medium mb-2 dark:text-white">Rating</label>
            <select required name="rating" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                <option selected="">Open this rating menu</option>

                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <option value="<?= $i; ?>">
                        <?= $i; ?>
                    </option>
                <?php endfor; ?>
            </select>
        </div>

        <div class="mb-10">
            <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Product Image</label>
            <div>
                <label class="block">
                    <span class="sr-only">Choose photo</span>
                    <input required type="file" name="product_image" class="block w-full text-sm text-gray-500
                        file:me-4 file:py-2 file:px-4
                        file:rounded-lg file:border-0
                        file:text-sm file:font-semibold
                        file:bg-blue-600 file:text-white
                        hover:file:bg-blue-700
                        file:disabled:opacity-50 file:disabled:pointer-events-none
                        dark:file:bg-blue-500
                        dark:hover:file:bg-blue-400
                        ">
                </label>
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Save Product
            </button>
        </div>
    </form>

</section>
<?php include_once("./template/footer.php"); ?>