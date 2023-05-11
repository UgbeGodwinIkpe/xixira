<?php  

ob_start();
session_start();
$pagename="For Rent";

require('config.php');
include("head.php");
require('data.php');
require('fungsi.php');



$uppuser=$r['username'];



$ps='0';
$type='All Types';
$bedrooms='All Types';

$minprice='0';
$maxprice='0';

$furnished='All Types';

$king='1';
$serviced='All Types';
$shared='All Types';


$ps=$ps;
if($ps=="0"){
    $pq="!=";
   
}
else{
    $pq="=";
}

$type=$type;
if($type=='All Types'){
$tq="!=";
}
else{
    $tq="=";
}



$bedrooms=$bedrooms;
if($bedrooms=="All Types"){
    $bq=">";
    $bedrooms=0;
}
else if($bedrooms=="6"){
    $bq=">";
    $bedrooms=6;
}

else{
    $bq="=";
}


$minprice=$minprice;


$maxprice=$maxprice;
if($maxprice=='0'){
    $maxprice="100000000000";
    $mkp='1';
}

$furnished=$furnished;
if($furnished=='All Types'){
   $fq="!="; 
}
else{
    $fq="=";
}


$serviced=$serviced;
if($serviced=='All Types'){
   $sq="!="; 
}
else{
    $sq="=";
}

if(isset($_GET['sea'])){
    $ppcat=$_GET['ptry'];
}
else{
$ppcat=$_SESSION['yenny'];
}

$shared=$shared;
if($shared=="All Types"){
    $shq="!=";
}
else{
    $shq="=";
}


$jrea=$_GET['area'];
$queryguu="select * from property where area='$jrea' or state='$jrea'";
$resultguu=mysqli_query($con,$queryguu);
if(mysqli_num_rows($resultguu)>=1){
   $guu=mysqli_num_rows($resultguu); 
}
else{
    $guu='0';
}




$queryguu2="select * from property where area='$jrea' and status='0' or state='$jrea' and status='0'";
$resultguu2=mysqli_query($con,$queryguu2);
if(mysqli_num_rows($resultguu2)>=1){
    $guu2=mysqli_num_rows($resultguu2);
    
}
else{
    $guu2='0';
}

if($ps=="0"){
$queryhdj="select * from property where area".$pq."'$ps' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype".$tq."'$type' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." and ptype".$tq."'$type' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice";
}else{
    
    $queryhdj="select * from property where area LIKE '%".$ps."%' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype".$tq."'$type' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." and ptype".$tq."'$type' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice";

    
}
$resulthdj=mysqli_query($con,$queryhdj);
if(mysqli_num_rows($resulthdj)>=1){
    $hdj=mysqli_fetch_array($resulthdj);
    $hddj=mysqli_num_rows($resulthdj);
    
        
    
}
else{
    $hddj=0;
}



if($ps=="0"){
$queryhd="select * from property where area".$pq."'$ps' and status='0' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype".$tq."'$type' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and status='0' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." and ptype".$tq."'$type' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice";
}
else{
    
  $queryhd="select * from property where area LIKE '%".$ps."%' and status='0' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype".$tq."'$type' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and status='0' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." and ptype".$tq."'$type' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice";
  
    
}
$resulthd=mysqli_query($con,$queryhd);
if(mysqli_num_rows($resulthd)>=1){
    $hd=mysqli_fetch_array($resulthd);
    $hdd=mysqli_num_rows($resulthd);
   
      
    
}
else{
      $hdd=0;
}




?>
<div class="gray-bg">



<div class="property-sale-area" style="font-family:Roboto;">
<div class="container">
<div class="row">
<div class="col-12">
<div aria-label="breadcrumb" class="property-sale-menu">
<ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
<li class="breadcrumb-item"> <a alt="" href="index.php"> <small itemprop="name">Home</small> </a> </li>
<li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"> <a alt="<?php  if(isset($_GET['king'])){
    if($bedrooms!='All Types'){
        if($bedrooms>=2){
            echo $bedrooms." bedrooms ";
        }
        else{
            echo $bedrooms." bedroom "; 
        }
    }
    else if($bedrooms=='6'){
        echo"6+ Bedrooms ";
    }
    
    
    if($type!="All Types"){
        echo $type;
    }
    else{
        echo"Property";
    }
echo" For ".$ppcat;
if($ps!='0'){
    echo" in ".$ps;
}




}else{

echo"Property in ". $_GET['area'];

}?> <span></span>


<?php  
if(isset($_GET['king'])){
if(($mkp!='1') or ($minprice!=0)){

?>
<span>Price range <strong>

<?php  if($minprice!='0'){

echo "&#8358;".number_format($minprice);

}?>



<?php  if($mkp!='1' and $minprice!='0'){?>
to &#8358;<?php  echo number_format($maxprice);?>

<?php  }else{?>&#8358;0 to &#8358;<?php  echo number_format($maxprice);?>
<?php  }?>
</strong></span>

<?php  }?>

<?php  }?>" itemtype="#" itemprop="item" href="#"> <small itemprop="name"><?php  if(isset($_GET['king'])){
    if($bedrooms!='All Types'){
        if($bedrooms>=2){
            echo $bedrooms." bedrooms ";
        }
        else{
            echo $bedrooms." bedroom "; 
        }
    }
    else if($bedrooms=='6'){
        echo"6+ Bedrooms ";
    }
    
    
    if($type!="All Types"){
        echo $type;
    }
    else{
        echo"Property";
    }
echo" For ".$ppcat;
if($ps!='0'){
    echo" in ".$ps;
}




}else{

echo"Property in ". $_GET['area'];

}?> <span></span>


<?php  
if(isset($_GET['king'])){
if(($mkp!='1') or ($minprice!=0)){

?>
<span>Price range <strong>

<?php  if($minprice!='0'){

echo "&#8358;".number_format($minprice);

}?>



<?php  if($mkp!='1' and $minprice!='0'){?>
to &#8358;<?php  echo number_format($maxprice);?>

<?php  }else{?>&#8358;0 to &#8358;<?php  echo number_format($maxprice);?>
<?php  }?>
</strong></span>

<?php  }?>

<?php  }?></small> </a>
<meta itemprop="position" content="1" /> </li>
</ol>
</div>
<div class="property-sale-title">
<h1 class="listings-title"> <?php  if(isset($_GET['king'])){
    if($bedrooms!='All Types'){
        if($bedrooms>=2){
            echo $bedrooms." bedrooms ";
        }
        else{
            echo $bedrooms." bedroom "; 
        }
    }
    else if($bedrooms=='6'){
        echo"6+ Bedrooms ";
    }
    
    
    if($type!="All Types"){
        echo $type;
    }
    else{
        echo"Property";
    }
echo" For ".$ppcat;
if($ps!='0'){
    echo" in ".$ps;
}




}else{

echo"Property in ". $_GET['area'];

}?> <span></span>


<?php  
if(isset($_GET['king'])){
if(($mkp!='1') or ($minprice!=0)){

?>
<span>Price range <strong>

<?php  if($minprice!='0'){

echo "&#8358;".number_format($minprice);

}?>



<?php  if($mkp!='1' and $minprice!='0'){?>
to &#8358;<?php  echo number_format($maxprice);?>

<?php  }else{?>&#8358;0 to &#8358;<?php  echo number_format($maxprice);?>
<?php  }?>
</strong></span>

<?php  }?>

<?php  }?> </h1>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-8">
<div class="property-left-sidebar">
<div class="property-sale-top-text" >
<p>   <?php  if(isset($_GET['king'])){?>
<h2>
There are <?php  echo $hddj;?>

listings and <?php  
echo $hdd;
?> available 

<?php  


   if($bedrooms!='All Types'){
        if($bedrooms>=2){
            echo $bedrooms." bedrooms ";
        }
        else{
            echo $bedrooms." bedroom "; 
        }
    }
    else if($bedrooms=='6'){
        echo"6+ Bedrooms ";
    }


?>

<?php  

    
    if($type!="All Types"){
        echo $type;
    }
    else{
        echo"flats, houses, land and commercial property";
    }

?> for <?php  echo $ppcat;?>

in
<?php  if($ps!='0'){
    echo $ps.",";
}

    
    ?> Nigeria. 
    
    <?php  if($hdd!=0 and $hddj!=0){?>
    The property have been listed by estate agents who can be contacted using the contact information provided for each property listing. The list can be filtered by price, furnishing and recency.
<?php  }?>
</h2>
<?php  }else{










?>






There are <?php  echo $guu;?>

listings and <?php  
echo $guu2;
?> available 

flats, houses, land and commercial property

in
<?php  echo $_GET['area'];

    
    ?>. 
    
    <?php  if($guu!=0 and $guu2!=0){?>
    The property have been listed by estate agents who can be contacted using the contact information provided for each property listing. The list can be filtered by price, furnishing and recency.
<?php  }?>
















<?php





}?>
</p>
</div>
<div class="property-items-name " style="display:none;">
<ul class="extra-listings">
<li> <a href="https://www.propertypro.ng/property-for-rent/1-bedroom">1 Bedroom</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/2-bedroom">2 Bedroom</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/3-bedroom">3 Bedroom</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/4-bedroom">4 Bedroom</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/5-bedroom">5 Bedroom</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/6-bedroom">6 Bedroom</a> <span>|</span> </li>
</ul>
<br />
<ul class="extra-listings">
<li> <a href="https://www.propertypro.ng/property-for-rent/co-working-space">Co Working Space</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/commercial-property">Commercial Property</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/flat-apartment">Flats/ Apartments</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/house">House</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/land">Land</a> </li>
</ul>
<br />
<ul class="extra-listings">
<li> <a href="https://www.propertypro.ng/property-for-rent/in/abuja">Abuja</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/in/akwa-ibom">Akwa Ibom</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/in/anambra">Anambra</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/in/benue">Benue</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/in/delta">Delta</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/in/edo">Edo</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/in/enugu">Enugu</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/in/imo">Imo</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/in/kaduna">Kaduna</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/in/lagos">Lagos</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/in/niger">Niger</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/in/ogun">Ogun</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/in/ondo">Ondo</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/in/oyo">Oyo</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/in/plateau">Plateau</a> <span>|</span> </li>
<li> <a href="https://www.propertypro.ng/property-for-rent/in/rivers">Rivers</a> </li>
</ul>
<br />
</div>
<div class="mobile-refine-search">
<a href="#">Refine Search</a>
</div>

<div class="property-sale-number " style="display:none;">
<div class="property-number-left">
<h3>Result 1 - 20 of <strong>22212</strong></h3>
</div>
<div class="property-default-option">
<div class="single-request-dropdown">
<div class="dropdown default-option">
<div class="caption">
Sort By
</div>
<div class="list">
<div class="item">
<a href="https://www.propertypro.ng/property-for-rent?sort=postedOn&amp;order=desc">Most Recent</a>
</div>
<div class="item">
<a href="https://www.propertypro.ng/property-for-rent?sort=amount&amp;order=asc">Lowest Price</a>
</div>
<div class="item">
<a href="https://www.propertypro.ng/property-for-rent?sort=amount&amp;order=desc">Highest Price</a>
</div>
<div class="item">
<a href="https://www.propertypro.ng/property-for-rent?sort=beds&amp;order=desc">Beds</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="room-sale-area">
    
    
    
    <?php 
$area=$_GET['area'];
$ps=$_GET['ps'];



 $per_page_record = 1; 
  
  
     if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {    
          $page=1;    
        }    
        
        if(isset($_GET['king'])){
            if($ps=="0"){
        
           $query = "SELECT COUNT(*) FROM property where area".$pq."'$ps' and status='0' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype".$tq."'$type' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and status='0' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." and ptype".$tq."'$type' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice";     
            }
            else{
                 $query = "SELECT COUNT(*) FROM property where area LIKE '%".$ps."%' and status='0' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype".$tq."'$type' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and status='0' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." and ptype".$tq."'$type' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice";     
            
                
                
            }
        }
        
        
        else{
            
            
            $query="select COUNT(*) from property where area='$area' and status='0' OR state='$area' and status='0'";
        }
        $rs_result = mysqli_query($con, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
    
    
    
       $start_from = ($page-1) * $per_page_record;   




if(isset($_GET['king'])){
    if($ps=="0"){

    $queryty="select * from property where area".$pq."'$ps' and status='0' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype".$tq."'$type' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and status='0' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." and ptype".$tq."'$type' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice  ORDER BY  FIELD(premium, 'Premium Plus Listing', 'Premium Listing','Listing') LIMIT $start_from, $per_page_record";
    }
    else{
        
        $queryty="select * from property where area LIKE '%".$ps."%' and status='0' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype".$tq."'$type' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and status='0' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." and ptype".$tq."'$type' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice  ORDER BY  FIELD(premium, 'Premium Plus Listing', 'Premium Listing','Listing') LIMIT $start_from, $per_page_record";
    
    }
    
}else{
$queryty="select * from property where area='$area' and status='0' OR state='$area' and status='0' ORDER BY FIELD(premium, 'Premium Plus Listing', 'Premium Listing','Listing') LIMIT $start_from, $per_page_record";
}

$resultty=mysqli_query($con,$queryty);
while($ty=mysqli_fetch_array($resultty)){
    


?>
<?php  
$plus=$ty['plus'];
$sdate=date("Y-m-d");

$kepremium=$ty['premium'];



?>
    
    
    
    
    
    
    
    
<div class="single-room-sale listings-property sponsored-listing">
<h4 class="listings-property-title2"><?php  echo $ty['pname'];?></h4>
<div class="single-room-img">
<a href="#" class="single-room-img-a"> <img style="max-width:200px;max-height:200px;" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php  
  $g1=$ty['pimg'];
        $queryr="SELECT * FROM fileimg WHERE slug='$g1' ";
        $resultr=mysqli_query($con,$queryr);
        if(mysqli_num_rows($resultr)>=1){
            
            $r=mysqli_fetch_array($resultr);
            $r1=$r['image'];
            $r2='../admin/office/img/';
            $r3=$r2.$r1;
            echo $r3;
        }
            ?>" title="<?php  echo $ty['pname'];?>" alt="<?php  echo $ty['pname'];?>" class="listings-img" /> </a>
             <?php  
    
    if(isset($uppuser)){
    
    ?>
    <?php  
    $poid=$ty['id'];
    
    $querysip="select * from sproperty where username='$uppuser' and poid='$poid'";
    $resultsip=mysqli_query($con,$querysip);
    if(mysqli_num_rows($resultsip)>=1){
    
    ?>
<div class="save-heart">
<a href="javascript:void(0);"><i style="color:#f00;" class="fa fa-heart"></i></a>
</div>
 <?php  }else{?>
 
 <div class="save-heart">
<a href="savedproperty.php?id=<?php echo $ty['id']; ?>"><i class="fa fa-heart"></i></a>
</div>
 
 
 <?php } }?>
<div class="room-icons">
<span><span><?php  
$yu=$ty['pimg'];
$querytt="select * from fileimg where slug='$yu'";
$resulttt=mysqli_query($con,$querytt);
$tt=mysqli_num_rows($resulttt);
echo $tt;
?></span> <img src="https://www.propertypro.ng/assets/assets/img/property/2f8b655773948c43f77e8c928e94bbe3-img.png" alt="icon" /> </span>
</div>
</div>
<div class="single-room-text">
<a href="https://www.propertypro.ng/property/4-bedroom-house-for-rent-ikota-gra-ikota-lekki-lagos-6HSLZ"> <h3 class="listings-property-title"><?php  echo $ty['ptype']." for ".$ty['pcat'];?></h3> </a>
<h4><img src="https://www.propertypro.ng/assets/assets/img/resultpage/a6b70a0c1c4423f60780bdda189b91e3-location.svg" alt="icon" title="icon" /><?php  echo $ty['area'];?>, <?php  echo $ty['state'];?></h4>
<div class="n50 featured-text">
<h3> <span content="NGN">₦</span> <span content="<?php  echo number_format($ty['pamt']); ?>/year"><?php  echo number_format($ty['pamt']); ?>/<?php  echo $ty['plot'];?></span> </h3>
<h4><?php  echo $ty['premium'];?></h4>
</div>
<h5> <img src="https://www.propertypro.ng/assets/assets/img/resultpage/03a0a19c8a1e23ef8d78f6130eb0aa22-watch-icon.png" alt="icon" title="icon" />Added <?php 

$oldateformat=$ty['date'];
echo $newdateformat = date("D, d M Y", strtotime($oldateformat));?> </h5>
<div>
PID: <?php 
$pid=$ty['id'];
$pid=substr(md5($pid),0,7);
echo $pid;
?>
</div>
<div class="furnished-btn">
</div>
<div class="result-list-details">
<p class="d-none d-sm-block"> <?php  echo nl2br($ty['dpt']);?> </p>
</div>
<div class="fur-areea">
    <?php  if($ty['bedroom']!=''){?>
<span><img src="https://www.propertypro.ng/assets/assets/img/resultpage/71e561d192ed8abb553ba6448816466d-beds.svg" alt="bed-icon" title="bed-icon" /><?php  echo $ty['bedroom'];?> beds</span>
<?php  }?>
<?php  if($ty['bathroom']!=''){?>
<span><img src="https://www.propertypro.ng/assets/assets/img/resultpage/3945e8adbd5fbe44046a606d2dacd7ca-bath.svg" alt="bath-icon" title="bath-icon" /><?php  echo $ty['bathroom'];?> baths</span>
<?php  }?>
 <?php  if($ty['toilets']!=''){?>
<span><img src="https://www.propertypro.ng/assets/assets/img/resultpage/0a8c8b34dbdfcc7b9d5eaeca83e87ebf-toilet.svg" alt="toilet-icon" title="toilet-icon" /><?php  echo $ty['toilets'];?> Toilets</span>
<?php  }?>

    <?php  if($ty['tspace']!=''){?>
<span><i class="fa fa-car"></i> <?php  echo $ty['tspace'];?> Parking Space</span>

<?php  }?>




   <?php  if($ty['carea']!=''){?>
<span><i class="fa fa-car"></i> <?php  echo $ty['carea'];?> sqm Covered Area</span>

<?php  }?>



  <?php  if($ty['toarea']!=''){?>
<span><i class="fa fa-car"></i> <?php  echo $ty['toarea'];?> sqm Total Area</span>

<?php  }?>

</div>
<div class="elite-icon">
<a href="#"><?php  

$iname=$ty['username'];

$queryus="select * from tb_users where username='$iname'";
$resultus=mysqli_query($con,$queryus);
$us=mysqli_fetch_array($resultus);
echo $us['compn'];

?></a>
</div>
<div class="phone-icon">
<i class="fa fa-phone"></i> <?php  

$iname=$ty['username'];

$queryus="select * from tb_users where username='$iname'";
$resultus=mysqli_query($con,$queryus);
$us=mysqli_fetch_array($resultus);
echo $us['phone'];

?>
</div>
</div>
</div>


<?php  ?>


<?php   }?>
<div class="all-pro-text" style="display:none;">
<a href="https://www.propertypro.ng/property-for-rent?page=1">View more properties</a>
</div>

<div class="pagination-area">
<nav aria-label="Page navigation ">
<ul class="pagination">
<li style="display:none;" class="page-item"> <a class="page-link" href="https://www.propertypro.ng/property-for-rent">⋘</a> </li>
<?php  
 $total_pages = ceil($total_records / $per_page_record);    
                       $pagLink = "";   
                       
                   


?>

<?php  
$urll=$_SERVER['REQUEST_URI'];
$uul="xixira.com";
$yu="&page=";
for ($i=1; $i<=$total_pages; $i++) {  
    
     if ($i == $page) {   

  $pagLink .='<li class="page-item"  aria-current="page"><span class="page-link page-active">'.$i.'</span></li>';
  
     }
      else  { 
            $pagLink .='<li    class="page-item"><a class="page-link" href="'.
            $urll.$yu.$i.
            '" >'.$i.'</a></li>'; 
        }
     
};
     echo $pagLink;   
?>
<li style="display:none;" class="page-item"> <span class="page-link">...</span> </li>
<li style="display:none;" class="page-item"> <a class="page-link" alt="view next property page" href="https://www.propertypro.ng/property-for-rent?page=1"> <span aria-hidden="true">&raquo;</span> <span class="sr-only">Next</span> </a> </li>
<li style="display:none;" class="page-item"> <a class="page-link" href="https://www.propertypro.ng/property-for-rent?page=1110" tabindex="-1">⋙</a> </li>
</ul>
</nav>
</div>

<div class="neighbourhood-area hide" id="n-area">
<div class="neighbourhood-top">
<div class="neighbourhood-top-left">
<img id="n-img" src="#" />
<div class="abuja-text">
<h3 id="n-title"></h3>

</div>
</div>
<div class="neighbourhood-top-right">

<div class="neighbourhood-top-right-left" id="n-desc">

</div>
</div>
</div>
<div class="neighbourhood-bottom">
<p>
 </p>
<a class="explore" href="#" id="n-link">Explore Neighbourhood</a>
</div>
</div>

<?php  
if($ppcat=='sale'){
?>



<div class="single-servicepage margin-b-30">
<div class="graph-area">

<h2>Insight for Property For sale</h2>
<div class="graph-left">
<div class="single-graph">
<h5>MEDIAN PRICE</h5>
<h3> N2.1M </h3>
</div>
<div class="single-graph">
<h5>ENTRY PRICE</h5>
<h3> N20K </h3>
</div>
<div class="single-graph">
<h5>HIGH PRICE</h5>
<h3> N50M </h3>
</div>
</div>
<div class="graph-right">
<div id="morris-one-line-chart"></div>
</div>
</div>
<br />
<div class="question-box">
<div>
<h2 class="question-text"> What is the average price of Property For sale? </h2>
<div>
<div class="question-ans">
The average price of Property For sale is
<strong>₦2,154,017</strong>.
</div>
</div>
</div>
<div>
<h2 class="question-text"> What is the price of the most expensive Property For sale? </h2>
<div>
<div class="question-ans">
The price of the most expensive Property For sale is
<strong>₦50,000,000</strong>.
</div>
</div>
</div>
<div>
<h2 class="question-text"> What is the price of the cheapest Property For sale? </h2> 
<div>
<div class="question-ans">
The price of the cheapest Property For sale is
<strong>₦20,000</strong>.
</div>
</div>
</div>
<div>
<h2 class="question-text"> How many Property For sale are available ? </h2>
<div>
<div class="question-ans">
There are
<strong>22212</strong> available Property For sale.
</div>
</div>
</div>
</div>
</div>
<div class="neighbourhood-guid margin-b-30">
<div class="nei-guid-top">
<div class="guide-img">
<img src="https://www.propertypro.ng/assets/assets/img/property/3a6f075cc835a6836aa72cf132a3d28a-explore-img.png" alt="img" />
</div>
<div class="guide-text guid-top-text">
<h2>PROPERTIES FOR sale IN NIGERIA SATISFIES ALL DESIRES</h2>
</div>
</div>
<div class="nei-guid-text">
<p> </p>
<p>The Federal Republic of Nigeria and the Giant of Africa is located in the Western part of the African Continent and was named by a British journalist named Flora Shaw who had coined the name 'Nigeria’ from 'River Niger'. The country Nigeria shares borders with other countries such as Niger to the north, the Gulf of Guinea to the south, Cameroon to the east and Benin Republic to the west. There are 36 states in Nigeria as well as the Federal Capital Territory, Abuja the state capital of Nigeria. Nigeria is a conglomerate of diverse people with 774 Local Government Areas and over 300 diffesale cultures with about 521 languages spoken. The official language spoken is English following after her colonisation by the British Colonial Masters while the three major local languages in Nigeria are Igbo, Yoruba and Hausa.</p>
<p>&nbsp;</p>
<p>The rich cultural heritage of Nigeria evident in the various festivals it hosts which includes the Eyo Festival, Calabar Carnival, Lagos Carnival, Osun Festival, Sango Festival, Ojude Oba festival, Ofala Festival, Argungu Fishing Festival and New Yam Festival and many others will appeal to any tourist seeking for an African adventure.</p>
<p>&nbsp;</p>
<p>Often referred to as the 'giant of Africa', Nigeria is the most populous country in Africa.The country Nigeria is endowed with natural resources such as; Gold, Lead/Zinc, Limestone, crude oil, Salt, Bentonite, Gypsum, Kaolin, Magnesite and Limestone among others. The leading role Nigeria has in commercial activities in Africa has made her a prime place for investors who have been able to acknowledge the jewels embedded in this beautiful country. The presence of investors has helped Nigeria take giant strides in economic activities within Africa.</p>
<p>&nbsp;</p>
<p>Popular states in Nigeria include; Lagos, Rivers, Kano and the Federal Capital Territory which are being referred to as mega cities in Nigeria except for Kano.</p>
<p><br /></p>
<p>Lagos, located in the western geopolitical zone of Nigeria, is a major hub of commercial activities in Nigeria as many establishments have their headquarters here. The city of Lagos promises an improvement in the standard of living of her residents due to the various employment opportunities this state possess resulting from the presence of these companies. The capital of Lagos is Ikeja. Other states in the western zone of Nigeria include; Ogun, Osun, <a href="https://www.propertypro.ng/property-for-sale/oyo" rel="nofollow">Oyo</a>, Ekiti, Ondo and Kwara state.</p>
<p>&nbsp;</p>
<p><a href="https://www.propertypro.ng/property-for-sale/rivers" rel="nofollow">Rivers state</a> where oil was first discovered in Nigeria transformed the country's economy<a href="https://covirade.com/" rel="nofollow">.</a> The discovery of oil in Nigeria led to the diversion from agriculture and fully into the oil industry. This breakthrough attracted quite a number of investors to Nigeria and bringing the country into a limelight as part of the oil producing countries in the world, implying 'money' and topmost recognition<a href="https://farmive.com/" rel="nofollow">.</a> Rivers State with Port Harcourt as its capital is bordered by other states in Nigeria such as Imo, Abia and Anambra state to the North, Bayelsa and Delta states to the west, Akwa Ibom state to the east and the Atlantic Ocean to the South.</p>
<p><br /></p>
<p>The Abuja mega city is located in the Federal Capital Territory (FCT) where the seat of government in Nigeria is. It is located in the middle belt region of Nigeria bordered by Kaduna state to the north, Niger state to the west, Kogi state to the South, and Nasarawa state the East<a href="https://travelreap.com/" rel="nofollow">.</a> Abuja is well planned and it hosts the second busiest airport in Nigeria. Central Business District such as Maitama, Asokoro, Garki, Gwarimpa, Wuse and Aso Rock is home to federal government parastatals and also many multinational establishments.</p>
<p><br /></p>
<p>Properties for sale in Nigeria are available in every state. Properties ranging from apartment to commercial spaces are available to satisfy your longings to live or work in any state in Nigeria<a href="https://reviewsrush.com/" rel="nofollow">.</a> The mega cities in Nigeria pose to be the most expensive places to live in Nigeria. Property for sale in places like Lagos, <a href="https://www.propertypro.ng/property-for-sale/abuja" rel="nofollow">Abuja</a> and Port Harcourt can be quite expensive compared to other states in Nigeria but it is a surety that you have made the best decision as these places present an urban approach to living as well as huge business and commercial activities.</p>
<p>&nbsp;</p>
<p>Apartments for sale in Nigeria include; boys quarters, self-contain, Mini flat, bungalow, duplex, mansion, townhouses, terrace, semi-detached and detached apartments. Apartments such as townhouses, duplexes, mansion and terrace are in great numbers in the mega cities of Nigeria. </p>
<p>&nbsp;</p>
<p>Commercial properties such as shops, halls, showroom, office spaces and hotels for sale in Nigeria are available in all the states of the federation and also in Nigeria's Central Business District with large markets such as Onitsha Market in Anambra state, Lagos, Abuja, Kano and Port Harcourt<a href="https://collegereap.com/" rel="nofollow">.</a> Real Estate Business in Nigeria is a rewarding one as there has been the advent of Real Estate companies buying hectares of land for the purpose of creating gated residential estates. Virgin lands are in abundance in every state in Nigeria with only a few available in megacities with suburbs. Nigeria is one of the choice places to sale a property in Africa because the rate of properties for real estate business is Nigeria is on the profitable side. </p>
<p></p>
<br />The price of saleing a property in Nigeria is dependent on many factors among which location, structure and property feature are key
<a href="https://clickate.com/" rel="nofollow">.</a> The urban and megacities like
<a href="https://www.propertypro.ng/property-for-sale/lagos/" rel="nofollow">Lagos</a>,
<a href="https://www.propertypro.ng/property-for-sale/abuja/" rel="nofollow">Abuja</a>, PortHarcourt,
<a href="https://www.propertypro.ng/property-for-sale/oyo/ibadan" rel="nofollow">Ibadan</a>, Enugu commands saleal prices in millions of naira and at times foreign currencies
<a href="https://collegive.com/" rel="nofollow">.</a> In states such as
<a href="https://www.propertypro.ng/property-for-sale/ogun/" rel="nofollow">Ogun</a>, Kwara,
<a href="https://www.propertypro.ng/property-for-sale/anambra" rel="nofollow">Anambra</a>, Niger,
<a href="https://www.propertypro.ng/property-for-sale/adamawa" rel="nofollow">Adamawa</a> among others, lower option houses for sale are available which range from ?60,000 to ?500,000.
<p></p>
<p></p>
</div>

</div>


<?php  } else if($ppcat=='rent'){?>

<div class="single-servicepage margin-b-30">
<div class="graph-area">

<h2>Insight for Property For Rent</h2>
<div class="graph-left">
<div class="single-graph">
<h5>MEDIAN PRICE</h5>
<h3> N2.1M </h3>
</div>
<div class="single-graph">
<h5>ENTRY PRICE</h5>
<h3> N20K </h3>
</div>
<div class="single-graph">
<h5>HIGH PRICE</h5>
<h3> N50M </h3>
</div>
</div>
<div class="graph-right">
<div id="morris-one-line-chart"></div>
</div>
</div>
<br />
<div class="question-box">
<div>
<h2 class="question-text"> What is the average price of Property For Rent? </h2>
<div>
<div class="question-ans">
The average price of Property For Rent is
<strong>₦2,154,017</strong>.
</div>
</div>
</div>
<div>
<h2 class="question-text"> What is the price of the most expensive Property For Rent? </h2>
<div>
<div class="question-ans">
The price of the most expensive Property For Rent is
<strong>₦50,000,000</strong>.
</div>
</div>
</div>
<div>
<h2 class="question-text"> What is the price of the cheapest Property For Rent? </h2> 
<div>
<div class="question-ans">
The price of the cheapest Property For Rent is
<strong>₦20,000</strong>.
</div>
</div>
</div>
<div>
<h2 class="question-text"> How many Property For Rent are available ? </h2>
<div>
<div class="question-ans">
There are
<strong>22212</strong> available Property For Rent.
</div>
</div>
</div>
</div>
</div>
<div class="neighbourhood-guid margin-b-30">
<div class="nei-guid-top">
<div class="guide-img">
<img src="https://www.propertypro.ng/assets/assets/img/property/3a6f075cc835a6836aa72cf132a3d28a-explore-img.png" alt="img" />
</div>
<div class="guide-text guid-top-text">
<h2>PROPERTIES FOR RENT IN NIGERIA SATISFIES ALL DESIRES</h2>
</div>
</div>
<div class="nei-guid-text">
<p> </p>
<p>The Federal Republic of Nigeria and the Giant of Africa is located in the Western part of the African Continent and was named by a British journalist named Flora Shaw who had coined the name 'Nigeria’ from 'River Niger'. The country Nigeria shares borders with other countries such as Niger to the north, the Gulf of Guinea to the south, Cameroon to the east and Benin Republic to the west. There are 36 states in Nigeria as well as the Federal Capital Territory, Abuja the state capital of Nigeria. Nigeria is a conglomerate of diverse people with 774 Local Government Areas and over 300 different cultures with about 521 languages spoken. The official language spoken is English following after her colonisation by the British Colonial Masters while the three major local languages in Nigeria are Igbo, Yoruba and Hausa.</p>
<p>&nbsp;</p>
<p>The rich cultural heritage of Nigeria evident in the various festivals it hosts which includes the Eyo Festival, Calabar Carnival, Lagos Carnival, Osun Festival, Sango Festival, Ojude Oba festival, Ofala Festival, Argungu Fishing Festival and New Yam Festival and many others will appeal to any tourist seeking for an African adventure.</p>
<p>&nbsp;</p>
<p>Often referred to as the 'giant of Africa', Nigeria is the most populous country in Africa.The country Nigeria is endowed with natural resources such as; Gold, Lead/Zinc, Limestone, crude oil, Salt, Bentonite, Gypsum, Kaolin, Magnesite and Limestone among others. The leading role Nigeria has in commercial activities in Africa has made her a prime place for investors who have been able to acknowledge the jewels embedded in this beautiful country. The presence of investors has helped Nigeria take giant strides in economic activities within Africa.</p>
<p>&nbsp;</p>
<p>Popular states in Nigeria include; Lagos, Rivers, Kano and the Federal Capital Territory which are being referred to as mega cities in Nigeria except for Kano.</p>
<p><br /></p>
<p>Lagos, located in the western geopolitical zone of Nigeria, is a major hub of commercial activities in Nigeria as many establishments have their headquarters here. The city of Lagos promises an improvement in the standard of living of her residents due to the various employment opportunities this state possess resulting from the presence of these companies. The capital of Lagos is Ikeja. Other states in the western zone of Nigeria include; Ogun, Osun, <a href="https://www.propertypro.ng/property-for-rent/oyo" rel="nofollow">Oyo</a>, Ekiti, Ondo and Kwara state.</p>
<p>&nbsp;</p>
<p><a href="https://www.propertypro.ng/property-for-rent/rivers" rel="nofollow">Rivers state</a> where oil was first discovered in Nigeria transformed the country's economy<a href="https://covirade.com/" rel="nofollow">.</a> The discovery of oil in Nigeria led to the diversion from agriculture and fully into the oil industry. This breakthrough attracted quite a number of investors to Nigeria and bringing the country into a limelight as part of the oil producing countries in the world, implying 'money' and topmost recognition<a href="https://farmive.com/" rel="nofollow">.</a> Rivers State with Port Harcourt as its capital is bordered by other states in Nigeria such as Imo, Abia and Anambra state to the North, Bayelsa and Delta states to the west, Akwa Ibom state to the east and the Atlantic Ocean to the South.</p>
<p><br /></p>
<p>The Abuja mega city is located in the Federal Capital Territory (FCT) where the seat of government in Nigeria is. It is located in the middle belt region of Nigeria bordered by Kaduna state to the north, Niger state to the west, Kogi state to the South, and Nasarawa state the East<a href="https://travelreap.com/" rel="nofollow">.</a> Abuja is well planned and it hosts the second busiest airport in Nigeria. Central Business District such as Maitama, Asokoro, Garki, Gwarimpa, Wuse and Aso Rock is home to federal government parastatals and also many multinational establishments.</p>
<p><br /></p>
<p>Properties for rent in Nigeria are available in every state. Properties ranging from apartment to commercial spaces are available to satisfy your longings to live or work in any state in Nigeria<a href="https://reviewsrush.com/" rel="nofollow">.</a> The mega cities in Nigeria pose to be the most expensive places to live in Nigeria. Property for rent in places like Lagos, <a href="https://www.propertypro.ng/property-for-rent/abuja" rel="nofollow">Abuja</a> and Port Harcourt can be quite expensive compared to other states in Nigeria but it is a surety that you have made the best decision as these places present an urban approach to living as well as huge business and commercial activities.</p>
<p>&nbsp;</p>
<p>Apartments for rent in Nigeria include; boys quarters, self-contain, Mini flat, bungalow, duplex, mansion, townhouses, terrace, semi-detached and detached apartments. Apartments such as townhouses, duplexes, mansion and terrace are in great numbers in the mega cities of Nigeria. </p>
<p>&nbsp;</p>
<p>Commercial properties such as shops, halls, showroom, office spaces and hotels for rent in Nigeria are available in all the states of the federation and also in Nigeria's Central Business District with large markets such as Onitsha Market in Anambra state, Lagos, Abuja, Kano and Port Harcourt<a href="https://collegereap.com/" rel="nofollow">.</a> Real Estate Business in Nigeria is a rewarding one as there has been the advent of Real Estate companies buying hectares of land for the purpose of creating gated residential estates. Virgin lands are in abundance in every state in Nigeria with only a few available in megacities with suburbs. Nigeria is one of the choice places to rent a property in Africa because the rate of properties for real estate business is Nigeria is on the profitable side. </p>
<p></p>
<br />The price of renting a property in Nigeria is dependent on many factors among which location, structure and property feature are key
<a href="https://clickate.com/" rel="nofollow">.</a> The urban and megacities like
<a href="https://www.propertypro.ng/property-for-rent/lagos/" rel="nofollow">Lagos</a>,
<a href="https://www.propertypro.ng/property-for-rent/abuja/" rel="nofollow">Abuja</a>, PortHarcourt,
<a href="https://www.propertypro.ng/property-for-rent/oyo/ibadan" rel="nofollow">Ibadan</a>, Enugu commands rental prices in millions of naira and at times foreign currencies
<a href="https://collegive.com/" rel="nofollow">.</a> In states such as
<a href="https://www.propertypro.ng/property-for-rent/ogun/" rel="nofollow">Ogun</a>, Kwara,
<a href="https://www.propertypro.ng/property-for-rent/anambra" rel="nofollow">Anambra</a>, Niger,
<a href="https://www.propertypro.ng/property-for-rent/adamawa" rel="nofollow">Adamawa</a> among others, lower option houses for rent are available which range from ?60,000 to ?500,000.
<p></p>
<p></p>
</div>

</div>



<?php  } else if($ppcat=='short let'){?>

<div class="single-servicepage margin-b-30">
<div class="graph-area">

<h2>Insight for Property For short let</h2>
<div class="graph-left">
<div class="single-graph">
<h5>MEDIAN PRICE</h5>
<h3> N2.1M </h3>
</div>
<div class="single-graph">
<h5>ENTRY PRICE</h5>
<h3> N20K </h3>
</div>
<div class="single-graph">
<h5>HIGH PRICE</h5>
<h3> N50M </h3>
</div>
</div>
<div class="graph-right">
<div id="morris-one-line-chart"></div>
</div>
</div>
<br />
<div class="question-box">
<div>
<h2 class="question-text"> What is the average price of Property For short let? </h2>
<div>
<div class="question-ans">
The average price of Property For short let is
<strong>₦2,154,017</strong>.
</div>
</div>
</div>
<div>
<h2 class="question-text"> What is the price of the most expensive Property For short let? </h2>
<div>
<div class="question-ans">
The price of the most expensive Property For short let is
<strong>₦50,000,000</strong>.
</div>
</div>
</div>
<div>
<h2 class="question-text"> What is the price of the cheapest Property For short let? </h2> 
<div>
<div class="question-ans">
The price of the cheapest Property For short let is
<strong>₦20,000</strong>.
</div>
</div>
</div>
<div>
<h2 class="question-text"> How many Property For short let are available ? </h2>
<div>
<div class="question-ans">
There are
<strong>22212</strong> available Property For short let.
</div>
</div>
</div>
</div>
</div>
<div class="neighbourhood-guid margin-b-30">
<div class="nei-guid-top">
<div class="guide-img">
<img src="https://www.propertypro.ng/assets/assets/img/property/3a6f075cc835a6836aa72cf132a3d28a-explore-img.png" alt="img" />
</div>
<div class="guide-text guid-top-text">
<h2>PROPERTIES FOR short let IN NIGERIA SATISFIES ALL DESIRES</h2>
</div>
</div>
<div class="nei-guid-text">
<p> </p>
<p>The Federal Republic of Nigeria and the Giant of Africa is located in the Western part of the African Continent and was named by a British journalist named Flora Shaw who had coined the name 'Nigeria’ from 'River Niger'. The country Nigeria shares borders with other countries such as Niger to the north, the Gulf of Guinea to the south, Cameroon to the east and Benin Republic to the west. There are 36 states in Nigeria as well as the Federal Capital Territory, Abuja the state capital of Nigeria. Nigeria is a conglomerate of diverse people with 774 Local Government Areas and over 300 diffeshort let cultures with about 521 languages spoken. The official language spoken is English following after her colonisation by the British Colonial Masters while the three major local languages in Nigeria are Igbo, Yoruba and Hausa.</p>
<p>&nbsp;</p>
<p>The rich cultural heritage of Nigeria evident in the various festivals it hosts which includes the Eyo Festival, Calabar Carnival, Lagos Carnival, Osun Festival, Sango Festival, Ojude Oba festival, Ofala Festival, Argungu Fishing Festival and New Yam Festival and many others will appeal to any tourist seeking for an African adventure.</p>
<p>&nbsp;</p>
<p>Often referred to as the 'giant of Africa', Nigeria is the most populous country in Africa.The country Nigeria is endowed with natural resources such as; Gold, Lead/Zinc, Limestone, crude oil, Salt, Bentonite, Gypsum, Kaolin, Magnesite and Limestone among others. The leading role Nigeria has in commercial activities in Africa has made her a prime place for investors who have been able to acknowledge the jewels embedded in this beautiful country. The presence of investors has helped Nigeria take giant strides in economic activities within Africa.</p>
<p>&nbsp;</p>
<p>Popular states in Nigeria include; Lagos, Rivers, Kano and the Federal Capital Territory which are being referred to as mega cities in Nigeria except for Kano.</p>
<p><br /></p>
<p>Lagos, located in the western geopolitical zone of Nigeria, is a major hub of commercial activities in Nigeria as many establishments have their headquarters here. The city of Lagos promises an improvement in the standard of living of her residents due to the various employment opportunities this state possess resulting from the presence of these companies. The capital of Lagos is Ikeja. Other states in the western zone of Nigeria include; Ogun, Osun, <a href="https://www.propertypro.ng/property-for-short let/oyo" rel="nofollow">Oyo</a>, Ekiti, Ondo and Kwara state.</p>
<p>&nbsp;</p>
<p><a href="https://www.propertypro.ng/property-for-short let/rivers" rel="nofollow">Rivers state</a> where oil was first discovered in Nigeria transformed the country's economy<a href="https://covirade.com/" rel="nofollow">.</a> The discovery of oil in Nigeria led to the diversion from agriculture and fully into the oil industry. This breakthrough attracted quite a number of investors to Nigeria and bringing the country into a limelight as part of the oil producing countries in the world, implying 'money' and topmost recognition<a href="https://farmive.com/" rel="nofollow">.</a> Rivers State with Port Harcourt as its capital is bordered by other states in Nigeria such as Imo, Abia and Anambra state to the North, Bayelsa and Delta states to the west, Akwa Ibom state to the east and the Atlantic Ocean to the South.</p>
<p><br /></p>
<p>The Abuja mega city is located in the Federal Capital Territory (FCT) where the seat of government in Nigeria is. It is located in the middle belt region of Nigeria bordered by Kaduna state to the north, Niger state to the west, Kogi state to the South, and Nasarawa state the East<a href="https://travelreap.com/" rel="nofollow">.</a> Abuja is well planned and it hosts the second busiest airport in Nigeria. Central Business District such as Maitama, Asokoro, Garki, Gwarimpa, Wuse and Aso Rock is home to federal government parastatals and also many multinational establishments.</p>
<p><br /></p>
<p>Properties for short let in Nigeria are available in every state. Properties ranging from apartment to commercial spaces are available to satisfy your longings to live or work in any state in Nigeria<a href="https://reviewsrush.com/" rel="nofollow">.</a> The mega cities in Nigeria pose to be the most expensive places to live in Nigeria. Property for short let in places like Lagos, <a href="https://www.propertypro.ng/property-for-short let/abuja" rel="nofollow">Abuja</a> and Port Harcourt can be quite expensive compared to other states in Nigeria but it is a surety that you have made the best decision as these places present an urban approach to living as well as huge business and commercial activities.</p>
<p>&nbsp;</p>
<p>Apartments for short let in Nigeria include; boys quarters, self-contain, Mini flat, bungalow, duplex, mansion, townhouses, terrace, semi-detached and detached apartments. Apartments such as townhouses, duplexes, mansion and terrace are in great numbers in the mega cities of Nigeria. </p>
<p>&nbsp;</p>
<p>Commercial properties such as shops, halls, showroom, office spaces and hotels for short let in Nigeria are available in all the states of the federation and also in Nigeria's Central Business District with large markets such as Onitsha Market in Anambra state, Lagos, Abuja, Kano and Port Harcourt<a href="https://collegereap.com/" rel="nofollow">.</a> Real Estate Business in Nigeria is a rewarding one as there has been the advent of Real Estate companies buying hectares of land for the purpose of creating gated residential estates. Virgin lands are in abundance in every state in Nigeria with only a few available in megacities with suburbs. Nigeria is one of the choice places to short let a property in Africa because the rate of properties for real estate business is Nigeria is on the profitable side. </p>
<p></p>
<br />The price of short leting a property in Nigeria is dependent on many factors among which location, structure and property feature are key
<a href="https://clickate.com/" rel="nofollow">.</a> The urban and megacities like
<a href="https://www.propertypro.ng/property-for-short let/lagos/" rel="nofollow">Lagos</a>,
<a href="https://www.propertypro.ng/property-for-short let/abuja/" rel="nofollow">Abuja</a>, PortHarcourt,
<a href="https://www.propertypro.ng/property-for-short let/oyo/ibadan" rel="nofollow">Ibadan</a>, Enugu commands short letal prices in millions of naira and at times foreign currencies
<a href="https://collegive.com/" rel="nofollow">.</a> In states such as
<a href="https://www.propertypro.ng/property-for-short let/ogun/" rel="nofollow">Ogun</a>, Kwara,
<a href="https://www.propertypro.ng/property-for-short let/anambra" rel="nofollow">Anambra</a>, Niger,
<a href="https://www.propertypro.ng/property-for-short let/adamawa" rel="nofollow">Adamawa</a> among others, lower option houses for short let are available which range from ?60,000 to ?500,000.
<p></p>
<p></p>
</div>

</div>

<?php  }?>

</div>
</div>
</div>
<div class="col-xl-4">
<div class="property-right-sidebar">

<div class="single-get-area">
<div class="get-area">
<h2><img src="https://www.propertypro.ng/assets/assets/img/resultpage/271d316c96840f276250729a9688f27a-property-icon.svg" alt="icon" />Get Latest Properties</h2>
<h6>Receive alerts when we have new <br />properties available for Property For Rent</h6>
</div>
<div class="sub-area">
<form action="https://www.propertypro.ng/notify" method="POST">
<div class="form-group">
<input type="text" name="name" required="required" class="form-control" placeholder="Enter your Name" value="" />
<br />
<input type="email" name="email" required="required" class="form-control" placeholder="Enter your Email Address" value="" />
<input type="hidden" name="mode" value="rent" />
<input type="hidden" name="search" value="" />
<input type="hidden" name="state" value="" />
<input type="hidden" name="axis" value="" />
<input type="hidden" name="area" value="" />
<input type="hidden" name="type" value="" />
<input type="hidden" name="beds" value="" />
<input type="hidden" name="min_price" value="" />
<input type="hidden" name="max_price" value="" />
</div>
<button class="alert2-btn" type="button">Subscribe Now</button>
</form>
</div>
</div>

<div class="single-get-area">
<div class="get-area">
<h2><img src="https://www.propertypro.ng/assets/assets/img/resultpage/bc33fd6789f34d27064f55e4c4292699-search.svg" alt="icon" />Can’t Find what You <br /> Are Looking For?</h2>
</div>
<div class="post-btn">
<a href="#">Post a Request</a>
</div>
</div>

<div class="single-get-area">
<div class="property-table">
<h3>Currently available <?php  

if(isset($_GET['king'])){
    if($bedrooms!='All Types'){
        if($bedrooms>=2){
            echo $bedrooms." bedrooms ";
        }
        else{
            echo $bedrooms." bedroom "; 
        }
    }
    else if($bedrooms=='6'){
        echo"6+ Bedrooms ";
    }
    
    
    if($type!="All Types"){
        echo $type;
    }
    else{
        echo"Property";
    }
echo" For ".$ppcat;
if($ps!='0'){
    echo" in ".$ps;
}




}else{

echo"Property in ". $_GET['area'];

}

?></h3>
<div class="availability-stats">
     <?php  
   
     
     
   ?>
   <table id="flats" class="table">
<tbody >
<tr><th>Property Type</th><th >Count</th></tr>
<?php  
if(isset($_GET['king'])){
       if($ps=="0"){
    $queryjull="select ptype,count(id) as dean from property where area".$pq."'$ps' and status='0' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype".$tq."'$type' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and status='0' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." and ptype".$tq."'$type' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice group by ptype";

       }
       else{
           $queryjull="select ptype,count(id) as dean from property where area LIKE '%".$ps."%' and status='0' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype".$tq."'$type' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and status='0' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." and ptype".$tq."'$type' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice group by ptype";

          
           
       }
           
       }else{
    
   $queryjull="select ptype,count(id) as dean from property where area='$area' and status='0' OR state='$area' and status='0'"; 
}
$resultjull=mysqli_query($con,$queryjull);
while($jull=mysqli_fetch_array($resultjull)){

?>
<tr><td><?php  echo $jull['ptype'];?></td>
<td><?php  echo $jull['dean'];?></td>
<?php  }?>
</tr>
</tbody>

</table>

<table id="flats" class="table">
  
<tbody>
<tr><th>Type</th><th class="text-center">1 bed</th><th class="text-center">2 bed</th><th class="text-center">3 bed</th><th class="text-center">4 bed</th></tr>
 <?php 
 if(isset($_GET['king'])){
        if($ps=="0"){
    $queryjop="select ptype,bedroom from property where area".$pq."'$ps' and status='0' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype".$tq."'$type' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and status='0' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." and ptype".$tq."'$type' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice group by ptype";

        }
        else{
             $queryjop="select ptype,bedroom from property where area LIKE '%".$ps."%' and status='0' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype".$tq."'$type' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and status='0' and furnishing".$fq."'$furnished' and bedroom".$bq.$bedrooms." and ptype".$tq."'$type' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice group by ptype";

        
            
        }
            
        }else{
    
        $queryjop="select ptype,bedroom from property where area='$area' and status='0' OR state='$area' and status='0' group by ptype";
    
}
$resultjop=mysqli_query($con,$queryjop);
while($jop=mysqli_fetch_array($resultjop)){
    $bety=$jop['bedroom'];
    if($bety>=1){
    ?>
<tr>
<td><?php  echo $jop['ptype'];?></td>
<td class="text-center"><?php  

$pity=$jop['ptype'];
 if(isset($_GET['king'])){
       if($ps=="0"){
$queryit="select COUNT(id) AS orig from property where area".$pq."'$ps' and status='0' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype='$pity' and furnishing".$fq."'$furnished' and bedroom='1' OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and status='0' and furnishing".$fq."'$furnished' and bedroom='1' and ptype='$pity' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice group by ptype";

       }
       else{
         $queryit="select COUNT(id) AS orig from property where area LIKE '%".$ps."%' and status='0' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype='$pity' and furnishing".$fq."'$furnished' and bedroom='1' OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and status='0' and furnishing".$fq."'$furnished' and bedroom='1' and ptype='$pity' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice group by ptype";

       
           
       }
           
       }else{
    
   $queryit="select COUNT(id) AS orig from property where area='$area' and status='0' and bedroom='1' and ptype='$pity' OR state='$area' and status='0'  and bedroom='1' and ptype='$pity' group by ptype";
   
    
}

$resultit=mysqli_query($con,$queryit);
if(mysqli_num_rows($resultit)>=1){
$it=mysqli_fetch_array($resultit);
echo $it['orig'];
}else{
    echo"-";
}
?></td>
<td class="text-center"><?php  

$pity=$jop['ptype'];
 if(isset($_GET['king'])){
       if($ps=="0"){
$queryit="select COUNT(id) AS orig from property where area".$pq."'$ps' and status='0' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype='$pity' and furnishing".$fq."'$furnished' and bedroom='2' OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and status='0' and furnishing".$fq."'$furnished' and bedroom='2' and ptype='$pity' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice group by ptype";
}
else{
  $queryit="select COUNT(id) AS orig from property where area LIKE '%".$ps."%' and status='0' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype='$pity' and furnishing".$fq."'$furnished' and bedroom='2' OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and status='0' and furnishing".$fq."'$furnished' and bedroom='2' and ptype='$pity' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice group by ptype";
  
    
    
}
           
           
       }else{
    
      
   $queryit="select COUNT(id) AS orig from property where area='$area' and status='0' and bedroom='2' and ptype='$pity' OR state='$area' and status='0'  and bedroom='2' and ptype='$pity' group by ptype";
     
}

$resultit=mysqli_query($con,$queryit);
if(mysqli_num_rows($resultit)>=1){
$it=mysqli_fetch_array($resultit);
echo $it['orig'];
}else{
    echo"-";
}
?></td>
<td class="text-center"><?php  

$pity=$jop['ptype'];
 if(isset($_GET['king'])){
       if($ps=="0"){
$queryit="select COUNT(id) AS orig from property where area".$pq."'$ps' and status='0' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype='$pity' and furnishing".$fq."'$furnished' and bedroom='3' OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and status='0' and furnishing".$fq."'$furnished' and bedroom='3' and ptype='$pity' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice group by ptype";

       }
       else{
           
          $queryit="select COUNT(id) AS orig from property where area LIKE '%".$ps."%' and status='0' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype='$pity' and furnishing".$fq."'$furnished' and bedroom='3' OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and status='0' and furnishing".$fq."'$furnished' and bedroom='3' and ptype='$pity' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice group by ptype";

       
       }
           
           
       }else{
    
     $queryit="select COUNT(id) AS orig from property where area='$area' and status='0' and bedroom='3' and ptype='$pity' OR state='$area' and status='0'  and bedroom='3' and ptype='$pity' group by ptype";
      
}
$resultit=mysqli_query($con,$queryit);
if(mysqli_num_rows($resultit)>=1){
$it=mysqli_fetch_array($resultit);
echo $it['orig'];
}else{
    echo"-";
}
?></td>
<td class="text-center"><?php  

$pity=$jop['ptype'];
if(isset($_GET['king'])){
     if($ps=="0"){
$queryit="select COUNT(id) AS orig from property where area".$pq."'$ps' and status='0' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype='$pity' and furnishing".$fq."'$furnished' and bedroom='4' OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and status='0' and furnishing".$fq."'$furnished' and bedroom='4' and ptype='$pity' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice group by ptype";
}
else{
    
 $queryit="select COUNT(id) AS orig from property where area  LIKE '%".$ps."%' and status='0' and pcat='$ppcat' and shared".$shq."'$shared' and serviced".$sq."'$serviced' and pamt>=$minprice and pamt<=$maxprice and ptype='$pity' and furnishing".$fq."'$furnished' and bedroom='4' OR state".$pq."'$ps' and serviced".$sq."'$serviced' and shared".$shq."'$shared' and status='0' and furnishing".$fq."'$furnished' and bedroom='4' and ptype='$pity' and pcat='$ppcat' and pamt>=$minprice and pamt<=$maxprice group by ptype";
   
    
}
         
         
     }
else{
    
    $queryit="select COUNT(id) AS orig from property where area='$area' and status='0' and bedroom='4' and ptype='$pity' OR state='$area' and status='0'  and bedroom='4' and ptype='$pity' group by ptype";
        
    
}

$resultit=mysqli_query($con,$queryit);
if(mysqli_num_rows($resultit)>=1){
$it=mysqli_fetch_array($resultit);
echo $it['orig'];
}else{
    echo"-";
}
?></td>
</tr>
<?php  }}?>
</tbody>

</table>


<?php  ?> </div>
</div>
</div>

<div class="single-get-area" style="display:none;">
<div class="accordion" id="accordion">
<div class="exploring-search">
<h6><strong>States</strong></h6>
<a href="https://www.propertypro.ng/property-for-rent/in/lagos">Lagos</a>
<a href="https://www.propertypro.ng/property-for-rent/in/abuja">Abuja</a>
<a href="https://www.propertypro.ng/property-for-rent/in/oyo">Oyo</a>
<a href="https://www.propertypro.ng/property-for-rent/in/ogun">Ogun</a>
<a href="https://www.propertypro.ng/property-for-rent/in/rivers">Rivers</a>
<a href="https://www.propertypro.ng/property-for-rent/in/enugu">Enugu</a>
<a href="https://www.propertypro.ng/property-for-rent/in/akwa-ibom">Akwa Ibom</a>
<a href="https://www.propertypro.ng/property-for-rent/in/delta">Delta</a>
<a href="https://www.propertypro.ng/property-for-rent/in/edo">Edo</a>
<a href="https://www.propertypro.ng/property-for-rent/in/kaduna">Kaduna</a>
<a href="https://www.propertypro.ng/property-for-rent/in/imo">Imo</a>
<a href="https://www.propertypro.ng/property-for-rent/in/osun">Osun</a>
<a href="https://www.propertypro.ng/property-for-rent/in/ondo">Ondo</a>
<a href="https://www.propertypro.ng/property-for-rent/in/plateau">Plateau</a>
<a href="https://www.propertypro.ng/property-for-rent/in/cross-river">Cross River</a>
<a href="https://www.propertypro.ng/property-for-rent/in/kwara">Kwara</a>
<a href="https://www.propertypro.ng/property-for-rent/in/abia">Abia</a>
<a href="https://www.propertypro.ng/property-for-rent/in/anambra">Anambra</a>
<a href="https://www.propertypro.ng/property-for-rent/in/katsina">Katsina</a>
<a href="https://www.propertypro.ng/property-for-rent/in/adamawa">Adamawa</a>
<a href="https://www.propertypro.ng/property-for-rent/in/bauchi">Bauchi</a>
<a href="https://www.propertypro.ng/property-for-rent/in/niger">Niger</a>
</div>
</div>
</div>


<div class="single-get-area" style="display:none;">
<div class="refine-form get-refine-form">
<form action="https://www.propertypro.ng/property-search.htm" method="get">
<div class="form-group">
<input name="search" value="" autocomplete="off" type="text" class="form-control searchInput" placeholder="Enter Location" />
</div>
<div class="justify-block">
<div class="s-service-select">
<select class="classic" name="category"> <option value="">Category</option> <option value="sale">For Sale</option> <option value="rent" selected="">For Rent</option> <option value="shortlet">For Shortlet</option> </select>
</div>
<div class="s-service-select">
<select class="classic" name="state"> <option value="">State</option> <option value="lagos">Lagos </option> <option value="abuja">Abuja </option> <option value="rivers">Rivers </option> <option value="ogun">Ogun </option> <option value="oyo">Oyo </option> <option value="anambra">Anambra </option> <option value="enugu">Enugu </option> <option value="akwa-ibom">Akwa Ibom </option> <option value="adamawa">Adamawa </option> <option value="abia">Abia </option> <option value="bauchi">Bauchi </option> <option value="bayelsa">Bayelsa </option> <option value="benue">Benue </option> <option value="borno">Borno </option> <option value="cross-river">Cross River </option> <option value="delta">Delta </option> <option value="ebonyi">Ebonyi </option> <option value="edo">Edo </option> <option value="ekiti">Ekiti </option> <option value="gombe">Gombe </option> <option value="imo">Imo </option> <option value="jigawa">Jigawa </option> <option value="kaduna">Kaduna </option> <option value="kano">Kano </option> <option value="katsina">Katsina </option> <option value="kebbi">Kebbi </option> <option value="kogi">Kogi </option> <option value="kwara">Kwara </option> <option value="nassarawa">Nassarawa </option> <option value="niger">Niger </option> <option value="ondo">Ondo </option> <option value="osun">Osun </option> <option value="plateau">Plateau </option> <option value="sokoto">Sokoto </option> <option value="taraba">Taraba </option> <option value="yobe">Yobe </option> <option value="zamfara">Zamfara </option> </select>
</div>
</div>
<div class="justify-block">
<div class="s-service-select">
<select class="classic" name="type"> <option value="">Type</option> <option value="commercial-property/shop">Shop</option> <option value="commercial-property/office-space">Office Spaces</option> <option value="flat-apartment">Flats and Apartments</option> <option value="land">Lands</option> <option value="house/semi-detached-bungalow">Semi Detached Bungalow</option> <option value="house/semi-detached-duplex">Semi Detached Duplex</option> <option value="co-working-space">Co-working Space</option> <option value="house/detached-bungalow">Detached Bungalow</option> <option value="commercial-property/warehouse">Warehouse</option> <option value="commercial-property/shop-in-a-mall">Shop In A Mall</option> <option value="flat-apartment/self-contain">Self Contain</option> <option value="flat-apartment/mini-flat">Mini Flats</option> <option value="house/detached-duplex">Detached Duplex</option> <option value="house">Houses</option> <option value="house/terraced-bungalow">Terraced Bungalow</option> <option value="commercial-property">Commercial Properties</option> <option value="house/terraced-duplex">Terraced Duplex</option> </select>
</div>
<div class="s-service-select">
<select class="classic" name="bedroom"> <option value="">Beds</option> <option value="1">1 </option> <option value="2">2 </option> <option value="3">3 </option> <option value="4">4 </option> <option value="5">5 </option> <option value="6">6 </option> <option value="7">7 </option> <option value="8">8 </option> <option value="9">9 </option> <option value="10">10 </option> </select>
</div>
</div>
<div class="justify-block">
<div class="s-service-select">
<select class="classic" name="min_price"> <option value="">Min Price</option> <option value="50000">50,000 </option> <option value="100000">100,000 </option> <option value="200000">200,000 </option> <option value="300000">300,000 </option> <option value="400000">400,000 </option> <option value="500000">500,000 </option> <option value="600000">600,000 </option> <option value="700000">700,000 </option> <option value="800000">800,000 </option> <option value="900000">900,000 </option> <option value="1000000">1million </option> <option value="2000000">2million </option> <option value="3000000">3million </option> <option value="5000000">5million </option> <option value="10000000">10million </option> <option value="20000000">20million </option> <option value="30000000">30million </option> <option value="40000000">40million </option> <option value="50000000">50million </option> <option value="100000000">100million </option> </select>

</div>
<div class="s-service-select">
<select class="classic" name="max_price"> <option value="">Max price</option> <option value="500000">500,000 </option> <option value="600000">600,000 </option> <option value="700000">700,000 </option> <option value="800000">800,000 </option> <option value="900000">900,000 </option> <option value="1000000">1million </option> <option value="2000000">2million </option> <option value="3000000">3million </option> <option value="5000000">5million </option> <option value="10000000">10million </option> <option value="20000000">20million </option> <option value="30000000">30million </option> <option value="40000000">40million </option> <option value="50000000">50million </option> <option value="100000000">100million </option> <option value="200000000">200million </option> <option value="300000000">300million </option> <option value="500000000">500million </option> <option value="1000000000">1billion </option> <option value="2000000000">2billion </option> <option value="5000000000">5billion </option> <option value="10000000000">10billion </option> </select>

</div>
</div>
<div class="justify-block ser-fur-btns">
<div class="s-service-select">
<div class="selection">
<input id="serviced" name="natures[0]" value="serviced" type="checkbox" />
<label for="serviced">Serviced</label>
</div>
</div>
<div class="s-service-select">
<div class="selection">
<input id="furnished" name="natures[1]" value="furnished" type="checkbox" />
<label for="furnished">Furnished</label>
</div>
</div>
</div>
<div class="refine-btn ">
<button type="submit">Search</button>
</div>
</form>
</div>
</div>
<br />
<br />
<div class="sticky-ad">
<br />
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
</div>
</div>
</div>
</div>
</div>
<div class="share-modal">
<div class="modal fade" id="alertNoResultModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">

<div class="modal-header">
<span>Get Latest Properties</span>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
</div>
<div class="modal-body row">
<form action="https://www.propertypro.ng/notify" method="POST" class="col-md-12">
<div class="form-group col-md-12">
<input type="text" name="name" required="required" class="form-control" placeholder="Enter your Name" value="" />
<br />
<input type="email" name="email" required="required" class="form-control" placeholder="Enter your Email Address" value="" />
<input type="hidden" name="mode" value="rent" />
<input type="hidden" name="search" value="" />
<input type="hidden" name="state" value="" />
<input type="hidden" name="axis" value="" />
<input type="hidden" name="area" value="" />
<input type="hidden" name="type" value="" />
<input type="hidden" name="beds" value="" />
<input type="hidden" name="min_price" value="" />
<input type="hidden" name="max_price" value="" />
</div>
<div class="col-md-12">
<button class="alert2-btn btn btn-info" type="button">Subscribe Now</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>


<div class="footer-menu-area">
<div class="container">
<div class="row">
<div class="col-12">
<div class="footer-menu">
<div class="footer-logo">
<a href="https://www.propertypro.ng/"><img src="https://www.propertypro.ng/assets/assets/img/common/236a9c5c2daffad50c1f1d0c23a5a371-footer-menu.png" alt="logo" /></a>
</div>
<div class="footer-menu">
<ul>
<li><a href="https://www.propertypro.ng/about">About Us</a></li>
<li><a href="https://www.propertypro.ng/contact">Contact Us</a></li>
<li><a href="https://www.propertypro.ng/cdn-cgi/l/email-protection#0f65606d7c4f7f7d607f6a7d7b767f7d60216168">Join Us</a></li>
<li><a href="https://www.propertypro.ng/agents">Agents</a></li>
</ul>
</div>
</div>
<div class="footer-menu flr">
<ul>
<li> <a href="https://www.propertypro.ng/advertize-with-us" class="advertise">ADVERTISE WITH US</a> </li>
</ul>
</div>
</div>
</div>
</div>
</div>

<div class="footer-area">
<div class="container">
<div class="row pdb-100">
<div class="col-md-2">
<div class="footer-text">
<h3>Popular States</h3>
<ul>
<li><a href="https://www.propertypro.ng/lagos">Lagos</a></li>
<li><a href="https://www.propertypro.ng/abuja">Abuja</a></li>
<li><a href="https://www.propertypro.ng/rivers">Rivers</a></li>
<li><a href="https://www.propertypro.ng/kano">Kano</a></li>
<li><a href="https://www.propertypro.ng/ogun">Ogun</a></li>
<li><a href="https://www.propertypro.ng/oyo">Oyo</a></li>
<li><a href="https://www.propertypro.ng/enugu">Enugu</a></li>
</ul>
</div>
</div>
<div class="col-md-2">
<div class="footer-text">
<h3>Popular Cities</h3>
<ul>
<li><a href="https://www.propertypro.ng/lagos/ikeja">Ikeja</a></li>
<li><a href="https://www.propertypro.ng/lagos/lekki">Lekki</a></li>
<li><a href="https://www.propertypro.ng/lagos/ikoyi">Ikoyi</a></li>
<li><a href="https://www.propertypro.ng/lagos/ibeju-lekki">Ibeju Lekki</a></li>
<li><a href="https://www.propertypro.ng/oyo/ibadan">Ibadan</a></li>
<li><a href="https://www.propertypro.ng/rivers/port-harcourt">Port Harcourt</a></li>
<li><a href="https://www.propertypro.ng/kano/kano">Kano</a></li>
</ul>
</div>
</div>
<div class="col-md-2">
<div class="footer-text">
<h3>Popular Shortlet Cities</h3>
<ul>
<li><a href="https://www.propertypro.ng/property-for-short-let/in/lagos/ikeja">Ikeja</a></li>
<li><a href="https://www.propertypro.ng/property-for-short-let/in/lagos/lekki">Lekki</a></li>
<li><a href="https://www.propertypro.ng/property-for-short-let/in/lagos/ikoyi">Ikoyi</a></li>
<li><a href="https://www.propertypro.ng/property-for-short-let/in/lagos/ajah">Ajah</a></li>
<li><a href="https://www.propertypro.ng/property-for-short-let/in/oyo/ibadan">Ibadan</a></li>
<li><a href="https://www.propertypro.ng/property-for-short-let/in/abuja">Abuja</a></li>
<li><a href="https://www.propertypro.ng/property-for-short-let/in/rivers">Rivers</a></li>
<li><a href="https://www.propertypro.ng/property-for-short-let">View More…</a></li>
</ul>
</div>
</div>
<div class="col-md-2">
<div class="footer-text">
<h3>Popular land for sale</h3>
<ul>
<li><a href="https://www.propertypro.ng/property-for-sale/land/in/lagos">Lagos</a></li>
<li><a href="https://www.propertypro.ng/property-for-sale/land/in/abuja">Abuja</a></li>
<li><a href="https://www.propertypro.ng/property-for-sale/land/in/oyo">Oyo</a></li>
<li><a href="https://www.propertypro.ng/property-for-sale/land/in/ogun">Ogun</a></li>
<li><a href="https://www.propertypro.ng/property-for-sale/land/in/enugu">Enugu</a></li>
<li><a href="https://www.propertypro.ng/property-for-sale/land/in/rivers">Rivers</a></li>
</ul>
</div>
</div>
<div class="col-md-4">
<div class="footer-text">
<h3>PropertyPro Products</h3>
<ul>
<li><a href="https://www.propertypro.ng/">JumiaHouse</a></li>
<li><a href="https://www.moveme.com.ng/">MoveMe</a></li>
<li><a href="https://www.propertypro.ng/conference">AFRECA</a></li>
<li><a href="https://www.propertypro.ng/prestige-magazine">Prestige Magazine</a></li>
<li><a href="https://www.propertypro.ng/real-estate-report">Property Market Report</a></li>
<li><a href="https://www.propertypro.ng/service-providers">Services</a></li>
<li><a href="https://www.propertypro.co.ke/">PropertyPro Kenya</a></li>
<li><a href="https://www.propertypro.co.zw/">PropertyPro Zimbabwe</a></li>
</ul>
</div>
</div>
</div>
<div class="row ">
<div class="col-lg-7">
<div class="copyright">
<p>&copy;Copyright 2020 PropertyPro.ng all rights reserved</p>
</div>
</div>
<div class="col-lg-5">
<div class="social flr">
<p>Social Media</p>
<a href="https://www.facebook.com/propertyprong/"> <img src="https://www.propertypro.ng/assets/assets/img/social/bba71c957fcbf4e7490f5539cae38e20-fb.png" alt="icon" /></a>
<a href="https://twitter.com/propertyprong"> <img src="https://www.propertypro.ng/assets/assets/img/social/628923f97ad1be69630cecfedba6a268-twitter.png" alt="icon" /></a>
<a href="https://www.instagram.com/propertyprong/"> <img src="https://www.propertypro.ng/assets/assets/img/social/d838c827ef3f606df0c63ab691527a48-ins.png" alt="icon" /></a>
<a href="https://www.linkedin.com/company/tolet-com-ng"> <img src="https://www.propertypro.ng/assets/assets/img/social/c466281e0a7804d6bf3d016800a7d966-linkdin.png" alt="icon" /></a>
</div>
</div>
</div>
</div>
</div>

<script data-cfasync="false" src="https://www.propertypro.ng/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://www.propertypro.ng/assets/assets/js/e383b2b8ec2ede17b4f3fcfbf1ab71a3-all.js" type="9e74fdb98b5be375e85059a4-text/javascript"></script>
<script src="https://www.propertypro.ng/assets/assets/js/844a57808d2e5437e16c7ebfc2900bf6-main.js" type="9e74fdb98b5be375e85059a4-text/javascript"></script>

<script src="https://www.propertypro.ng/assets/assets/js/morris/aaca73a0740dd8424afc36913caddd43-raphael.js" type="9e74fdb98b5be375e85059a4-text/javascript"></script>
<script src="https://www.propertypro.ng/assets/assets/js/morris/c33aff9ca10315c7f9a9aa320b69abba-morris.js" type="9e74fdb98b5be375e85059a4-text/javascript"></script>
<script type="9e74fdb98b5be375e85059a4-text/javascript">
        bq('track', 'ViewContent', {
          content_type: 'home_listing', } )
        fbq('track', 'Search', {
          content_type: 'home_listing', } )
        fbq('track', 'Contact')
        fbq('track', 'Lead')
        fbq('track', 'clicks')
</script>
<script type="9e74fdb98b5be375e85059a4-text/javascript">
      "use strict";

      $(function() {

        $(".extra-more").click(function() {
          $(".extra-estates").toggleClass("estate-less");
          $(this).html("Show less");
          return false;
        });

        var searchMode = 'rent';
        var searchState = '';
        var searchAxis = '';
        var searchArea = '';
        var searchType = '';
        var searchSubtype = '';
        var searchMinPrice = '';
        var searchMaxPrice = '';
        var searchBeds = '';

        var reqSearch = '';

        var searchKey = "";

        if(searchKey !== "") {
          OneSignal.push(function() {
            OneSignal.getTags(function(tags) {
                if (searchKey in tags) {

                } else {
                  OneSignal.push(function () {
                    OneSignal.sendTag(searchKey, "1").then(function (tagsSent) {
                      $.post( "/post_search_key", {
                        key: searchKey,
                        search: reqSearch,
                        mode: searchMode,
                        state: searchState,
                        axis: searchAxis,
                        area: searchArea,
                        type: searchType,
                        subType: searchSubtype,
                        min_price: searchMinPrice,
                        max_price: searchMaxPrice,
                        beds: searchBeds,
                      });
                    });
                  });
                }
            });
          });
        }

        
          
            Morris.Line({
              element: 'morris-one-line-chart',
              data: [
                
                  { year: '2023', value: 2296651.4483323693},
                
                  { year: '2022', value: 1893800.2873563217},
                
              ],
              xkey: 'year',
              ykeys: ['value'],
              xLabels: 'hello',
              resize: true,
              lineWidth: 2,
              labels: ['Value'],
              lineColors: ['#306'],
              pointSize: 4,
            });
          
        

        if (searchState) {
          var useEndpoint, guideSlug;
          var baseEndpoint = 'https://www.propertypro.ng' + '/guide/wp-json/wp/v2/';
          if (searchArea && searchAxis) {
            useEndpoint = baseEndpoint + 'areas';
            guideSlug = searchArea + '-' + searchAxis + '-' + searchState;
          } else if (searchAxis) {
            useEndpoint = baseEndpoint + 'axes';
            guideSlug = searchAxis + '-' + searchState;
          } else {
            if (reqSearch) {
              // split to know components
              var searchArray = reqSearch.split(',');
              var arrayLength = searchArray.length;
              if (3 == arrayLength) {
                // area
                useEndpoint = baseEndpoint + 'areas';
                guideSlug = slugify(searchArray[0]) + '-' + slugify(searchArray[1]) + '-' + searchState;
              } else if (2 == arrayLength) {
                // axis
                useEndpoint = baseEndpoint + 'axes';
                guideSlug = slugify(searchArray[0]) + '-' + searchState;
              } else {
                useEndpoint = baseEndpoint + 'states';
                guideSlug = searchState;
              }
            } else {
              useEndpoint = baseEndpoint + 'states';
              guideSlug = searchState;
            }
          }

          $.getJSON(useEndpoint + '?per_page=1&slug=' + encodeURIComponent(guideSlug) + '&_embed', function (data) {
            if(data.length) {
              data = data[0];
              var hood = {
                title: data.title.rendered,
                desc: data.content.rendered,
                link: data.link
              };
              var featuredMedia = data._embedded['wp:featuredmedia'];
              if (featuredMedia && featuredMedia.length) {
                if (
                        featuredMedia[0].media_details &&
                        featuredMedia[0].media_details.sizes &&
                        featuredMedia[0].media_details.sizes['post-thumbnail'] &&
                        featuredMedia[0].media_details.sizes['post-thumbnail'].source_url ) {
                  hood.image = featuredMedia[0].media_details.sizes['post-thumbnail'].source_url;
                } else if (featuredMedia[0].source_url) {
                  // use the full image
                  hood.image = featuredMedia[0].source_url;
                }
              }

              $("#n-img").attr("src", hood.image);
              $("#n-title").html(hood.title);
              $("#n-desc").html(hood.desc);
              $("#n-link").attr("href", hood.link);
              $("#n-area").show();
            }
          });
        }

      });

      function sticky_relocate() {
        var window_top = $(window).scrollTop();
        var div_top = $('.sticky-anchor').offset().top;
        if (window_top > div_top) {
          $('.sticky').addClass('stick');
          $('.property-sale-area').addClass('active');
        } else {
          $('.sticky').removeClass('stick');
          $('.property-sale-area').removeClass('active');
        }
      }

      $(function() {
        $(window).scroll(sticky_relocate);
        sticky_relocate();
      });

      $( document ).ready(function() {
        addSubmitFunctionToForm("lead-callback-request2","lead-callback-button2");
        if(true){


         /* Centering the modal vertically */
         function alignModal() {
            var modalDialog = $(this).find("#survey_dialog");

            modalDialog.css("margin-top", Math.max(0,
                    ($(window).height() - modalDialog.height()) / 2));
          }
          $(".modal").on("shown.bs.modal", alignModal);

          /* Resizing the modal according the screen size */
          $(window).on("resize", function() {
            $(".modal:visible").each(alignModal);
          });
          $("#surveyModal").modal('show');

        }

      });


      function changeSurveyPage(){

        const panels = document.getElementsByClassName("u-right_container");
        for(var s=0; s<panels.length; s++)
          panels[s].style.display = "none";
        var current_page = document.getElementById('survey_page').value;//goodbye_page
        console.log("current_page "+current_page);
        switch(current_page){
          case "welcome_page":
            console.log("doing welcome page");
            document.getElementById("own_rent_panel").style.display = "flex"
            document.getElementById('survey_page').value = "own_rent_page";
            console.log("doing welcome page...done");
            break;
          case "own_rent_page":

            var s_p_r = document.getElementById('survey_paying_rent').checked;
            var s_n_p_r = document.getElementById('survey_not_paying_rent').checked;
            console.log("s_p_r: "+s_p_r +" <> "+"s_n_p_r: "+s_n_p_r);
            if(!s_p_r && !s_n_p_r){
              alert("please choose an option");
              document.getElementById("own_rent_panel").style.display = "flex"

            }else if(s_n_p_r){
              terminateSurvey();
            }else{
              document.getElementById('survey_owns-rent').value = s_p_r ? 'YES' : 'NO';

              document.getElementById("amount_panel").style.display = "flex"
              document.getElementById('survey_page').value = "rent_amount_page";
            }
            console.log("logged value: "+document.getElementById('survey_owns-rent').value)

            //survey_paying_rent,survey_not_paying_rent:survey_amount:survey_monthly_pay,survey_yearly_pay

            break;
          case "rent_amount_page":
            document.getElementById("prference_panel").style.display = "flex"

            var amt = document.getElementById('survey_rent-amount').value;
            console.log("amount entered is "+amt);
            while(amt.includes(",")){
              amt = amt.replace(",","");
            }
            console.log("amount replacing "+amt);

            if(amt === ""){
              alert("please enter an amount");
              document.getElementById("prference_panel").style.display = "none"
              document.getElementById("amount_panel").style.display = "flex"
            }else if(isNaN(amt)){
              terminateSurvey();
            }else{
              amt = parseFloat(amt);
              var rate = parseFloat(document.getElementById("survey_upfront_rate").value);
              var monthly = Number((amt/12)*rate);

              var formatter = new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'NGN',
              });

              var yearly_label = formatter.format(amt).replace("NGN","&#8358; ")+ " upfront yearly";
              var monthly_label = formatter.format(monthly).replace("NGN","&#8358; ")+  " monthly";
              document.getElementById("monthly_label").innerHTML = monthly_label;
              document.getElementById("yearly_label").innerHTML = yearly_label;

              console.log("yearly: "+yearly_label +" <> "+"monthly: "+monthly_label);

              document.getElementById('survey_page').value = "preference_page";

            }
            break;
          case "preference_page":

            var s_m_p = document.getElementById('survey_monthly_pay').checked;
            var s_y_p = document.getElementById('survey_yearly_pay').checked;
            var one_selected = s_m_p || s_y_p;
            console.log("s_m_p: "+s_m_p +" <> "+"s_y_p: "+s_y_p);
            if(!one_selected){
              alert("please choose an option");
              document.getElementById("prference_panel").style.display = "flex"
            }else{
              document.getElementById('survey_payment-preference').value = s_m_p ? 'monthly' : 'yearly'
              //document.getElementById("reason_panel").style.display = "flex"
               var dec = document.getElementById('survey_payment-preference').value === 'monthly';
              document.getElementById('survey_page').value = dec ? "reason_page" : "goodbye_page";
              dec ? document.getElementById("reason_panel").style.display = "flex" : document.getElementById("goodbye_panel").style.display = "flex"
              console.log("next desc: "+document.getElementById('survey_page').value)

            }
            break;

            case "reason_page":
              document.getElementById("goodbye_panel").style.display = "flex"
              document.getElementById('survey_page').value = "goodbye_page";
            break;
          case "goodbye_page":
            submitSurvey();
            break;
          default:
            terminateSurvey();
            break;
        }

      }

      function terminateSurvey() {

        $("#surveyModal").modal("hide");

      }

      function handlePressed(evt){
        if (evt.which < 48 || evt.which > 57) {
          evt.preventDefault();
        }
      }//handlePressed(evt),keyReleased(caller)

      function keyReleased(caller){
        const present_val = caller.value.replace(",","");
        if(isNaN(present_val)){
          caller.value = "";
        }else{
          const numberFormatter = Intl.NumberFormat('en-US');
          const val = numberFormatter.format(present_val);
          caller.value = val;
        }

      }


      function reaonKeyReleased(caller){
        let val = caller.value;
        let len = val.length;
        if(len > 100){
          const new_val = val.substring(0,100);
          caller.value = new_val;
          val = new_val
        }

        document.getElementById("survey_reason_hide").value = val;

      }

      function submitSurvey(){
        var ownsRent = document.getElementById("survey_owns-rent").value;
        var rentAmount = document.getElementById("survey_rent-amount").value;
        var preference = document.getElementById("survey_payment-preference").value;
        var rateUpfront = document.getElementById("survey_upfront_rate").value;

        let name = ''; let phone = ''; let date = ''; let state = '';
        if(preference === 'monthly') {
          name = document.getElementById("survey_name").value;
          phone = document.getElementById("survey_phone").value;
          date = document.getElementById("survey_date").value;
          state = document.getElementById("survey_state").value;
        }


        console.log("owns_rent: "+ownsRent +" <:> amount: "+rentAmount+" <:> preference: "+preference);
        var postParams = {
          "owns" : ownsRent,
          "amts":rentAmount,
          "prefer":preference,
          "rate":rateUpfront,
          "name":name,
          "phone":phone,
          "date":date,
          "state":state
        };
        let submit = false;//logically when ownRents is no OR rentAmount is zero
        $.ajax({
          url: "/property-survey",
          data: JSON.stringify(postParams),
          headers: {
            'Content-Type': 'application/json'
          },
          type: 'POST',
          success: function(res) {
            // change page here to goodbyepage
            terminateSurvey();
          }
        });
        $("#surveyModal").modal("hide");
        return false;

      }
  </script>
<script type="9e74fdb98b5be375e85059a4-text/javascript">
            $(document).ready(function() {

                $.get('/areas.json', function(data){
                    $( ".searchInput" ).autocomplete({
                        //minLength:2,
                        //delay:1000,
                        source: data,
                        //autoFocus: true,
                        //focus: function (event, ui) {
                        //$(this).val(ui.item.value);
                        //}
                        select: function (event, ui) {
                            $("#auto-search").val(ui.item.value);
                        }
                        //,focus: function( event, ui ) { event.preventDefault(); }
                    });
                    //$(".searchInput").typeahead({ source:data, items:4, autoSelect:false });
                },'json');

                

                $(".alert2-btn").click(function(){
                    var valid = true;
                    var form = $(this).parents("form");
                    form.find("input").each(function(){
                        if($(this).val().length === 0 && $(this).attr("required") === "required") {
                            $(this).addClass('error');
                            valid = false;
                        } else {
                            $(this).removeClass('error');
                        }
                    });
                    if(!valid) {
                        alert("Please enter your name and email address");
                        return;
                    }
                    $("#ajaxWait").show();
                    $.ajax({
                        type: 'POST',
                        url: form.attr("action"),
                        data: form.serialize(),
                        success: function(data) {
                            if(data==="success") {
                                Show("Message", "You have successfully subscribed");
                            } else if(data==="already") {
                                Show("Message","You have already subscribed to this search");
                            } else {
                                Show("Message", data);
                            }
                            $("#ajaxWait").hide();
                            $('#alertNoResultModal').modal("hide");
                        }
                    });
                    return false;
                });

                /*$.getJSON('https://json.geoiplookup.io/?callback=?', function(data) {
                    console.log(JSON.stringify(data));
                });*/

                $( ".top_strip" ).delegate(".strip_close", "click", function() {
                    $.get("/hideStrip", function(data, status){
                        window.location.reload();
                    });
                });

            });

            function init() {
                var imgDefer = document.getElementsByTagName('img');
                for (var i = 0; i < imgDefer.length; i++) {
                    if (imgDefer[i].getAttribute('data-src')) {
                        imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
                    }
                }
            }

            window.onload = init;

            function doSubmitVendorReq(pid, id, source) {
                $.ajax({
                    type: 'POST',
                    url: "/click-vendor" + "?pid="+pid+"&id="+id+"&source="+source,
                    success: function(data) {

                    },
                    complete: function(data) {

                    }
                });
                return true;
            }

        </script>
<script src="https://www.propertypro.ng/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="9e74fdb98b5be375e85059a4-|49" defer=""></script></body>

<!-- Mirrored from www.propertypro.ng/property-for-rent by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 11:45:15 GMT -->
</html>