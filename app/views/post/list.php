<?php
include  __DIR__ . '/../../views/shared/header.php';
?>

<div class="blog-header flex gap-24 items-center justify-center mt-20 px-24 py-10 bg-gray-100">
    <div class="flex flex-col gap-1 basis-[60%]">
        <h2 class="text-[60px] font-semibold">Blogs</h2>
        <p class="text-lg text-productAuthor">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat eligendi animi accusantium expedita mollitia deleniti, quod velit aperiam, non soluta quidem veritatis exercitationem eos quasi?</p>
    </div>
    <div class="flex items-center gap-6 basis-[40%]">
        <img class="h-[230px] rounded-xl" src="<?php echo $base_url . 'images/banner4.png' ?>" alt="">
        <img class="rounded-xl" src="<?php echo $base_url . 'images/banner3.png' ?>" alt="">
        <img class="h-[230px] rounded-xl" src="<?php echo $base_url . 'images/banner4.png' ?>" alt="">
    </div>
</div>

<div class="search-box flex justify-center mt-14">
    <div class="flex gap-6 text-gray-500 items-center border border-gray-300 rounded-3xl px-3 py-2 w-[800px] relative">
        <div class="flex">
            <select name="" id="">
                <option value="">All Categories</option>
                <option value="">Hornor Books</option>
            </select>
        </div>
        <div class="h-[35px] w-[1px] border-r border-gray-300"></div>
        <div class="">
            <input class="text-gray-500 w-[530px] absolute right-[70px] top-[14px] border-none outline-none" type="text" placeholder="Find the book you like...">
            <button type="submit" class="absolute right-3 top-2">
                <svg width="40px" height="40px" style="background-color: #FA9A41; color: white; border-radius: 50px; padding: 5px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </button>
        </div>
    </div>
</div>


<div class="list-post flex mt-10 gap-8">
    <?php if ($listPost) {  ?>
        <?php foreach ($listPost as $post) { ?>
            <div class="bg-mainProduct rounded-2xl px-8 py-8 basis-1/3 flex flex-col gap-2">
                <a href="" class="h-[280px]">
                    <img class="w-full h-full object-cover rounded-2xl" src="<?php echo $base_url ?>/uploads/images/<?php echo $post['post_image'] ?>" alt="">
                </a>
                <div class="flex items-center justify-between text-lg text-gray-600 mt-2">
                    <p><?php echo $post['post_author'] ?></p>
                    <!-- <p class="border border-l border-red-700 h-[15px]"></p> -->
                    <p><?php echo $post['created_at'] ?></p>
                </div>
                <div class="text-xl font-semibold">
                    <a href="" class="line-clamp-2"><?php echo $post['post_title'] ?></a>
                </div>
                <div>
                    <a href="" class="bg-mainColor hover:bg-orange-400 text-lg mt-2 inline-block text-white px-5 py-3 rounded-3xl">Read More</a>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
</div>

<?php
include __DIR__ . '/../../views/shared/footer.php';
?>