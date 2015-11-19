$(window).resize(function () {
	var Wwh = $(window).width();
	if ((Wwh < 980) && (Wwh >= 640))
	{
		 $('body > div').removeClass().addClass('Wrap640');
		 $(".Gnb").css({'display':'block'});
		 $('img').each(function () {
			var ssSrc320 = $(this).attr('src').replace('320', '640');
			$(this).attr('src', ssSrc320);
			var ssSrc980 = $(this).attr('src').replace('980', '640');
			$(this).attr('src', ssSrc980);
		});
			for (q = 0; q <= 2; q++ )
		{
				$('.line-box').eq(q).children('li').unwrap();
				$('.line-box').eq(q).children('li').wrapAll('<ul>');
				var a = $('.line-box').eq(q).children('ul').children('li').length;
				for (p = 0; p <= a; p)
				{
					$('.line-box').eq(q).children('ul').children('li').slice(0, 4).wrapAll('<ul>');
					p = p + 4
				}
				$('.line-box').eq(q).children('ul').children('ul').unwrap();
			}
			$('.menu-link > a').attr('href', '#');
			$('.menu-link  > a').attr('onclick', 'return false');
		} else if ((Wwh < 640) && (Wwh > 0))
		{
			$('body > div').removeClass().addClass('Wrap320');
			$('img').each(function () {
				var ssSrc640 = $(this).attr('src').replace('640', '320');
				$(this).attr('src', ssSrc640);
				var ssSrc980 = $(this).attr('src').replace('980', '320');
				$(this).attr('src', ssSrc980);						
			});
			$(".Gnb").css({'display':'none'});
			$('.menu-link > a').attr('href', 'modelos-mobile.php');
			$('.menu-link > a').attr('onclick', '');
			$(".sitelink > img").attr("src", "images/common/btn-f-sitlink-off.gif");
			$(".footer-sitemap").css({'display':'none'});
		} else {
			$('body > div').removeClass().addClass('Wrap');
			$(".Gnb").css({'display':'block'});
			$('img').each(function () {
				var ssSrc640 = $(this).attr('src').replace('640', '980');
				$(this).attr('src', ssSrc640);
				var ssSrc320 = $(this).attr('src').replace('320', '980');
				$(this).attr('src', ssSrc320);						
			});
			$('.menu-link  > a').attr('href', '#');
			$('.menu-link > a').attr('onclick', 'return false');
			for (q = 0; q <= 2; q++ )
			{
				$('.line-box').eq(q).children('li').unwrap();
				$('.line-box').eq(0).children('li').wrapAll('<ul>');
				var a = $('.line-box').eq(q).children('ul').children('li').length;
				for (p = 0; p <= a; p)
				{
					$('.line-box').eq(q).children('ul').children('li').slice(0, 6).wrapAll('<ul>');
					p = p + 6
				}
				$('.line-box').eq(q).children('ul').children('ul').unwrap();
			}
		}
	$('.line-box ul').each(function(){
	if($(this).find('li').size() == 0){
		$(this).remove();
	}
	});
});
$(document).ready(function () {
		var mobileKeyWords = new Array('iPhone', 'iPad', 'BlackBerry', 'Android', 'Windows CE', 'LG', 'MOT', 'SAMSUNG', 'SonyEricsson');
		for (var word in mobileKeyWords){
			if (navigator.userAgent.match(mobileKeyWords[word]) != null){				
				$('head').append('<meta name="viewport" content="minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0,user-scalable=no,width=device-width" />')
				$('a').each(function () {
					var INF = $(this).attr('href');
					if (INF == "#"){
						$(this).removeAttr('href');
					}
				});
			}
		}
		var Wwh = $(window).width();
		
		if ((Wwh < 980) && (Wwh >= 640))
		{
		 $('body > div').removeClass().addClass('Wrap640');
		 $('img').each(function () {
				var ssSrc320 = $(this).attr('src').replace('320', '640');
				$(this).attr('src', ssSrc320);
				var ssSrc980 = $(this).attr('src').replace('980', '640');
				$(this).attr('src', ssSrc980);
			});
			for (q = 0; q <= 3; q++ ){
				var a = $('.line-box').eq(q).children('ul').children('li').length;
				for (p = 0; p <= a; p){
					$('.line-box').eq(q).children('ul').children('li').slice(0, 4).wrapAll('<ul>');
					p = p + 4
				}
				$('.line-box').eq(q).children('ul').children('ul').unwrap();
			}
			$('.Models > a').attr('href', '#');
			$('.Models > a').attr('onclick', 'return false');
		} else if ((Wwh < 640) && (Wwh > 0))
		{
			$('body > div').removeClass().addClass('Wrap320');
			$('img').each(function () {
				var ssSrc640 = $(this).attr('src').replace('640', '320');
				$(this).attr('src', ssSrc640);
				var ssSrc980 = $(this).attr('src').replace('980', '320');
				$(this).attr('src', ssSrc980);
			});
			$(".Gnb").css({'display':'none'});
			$('.menu-link > a').attr('href', 'modelos-mobile.php');
			$('.menu-link > a').attr('onclick', '');
		} else {
			$('body > div').removeClass().addClass('Wrap');
			$('img').each(function () {
				var ssSrc640 = $(this).attr('src').replace('640', '980');
				$(this).attr('src', ssSrc640);
				var ssSrc320 = $(this).attr('src').replace('320', '980');
				$(this).attr('src', ssSrc320);
			});
			for (q = 0; q <= 3; q++ )
			{
			var a = $('.line-box').eq(q).children('ul').children('li').length;
			for (p = 0; p <= a; p)
			{
				$('.line-box').eq(q).children('ul').children('li').slice(0, 6).wrapAll('<ul>');
				p = p + 6
			}
			$('.line-box').eq(q).children('ul').children('ul').unwrap();
			}
			$('.Models > a').attr('href', '#');
			$('.Models > a').attr('onclick', 'return false');
		}


		$(".Gnb > li > a").click(function(){
		
		if ($(this).parent().find('.Gnb-2deps').is(':visible'))
		{
			$(".headerWrap").css({'z-index':'100'});
			$(this).parent().find('.Gnb-2deps').slideUp();
			if ($(this).parent().find('.Gnb-2deps').find('.bg-box').is(':visible'))
			{
				$(this).parent().find('.Gnb-2deps .on > a > img').attr("src",$(this).parent().find('.Gnb-2deps .on > a > img').attr("src").replace("-on.gif","-off.gif"));
			}
			$(this).parent().find('.Gnb-2deps').find('.bg-box').hide();
			$('.Gnb .on').removeClass('on');
		} else {
			
			$(".headerWrap").css({'z-index':'10000'});
			$(".Gnb li").find('.Gnb-2deps').css({'display':'none'});
			$('.Gnb .on').removeClass('on');
			$(this).parent().addClass('on');
			$(this).parent().find('.Gnb-2deps').slideDown();
		}
	});

		/****** Efeco ******/
	$(".line-box li > a").click(function(){
		if ($('.Gnb-2deps').find('li').hasClass('on'))
		{
			$(this).parents('.Gnb-2deps').find('.on > a').find('img').attr("src",	$(this).parents('.Gnb-2deps').find('.on > a').find('img').attr("src").replace("-on.gif","-off.gif"));
		}
		if ($(this).parent().hasClass('on'))
		{
			$(this).find('img').attr("src",$(this).find('img').attr("src").replace("-on.gif","-off.gif"));
			//$(".Gnb-2deps").find('.bg-box').css({'display':'none'});
			//$(this).parent().find('.bg-box').hide();
			$('.Gnb-2deps .on').removeClass('on').find('.bg-box').hide();
		} else {
			$(this).find('img').attr("src",$(this).find('img').attr("src").replace("-off.gif","-on.gif"));
			$(".line-box li").find('.bg-box').css({'display':'none'});				
			$('..line-box li.on').removeClass('on');
			$(this).parent().find('.bg-box').slideDown(200);
			$(this).parent().addClass('on');
		}
	});

	/****** Efeco ******/

	$(".Btn-Menu a").toggle(function(){
		$(".Btn-Menu img").attr("src", "images/common/btn-allmenu-on.gif");
		$(".Gnb").css({'display':'block'});
	}, function() {
		$(".Btn-Menu img").attr("src", "images/common/btn-allmenu-off.gif");
		$(".Gnb").css({'display':'none'});
	});
	$(".sitelink").click( function(){
		if ($('.footer-sitemap').is(':visible')){
			$(".sitelink > img").attr("src", "images/common/btn-f-sitlink-off.gif");
			$(".footer-sitemap").css({'display':'none'});
		} else {
			$(".sitelink > img").attr("src", "images/common/btn-f-sitlink-on.gif");
			$(".footer-sitemap").css({'display':'block'});
		}
	});
		
	$(".search320 a").click(function(){
		$(this).parent().css({'display':'none'});
		$(".search").css({'display':'block'});
	});
	$('.mic > a').click(function(){
		if ($(this).parent().find('ul').is(':visible'))
		{
			$(this).parent().find('ul').css({'display':'none'});
		} else {
			$(this).parent().find('ul').css({'display':'block'});
		}
	});
});


	