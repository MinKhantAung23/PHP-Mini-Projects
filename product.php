<?php include_once("./template/header.php"); ?>
<?php include_once("./template/sidebar.php"); ?>

<section class="py-6">
    <div class="flex justify-end mb-5">
        <a href="./product-create.php" type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
            Create Product
        </a>
    </div>
    <div class="flex flex-col bg-gray-50 p-5 rounded-lg">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Image</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Product Name</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Price</th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Rating</th>

                                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            <?php

                            $productFolder = "products";
                            $products = array_filter(scandir("products"), fn ($el) => $el != "." && $el != "..");
                            foreach ($products as $product) :
                                $data = file_get_contents($productFolder . "/" . $product);
                                $productObj = json_decode($data);
                            ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <img class="w-12 h-12 object-cover object-center rounded" src="<?= $productObj->product_photo ?>" alt="">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                        <?= $productObj->product_name ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        <?= $productObj->product_price ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">

                                        <div class="flex gap-3">
                                            <?php for ($i = 1; $i <= 5; $i++) : ?>

                                                <svg class="w-4 h-4 <?= $i <= $productObj->rating ? "fill-yellow-500" : "fill-gray-300"; ?>" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                                </svg>

                                            <?php endfor; ?>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a onClick="return confirm('confirm to delete')" href="./product-delete.php?file_name=<?= $product ?>" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">
                                            Delete
                                        </a>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once("./template/footer.php"); ?>