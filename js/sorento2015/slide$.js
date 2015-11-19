var j = jQuery.noConflict();

j(document).on('ready', function(){
  carouselSlider.slidePreloader('#home-main-slide0', '#thumbnails-slide0', '#section-slide0', false);
  carouselSlider.slidePreloader('#home-main-slide', '#thumbnails-slide', '#section-slide1');
  carouselSlider.slidePreloader('#home-main-slide2', '#thumbnails-slide2', '#section-slide2');
  loadImage();

  j('a[href^="#"]').on('click', function(event){
    event.preventDefault();
    var target = j( j(this).attr('href') );

    if(target.length) {
      j('body,html').animate({
        'scrollTop': target.offset().top - j('.menu').height() + 1
      }, 400);
    }
  });

  j('.fancybox-media').fancybox({
    openEffect  : 'none',
    closeEffect : 'none',
    helpers : {
      media : {}
    }
  });
});


  function loadImage(){
    var top;
    var img = new Image();
    var pic_real_width, pic_real_height;
    $("#home-main-slide0").find('li').each(function(i, val){
      if(i == 0){
        img.src = $(val).find('img').attr('src');
        $("<img/>").attr("src", img.src).load(function() {
          pic_real_width = this.width;
          pic_real_height = this.height;
          var nav = $('.menu');
          $(window).scroll(function () {
            if ($(this).scrollTop() > pic_real_height) {
              nav.addClass("fixed");
            } else {
              nav.removeClass("fixed");
            }
          });
        });
      }
    });
  }


;carouselSlider = {
  slidePreloader: function(idSlider, idCarousel, sectionSlide, enableSlide){
    var prev = this;
    var slidesWrapper = $(idSlider);
    var listaImagenes = [];
    var img = new Image();

    slidesWrapper.find('li').each(function(i, val){
      img.src = $(val).find('img').attr('src');
      // img.onload = function() {
      //   console.log(this.width + 'x' + this.height);
      //   $(sectionSlide).css("height", this.height);
      // }
      listaImagenes.push({id:i, src:img.src});
    });

    var cargadorSlides = new createjs.LoadQueue();
    cargadorSlides.on('fileload', handleFileLoad);
    //cargadorSlides.on('complete', handleComplete);
    cargadorSlides.loadManifest(listaImagenes);

    var contSlides = 0;
    function handleFileLoad(e){
      //console.log(e);
      if(contSlides == 2){
        prev.slideInit(idSlider, idCarousel, sectionSlide, enableSlide);
        $(idSlider).parents('.conten-carouselSlider').find('.preloader').fadeOut(1000, function(){
          $(sectionSlide).fadeIn(500);
        });
      }
      contSlides++;
    }
    //function handleComplete(){}
  },
  slideInit: function(idSlider, idCarousel, sectionSlide, enableSlide){
    var prev = this;
    var timerAutoSlide;
    var mainSlide = $(idSlider);
    var prevThumbnailButton = $(idCarousel).parents('.HomeSlide-thumbnailsSlideWrapper').find('#prevThumbnail');
    var nextThumbnailButton = $(idCarousel).parents('.HomeSlide-thumbnailsSlideWrapper').find('#nextThumbnail');
    var thumbnailsWrapper = $(idCarousel);
    var thumbnail = $(idCarousel).find('.HomeSlide-thumbnail');
    var numThumbnails = $(idCarousel).find('.HomeSlide-thumbnail').length;
    var movSpeed = 600;

    enableSlide = (typeof enableSlide === "undefined") ? true : enableSlide;;

    function startAutoSlide(){
      timerAutoSlide = setInterval(function(){
        nextThumbnailButton.trigger('click');
      }, 4000);
    }

    if(enableSlide){
      // console.log(idSlider + ' - '  + enableSlide);
      setTimeout(function(){
        startAutoSlide();
      }, 2000);
    }

    thumbnailsWrapper.width( (numThumbnails+1) * 211);

    function addNavPagerEvents(){
      thumbnail.on('click', function(){
        var self = $(this);
        removeAllEvents();
        var thumbnailActivo = $(idCarousel+' .active');
        thumbnailActivo.removeClass('active');
        activeThumbnail(self);
      });

      prevThumbnailButton.on('click', function(){
        var self = $(this);
        removeAllEvents();
        moveThumbnailsSlide(self);
        var thumbnailActivo = $(idCarousel+' .active');
        thumbnailActivo.removeClass('active');
        var thumbnailToActive = thumbnailActivo.prev();
        activeThumbnail(thumbnailToActive);
      });

      nextThumbnailButton.on('click', function(){
        var self = $(this);
        removeAllEvents();
        moveThumbnailsSlide(self);
        var thumbnailActivo = $(idCarousel+' .active');
        thumbnailActivo.removeClass('active');
        var thumbnailToActive = thumbnailActivo.next();
        activeThumbnail(thumbnailToActive);
      });
    }

    addNavPagerEvents();

    function moveThumbnailsSlide(button){
      var buttonName = button.attr('id');
      if(buttonName === 'prevThumbnail'){
        var lastThumbnail = thumbnailsWrapper.children('.HomeSlide-thumbnail').last();
        lastThumbnail.prependTo(thumbnailsWrapper);
        thumbnailsWrapper.css('left','-211px');
        thumbnailsWrapper.animate({
          'left': 0
        },movSpeed);
      }else if(buttonName === 'nextThumbnail'){
        thumbnailsWrapper.animate({
          'left': -211
        },movSpeed, function(){
          thumbnailsWrapper.children('.HomeSlide-thumbnail').first().appendTo(thumbnailsWrapper);
          thumbnailsWrapper.css('left','0px');
        });
      }
    }

    function removeAllEvents(){
      clearInterval(timerAutoSlide);
      thumbnail.off('click');
      prevThumbnailButton.off('click');
      nextThumbnailButton.off('click');
    }

    function activeThumbnail(thumbnail) {
      thumbnail.addClass('active');
      var index = thumbnail.attr('data-slide');
      var imgToHide = mainSlide.find('li.active');
      var imgToShow = mainSlide.children('li[data-slide="'+ index +'"]');
      imgToHide.removeClass('active').fadeTo(600, 0);
      imgToShow.fadeTo(600, 1, function(){
        imgToHide.removeClass('active');
        imgToShow.addClass('active');
        addNavPagerEvents();
        startAutoSlide();
      });
    }
  }
}