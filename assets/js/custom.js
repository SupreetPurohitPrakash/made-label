// < !--show top and skirt description----------------------------------- >

function showTopDetails() {
    if ($('.tsdc-top-desc').css('display') == 'block') {
        $('.tsdc-top-desc').css('display', 'none');
    } else {
        $('.tsdc-top-desc').css('display', 'block');
    }
    $('.tsdc-skirt-desc').css('display', 'none');
    $('.size-guide-table').css('display', 'none');
}

function showSkirtDetails() {
    if ($('.tsdc-skirt-desc').css('display') == 'block') {
        $('.tsdc-skirt-desc').css('display', 'none');
    } else {
        $('.tsdc-skirt-desc').css('display', 'block');
    }
    $('.tsdc-top-desc').css('display', 'none');
    $('.size-guide-table').css('display', 'none');
}

// size guide toggle-----------------------------------------------
function SizeGuideToggle() {
    if ($('.size-guide-table').css('display') == 'block') {
        $('.size-guide-table').css('display', 'none');
    } else {
        $('.size-guide-table').css('display', 'block');
    }
    $('.tsdc-skirt-desc').css('display', 'none');
}

function showCm() {
    $('.sgb-table1').css('display', 'block');
    $('.sgb-table2').css('display', 'none');
    $('.sg-inches').css('border-bottom', '0px solid black');
    $('.sg-cm').css('border-bottom', '1px solid black');
}

function showInches() {
    $('.sgb-table1').css('display', 'none');
    $('.sgb-table2').css('display', 'block');
    $('.sg-inches').css('border-bottom', '1px solid black');
    $('.sg-cm').css('border-bottom', '0px solid black');
}

// navbar toggle button

function NavToggle() {
    var nav = document.getElementById('nav-left-list');
    if (nav.style.display == 'flex') {
        nav.style.display = 'none';
    } else {
        nav.style = 'display:flex; animation: slideInnav 0.3s ease;';
    }
}

//  change favourite icons on hover-- >

function changeFavIcon(elem) {
    $('#fav-icon').html(elem);
}

//   search from toggle-- >

function toggleSearch() {
    var s_form = document.getElementById('search-form');
    if (s_form.style.display == 'flex') {
        s_form.style = 'animation:contract_search 0.2s ease';
        setTimeout(() => {
            s_form.style = 'display:none';
        }, 300);
    } else {
        s_form.style = 'display:flex; animation:expand_search 0.3s ease';
    }
}

$('.blog-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 476.213 476.213" style="enable-background:new 0 0 476.213 476.213;" xml:space="preserve"><polygon points="476.213,223.107 57.427,223.107 151.82,128.713 130.607,107.5 0,238.106 130.607,368.714 151.82,347.5 57.427,253.107 476.213,253.107 "/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>',
    nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 476.213 476.213" style="enable-background:new 0 0 476.213 476.213;" xml:space="preserve"><polygon points="345.606,107.5 324.394,128.713 418.787,223.107 0,223.107 0,253.107 418.787,253.107 324.394,347.5 345.606,368.713 476.213,238.106 "/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>',
    responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                arrows: true
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

$('.dressmix-recipe-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    arrow: true,
    fade: true,
    speed: 100,
    drag: false,
    prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="125.634" height="237.126" viewBox="0 0 125.634 237.126"> <path id="Path_1" data-name="Path 1" d="M753.351,751.033,638.323,866.06,753.351,981.088" transform="translate(-631.252 -747.497)" fill="none" stroke="#000" stroke-width="25"/></svg></button>',
    nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="125.634" height="237.126" viewBox="0 0 125.634 237.126"> <path id="Path_1" data-name="Path 1" d="M753.351,751.033,638.323,866.06,753.351,981.088" transform="translate(756.886 984.623) rotate(180)" fill="none" stroke="#000" stroke-width="25"/></svg></button>',
});

$('.dressmix-recipe-slider').on('afterChange', function (event, slick, currentSlide, nextSlide) {
    dressResult();
});

function dressResult() {
    var topId = $('.dressmix-recipe-top .slick-active img').attr('data-id');
    var botId = $('.dressmix-recipe-bot .slick-active img').attr('data-id');

    // img selection
    var resultImg = $('.dressmix-result-img img');
    resultImg.removeClass('active');
    resultImg.each(function () {
        if ($(this).attr('data-id') == topId + botId) {
            $(this).addClass('active');
        }
    })
    // desc selection
    var descItem = $('.tsdc-item');
    descItem.removeClass('active');
    descItem.each(function () {
        if ($(this).attr('data-id') == topId + botId) {
            $(this).addClass('active');
        }
    });

}

$('.shop-filter-title').click(function () {
    var filterItem = $(this).parents('.shop-filter-item');
    var filterList = filterItem.find('.shop-filter-list');

    if (filterItem.hasClass('open')) {
        filterList.slideUp();
        setTimeout(function () {
            filterItem.removeClass('open');
        }, 300);
    } else {
        filterList.slideDown();
        setTimeout(function () {
            filterItem.addClass('open');
        }, 300);
    }
})

$('.shop-filter-list li').click(function () {
    $(this).toggleClass('selected');
});

$('.shop-filter-footer').click(function () {
    $('.shop-filter-list .selected').removeClass('selected');
});

$('.shop-illustrationtoggle').click(function () {
    if ($(this).hasClass('active')) {
        $(this).removeClass('active');
        $('.product-card-img-illustrate').removeClass('active');
    } else {
        $(this).addClass('active');
        $('.product-card-img-illustrate').addClass('active');
    }
});

$('.fav-btn').click(function () {
    $(this).toggleClass('active')
});

function shopImageRatio() {
    $('.product-card-img').each(function () {
        var itemWidth = $(this).width();
        var itemHeight = (itemWidth * 3) / 2;
        $(this).css('height', itemHeight);
    });
}

if ($('.product-card-img')[0]) {
    shopImageRatio();
    $(window).resize(function () {
        shopImageRatio();
    })
}

$('.shop-filter-btn').click(function () {
    $('.shop-filter').addClass('open');
    $('.shop-illustrationtoggle').hide();
})
$('.shop-filter-close').click(function () {
    $('.shop-filter').removeClass('open');
    $('.shop-illustrationtoggle').show();
});

$('.shop-sort').click(function () {
    $(this).toggleClass('open');
});

$(document).click(function (e) {

    // not an optimal use of selectors, but it works

    if ($(e.target).parentsUntil('.shop-sort')[0] !== $('.shop-sort').find('li.selected')[0]) {

        $('.shop-sort').removeClass('open');

    }

});