<?php include __DIR__ . "/../../views/shared/header.php" ?>;

<div class="banner-section">
    <div class="px-[100px]">
        <div class="flex items-center relative">
            <div class="basis-1/2">
                <!-- <div class="w-[55px] h-[55px] border-4 border-green-500 border-r-transparent border-l-transparent rounded-full animate-spin-slow"></div> -->


                <h3 id="animated-text" class="opacity-0 -translate-x-10 transition-all duration-700 text-[60px] font-semibold leading-[120%] tracking-[-1.22px]">Find Your Favorite Books</h3>

                <p id="animated-lorem" class="text-[#7A7F85] mt-4 text-justify opacity-0 -translate-x-10 transition-all duration-700">Lorem ipsum dolor sit amet consectetur. Viverra velit nibh
                    diam nulla sagittis congue. Faucibus rhoncus lobortis.
                </p>

                <a href="" id="animated-shop" class="inline-block mt-9 bg-mainColor text-white text-center text-[17px] font-semibold px-10 py-3 rounded-3xl opacity-0 -translate-x-10 transition-all duration-800">Shop Now</a>
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

        <div class="flex gap-8 justify-center items-center">
            <?php if (!empty($trendingProducts)) { ?>
                <?php foreach ($trendingProducts as $product) { ?>
                    <div class="BookContainerInfor product-card basis-1/4 bg-white shadow-md rounded-3xl py-6 px-4 group relative border border-gray-200 overflow-hidden hover:shadow-lg opacity-0 -translate-y-10 transition-all duration-700">

                        <!-- Relative Image Product -->
                        <div class="relative group">
                            <div class="w-full h-[260px] px-4">
                                <a href="index.php?controller=product&action=detail&id=<?php echo $product['product_id'] ?>">
                                    <img class="w-full h-full object-cover rounded-xl transform group-hover:scale-105 transition-transform duration-500" src="<?php echo $base_url ?>/uploads/images/<?php echo $product['product_image'] ?>" alt="" loading="lazy">
                                </a>
                            </div>

                            <!-- Absolute Item -->
                            <div class="function-section flex flex-col gap-3 absolute right-8 -top-[5px] translate-x-12 opacity-0 group-hover:opacity-100 group-hover:translate-x-6 transition-all duration-500 ease-out">
                                <a href="" class="bg-[#F8F8F8] hover:bg-mainColor transition-all duration-300 shadow-lg rounded-full w-[38px] h-[38px] flex items-center justify-center p-[8px]">
                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M15.7 4C18.87 4 21 6.98 21 9.76C21 15.39 12.16 20 12 20C11.84 20 3 15.39 3 9.76C3 6.98 5.13 4 8.3 4C10.12 4 11.31 4.91 12 5.71C12.69 4.91 13.88 4 15.7 4Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </a>
                                <a href="" class="bg-[#F8F8F8] hover:bg-mainColor transition-all duration-300 shadow-lg rounded-full w-[38px] h-[38px] flex items-center justify-center p-[8px]">
                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </a>
                                <a href="" class="bg-[#F8F8F8]  hover:bg-mainColor transition-all duration-300 shadow-lg rounded-full w-[38px] h-[38px] flex items-center justify-center p-[8px]">
                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z" fill="#1C274C"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z" fill="#1C274C"></path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="flex flex-col text-center mt-1">
                            <a href="" class="title text-[21px] text-productName font-semibold mt-3 tracking-wider hover:underline "><?php echo $product['product_name'] ?></a>
                            <span class="star flex items-center justify-center">
                                <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill="#ffc107" d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </span>
                            <p class="author text-lg text-gray-500 mt-1 mb-3"><?php echo $product['product_author'] ?></p>
                            <div class="price flex items-center justify-center gap-2">
                                <p class="price text-[21px]"><?php echo $product['price'] ?></p>
                                <span class="text-productAuthor line-through"><?php echo $product['discount_price'] ?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>

    </div>
    <div class="new-arrivals mt-16">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-4xl">New Arrivals</h2>
            <a href="" class="bg-mainColor py-3 px-8 text-white rounded-3xl">VIEW ALL</a>
        </div>
        <?php if (!empty($newProduct)) { ?>
            <div class="flex items-center gap-11">
                <?php foreach ($newProduct as $product) { ?>
                    <div class="arrival-book bg-mainProduct shadow-mainShadow rounded-3xl px-6 py-7 basis-1/3 group relative border border-gray-200 overflow-hidden hover:shadow-lg opacity-0 -translate-y-10 transition-all duration-700">
                        <div class="w-full h-[400px]">
                            <a href="">
                                <img class="w-full h-full object-cover rounded-xl" src="<?php echo $base_url ?>/uploads/images/<?php echo $product['product_image'] ?>" alt="" loading="lazy">
                            </a>

                        </div>
                        <div class="flex flex-col mt-3">
                            <h3 class="text-2xl text-productName font-semibold tracking-wider"><?php echo $product['product_name'] ?></h3>
                            <span class="star flex items-center my-1">
                                <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill="#ffc107" d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                                <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill="#ffc107" d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                                <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill="#ffc107" d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </span>
                            <p class="mt-2 mb-1 text-lg text-productAuthor"><?php echo $product['product_author'] ?></p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <p class="text-xl"><?php echo $product['price'] ?></p>
                                    <span class="text-gray-400 line-through"><?php echo $product['discount_price'] ?></span>
                                </div>
                                <a href="" class="flex gap-2 items-center px-6 py-2 text-white bg-mainColor rounded-3xl hover:bg-[#e67e22] transition-all duration-300 text-center">
                                    <span>
                                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M21 5L19 12H7.37671M20 16H8L6 3H3M16 5.5H13.5M13.5 5.5H11M13.5 5.5V8M13.5 5.5V3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <p>Add To Cart</p>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
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
    <div class="flex items-center gap-9">
        <?php if (!empty($listPost)) { ?>
            <?php foreach ($listPost as $post) { ?>
                <div class="latest-blog -translate-y-10 opacity-0 transition-all duration-700 bg-gray-200 shadow-2xl rounded-2xl basis-1/3 py-8 px-9">
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
    </div>
</div>

<?php include __DIR__ . "/../../views/shared/footer.php" ?>;
</div>
</body>

</html>