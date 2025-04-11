<?php
$config = include __DIR__ . ('/../../../config/config.php');
$base_url = $config['app']['base_url'];

?>

<!-- layout header -->
<?php include __DIR__ . '/../../shared/admin/admin_header.php' ?>

<div class="flex">

    <!-- layout sidebar -->
    <?php include __DIR__ . '/../../shared/admin/admin_sidebar.php' ?>

    <!-- layout page -->
    <div class="bg-gray-100 basis-[82%] px-9 py-10">
        <div class="add-product-container bg-[#fff] py-5 px-8 rounded-xl">
            <h3 class="text-3xl font-semibold text-center">Add Category</h3>
            <div class="flex items-center gap-2 text-lg mt-5">
                <a href="">Dashboard ></a>
                <a href="" class="text-blue-500">Products</a>
            </div>

            <div class="flex justify-center gap-12 bg-[#fff] mt-3">

                <div class="basis-1/2 rounded-xl py-3">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="flex flex-col gap-3">
                            <div class="flex flex-col gap-2">
                                <label for="name">
                                    Name
                                </label>
                                <input type="text" name="productName" class="border border-gray-300 outline-none rounded-2xl px-5 py-2">
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="name">
                                    Slug
                                </label>
                                <input type="text" name="productAuthor" class="border border-gray-300 outline-none rounded-2xl px-5 py-2">
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="name">
                                    Description
                                </label>
                                <input type="text" name="productAuthor" class="border border-gray-300 outline-none rounded-2xl px-5 py-2">
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="name">
                                    Icon
                                </label>
                                <input type="file">
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="name">
                                    Status
                                </label>
                                <div class="w-[23%] relative">
                                    <div class="rounded-3xl py-5 border border-gray-300"></div>
                                    <div class="rounded-full bg-gray-400 w-9 h-9 absolute top-1 -translate-y-[1px] left-[2px]"></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-center mt-6">
                            <button class="bg-mainColor hover:bg-orange-400 duration-500 transition-all rounded-2xl px-5 py-3 text-center text-white text-lg mt-4c w-[90%]" type="submit" name="addProductButton">Add Category
                            </button>
                        </div>
                </div>

                </form>
            </div>

        </div>
    </div>

</div>

</body>

</html>