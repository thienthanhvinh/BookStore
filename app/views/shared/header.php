<?php
$config = include __DIR__ . '/../../config/config.php';
$base_url = $config['app']['base_url'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="<?php echo $base_url . 'css/styles.css'; ?>">
    <link rel="stylesheet" href="<?php echo $base_url . 'css/tailwind.css'; ?>">
    <link rel="stylesheet" href="<?php echo $base_url . 'css/main.css'; ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div id="loading-screen" class="fixed bg-white flex justify-center items-center z-[9999] inset-0 transition-opacity duration-500">
        <div class="logo-loader flex justify-center items-center flex-col-reverse gap-6">
            <p class="uppercase text-2xl font-semibold text-[#0984e3] tracking-wider">Open First, then develop</p>
            <div class="loading-spin">
                <svg class="animate-spin-slower" height="60px" width="60px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <style type="text/css">
                            .st0 {
                                fill: #1b91da;
                            }
                        </style>
                        <g>
                            <path class="st0" d="M256,0c-23.357,0-42.297,18.932-42.297,42.288c0,23.358,18.94,42.288,42.297,42.288 c23.357,0,42.279-18.93,42.279-42.288C298.279,18.932,279.357,0,256,0z"></path>
                            <path class="st0" d="M256,427.424c-23.357,0-42.297,18.931-42.297,42.288C213.703,493.07,232.643,512,256,512 c23.357,0,42.279-18.93,42.279-42.288C298.279,446.355,279.357,427.424,256,427.424z"></path>
                            <path class="st0" d="M74.974,74.983c-16.52,16.511-16.52,43.286,0,59.806c16.52,16.52,43.287,16.52,59.806,0 c16.52-16.511,16.52-43.286,0-59.806C118.261,58.463,91.494,58.463,74.974,74.983z"></path>
                            <path class="st0" d="M377.203,377.211c-16.503,16.52-16.503,43.296,0,59.815c16.519,16.52,43.304,16.52,59.806,0 c16.52-16.51,16.52-43.295,0-59.815C420.489,360.692,393.722,360.7,377.203,377.211z"></path>
                            <path class="st0" d="M84.567,256c0.018-23.348-18.922-42.279-42.279-42.279c-23.357-0.009-42.297,18.932-42.279,42.288 c-0.018,23.348,18.904,42.279,42.279,42.279C65.645,298.288,84.567,279.358,84.567,256z"></path>
                            <path class="st0" d="M469.712,213.712c-23.357,0-42.279,18.941-42.297,42.288c0,23.358,18.94,42.288,42.297,42.297 c23.357,0,42.297-18.94,42.279-42.297C512.009,232.652,493.069,213.712,469.712,213.712z"></path>
                            <path class="st0" d="M74.991,377.22c-16.519,16.511-16.519,43.296,0,59.806c16.503,16.52,43.27,16.52,59.789,0 c16.52-16.519,16.52-43.295,0-59.815C118.278,360.692,91.511,360.692,74.991,377.22z"></path>
                            <path class="st0" d="M437.026,134.798c16.52-16.52,16.52-43.304,0-59.824c-16.519-16.511-43.304-16.52-59.823,0 c-16.52,16.52-16.503,43.295,0,59.815C393.722,151.309,420.507,151.309,437.026,134.798z"></path>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </div>

    <div id="main-container">
        <div id="header">
            <div class="flex items-center justify-between flex-wrap">
                <div class="">
                    <a href="index.php?controller=home&action=index" class="">
                        <img src="<?php echo $base_url . 'images/brand-logo.png'; ?>" alt="">
                    </a>

                </div>
                <div class="basis-[550px] relative flex flex-col items-center">
                    <input type="text" name="search" id="searchHeader"
                        class="px-7 py-3 outline-none border border-gray-300 rounded-3xl w-full inline-block" placeholder="Find the book you like...">

                    <div class="shadow-xl rounded-xl w-[95%] h-auto flex flex-col gap-4 px-3 py-3" id="searchHeaderResults"></div>

                    <button type="submit" style="position: absolute; right:8px; top: 5px">
                        <svg width="40px" height="40px" style="background-color: #FA9A41; color: white; border-radius: 50px; padding: 5px"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                                    stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </button>
                </div>
                <div class="flex items-center gap-4">
                    <a href="">
                        <svg width="35px" height="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 6.00019C10.2006 3.90317 7.19377 3.2551 4.93923 5.17534C2.68468 7.09558 2.36727 10.3061 4.13778 12.5772C5.60984 14.4654 10.0648 18.4479 11.5249 19.7369C11.6882 19.8811 11.7699 19.9532 11.8652 19.9815C11.9483 20.0062 12.0393 20.0062 12.1225 19.9815C12.2178 19.9532 12.2994 19.8811 12.4628 19.7369C13.9229 18.4479 18.3778 14.4654 19.8499 12.5772C21.6204 10.3061 21.3417 7.07538 19.0484 5.17534C16.7551 3.2753 13.7994 3.90317 12 6.00019Z"
                                    stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </a>
                    <a href="">
                        <svg width="35px" height="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                    stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </a>

                    <?php if (isset($_SESSION['email'])) { ?>
                        <div class="hidden">
                            <a href="index.php?controller=user&action=login" class="text-mainColor font-bold text-lg cursor-pointer">Login</a>
                            <a href="" class="text-lg">Register</a>
                        </div>
                        <!-- Wrapper -->
                        <div class="relative inline-block text-left">
                            <!-- SVG icon, dùng button để dễ quản lý accessibility -->
                            <button onclick="toggleDropdown()" class="focus:outline-none">
                                <svg width="30px" height="30px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>profile_round [#1342]</title>
                                        <desc>Created with Sketch.</desc>
                                        <defs> </defs>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -2159.000000)" fill="#000000">
                                                <g id="icons" transform="translate(56.000000, 160.000000)">
                                                    <path d="M100.562548,2016.99998 L87.4381713,2016.99998 C86.7317804,2016.99998 86.2101535,2016.30298 86.4765813,2015.66198 C87.7127655,2012.69798 90.6169306,2010.99998 93.9998492,2010.99998 C97.3837885,2010.99998 100.287954,2012.69798 101.524138,2015.66198 C101.790566,2016.30298 101.268939,2016.99998 100.562548,2016.99998 M89.9166645,2004.99998 C89.9166645,2002.79398 91.7489936,2000.99998 93.9998492,2000.99998 C96.2517256,2000.99998 98.0830339,2002.79398 98.0830339,2004.99998 C98.0830339,2007.20598 96.2517256,2008.99998 93.9998492,2008.99998 C91.7489936,2008.99998 89.9166645,2007.20598 89.9166645,2004.99998 M103.955674,2016.63598 C103.213556,2013.27698 100.892265,2010.79798 97.837022,2009.67298 C99.4560048,2008.39598 100.400241,2006.33098 100.053171,2004.06998 C99.6509769,2001.44698 97.4235996,1999.34798 94.7348224,1999.04198 C91.0232075,1998.61898 87.8750721,2001.44898 87.8750721,2004.99998 C87.8750721,2006.88998 88.7692896,2008.57398 90.1636971,2009.67298 C87.1074334,2010.79798 84.7871636,2013.27698 84.044024,2016.63598 C83.7745338,2017.85698 84.7789973,2018.99998 86.0539717,2018.99998 L101.945727,2018.99998 C103.221722,2018.99998 104.226185,2017.85698 103.955674,2016.63598" id="profile_round-[#1342]"> </path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </button>

                            <!-- Dropdown -->
                            <div id="dropdownContent" class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-md z-50">
                                <p class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 cursor-pointer">
                                    <a href="index.php?controller=user&action=profile">Thông tin người dùng</a>
                                </p>
                                <p class="block px-4 py-2 text-sm text-red-600 hover:bg-red-100 cursor-pointer">
                                    <a href="index.php?controller=user&action=logout">Đăng xuất</a>
                                </p>
                            </div>
                        </div>
                    <?php } else { ?>
                        <a href="index.php?controller=user&action=login" class="text-mainColor font-bold text-lg cursor-pointer">Login</a>
                        <a href="" class="text-lg">Register</a>
                    <?php } ?>
                </div>
            </div>

            <div class="menu flex items-center gap-5 justify-center text-xl list-none mt-5">
                <li class="hover:text-mainColor transition-all">
                    <a href="index.php?controller=home&action=index" class="flex items-center">
                        Home
                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M7 10L12 15L17 10" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="hover:text-mainColor transition-all">
                    <a href="index.php?controller=product&action=index" class="flex items-center">
                        Shop
                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M7 10L12 15L17 10" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="hover:text-mainColor transition-all">
                    <a href="index.php?controller=post&action=index" class="flex items-center">
                        Blog
                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M7 10L12 15L17 10" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </a>
                </li>
                <li class="relative group hover:text-mainColor transition-all">
                    <div class="flex items-center cursor-pointer">
                        Pages
                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 10L12 15L17 10" stroke="#000000" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <!-- Menu con -->
                    <ul
                        class="absolute top-full -left-3 mt-2 bg-white shadow-md rounded-lg w-40 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-40 text-sm text-gray-500">
                        <li><a href="index.php?controller=page&action=about" class="block px-4 py-2 hover:bg-gray-100 hover:text-mainColor duration-300 transition-all">ABOUT US</a></li>
                        <li><a href="index.php?controller=page&action=contact" class="block px-4 py-2 hover:bg-gray-100 hover:text-mainColor duration-300 transition-all">CONTACT US</a></li>
                    </ul>
                </li>

            </div>
        </div>


        