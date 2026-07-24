/*--------------------- Copyright (c) 2025 -----------------------
[Master Javascript]
Project:
-------------------------------------------------------------------*/
(function($) {
    "use strict";
    var ShowcaseAI = {
        initialised: false,
        version: 1.0,
        mobile: false,
        init: function() {
            if (!this.initialised) {
                this.initialised = true;
            } else {
                return;
            }
            /*---------------------- ShowcaseAI Functions Calling ----------------------*/
            this.StickyHeader();
            this.ButtonEffect();
            this.TypingText();
            this.FooterCopyright();
            this.BannerSlider();
            this.VideoLazyLoad();
            this.Shimmer();

        },

        /*---------------------- ShowcaseAI Functions Calling ----------------------*/

        // Sticky Header
		StickyHeader: function() {
            $(window).scroll(function () {
                var wh = window.innerWidth;
                if (wh >= 0) { // Run on 1200px and above
                var window_top = $(window).scrollTop() + 1;
                if (window_top > 100) {
                    $(".fe_header_wrap").addClass("fe_header_fixed");
                } else {
                    $(".fe_header_wrap").removeClass("fe_header_fixed");
                }
                } else {
                // Remove sticky class below 1200px
                $(".fe_header_wrap").removeClass("fe_header_fixed");
                }
            });
        },
		// Sticky Header
        // Button Effect
        ButtonEffect: function() {
            if ($('.animated_btn').length > 0) {
                document.querySelectorAll('.animated_btn').forEach(function(button) {
                    button.onmousemove = function(e) {
                        var rect = e.target.getBoundingClientRect();
                        var x = e.clientX - rect.left;
                        var y = e.clientY - rect.top;
                        e.target.style.setProperty('--x', x + 'px');
                        e.target.style.setProperty('--y', y + 'px');
                    };
                });

                document.querySelectorAll('.sc_secondary_btn').forEach(function(button) {
                    button.onmousemove = function(e) {
                        var rect = e.target.getBoundingClientRect();
                        var x = e.clientX - rect.left;
                        var y = e.clientY - rect.top;
                        e.target.style.setProperty('--x', x + 'px');
                        e.target.style.setProperty('--y', y + 'px');
                    };
                });
            }
        },
        // Button Effect
        TypingText: function () {
          let wordcount = 0;
          const initText = "Product Videos";
          const wordsArray = [
            "UGC-Style Videos",
              "Video Ads",
              "Explainer Videos",
              "Product Showcase Videos",
              "Talking Avatars"
          ];

          const $banner = $(".banner_word");

          if ($banner.length === 0) return; // safety check

          // Set initial text
          $banner.text(initText);

          // Start animation after 2 seconds
          setTimeout(function () {
              setInterval(function () {
                  $banner.fadeOut(400, function () {
                      $(this)
                          .text(wordsArray[wordcount % wordsArray.length])
                          .fadeIn(400);
                      wordcount++;
                  });
              }, 2500);
          }, 2000);
        },

        // Banner Slider
       BannerSlider: function() {
            if ($('.sc_banner_slider').length > 0) {
                var swiper = new Swiper(".sc_banner_slider", {
                    slidesPerView: 7,
                    loop: true,
                    spaceBetween: 20,
                    speed: 2000,
                    centeredSlides: true,
                    lazy: {
                        loadPrevNext: true,
                    },
                    autoplay: {
                        delay: 2000,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    breakpoints: {
                        0: { slidesPerView: 1, spaceBetween: 10 },
                        320: { slidesPerView: 2, spaceBetween: 10 },
                        526: { slidesPerView: 3, spaceBetween: 10 },
                        768: { slidesPerView: 4, spaceBetween: 10 },
                        1025: { slidesPerView: 5, spaceBetween: 10 },
                        1200: { slidesPerView: 6, spaceBetween: 15 },
                        1441: { slidesPerView: 7, spaceBetween: 20 },
                    },
                });
                const sliderEl = document.querySelector(".sc_banner_slider");
                sliderEl.addEventListener("mouseenter", function() {
                    swiper.autoplay.stop();
                });
                sliderEl.addEventListener("mouseleave", function() {
                    swiper.autoplay.start();
                });
            }
        },
        // Banner Slider

        // Footer Copyright
        FooterCopyright: function() {
            document.getElementById('currentYear').textContent = new Date().getFullYear();
        },
        // Footer Copyright
        // Video Lazy Load
        VideoLazyLoad: function() {
            document.addEventListener("DOMContentLoaded", () => {
                const lazyIframes = document.querySelectorAll("iframe.lazy-iframe");
                const observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const iframe = entry.target;
                            iframe.src = iframe.dataset.src;
                            observer.unobserve(iframe);
                        }
                    });
                });
                lazyIframes.forEach(iframe => observer.observe(iframe));
            });

            const lazyVideos = document.querySelectorAll("video.lazy-video");
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const video = entry.target;
                        const source = video.querySelector("source[data-src]");
                        if (source) {
                            source.src = source.dataset.src;
                            video.load();
                        }
                        observer.unobserve(video);
                    }
                });
            });
            lazyVideos.forEach(video => observer.observe(video));
        },
        // Video Lazy Load
        // Shimmer
        Shimmer: function() {
            if ($('.video-wrapper').length > 0) {
                document.addEventListener("DOMContentLoaded", () => {
                    const videos = document.querySelectorAll(".video-wrapper");
                    videos.forEach(wrapper => {
                        const video = wrapper.querySelector("video");
                        const source = video.querySelector("source");
                        if (source && source.dataset.src) {
                        video.src = source.dataset.src;
                        }
                        video.addEventListener("loadeddata", () => {
                        wrapper.classList.add("loaded");
                        });
                    });
                });
            }
        },
        // Shimmer






    };

    ShowcaseAI.init();
}(jQuery));
