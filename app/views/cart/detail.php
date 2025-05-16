<?php
include __DIR__ . "/../../views/shared/header.php";


?>

<style>
    .product-cart {
        width: 100%;
    }

    table {
        width: 100%;
    }

    table tr th {
        font-size: 20px;
        color: gray;
        padding: 0px 50px 30px 50px;
        text-align: center;
    }

    table tr td {
        padding: 28px 50px 30px 50px;
        text-align: center;
    }
</style>

<div class="product-cart mt-14">
    <table class="w-full">
        <thead>
            <tr>
                <th>PRODUCT</th>
                <th>PRICE</th>
                <th>QUANTITY</th>
                <th>TOTAL</th>
            </tr>
        </thead>

        <?php if (!empty($listProduct)) { ?>
            <tbody class="border border-gray-300">
                <?php foreach ($listProduct as $product) { ?>
                    <tr>
                        <td class="w-[100%] flex">
                            <div class="flex items-center gap-5">
                                <img class="w-[130px] h-[140px] object-cover rounded-md" src="<?php echo $base_url . 'uploads/images/' . $product['product_image'] ?>" alt="">
                                <p class="text-productAuthor font-semibold text-[23px]"><?php echo $product['product_name'] ?></p>
                            </div>
                        </td>
                        <td class="text-xl text-productAuthor font-semibold"><?php echo $product['price'] ?></td>
                        <td>
                            <div class="flex gap-4 items-center quantity-control" data-id="<?php echo $product['product_id'] ?>">
                                <button class="text-[55px] font-extralight text-gray-600 decrease-quantity">-</button>
                                <input type="text" class="w-[40px] text-center border-none outline-none text-[20px] bg-gray-300 rounded-[60px] quantityInput" value="<?php echo $product['quantity'] ?>">
                                <button class="text-[28px] font-light text-gray-600 increase-quantity">+</button>
                            </div>
                        </td>
                        <td class="text-xl"><?php echo $product['total'] ?></td>
                        <td>
                            <svg width="35px" height="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#858585">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M10 12V17" stroke="#858585" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M14 12V17" stroke="#858585" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M4 7H20" stroke="#858585" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M6 10V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V10" stroke="#858585" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#858585" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        <?php } ?>
    </table>
</div>

<div class="product-checkout border border-gray-300 px-6 pt-4 pb-7 mt-14 rounded-xl">
    <div class="flex flex-col gap-7 items-end">
        <div class="flex gap-10">
            <p class="text-lg">SUBTOTAL</p>
            <p>$140.00</p>
        </div>
        <div class="flex gap-10">
            <p class="text-lg text-left">SHIPPING</p>
            <p>$140.00</p>
        </div>
        <div class="flex gap-10">
            <p class="text-xl font-semibold">TOTAL</p>
            <p class="text-xl font-semibold"><?php echo $totalPrice; ?></p>
        </div>
        <div class="">
            <a class="px-6 py-3 bg-mainColor text-white rounded-3xl tracking-wide" href="">Proceed to Checkout</a>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('.quantity-control').forEach(control => {

        const decreaseBtn = control.querySelector(".decrease-quantity");
        const increaseBtn = control.querySelector(".increase-quantity");
        const quantityInput = control.querySelector(".quantityInput");

        const productId = control.dataset.id;

        // Nút giảm số lượng
        decreaseBtn.addEventListener("click", function() {
            let currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity > 1) {
                currentQuantity--;
                quantityInput.value = currentQuantity;
                quantityInput.setAttribute("value", currentQuantity);
            }
        });

        // Nút tăng số lượng
        increaseBtn.addEventListener("click", function() {
            let currentQuantity = parseInt(quantityInput.value);
            currentQuantity++;
            quantityInput.value = currentQuantity;
            quantityInput.setAttribute("value", currentQuantity);
        });

    });

    $(document).ready(function() {
        $(".quantity-control .increase-quantity, .quantity-control .decrease-quantity").on("click", function() {
            var product_id = $('.quantity-control').data("id");
            console.log(product_id);
            var $quantity = $(".quantityInput").val();
            console.log($quantity);

            $.ajax({
                url: "index.php?controller=cart&action=detail",
                method: "GET",
                data: {
                    product_id: product_id,
                    quantity: quantity
                },
                dataType: "json",
                success: function(response) {
                    console.log("Response:", response);
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log("Lỗi:", xhr.status, thrownError);
                }
            });
        });
    });
</script>

<?php
include __DIR__ . "/../../views/shared/footer.php"
?>