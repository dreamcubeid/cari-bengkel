<?php

namespace AppBundle\Utils;

class Pagination {
	
	public static function generate(
		int $totalPage = 1,
		int $currentPage = 1,
		int $showPage = 5,
		string $keyword = 'page',
		string $clickAction = ''
	) {

        parse_str($_SERVER['QUERY_STRING'], $get);

        //get current URL
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
        $host =  htmlentities($_SERVER['HTTP_HOST']);  
        $requestUri = htmlentities($_SERVER['REQUEST_URI']);

        $currentUrl = $protocol . $host . $requestUri;
        $currentUrl = strtok($currentUrl, "?"); 

        $currentUrl = $currentUrl . '?';

        //check if URL has query parameters
        if (count($get)) {
            unset($get[$keyword]); // unset keyword
            $currentUrl .= http_build_query($get) . (count($get) ? '&' : ''); // re-build URL without keyword
        } 

        $currentUrl .= $keyword . '=';

        //pagination HTML
        $navigation = '<div class="row mt-3">
				            <div class="col-12 text-center">
                				<ul class="pagination cn-pagination justify-content-center">';

        //previous paging
        if ($totalPage > 1 && $currentPage > 1) {
        	$href = $currentUrl . ($currentPage - 1);
        	$navigation .= self::makeItemPaging('<i class="fas fa-arrow-left"></i>', $href, 'page-item', $clickAction, $currentPage - 1);
        } else {
        	$navigation .= self::makeItemPaging('<i class="fas fa-arrow-left"></i>', '', 'page-item disabled', $clickAction, $currentPage - 1);
        }

        //main paging
        if ($totalPage <= $showPage) {

            for($i = 1 ; $i <= $totalPage ; $i++){
                $classActive = $i == $currentPage ? 'page-item active' : 'page-item';
                $href = $currentUrl . $i; // set url iteem paging
                $navigation .= self::makeItemPaging($i, $href, $classActive, $clickAction, $i);
            }

        } else {

            $middleLimit = ceil($showPage / 2);

            if ($currentPage <= $middleLimit) { 

                $countBegin = $middleLimit;
                $countEnd = $middleLimit - 2; 

                if($currentPage == $middleLimit){                
                    $countBegin += 1;  
                    $countEnd -= 1; 
                }

                for($i = 1 ; $i <= $countBegin ; $i++){
                    $classActive = $i == $currentPage ? 'page-item active' : 'page-item';
                    $href = $currentUrl . $i; // set url iteem paging
                    $navigation .= self::makeItemPaging($i, $href, $classActive, $clickAction, $i);
                }              

                $navigation .= self::makeItemPaging('...', '', 'page-item disabled');

                for ($i = ($totalPage - $countEnd) ; $i <= $totalPage ; $i++) {
                    $classActive = $i == $currentPage ? 'page-item active' : 'page-item';
                    $href = $currentUrl . $i; // set url iteem paging
                    $navigation .= self::makeItemPaging($i, $href, $classActive, $clickAction, $i);
                }              


            } else if ($currentPage > ($totalPage - $middleLimit)) { 

                $countBegin = $middleLimit - 1; 
                $countEnd = $middleLimit -1; 

                if($currentPage == ($totalPage - $middleLimit) + 1){                
                    $countBegin -= 1;  
                    $countEnd += 1; 
                }

                for($i = 1 ; $i <= $count_begin ; $i++){
                    $classActive = $i == $currentPage ? 'page-item active' : 'page-item';
                    $href = $current_url . $i; // set url iteem paging
                    $navigation .= self::makeItemPaging($i, $href, $classActive, $clickAction, $i);
                }              

                $navigation .= self::makeItemPaging('...', '', 'page-item disabled');

                for($i = ($totalPage - $countEnd) ; $i <= $totalPage ; $i++){
                    $classActive = $i == $currentPage ? 'page-item active' : 'page-item';
                    $href = $currentUrl . $i; // set url iteem paging
                    $navigation .= self::makeItemPaging($i, $href, $classActive, $clickAction, $i);
                }              

            } else {

                for ($i = 1 ; $i <= ($middleLimit - 2) ; $i++) {
                    $classActive = $i == $currentPage ? 'page-item active' : 'page-item';
                    $href = $currentUrl . $i; // set url iteem paging
                    $navigation .= self::makeItemPaging($i, $href, $classActive, $clickAction, $i);
                }              

                $navigation .= self::makeItemPaging('...', '', 'page-item disabled');

                for ($i = $currentPage - ($middleLimit - 2) ; $i <= $currentPage  + ($middleLimit - 2) ; $i++) {
                    $classActive = $i == $currentPage ? 'page-item active' : 'page-item';
                    $href = $currentUrl . $i; // set url iteem paging
                    $navigation .= self::makeItemPaging($i, $href, $classActive, $clickAction, $i);
                }              

                $navigation .= self::makeItemPaging('...', '', 'page-item disabled');

                for($i = ($totalPage - $middleLimit + 3) ; $i <= $totalPage ; $i++){
                    $classActive = $i == $currentPage ? 'page-item active' : 'page-item';
                    $href = $currentUrl . $i; // set url iteem paging
                    $navigation .= self::makeItemPaging($i, $href, $classActive, $clickAction, $i);
                }              

            }

        }
        
        //next paging
        if ($currentPage < $totalPage) {
            $href = $currentUrl . ($currentPage + 1); // set url item paging
            $navigation .= self::makeItemPaging('<i class="fas fa-arrow-right"></i>', $href, 'page-item', $clickAction, $currentPage + 1);
        } else {
        	$navigation .= self::makeItemPaging('<i class="fas fa-arrow-right"></i>', '', 'page-item disabled', $clickAction, $currentPage + 1);
        }

        $navigation .= '</ul></div></div>';   

        return $navigation;

	}

	public static function makeItemPaging(
		string $text = '', 
		string $href = 'javascript:void(0)', 
		string $classes = '', 
		string $actionClick = '', 
		string $dataValue = ''
	) {
        $html = '<li class="' . $classes . '"><a class="page-link" href="' . $href . '" onclick="' . $actionClick . '" data-value=' . $dataValue . '>' . $text . '</a></li>';

        return $html;
        
    }

}