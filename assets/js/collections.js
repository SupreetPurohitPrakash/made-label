//show filter content
function showFilter() {
  if ($('.filter-options').css('display') == 'block') {
    $('.filter i').css('transform', 'rotate(0deg)');
    $('.products-container').css('margin-top', '20px');
    setTimeout(() => {
      $('.filter-options').css('display', 'none');
    }, 200);
  } else {
    $('.filter-options').css('display', 'block');
    $('.filter i').css('transform', 'rotate(45deg)');
    $('.products-container').css('margin-top', '200px');
  }
}

//show filter content
function showSort() {
  if ($('.sort-options-list').css('display') == 'block') {
    $('.sort i').css('transform', 'rotate(0deg)');

    $('.sort-options-list').css('display', 'none');
  } else {
    $('.sort-options-list').css('display', 'block');
    $('.sort i').css('transform', 'rotate(45deg)');
  }
}

// change product column
function changeColumn(e) {
  if (e == 'two') {
    $('.products-list').css('grid-template-columns', 'auto auto');
    $('.products-item').css('height', '125vh');
    $('.two-column-icon .active').css('display', 'block');
    $('.two-column-icon .inactive').css('display', 'none');
    $('.four-column-icon .inactive').css('display', 'block');
    $('.four-column-icon .active').css('display', 'none');
  }
  if (e == 'four') {
    $('.products-list').css('grid-template-columns', 'auto auto auto auto');
    $('.products-item').css('height', '70vh');
    $('.two-column-icon .active').css('display', 'none');
    $('.two-column-icon .inactive').css('display', 'block');
    $('.four-column-icon .inactive').css('display', 'none');
    $('.four-column-icon .active').css('display', 'block');
  }
}

// show sizes on clicking qick add
function productSizeShow(e) {
  if ($('#' + e + ' .products-item-details').css('height') == '122px') {
    $('#' + e + ' .products-item-details').css('height', '150px');
    $('#' + e + '.qa-title i').html('remove');
  } else {
    $('#' + e + ' .products-item-details').css('height', '122px');
    $('#' + e + ' .qa-title i').html('add');
  }
}
