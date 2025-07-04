function sortby(sort) {			 
	switch(sort) {
		case "price-asc":
			selectedSortby = "price_min:asc";					   
			break;
		case "price-desc":
			selectedSortby = "price_min:desc";
			break;
		case "alpha-asc":
			selectedSortby = "name:asc";
			break;
		case "alpha-desc":
			selectedSortby = "name:desc";
			break;
		case "created-desc":
			selectedSortby = "created_on:desc";
			break;
		case "created-asc":
			selectedSortby = "created_on:asc";
			break;
		default:
			selectedSortby = "";
			break;
	}

	doSearch(1);
}

function resortby(sort){
	$('.sort-cate-right .btn-quick-sort').removeClass('active');
	switch(sort){				  
		case "price_min:asc":
			tt = "Giá tăng dần";
			$('.sort-cate-right .price-asc').addClass("active");
			break;
		case "price_min:desc":
			tt = "Giá giảm dần";
			$('.sort-cate-right .price-desc').addClass("active");
			break;
		case "name:asc":
			tt = "Tên A → Z";
			$('.sort-cate-right .alpha-asc').addClass("active");
			break;
		case "name:desc":
			tt = "Tên Z → A";
			$('.sort-cate-right .alpha-desc').addClass("active");
			break;
		case "created_on:desc":
			tt = "Hàng mới nhất";
			$('.sort-cate-right .position-desc').addClass("active");
			break;
		case "created_on:asc":
			tt = "Hàng cũ nhất";
			break;
		default:
			tt = "Mặc định";
			$('.sort-cate-right .default').addClass("active");
			break;
	}			   
	$('#sort-by > ul > li > span').html(tt);
}


function _selectSortby(sort) {
	resortby(sort);
	switch(sort) {
		case "price-asc":
			selectedSortby = "price_min:asc";
			break;
		case "price-desc":
			selectedSortby = "price_min:desc";
			break;
		case "alpha-asc":
			selectedSortby = "name:asc";
			break;
		case "alpha-desc":
			selectedSortby = "name:desc";
			break;
		case "created-desc":
			selectedSortby = "created_on:desc";
			break;
		case "created-asc":
			selectedSortby = "created_on:asc";
			break;
		default:
			selectedSortby = sort;
			break;
	}
}
