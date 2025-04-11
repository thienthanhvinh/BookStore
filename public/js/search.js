$(document).ready(function () {
  //Search For List Product Page
  $("#searchInput").on("input", function () {
    let searchValue = $(this).val();
    console.log("Search Value: ", searchValue);
    // if (searchValue.length === 0) {
    //   $("#searchResults").hide();
    //   return;
    // }
    $.ajax({
      url: "index.php?controller=product&action=index",
      type: "POST",
      data: { search: searchValue },
      dataType: "json",
      success: function (response) {
        console.log("Dữ liệu trả về:", response);

        // Kiểm tra nếu response có chứa key "data" và nó là một mảng, data trả về từ action = index
        let resultFinal = Array.isArray(response.data)
          ? response.data
          : [response.data];
        console.log("Result Final là: ", resultFinal);

        let resultHtml = "";
        // Nếu không có sản phẩm nào
        resultFinal.forEach((item) => {
          resultHtml += `<div class="arrival-book bg-mainProduct shadow-mainShadow rounded-3xl px-6 py-7 basis-[31%] h-[540px]">
                          <div class="h-[330px]">
                              <a href="">
                                  <img class="w-full h-full object-cover rounded-xl" src="http://localhost/BookStore/public/uploads/images/${item.product_image}" alt="">
                              </a>
      
                          </div>
                          <div class="flex flex-col mt-3">
                              <h3 class="text-2xl text-productName font-semibold tracking-wider">${item.product_name}</h3>
                              <span class="star flex items-center my-1">
                                  <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                      <g id="SVGRepo_iconCarrier">
                                          <path fill="#ffc107" d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </g>
                                  </svg>
                                  <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                      <g id="SVGRepo_iconCarrier">
                                          <path fill="#ffc107" d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </g>
                                  </svg>
                                  <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                      <g id="SVGRepo_iconCarrier">
                                          <path fill="#ffc107" d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                      </g>
                                  </svg>
                              </span>
                                  <p class="mt-2 mb-1 text-lg text-productAuthor">${item.product_author}</p>
                                  <div class="flex items-center justify-between">
                                  <div class="flex items-center gap-2">
                                  <p class="text-xl">${item.discount_price}</p>
                                      <span class="text-gray-400 line-through">${item.price}</span>
                                  </div>
                                  <a href="" class="px-3 py-2 text-white bg-mainColor rounded-3xl hover:bg-[#e67e22] transition-all duration-300">Add to Cart</a>
                              </div>
                          </div>
                      </div>`;
        });
        $("#searchResults").html(resultHtml).show();

        // if (resultHtml === "") {
        //   resultHtml = "<li>Không tìm thấy sản phẩm</li>";
        // }

        // Gửi resultHtml sang PHP
        $.ajax({
          url: "index.php?controller=product&action=saveHtml",
          type: "POST",
          data: { html_content: resultHtml },
          dataType: "json",
          success: function (response) {
            console.log("Response data la: ", response.data);
            // console.log("HTML Content la: ", html_content);
            console.log("Response tra ve la: ", response);

            if (response.data !== "") {
              $("#searchResults").html(response.data);
            }
          },
        });
      },

      error: function (xhr, thrownError) {
        console.log("Server Response:", xhr.status, thrownError);
      },
    });
  });

  //Search For Header
  $("#searchHeader").on("input", function () {
    let searchValue = $(this).val();

    if (searchValue.length === 0) {
      $("#searchHeaderResults").hide();
      return;
    }

    $.ajax({
      url: "index.php?controller=product&action=index",
      type: "POST",
      data: { search: searchValue },
      dataType: "json",
      success: function (response) {
        // Kiểm tra nếu response có chứa key "data" và nó là một mảng
        let resultFinal = Array.isArray(response.data)
          ? response.data
          : [response.data];

        let resultHtml = "";
        resultFinal.forEach((item) => {
          resultHtml += `
                        <div class="flex gap-4 border-b border-gray-300 py-2">
                            <div class="basis-[40%] h-32">
                                <img class="w-full h-full object-cover rounded-xl" src="http://localhost/BookStore/public/uploads/images/${item.product_image}" alt="">
                            </div>
                            <div class="basis-[60%] flex flex-col gap-1">
                                <h3 class="text-xl font-semibold">${item.product_name}</h3>
                                <p class="text-lg">${item.product_author}</p>
                                <p class="text-xl">${item.discount_price}</p>
                            </div>
                        </div>`;
        });

        // Nếu không có sản phẩm nào
        if (resultHtml === "") {
          resultHtml = "<li>Không tìm thấy sản phẩm</li>";
        }

        $("#searchHeaderResults").html(resultHtml).show();
      },

      error: function (xhr, thrownError) {
        console.log("Server Response:", xhr.status, thrownError);
      },
    });
  });
});
