<?php
$config = include __DIR__ . ('/../../../config/config.php');
$base_url = $config['app']['base_url'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $base_url . 'css/styles.css' ?>">
    <link rel="stylesheet" href="<?php echo $base_url . 'css/admin/main_admin.css' ?>">
</head>

<body>

    <div id="header" class="px-9 py-2 border-b border-gray-200">
        <div class="flex items-center justify-between">
            <div>
                <img src="<?php echo $base_url . 'images/brand-logo.png' ?>" alt="">
            </div>
            <div class="basis-1/3">
                <input type="text" placeholder="Search product..." class="outline-none w-full border border-gray-400 px-5 py-3 rounded-3xl">
            </div>
            <div class="flex gap-3 items-center">
                <div class="flex flex-col">
                    <p>Thanh Vinh</p>
                    <p class="text-sm text-gray-500">Create Website</p>
                </div>
                <div class="">
                    <img class="w-[45px] h-auto rounded-full object-cover" src="<?php echo $base_url . 'images/admin.jpg' ?>" alt="">
                </div>
                <div>
                    <span>
                        <svg width="30px" height="30px" viewBox="0 -4.5 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>arrow_down [#338]</title>
                                <desc>Created with Sketch.</desc>
                                <defs> </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-220.000000, -6684.000000)" fill="#000000">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path d="M164.292308,6524.36583 L164.292308,6524.36583 C163.902564,6524.77071 163.902564,6525.42619 164.292308,6525.83004 L172.555873,6534.39267 C173.33636,6535.20244 174.602528,6535.20244 175.383014,6534.39267 L183.70754,6525.76791 C184.093286,6525.36716 184.098283,6524.71997 183.717533,6524.31405 C183.328789,6523.89985 182.68821,6523.89467 182.29347,6524.30266 L174.676479,6532.19636 C174.285736,6532.60124 173.653152,6532.60124 173.262409,6532.19636 L165.705379,6524.36583 C165.315635,6523.96094 164.683051,6523.96094 164.292308,6524.36583" id="arrow_down-[#338]"> </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>