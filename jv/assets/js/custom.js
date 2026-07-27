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
            this.HeaderMenu();            
            this.VideoLazyLoad();
            this.ButtonEffect();
			this.GsapScrollTextAnimation();	
            this.Shimmer();
            this.ClickPlayVideo();								
			this.TabVideo();
			this.FooterCopyright();			
            this.AOSAnimation();		
        },

        /*---------------------- ShowcaseAI Functions Calling ----------------------*/

		// Sticky Header
		StickyHeader: function() {	
            $(window).scroll(function () {
                var wh = window.innerWidth;
                if (wh >= 1200) { // Run on 1200px and above
                var window_top = $(window).scrollTop() + 1;
                if (window_top > 300) {
                    $(".sc_header_wrapper").addClass("sc_header_fixed");
                } else {
                    $(".sc_header_wrapper").removeClass("sc_header_fixed");
                }
                } else {
                // Remove sticky class below 1200px
                $(".sc_header_wrapper").removeClass("sc_header_fixed");
                }
            });
        },

		// Sticky Header

        // Header Menu
		HeaderMenu: function(){
			$('.sc_toggle_menu').on('click', function(){
				$('body').toggleClass('scMenuOpen');
			})
		},
		// Header Menu	

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

        // Button Effect		
        ButtonEffect: function() {
            if ($('.sc_primary_btn').length > 0) {
                document.querySelectorAll('.sc_primary_btn').forEach(function(button) {
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

		// GSAP Text Scroll Animation
		GsapScrollTextAnimation: function () {
            if (window.innerWidth > 768) {
                if ($('.sc_gredient_heading').length > 0) {
                    gsap.registerPlugin(ScrollTrigger);
                    document.querySelectorAll(".sc_top_heading").forEach((el) => {
                        gsap.to(el, {
                            scale: 1,
                            ease: "power2.out",
                            scrollTrigger: {
                                trigger: el,
                                start: "top 80%",
                                end: "bottom 20%",
                                scrub: true
                            }
                        });
                    });

                    document.querySelectorAll(".sc_feat_number").forEach((el) => {
                        gsap.to(el, {
                            scale: 1,
                            ease: "expo.out",
                            scrollTrigger: {
                                trigger: el,
                                start: "top 80%",
                                end: "bottom 0%",
                                scrub: true
                            }
                        });
                    });

                    document.querySelectorAll(".sc_placehold_logo").forEach((el) => {
                        gsap.to(el, {
                            scale: 1,
                            ease: "expo.out",
                            scrollTrigger: {
                                trigger: el,
                                start: "top 80%",
                                end: "bottom 0%",
                                scrub: true
                            }
                        });
                    });
                }
            }
        },
		// GSAP Text Scroll Animation

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

        // Click Play Video
        ClickPlayVideo: function() {
            if ($('.sc_volume_icon').length > 0) {
                document.addEventListener('click', function (e) {
                    // Check if play icon clicked
                    const iconWrapper = e.target.closest('.sc_volume_icon');
                    const videoClicked = e.target.closest('video');
                    
                    // If clicked on icon
                    if (iconWrapper) {
                        const box = iconWrapper.closest('.sc_explore_box');
                        const video = box.querySelector('video');
                    
                        // Pause all other videos
                        document.querySelectorAll('.sc_explore_box video').forEach(v => {
                        if (v !== video) {
                            v.pause();
                            box.style = "cursor: pointer;";
                            const otherIcon = v.closest('.sc_explore_box').querySelector('.sc_volume_icon');
                            if (otherIcon) otherIcon.style.display = 'flex';
                        }
                        });
                    
                        // Lazy-load video if needed
                        const source = video.querySelector('source');
                        if (source && source.dataset.src && !source.src) {
                        source.src = source.dataset.src;
                        video.load();
                        }
                    
                        // Toggle play / pause
                        if (video.paused) {
                        video.muted = false; // play with sound if desired
                        video.play().catch(err => console.log('Autoplay blocked:', err));
                        iconWrapper.style.display = 'none'; // hide play icon
                        } else {
                        video.pause();
                        iconWrapper.style.display = 'flex'; // show play icon
                        }
                    }
                    
                    // If clicked directly on the video
                    if (videoClicked) {
                        const box = videoClicked.closest('.sc_explore_box');
                        const icon = box.querySelector('.sc_volume_icon');
                    
                        if (!videoClicked.paused) {
                        videoClicked.pause();
                        icon.style.display = 'flex'; // show play icon
                        } else {
                        // pause all others before playing this one
                        document.querySelectorAll('.sc_explore_box video').forEach(v => {
                            if (v !== videoClicked) {
                            v.pause();
                            const otherIcon = v.closest('.sc_explore_box').querySelector('.sc_volume_icon');
                            if (otherIcon) otherIcon.style.display = 'flex';
                            }
                        });
                        videoClicked.play().catch(() => {});
                        icon.style.display = 'none'; // hide icon
                        }
                    }
                    });
                    
                    // Automatically show icon when video ends or pauses
                    document.addEventListener('pause', function (e) {
                    if (e.target.tagName.toLowerCase() === 'video') {
                        const box = e.target.closest('.sc_explore_box');
                        if(box) {
                            const icon = box.querySelector('.sc_volume_icon');
                            if (icon) icon.style.display = 'flex';
                        }
                    }
                }, true);
            }
        },
        // Click Play Video

        // Pause Video when click tab
        TabVideo: function() {
           if ($('.nav-item').length > 0) {
                $(".nav-item").on("click", function() {    
                    $('#myTabContent').find("video").each(function() {
                        this.pause();
                    });                    
                    $('#myTabContent').find("iframe[src*='vimeo.com']").each(function() {
                        this.contentWindow.postMessage('{"method":"pause"}', "*");
                    });
                });
            }
        },
        // Pause Video when click tab

        // Footer Copyright
        FooterCopyright: function() {
            document.getElementById('currentYear').textContent = new Date().getFullYear();
        },
        // Footer Copyright

         // AOS Animation
        AOSAnimation: function() {
            AOS.init({
                duration: 800,
            });

            window.addEventListener("resize", () => {
                AOS.refresh();
            });
        },
    };

    ShowcaseAI.init();
}(jQuery));
