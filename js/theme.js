; (function ($) {
    "use strict";

    const appHeight = () => {
        document.documentElement.style.setProperty('--app-height', `${window.innerHeight}px`)
    }
    window.addEventListener('DOMContentLoaded', appHeight)
    window.addEventListener('resize', appHeight)
    
    const mobileDevice = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    mobileDevice && window.addEventListener('scroll', appHeight)    

    let nav_offset_top = $('header').height() + 100;
    /*-------------------------------------------------------------------------------
      Navbar 
    -------------------------------------------------------------------------------*/

    //* Navbar Fixed  
    function navbarFixed() {
        if ($('.header').length) {
            $(window).scroll(function () {
                let scroll = $(window).scrollTop();
                if (scroll >= nav_offset_top) {
                    $(".header").addClass("navbar_fixed");
                } else {
                    $(".header").removeClass("navbar_fixed");
                }
            })
        };
    };
    navbarFixed();


    $('.menu-list li a').each(function () {
        let $this = $(this);
        $this.on('click', function (e) {
            let has = $this.hasClass('open');
            $('.menu-list li a').removeClass('open');
            if (has) {
                $this.removeClass('open');
            } else {
                $this.addClass('open');
            }
        })
    })


    /*-------------------------------------------------------------------------------
      Ajax Forms
    -------------------------------------------------------------------------------*/



    if ($('.js-form').length) {
        $('.js-form').each(function () {
            $(this).validate({
                errorClass: 'error wobble-error',
                submitHandler: function (form) {
                    $.ajax({
                        type: "POST",
                        url: "mail.php",
                        data: $(form).serialize(),
                        success: function () {
                            $('.success-message').show();
                        },

                        error: function () {
                            $('.error-message').show();
                        }
                    })
                }
            })
        })
    }

    /*----------------------------------------------------*/
    /*  Projects Slider
    /*----------------------------------------------------*/
    const filterSliderEl = $('.filter_slider');
    if (filterSliderEl.length) {            
        const sliderClone = filterSliderEl.clone();
        let slidesCount = sliderClone.find('.items').length;
        const filterSlider = filterSliderEl.owlCarousel({
            loop: true,
            margin: 6,
            items: 4,
            nav: true,
            autoplay: true,
            autoplayHoverPause: true,
            smartSpeed: 1500,
            dots: true,
            // navContainer: '.filter_slider',
            navText: [
                '<i class="ion-ios-arrow-left"></i>', 
                '<i class="ion-ios-arrow-right"></i>'
            ],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                575: {
                    items: 2,
                },
                800: {
                    items: 3,
                },
                1200: {
                    items: 4,
                }
            }
        })
    
        $('.portfolio_filter li').on('click', function () {
            $('.portfolio_filter li.active').removeClass('active');
            $(this).addClass('active');
            let filter = $(this).attr('data-filter');
            filterSlider.fadeOut(300);
            setTimeout(() => {
                for (let i = 0; i < slidesCount; i++) {
                    filterSlider.trigger('remove.owl.carousel', i);
                }

                let selector = (filter == "*") ? '.items' : ('.item' + filter);
                let newSlides = sliderClone.find(selector);
                slidesCount = newSlides.length;
                newSlides.each(function() {
                    filterSlider.trigger('add.owl.carousel', $(this).clone());
                })

                filterSlider.trigger('refresh.owl.carousel');
                filterSlider.fadeIn(300);
            }, 300);
            return false;
        })
    }

    /*----------------------------------------------------*/
    /*  Explor Room Slider
    /*----------------------------------------------------*/
    function testimonials_slider() {
        const testSlider = $('.testimonials_slider');
        let activeSlide = 1;
        if (testSlider.length) {
            testSlider.owlCarousel({
                loop: true,
                items: 2,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayHoverPause: true,
                smartSpeed: 1500,
                navContainerClass: 'owl-buttons container',
                navText: ['<i class="ion-ios-arrow-left"></i>', '<i class="ion-ios-arrow-right"></i>'],
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    1400: {
                        items: 2,
                    },
                    2000: {
                        items: 3,
                    }
                }
            })
            testSlider.on('changed.owl.carousel', function(event) {
                activeSlide = event.item.index;
            })
            testSlider.find('.test_item').on('click', function() {
                $('.testimonials_slider').trigger('next.owl.carousel');
            })
        }
    }
    testimonials_slider();

    /*----------------------------------------------------*/
    /*  Explor Room Slider
    /*----------------------------------------------------*/
    function team_slider() {
        if ($('.team_slider').length) {
            $('.team_slider').owlCarousel({
                loop: true,
                margin: 30,
                items: 4,
                nav: true,
                autoplay: true,
                autoplayHoverPause: true,
                smartSpeed: 1500,
                dots: true,
                navContainerClass: 'team_slider',
                navText: ['<i class="ion-ios-arrow-left"></i>', '<i class="ion-ios-arrow-right"></i>'],
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    400: {
                        items: 2,
                    },
                    768: {
                        items: 3,
                    },
                    992: {
                        items: 4,
                    }
                }
            })
        }
    }
    team_slider();

    /*----------------------------------------------------*/
    /*  Villa Slider
    /*----------------------------------------------------*/
    function villa_slider() {
        if ($('.villa_slider').length) {
            $('.villa_slider').owlCarousel({
                loop: true,
                margin: 0,
                items: 1,
                nav: true,
                autoplay: true,
                autoplayHoverPause: true,
                smartSpeed: 1500,
                dots: true,
                navText: ['<i class="ion-ios-arrow-left"></i>', '<i class="ion-ios-arrow-right"></i>'],
                responsiveClass: true,
            })
        }
    }
    villa_slider();

    /*----------------------------------------------------*/
    /*  Villa Slider
    /*----------------------------------------------------*/

    /*----------------------------------------------------*/
    /*  Explor Room Slider
    /*----------------------------------------------------*/
    function clients_slider() {
        const clietnsSlider = $('.clients_slider');
        if (clietnsSlider.length) {
            clietnsSlider.owlCarousel({
                loop: true,
                autoWidth: true,
                margin: 30,
                items: 5,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayHoverPause: true,
                smartSpeed: 1000,
            })
        }
    }
    clients_slider();

    // Add isotope click function
    $(".isotope_fillter li").on('click', function (e) {
        e.preventDefault();
        $(".isotope_fillter li").removeClass("active");
        $(this).addClass("active");
        
        let selector = $(this).attr("data-filter");
        $(".projects_column").hide();
        $(".projects_column" + selector).fadeIn();
        return false;
    })

    $('.open-menu').on('click', function () {
        $('body').addClass('menu-is-opened');
    })
    $('.close-menu, .click-capture').on('click', function () {
        $('body').removeClass('menu-is-opened');
        $('.menu-list ul').slideUp(300);
    })
    let dropToggle = $('.menu-list > li').has('ul').children('a');
    dropToggle.on('click', function () {
        dropToggle.not(this).closest('li').find('ul').slideUp(200);
        $(this).closest('li').children('ul').slideToggle(200);
        return false;
    })

    $('#pp-nav').remove().appendTo('.animsition').prepend('<div class="pp-nav-up icon-chevron-up"></div>').append('<div class="pp-nav-down icon-chevron-down"></div>').addClass('white hidden-xs');

    
    $('.spec_wrapper').hover(function () {
        $('.spec_wrapper').removeClass('col-lg-3 col-lg-4 col-lg-6');
        $('.spec_wrapper').not($(this)).addClass('col-lg-3');
        $(this).addClass('col-lg-6');
    }, function () {
        $('.spec_wrapper').removeClass('col-lg-3 col-lg-4 col-lg-6');
        $('.spec_wrapper').addClass('col-lg-4');
    })

    AOS && AOS.init({
        duration: 500,
        once: false,
        mirror: true,
    })

    // Forms inputs
    $("input, textarea").change(function () {
        let e = $(this);
        e.val().length > 0 ? (e.addClass("not-empty")) : (e.removeClass("not-empty"));
    })
    
    // Diamond lines animation
    const diamond = $('.diamond');
    if (diamond) {
        const lines = $('.diamond svg').length;
        $('.diamond svg').each(function() {
            let index = $(this).index();
            let delay = 0.3 + Math.abs(index - lines / 2) * 0.05;
            $(this).css({'transition-delay': delay + 's'})
        })
    }
    
    // Map points animation
    const map = $('.map');
    if (map) {
        $('.map__point').each(function() {
            let index = $(this).index();
            let delay = 0.5 + index * 0.2;
            $(this).css({'animation-delay': delay + 's'})
        })

        const hashFilter = window.location.hash.substr(1);
        hashFilter && setTimeout(() => {
            mapScrollFilter(hashFilter)
        }, 300);

        $('.map__point').on('click', function(e) {
            if(this.pathname === window.location.pathname){
                e.preventDefault();
                const filter = $(this).attr('href').split('#').pop();
                mapScrollFilter(filter);
            }
        })

        function mapScrollFilter(filter) {
            const scrollPos = $(".map_filter").offset().top - 200;
            $('html, body').animate({scrollTop: scrollPos}, 700);
                
            setTimeout(() => {
                $(`.map_filter li[data-filter='.${filter}']`).trigger("click");
            }, 700);
        }
    }

    // Patterns animation
    const patterns = $('.pattern');
    if (patterns) {
        const widthTo = patterns.eq(0).width();
        patterns.css({width: '100%'})
        const widthFrom = patterns.eq(0).width();
        const widthDiff = widthFrom - widthTo;
        const winHeight = window.innerHeight;
        const scrollPatterns = function(state){
            const scrollTop = window.pageYOffset;
            patterns.each(function(){
                const pattern = $(this);
                const elTop = pattern.offset().top;
                const index = 1 - (scrollTop + winHeight - elTop) / winHeight * 1.1;

                if (index > 0 && index < 1) {
                    const newWidth = widthTo + widthDiff * index;
                    TweenLite.to(pattern, 0.5, {
                        width: newWidth
                    })
                }
                
                if (state == 'init' && index < 0) {
                    patterns.css({width: widthTo + 'px'})
                }
            })
        };

        scrollPatterns('init');
        window.addEventListener('scroll', scrollPatterns);
    }

    // Feature slider
    const featureSlider = document.querySelector('.feature-slider');
    if (featureSlider) {
        const pageFlip = new St.PageFlip(featureSlider,
            {
                width: 387,
                height: 600,
                size: "fixed",
                autoSize: false,
                mobileScrollSupport: false
            }
        );
        pageFlip.loadFromHTML(document.querySelectorAll('.feature-slider__item'));
    }

    // Feature lopue
    const featureLoupe = document.querySelector('.feature-loupe');
    if (featureLoupe) {
        featureLoupe.classList.add('show');

        const el = featureLoupe.querySelector('.feature-loupe__el');
        const img = featureLoupe.querySelector('.feature-loupe__img img');

        let elW, elH, 
            wrapperW, wrapperH, 
            diffW, diffH,
            startX, startY, 
            moveX, moveY;

        const loupeInit = () => {
            elW = el.offsetWidth,
            elH = el.offsetHeight,
            wrapperW = featureLoupe.offsetWidth,
            wrapperH = featureLoupe.offsetHeight,
            diffW = wrapperW - elW,
            diffH = wrapperH - elH,
            startX = 0,
            startY = 0,
            moveX = 0,
            moveY = 0;
                  
            img.style.width = `${wrapperW}px`;
            img.style.height = `${wrapperH}px`;    
            
            moveEl();
        }
        
        loupeInit();
        window.addEventListener('resize', loupeInit);

        el.onmousedown = dragStart;
        el.addEventListener("touchstart", dragStart, false);
    
        function dragStart(e) {
            e = e || window.event;
            e.preventDefault();
            if (e.touches) {
                e = e.touches[0];
                el.addEventListener("touchmove", dragMove, false);
                el.addEventListener("touchend", dragStop, false);
            } else {
                document.onmousemove = dragMove;
                document.onmouseup = dragStop;
            }
            startX = e.clientX - moveX;
            startY = e.clientY - moveY;
        }
    
        function dragMove(e) {
            e = e || window.event;
            e.preventDefault();
            if (e.touches) {
                e = e.touches[0];
            }
            moveX = e.clientX - startX;
            moveY = e.clientY - startY;
            moveEl();
        }
    
        function dragStop() {
            calcBorders();
            document.onmouseup = null;
            document.onmousemove = null;
        }

        function calcBorders() {
            let overflow = false;
            let posLeft = el.offsetLeft + moveX;
            let posTop = el.offsetTop + moveY;

            if (posLeft < 0) {
                moveX -= posLeft;
                overflow = true;
            }
            if (posTop < 0) {
                moveY -= posTop;
                overflow = true;
            }
            if (posLeft > diffW) {
                moveX -= (posLeft - diffW);
                overflow = true;
            }
            if (posTop > diffH) {
                moveY -= (posTop - diffH);
                overflow = true;
            }
            
            overflow && animateEl();
        }

        function moveEl() {
            el.style.transform = `translate(${moveX}px, ${moveY}px)`;
            img.style.transform = `translate(${-moveX}px, ${-moveY}px)`;
        }

        function animateEl() {
            const speed = 250;
            el.style.transition = `transform ${speed}ms`;
            img.style.transition = `transform ${speed}ms`;
            setTimeout(() => {
                el.style.transition = null;
                img.style.transition = null;
            }, speed);
            moveEl();
        }
    }

})(jQuery)

// Blog text toggle full
const toggleBtns = document.querySelectorAll('.toggle_btn');
const toggleTexts = document.querySelectorAll('.toggle_text');

toggleBtns && toggleTexts && toggleBtns.forEach(toggleBtn => {
    toggleBtn.addEventListener('click', e => {
        accordion(e, toggleBtn);
    })
})

function accordion(e, toggleBtn) {
    e.preventDefault();
    const toggleText = toggleBtn.previousElementSibling;

    toggleBtn.classList.toggle('active');
    toggleText.classList.toggle('active');

    if (toggleText.style.maxHeight) {
        toggleText.style.maxHeight = null;
    } else {
        toggleText.style.maxHeight = toggleText.scrollHeight + "px";
    }

    setTimeout(() => {
        AOS && AOS.refresh();
    }, 500)
}


// Counter numbers
const initCounters = () => {
    const counterItems = document.querySelectorAll('.js-counter');

    if (counterItems.length) {
        let countersStarted = 0;
        
        const scrollCounters = () => {
            if (countersStarted == counterItems.length) {
                window.addEventListener('scroll', scrollCounters);
                return;
            }

            counterItems.forEach((item) => {
                if (!item.classList.contains('active') && isInViewport(item)) {
                    let value = parseInt(item.getAttribute('data-count').replace(/\s/g, ''));
                    countersStarted++;
                    item.classList.add('active');

                    let timeout = 0;
                    if (item.closest('.banner-feature')) timeout = 500;
                    setTimeout(() => {
                        animateValue(item, 0, value, 3000);                        
                    }, timeout);
                }
            })
        };

        scrollCounters();
        window.addEventListener('scroll', scrollCounters);
    }

    function animateValue(obj, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            let progress = Math.min((timestamp - startTimestamp) / duration, 1);
            let newVal = Math.floor(progress * (end - start) + start);
            obj.innerHTML = newVal.toLocaleString().replace(/,/g," ",);
            progress < 1 && window.requestAnimationFrame(step);
        };
        window.requestAnimationFrame(step);
    }
    
};

window.addEventListener('DOMContentLoaded', initCounters);

function isInViewport (el) {
    const rect = el.getBoundingClientRect();
    return (rect.top >= 0 && rect.bottom <= window.innerHeight);
}

class Cursor {
    constructor() {
        this.cursor = document.querySelector(".cursor");
        this.inited = false;
    }

    isMobile() {
        return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    }

    init() {
        const cursor = this.cursor;
        let inited = this.inited;

        if (this.isMobile()) return;

        const targets = 'a, button, input, textarea, .target, .owl-prev, .owl-next';

        document.addEventListener("mouseover", function (e) {
            e.target.closest(targets) && cursor.classList.add('cursor--hovered');
        })

        document.addEventListener("mouseout", (e) => {
            e.target.closest(targets) && cursor.classList.remove('cursor--hovered');
        })

        window.onmousemove = function (e) {
            let mouseX = e.clientX;
            let mouseY = e.clientY;
            if (!inited) {
                cursor.style.opacity = 1;
                TweenLite.to(cursor, 0.3, {
                    opacity: 1
                })
                inited = true;
            }
            TweenLite.to(cursor, 0, {
                top: mouseY + 10 + "px",
                left: mouseX + 10 + "px"
            })
        };

        window.onmouseout = function (e) {
            cursor.style.opacity = 0;
            TweenLite.to(cursor, 0.3, {
                opacity: 0
            })
            inited = false;
        }
    }
}

window.addEventListener('DOMContentLoaded', () => {
    initCounters();
    new Cursor().init();
})