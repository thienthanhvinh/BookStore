<?php
include __DIR__ . "/../shared/header.php";
?>

<?php
$isFirstName = true;
$inputArray = [
    [
        "class" => "basis-[50%] px-3 py-4 border border-gray-400 rounded-[40px] outline-none text-gray-800",
        "type" => "text",
        "placeholder" => $isFirstName ? "First Name" : "Last Name",
    ],
    [
        "class" => "basis-[50%] px-3 py-4 border border-gray-400 rounded-[40px] outline-none text-gray-800",
        "type" => "text",
    ],
    [
        "class" => "basis-[50%] px-3 py-4 border border-gray-400 rounded-[40px] outline-none text-gray-800",
        "type" => "text",
    ]
]
?>


<div class="payment-container mt-16">
    <div class="text-center mb-14">
        <h3 class="text-5xl text-gray-900 font-semibold mb-3">Checkout</h3>
        <p class="text-gray-600 text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam iure harum praesentium itaque similique illo.</p>
    </div>

    <div class="flex gap-5">
        <div class="basis-[65%]">
            <div class="flex gap-14 items-center mb-8">
                <h3 class="font-semibold text-gray-900 text-3xl">Contact Info</h3>
                <div class="flex gap-2 text-lg text-gray-900">
                    <p>Already have an account?</p>
                    <a class="text-mainColor underline font-semibold" href="">Login</a>
                </div>
            </div>

            <div class="form-checkout flex flex-col gap-8">
                <div class="flex items-center gap-6">
                    <input type="text" class="basis-[50%] px-3 py-4 border border-gray-400 rounded-[40px] outline-none text-gray-800" placeholder="First Name">
                    <input type="text" class="basis-[50%] px-3 py-4 border border-gray-400 rounded-[40px] outline-none text-gray-800" placeholder="Last Name">
                </div>

                <div class="flex items-center gap-6">
                    <input type="text" class="basis-[50%] px-3 py-4 border border-gray-400 rounded-[40px] outline-none text-gray-800" placeholder="Email">
                    <input type="text" class="basis-[50%] px-3 py-4 border border-gray-400 rounded-[40px] outline-none text-gray-800" placeholder="Phone Number">
                </div>
                <div class="flex items-center gap-6">
                    <select class="basis-1/2 px-4 py-4 border border-gray-400 rounded-[40px] outline-none text-gray-800" name="" id="">
                        <option value="">Province/City</option>
                        <option value="">Da Nang</option>
                    </select>
                    <select class="basis-1/2 px-4 py-4 border border-gray-400 rounded-[40px] outline-none text-gray-800" name="" id="">
                        <option value="">District</option>
                        <option value="">Cam Le</option>
                    </select>
                </div>

                <div class="flex items-center gap-6">
                    <select class="basis-1/2 px-4 py-4 border border-gray-400 rounded-[40px] outline-none text-gray-800" name="" id="">
                        <option value="">Ward</option>
                        <option value="">Hoa Phat</option>
                    </select>
                    <input type="text" class="basis-[50%] px-3 py-4 border border-gray-400 rounded-[40px] outline-none text-gray-800" placeholder="Address">
                </div>

            </div>

            <div class="product-bought mt-14 px-5 pt-4  shadow-xl bg-mainProduct rounded-md">
                <div class="flex items-center gap-1">
                    <span>
                        <svg width="35px" height="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M19.8978 16H7.89778C6.96781 16 6.50282 16 6.12132 16.1022C5.08604 16.3796 4.2774 17.1883 4 18.2235" stroke="#1C274D" stroke-width="1.5"></path>
                                <path d="M8 7H16" stroke="#1C274D" stroke-width="1.5" stroke-linecap="round"></path>
                                <path d="M8 10.5H13" stroke="#1C274D" stroke-width="1.5" stroke-linecap="round"></path>
                                <path d="M19.5 19H8" stroke="#1C274D" stroke-width="1.5" stroke-linecap="round"></path>
                                <path d="M10 22C7.17157 22 5.75736 22 4.87868 21.1213C4 20.2426 4 18.8284 4 16V8C4 5.17157 4 3.75736 4.87868 2.87868C5.75736 2 7.17157 2 10 2H14C16.8284 2 18.2426 2 19.1213 2.87868C20 3.75736 20 5.17157 20 8M14 22C16.8284 22 18.2426 22 19.1213 21.1213C20 20.2426 20 18.8284 20 16V12" stroke="#1C274D" stroke-width="1.5" stroke-linecap="round"></path>
                            </g>
                        </svg>
                    </span>
                    <h3 class="text-2xl font-semibold">Sản phẩm đã mua</h3>
                </div>
                <div class="border-b border-gray-300 mt-4 mb-5" style="margin-left: -20px; margin-right: -20px; width: calc(100% + 40px);"></div>

                <div class="list-product-bought mb-3">
                    <div class="flex items-center justify-between text-lg">
                        <div class="flex items-center gap-2">
                            <p class="font-semibold">1.</p>
                            <p>(3 sản phẩm)</p>
                        </div>

                        <div class="flex gap-1 items-center">
                            <p>Trạng thái:</p>
                            <p class="text-green-400">Đang vận chuyển</p>
                        </div>
                    </div>
                    <p class="text-lg">Laptop Dell Precision 5000 | Adventure Book | History of VietNam</p>
                    <div class="border border-gray-300 mt-6" style="margin-left: -20px; margin-right: -20px; width: calc(100% + 40px);"></div>
                </div>

                <div class="list-product-bought mb-3">
                    <div class="flex items-center justify-between text-lg">
                        <div class="flex items-center gap-2">
                            <p class="font-semibold">2.</p>
                            <p>(1 sản phẩm)</p>
                        </div>

                        <div class="flex gap-1 items-center">
                            <p>Trạng thái:</p>
                            <p class="text-blue-400">Đã xác nhận</p>
                        </div>
                    </div>
                    <p class="text-lg">Laptop Dell Precision 5000</p>
                    <div class="border border-gray-300 mt-6" style="margin-left: -20px; margin-right: -20px; width: calc(100% + 40px);"></div>
                </div>

            </div>

        </div>

        <div class="basis-[35%] flex flex-col gap-3">
            <div class="your-order shadow-xl bg-mainProduct rounded-2xl px-7 py-4">

                <div class="flex flex-col gap-6">
                    <h2 class="text-3xl font-semibold">Your Order</h2>
                    <div class="border border-gray-300"></div>
                </div>

                <div class="flex flex-col gap-1">
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex gap-3 items-center">
                            <p class="text-gray-500 text-xl">A story of my life</p>
                            <span class="text-lg">x1</span>
                        </div>
                        <div class="">
                            <p class="text-xl">70000</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex gap-3 items-center">
                            <p class="text-gray-500 text-xl">A story of my life</p>
                            <span class="text-lg">x1</span>
                        </div>
                        <div class="">
                            <p class="text-xl">70000</p>
                        </div>
                    </div>

                    <div class="border border-gray-300 mt-5"></div>
                </div>

                <div class="flex flex-col gap-1 mt-6">
                    <div class="flex items-center justify-between">
                        <div class="flex gap-3 items-center">
                            <p class="text-gray-500 text-2xl">Sub Total</p>
                        </div>
                        <div class="">
                            <p class="text-2xl">140000</p>
                        </div>
                    </div>

                    <div class="border border-gray-300 mt-8"></div>
                </div>

                <div class="flex flex-col gap-1 mt-6">
                    <div class="flex items-center justify-between">
                        <div class="flex gap-3 items-center">
                            <p class="text-gray-500 text-2xl">Shipping Fee</p>
                        </div>
                        <div class="">
                            <p class="text-2xl">Free Ship</p>
                        </div>
                    </div>

                    <div class="border border-gray-300 mt-8"></div>
                </div>

            </div>

            <div class="coppount bg-mainProduct shadow-xl rounded-2xl px-7 py-4 mt-5">
                <div class="flex items-center justify-between mb-5">
                    <h4 class="text-xl">Couppount</h4>
                    <p class="text-gray-600">Can choice one</p>
                </div>
                <a href="" class="text-mainColor hover:underline duration-150 transition-all">Choice Other Coppount Code</a>
            </div>

            <div class="paymennt mt-5 px-7 py-4 bg-mainProduct shadow-xl">
                <div class="flex items-center justify-between">
                    <h4 class="text-xl">Payment</h4>
                    <a href="" class="text-mainColor hover:underline duration-150 transition-all">Add Credit Card</a>
                </div>

                <div class="flex flex-col gap-4 mt-3">
                    <div class="flex gap-2 items-center">
                        <input type="radio" class="w-5 h-5" name="creditCard" id="cashPayment">
                        <label for="cashPayment" class="cursor-pointer">Thanh toán bằng tiền mặt</label>
                    </div>

                    <div class="flex gap-2 items-center">
                        <input type="radio" class="w-5 h-5" name="creditCard" id="qrPayment">
                        <label for="qrPayment" class="cursor-pointer">Thanh toán bằng mã QR Code</label>
                    </div>

                    <div class="flex gap-2 items-center">
                        <input type="radio" class="w-5 h-5" name="creditCard" id="cardPayment">
                        <label for="qrPayment" class="cursor-pointer">(Thanh Vinh) 4123458785262</label>
                    </div>
                </div>


            </div>

        </div>
    </div>

</div>


<?php
include __DIR__ . "/../shared/footer.php";
?>