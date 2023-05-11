<?php
ob_start();
session_start();
$pagename="Home Page";

include "../connect.php";
require('config.php');
include("head.php");
require('data.php');
require('fungsi.php');


if(isset($_POST['okada'])){
    
    if(!(isset($_SESSION['yenny']))){
        $_SESSION['yenny']="sale";
    }
    
    $propertylocation=$_POST['propertyLocation'];
    if($propertylocation==""){
        $propertylocation="0";
    }
    
    $tid=$_POST['tid'];
    $bedrooms=$_POST['bedrooms'];
    $minprice=$_POST['minprice'];
    $maxprice=$_POST['maxprice'];
    $furnished="All Types";
    $serviced="All Types";
    $shared="All Types";
    
    header("Location:search.php?ps=$propertylocation&type=$tid&bedrooms=$bedrooms&minprice=$minprice&maxprice=$maxprice&furnished=$furnished&king=1&serviced=$serviced&shared=$shared");
    exit();
    
    
}



?>


  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9 posts-archive">
		 <?php                     
                            if(!isset($_GET["page"])){
                                $_GET["page"] = 1;
                            }
                                
                                $tbl_name="news";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
       
      
         //$query = "SELECT COUNT(*) as num FROM $tbl_name";
	//$total_pages = mysql_fetch_array(mysql_query($query));
	//$total_pages = $total_pages['num'];
	
        // $query = "SELECT COUNT(*) as num FROM $tbl_name";
         $get_news = ORM::for_table("$tbl_name")
                 ->find_array();
         
	$total_pages = count($get_news);
	
	
	/* Setup vars for query. */
	$targetpage = "pagination.php"; 	//your file name  (the name of this file)
	$limit = 5; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	
				//$news = $db->prepare("SELECT * FROM posts_tbl  ORDER BY id ASC LIMIT $start, $limit");
				//$news->execute();
                                
                             
                            
				
	                          $news = ORM::for_table("news")
                                          ->limit($limit)
                                          ->offset($start)
                                          ->order_by_desc('news.id')
                                           ->find_array();
                                       
                                  ?>
                                  <?php foreach ($news as $row):?>

                                
                  <?php               
                                /* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	 ?>
                                                                      
            <article class="post">
              <div class="row">
                <div class="col-md-4 col-sm-4"> <a href="news_post.php?id=<?php echo $row['id'];?>"><img src="uploads/<?php echo $row['file'];?>" alt="" class="img-thumbnail img-responsive"></a> </div>
                <div class="col-md-8 col-sm-8">
                  <h3><a href="news_post.php?id=<?php echo $row['id'];?>"><?php echo $row['news_title']; ?></a></h3>
                  <span class="post-meta meta-data"> <span><i class="fa fa-calendar"></i> <?php echo $row['date']; ?></span></span>
                  <?php echo strip_tags(substr($row['news_detail'],0,180)) ;?>...
				  <p><a href="news_post.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Continue reading <i class="fa fa-long-arrow-right"></i></a></p>
                </div>
              </div>
            </article>
			<?php endforeach;?>	 
                                                    
							<?php ?>
                                                                     
                                        <span class="text-muted m-r-sm">
                                                             
                                                             Showing
                                 <?php if($lastpage == $next-1):?>
                                    <?=$total_pages?>
                                <?php else:?>
                                <?=$page * $limit?> 
                            <?php endif;?>
                                                             of <?=$total_pages?>
                                
                                        </span>
                                                    <div class="btn-group">
                             
                                <?php if($page != 1):?>
                                <a class="btn btn-default" href="?page=<?=$prev?>"><i class="">Page <?=$prev?><<</i></a>
                                <?php endif;?>
                                
                                <?php if($lastpage == $next-1):?>
                                
                                <?php else:?>
                                <a class="btn btn-default" href="?page=<?=$next?>"><i class="">>>Page <?=$next?></i></a>
                                <?php endif;?>
                            </div>	
			
			</div>  
              
      
      
      
      
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

<?php  include("footer.php");

