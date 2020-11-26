$(document).ready(function () {
  $(".filter #label").click(function () {
    $(".filter .filter-inner").toggle();
    $(".filter #label::after").show();
  });
});

// Archive Filters

// $(document).ready(function () {
//   $(".filter #label").click(function () {
//     $("#primary .meetings").show();
//     $("#primary .conferences-symposia").show();
//     $("#primary .workshops").show();
//     $("#primary .field-works").show();
//   });
// });

$(document).ready(function () {
  $(".filter .meetings").click(function () {
    $("#primary .meetings").show();
    $("#primary .conferences-symposia").hide();
    $("#primary .workshops").hide();
    $("#primary .field-works").hide();
    $(".filter .filter-inner").hide();
  });
});

$(document).ready(function () {
  $(".filter .conferences-symposia").click(function () {
    $("#primary .conferences-symposia").show();
    $("#primary .meetings").hide();
    $("#primary .workshops").hide();
    $("#primary .field-works").hide();
    $(".filter .filter-inner").hide();
  });
});

$(document).ready(function () {
  $(".filter .workshops").click(function () {
    $("#primary .workshops").show();
    $("#primary .meetings").hide();
    $("#primary .conferences-symposia").hide();
    $("#primary .field-works").hide();
    $(".filter .filter-inner").hide();
  });
});

$(document).ready(function () {
  $(".filter .field-works").click(function () {
    $("#primary .field-works").show();
    $("#primary .meetings").hide();
    $("#primary .workshops").hide();
    $("#primary .conferences-symposia").hide();
    $(".filter .filter-inner").hide();
  });
});

$(document).ready(function () {
  $(".filter .2020").click(function () {
    $("#primary .2020").show();
    $(".filter .filter-inner").hide();
  });
});


// Mobile Menu Toggle

$(document).ready(function () {
  $("#menuToggle").click(function () {
    $("#primary-menu").toggle();
  });
});


// Show Footer

$(document).ready(function () {
  $("#showFooter").click(function () {
    $("#siteInfo").animate({bottom: "0px"});
  });
  $("#closeFooter").click(function () {
    $("#siteInfo").animate({bottom: "-200px"});
  });
});

// Initialize Swiper Project Desktop

var swiper = new Swiper('.swiper-container', {
  spaceBetween: 30,
  loop: true,
  effect: 'fade',
  pagination: {
  el: '.swiper-pagination',
  clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

// Initialize Swiper Home Mobile

// var swiper = new Swiper('.swiper-container-mobile', {
//   spaceBetween: 10,
//   loop: true,
//   effect: 'fade',
//   pagination: {
//   el: '.swiper-pagination',
//   clickable: true,
//   },
//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   },
// });

// Accordion

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
      panel.style.marginTop = "0";
      panel.style.marginBottom = "0";
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
      panel.style.marginTop = "32px";
      panel.style.marginBottom = "32px";
    } 
  });
}

// Smooth Scrolling

function scrollPrincipalInvestigators() {
  document.querySelector('#principalInvestigators').scrollIntoView({ behavior: 'smooth' });
}

function scrollCoInvestigators() {
  document.querySelector('#coInvestigators').scrollIntoView({ behavior: 'smooth' });
}

function scrollPhdScholars() {
  document.querySelector('#phdScholars').scrollIntoView({ behavior: 'smooth' });
}