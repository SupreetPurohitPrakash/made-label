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
    })
}