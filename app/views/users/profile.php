<?php
$config = include __DIR__ . '/../../config/config.php';
$base_url = $config['app']['base_url'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $base_url . ('css/styles.css') ?>">
    <link rel="stylesheet" href="<?php echo $base_url . ('css/main.css') ?>">
</head>

<body>
    <div class="px-16 py-8">
        <div class="flex justify-between items-center">
            <div class="w-[170px] h-auto mb-4">
                <img class=" w-full h-auto object-cover" src="<?php echo $base_url . 'images/brand-logo.png' ?>" alt="">
            </div>

            <?php if (!empty($message['error'])) { ?>
                <div class="bg-red-300 py-2 px-5 rounded-md flex gap-1 items-center">
                    <span>
                        <svg width="30px" height="30px" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#e74c3c">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>error</title>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="#e74c3c" fill-rule="evenodd">
                                    <g id="add" fill="#e74c3c" transform="translate(42.666667, 42.666667)">
                                        <path d="M213.333333,3.55271368e-14 C331.136,3.55271368e-14 426.666667,95.5306667 426.666667,213.333333 C426.666667,331.136 331.136,426.666667 213.333333,426.666667 C95.5306667,426.666667 3.55271368e-14,331.136 3.55271368e-14,213.333333 C3.55271368e-14,95.5306667 95.5306667,3.55271368e-14 213.333333,3.55271368e-14 Z M213.333333,42.6666667 C119.232,42.6666667 42.6666667,119.232 42.6666667,213.333333 C42.6666667,307.434667 119.232,384 213.333333,384 C307.434667,384 384,307.434667 384,213.333333 C384,119.232 307.434667,42.6666667 213.333333,42.6666667 Z M262.250667,134.250667 L292.416,164.416 L243.498667,213.333333 L292.416,262.250667 L262.250667,292.416 L213.333333,243.498667 L164.416,292.416 L134.250667,262.250667 L183.168,213.333333 L134.250667,164.416 L164.416,134.250667 L213.333333,183.168 L262.250667,134.250667 Z" id="error"> </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                    <p class="text-red-600"><?php echo $message['error'] ?></p>
                </div>
            <?php } ?>
        </div>

        <div class="profile-container">
            <div class="form-user-profile shadow-xl bg-white rounded-xl mt-5 w-[80%] mx-auto text-sm">
                <div class="w-full h-24 rounded-t-xl rounded-r-xl rounded-b-none rounded-l-xl bg-gradient-to-r from-blue-200 via-transparent to-yellow-100 shadow-lg flex items-center justify-center">
                    <p class="font-semibold text-2xl tracking-widest text-gray-500">User Profile</p>
                </div>
                <div class="px-8 py-8">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2 mb-5">
                            <div>
                                <img class="w-14 h-14 rounded-full object-cover" src="<?php echo $base_url . "images/LNG.png" ?>" alt="">
                            </div>
                            <div class="flex flex-col gap-1">
                                <p>Alexa Rawles</p>
                                <p>alexarawles@gmail.com</p>
                            </div>
                        </div>

                        <div class="px-4 py-3 text-white bg-green-300 hover:bg-green-400 duration-200 transition-all rounded-lg">
                            <a href="index.php?controller=user&action=changePassword">Change Password</a>
                        </div>

                    </div>

                    <form class="flex flex-col gap-3" action="">
                        <div class="flex gap-5 items-center">
                            <div class="basis-1/2 flex flex-col gap-1">
                                <label for="">Full Name</label>
                                <input type="text" class="border outline-none text-gray-600 border-gray-300 bg-[#F9F9F9] rounded-lg px-2 py-2 text-[13px]" placeholder="Your Full Name" value="<?php echo $userProfile['first_name'] . " " . $userProfile['last_name'] ?>">
                            </div>
                            <div class="basis-1/2 flex flex-col gap-1">
                                <label for="">Nick Name</label>
                                <input type="text" class="border outline-none text-gray-600 border-gray-300 bg-[#F9F9F9] rounded-lg px-2 py-2 text-[13px]" placeholder="Your Nick Name">
                            </div>
                        </div>

                        <div class="flex gap-5 items-center">
                            <div class="basis-1/2 flex flex-col gap-1">
                                <label for="">Email</label>
                                <input type="text" class="border outline-none text-gray-600 border-gray-300 bg-[#F9F9F9] rounded-lg px-2 py-2 text-[13px]" placeholder="Your Email" value="<?php echo $userProfile['email'] ?>">
                            </div>
                            <div class="basis-1/2 flex flex-col gap-1">
                                <label for="">Address</label>
                                <input type="text" class="border outline-none text-gray-600 border-gray-300 bg-[#F9F9F9] rounded-lg px-2 py-2 text-[13px]" placeholder="Your Address" value="<?php echo $userProfile['address'] ?>">
                            </div>
                        </div>

                        <div class="flex gap-5 items-center">
                            <div class="basis-1/2 flex flex-col gap-1">
                                <label for="">Phone</label>
                                <input type="text" class="border outline-none text-gray-600 border-gray-300 bg-[#F9F9F9] rounded-lg px-2 py-2 text-[13px]" placeholder="Your Phone Number" value="<?php echo $userProfile['phone'] ?>">
                            </div>

                            <div class="basis-1/2 flex flex-col gap-1">
                                <label for="">Role</label>
                                <input type="text" class="border outline-none text-gray-600 border-gray-300 bg-[#F9F9F9] rounded-lg px-2 py-2 text-[13px]" value="<?php echo $userProfile['role'] ?>" readonly>
                            </div>
                        </div>

                        <div class="flex gap-5 items-center">
                            <div class="basis-1/2 flex flex-col gap-1">
                                <label for="">Gender</label>
                                <div class="flex items-center gap-2">
                                    <di v class="flex items-center gap-2">
                                        <label for="male">Male</label>
                                        <input type="radio" class="w-5 h-5" id="male" name="gender">
                                    </di>
                                    <div class="flex items-center gap-2">
                                        <label for="female">Female</label>
                                        <input type="radio" class="w-5 h-5" id="female" name="gender">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="flex justify-center mt-4">
                            <button class="px-3 py-2 rounded-xl bg-gradient-to-r from-mainColor via-yellow-100 to-green-400 w-[60%] text-lg font-semibold text-gray-600" type="submit">Update Profile</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</body>

</html>