<?php include __DIR__ . "/../../views/shared/header.php" ?>

<div class="banner-section">

    <div class="bubble-container">
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
    </div>

    <div class="px-[100px]">
        <div class="flex items-center relative">
            <div class="basis-1/2">
                <!-- <div class="w-[55px] h-[55px] border-4 border-green-500 border-r-transparent border-l-transparent rounded-full animate-spin-slow"></div> -->


                <h3 id="animated-text" class="opacity-0 -translate-x-10 transition-all duration-700 text-[60px] font-semibold leading-[120%] tracking-[-1.22px]">Find Your Favorite Books</h3>

                <p id="animated-lorem" class="text-[#7A7F85] mt-4 text-justify opacity-0 -translate-x-10 transition-all duration-700">Lorem ipsum dolor sit amet consectetur. Viverra velit nibh
                    diam nulla sagittis congue. Faucibus rhoncus lobortis.
                </p>

                <a href="index.php?controller=product&action=index" id="animated-shop" class="inline-block mt-9 bg-mainColor text-white text-center text-[17px] font-semibold px-10 py-3 rounded-3xl opacity-0 -translate-x-10 transition-all duration-800">Shop Now</a>
            </div>
            <div id="animated-image" class="flex items-center basis-2/3 ml-[220px] gap-7 opacity-0 transition-all duration-700 translate-x-10" style="margin-top: 60px !important;">
                <img src="<?php echo $base_url . 'images/banner-2.png' ?>" alt="" loading="lazy">
                <div>
                    <img src="<?php echo $base_url . 'images/banner-1.png' ?>" alt="" loading="lazy" class="relative">
                    <div class="sale bg-mainColor text-white w-[150px] h-[150px] rounded-full py-10 text-[28px] font-semibold text-center leading-[1.1] absolute top-4 translate-x-[-50%]">50% Discount</div>
                </div>
            </div>
            <div class="absolute bottom-14 right-[45%] flex items-center gap-3">
                <div class="flex items-center gap-3">
                    <p class="text-[17px]">Our Community</p>
                    <div class="flex items-center">
                        <img src="<?php echo $base_url . 'images/com-2.png' ?>" alt="" loading="lazy">
                        <img src="<?php echo $base_url . 'images/com-1.png' ?>" alt="">
                        <img src="<?php echo $base_url . 'images/com-2.png' ?>" alt="">
                        <img src="<?php echo $base_url . 'images/com-1.png' ?>" alt="">
                    </div>
                </div>
                <h2 class="text-mainColor text-[26px] font-semibold">20K+ Books Download</h2>
            </div>
        </div>
    </div>
</div>

<div class="benefits-section flex items-center justify-around bg-[#F3F3F7] shadow-lg rounded-xl w-full px-7 py-3">
    <div class="flex items-center gap-3 text-[21px]">
        <span>
            <img src="<?php echo $base_url . 'images/return.png' ?>" alt="">
        </span>
        <p>Easy Return</p>
    </div>

    <div class="flex items-center gap-3 text-[21px]">
        <span>
            <img src="<?php echo $base_url . 'images/delivery.png' ?>" alt="">

        </span>
        <p>Free Delivery</p>
    </div>
    <div class="flex items-center gap-3 text-[21px]">
        <span>
            <img src="<?php echo $base_url . 'images/pricing.png' ?>" alt="">

        </span>
        <p>Best Price and Offer</p>
    </div>
    <div class="flex items-center gap-3 text-[21px]">
        <span>
            <img src="<?php echo $base_url . 'images/deals.png' ?>" alt="">

        </span>
        <p>Great Daily Deal</p>
    </div>
</div>

<div class="product-section mt-16">
    <div class="trending-books">
        <h2 class="mb-8 text-4xl">Trending Books</h2>

        <div id="trending-books-container" class="grid grid-cols-4 gap-7 -translate-y-10 transition-all duration-700">

        </div>

    </div>
    <div class="new-arrivals mt-16">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-4xl">New Arrivals</h2>
            <a href="" class="bg-mainColor py-3 px-8 text-white rounded-3xl">VIEW ALL</a>
        </div>

        <div id="new-arrivals-container" class="grid grid-cols-3 gap-10 items-center opacity-0 -translate-y-10 transition-all duration-700"></div>

    </div>
    <div class="deal-week">
        <h2 class="mt-14 text-3xl">Deal of This Week</h2>
        <div class="flex mt-8 gap-11">

            <div id="deal-week-container" class="flex flex-wrap items-center basis-2/3 gap-4 h-[640px] flex-1 opacity-0 -translate-x-10 transition-all duration-700"></div>

            <div id="animated-deal-right" class="basis-1/3 flex rounded-3xl flex-col gap-3 opacity-0 translate-x-10 transition-all duration-700" style="background: radial-gradient(109.98% 137.68% at 97.16% 0%, #A1E9FF 0%, #7389FF 39.41%, #081F73 100%);">

                <div class="w-full px-2 pt-8 text-white text-center">
                    <p class="text-3xl mb-2 tracking-widest font-semibold">30% OFF</p>
                    <p class="text-xl mb-4 w-full">For all books on websites</p>
                    <a href="" class="bg-slate-200 text-black rounded-3xl py-2 px-6 hover:bg-slate-400 hover:opacity-90 transition-all duration-300">Shop Now</a>
                    <p class="mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam iure praesentium vel, atque deserunt voluptas</p>
                </div>

                <div class="h-full">
                    <img class="w-full h-full rounded-3xl object-cover" src="<?php echo $base_url . 'images/group-img.png' ?>" alt="" loading="lazy">
                </div>

            </div>
        </div>
    </div>
</div>
<div class="blog-section">
    <h2 class="text-3xl mt-10 mb-9">Our Latest Blogs</h2>
    <div id="latest-blogs-container" class="flex items-center gap-9 opacity-0 -translate-y-10 transition-all duration-700">
    </div>
</div>

<?php include __DIR__ . "/../../views/shared/footer.php" ?>;
</div>
</body>

</html>