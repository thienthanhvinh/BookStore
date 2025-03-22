<?php
$config = include __DIR__ . ('/../../../config/config.php');
$base_url = $config['app']['base_url'];
include __DIR__ . "/../../../helpers/utils.php";

?>

<!-- layout header -->
<?php include __DIR__ . '/../../shared/admin/admin_header.php' ?>
<title><?php echo $title ?></title>



<div class="flex">

    <!-- layout sidebar -->
    <?php include __DIR__ . '/../../shared/admin/admin_sidebar.php' ?>

    <!-- layout page -->
    <div class="bg-gray-100 basis-[82%] px-9 py-10">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="add-product-container bg-[#fff] py-5 px-8 rounded-xl">

                <!-- Display notification When Add Successfully -->
                <?php if ($message = getFlashMessage('success')): ?>
                    <div class="success bg-green-300 ml-auto text-green-600 w-[20%] text-lg rounded-lg py-2 text-center"><?php echo $message; ?></div>
                <?php endif; ?>

                <h3 class="text-3xl font-semibold text-center">Add New Post</h3>
                <div class="flex items-center gap-2 text-lg mt-5">
                    <a href="">Dashboard ></a>
                    <a href="" class="text-blue-500">Posts</a>
                </div>

                <div class="flex justify-center gap-12 bg-[#fff] mt-3">

                    <div class="basis-1/2 rounded-xl py-3">

                        <div class="flex flex-col gap-3">
                            <div class="flex flex-col gap-2">
                                <label for="name">
                                    Title
                                </label>
                                <input type="text" name="postTitle" class="border border-gray-300 outline-none rounded-2xl px-5 py-2">
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="name">
                                    Author
                                </label>
                                <input type="text" name="postAuthor" class="border border-gray-300 outline-none rounded-2xl px-5 py-2">
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="name">
                                    Description
                                </label>
                                <textarea name="postDes" class="border border-gray-300 outline-none rounded-2xl px-5 py-2 h-[150px]"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="basis-1/2 rounded-xl py-3">
                        <div class="flex flex-col gap-3">
                            <div class="flex flex-col gap-2">
                                <label for="name">
                                    Detail
                                </label>
                                <textarea name="postDetail" class="border border-gray-300 outline-none rounded-2xl px-5 py-2 h-[250px]"></textarea>
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="name">
                                    Image
                                </label>
                                <input type="file" name="postImage" class="border border-gray-300 outline-none rounded-2xl px-5 py-2">
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="name">
                                    Category
                                </label>
                                <?php if (!empty($postCategoriesOption)) { ?>
                                    <select name="postCategory" id="" class="border border-gray-300 outline-none rounded-2xl px-4 py-2">

                                        <?php foreach ($postCategoriesOption as $category) { ?>

                                            <option value="<?php echo $category['category_id'] ?>"><?php echo $category['name'] ?></option>

                                        <?php } ?>

                                    </select>
                                <?php } ?>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="flex justify-center mt-6">
                    <button class="bg-mainColor hover:bg-orange-400 duration-500 transition-all rounded-2xl px-5 py-3 text-center text-white text-lg mt-4c w-[90%]" type="submit" name="addPostButton">Add Post
                    </button>
                </div>
            </div>
        </form>
    </div>

</div>

<script>
    setTimeout(function() {
        let alert = document.querySelector(".success");
        if (alert) {
            alert.style.display = "none";
        }
    }, 5000);
</script>