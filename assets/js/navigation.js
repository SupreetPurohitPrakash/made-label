// //  navbar scoll js

// window.onscroll = function () {
//   myFunction();
// };

// var header = document.getElementById('nav-container');
// var sticky = header.offsetTop;

// function myFunction() {
//   if (window.pageYOffset > sticky) {
//     header.style = 'box-shadow: -1px 0px 24px -2px rgba(74, 73, 74, 0.3);';
//   } else {
//     header.classList = 'box-shadow: none';
//   }
// }

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
