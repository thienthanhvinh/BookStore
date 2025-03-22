<?php
$config = include __DIR__ . ('/../../../config/config.php');
$base_url = $config['app']['base_url'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="<?php echo $base_url . 'css/styles.css' ?>">
</head>

<body>
    <div class="category-container ml-[30%] mt-[10%]">
        <h2 class="text-3xl font-semibold mb-5">Add Category</h2>
        <form action="" method="POST">
            <div class="flex flex-col gap-4 w-[400px]">
                <div class="flex flex-col gap-1">
                    <label for="">Category Name</label>
                    <input type="text" name="categoryName" class="border border-gray-300 outline-none px-4 py-2 rounded-2xl">
                </div>
               
                <div class="flex flex-col gap-1">
                    <label for="">Slug</label>
                    <input type="text" name="slug" class="border border-gray-300 outline-none px-4 py-2 rounded-2xl">
                </div>
                <button type="submit" name="createCategoryButton" class="mt-1 bg-mainColor px-4 py-2 w-[50%] rounded-2xl text-white">Add Category</button>
            </div>
        </form>
    </div>

</body>

</html>