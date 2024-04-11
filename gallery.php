<?php include_once("./template/header.php") ?>
<?php include_once("./template/sidebar.php") ?>

<section class="bg-gray-100 p-10 rounded-lg">
    <form enctype="multipart/form-data" method="post" action="./gallery-process.php">
        <label for="file-input" class="sr-only">Choose file</label>
        <input type="file" name="upload[]" multiple id="file-input" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600
         file:bg-gray-50 file:border-0
        file:me-4
        file:py-3 file:px-4
         dark:file:bg-gray-700 dark:file:text-gray-400">

        <button type="submit" class="mt-5 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            Upload
        </button>
    </form>

    <hr class="mt-3">

</section>

<?php

$photos = array_filter(scandir("photos"), fn ($el) => $el != "." && $el != "..");

// print_r($photos);
?>

<section class="columns-3 mt-5 gap-3">
    <?php foreach ($photos as $photo) : ?>
        <div class="inline-block relative group">
            <img src="photos/<?= $photo; ?>" alt="photo" class="mb-3 rounded-lg">
            <a onClick="return confirm('Are you sure to delete?')" href="./gallery-photo-delete.php?photo_name=<?= $photo ?>" class=" bg-red-300 text-white px-2 py-1 hidden pointer-events-none absolute bottom-10 right-5 rounded-lg group-hover:inline-flex group-hover:pointer-events-auto group-hover:transition-all">
                Delete
            </a>
        </div>
    <?php endforeach; ?>
</section>
<?php include_once("./template/footer.php") ?>