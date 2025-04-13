<div class="subscribe-section mt-32 relative h-[330px]">
    <img class="w-full h-full object-cover" src="<?php echo $base_url . 'images/newslatter.png' ?>" alt="">
    <div class="absolute flex flex-col top-11 right-[50%] translate-x-1/2 text-center">
        <h3 class="text-mainColor text-[55px]">10% Off Await!</h3>
        <h3 class="text-[45px] tracking-wide font-semibold">Subscribe to our Newsletter.</h3>
        <input type="text" class="bg-white rounded-[32px] px-6 py-4 w-[100%] outline-none" placeholder="Your Email">

    </div>
</div>

<div class="footer mt-20 bg-white py-6">
    <div class="flex justify-around">
        <div class=" flex flex-col gap-3">
            <h4 class="text-[25px]">Books</h4>
            <div class="flex flex-col gap-2">
                <p>Whispers of Wisdom</p>
                <p>Adventures Beyond</p>
                <p>Treasure Island</p>
                <p>War and Peace</p>
            </div>
        </div>
        <div class=" flex flex-col gap-3">
            <h4 class="text-[25px]">Contact us</h4>
            <div class="flex flex-col gap-2">
                <p>123 Street, Da nang, Vietnam.</p>
                <p>145 Street, Da Nang, Vietnam.</p>
                <p>thanhvinh@gmail.com</p>
            </div>
        </div>
        <div class=" flex flex-col gap-3 basis-1/5">
            <div class="">
                <img src="<?php echo $base_url . 'images/brand-logo.png' ?>" alt="">
            </div>
            <p class="text-lg tracking-tight text-justify">Lorem ipsum dolor sit amet consectetur. vulputate augue penatibus in libero.</p>
            <p class="text-mainColor text-2xl tracking-widest">+84369988747</p>
        </div>

        <div class=" flex flex-col gap-3">
            <h4 class="text-[25px]">Menu</h4>
            <div class="flex flex-col gap-2">
                <a>Home</a>
                <a>About Us</a>
                <a>Shop</a>
                <a>Blogs</a>
            </div>
        </div>

        <div class=" flex flex-col gap-3">
            <h4 class="text-[25px]">Your Account</h4>
            <div class="flex flex-col gap-2">
                <a>New Account</a>
                <a>Login</a>
                <a>Register</a>
                <a>Cart</a>
            </div>
        </div>
    </div>

    <div class="mt-20 flex flex-col gap-10">
        <h4 class="border border-gray-200"></h4>
        <p class="text-center text-lg">©2024 Book Store All Rights Reserved.</p>
    </div>
</div>

<script src="<?php echo $base_url . 'js/app.js' ?>"></script>
<script src="<?php echo $base_url . 'js/search.js' ?>"></script>
<script>
    window.addEventListener('load', function() {
        const loadingScreen = document.getElementById('loading-screen');
        const mainContent = document.getElementById('main-container');

        if (loadingScreen) {
            // Làm mờ và disable pointer
            loadingScreen.classList.add('opacity-0', 'pointer-events-none');
            setTimeout(() => {
                loadingScreen.classList.add('hidden');
                // Hiện nội dung trang
                if (mainContent) {
                    mainContent.classList.remove('hidden', 'opacity-0');
                    mainContent.classList.add('opacity-100', 'transition-opacity', 'duration-500');
                }
            }, 15000); // delay 500ms để animation mượt
        }

        // Animate X
        function animateElementX(id, delay, translateXRemove, translateXAdd) {
            const el = document.getElementById(id);
            setTimeout(() => {
                if (el) {
                    // el.classList.remove('opacity-0', '-translate-x-10');
                    // el.classList.add('opacity-100', 'translate-x-0');

                    el.classList.remove('opacity-0', translateXRemove);
                    el.classList.add('opacity-100', translateXAdd);

                }
            }, delay);
        }

        animateElementX('animated-text', 600, '-translate-x-10', 'translate-x-0');
        animateElementX('animated-image', 800, '-translate-x-10', 'translate-x-0');
        animateElementX('animated-lorem', 900, '-translate-x-10', 'translate-x-0');
        animateElementX('animated-shop', 800, '-translate-x-10', 'translate-x-0');
        animateElementX('animated-deal-right', 800, 'translate-x-10', 'translate-x-0');

        // Animate Y
        function animateElementY(className, delay, timeRunCard) {
            const els = document.querySelectorAll(className);
            if (els.length > 0) {
                const observer = new IntersectionObserver(
                    (entries, observer) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                setTimeout(() => {
                                    entry.target.classList.remove('opacity-0', '-translate-y-10');
                                    entry.target.classList.add('opacity-100', 'translate-y-0');
                                    observer.unobserve(entry.target);
                                }, delay);
                            }
                        });
                    }, {
                        threshold: timeRunCard
                    }
                );
                els.forEach(el => observer.observe(el));
            }
        }

        animateElementY('.product-card', 350, 0.2);
        animateElementY('.arrival-book', 450, 0.1);

        // Animate Array X (Use ForEach) 
        function animateArrayX(className, delay, timeRunCard) {
            const els = document.querySelectorAll(className);
            if (els.length > 0) {
                const observer = new IntersectionObserver(
                    (entries, observer) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                setTimeout(() => {
                                    entry.target.classList.remove('opacity-0', '-translate-x-10');
                                    entry.target.classList.add('opacity-100', 'translate-x-0');
                                    observer.unobserve(entry.target);
                                }, delay);
                            }
                        });
                    }, {
                        threshold: timeRunCard
                    }
                );
                els.forEach(el => observer.observe(el));
            }
        }

        animateArrayX('.deal-week', 300, 0.1);

        // Animate Array Y (Use ForEach)
        function animateArrayY(className, delay, timeRunCard) {
            const els = document.querySelectorAll(className);
            if (els.length > 0) {
                const observer = new IntersectionObserver(
                    (entries, observer) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                setTimeout(() => {
                                    entry.target.classList.remove('opacity-0', '-translate-y-10');
                                    entry.target.classList.add('opacity-100', 'translate-y-0');
                                    observer.unobserve(entry.target);
                                }, delay);
                            }
                        });
                    }, {
                        threshold: timeRunCard
                    }
                );
                els.forEach(el => observer.observe(el));
            }
        }

        animateArrayY('.latest-blog', 600, 0.3);

    })
</script>

</div>