/*--------------------- Copyright (c) 2026 -----------------------
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
			      
            this.VideoLazyLoad();
            this.ButtonEffect();
            this.TabVideo();   
            this.BannerParticle(); 
            this.Shimmer();
            this.ClickPlayVideo();
            this.FooterCopyright();    
            this.AOSAnimation();        
        },

        /*---------------------- ShowcaseAI Functions Calling ----------------------*/

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

        // Banner Particle
        BannerParticle: function () {
            let canvas = document.getElementById('bodyParticalCanvas');
            let ctx = canvas.getContext('2d');
            let width = window.innerWidth;
            let height = window.innerHeight;

            class Particle {
                constructor() {
                    this.x = 0;
                    this.y = 0;
                    this.vx = 0;
                    this.vy = 0;
                    this.accelX = 0;
                    this.accelY = 0;
                    this.life = 2000;
                    this.alpha = 1;
                    this.size = 2;
                }
                update() {
                    this.vx += this.accelX;
                    this.vy += this.accelY;
                    this.x += this.vx;
                    this.y += this.vy;
                }
                draw(ctx) {
                    ctx.fillStyle = `rgba(255, 255, 255, ${this.alpha})`;
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                    ctx.fill();
                    ctx.closePath();
                }
                isAlive() {
                    return this.life >= 0;
                }
            }

            class ParticleSystem {
                constructor() {
                    this.particles = [];
                    this.updateHandler = undefined;
                }
                addParticle(particle) {
                    this.particles.push(particle);
                }
                update(deltaTime = 0) {
                    this.particles.forEach(particle => {
                        particle.update(deltaTime);
                        this.updateHandler && this.updateHandler(particle);
                    });
                }
                onUpdate(fn) {
                    this.updateHandler = fn;
                }
            }

            let system = new ParticleSystem();

            for (let i = 0; i < 200; i++) {
                let particle = new Particle();
                particle.x = Math.random() * width;
                particle.y = Math.random() * height;
                particle.life = Math.random() * 10000 + 10000;
                particle.maxLife = particle.life;
                particle.size = Math.random() * 0.9;
                system.addParticle(particle);
            }

            system.onUpdate((particle) => {
                if (!particle.isAlive()) {
                    particle.x = Math.random() * width;
                    particle.y = Math.random() * height;
                    particle.vx = 0;
                    particle.vy = 0;
                    particle.life = Math.random() * 10000 + 10000;
                    particle.maxLife = particle.life;
                }

                particle.life -= 10;
                particle.accelX = (Math.random() - 0.5) * 0.02;
                particle.accelY = (Math.random() - 0.5) * 0.02;

                if (particle.life >= particle.maxLife / 2) {
                    particle.alpha = 1 - (particle.life / particle.maxLife);
                } else {
                    particle.alpha = particle.life / particle.maxLife;
                }

                particle.update();
            });

            function update() {
                system.update();
            }
            function draw() {
                ctx.clearRect(0, 0, width, height); 
                ctx.globalCompositeOperation = 'lighter';
                system.particles.forEach(particle => particle.draw(ctx));
            }

            function render() {
                update();
                draw();
                requestAnimationFrame(render);
            }

            function setup() {
                canvas.width = width;
                canvas.height = height;
            }

            function init() {
                setup();
                render();
            }

            init();
        },
        // Banner Particle

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
