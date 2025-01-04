<?php
$config = include __DIR__ . '/../../config/config.php';
$base_url = $config['app']['base_url'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Pasword</title>
    <link rel="stylesheet" href="<?php echo $base_url . ('css/styles.css') ?>">
    <link rel="stylesheet" href="<?php echo $base_url . ('css/main.css') ?>">
</head>

<body>
    <div class="px-16 py-8">
        <div class="w-[170px] h-auto mb-4">
            <img class=" w-full h-auto object-cover" src="<?php echo $base_url .  'images/brand-logo.png' ?>" alt="">
        </div>
        <div class="min-h-[65vh] flex items-center justify-center">
            <div class="bg-formBackground shadow-md shadow-gray-300 w-[600px] rounded-xl px-[30px] py-[25px] h-[380px]">
                <form action="" method="POST">
                    <h2 class="text-[28px] text-gray-800 text-center font-semibold">Reset your Password</h2>
                    <p class="mt-2 text-justify">Enter your user account's verified email address and we will send you a password reset link.</p>
                    <div class="mt-4 flex flex-col gap-6">
                        <input type="email" name="email" class=" text-black text-lg px-4 py-3 border border-gray-500 outline-none bg-formBackground rounded-[40px] w-full" placeholder="Enter your email address">
                    </div>
                    <button type="submit" name="sendPasswordButton" class="text-white text-center py-3 rounded-[40px] bg-mainColor hover:bg-orange-400 transition-all duration-200 border w-full text-bold text-lg mt-7">Send password reset email</button>
                    <div class="mt-5 flex items-center justify-between">
                        <div class="">
                            <p class="inline-block">If you don’t have account?</p>
                            <a href="index.php?controller=user&action=register" class="text-mainColor font-semibold hover:underline">Register</a>
                        </div>
                        <div class="">
                            <a href="index.php?controller=user&action=login" class="text-mainColor font-semibold hover:underline">Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>