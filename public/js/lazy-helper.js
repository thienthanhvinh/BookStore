window.addEventListener("load", function () {
  function lazyLoadDealWeek() {
    const container = document.getElementById("deal-week-container");
    if (!container) return;

    const observer = new IntersectionObserver(
      async (entries, observer) => {
        entries.forEach(async (entry) => {
          if (entry.isIntersecting) {
            // console.log("Ok");
            // Fetch nội dung từ file PHP
            try {
              //   console.log("Da chay vo dc try");
              const res = await fetch(
                "index.php?controller=home&action=dealWeek"
              );
              const html = await res.text();
              console.log("Nội dung trả về:", html); // kiểm tra log
              container.innerHTML = html;
              console.log("Đã gán nội dung vào container");

              // Animation
              requestAnimationFrame(() => {
                // Cho 1 khung hình trôi qua để đảm bảo trình duyệt cập nhật DOM
                setTimeout(() => {
                  container.classList.remove("opacity-0", "-translate-x-10");
                  container.classList.add("opacity-100", "translate-x-0");
                  //   container.classList.add("bg-green-200", "p-4");
                }, 0); // 0ms là đủ để đợi 1 tick
              });

              // Lazy load images function
              lazyLoadImages();

              observer.unobserve(container);
            } catch (err) {
              console.error("Lỗi khi load deal-week:", err);
            }
          }
        });
      },
      { threshold: 0.1 }
    );

    observer.observe(container);
  }

  function lazyLoadImages() {
    const images = document.querySelectorAll("img.lazyload");
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src;

          img.onload = () => {
            img.style.opacity = "1";
          };

          img.classList.remove("lazyload");
          observer.unobserve(img);
        }
      });
    });

    images.forEach((img) => observer.observe(img));
  }

  // GỌI SAU KHI DOM SẴN SÀNG
  lazyLoadDealWeek();

  const loadingScreen = document.getElementById("loading-screen");
  const mainContent = document.getElementById("main-container");

  if (loadingScreen) {
    // Làm mờ và disable pointer
    loadingScreen.classList.add("opacity-0", "pointer-events-none");
    setTimeout(() => {
      loadingScreen.classList.add("hidden");
      // Hiện nội dung trang
      if (mainContent) {
        mainContent.classList.remove("hidden", "opacity-0");
        mainContent.classList.add(
          "opacity-100",
          "transition-opacity",
          "duration-500"
        );
      }
    }, 15000); // delay 500ms để animation mượt
  }

  // Animate X
  function animateElementX(id, delay, translateXRemove, translateXAdd) {
    const el = document.getElementById(id);
    setTimeout(() => {
      if (el) {
        // el.classList.remove('opacity-0', '-translate-x-10');
        // el.classList.add('opacity-100', 'translate-x-0');

        el.classList.remove("opacity-0", translateXRemove);
        el.classList.add("opacity-100", translateXAdd);
      }
    }, delay);
  }

  animateElementX("animated-text", 600, "-translate-x-10", "translate-x-0");
  animateElementX("animated-image", 800, "-translate-x-10", "translate-x-0");
  animateElementX("animated-lorem", 900, "-translate-x-10", "translate-x-0");
  animateElementX("animated-shop", 800, "-translate-x-10", "translate-x-0");
  animateElementX(
    "animated-deal-right",
    800,
    "translate-x-10",
    "translate-x-0"
  );

  // Animate Y
  function animateElementY(className, delay, timeRunCard) {
    const els = document.querySelectorAll(className);
    if (els.length > 0) {
      const observer = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              setTimeout(() => {
                entry.target.classList.remove("opacity-0", "-translate-y-10");
                entry.target.classList.add("opacity-100", "translate-y-0");
                observer.unobserve(entry.target);
              }, delay);
            }
          });
        },
        {
          threshold: timeRunCard,
        }
      );
      els.forEach((el) => observer.observe(el));
    }
  }

  animateElementY(".product-card", 350, 0.2);
  animateElementY(".arrival-book", 450, 0.1);

  // Animate Array X (Use ForEach)
  function animateArrayX(className, delay, timeRunCard) {
    const els = document.querySelectorAll(className);
    if (els.length > 0) {
      const observer = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              setTimeout(() => {
                entry.target.classList.remove("opacity-0", "-translate-x-10");
                entry.target.classList.add("opacity-100", "translate-x-0");
                observer.unobserve(entry.target);
              }, delay);
            }
          });
        },
        {
          threshold: timeRunCard,
        }
      );
      els.forEach((el) => observer.observe(el));
    }
  }

  animateArrayX(".deal-week", 300, 0.1);

  // Animate Array Y (Use ForEach)
  function animateArrayY(className, delay, timeRunCard) {
    const els = document.querySelectorAll(className);
    if (els.length > 0) {
      const observer = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              setTimeout(() => {
                entry.target.classList.remove("opacity-0", "-translate-y-10");
                entry.target.classList.add("opacity-100", "translate-y-0");
                observer.unobserve(entry.target);
              }, delay);
            }
          });
        },
        {
          threshold: timeRunCard,
        }
      );
      els.forEach((el) => observer.observe(el));
    }
  }

  animateArrayY(".latest-blog", 600, 0.3);
});
