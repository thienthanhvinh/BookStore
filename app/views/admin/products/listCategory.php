<?php

$config = include __DIR__ . '/../../../config/config.php';
$base_url = $config['app']['base_url'];
?>

<!-- layout header -->
<?php include __DIR__ . '/../../shared/admin/admin_header.php' ?>
<title><?php echo $title ?></title>

<div class="flex">
    <?php include __DIR__ . '/../../shared/admin/admin_sidebar.php' ?>
    <div class="bg-gray-100 basis-[82%] px-9 py-10">
        <div class="add-product-container bg-[#fff] py-5 px-8 rounded-xl">
            <h3 class="text-2xl font-semibold text-gray-600">Product Categories</h3>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2 text-lg mt-5">
                    <a href="">Products ></a>
                    <a href="" class="text-blue-500">Category</a>
                </div>
                <a href="" class="flex items-center gap-2 text-white bg-mainColor hover:bg-orange-500 px-4 py-2 cursor-pointer rounded-lg">
                    Add Category
                    <span>
                        <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <circle cx="12" cy="12" r="10" stroke="#fff" stroke-width="1.5"></circle>
                                <path d="M15 12L12 12M12 12L9 12M12 12L12 9M12 12L12 15" stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                            </g>
                        </svg>
                    </span>
                </a>
            </div>

            <div class="mt-2">
                <div class="flex items-center gap-5">
                    <div class="flex items-center gap-2">
                        <p>All</p>
                        <span class="bg-gray-700 text-white rounded-lg px-2 py-1">12</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <p>Active</p>
                        <span class="bg-yellow-400 text-yellow-600 rounded-lg px-2 py-1">3</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <p>Inactive</p>
                        <span class="bg-red-300 text-red-600 rounded-lg px-2 py-1">9</span>
                    </div>
                </div>

                <div class="search-container mt-5 flex items-center gap-6">
                    <div class="basis-[80%]">
                        <input type="text" class="border border-gray-300 rounded-lg w-full px-4 py-2 outline-none" placeholder="Search by name, email or phone">
                        <div class="relative">
                            <button class="absolute top-0 right-3 -translate-y-9">
                                <span class="">
                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#4d4d4d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="basis-[20%] flex items-center gap-6">
                        <div class="flex gap-3">
                            <button class="flex gap-2 items-center justify-center px-4 py-1 rounded-lg bg-red-600 text-white">
                                <p>Clear</p>
                                <span>
                                    <svg width="30px" height="30px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="black" stroke="black">
                                        <g id="SVGRepo_bgCarrier" stroke-whiteidth="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M864.453 386.372H604.968V135.834c0-39.533-32.049-71.582-71.582-71.582h-35.791c-39.533 0-71.582 32.049-71.582 71.582v250.538H166.527c-34.592 0-62.634 28.042-62.634 62.634 0 30.327 21.556 55.617 50.181 61.392L85.997 833.761c0 49.417 35.791 90.596 89.478 89.478 53.687-1.118 85.893-53.687 156.91-53.687 172.801 0 397.852 53.687 397.852 53.687 49.417 0 89.478-40.061 89.478-89.478l68.827-326.927c22.634-9.439 38.547-31.772 38.547-57.828-0.001-34.591-28.043-62.634-62.636-62.634zM461.803 153.73c0-29.651 24.036-53.687 53.687-53.687 29.651 0 53.687 24.036 53.687 53.687v232.642H461.803V153.73z m319.456 662.753c-11.092 41.902-31.537 70.965-70.44 70.965 0 0-197.096-49.497-355.544-53.438l41.811-142.707c2.779-9.485-2.658-19.427-12.142-22.207-9.485-2.777-19.426 2.658-22.205 12.142l-45.103 153.939c-55.562 8.478-102.763 52.27-142.161 52.27-43.62 0-67.243-33.993-53.687-70.965 13.556-36.974 74.247-305.459 74.247-305.459l641.576 0.617c-0.001 0.001-45.261 262.941-56.352 304.843z m83.194-340.633H166.527c-14.825 0-26.843-12.019-26.843-26.843 0-14.825 12.019-26.843 26.843-26.843h697.927c14.825 0 26.843 12.019 26.843 26.843s-12.019 26.843-26.844 26.843z" fill="white"></path>
                                        </g>
                                    </svg>
                                </span>
                            </button>

                            <button class="flex gap-2 items-center justify-center px-4 py-1 rounded-lg bg-orange-500 text-white">
                                <p>Export</p>
                                <span>
                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path d="M12 20C7.58172 20 4 16.4183 4 12M20 12C20 14.5264 18.8289 16.7792 17 18.2454" stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                            <path d="M12 14L12 4M12 4L15 7M12 4L9 7" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <style>
                .table-product {
                    width: 100%;
                    border-radius: 20px;
                }

                .table-product thead th {
                    color: #353b48;
                    padding: 20px 15px;
                    background-color: #ecf0f1;
                }

                .table-product tbody td {
                    color: #747d8c;
                    padding: 15px 15px 20px 15px;
                    text-align: center;
                    border-bottom: 1px solid #dfe6e9;
                }
            </style>

            <table class="table-product shadow-mainShadow mt-9">
                <thead>
                    <tr>
                        <th><input type="checkbox" class="w-4 h-4"></th>
                        <th>ID</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Created By</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><input type="checkbox" class="w-4 h-4"></td>
                        <td>#001</td>
                        <td class="flex items-center gap-3 justify-center">
                            <div class="basis-1/3">
                                <img class="w-full h-[50px] rounded-lg object-cover" src="<?php echo $base_url . "images/LNG.png" ?>" alt="">
                            </div>
                        </td>
                        <td>
                            <p class="text-blue-500">History</p>
                        </td>
                        <td class="truncate whitespace-nowrap overflow-hidden w-fit max-w-[12ch]">Desciption 1</td>
                        <td>
                            <p class="px-2 py-1 bg-green-300 text-green-500 rounded-lg">Active</p>
                        </td>
                        <td>
                            <p class="text-red-500">Admin</p>
                        </td>
                        <td>
                            <div class="flex gap-2 items-center justify-center">
                                <a href="" class="">
                                    <span>
                                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="">&lt;#4d4c4c id="SVGRepo_b#4d4c4cCarrier" stroke-width="0"&gt;<!--#4d4c4c-->&lt;#4d4c4c id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"&gt;<!--#4d4c4c-->&lt;#4d4c4c id="SVGRepo_iconCarrier"&gt; <path d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z" stroke="#4d4c4c" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13" stroke="#4d4c4c" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <!--#4d4c4c-->
                                        </svg>
                                    </span>
                                </a>
                                <a href="">
                                    <span>
                                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <rect width="24" height="24" fill="white"></rect>
                                                <circle cx="7" cy="12" r="0.5" stroke="#4d4c4c" stroke-linecap="round" stroke-linejoin="round"></circle>
                                                <circle cx="12" cy="12" r="0.5" stroke="#4d4c4c" stroke-linecap="round" stroke-linejoin="round"></circle>
                                                <circle cx="17" cy="12" r="0.5" stroke="#4d4c4c" stroke-linecap="round" stroke-linejoin="round"></circle>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="w-4 h-4"></td>
                        <td>#001</td>
                        <td class="flex items-center gap-3 justify-center">
                            <div class="basis-1/3">
                                <img class="w-full h-[50px] rounded-lg object-cover" src="<?php echo $base_url . "images/LNG.png" ?>" alt="">
                            </div>
                        </td>
                        <td>
                            <p class="text-blue-500">History</p>
                        </td>
                        <td class="truncate whitespace-nowrap overflow-hidden w-fit max-w-[12ch]">Desciption 1</td>
                        <td>
                            <p class="px-2 py-1 bg-green-300 text-green-500 rounded-lg">Active</p>
                        </td>
                        <td>
                            <p class="text-red-500">Admin</p>
                        </td>
                        <td>
                            <div class="flex gap-2 items-center justify-center">
                                <a href="" class="">
                                    <span>
                                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="">&lt;#4d4c4c id="SVGRepo_b#4d4c4cCarrier" stroke-width="0"&gt;<!--#4d4c4c-->&lt;#4d4c4c id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"&gt;<!--#4d4c4c-->&lt;#4d4c4c id="SVGRepo_iconCarrier"&gt; <path d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z" stroke="#4d4c4c" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13" stroke="#4d4c4c" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <!--#4d4c4c-->
                                        </svg>
                                    </span>
                                </a>
                                <a href="">
                                    <span>
                                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <rect width="24" height="24" fill="white"></rect>
                                                <circle cx="7" cy="12" r="0.5" stroke="#4d4c4c" stroke-linecap="round" stroke-linejoin="round"></circle>
                                                <circle cx="12" cy="12" r="0.5" stroke="#4d4c4c" stroke-linecap="round" stroke-linejoin="round"></circle>
                                                <circle cx="17" cy="12" r="0.5" stroke="#4d4c4c" stroke-linecap="round" stroke-linejoin="round"></circle>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan="10" class="py-5 text-right px-3">
                            <div class="flex items-center justify-end gap-7">
                                <div class="flex gap-2 items-center">
                                    <p>Order per page</p>
                                    <select class="px-2 py-2 rounded-lg bg-gray-200 outline-none" name="" id="">
                                        <option value="">10</option>
                                        <option value="">15</option>
                                    </select>
                                </div>

                                <div class="flex gap-2 items-center">
                                    <div>
                                        <p>1-10 of 12</p>
                                    </div>
                                    <button>
                                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M15 6L9 12L15 18" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </button>
                                    <button>
                                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M9 6L15 12L9 18" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tfoot>




            </table>
        </div>
    </div>
</div>