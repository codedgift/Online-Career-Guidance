<?php 
$page = "career";

//continue only if $_POST is set and it is a Ajax request
if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

	// -------------------------------------------------------------//

	function main_query($sql){
		
		$conn = new mysqli("localhost","root","","career");
		
		// Check connection 
			if($conn->connect_error){
				die("Database connection failed! " . $conn->connect_error);
			}
		$result = $conn->query($sql);
		if($result)
                {
                    return $result;
                }else{
                    return $conn->error;
                }
		
		
	}
	
// -------------------------------------------------------------//

	function limit_word($string,$word_limit){
		
		$words = explode(" ",$string);
		return implode(" ",array_slice($words,0,$word_limit));
		
	}
	
// -------------------------------------------------------------//

$per_page	= 4; //item to display per page

	$page_query = main_query("SELECT COUNT('id') FROM article");
	$fetch = $page_query->fetch_row();
	$total_pages = ceil($fetch[0]/$per_page);
	$page = (isset($_POST['page'])) ? (int)$_POST['page'] : 1;
	$start = ($page - 1) * $per_page;
	

	//Limit our results within a specified range. 
	$results = main_query("SELECT * FROM article ORDER BY id ASC LIMIT $start, $per_page");

	//Display records fetched from database.
	
	while($row = $results->fetch_assoc()){
		
		$id = $row['id'];
		$name = $row['name'];
		$link = "assets/article/";
		$img = $row['image'];
		$image = $link.$img;
		$desp = $row['description'];
		$main_desp = limit_word($desp, 10);
		$date = $row['date_added'];
		
		echo "	<div class='col-md-6 col-sm-6 col-xs-12'>
				<div class='blog-post'>
					<div class='post-img'>
						<a href='#'>
							<img src='$image' alt='$name' class='img-responsive'>
						</a>
					</div>
					<div class='post-info'>
						<a href='#'>$date</a>
					</div>
					<h3 class='post-title'>
						<a href='article_details.php?id=$id'>
							$name
						</a>
						<p class='post-excerpt' style='text-align: justify;'>
						$main_desp
					</p>
					</h3>
					
				</div>
			</div>";
		
	}
	
	/* We call the pagination function here to generate Pagination link for us. 
	As you can see I have passed several parameters to the function. */
	$prev = $page - 1;
	$next = $page + 1;

	echo " <div class='col-md-12 col-sm-12 col-xs-12 nopadding'>";
	echo "<div class='pagination-box clearfix'>";

	echo "<ul class='pagination'>";

	if(!($page <= 1)){
		echo "<li><a href='#' data-page=".$prev." title='Page".$prev."' aria-label='Previous'> <span aria-hidden='true'>«</span> </a></li>";
	}


		if($total_pages >= 1){
			for($x=1; $x<=$total_pages; $x++){
				echo ($x == $page) ? '<li  class="active"><a href="#" data-page="'.$x.'" title="Page'.$x.'">'.$x.'</a></li>' : '<li ><a href="#" style="background-color: #e0e0e0;" data-page="'.$x.'" title="Page'.$x.'">'.$x.'</a></li>';
			}
		}

	if(!($page >= $total_pages)){
		echo "<li><a href='#' data-page=".$next." title='Page".$next."' aria-label='Previous'> <span aria-hidden='true'>»</span> </a></li>";
	}

	echo "</ul>";	
				
	echo "</div>";
	echo "</div>";	

	exit;	

}


################ pagination function #########################################

function paginate_function($item_per_page, $current_page, $total_records, $total_pages)
{
    $pagination = '';
    if($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages){ //verify total pages and current page number
        $pagination .= '<ul class="pagination">';
        
        $right_links    = $current_page + 3; 
        $previous       = $current_page - 3; //previous link 
        $next           = $current_page + 1; //next link
        $first_link     = true; //boolean var to decide our first link
        
        if($current_page > 1){
			$previous_link = ($previous==0)? 1: $previous;
            $pagination .= '<li class="first"><a href="#" data-page="1" title="First">&laquo;</a></li>'; //first link
            $pagination .= '<li><a href="#" data-page="'.$previous_link.'" title="Previous">&lt;</a></li>'; //previous link
                for($i = ($current_page-2); $i < $current_page; $i++){ //Create left-hand side links
                    if($i > 0){
                        $pagination .= '<li><a href="#" data-page="'.$i.'" title="Page'.$i.'">'.$i.'</a></li>';
                    }
                }   
            $first_link = false; //set first link to false
        }
        
        if($first_link){ //if current active page is first link
            $pagination .= '<li class="first active">'.$current_page.'</li>';
        }elseif($current_page == $total_pages){ //if it's the last active link
            $pagination .= '<li class="last active">'.$current_page.'</li>';
        }else{ //regular current link
            $pagination .= '<li class="active">'.$current_page.'</li>';
        }
                
        for($i = $current_page+1; $i < $right_links ; $i++){ //create right-hand side links
            if($i<=$total_pages){
                $pagination .= '<li><a href="#" data-page="'.$i.'" title="Page '.$i.'">'.$i.'</a></li>';
            }
        }
        if($current_page < $total_pages){ 
				$next_link = ($i > $total_pages) ? $total_pages : $i;
                $pagination .= '<li><a href="#" data-page="'.$next_link.'" title="Next">&gt;</a></li>'; //next link
                $pagination .= '<li class="last"><a href="#" data-page="'.$total_pages.'" title="Last">&raquo;</a></li>'; //last link
        }
        
        $pagination .= '</ul>'; 
    }
    return $pagination; //return pagination links
}



?>