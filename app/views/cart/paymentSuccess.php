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

<div class="payment-success-container mt-16">
    <?php
    echo "<h2>✅ Thanh toán thành công!</h2>";
    echo "<p>Cảm ơn bạn đã đặt hàng tại SbayBooks</p>";
    ?>

</div>


<?php
include __DIR__ . "/../shared/footer.php";
?>