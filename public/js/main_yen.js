$(document).ready(function(){
	$('.header_tim_kiem .search-bar input.input-group-field, .search-mobile .search-bar input.input-group-field').focus(function(eventClick) {
		eventClick.stopPropagation();
		$('.search-suggest').addClass('open');
	});
	$(document).click( function(eventClick){
		if ( !$(eventClick.target).closest('.header_tim_kiem .search-bar, .search-mobile .search-bar').length ) {
			$('.search-suggest').removeClass('open');
		}
	});

});

// Xử lý chuyển đổi các tab sản phẩm ở trang chủ
$(".not-dqtab").each( function(e){
	/*khai báo khởi tạo ban đầu cho 2 kiểu tab*/
	var $this1 = $(this);
	var $this2 = $(this);
	var datasection = $this1.closest('.not-dqtab').attr('data-section');
	$this1.find('.tabs-title li:first-child').addClass('current');
	$this1.find('.tab-content').first().addClass('current');
	var datasection2 = $this2.closest('.not-dqtab').attr('data-section-2');
	$this2.find('.tabs-title li:first-child').addClass('current');
	$this2.find('.tab-content').first().addClass('current');

	/*khai báo cho chức năng dành cho mobile tab*/
	var _this = $(this).find('.wrap_tab_index .title_module_main');
	var droptab = $(this).find('.link_tab_check_click');

	/*type 1*/ //kiểu 1 này thì load có owl carousel
	$this1.find('.tabtitle1.ajax li').click(function(){
		var $this2 = $(this),
			tab_id = $this2.attr('data-tab'),
			url = $this2.attr('data-url');
		var etabs = $this2.closest('.e-tabs');
		etabs.find('.tab-viewall').attr('href',url);
		etabs.find('.tabs-title li').removeClass('current');
		etabs.find('.tab-content').removeClass('current');
		$this2.addClass('current');
		etabs.find("."+tab_id).addClass('current');
		//Nếu đã load rồi thì không load nữa
		if(!$this2.hasClass('has-content')){
			$this2.addClass('has-content');		
			getContentTab(url,"."+ datasection+" ."+tab_id);
		}
	});
	$this2.find('.tabtitle2.ajax li').click(function(){
		var $this2 = $(this),
			tab_id = $this2.attr('data-tab'),
			url = $this2.attr('data-url');
		var etabs = $this2.closest('.e-tabs');
		etabs.find('.tab-viewall').attr('href',url);
		etabs.find('.tabs-title li').removeClass('current');
		etabs.find('.tab-content').removeClass('current');
		$this2.addClass('current');
		etabs.find("."+tab_id).addClass('current');
		//Nếu đã load rồi thì không load nữa
		if(!$this2.hasClass('has-content')){
			$this2.addClass('has-content');		
			getContentTab2(url,"."+ datasection2+" ."+tab_id);
		}
	});

});


	$('.sort-cate .btn-filter').click(function(){
		$(".layout-collection .left-content").toggleClass('active');
		$(".backdrop__body-backdrop___1rvky").toggleClass('active');
	});
	$('.backdrop__body-backdrop___1rvky').click(function(){
		$(".layout-collection .left-content").removeClass('active');
		$(this).toggleClass('active');
	});
	$('.close-filters').click(function(){
		$(".layout-collection .left-content").removeClass('active');
		$('.backdrop__body-backdrop___1rvky').removeClass('active');
	});

/************/
window.awe = window.awe || {};
awe.init = function () {
	awe.showPopup();
	awe.hidePopup();	
};
$(document).ready(function ($) {
	"use strict";
	awe_backtotop();
	awe_tab();
	awe_category();
});

$('.dropdown-toggle').click(function() {
	$(this).parent().toggleClass('open'); 	
}); 
$('.close-pop').click(function() {
	$('#popup-cart').removeClass('opencart');
	$('body').removeClass('opacitycart');
});
$(document).on('click','.overlay, .close-popup, .btn-continue, .fancybox-close', function() {   
	hidePopup('.awe-popup'); 	
	setTimeout(function(){
		$('.loading').removeClass('loaded-content');
	},500);
	return false;
})

function awe_showLoading(selector) {
	var loading = $('.loader').html();
	$(selector).addClass("loading").append(loading); 
}  window.awe_showLoading=awe_showLoading;
function awe_hideLoading(selector) {
	$(selector).removeClass("loading"); 
	$(selector + ' .loading-icon').remove();
}  window.awe_hideLoading=awe_hideLoading;
function awe_showPopup(selector) {
	$(selector).addClass('active');
}  window.awe_showPopup=awe_showPopup;
function awe_hidePopup(selector) {
	$(selector).removeClass('active');
}  window.awe_hidePopup=awe_hidePopup;
awe.hidePopup = function (selector) {
	$(selector).removeClass('active');
}
$(document).on('click','.overlay, .close-window, .btn-continue, .fancybox-close', function() {   
	awe.hidePopup('.awe-popup'); 
	setTimeout(function(){
		$('.loading').removeClass('loaded-content');
	},500);
	return false;
})
var wDWs = $(window).width();

if (wDWs < 1199) {
	$('.quickview-product').remove();
}


if (wDWs < 767) {
	$('.footer-click h4').click(function(e){
		$(this).toggleClass('cls_mn').next().slideToggle();
		$(this).next('ul').toggleClass("current");
	});
}
if (wDWs >= 992) {
    $('.header .header-menu').mouseenter(function () {
        var template_nav_cate = $('script[data-template="header_nav_cate"]').html();
        if (template_nav_cate) {
            $('div[data-section="header_nav_cate"]').html(template_nav_cate);
        }
        $('script[data-template="header_nav"]').each(function () {
            var template_nav = $(this).html();
            var section = $(this).closest('li[data-section="header_nav"]');
            if (template_nav) {
                $(this).replaceWith(template_nav);
            }
        });
        awe_lazyloadImage();
    });
}
if (wDWs <= 991) {
	$('.menu-bar').on('click', function(){
		$('.opacity_menu').addClass('current');
	})
	$('.opacity_menu').on('click', function(){
		$('.opacity_menu').removeClass('current');
	})
	$('.header-action-item.search-mobile').click(function(e){
		e.preventDefault();
		$('.search-mobile.search_form').toggleClass('open');
	});
	$('.input-group-btn .search-close').click(function(e){
		e.preventDefault();
		$('.search-mobile.search_form').toggleClass('open');
	});
	$('#btn-menu-mobile').on('click', function(){
		var template_nav_cate = $('script[data-template="header_nav_cate"]').html();
		if(template_nav_cate) {
			$('div[data-section="header_nav_cate"]').html(template_nav_cate);
		}
		$('script[data-template="header_nav"]').each(function() {
			var template_nav = $(this).html();
			var section = $(this).closest('li[data-section="header_nav"]');
			if (template_nav) {
				$(this).replaceWith(template_nav);
			}
		});
		awe_lazyloadImage();
		$('#nav li > .open_mnu').off().click(function(e){
			$(this).closest('li').find('> .dropdown-menu').slideToggle("fast");
			$(this).closest('li').toggleClass("current");
			$(this).closest('li').find('> .dropdown-menu').toggleClass("current");
			$(this).toggleClass('current');
			return false;  
		});
		$('.sudes-main-cate li > .open_mnu').off().click(function(e){
			$(this).closest('li').find('> .menu-child').slideToggle("fast");
			$(this).closest('li').toggleClass("current");
			$(this).closest('li').find('> .menu-child').toggleClass("current");
			$(this).toggleClass('current');
			return false;  
		});
		$('.header-menu').addClass('current');
		$('.mobile-nav-overflow').toggleClass('open');

	});
	$('.header-menu .title_menu .close-mb-menu').on('click', function(){
		$(this).closest('.header-menu').removeClass('current');
		$('.mobile-nav-overflow').toggleClass('open');
	});
	$('.mobile-nav-overflow').on('click', function(){
		$('.header-menu').removeClass('current');
		$(this).toggleClass('open');
	});
}
function awe_convertVietnamese(str) { 
	str= str.toLowerCase();
	str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a"); 
	str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e"); 
	str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i"); 
	str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o"); 
	str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u"); 
	str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y"); 
	str= str.replace(/đ/g,"d"); 
	str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
	str= str.replace(/-+-/g,"-");
	str= str.replace(/^\-+|\-+$/g,""); 
	return str; 
} window.awe_convertVietnamese=awe_convertVietnamese;
function awe_category(){
	$('.nav-category .fa-angle-right').click(function(e){
		$(this).toggleClass('fa-angle-down fa-angle-right');
		$(this).parent().toggleClass('active');
	});
	$('.nav-category .fa-angle-down').click(function(e){
		$(this).toggleClass('fa-angle-right');
		$(this).parent().toggleClass('active');
	});
} window.awe_category=awe_category;

function awe_backtotop() { 
	$(window).scroll(function() {
		$(this).scrollTop() > 200 ? $('.backtop').addClass('show') : $('.backtop').removeClass('show')
	});
	$('.backtop').click(function() {
		return $("body,html").animate({
			scrollTop: 0
		}, 800), !1
	});
} window.awe_backtotop=awe_backtotop;
function awe_tab() {
	$(".e-tabs:not(.not-dqtab)").each( function(){
		$(this).find('.tabs-title li:first-child').addClass('current');
		$(this).find('.tab-content').first().addClass('current');
		$(this).find('.tabs-title li').click(function(e){
			var tab_id = $(this).attr('data-tab');
			var url = $(this).attr('data-url');
			$(this).closest('.e-tabs').find('.tab-viewall').attr('href',url);
			$(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
			$(this).closest('.e-tabs').find('.tab-content').removeClass('current');
			$(this).addClass('current');
			$(this).closest('.e-tabs').find("#"+tab_id).addClass('current');

		});    
	});
} window.awe_tab=awe_tab;
$('.dropdown-toggle').click(function() {
	$(this).parent().toggleClass('open'); 	
}); 
$('.btn-close').click(function() {
	$(this).parents('.dropdown').toggleClass('open');
}); 
$(document).on('keydown','#qty, .number-sidebar',function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
$(document).on('click','.qtyplus',function(e){
	e.preventDefault();   
	fieldName = $(this).attr('data-field'); 
	var currentVal = parseInt($('input[data-field='+fieldName+']').val());
	if (!isNaN(currentVal)) { 
		$('input[data-field='+fieldName+']').val(currentVal + 1);
	} else {
		$('input[data-field='+fieldName+']').val(0);
	}
});
$(document).on('click','.qtyminus',function(e){
	e.preventDefault(); 
	fieldName = $(this).attr('data-field');
	var currentVal = parseInt($('input[data-field='+fieldName+']').val());
	if (!isNaN(currentVal) && currentVal > 1) {          
		$('input[data-field='+fieldName+']').val(currentVal - 1);
	} else {
		$('input[data-field='+fieldName+']').val(1);
	}
});
$('.open-filters').click(function(e){
	e.stopPropagation();
	$(this).toggleClass('openf');
	$('.dqdt-sidebar').toggleClass('openf');
	$('.opacity_sidebar').toggleClass('openf');
});
$('.opacity_sidebar').click(function(e){
	$('.opacity_sidebar').removeClass('openf');
	$('.dqdt-sidebar, .open-filters').removeClass('openf')
});
$('.menubutton').click(function(e){
	e.stopPropagation();
	$('.wrapmenu_right').toggleClass('open_sidebar_menu');
	$('.opacity_menu').toggleClass('open_opacity');
});
$('.opacity_menu').click(function(e){
	$('.wrapmenu_right').removeClass('open_sidebar_menu');
	$('.opacity_menu').removeClass('open_opacity');
});
$(".menubar_pc").click(function(){ 
	$('.wrapmenu_full').slideToggle('fast');
	$('.wrapmenu_full, .cloed').toggleClass('open_menu');
	$('.dqdt-sidebar, .open-filters').removeClass('openf')
});
$(".cloed").click(function(){ 
	$(this).toggleClass('open_menu');
	$('.wrapmenu_full').slideToggle('fast');
});
$(".opacity_menu").click(function(){ 
	$('.opacity_menu').removeClass('open_opacity');
});
if ($('.dqdt-sidebar').hasClass('openf')) {
	$('.wrapmenu_full').removeClass('open_menu');
} 
$('.ul_collections li > svg').click(function(){
	$(this).parent().toggleClass('current');
	$(this).toggleClass('fa-angle-down fa-angle-right');
	$(this).next('ul').slideToggle("fast");
	$(this).next('div').slideToggle("fast");
});
$('.searchion').mouseover(function() {
	$('.searchmini input').focus();                    
})
$('.quenmk').on('click', function() {
	$('#login').toggleClass('hidden');
	$('.h_recover').slideToggle();
});
$('a[data-toggle="collapse"]').click(function(e){
	if ($(window).width() >= 767) { 
		e.preventDefault();
		e.stopPropagation();
	}    
});

$('body').click(function(event) {
	if (!$(event.target).closest('.collection-selector').length) {
		$('.list_search').css('display','none');
	};
});


/*JS XEM THÊM MENU DANH MỤC SP*/
$('.xemthem').click(function(e){
	e.preventDefault();
	$('ul.ul_menu>li').css('display','block');
	$(this).hide();
	$('.thugon').show();
})
$('.thugon').click(function(e){
	e.preventDefault();
	$('ul.ul_menu>li').css('display','none');
	$(this).hide();
	$('.xemthem').show();
})
$('.ul_menu .lev-1').click(function(e){
	var lil = $('.ul_menu .lev-1').length;
	var divHeight = $('.list_menu_header').height();
	if(lil = 2){
		$('.ul_menu .ul_content_right_1').css('min-height', divHeight);
	}
});
window.onload = function(e){ 
	var lil = $('.ul_menu .lev-1').length;
	var vw = $(window).width();
	if(lil < 9 && vw < 1500 && vw > 1200){
		$('li.hidden-lgg').remove();
	}
}

/*click bộ lọc*/
$('.bolocs').click(function(e){
	e.stopPropagation();
	$('.aside-filter').slideToggle();
});
$('.aside-filter').click(function(e){
	e.stopPropagation();
});
$(document).click(function(){
	$('.aside-filter').slideUp();
});

function callback_toggle() {
	$('.bolocs').click(function(e) {
		e.stopPropagation();
		$('.aside-filter').toggleClass('show');
	});
	$('.aside-filter').click(function(e) {
		e.stopPropagation();
	});
}
if (wDWs > 992) {
	function horizontalNav() {
		return {
			wrapper: $('.navigation-horizontal'),
			navigation: $('.navigation-horizontal .nav'),
			item: $('.navigation-horizontal .nav .nav-item'),
			totalStep: 0,
			onCalcNavOverView: function(){
				let itemHeight = this.item.eq(0).outerWidth(),
					lilength = this.item.length,
					total = 0;
				for (var i = 0; i < lilength; i++) {
					itemHeight = this.item.eq(i).outerWidth();
					total += itemHeight;
				}
				return Math.ceil(total)
			},
			onCalcTotal: function(){
				let  navHeight = this.navigation.width();
				return Math.ceil(navHeight)
			},
			init:function(){
				this.totalStep = this.onCalcNavOverView();
				this.totalTo = this.onCalcTotal();
				if(this.totalStep > this.totalTo){
					this.wrapper.addClass('overflow')
				} 
			}
		}	
	}
}
$(document).ready(function ($) {
	if(window.matchMedia('(min-width: 992px)').matches){
		horizontalNav().init()
		$(window).on('resize',()=>horizontalNav().init())
		var margin_left = 0;
		$('#prev').on('click', function(e) {
			e.preventDefault();
			animateMargin(190);
		});
		$('#next').on('click', function(e) {
			e.preventDefault();
			animateMargin(-190);
		});
		const animateMargin = ( amount ) => {
			margin_left = Math.min(0, Math.max( getMaxMargin(), margin_left + amount ));
			$('ul.nav').animate({
				'margin-left': margin_left
			}, 300);
		};
		const getMaxMargin = () => 
		$('ul.nav').parent().width() - $('ul.nav')[0].scrollWidth;
	}
});

$(document).ready(function(){
	$('.header_tim_kiem .search-bar input.input-group-field, .search-mobile .search-bar input.input-group-field').focus(function(eventClick) {
		eventClick.stopPropagation();
		$('.search-suggest').addClass('open');
	});
	$(document).click( function(eventClick){
		if ( !$(eventClick.target).closest('.header_tim_kiem .search-bar, .search-mobile .search-bar').length ) {
			$('.search-suggest').removeClass('open');
		}
	});

});


$('.show-all-col .view-all-col').click(function(e){
	$(this).toggleClass('d-none');
	$('.show-all-col .aside-content-all').slideToggle();
	$('.aside-content-sub').slideToggle();
	$('.show-all-col .less-all-col').toggleClass('d-none');
});
$('.show-all-col .less-all-col').click(function(e){
	$(this).toggleClass('d-none');
	$('.aside-content-sub').slideToggle();
	$('.show-all-col .aside-content-all').slideToggle();
	$('.show-all-col .view-all-col').toggleClass('d-none');
});

theme.alert = (function() {
	var $alert = $('#js-global-alert'),
		$title = $('#js-global-alert .alert-heading'),
		$content = $('#js-global-alert .alert-content'),
		close = '#js-global-alert .close';
	var timeoutID = null;
	$(document).on('click', close, function() {
		$alert.removeClass('active');
	});

	function createAlert(title, mess, time, type) {
		var alertTitle = title || '',
			showTime = time || 3000,
			alertClass = type;

		$alert.removeClass('alert-success').removeClass('alert-danger').removeClass('alert-warning').removeClass('alert-primary');
		$alert.addClass(alertClass);
		$title.html(title);
		$content.html(mess);
		$alert.addClass('active');
		if (timeoutID) {
			clearTimeout(timeoutID);
		}

		timeoutID = setTimeout(function() {
			$alert.removeClass('active');
		}, showTime);
	}

	return {
		new: createAlert
	};
})();
$(document).ready(function(){
	$(document).on('click', '.js-copy',function(e){
		e.preventDefault();
		var copyText = $(this).attr('data-copy');
		var copyTextarea = document.createElement("textarea");
		copyTextarea.textContent = copyText;
		copyTextarea.style.position = "fixed";
		document.body.appendChild(copyTextarea);
		copyTextarea.select();
		document.execCommand("copy"); 
		document.body.removeChild(copyTextarea);
		var cur_text = $(this).text();
		var $cur_btn = $(this);
		$(this).addClass("iscopied");
		$(this).text("Đã lưu");
		setTimeout(function(){
			$cur_btn.removeClass("iscopied");
			$cur_btn.text(cur_text);
		},1500)
	})
	$('.info-button').click(function() {
		var code = $(this).attr('data-coupon'),
			time = $(this).attr('data-time'),
			dieukien = $(this).attr('data-content');
		$('.popup-coupon .code').html(code);
		$('.popup-coupon .time').html(time);
		$('.popup-coupon .dieukien').html(dieukien);
		$('.popup-coupon, .backdrop__body-backdrop___1rvky').addClass('active'); 

	});
	$(document).on('click','.backdrop__body-backdrop___1rvky, .close-popup-coupon', function() {   
		$('.backdrop__body-backdrop___1rvky,.popup-coupon').removeClass('active');
		return false;
	})
});

// function doSearch(page, options) {
// 	if(!options) options = {};
// 	//NProgress.start();
// 	$('.aside.aside-mini-products-list.filter').removeClass('active');
// 	awe_showPopup('.loading');
// 	filter.search({
// 		view: selectedViewData,
// 		page: page,
// 		sortby: selectedSortby,
// 		success: function (html) {
// 			var $html = $(html);
// 			// Muốn thay thẻ DIV nào khi filter thì viết như này
// 			var $categoryProducts = $($html[0]); 
// 			$(".category-products").html($categoryProducts.html());
// 			pushCurrentFilterState({sortby: selectedSortby, page: page});
// 			awe_hidePopup('.loading');				  
// 			awe_lazyloadImage();
// 			awe_category();
			
// 			favoriSudes.Wishlist.wishlistProduct();
			
// 			if(window.BPR)
// 				return window.BPR.initDomEls(), window.BPR.loadBadges();
// 			if(window.ABProdStats){
// 				window.ABProdStats.abInitProductStats()
// 			}
// 			$('.btn-filter').click(function(){
// 				$(".left-content").toggleClass('active');
// 				$(".backdrop__body-backdrop___1rvky").addClass('active');
// 			});
// 			if($(window).width() <= 991) {
// 				$('.sort-cate-right h3').on('click', function(e){
// 					e.preventDefault();var $this = $(this);
// 					$this.parents('.sort-cate-right').find('ul').stop().slideToggle();
// 					$(this).toggleClass('active');
// 					return false;
// 				});
// 			}
// 			$('.add_to_cart').click(function(e){	
// 				e.preventDefault();		
// 				var $this = $(this);
// 				var form = $this.parents('form');	
// 				$.ajax({
// 					type: 'POST',
// 					url: '/cart/add.js',
// 					async: false,
// 					data: form.serialize(),
// 					dataType: 'json',
// 					beforeSend: function() { },
// 					success: function(line_item) {
// 						ajaxCart.load();
// 						$('.popup-cart-mobile, .backdrop__body-backdrop___1rvky').addClass('active');
// 						AddCartMobile(line_item);
// 					},
// 					cache: false
// 				});
// 			});
// 			$('html, body').animate({
// 				scrollTop: $('.block-collection').offset().top
// 			}, 0);
// 			$('#open-filters').removeClass('openf');
// 			$('.dqdt-sidebar').removeClass('openf');
// 			$('.opacity_sidebar').removeClass('openf');
// 			resortby(selectedSortby);
// 			$(document).ready(function () {
// 				var modal = $('.quickview-product');
// 				var btn = $('.quick-view');
// 				var span = $('.quickview-close');

// 				btn.click(function () {
// 					modal.show();
// 				});

// 				span.click(function () {
// 					modal.hide();
// 				});

// 				$(window).on('click', function (e) {
// 					if ($(e.target).is('.modal')) {
// 						modal.hide();
// 					}
// 				});
// 			});

// 			var _0xa1c3=["\x74\x68\x65\x6D\x65"];window[_0xa1c3[0]]= window[_0xa1c3[0]]|| {}
// 			theme.wishlist = (function (){
// 				var wishlistButtonClass = '.js-btn-wishlist',
// 					wishlistRemoveButtonClass = '.js-remove-wishlist',
// 					$wishlistCount = $('.js-wishlist-count'),
// 					$wishlistContainer = $('.js-wishlist-content'),
// 					$wishlistSmall = $('.wish-list-small'),
// 					wishlistViewAll = $('.wish-list-button-all'),
// 					wishlistObject = JSON.parse(localStorage.getItem('localWishlist')) || [],
// 					wishlistPageUrl = $('.js-wishlist-link').attr('href'),
// 					loadNoResult = function (){
// 						$wishlistContainer.html('<div class="col text-center"><div class="alert alert-warning d-inline-block"><p>Chưa có sản phẩm yêu thích! Hãy lựa chọn những sản phẩm ưa thích của mình nào.</p></div></div>');
// 						$wishlistSmall.html('<div class="empty-description"><span class="empty-icon"><i class="ico ico-favorite-heart"></i></span><div class="empty-text"><p>Chưa có sản phẩm yêu thích! Hãy lựa chọn những sản phẩm ưa thích của mình nào.</p></div></div><style>.container--wishlist .js-wishlist-content{border:none;}</style>');
// 						wishlistViewAll.addClass('d-none');
// 					};
// 				function loadSmallWishList(){
// 					$wishlistSmall.html('');
// 					if(wishlistObject.length > 0){
// 						for (var i = 0; i < wishlistObject.length; i++) { 
// 							var productHandle = wishlistObject[i];
// 							Bizweb.getProduct(productHandle,function(product){
// 								var htmlSmallProduct = '';
// 								if(product.variants[0].price > 0 ){
// 									var productPrice = Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(product.variants[0].price);
// 								}else{
// 									var productPrice = "Liên hệ";
// 								}
// 								if(product.featured_image != null){
// 									var src = product.featured_image;
// 								}else{
// 									var src = "//bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif";
// 								}
// 								htmlSmallProduct += '<div class="wish-list-item-small js-wishlist-item clearfix">';
// 								htmlSmallProduct += '<a class="product-image" href="'+ product.url +'" title="'+ product.name +'">';
// 								htmlSmallProduct += '<img class="lazyload" alt="'+ product.name +'" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="'+ src +'" width="370" height="480"></a>';
// 								htmlSmallProduct += '<div class="detail-item"><div class="product-details">';
// 								htmlSmallProduct += '<a href="javascript:;" data-handle="'+product.alias+'" title="Bỏ yêu thích" class="js-remove-wishlist">×</a>';
// 								htmlSmallProduct += '<p class="product-name">';
// 								htmlSmallProduct += '<a href="'+ product.url +'" title="'+ product.name +'">'+ product.name +'</a>';
// 								htmlSmallProduct += '</p></div><div class="product-details-bottom">';
// 								htmlSmallProduct += '<span class="price pricechange">' +productPrice+ '</span>';
// 								htmlSmallProduct += '</div></div></div>';
// 								$wishlistSmall.append(htmlSmallProduct);
// 								awe_lazyloadImage();
// 							});
// 						}
// 						wishlistViewAll.removeClass('d-none');
// 					}else{
// 						loadNoResult();
// 					}
// 				}
// 				function loadWishlist(){
// 					$wishlistContainer.html('');
// 					if (wishlistObject.length > 0){
// 						for (var i = 0; i < wishlistObject.length; i++) { 
// 							var productHandle = wishlistObject[i];
// 							Bizweb.getProduct(productHandle,function(product){
// 								var htmlProduct = '';
// 								var i;
// 								if(product.variants[0].price > 0 ){
// 									var productPrice = Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(product.variants[0].price);
// 								}else{
// 									var productPrice = "Liên hệ";
// 								}
// 								if(product.variants[0].compare_at_price > product.variants[0].price ){
// 									var productPriceCompare = Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(product.variants[0].compare_at_price);
// 									var productDiscount = Math.round((product.variants[0].compare_at_price - product.variants[0].price)/product.variants[0].compare_at_price * 100);
// 								}
// 								if(product.featured_image != null){
// 									var src = Bizweb.resizeImage(product.featured_image, 'large');
// 								}else{
// 									var src = "//bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif";
// 								}

// 								htmlProduct += '<div class="col-6 col-sm-6 col-md-4 col-lg-3 item_product_main js-wishlist-item">';
// 								htmlProduct += '<div class="product-thumbnail">';
// 								htmlProduct += '<a class="image_thumb" href="'+ product.url +'" title="'+ product.name +'">';
// 								htmlProduct += '<img class="lazyload" width="370" height="480" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="'+ src +'" alt="'+ product.name +'" />';
// 								htmlProduct += '</a>';
// 								if(product.variants[0].compare_at_price > product.variants[0].price ){
// 									htmlProduct += '<span class="smart">-' +productDiscount+ '%</span>';
// 								}
// 								htmlProduct += '<button type="button" class="favorites-btn favorites-btn-cus js-favorites js-remove-wishlist cart-button" title="Bỏ yêu thích" data-handle="'+product.alias+'"><img width="25" height="25" class="fash-added" src="https://bizweb.dktcdn.net/100/451/884/themes/857425/assets/heartadd.png?1649958365417"/></button></div>';
// 								htmlProduct += '<div class="product-info"><h3 class="product-name"><a href="'+ product.url +'" title="'+ product.name +'">'+ product.name +'</a></h3>';					
// 								htmlProduct += '<div class="price-box">';
// 								htmlProduct += '<span class="price">' +productPrice+ '</span>';
// 								if(product.variants[0].compare_at_price > product.variants[0].price ){
// 									htmlProduct += '<span class="compare-price">' +productPriceCompare+ '</span>';
// 								}
// 								htmlProduct += '</div>';
// 								htmlProduct += '</div>';
// 								$wishlistContainer.append(htmlProduct);
// 								awe_lazyloadImage();
// 							});
// 						}
// 					}else{
// 						loadNoResult();
// 					}
// 					$wishlistCount.text(wishlistObject.length);
// 					$(wishlistButtonClass).each(function(){
// 						var productHandle = $(this).data('handle');
// 						var iconWishlist = $.inArray(productHandle,wishlistObject) !== -1 ? "<img class='fash-added' alt='Đến trang sản phẩm yêu thích' width='25' height='25' src='https://bizweb.dktcdn.net/100/451/884/themes/857425/assets/heartadd.png?1649958365417'/>" : "<img alt='Thêm vào yêu thích' width='25' height='25' src='https://bizweb.dktcdn.net/100/423/358/themes/852010/assets/heart.png?1645678264903'/>";
// 						var textWishlist = $.inArray(productHandle,wishlistObject) !== -1 ? "Đến trang sản phẩm yêu thích" : "Thêm vào yêu thích";
// 						$(this).html(iconWishlist).attr('title',textWishlist);
// 					});
// 				}
// 				var _0xcd91=["\x68\x61\x6E\x64\x6C\x65","\x64\x61\x74\x61","\x5B\x64\x61\x74\x61\x2D\x68\x61\x6E\x64\x6C\x65\x3D\x22","\x22\x5D","\x69\x6E\x41\x72\x72\x61\x79","\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x70\x75\x73\x68","\x77\x69\x73\x68\x6C\x69\x73\x74\x49\x63\x6F\x6E\x41\x64\x64\x65\x64","\x73\x74\x72\x69\x6E\x67\x73","\x68\x74\x6D\x6C","\x66\x61\x73\x74","\x66\x61\x64\x65\x49\x6E","\x73\x6C\x6F\x77","\x66\x61\x64\x65\x4F\x75\x74","\x74\x69\x74\x6C\x65","\x77\x69\x73\x68\x6C\x69\x73\x74\x54\x65\x78\x74\x41\x64\x64\x65\x64","\x61\x74\x74\x72","\x6C\x6F\x63\x61\x6C\x57\x69\x73\x68\x6C\x69\x73\x74","\x73\x74\x72\x69\x6E\x67\x69\x66\x79","\x73\x65\x74\x49\x74\x65\x6D","\x6C\x65\x6E\x67\x74\x68","\x74\x65\x78\x74"];function updateWishlist(_0xfc06x2){var _0xfc06x3=$(_0xfc06x2)[_0xcd91[1]](_0xcd91[0]),_0xfc06x4=$(wishlistButtonClass+ _0xcd91[2]+ _0xfc06x3+ _0xcd91[3]);var _0xfc06x5=$[_0xcd91[4]](_0xfc06x3,wishlistObject)!==  -1?true:false;if(_0xfc06x5){window[_0xcd91[6]][_0xcd91[5]]= wishlistPageUrl}else {wishlistObject[_0xcd91[7]](_0xfc06x3);_0xfc06x4[_0xcd91[14]](_0xcd91[13])[_0xcd91[12]](_0xcd91[11])[_0xcd91[10]](theme[_0xcd91[9]][_0xcd91[8]]);_0xfc06x4[_0xcd91[17]](_0xcd91[15],theme[_0xcd91[9]][_0xcd91[16]])};localStorage[_0xcd91[20]](_0xcd91[18],JSON[_0xcd91[19]](wishlistObject));loadSmallWishList();$wishlistCount[_0xcd91[22]](wishlistObject[_0xcd91[21]])}
// 				var _0xd3ea=["\x63\x6C\x69\x63\x6B","\x70\x72\x65\x76\x65\x6E\x74\x44\x65\x66\x61\x75\x6C\x74","\x6F\x6E","\x68\x61\x6E\x64\x6C\x65","\x64\x61\x74\x61","\x5B\x64\x61\x74\x61\x2D\x68\x61\x6E\x64\x6C\x65\x3D\x22","\x22\x5D","\x77\x69\x73\x68\x6C\x69\x73\x74\x49\x63\x6F\x6E","\x73\x74\x72\x69\x6E\x67\x73","\x68\x74\x6D\x6C","\x74\x69\x74\x6C\x65","\x77\x69\x73\x68\x6C\x69\x73\x74\x54\x65\x78\x74","\x61\x74\x74\x72","\x69\x6E\x64\x65\x78\x4F\x66","\x73\x70\x6C\x69\x63\x65","\x6C\x6F\x63\x61\x6C\x57\x69\x73\x68\x6C\x69\x73\x74","\x73\x74\x72\x69\x6E\x67\x69\x66\x79","\x73\x65\x74\x49\x74\x65\x6D","\x66\x61\x64\x65\x4F\x75\x74","\x2E\x6A\x73\x2D\x77\x69\x73\x68\x6C\x69\x73\x74\x2D\x69\x74\x65\x6D","\x63\x6C\x6F\x73\x65\x73\x74","\x6C\x65\x6E\x67\x74\x68","\x74\x65\x78\x74"];$(document)[_0xd3ea[2]](_0xd3ea[0],wishlistButtonClass,function(_0xdfa5x1){_0xdfa5x1[_0xd3ea[1]]();updateWishlist(this)});$(document)[_0xd3ea[2]](_0xd3ea[0],wishlistRemoveButtonClass,function(){var _0xdfa5x2=$(this)[_0xd3ea[4]](_0xd3ea[3]),_0xdfa5x3=$(wishlistButtonClass+ _0xd3ea[5]+ _0xdfa5x2+ _0xd3ea[6]);_0xdfa5x3[_0xd3ea[9]](theme[_0xd3ea[8]][_0xd3ea[7]]);_0xdfa5x3[_0xd3ea[12]](_0xd3ea[10],theme[_0xd3ea[8]][_0xd3ea[11]]);wishlistObject[_0xd3ea[14]](wishlistObject[_0xd3ea[13]](_0xdfa5x2),1);localStorage[_0xd3ea[17]](_0xd3ea[15],JSON[_0xd3ea[16]](wishlistObject));$(this)[_0xd3ea[20]](_0xd3ea[19])[_0xd3ea[18]]();$wishlistCount[_0xd3ea[22]](wishlistObject[_0xd3ea[21]]);if(wishlistObject[_0xd3ea[21]]=== 0){loadNoResult()}});loadWishlist();loadSmallWishList();return {load:loadWishlist}
// 			})()
// 			theme.strings = {
// 				wishlistNoResult: "<p>Chưa có sản phẩm yêu thích! Hãy lựa chọn những sản phẩm ưa thích của mình nào.</p>",
// 				wishlistIcon: "<img  alt='Thêm vào yêu thích' width='25' height='25' src='https://bizweb.dktcdn.net/100/423/358/themes/852010/assets/heart.png?1645678264903'/>",
// 				wishlistIconAdded: "<img class='fash-added'  alt='Đến trang sản phẩm yêu thích' width='25' height='25' src='https://bizweb.dktcdn.net/100/451/884/themes/857425/assets/heartadd.png?1649958365417'/>",
// 				wishlistText: "Thêm vào yêu thích",
// 				wishlistTextAdded: "Đến trang sản phẩm yêu thích",
// 				wishlistRemove: "Xóa"
// 			};
// 		}
// 	});		
// }