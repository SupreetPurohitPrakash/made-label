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

// slider1 script------------------------------------------------------
var slideIndex1 = 1;
var slideIndex2 = 1;
var top_img, skirt_img;
var top_id, skirt_id;
var top_skirt_id;
var disable_func;

window.onload = () => {
  disable_func = true;
  showSlides1(slideIndex1);
  showSlides2(slideIndex2);
  insertTable();
  disable_func = false;
};

// -----------------------------------------------------
function plusSlides1(n) {
  showSlides1((slideIndex1 += n));
}

function currentSlide1(n) {
  showSlides1((slideIndex1 = n));
}

function showSlides1(n) {
  var i;
  var slides = document.getElementsByClassName('mySlides1');
  if (n > slides.length) {
    slideIndex1 = 1;
  }
  if (n < 1) {
    slideIndex1 = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';
  }
  slides[slideIndex1 - 1].style.display = 'block';
  // getting image name from src of current element
  top_img = slides[slideIndex1 - 1].children[0].currentSrc
    .split('/')
    .pop()
    .split('.')[0];
  // console.log(top_img);
  // getting id from image container data-id
  top_id = slides[slideIndex1 - 1].getAttribute('data-id');
  showCombinedImage();
  if (disable_func == false) {
    showTopSkirtDetail();
  }
}

// slider2 script------------------------------------------------------

function plusSlides2(n) {
  showSlides2((slideIndex2 += n));
}

function currentSlide2(n) {
  showSlides2((slideIndex2 = n));
}

function showSlides2(n) {
  var i;
  var slides = document.getElementsByClassName('mySlides2');
  if (n > slides.length) {
    slideIndex2 = 1;
  }
  if (n < 1) {
    slideIndex2 = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';
  }
  slides[slideIndex2 - 1].style.display = 'block';
  // getting image name from src of current element
  skirt_img = slides[slideIndex2 - 1].children[0].currentSrc
    .split('/')
    .pop()
    .split('.')[0];
  // console.log(skirt_img);
  skirt_id = slides[slideIndex2 - 1].getAttribute('data-id');
  showCombinedImage();
  if (disable_func == false) {
    showTopSkirtDetail();
  }
}

// showing outline combined image  function
function showCombinedImage() {
  var combined_img = top_img + '-' + skirt_img + '.png';
  var combined_path = 'assets/images/tops-skirt-image/' + combined_img;
  document.getElementById('tsc-img').setAttribute('src', combined_path);

  // now showing respective details of item
}

function showTopSkirtDetail() {
  var tsdc_item = document.getElementsByClassName('tsdc-item');
  for (let i = 0; i < tsdc_item.length; i++) {
    tsdc_item[i].style = 'display:none';
  }
  top_skirt_id = 'top-skirt-' + top_id + skirt_id;
  var top_skirt_show = document.getElementById(top_skirt_id);
  top_skirt_show.style = 'display:block';
}

function insertTable() {
  var table = `
            <div class="size-guide-cm-inches" >
              <span class="sg-cm" onclick="showCm()">cm</span>
              <span class="sg-inches" onclick="showInches()">inches</span>
            </div>
            <div class="sgb-table1">
                <table>
                    <thead>
                        <tr>
                            <td>SIZE</td>
                            <td>XXS</td>
                            <td>XS</td>
                            <td>S</td>
                            <td>M</td>
                            <td>L</td>
                            <td>XL</td>
                            <td>XXL</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BUST</td>
                            <td>88</td>
                            <td>92</td>
                            <td>96</td>
                            <td>100</td>
                            <td>104</td>
                            <td>108</td>
                            <td>113</td>
                        </tr>
                        <tr>
                            <td>TOTAL LENGTH</td>
                            <td>82</td>
                            <td>83</td>
                            <td>84</td>
                            <td>85</td>
                            <td>86</td>
                            <td>87</td>
                            <td>88</td>
                        </tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="sgb-table2">
                <table>
                    <thead>
                        <tr>
                            <td>SIZE</td>
                            <td>XXS</td>
                            <td>XS</td>
                            <td>S</td>
                            <td>M</td>
                            <td>L</td>
                            <td>XL</td>
                            <td>XXL</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BUST</td>
                            <td>34.65</td>
                            <td>36.22</td>
                            <td>37.80</td>
                            <td>39.37</td>
                            <td>40.94</td>
                            <td>42.52</td>
                            <td>44.49</td>
                        </tr>
                        <tr>
                            <td>TOTAL LENGTH</td>
                            <td>32.28</td>
                            <td>32.68</td>
                            <td>33.07</td>
                            <td>33.46</td>
                            <td>33.86</td>
                            <td>34.25</td>
                            <td>34.65</td>
                        </tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        `;
  $('.size-guide-table').html(table);
}
