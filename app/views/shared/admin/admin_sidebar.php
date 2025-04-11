<?php

$menuSidebar = [
    [
        "title" => "Dashboard",
        "icon" => '<svg width="32px" height="32px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0L0 6V8H1V15H4V10H7V15H15V8H16V6L14 4.5V1H11V2.25L8 0ZM9 10H12V13H9V10Z" fill="#cfcfcf"></path> </g></svg>',
        "link" => "index.php?controller=dashboard&action=index",
        "submenu" => []
    ],

    [
        "title" => "Product",
        "icon" => ' <svg width="32px" height="32px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <title></title>
                            <g fill="none" fill-rule="evenodd" id="页面-1" stroke="none" stroke-width="1">
                                <g id="导航图标" transform="translate(-325.000000, -80.000000)">
                                    <g id="编组" transform="translate(325.000000, 80.000000)">
                                        <polygon fill="#cfcfcf" fill-opacity="0.01" fill-rule="nonzero" id="路径" points="24 0 0 0 0 24 24 24"></polygon>
                                        <polygon id="路径" points="22 7 12 2 2 7 2 17 12 22 22 17" stroke="#cfcfcf" stroke-linejoin="round" stroke-width="1.5"></polygon>
                                        <line id="路径" stroke="#cfcfcf" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="2" x2="12" y1="7" y2="12"></line>
                                        <line id="路径" stroke="#cfcfcf" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="12" x2="12" y1="22" y2="12"></line>
                                        <line id="路径" stroke="#cfcfcf" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="22" x2="12" y1="7" y2="12"></line>
                                        <line id="路径" stroke="#cfcfcf" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="17" x2="7" y1="4.5" y2="9.5"></line>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>',
        "link" => "#",
        "submenu" => [
            [
                "title" => "List",
                "link" => "index.php?controller=product&action=index"
            ],
            [
                "title" => "Add",
                "link" => "index.php?controller=product&action=create"
            ]
        ]
    ],

    [
        "title" => "Post",
        "icon" => '<svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.5 15.6857L19.5 4.5H4.5V18.75L5.25 19.5L13.7205 19.5V19.5H15.2205V19.5H15.6857L19.5 15.6857ZM15.2205 17.8439L17.8437 15.2206H15.2205V17.8439ZM18 13.7206L18 6L6 6L6 18L13.7205 18V13.7206H18Z" fill="#cfcfcf"></path>
                        </g>
                    </svg>',
        "link" => "#",
        "submenu" => [
            [
                "title" => "List",
                "link" => "index.php?controller=post&action=index"
            ],
            [
                "title" => "Add",
                "link" => "index.php?controller=post&action=create"
            ]
        ]
    ],

    [
        "title" => "Chart",
        "icon" =>
        '<svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M3 14.6C3 14.0399 3 13.7599 3.10899 13.546C3.20487 13.3578 3.35785 13.2049 3.54601 13.109C3.75992 13 4.03995 13 4.6 13H5.4C5.96005 13 6.24008 13 6.45399 13.109C6.64215 13.2049 6.79513 13.3578 6.89101 13.546C7 13.7599 7 14.0399 7 14.6V19.4C7 19.9601 7 20.2401 6.89101 20.454C6.79513 20.6422 6.64215 20.7951 6.45399 20.891C6.24008 21 5.96005 21 5.4 21H4.6C4.03995 21 3.75992 21 3.54601 20.891C3.35785 20.7951 3.20487 20.6422 3.10899 20.454C3 20.2401 3 19.9601 3 19.4V14.6Z" stroke="#cfcfcf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M10 4.6C10 4.03995 10 3.75992 10.109 3.54601C10.2049 3.35785 10.3578 3.20487 10.546 3.10899C10.7599 3 11.0399 3 11.6 3H12.4C12.9601 3 13.2401 3 13.454 3.10899C13.6422 3.20487 13.7951 3.35785 13.891 3.54601C14 3.75992 14 4.03995 14 4.6V19.4C14 19.9601 14 20.2401 13.891 20.454C13.7951 20.6422 13.6422 20.7951 13.454 20.891C13.2401 21 12.9601 21 12.4 21H11.6C11.0399 21 10.7599 21 10.546 20.891C10.3578 20.7951 10.2049 20.6422 10.109 20.454C10 20.2401 10 19.9601 10 19.4V4.6Z" stroke="#cfcfcf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M17 10.6C17 10.0399 17 9.75992 17.109 9.54601C17.2049 9.35785 17.3578 9.20487 17.546 9.10899C17.7599 9 18.0399 9 18.6 9H19.4C19.9601 9 20.2401 9 20.454 9.10899C20.6422 9.20487 20.7951 9.35785 20.891 9.54601C21 9.75992 21 10.0399 21 10.6V19.4C21 19.9601 21 20.2401 20.891 20.454C20.7951 20.6422 20.6422 20.7951 20.454 20.891C20.2401 21 19.9601 21 19.4 21H18.6C18.0399 21 17.7599 21 17.546 20.891C17.3578 20.7951 17.2049 20.6422 17.109 20.454C17 20.2401 17 19.9601 17 19.4V10.6Z" stroke="#cfcfcf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>',
        "link" => "index.php?controller=chart&action=index",
        "submenu" => []
    ],

    [
        "title" => "Page",
        "icon" => '<svg width="32px" height="32px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M670.1 857.7H206.2c-27.6 0-50-22.4-50-50V331.1c0-27.6 22.4-50 50-50H670c27.6 0 50 22.4 50 50v476.6c0.1 27.7-22.3 50-49.9 50z" fill="#FFFFFF"></path><path d="M669 299.3H205.1c-16.5 0-30 13.5-30 30v75.9H699v-75.9c0-16.5-13.5-30-30-30z" fill="#E6E6E6"></path><path d="M859 159.3c-15.4-12.3-35.5-19-56.7-19H363.6c-21.2 0-41.4 6.8-56.7 19-16.4 13.1-25.9 31.7-25.9 51v49h-75.9c-38.6 0-70 31.4-70 70v476.6c0 38.6 31.4 70 70 70H669c38.6 0 70-31.4 70-70v-49h63.3c21.2 0 41.4-6.8 56.7-19 16.4-13.1 25.9-31.7 25.9-51V210.3c0-19.3-9.5-37.9-25.9-51zM699 405.2H175.1v-75.9c0-16.5 13.5-30 30-30H669c16.5 0 30 13.5 30 30v75.9z m0 400.7c0 16.5-13.5 30-30 30H205.1c-16.5 0-30-13.5-30-30V425.2H699v380.7z m145.9-119c0 16.3-19.5 30-42.6 30H739V329.3c0-38.6-31.4-70-70-70H321v-49c0-16.3 19.5-30 42.6-30h438.7c23.1 0 42.6 13.7 42.6 30v476.6z" fill="#cfcfcf"></path><path d="M537.3 369.2H393.1c-9.9 0-17.9-8-17.9-17.9 0-9.9 8-17.9 17.9-17.9h144.2c9.9 0 17.9 8 17.9 17.9 0 9.9-8 17.9-17.9 17.9z" fill="#FFFFFF"></path><path d="M320.4 802.3h-82.1c-16.6 0-30-13.4-30-30V454.4h112.1v347.9zM636.2 802.3H355V454.4h311.3v317.9c-0.1 16.6-13.5 30-30.1 30z" fill="#E6E6E6"></path><path d="M230.2 351.3m-18.7 0a18.7 18.7 0 1 0 37.4 0 18.7 18.7 0 1 0-37.4 0Z" fill="#FFFFFF"></path><path d="M290.6 351.3m-18.7 0a18.7 18.7 0 1 0 37.4 0 18.7 18.7 0 1 0-37.4 0Z" fill="#FFFFFF"></path><path d="M225.3 749.2c-2.4 0-4.7-0.8-6.6-2.5-4.1-3.7-4.5-10-0.8-14.1l120.8-136 121 34.4 191.7-132.3c4.5-3.1 10.8-2 13.9 2.5 3.1 4.5 2 10.8-2.5 13.9L463.2 652.7l-118-33.5-112.5 126.6c-1.9 2.2-4.7 3.4-7.4 3.4z" fill="#cfcfcf"></path><path d="M469.9 740.3L338.6 566.7l-123.2 51.8c-5.1 2.1-11-0.2-13.1-5.3-2.1-5.1 0.2-11 5.3-13.1l137.5-57.9 124 164.1L638 463.6c3.2-4.5 9.4-5.7 13.9-2.5s5.7 9.4 2.5 13.9L469.9 740.3z" fill="#E6E6E6"></path></g></svg>',
        "link" => "#",
        "submenu" => [
            [
                "title" => "List",
                "link" => "index.php?controller=page&action=index"
            ],
            [
                "title" => "Add",
                "link" => "index.php?controller=page&action=create"
            ]
        ]
    ],
    [

        "title" => "Setting",
        "icon" => '<svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0175 19C10.6601 19 10.3552 18.7347 10.297 18.373C10.2434 18.0804 10.038 17.8413 9.76171 17.75C9.53658 17.6707 9.31645 17.5772 9.10261 17.47C8.84815 17.3365 8.54289 17.3565 8.30701 17.522C8.02156 17.7325 7.62943 17.6999 7.38076 17.445L6.41356 16.453C6.15326 16.186 6.11944 15.7651 6.33361 15.458C6.49878 15.2105 6.52257 14.8914 6.39601 14.621C6.31262 14.4332 6.23906 14.2409 6.17566 14.045C6.08485 13.7363 5.8342 13.5051 5.52533 13.445C5.15287 13.384 4.8779 13.0559 4.87501 12.669V11.428C4.87303 10.9821 5.18705 10.6007 5.61601 10.528C5.94143 10.4645 6.21316 10.2359 6.33751 9.921C6.37456 9.83233 6.41356 9.74433 6.45451 9.657C6.61989 9.33044 6.59705 8.93711 6.39503 8.633C6.1424 8.27288 6.18119 7.77809 6.48668 7.464L7.19746 6.735C7.54802 6.37532 8.1009 6.32877 8.50396 6.625L8.52638 6.641C8.82735 6.84876 9.21033 6.88639 9.54428 6.741C9.90155 6.60911 10.1649 6.29424 10.2375 5.912L10.2473 5.878C10.3275 5.37197 10.7536 5.00021 11.2535 5H12.1115C12.6248 4.99976 13.0629 5.38057 13.1469 5.9L13.1625 5.97C13.2314 6.33617 13.4811 6.63922 13.8216 6.77C14.1498 6.91447 14.5272 6.87674 14.822 6.67L14.8707 6.634C15.2842 6.32834 15.8528 6.37535 16.2133 6.745L16.8675 7.417C17.1954 7.75516 17.2366 8.28693 16.965 8.674C16.7522 8.99752 16.7251 9.41325 16.8938 9.763L16.9358 9.863C17.0724 10.2045 17.3681 10.452 17.7216 10.521C18.1837 10.5983 18.5235 11.0069 18.525 11.487V12.6C18.5249 13.0234 18.2263 13.3846 17.8191 13.454C17.4842 13.5199 17.2114 13.7686 17.1083 14.102C17.0628 14.2353 17.0121 14.3687 16.9562 14.502C16.8261 14.795 16.855 15.1364 17.0323 15.402C17.2662 15.7358 17.2299 16.1943 16.9465 16.485L16.0388 17.417C15.7792 17.6832 15.3698 17.7175 15.0716 17.498C14.8226 17.3235 14.5001 17.3043 14.2331 17.448C14.0428 17.5447 13.8475 17.6305 13.6481 17.705C13.3692 17.8037 13.1636 18.0485 13.1099 18.346C13.053 18.7203 12.7401 18.9972 12.3708 19H11.0175Z" stroke="#cfcfcf" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9747 12C13.9747 13.2885 12.9563 14.333 11.7 14.333C10.4437 14.333 9.42533 13.2885 9.42533 12C9.42533 10.7115 10.4437 9.66699 11.7 9.66699C12.9563 9.66699 13.9747 10.7115 13.9747 12Z" stroke="#cfcfcf" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>',
        "link" => "index.php?controller=setting&action=index",
        "submenu" => []
    ],
    [
        "title" => "Calender",
        "icon" => '<svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 10H17M7 14H12M7 3V5M17 3V5M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z" stroke="#cfcfcf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>',
        "link" => "",
        "submenu" => []
    ]

];

?>

<div id="sidebar-menu" class="pl-5 pr-4 py-4 flex flex-col gap-5 basis-[18%] bg-white shadow-sm border-r border-gray-200 text-lg">
    <?php foreach ($menuSidebar as $item) { ?>
        <li class="menu-item flex flex-col cursor-pointer">
            <div class="menu-header flex items-center gap-2 hover:bg-gray-200 rounded-md duration-200 transition-all py-1">
                <?php if (empty($item['submenu'])) { ?>
                    <a class="flex items-center gap-2 w-full" href="<?php echo $item['link']; ?>">
                        <span>
                            <?php echo $item['icon']; ?>
                        </span>
                        <p class="text-sidebar text-[15px]"><?php echo $item['title']; ?></p>
                    </a>
                <?php } else { ?>
                    <a class="flex items-center justify-between w-full" href="<?php echo $item['link']; ?>">
                        <div class="flex items-center gap-2">
                            <span>
                                <?php echo $item['icon']; ?>
                            </span>
                            <p class="text-sidebar text-[15px]"><?php echo $item['title']; ?></p>
                        </div>
                        <span class="submenu-toggle pr-2">
                            <svg width="21px" height="21px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 9L12 15L18 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                <?php } ?>
            </div>

            <?php if (!empty($item['submenu'])) { ?>
                <ul class="submenu px-3 mt-1">
                    <?php foreach ($item['submenu'] as $subItem) { ?>
                        <li class="submenu-item py-1 hover:bg-gray-200 rounded-md">
                            <a href="<?php echo $subItem['link']; ?>" class="text-[14px] text-gray-600 flex items-center">
                                <span>
                                    <svg width="45px" height="45px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M12 9.5C13.3807 9.5 14.5 10.6193 14.5 12C14.5 13.3807 13.3807 14.5 12 14.5C10.6193 14.5 9.5 13.3807 9.5 12C9.5 10.6193 10.6193 9.5 12 9.5Z" fill="#000000"></path>
                                        </g>
                                    </svg>
                                </span>
                                <p class="ml-[-3px]">
                                    <?php echo $subItem['title']; ?>
                                </p>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </li>
    <?php } ?>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuItems = document.querySelectorAll("#sidebar-menu .menu-item");
        const subMenuItems = document.querySelectorAll(".menu-item .sub-menu .submenu-item");
        const activeTexts = document.querySelectorAll(".text-sidebar");
        const submenuToggles = document.querySelectorAll(".submenu-toggle");

        // if (menuItems.length > 0) {
        //     menuItems.forEach(item => {
        //         item.addEventListener("click", function(e) {
        //             const header = this.querySelector('.menu-header');
        //             if (header && header.contains(e.target)) {
        //                 menuItems.forEach(el => el.classList.remove("active"));
        //                 this.classList.add("active");
        //                 header.classList.remove("hover:bg-gray-200");
        //             }
        //         });
        //     });
        // }

        if (subMenuItems.length > 0) {
            subMenuItems.forEach(item => {
                item.addEventListener("click", function(e) {
                    const header = this.querySelector('.menu-header');
                    if (header && header.contains(e.target)) {
                        subMenuItems.forEach(el => el.classList.remove("active-submenu"));
                        this.classList.add("active-submenu");
                        header.classList.remove("hover:bg-gray-200");
                    }
                });
            });
        }

        if (submenuToggles && submenuToggles.length > 0) {
            submenuToggles.forEach(toggle => {
                toggle.addEventListener("click", function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    const menuItem = this.closest('.menu-item');
                    const submenu = menuItem.querySelector('.submenu');

                    if (submenu) {
                        submenu.classList.toggle('hidden');

                        // Rotate arrow when expanded
                        if (submenu.classList.contains('hidden')) {
                            this.innerHTML = '<svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 9L12 15L18 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                        } else {
                            this.innerHTML = '<svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 15L12 9L6 15" stroke="#black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                        }
                    }
                });
            });
        }

        // if (activeTexts && activeTexts.length > 0) {
        //     console.log("Tìm thấy", activeTexts.length, "phần tử .text-sidebar");

        //     activeTexts.forEach((item, index) => {
        //         if (!(item instanceof Element)) {
        //             console.warn(`Phần tử thứ ${index} không hợp lệ`, item);
        //             return;
        //         }

        //         console.log(`Gắn sự kiện click cho phần tử thứ ${index}`, item);

        //         item.addEventListener("click", function() {
        //             console.log(`✅ Đã click vào phần tử thứ ${index}`, this);

        //             activeTexts.forEach(el => {
        //                 el.classList.remove("font-semibold");
        //             });

        //             this.classList.add("font-semibold");
        //         });
        //     });
        // } else {
        //     console.warn("❌ Không tìm thấy phần tử nào có class .text-sidebar");
        // }
    });
</script>