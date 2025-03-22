<?php
$config = include __DIR__ . "/../../config/config.php";
$base_url = $config['app']['base_url'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="<?php echo $base_url . ('css/styles.css') ?>">
    <link rel="stylesheet" href="<?php echo $base_url . ('css/main.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="px-16 py-8">
        <div class="flex justify-between items-center">
            <div class="w-[170px] h-auto mb-4">
                <img src="<?php echo $base_url . ('images/brand-logo.png') ?>" alt="" class="w-full h-auto object-cover">
            </div>
            <?php if (!empty($message['successfully'])) { ?>
                <div class="bg-green-200 py-2 px-5 rounded-md flex gap-1 items-center" role="alert">
                    <span class="w-[30px]">
                        <svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#0000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill="#2ecc71" d="M512 64a448 448 0 1 1 0 896 448 448 0 0 1 0-896zm-55.808 536.384-99.52-99.584a38.4 38.4 0 1 0-54.336 54.336l126.72 126.72a38.272 38.272 0 0 0 54.336 0l262.4-262.464a38.4 38.4 0 1 0-54.272-54.336L456.192 600.384z"></path>
                            </g>
                        </svg>
                    </span>
                    <p class="text-green-600 text-[15px]"><?php echo $message['successfully'] ?>. Redirecting to Login Page</p>
                </div>
                <script>
                    setTimeout(function() {
                        window.location.href = "index.php?controller=user&action=login";
                    }, 3000);
                </script>
            <?php } ?>

            <?php if (!empty($message['error'])) { ?>
                <div class="bg-red-300 py-2 px-5 rounded-md flex gap-2 items-center" role="alert">
                    <span class="">
                        <svg width="30px" height="30px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M7.493 0.015 C 7.442 0.021,7.268 0.039,7.107 0.055 C 5.234 0.242,3.347 1.208,2.071 2.634 C 0.660 4.211,-0.057 6.168,0.009 8.253 C 0.124 11.854,2.599 14.903,6.110 15.771 C 8.169 16.280,10.433 15.917,12.227 14.791 C 14.017 13.666,15.270 11.933,15.771 9.887 C 15.943 9.186,15.983 8.829,15.983 8.000 C 15.983 7.171,15.943 6.814,15.771 6.113 C 14.979 2.878,12.315 0.498,9.000 0.064 C 8.716 0.027,7.683 -0.006,7.493 0.015 M8.853 1.563 C 9.967 1.707,11.010 2.136,11.944 2.834 C 12.273 3.080,12.920 3.727,13.166 4.056 C 13.727 4.807,14.142 5.690,14.330 6.535 C 14.544 7.500,14.544 8.500,14.330 9.465 C 13.916 11.326,12.605 12.978,10.867 13.828 C 10.239 14.135,9.591 14.336,8.880 14.444 C 8.456 14.509,7.544 14.509,7.120 14.444 C 5.172 14.148,3.528 13.085,2.493 11.451 C 2.279 11.114,1.999 10.526,1.859 10.119 C 1.618 9.422,1.514 8.781,1.514 8.000 C 1.514 6.961,1.715 6.075,2.160 5.160 C 2.500 4.462,2.846 3.980,3.413 3.413 C 3.980 2.846,4.462 2.500,5.160 2.160 C 6.313 1.599,7.567 1.397,8.853 1.563 M7.706 4.290 C 7.482 4.363,7.355 4.491,7.293 4.705 C 7.257 4.827,7.253 5.106,7.259 6.816 C 7.267 8.786,7.267 8.787,7.325 8.896 C 7.398 9.033,7.538 9.157,7.671 9.204 C 7.803 9.250,8.197 9.250,8.329 9.204 C 8.462 9.157,8.602 9.033,8.675 8.896 C 8.733 8.787,8.733 8.786,8.741 6.816 C 8.749 4.664,8.749 4.662,8.596 4.481 C 8.472 4.333,8.339 4.284,8.040 4.276 C 7.893 4.272,7.743 4.278,7.706 4.290 M7.786 10.530 C 7.597 10.592,7.410 10.753,7.319 10.932 C 7.249 11.072,7.237 11.325,7.294 11.495 C 7.388 11.780,7.697 12.000,8.000 12.000 C 8.303 12.000,8.612 11.780,8.706 11.495 C 8.763 11.325,8.751 11.072,8.681 10.932 C 8.616 10.804,8.460 10.646,8.333 10.580 C 8.217 10.520,7.904 10.491,7.786 10.530 " stroke="none" fill-rule="evenodd" fill="red"></path>
                            </g>
                        </svg>
                    </span>
                    <p class="text-red-500 text-[15px]"><?php echo $message['error'] ?></p>
                </div>

            <?php } ?>

        </div>

        <div class="flex min-h-[88vh] justify-center items-center gap-10">
            <div class="bg-formBackground shadow-md shadow-gray-300 w-[630px] rounded-xl px-[30px] py-[20px] h-[610px]">
                <form action="" method="POST">
                    <h2 class="text-3xl text-gray-800 text-center font-semibold mt-2">Create an account</h2>
                    <div class="mt-5 flex gap-5 h-[50px]">
                        <div class="py-2 text-center border border-gray-500 text-[17px] rounded-3xl w-[50%]">
                            <a href="" class=" flex items-center justify-center gap-2 hover:text-mainColor transition-colors duration-200">
                                <img src="<?php echo $base_url . ('images/iconGoogle.png') ?>" alt="" class="w-[35px] h-auto object-contain">
                                <p>Sign up with Google</p>
                            </a>
                        </div>
                        <div class="py-2 text-center border border-gray-500 text-[17px] rounded-3xl w-[50%] ">
                            <a href="" class=" flex items-center justify-center gap-2 hover:text-mainColor transition-colors duration-200">
                                <img src="<?php echo $base_url . 'images/iconFacebook.png' ?>" alt="" class="w-[35px] h-auto object-contain">
                                <p>Sign up with Facebook</p>
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center mt-4 gap-2">
                        <div class="border border-l border-gray-300 flex-grow"></div>
                        <span class="">Or</span>
                        <div class="border border-r border-gray-300 flex-grow"></div>
                    </div>
                    <p class="text-center mt-1">Sign up with your email address</p>
                    <div class="mt-5 flex flex-col gap-5">
                        <div class="flex gap-5">
                            <div class="flex flex-col basis-1/2 gap-1">
                                <input type="text" id="firstName" class="px-4 py-3 rounded-[40px] border border-gray-500 outline-none  bg-formBackground text-black text-lg" placeholder="First Name" name="firstName">
                                <span id="firstNameMessage" class="text-sm ml-3"></span>
                            </div>
                            <div class="flex flex-col basis-1/2 gap-1">
                                <input type="text" id="lastName" class="px-4 py-3 rounded-[40px] border border-gray-500 outline-none bg-formBackground text-black text-lg" placeholder="Last Name" name="lastName">
                                <span id="lastNameMessage" class="text-sm ml-3"></span>
                            </div>
                        </div>

                        <div class="flex flex-col gap-1">
                            <input type="email" id="email" class=" text-black text-lg px-4 py-3 border border-gray-500 outline-none bg-formBackground rounded-[40px] w-full" placeholder="Email" name="email">
                            <span id="emailMessage" class="text-sm ml-3"></span>
                        </div>

                        <div>
                            <input type="text" id="password" class=" text-black text-lg px-4 py-3 border border-gray-500 outline-none bg-formBackground rounded-[40px] w-full" placeholder="Password" name="password">
                            <span id="passwordMessage" class="text-sm ml-3"></span>
                        </div>

                    </div>
                    <button type="submit" name="registerButton" class="text-white text-center py-3 rounded-[40px] bg-mainColor hover:bg-orange-400 transition-all duration-200 border w-full text-bold text-lg mt-5">Create Account</button>
                    <div class="text-right mt-4">
                        <p class="inline-block">Already have an account?</p>
                        <a href="index.php?controller=user&action=login" class="text-mainColor font-semibold hover:underline">Log in</a>
                    </div>
                </form>
                <button type="button" class="bg-green-400 text-white rounded-xl text-lg mt-3 add-cartt" data-id = "100">Add To Cart</button>

            </div>
            <div class="bg-formBackground shadow-md shadow-gray-300 w-[630px] rounded-xl px-[15px] py-[15px] h-[610px]">
                <img src="<?php echo $base_url . '/images/sign-up.png' ?>" class="w-full h-full object-contain" alt="">
            </div>
        </div>
    </div>
</body>
<script src="<?php echo $base_url . ('js/app.js') ?>"></script>

</html>