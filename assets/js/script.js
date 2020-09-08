$(document).ready(function (e) {

  $('a[data-toggle="tab"]').on('shown.bs.tab', function (event) {
    // console.log('tab shown...');
  });

  var hash = document.location.hash.replace(/#/,'');
  // console.log(hash);
  if (hash) {
    $('.nav-tabs .'+hash).tab('show');
  }

  var akane_tab = $('.akane-tab');
  var momiji_tab = $('.momiji-tab');

  if (akane_tab && momiji_tab) {
    $('a[href$="the-homes#akane-tab"]').on('click', function () {
      $('.nav-tabs .akane-tab').tab('show');
    });

    $('a[href$="the-homes#momiji-tab"]').on('click', function () {
      $('.nav-tabs .momiji-tab').tab('show');
    });
  }
  
});

function seeMores() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("see-more-desc");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "See more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "See less"; 
    moreText.style.display = "inline";
  }
}