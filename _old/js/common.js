$(function () {

  $(window).on("load scroll", function () {
    var t = $(this).scrollTop();
    if (t > 100) {
      $('#pageTop').addClass('active');
      $('header').addClass('scroll');
    } else {
      $('#pageTop').removeClass('active');
      $('header').removeClass('scroll');
    };
  });

  $('#menu-toggle').click(function () {
    $('header').toggleClass('open');
    $(this).find('.line').toggleClass('show');
    $('header nav').slideToggle();
    $('html').toggleClass('no_move');
  });

  var w = $(window).width();
  if (w < 900) {

  }

  $(document).on('click', '.accordion_item_q', function(){
    if($(this).hasClass('active')){
      $(this).removeClass('active');
      $(this).next().slideUp();
    }else{
      $(this).addClass('active');
      $(this).next().slideDown();
    }
  })

  $('.h_right nav ul li a').click(function(){
    $('.menu span').toggleClass('show');
    $('header').toggleClass('show')
    $('.menu_close').toggleClass('show')
  })

  $('.menu_close').click(function(){
    $('.menu span').toggleClass('show');
    $('header').toggleClass('show')
    $('.menu_close').toggleClass('show')
  })

  $('#header_menu').click(function(){
    $('.menu span').toggleClass('show');
    $('header').toggleClass('show')
    $('.menu_close').toggleClass('show')
  })

  $(window).on('scroll load',function() {
    var t = $(this).scrollTop();
    var w = $(window).width();
    var footer = $('footer').offset().top;
    var footer_pos = footer - t;
    if(footer_pos <= 800){
      $('#pageTop').addClass('stop')
    }else{
      $('#pageTop').removeClass('stop')
    }
  });

});



// シンプルローディング
const spinner = document.querySelector('#loading');
window.addEventListener('load', function() {
  spinner.classList.add('loaded');
});
setTimeout( function () {
  spinner.classList.add('loaded');
}, 2000);


// スクロールアニメーション
var callback = function callback(entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > 0) {
      entry.target.classList.add('move');
      observer.unobserve(entry.target);
    }
  });
};
var items_list = document.querySelectorAll('.c-anim-up');
var items = Array.prototype.slice.call(items_list, 0);
var observer = new IntersectionObserver(callback, {
  // 出現タイミングの調整はrootMarginを調整
  rootMargin: '-15%',
  threshold: [0, .1, .2, .3, .4, .5, .6, .7, .8, .9, 1]
});
items.forEach(function (item) {
  return observer.observe(item);
});


// [画面に入る前に画像を遅延読み込み]
// タグの記述例 classに[lazy-load]をつけ[data-src]に画像のパスを指定する
// <img class="lazy-load" src="" data-src="images/example.jpg" alt="">
document.addEventListener("DOMContentLoaded", function () {
  let lazyImages = [].slice.call(document.querySelectorAll(".lazy-load"));
  var imgObserver = new IntersectionObserver(callback, {
    rootMargin: '100%',
  });
  let lazyImageObserver = new IntersectionObserver(function (entries, imgObserver) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        let lazyImage = entry.target;
        if (lazyImage.dataset.hasOwnProperty('src')) {
          lazyImage.src = lazyImage.dataset.src;
          lazyImage.dataset.src = '';
          delete lazyImage.dataset.src;
        }
        if (lazyImage.dataset.hasOwnProperty('srcset')) {
          lazyImage.srcset = lazyImage.dataset.srcset;
          lazyImage.dataset.srcset = '';
          delete lazyImage.dataset.srcset;
        }
        lazyImage.classList.remove("lazy-load");
        lazyImageObserver.unobserve(lazyImage);
      }
    });
  });
  lazyImages.forEach(function (lazyImage) {
    lazyImageObserver.observe(lazyImage);
  });
});


// Webfont読込
window.WebFontConfig = {
  google: {
    families: ['Shippori+Mincho+B1:400,500,600,700,800']
  },
  active: function () {
    sessionStorage.fonts = true;
  }
};

(function () {
  var wf = document.createElement('script');
  wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();