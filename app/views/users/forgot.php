<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Pasword</title>
    <link rel="stylesheet" href="../../../public/css/main.css">
    <link rel="stylesheet" href="../../../public/css/styles.css">
</head>

<body>
    <div class="px-16 py-8">
        <div class="w-[170px] h-auto mb-4">
            <img class=" w-full h-full object-cover" src="../../../public/images/brand-logo.png" alt="">
        </div>
        <div class="min-h-[65vh] flex items-center justify-center">
            <div class="bg-formBackground shadow-md shadow-gray-300 w-[600px] rounded-xl px-[30px] py-[25px] h-[380px]">
                <form action="">
                    <h2 class="text-[28px] text-gray-800 text-center font-semibold">Reset your Password</h2>
                    <p class="mt-2 text-justify">Enter your user account's verified email address and we will send you a password reset link.</p>
                    <div class="mt-4 flex flex-col gap-6">
                        <input type="email" class=" text-black text-lg px-4 py-3 border border-gray-500 outline-none bg-formBackground rounded-[40px] w-full" placeholder="Enter your email address">
                    </div>
                    <button type="submit" class="text-white text-center py-3 rounded-[40px] bg-mainColor hover:bg-orange-400 transition-all duration-200 border w-full text-bold text-lg mt-7">Send password reset email</button>
                    <div class="mt-5 flex items-center justify-between">
                        <div class="">
                            <p class="inline-block">If you don’t have account?</p>
                            <a href="./register.php" class="text-mainColor font-semibold hover:underline">Register</a>
                        </div>
                        <div class="">
                            <a href="./login.php" class="text-mainColor font-semibold hover:underline">Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>