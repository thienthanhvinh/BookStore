<?php
include __DIR__ . "/../../views/shared/header.php";
?>

<div class="mt-14 flex gap-16">
    <div class="basis-[65%]">
        <h2 class="text-3xl mb-5">A Universe of Words: The Impact of Science Fiction on Popular Culture</h2>
        <div class="flex items-center gap-4">
            <p class="bg-orange-200 px-2 py-3 text-orange-400 w-[200px] rounded-3xl text-lg text-center">Business & Economics</p>
            <div class="flex gap-2 text-lg">
                <div class="flex gap-2">
                    <p>Malisa John</p>
                </div>
                <div>|</div>
                <div class="flex gap-2">
                    <p>08 Aug, 2023</p>
                </div>
            </div>

        </div>
        <div class="h-[400px] mt-6">
            <img class="w-full rounded-2xl object-cover h-full" src="<?php echo $base_url ?>/images/detai_book.png" alt="">
        </div>
        <p class="text-gray-500 text-xl mt-6 text-justify">Lorem ipsum dolor sit amet consectetur. Arcu cras dictum malesuada tincidunt vulputate orci in turpis ante. Convallis non condimentum eget amet orci orci sit arcu. Ut nunc nam imperdiet gravida. Pulvinar congue vivamus pulvinar vel. Pulvinar diam mattis elit elementum eget fames. Viverra etiam volutpat congue. Lorem ipsum dolor sit amet consectetur. Arcu cras dictum malesuada tincidunt vulputate orci in turpis ante. Convallis non condimentum eget amet orci orci sit arcu. Ut nunc nam imperdiet gravida. Pulvinar congue vivamus pulvinar vel. Pulvinar diam mattis elit elementum eget fames. Viverra etiam volutpat congue.</p>
    </div>

    <div class="basis-[35%]">
        <p class="mb-5 text-2xl">Search</p>
        <div class="relative">
            <input type="text" class="border border-gray-400 rounded-[30px] px-5 py-4 w-full" placeholder="Find the books...">
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
        <h2 class="border border-gray-200 mt-12"></h2>
        <h2 class="text-2xl mt-8 mb-8">Categories</h2>
        <div class="flex flex-col gap-5 mt-8">
            <div class="flex gap-2">
                <input type="checkbox">
                <p class="text-xl">Fiction</p>
            </div>
            <div class="flex gap-2">
                <input type="checkbox">
                <p class="text-xl">Non-Fiction</p>
            </div>
            <div class="flex gap-2">
                <input type="checkbox">
                <p class="text-xl">Romance</p>
            </div>
            <div class="flex gap-2">
                <input type="checkbox">
                <p class="text-xl">Biography</p>
            </div>
        </div>
        <h2 class="border border-gray-200 mt-12"></h2>
        <h2 class="mt-10 text-2xl mb-5">Tags</h2>
        <div class="flex items-center gap-3">
            <p class="text-orange-400 bg-orange-200 px-6 py-2 rounded-3xl text-lg">Fiction</p>
            <p class="text-green-400 bg-green-200 px-6 py-2 rounded-3xl text-lg">Philosophy</p>
            <p class="text-blue-400 bg-blue-200 px-6 py-2 rounded-3xl text-lg">Mystery</p>
        </div>
        <h2 class="border border-gray-200 mt-12"></h2>
        <p class="mb-5 text-2xl mt-7">Recent Article</p>
        <div class="flex flex-col gap-8">
            <div class="flex gap-4 bg-gray-100 rouned-xl py-4 px-4">
                <div class="basis-[35%] h-[100px]">
                    <img class="object-cover w-full h-full rounded-xl" src="<?php echo $base_url ?>/images/detai_book.png" alt="">
                </div>
                <div class="basis-[65%]">
                    <p class="text-lg">Exploring Historical Fiction's Allure...</p>
                    <a href="" class="text-orange-400 text-lg font-semibold">Read More</a>
                </div>
            </div>
            <div class="flex gap-4 bg-gray-100 rouned-xl py-4 px-4">
                <div class="basis-[35%] h-[100px]">
                    <img class="object-cover w-full h-full rounded-xl" src="<?php echo $base_url ?>/images/detai_book.png" alt="">
                </div>
                <div class="basis-[65%]">
                    <p class="text-lg">Exploring Historical Fiction's Allure...</p>
                    <a href="" class="text-orange-400 text-lg font-semibold">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="review-product mt-24 flex gap-14">
    <div class="basis-2/3">
        <h2 class="text-[34px] text-productName font-semibold mb-7">3 Comments</h2>
        <div class="flex flex-col gap-16">
            <div class="flex gap-5 items-center">
                <div class="w-[95px] h-[75px]">
                    <img class="w-full h-full object-cover rounded-xl" src="<?php echo $base_url . 'images/nguongmo.jpg' ?>" alt="">
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-productAuthor font-semibold">23, July 2023</p>
                    <p class="text-productName font-semibold text-lg">Isabella Garcia</p>
                    <p class="text-gray-500 text-justify text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil quis ab laudantium aperiam dolorem reprehenderit animi, pariatur nemo distinctio id?</p>
                </div>
            </div>
        </div>

    </div>
    <div class="basis-1/3">
        <h2 class="text-[34px] text-productName font-semibold mb-3">Leave a Review</h2>
        <div class="flex flex-col gap-3 justify-center">
            <div class="flex flex-col">
                <h2 class="text-xl m-0 p-0">Rating</h2>
                <span class="star flex items-center">
                    <svg width="26px" height="26px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill="#ffc107" d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </span>
            </div>
            <textarea class="border border-gray-300 outline-none rounded-xl px-2 py-2" rows="8" name="" id=""></textarea>
            <button type="submit" class="text-white text-lg px-4 py-2 bg-mainColor w-[42%] rounded-3xl">Submit Review</button>
        </div>
    </div>
</div>


<?php
include __DIR__ . "/../../views/shared/footer.php";
?>