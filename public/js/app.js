
$(document).ready(function () {
    $('#email').on("input", function () {
        const email = $(this).val();
        $.ajax({
            url: 'index.php?controller=user&action=checkEmailAjax',
            method: "POST",
            data: { email: email },
            dataType: "json",
            success: function (response) {
                if (response.status === "error") {
                    $("#emailMessage").text(response.message).removeClass("text-green-400").addClass("text-red-400");
                } else {
                    $("#emailMessage").text(response.message).removeClass("text-red-400").addClass("text-green-400");
                }
            },
            error: function (xhr, status, error) {
                console.log("AJAX Error:", status, error);
                // console.log("Server Response:", xhr.responseText);
                try {
                    var response = JSON.parse(xhr.responseText);
                    console.log("Parsed Response:", response); // Xem dữ liệu sau khi phân tích cú pháp
                } catch (e) {
                    console.log("JSON parsing error:", e);
                }
                $("#emailMessage").text("An error occurred").addClass("text-red-400");
            }
        });
    });

    $('#firstName').on("input", function () {
        const firstName = $(this).val();
        $.ajax({
            url: 'index.php?controller=user&action=checkFirstNameAjax',
            method: "POST",
            data: { firstName: firstName },
            dataType: "json",
            success: function (response) {
                console.log(response);
                if (response.status === 'error') {
                    $("#firstNameMessage").text(response.message).removeClass('text-green-400').addClass('text-red-400');
                } else {
                    $("#firstNameMessage").text(response.message).removeClass('text-red-400').addClass('text-green-400');
                }
            },
            error: function (xhr) {
                console.log("Server Response:", xhr.responseText);
                $("#firstNameMessage").text("An error occurred").addClass("text-red-400");
            }
        });
    });

    $("#lastName").on("input", function () {
        const lastName = $(this).val();
        // console.log(lastName);
        $.ajax({
            url: "index.php?controller=user&action=checkLastNameAjax",
            method: "POST",
            data: { lastName: lastName },
            dataType: "json",
            success: function (response) {
                if (response.status === 'error') {
                    $("#lastNameMessage").text(response.message).removeClass('text-green-400').addClass('text-red-400');
                } else {
                    $("#lastNameMessage").text(response.message).removeClass('text-red-400').addClass('text-green-400');
                }
            },
            error: function (xhr, status, error) {
                console.log("AJAX Error:", status, error);
                console.log("Server Response:", xhr.responseText);
                $("#lastNameMessage").text("An error occurred").addClass("text-red-400");
            }
        });
    });

    $("#password").on("input", function () {
        const password = $(this).val();
        $.ajax({
            url: "index.php?controller=user&action=checkPasswordAjax",
            method: "POST",
            data: { password: password },
            dataType: "json",
            success: function (response) {
                if (response.status === 'error') {
                    $("#passwordMessage").text(response.message).addClass("text-red-400").removeClass("text-green-400");
                } else {
                    $("#passwordMessage").text(response.message).addClass("text-green-400").removeClass("text-red-400");
                }
            },
            error: function () {
                $("#passwordMessage").text("An a ocurred").addClass("text-red-400");
            }
        })
    });

    $('.add-cart').click(function (e) {
        e.preventDefault();

        var $form = $(this).closest(".form-submit");
        var product_id = $form.find('.product_id').val();
        console.log(product_id);

        $.ajax({
            url: "index.php?controller=cart&action=add",
            method: "POST",
            data: { product_id: product_id },
            dataType: "text",
            success: function (response) {
                console.log("Response:", response);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log("Lỗi:", xhr.status, thrownError);
            }
        });
    });

    

});

