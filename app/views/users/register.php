<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../public/css/main.css">
    <link rel="stylesheet" href="../../../public/css/styles.css">
</head>

<body>
    <div class="px-16 py-8">
        <div class="w-[170px] h-auto mb-4">
            <img class=" w-full h-full object-cover" src="../../../public/images/brand-logo.png" alt="">
        </div>
        <div class="flex min-h-[88vh] justify-center items-center gap-10">
            <div class="bg-formBackground shadow-md shadow-gray-300 w-[630px] rounded-xl px-[30px] py-[30px] h-[610px]">
                <form action="">
                    <h2 class="text-4xl text-gray-800 text-center font-semibold">Create an account</h2>
                    <div class="mt-8 flex gap-5">
                        <div class="py-3 text-center border border-gray-500 text-[17px] rounded-3xl w-[50%]">
                            <a href="" class=" flex items-center justify-center gap-2 hover:text-mainColor transition-colors duration-200">
                                <img src="../../../public/images/iconGoogle.png" alt="" class="w-[35px] h-auto object-contain">
                                <p>Sign up with Google</p>
                            </a>
                        </div>
                        <div class="py-3 text-center border border-gray-500 text-[17px] rounded-3xl w-[50%] ">
                            <a href="" class=" flex items-center justify-center gap-2 hover:text-mainColor transition-colors duration-200">
                                <img src="../../../public/images/iconFacebook.png" alt="" class="w-[35px] h-auto object-contain">
                                <p>Sign up with Facebook</p>
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center mt-5 gap-2">
                        <div class="border border-l border-gray-300 flex-grow"></div>
                        <span class="">Or</span>
                        <div class="border border-r border-gray-300 flex-grow"></div>
                    </div>
                    <p class="text-center mt-2">Sign up with your email address</p>
                    <div class="mt-6 flex flex-col gap-6">
                        <div class="flex items-center gap-5">
                            <input type="text" class="px-4 py-3 rounded-[40px] border border-gray-500 outline-none w-[50%] bg-formBackground text-black text-lg" placeholder="First Name">
                            <input type="text" class="px-4 py-3 rounded-[40px] border border-gray-500 outline-none w-[50%] bg-formBackground text-black text-lg" placeholder="Last Name">
                        </div>
                        <input type="email" class=" text-black text-lg px-4 py-3 border border-gray-500 outline-none bg-formBackground rounded-[40px] w-full" placeholder="Email">
                        <input type="text" class=" text-black text-lg px-4 py-3 border border-gray-500 outline-none bg-formBackground rounded-[40px] w-full" placeholder="Password">
                    </div>
                    <button type="submit" class="text-white text-center py-3 rounded-[40px] bg-mainColor hover:bg-orange-400 transition-all duration-200 border w-full text-bold text-lg mt-8">Create Account</button>
                    <div class="text-right mt-4">
                        <p class="inline-block">Already have an account?</p>
                        <a href="./login.php" class="text-mainColor font-semibold hover:underline">Log in</a>
                    </div>
                </form>
            </div>
            <div class="bg-formBackground shadow-md shadow-gray-300 w-[630px] rounded-xl px-[15px] py-[15px] h-[610px]">
                <img src="../../../public/images/sign-up.png" class="w-full h-full object-contain" alt="">
            </div>
        </div>
    </div>
</body>

</html>