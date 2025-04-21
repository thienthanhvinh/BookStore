<?php
$config = include __DIR__ . '/../../config/config.php';
$base_url = $config['app']['base_url'];
?>

<?php if (!empty($listPost)) { ?>
    <?php foreach ($listPost as $post) { ?>
        <div class="latest-blog bg-gray-200 shadow-2xl rounded-2xl basis-1/3 py-8 px-9">
            <div>
                <img class="rounded-xl" src="<?php echo $base_url . 'images/blog-1.png' ?>" alt="" loading="lazy">
            </div>
            <div class="flex flex-col gap-1 mt-5">
                <div class="flex gap-4 text-gray-400 text-xl">
                    <p>Malisa John</p>
                    <p>08 Aug, 2023</p>
                </div>
                <a href="" class="text-2xl tracking-wider mb-3">The Future of Reading: Navigating eBooks and Digital Literature</a>
                <a href="" class="py-2 bg-mainColor text-white rounded-3xl text-lg w-[35%] text-center">Read More</a>
            </div>
        </div>
<?php }
} ?>