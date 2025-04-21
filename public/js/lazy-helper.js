window.addEventListener("load", function () {
  function lazyLoadDealWeek() {
    const container = document.getElementById("deal-week-container");
    if (!container) return;

    const observer = new IntersectionObserver(
      async (entries, observer) => {
        entries.forEach(async (entry) => {
          if (entry.isIntersecting) {
            try {
              const res = await fetch(
                "index.php?controller=home&action=dealWeek"
              );
              const html = await res.text();
              container.innerHTML = html;

              // Animation
              requestAnimationFrame(() => {
                setTimeout(() => {
                  container.classList.remove("opacity-0", "-translate-x-10");
                  container.classList.add("opacity-100", "translate-x-0");
                }, 400);
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

  function lazyLoadNewArrivals() {
    const container = document.getElementById("new-arrivals-container");
    if (!container) return;

    const observer = new IntersectionObserver(
      async (entries, observer) => {
        entries.forEach(async (entry) => {
          if (entry.isIntersecting) {
            try {
              const res = await fetch(
                "index.php?controller=home&action=newArrivals"
              );
              const html = await res.text();
              container.innerHTML = html;

              // Animation
              requestAnimationFrame(() => {
                setTimeout(() => {
                  container.classList.remove("opacity-0", "-translate-y-10");
                  container.classList.add("opacity-100", "translate-y-0");
                }, 200);
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

  function lazyLoadTrendingBooks() {
    const container = document.getElementById("trending-books-container");
    if (!container) return;

    const observer = new IntersectionObserver(
      async (entries, observer) => {
        entries.forEach(async (entry) => {
          if (entry.isIntersecting) {
            try {
              const res = await fetch(
                "index.php?controller=home&action=trendingBooks"
              );
              const html = await res.text();
              container.innerHTML = html;

              // Animation
              requestAnimationFrame(() => {
                setTimeout(() => {
                  container.classList.remove("opacity-0", "-translate-y-10");
                  container.classList.add("opacity-100", "translate-y-0");
                }, 0.4);
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
      { threshold: 0.2 }
    );

    observer.observe(container);
  }

  function lazyLoadLatestBlogs() {
    const container = document.getElementById("latest-blogs-container");
    if (!container) return;

    const observer = new IntersectionObserver(
      async (entries, observer) => {
        entries.forEach(async (entry) => {
          if (entry.isIntersecting) {
            try {
              const res = await fetch(
                "index.php?controller=home&action=latestBlogs"
              );
              const html = await res.text();
              container.innerHTML = html;

              // Animation
              requestAnimationFrame(() => {
                setTimeout(() => {
                  container.classList.remove("opacity-0", "-translate-y-10");
                  container.classList.add("opacity-100", "translate-y-0");
                }, 500);
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
      { threshold: 0.2 }
    );

    observer.observe(container);
  }

  function lazyLoadImages() {
    const images = document.querySelectorAll("img.lazyload");
    const observer = new IntersectionObserver(
      (entries, observer) => {
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
      },
      { threshold: 0.2 }
    );

    images.forEach((img) => observer.observe(img));
  }

  // Function to handle scroll animations
  function handleScrollAnimations() {
    const animatedElements = document.querySelectorAll(".opacity-0");

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const element = entry.target;

            // Remove initial classes
            element.classList.remove("opacity-0");
            if (element.classList.contains("-translate-x-10")) {
              element.classList.remove("-translate-x-10");
              element.classList.add("translate-x-0");
            }
            if (element.classList.contains("-translate-y-10")) {
              element.classList.remove("-translate-y-10");
              element.classList.add("translate-y-0");
            }
            if (element.classList.contains("translate-x-10")) {
              element.classList.remove("translate-x-10");
              element.classList.add("translate-x-0");
            }

            // Add final classes
            element.classList.add("opacity-100");
          } else {
            // Reset animation when element is not in view
            element.classList.add("opacity-0");
            if (element.classList.contains("translate-x-0")) {
              element.classList.remove("translate-x-0");
              element.classList.add("-translate-x-10");
            }
            if (element.classList.contains("translate-y-0")) {
              element.classList.remove("translate-y-0");
              element.classList.add("-translate-y-10");
            }
            element.classList.remove("opacity-100");
          }
        });
      },
      { threshold: 0.2 }
    );

    animatedElements.forEach((element) => observer.observe(element));
  }

  // GỌI SAU KHI DOM SẴN SÀNG
  lazyLoadDealWeek();
  lazyLoadNewArrivals();
  lazyLoadTrendingBooks();
  lazyLoadLatestBlogs();
  handleScrollAnimations();

  const loadingScreen = document.getElementById("loading-screen");
  const mainContent = document.getElementById("main-container");

  //Loading Screen
  if (loadingScreen) {
    loadingScreen.classList.add("opacity-0", "pointer-events-none");
    setTimeout(() => {
      loadingScreen.classList.add("hidden");
      if (mainContent) {
        mainContent.classList.remove("hidden", "opacity-0");
        mainContent.classList.add(
          "opacity-100",
          "transition-opacity",
          "duration-500"
        );
      }
    }, 10000);
  }

  // Animate Y
  // function animateElementY(className, delay, timeRunCard) {
  //   const els = document.querySelectorAll(className);
  //   if (els.length > 0) {
  //     const observer = new IntersectionObserver(
  //       (entries, observer) => {
  //         entries.forEach((entry) => {
  //           if (entry.isIntersecting) {
  //             setTimeout(() => {
  //               entry.target.classList.remove("opacity-0", "-translate-y-10");
  //               entry.target.classList.add("opacity-100", "translate-y-0");
  //               observer.unobserve(entry.target);
  //             }, delay);
  //           }
  //         });
  //       },
  //       {
  //         threshold: timeRunCard,
  //       }
  //     );
  //     els.forEach((el) => observer.observe(el));
  //   }
  // }

  // animateElementY(".product-card", 350, 0.2);
  // animateElementY(".arrival-book", 450, 0.1);

  // Animate Array X (Use ForEach)
  // function animateArrayX(className, delay, timeRunCard) {
  //   const els = document.querySelectorAll(className);
  //   if (els.length > 0) {
  //     const observer = new IntersectionObserver(
  //       (entries, observer) => {
  //         entries.forEach((entry) => {
  //           if (entry.isIntersecting) {
  //             setTimeout(() => {
  //               entry.target.classList.remove("opacity-0", "-translate-x-10");
  //               entry.target.classList.add("opacity-100", "translate-x-0");
  //               observer.unobserve(entry.target);
  //             }, delay);
  //           }
  //         });
  //       },
  //       {
  //         threshold: timeRunCard,
  //       }
  //     );
  //     els.forEach((el) => observer.observe(el));
  //   }
  // }

  // animateArrayX(".deal-week", 300, 0.1);

  // Animate Array Y (Use ForEach)
  // function animateArrayY(className, delay, timeRunCard) {
  //   const els = document.querySelectorAll(className);
  //   if (els.length > 0) {
  //     const observer = new IntersectionObserver(
  //       (entries, observer) => {
  //         entries.forEach((entry) => {
  //           if (entry.isIntersecting) {
  //             setTimeout(() => {
  //               entry.target.classList.remove("opacity-0", "-translate-y-10");
  //               entry.target.classList.add("opacity-100", "translate-y-0");
  //               observer.unobserve(entry.target);
  //             }, delay);
  //           }
  //         });
  //       },
  //       {
  //         threshold: timeRunCard,
  //       }
  //     );
  //     els.forEach((el) => observer.observe(el));
  //   }
  // }

  // animateArrayY(".latest-blog", 600, 0.3);
});
