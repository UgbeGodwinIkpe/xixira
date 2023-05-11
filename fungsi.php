<?php
//*********************************************************************************
// ACCESS FUNCTION
//********************************************************************************
error_reporting(0);
function functionUserLock(){
	if(!isset($_COOKIE["username"]) && !isset($_COOKIE["password"]))
{
?>
<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=login.php">
<?php
exit();

}

}

function functionUserBlocked($x1){
	if($x1 == '1'){
	header('location:blocked.php');
	}
}


function functionUserLockAdminFree(){
	$sessionUsername = $_COOKIE['username'];
	if(empty($sessionUsername)){
	header('location: index.php');
	}
}


function functionAdminLock(){
	$sessionUsername = $_COOKIE['username'];
	if($sessionUsername == 'admin1'){
	}
	else{
	header('location:../index.php');
	}
}


//*********************************************************************************
// MEMBER FUNCTION
//*********************************************************************************



$sessionUsername = $r['username'];
$sql = mysqli_query($con, "SELECT * FROM tb_users WHERE username='$sessionUsername'");
	while ($user = mysqli_fetch_array($sql)) { 
	$userUsername = $user['username'];
	$userPassword = $user['password'];
	$userIP = $user['ip'];
	$userEmail = $user['email'];
	$userPhone = $user['phone'];
	$userNamaLengkap = $user['namalengkap'];
	$userNama = $user['nama'];
	$userBank = $user['bank'];
	$userBankNorek = $user['norek'];
	$userBtc = $user['bitcoin'];
	$userPm = $user['perfectmoney'];
	$userFasa = $user['fasapay'];
	$userRef = $user['referer'];
	$userAvatar = $user['avatar'];
	$userAlamat = $user['alamat'];
	$userCity = $user['kota'];
	$userPos = $user['kodepos'];
	$userCountry = $user['country'];
	$userJoinDate = date('d F Y h:i:s A',$user['joindate']);
	$userLogDate = date('d F Y h:i:s A',$user['lastlogdate']);
	$userBalance = $user['money'];
	$userProfit = $user['moneys'];
	if($userProfit==""){
	    $userProfit=0;
	}
	else{
	   $userProfit=$userProfit; 
	}
	$userSuspend = $user['suspend'];
	$userPin = $user['pin'];
       // $userstage = $user['stage'];
        $userstageposition = $user['stageposition'];
	$userTiket = $user['saldotiket'];
	$userLeva = $user['leva'];
	$userLevb = $user['levb'];
	$userLevc = $user['levc'];
	$userLevd = $user['levd'];
	$userLeve = $user['leve'];
	$userLevf = $user['levf'];
	$userLevg = $user['levg'];
	$userLevh = $user['levh'];
	$userLevi = $user['levi'];
	$userLevj = $user['levj'];
	$userPHAwal = $user['phawal'];
	$userManager = $user['manager'];
	$userLevMgr = $user['levmgr'];
	$userStatus = $user['status'];
	$userStokis = $user['stokis'];
	$userGauth = $user['gauth'];
	$userGauthx = $user['gauthex'];
	$userAktf = $user['aktifasi'];
	$userMng = $user['management'];


$active="active";
$sql = mysqli_query($con, "SELECT * FROM tb_plann WHERE username='$userUsername' and status='$active'");
while ($userl = mysqli_fetch_array($sql)) { 
	$userstage = $userl['stage'];
	$myupline= $userl['p1'];

//stage manipulation
$userstager=$userstage;

if($userstager==1){
$userstagername="FEEDER";
}
elseif($userstager==2){
$userstagername="BRONZE";
}
elseif($userstager==3){
$userstagername="SILVER";
}
elseif($userstager==4){
$userstagername="GOLD";
}
elseif($userstager==5){
$userstagername="SAPHIRE";
}
elseif($userstager==6){
$userstagername="EMERALD";
}


}


$phstatuso="pending";
$sqlpholalk = mysqli_query($con, "SELECT * FROM tb_fee WHERE username='$userUsername' and status='$phstatuso' order by id desc limit 1");
if(mysqli_num_rows($sqlpholalk)>0){
while ($sponsorphlolak = mysqli_fetch_array($sqlpholalk)) { 

$phprofitafee = $sponsorphlolak['fee'];

}
}
else{
$phprofitafee=0;

$phstatusol="pending";
$sqlpholala = mysqli_query($con, "SELECT * FROM tb_ph WHERE username='$userUsername' and status='$phstatusol'  order by id desc limit 1");
if(mysqli_num_rows($sqlpholala)>0){
$phstatuso="pending";
$sqlpholal = mysqli_query($con, "SELECT * FROM tb_ph WHERE username='$userUsername' and status='$phstatuso' order by id desc limit 1");
if(mysqli_num_rows($sqlpholal)>0){

}
else{
$phprofita=0;
}
	while ($sponsorphlola = mysqli_fetch_array($sqlpholal)) { 
$phprofita= $sponsorphlola['profit'];
$phprofitamain = $sponsorphlola['paket'];
$tokenph = $sponsorphlola['token'];
$todaypho= time();
$phdpro = $sponsorphlola['dpro'];
$phplano = $sponsorphlola['planph'];
$sqlpholalk = mysqli_query($con, "SELECT * FROM tb_fee WHERE username='$userUsername' and token='$tokenph' order by id desc limit 1");
if(mysqli_num_rows($sqlpholalk)>0){
while ($sponsorphlolak = mysqli_fetch_array($sqlpholalk)) { 

$phprofitafee = $sponsorphlolak['fee'];

}
}

$tabllla = mysqli_query($con, "SELECT * FROM planph where name='$phplano'"); 
while ($registroll = mysqli_fetch_array($tabllla)) { 
 $phaduration= $registroll["duration"];

}  

$date1=strtotime(date('d F Y h:i:s',$phdpro));
$date2=$todaypho;
 $diffdateo=$date1-$date2;
$phadurationindays=$diffdateo/(3600*24);
$phremaindays=round((($phaduration)-$phadurationindays), 2);
if($phremaindays>$phaduration){
$phprofita=ceil($phaduration*$phprofita);
} 
else{
$phprofita=ceil($phremaindays*$phprofita);
}

if(empty($phprofita) || ($phprofita <1)){
$phprofita=0;
}



}


}
else{
$phamountal=0;
}
	while ($sponsorphlolaa = mysqli_fetch_array($sqlpholala)) { 

$phamountal= $sponsorphlolaa['saldo'];
if(empty($phamountal) || ($phamountal <1)){
$phamountal=0;
}

}

}

$sqlolil = mysqli_query($con, "SELECT * FROM tb_users WHERE referer='$userUsername'");
	$totalreffsa = mysqli_num_rows($sqlolil);




$sql = mysqli_query($con, "SELECT * FROM tb_users WHERE username='$userRef'");
	while ($sponsor = mysqli_fetch_array($sql)) { 
	$sponsorUsername = $sponsor['username'];
	$sponsorPassword = $sponsor['password'];
	$sponsorIP = $sponsor['ip'];
	$sponsorEmail = $sponsor['email'];
	$sponsorPhone = $sponsor['phone'];
	$sponsorNamaLengkap = $sponsor['namalengkap'];
	$sponsorNama = $sponsor['nama'];
	$sponsorBank = $sponsor['bank'];
	$sponsorBankNorek = $sponsor['norek'];
	$sponsorBtc = $sponsor['bitcoin'];
	$sponsorPm = $sponsor['perfectmoney'];
	$sponsorFasa = $sponsor['fasapay'];
	$sponsorRef = $sponsor['referer'];
	$sponsorAvatar = $sponsor['avatar'];
	$sponsorAlamat = $sponsor['alamat'];
	$sponsorCity = $sponsor['kota'];
	$sponsorPos = $sponsor['kodepos'];
	$sponsorCountry = $sponsor['country'];
	$sponsorJoinDate = date('d F Y',$sponsor['joindate']);
	$sponsorLogDate = date('d F Y',$sponsor['lastlogdate']);
	$sponsorBalance = $sponsor['money'];
	$sponsorProfit = $sponsor['moneys'];
	$sponsorSuspend = $sponsor['suspend'];
	$sponsorPin = $sponsor['pin'];
	$sponsorTiket = $sponsor['saldotiket'];
	$sponsorLeva = $sponsor['leva'];
	$sponsorLevb = $sponsor['levb'];
	$sponsorLevc = $sponsor['levc'];
	$sponsorLevd = $sponsor['levd'];
	$sponsorLeve = $sponsor['leve'];
	$sponsorLevf = $sponsor['levf'];
	$sponsorLevg = $sponsor['levg'];
	$sponsorLevh = $sponsor['levh'];
	$sponsorLevi = $sponsor['levi'];
	$sponsorLevj = $sponsor['levj'];
	$sponsorPHAwal = $sponsor['phawal'];
	$sponsorManager = $sponsor['manager'];
	$sponsorLevMgr = $sponsor['levmgr'];
	$sponsorStatus = $sponsor['status'];
	$sponsorStokis = $sponsor['stokis'];
	$sponsorGauth = $sponsor['gauth'];
	$sponsorGauthx = $sponsor['gauthex'];
	$sponsorAktf = $sponsor['aktifasi'];
	$sponsorMng = $sponsor['management'];
	}
}



$sql_user = mysqli_query($con, "SELECT * FROM tb_users WHERE username!='admin1'");
$allMember = mysqli_num_rows($sql_user);

$sql_user2 = mysqli_query($con, "SELECT * FROM tb_users WHERE suspend!='1' and username!='admin1'");
$activeMember = mysqli_num_rows($sql_user2);

$sql_user3 = mysqli_query($con, "SELECT * FROM tb_users WHERE suspend='1' and username!='admin1'");
$suspendMember = mysqli_num_rows($sql_user3);

$sql_user4 = mysqli_query($con, "SELECT * FROM tb_users WHERE manager='1' and username!='admin1'");
$allMember = mysqli_num_rows($sql_user4);

$sql_user5 = mysqli_query($con, "SELECT * FROM tb_users WHERE stokis='1' and username!='admin1'");
$stockistMember = mysqli_num_rows($sql_user5);

$sql_user6 = mysqli_query($con, "SELECT * FROM tb_users WHERE management='Billing' and username!='admin1'");
$billingMember = mysqli_num_rows($sql_user6);

$sql_user7 = mysqli_query($con, "SELECT * FROM tb_users WHERE management='Service' and username!='admin1'");
$csMember = mysqli_num_rows($sql_user7);

$sql_user8 = mysqli_query($con, "SELECT * FROM tb_users WHERE management='Recovery' and username!='admin1'");
$recoverMember = mysqli_num_rows($sql_user8);

function latestMember(){
$lateM = mysqli_query($con, "SELECT * FROM tb_users WHERE username!='admin1' order by id DESC limit 0,1");
while ($seeM = mysqli_fetch_array($lateM)) {
echo "". $seeM["username"] .""; }
}

function latestManager(){
$lateM2 = mysqli_query($con, "SELECT * FROM tb_users WHERE username!='admin1' and manager='1' order by id DESC limit 0,1");
while ($seeM2 = mysqli_fetch_array($lateM2)) {
echo "". $seeM2["username"] .""; }
}

function latestStockist(){
$lateM3 = mysqli_query($con, "SELECT * FROM tb_users WHERE username!='admin1' and stokis='1'  order by id DESC limit 0,1");
while ($seeM3 = mysqli_fetch_array($lateM3)) {
echo "". $seeM3["username"] .""; }
}

function showAllMember($x1){
echo"

<div class=\"table-responsive\">
<table class=\"table table-striped table-hover\">
  <thead>
    <tr>
      <th>User</th>
      <th>Register Date</th>
      <th>Country</th>

    </tr>
      </thead>
        <tbody>
	";

$showM = mysqli_query($con, "SELECT * FROM tb_users WHERE username!='admin1' order by id DESC limit 0,$x1");
while ($lihatM = mysqli_fetch_array($showM)) {
echo "<tr><td><i class=\"fa fa-user\"></i> ". $lihatM["username"] ."</td><td><i class=\"fa fa-calendar\"></i> ". date('d F Y, H:i',$lihatM["joindate"]) ."</td><td><i class=\"fa fa-globe\"></i> ". $lihatM["country"] ."</td></tr>"; }
echo "
</tbody>
</table>
</div>
";
}

function showManagerMember(){
$showM2 = mysqli_query($con, "SELECT * FROM tb_users WHERE username!='admin1' and manager='1' order by id DESC limit 0,100");
while ($lihatM2 = mysqli_fetch_array($showM2)) {
echo "<tr><td>". $lihatM2["username"] ."</td><td>". $lihatM2["kota"] ."</td></tr>"; }
}

function showStockistMember(){
$showM3 = mysqli_query($con, "SELECT * FROM tb_users WHERE username!='admin1' and stokis='1' order by id DESC limit 0,100");
while ($lihatM3 = mysqli_fetch_array($showM3)) {
echo "<tr><td>". $lihatM3["username"] ."</td><td>". $lihatM3["kota"] ."</td></tr>"; }
}

function showSuspendMember(){
$showM4 = mysqli_query($con, "SELECT * FROM tb_users WHERE username!='admin1' and suspend='1' order by id DESC limit 0,100");
while ($lihatM4 = mysqli_fetch_array($showM4)) {
echo "<tr><td>". $lihatM4["username"] ."</td><td>". $lihatM4["kota"] ."</td></tr>"; }
}

function showActiveMember(){
$showM5 = mysqli_query($con, "SELECT * FROM tb_users WHERE username!='admin1' and suspend!='1' order by id DESC limit 0,100");
while ($lihatM5 = mysqli_fetch_array($showM5)) {
echo "<tr><td>". $lihatM5["username"] ."</td><td>". $lihatM5["kota"] ."</td></tr>"; }
}

function showBillingMember(){
$showM6 = mysqli_query($con, "SELECT * FROM tb_users WHERE username!='admin1' and management='Billing' order by id DESC limit 0,100");
while ($lihatM6 = mysqli_fetch_array($showM6)) {
echo "<tr><td>". $lihatM6["username"] ."</td><td>". $lihatM6["kota"] ."</td></tr>"; }
}

function showServiceMember(){
$showM7 = mysqli_query($con, "SELECT * FROM tb_users WHERE username!='admin1' and management='Service' order by id DESC limit 0,100");
while ($lihatM7 = mysqli_fetch_array($showM7)) {
echo "<tr><td>". $lihatM7["username"] ."</td><td>". $lihatM7["kota"] ."</td></tr>"; }
}

function showRecoveryMember(){
$showM8 = mysqli_query($con, "SELECT * FROM tb_users WHERE username!='admin1' and management='Recovery' order by id DESC limit 0,100");
while ($lihatM8 = mysqli_fetch_array($showM8)) {
echo "<tr><td>". $lihatM8["username"] ."</td><td>". $lihatM8["kota"] ."</td></tr>"; }
}



//*********************************************************************************
// SHOW COUNT PH FUNCTION
//*********************************************************************************


function userPhOrderCheck($x1){
	$sql1 = mysqli_query($con, "SELECT * FROM tb_beli WHERE username='$x1'");
	$sql2 = mysqli_query($con, "SELECT * FROM tb_jual WHERE username='$x1'");
	$rows1 = mysqli_num_rows($sql1);
	$rows2 = mysqli_num_rows($sql2);
	if($rows1 == '0'){
		echo"
			<div class='info'>No Transactions Found</div>
		";
	}
}


$sql = mysqli_query($con, "SELECT SUM(paket) AS amountTotal FROM tb_ph");
while ($array = mysqli_fetch_array($sql)) {
	if($array['amountTotal'] > '0'){
		$totalAllPh = $array['amountTotal'];
	}
	else{
		$totalAllPh = '0';
	}
}

$sql = mysqli_query($con, "SELECT SUM(paket) AS amountTotal FROM tb_beli where status='sukses'");
while ($array = mysqli_fetch_array($sql)) {
	if($array['amountTotal'] > '0'){
		$totalAllPhSukses = $array['amountTotal'];
	}
	else{
		$totalAllPhSukses = '0';
	}
}

$sql = mysqli_query($con, "SELECT SUM(paket) AS amountTotal FROM tb_beli where status='pending'");
while ($array = mysqli_fetch_array($sql)) {
	if($array['amountTotal'] > '0'){
		$totalAllPhPending = $array['amountTotal'];
	}
	else{
		$totalAllPhPending = '0';
	}
}

$sql = mysqli_query($con, "SELECT SUM(paket) AS amountTotal FROM tb_beli where status='problem'");
while ($array = mysqli_fetch_array($sql)) {
	if($array['amountTotal'] > '0'){
		$totalAllPhProblem = $array['amountTotal'];
	}
	else{
		$totalAllPhProblem = '0';
	}
}






//*********************************************************************************
// SHOW PH MEMBER FUNCTION
//*********************************************************************************


function showPhOrderMemberKananModal($x1,$x2){
	
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='1'"));
$phname=$ewdilj["nama"];
$skph=$ewdilj["singkatan"];

$ewdiljp= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='2'"));
$ghname=$ewdiljp["nama"];
$skgh=$ewdiljp["singkatan"];

$ewdiljxo= mysqli_fetch_array(mysqli_query($con, "select * from settweb"));
$matauang=$ewdiljxo["ecurrency"];
		$desimal=$ewdiljxo["desimal"];

$tabla = mysqli_query($con, "SELECT * FROM tb_ph where username='$x1' and id='$x2'"); 
while ($registro = mysqli_fetch_array($tabla)) { 
$sisaphnya=$pecahan * $registro["saldo"];
$ferpax=$registro["id"];
$ferpa=$registro["paket"];
$ferp=$registro["saldo"];
$pairnya=$ferpa - $ferp;
$frozenStatus=$registro["status"];
if($frozenStatus=='pending'){$button='info'; $mystats='Pending';} else
  if($frozenStatus=='problem'){$button='warning'; $mystats='Problem';} else
  if($frozenStatus=='reject'){$button='danger'; $mystats='Reject';} else
  if($frozenStatus=='sukses'){$button='success'; $mystats='Success';} else
  if($frozenStatus=='dilock'){$button='warning'; $mystats='Wait Transfer DP';}
  if($frozenStatus=='dikunci'){$button='warning'; $mystats='Wait To Open Pair';}
echo "
<div id_order=\"". $registro["idtrx"] ."\" class=\"ordin \" id=\"order_in_". $registro["idtrx"] ."\" style=\"cursor: pointer;\">
<table border=\"0\" cellpadding=\"0\" cellspacing=\"6\" width=\"100%\">
<tbody><tr>
<td></td>
<td class=\"ord_title\"><span class=\"translate\">Request to $skph </span><br><span class=\"order_in_id\"> <b>$skph ". $registro["idtrx"] ."</b></span></td>
</tr>
<tr>
<td colspan=\"2\" class=\"ord_body\">
<div class=\"ord_body_info\">
<span class=\"translate\">Participant</span> : 
<span class=\"order_in_fio\"> ". $registro["username"] ." </span><br>
<span class=\"translate\">Amount</span> : <span class=\"order_in_amount\">$matauang ". number_format($registro["paket"]) ."</span> <span class=\"order_in_currency\"></span><br>
<span class=\"rest_in\"><span class=\"translate\">Pair</span> : <span class=\"order_in_rest\">$matauang ". number_format($pairnya) ."</span> <span class=\"order_in_currency\"></span><br></span>
<span class=\"rest_in\"><span class=\"translate\">Not Pair</span> : <span class=\"order_in_rest\">$matauang ". number_format($registro["saldo"]) ."</span> <span class=\"order_in_currency\"></span><br></span>
<span class=\"translate\">Date</span> : <span class=\"order_in_date\">". date("l, d M Y h:i:s A",$registro["date"]) ."</span><br>
<span class=\"translate\">Status</span> : <span class=\"order_in_status\">". $mystats ."</span>
</div>
<div class=\"ord_body_is_avto\"></div>
</td>
</tr>
</tbody></table>
</div> ";
}
}


function showPhOrderMemberKananModalList($x1,$x2){
	
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='1'"));
$phname=$ewdilj["nama"];
$skph=$ewdilj["singkatan"];

$ewdiljp= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='2'"));
$ghname=$ewdiljp["nama"];
$skgh=$ewdiljp["singkatan"];

$ewdiljxo= mysqli_fetch_array(mysqli_query($con, "select * from settweb"));
$matauang=$ewdiljxo["ecurrency"];
		$desimal=$ewdiljxo["desimal"];

$tabla = mysqli_query($con, "SELECT * FROM tb_beli where username='$x1' and idph='$x2'"); 
while ($registro = mysqli_fetch_array($tabla)) { 
$derix=$registro["id"];
$deriz=$registro["idph"];
$deric=$registro["iddb"];
$namax=$registro["username"];
$phonex=$registro["phone"];
$bitcoinx=$registro["amountbtc"];
$tokenx=$registro["token"];
$konf=$registro["konfirmasi"];
$stats=$registro["status"];
$Datex = date('d F Y, h:i:s A',$registro['date']);
$Datexap = date('d F Y, h:i:s A',$registro['autoapp']);
$Expx = date('d F Y, h:i:s A',$registro['exp']);
$Expxa = $registro['exp'];
$tablao = mysqli_query($con, "SELECT * FROM tb_jual where token='$tokenx'"); 
$registroo = mysqli_fetch_array($tablao);
$idjual= $registroo["id"];
$namaxo=$registroo["username"];
$bitcoinxo=$registroo["bitcoin"];
$phonexo=$registroo["phone"];
$emailxo=$registroo["email"];

$tablap = mysqli_query($con, "SELECT * FROM tb_ph where id='$deriz'"); 
$registrop = mysqli_fetch_array($tablap);
$idtrx= $registrop["idtrx"];
if($stats=='pending'){
if($konf==''){
$said="Please Transfer Now and Confirm to fast approve";
$saida="img/ok2.png";
$konfp="Expired : $Expx <br> <a href=\"confirm.php?id=". $derix ."\"  style=\"float:right;\" class=\"neoui-greybutton translate\" style=\"float:right;\">Confirm Now!</a>";
} else
if($konf=='1'){
$said="Waiting Approve. Contact your Pair to fast Approve";
$saida="img/ok1.png";
$konfp="Auto Approve : $Datexap <br>
<div id=\"detail\" class=\"small ui neoui-greybutton translate callmodal\"  style=\"float:right;color:red; text-decoration:underline;\" data-modal=\"confirm". $derix ."\">View Confirm</div>";
} 
}

if($stats=='sukses'){
if($konf==''){
$said="Thanks For Your Participation";
$saida="img/ok.png";
$konfp="
<div id=\"detail\" class=\"small ui neoui-greybutton translate callmodal\"  style=\"float:right;color:red; text-decoration:underline;\" data-modal=\"confirm". $derix ."\">View Confirm</div>";

} else
if($konf=='1'){
$said="Thanks For Your Participation";
$saida="img/ok.png";
$konfp="<div id=\"detail\" class=\"small ui neoui-greybutton translate callmodal\"  style=\"float:right;color:red; text-decoration:underline;\" data-modal=\"confirm". $derix ."\">View Confirm</div>";
} 
}

if($stats=='problem'){
if($konf==''){
$said="Contact Your Pair";
$saida="img/block.png";
$konfp="Expired : $Expx <br><a href=\"confirm.php?id=". $derix ."\" class=\"neoui-greybutton translate\" style=\"float:right;color:red; text-decoration:underline;\">Confirm Now!</a>";
} else
if($konf=='1'){
$said="Contact Your Pair or Manager";
$saida="img/block.png";
$konfp="Auto Approve : $Datexap <BR><div id=\"detail\" class=\"small ui neoui-greybutton translate callmodal\" style=\"float:right;color:red; text-decoration:underline;\" data-modal=\"confirm". $derix ."\">View Confirm</div>";
} 
}

$sqle = "SELECT COUNT(*) AS cnt FROM messages WHERE idb='$derix'";
$resulte = mysqli_query($con, $sqle);        
$rowe = mysqli_fetch_array($resulte);
$pend = $rowe['cnt'];

$deri=$registro["status"];
if($deri=='pending'){$status='Pending';}
if($deri=='problem'){$status='Blocked';}
if($deri=='sukses'){$status='Success';}

$apel=$registro["exp"];
$jambu=time();
$jeruk=$apel-$jambu;
$sirsak=floor($jeruk/3600);
$sirsake=floor($jeruk/86400);

if($apel > $jambu){$rambutan="$sirsak hours";} 
else{$rambutan="";}

echo "
<div class=\"arrg arrg_in\" style=\"cursor: pointer;\" width=\"100%\">
<table class=\"arrg_tbarrg\" border=\"0\" cellpadding=\"2\" cellspacing=\"2\" width=\"100%\">
<tbody>
<tr>
<td class=\"arrg_status_name\" colspan=\"8\"> $said (Request $skph $idtrx )</td>
<td class=\"arrg_status_name\" colspan=\"2\">
<span class=\"translate\">Number :<br>".  $registro["token"] ."</span>
</td>
</tr>
<tr>
<td  class=\"arrg_num\" width=\"10%\"><br>
</td>
<td class=\"arrg_num\" width=\"2%\"></td>
<td class=\"arrg_num\" width=\"10%\"><span class=\"arrg_sm10\"><span class=\"translate\">Date of creating :<br> ". date("Y-m-d ",$registro["date"]) ."</span>
</td>
<td class=\"arrg_num\" width=\"2%\"></td>
<td class=\"arrg_name1\"><span class=\"arrg_user_in\">You <br> </span>
<div class=\"arrg_bank_in\"></div></td>
<td class=\"arrg_num\" width=\"2%\"></td>
<td  class=\"arrg_summ\" align=\"center\" class=\"arrg_summ\" align=\"center\">
<span class=\"arrg_amt\">$matauang<i class=\"\"></i> ".  round($registro["paket"]) ." </span><br>

<div class=\"arrg_out_files\" style=\"\">
</div>
</td>
<td class=\"arrg_num\" width=\"2%\"></td>
<td class=\"arrg_name2\" colspan=\"2\"> <span class=\"arrg_user_out\">".  $namaxo ." <br> ".  $phonexo ." <br> </span>

</td>
</tr>

</tbody>
</table>
</div>
";  }  
}



function showGhOrderMemberKananModal($x1,$x2){
	
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='1'"));
$phname=$ewdilj["nama"];
$skph=$ewdilj["singkatan"];

$ewdiljp= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='2'"));
$ghname=$ewdiljp["nama"];
$skgh=$ewdiljp["singkatan"];

$ewdiljxo= mysqli_fetch_array(mysqli_query($con, "select * from settweb"));
$matauang=$ewdiljxo["ecurrency"];
		$desimal=$ewdiljxo["desimal"];

$tabla = mysqli_query($con, "SELECT * FROM tb_gh where username='$x1' and id='$x2'"); 
while ($registro = mysqli_fetch_array($tabla)) { 
$sisaphnya=$pecahan * $registro["saldo"];
$ferpax=$registro["id"];
$ferpa=$registro["paket"];
$ferp=$registro["saldo"];
$pairnya=$ferpa - $ferp;
$frozenStatus=$registro["status"];
if($frozenStatus=='pending'){$button='info'; $mystats='Pending';} else
  if($frozenStatus=='problem'){$button='warning'; $mystats='Problem';} else
  if($frozenStatus=='reject'){$button='danger'; $mystats='Reject';} else
  if($frozenStatus=='sukses'){$button='success'; $mystats='Success';} else
  if($frozenStatus=='dilock'){$button='warning'; $mystats='Wait Transfer DP';}
  if($frozenStatus=='dikunci'){$button='warning'; $mystats='Wait To Open Pair';}
echo "
<div id_order=\"". $registro["idtrx"] ."\" class=\"ordout \" id=\"order_in_". $registro["idtrx"] ."\" style=\"cursor: pointer;\">
<table border=\"0\" cellpadding=\"0\" cellspacing=\"6\" width=\"100%\">
<tbody><tr>
<td></td>
<td class=\"ord_title\"><span class=\"translate\">Request to $skgh </span><br><span class=\"order_in_id\"> <b>$skgh ". $registro["idtrx"] ."</b></span></td>
</tr>
<tr>
<td colspan=\"2\" class=\"ord_body\">
<div class=\"ord_body_info\">
<span class=\"translate\">Participant</span> : 
<span class=\"order_in_fio\"> ". $registro["username"] ." </span><br>
<span class=\"translate\">Amount</span> : <span class=\"order_in_amount\">$matauang ". number_format($registro["paket"]) ."</span> <span class=\"order_in_currency\"></span><br>
<span class=\"rest_in\"><span class=\"translate\">Pair</span> : <span class=\"order_in_rest\">$matauang ". number_format($pairnya) ."</span> <span class=\"order_in_currency\"></span><br></span>
<span class=\"rest_in\"><span class=\"translate\">Not Pair</span> : <span class=\"order_in_rest\">$matauang ". number_format($registro["saldo"]) ."</span> <span class=\"order_in_currency\"></span><br></span>
<span class=\"translate\">Date</span> : <span class=\"order_in_date\">". date("l, d M Y ",$registro["date"]) ."</span><br>
<span class=\"order_in_mavro\"></span><br>
<span class=\"translate\">Status</span> : <span class=\"order_in_status\">". $mystats ."</span>
</div>
<div class=\"ord_body_is_avto\"> </div>
</td>
</tr>
</tbody></table>
</div> ";
}
}



function showGhOrderMemberKananModalList($x1,$x2){
	
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='1'"));
$phname=$ewdilj["nama"];
$skph=$ewdilj["singkatan"];

$ewdiljp= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='2'"));
$ghname=$ewdiljp["nama"];
$skgh=$ewdiljp["singkatan"];

$ewdiljxo= mysqli_fetch_array(mysqli_query($con, "select * from settweb"));
$matauang=$ewdiljxo["ecurrency"];
		$desimal=$ewdiljxo["desimal"];

$tabla = mysqli_query($con, "SELECT * FROM tb_beli where referer='$x1' and iddb='$x2'"); 
while ($registro = mysqli_fetch_array($tabla)) { 
$derix=$registro["id"];
$deriz=$registro["idph"];
$deric=$registro["iddb"];
$namax=$registro["username"];
$phonex=$registro["phone"];
$bitcoinx=$registro["amountbtc"];
$tokenx=$registro["token"];
$konf=$registro["konfirmasi"];
$stats=$registro["status"];
$Datex = date('d F Y, h:i:s A',$registro['date']);
$Datexap = date('d F Y, h:i:s A',$registro['autoapp']);
$Expx = date('d F Y, h:i:s A',$registro['exp']);
$Expxa = $registro['exp'];
$tablao = mysqli_query($con, "SELECT * FROM tb_jual where token='$tokenx'"); 
$registroo = mysqli_fetch_array($tablao);
$idjual= $registroo["id"];
$namaxo=$registroo["username"];
$bitcoinxo=$registroo["bitcoin"];
$phonexo=$registroo["phone"];
$emailxo=$registroo["email"];

$tablap = mysqli_query($con, "SELECT * FROM tb_gh where id='$deric'"); 
$registrop = mysqli_fetch_array($tablap);
$idtrx= $registrop["idtrx"];

if($stats=='pending'){

if($konf==''){
$said="Please Contact Your Sender to Transfer";
$saida="img/ok2.png";
$konfp="<a href=\"approve.php?id=". $derix ."\" class=\"neoui-greybutton translate\" style=\"float:right;\">Approve Now!</a><a href=\"reject.php?id=". $derix ."\" class=\"neoui-greybutton translate\" style=\"float:right;\">Reject Now!</a>";
} else
if($konf=='1'){
$said="Waiting Approve. Plese check your BTC and approve soon";
$saida="img/ok1.png";
$konfp="<a href=\"approve.php?id=". $derix ."\" class=\"neoui-greybutton translate\" style=\"float:right;\">Approve Now!</a><a href=\"reject.php?id=". $derix ."\" class=\"neoui-greybutton translate\" style=\"float:right;\">Reject Now!</a>";
} 
}

if($stats=='sukses'){
if($konf==''){
$said="Thanks For Your Participation";
$saida="img/ok.png";
$konfp="";
} else
if($konf=='1'){
$said="Thanks For Your Participation";
$saida="img/ok.png";
$konfp="";
} 
}

if($stats=='problem'){
if($konf==''){
$said="Contact Your Pair";
$saida="img/block.png";
$konfp="<a href=\"approve.php?id=". $derix ."\" class=\"neoui-greybutton translate\" style=\"float:right;\">Approve Now!</a><a href=\"reject.php?id=". $derix ."\" class=\"neoui-greybutton translate\" style=\"float:right;\">Reject Now!</a>";
} else
if($konf=='1'){
$said="Contact Your Pair or Manager";
$saida="img/block.png";
$konfp="<a href=\"approve.php?id=". $derix ."\" class=\"neoui-greybutton translate\" style=\"float:right;\">Approve Now!</a><a href=\"reject.php?id=". $derix ."\" class=\"neoui-greybutton translate\" style=\"float:right;\">Reject Now!</a>";
} 
}


$sqle = "SELECT COUNT(*) AS cnt FROM messages WHERE idb='$derix'";
$resulte = mysqli_query($con, $sqle);        
$rowe = mysqli_fetch_array($resulte);
$pend = $rowe['cnt'];

$deri=$registro["status"];
if($deri=='pending'){$status='Pending';}
if($deri=='problem'){$status='Blocked';}
if($deri=='sukses'){$status='Success';}

$apel=$registro["exp"];
$jambu=time();
$jeruk=$apel-$jambu;
$sirsak=floor($jeruk/3600);
$sirsake=floor($jeruk/86400);

if($apel > $jambu){$rambutan="$sirsak hours";} 
else{$rambutan="";}

echo "
<div class=\"arrg arrg_out\" style=\"cursor: pointer;\" width=\"100%\">
<table class=\"arrg_tbarrg\" border=\"0\" cellpadding=\"2\" cellspacing=\"2\" width=\"100%\">
<tbody>
<tr>
<td class=\"arrg_status_name\" colspan=\"8\"> $said (Request $skgh $idtrx )</td>
<td class=\"arrg_status_name\" colspan=\"2\">
<span class=\"translate\">Number :<br>".  $registro["token"] ."</span>
</td>
</tr>
<tr>
<td  class=\"arrg_num\" width=\"10%\"><br>
</td>
<td class=\"arrg_num\" width=\"2%\"></td>
<td class=\"arrg_num\" width=\"10%\"><span class=\"arrg_sm10\"><span class=\"translate\">Date of creating :<br> ". date("Y-m-d ",$registro["date"]) ."</span>
</td>
<td class=\"arrg_num\" width=\"2%\"></td>
<td class=\"arrg_name1\"><span class=\"arrg_user_in\">".  $namax ." <br> ".  $phonex ."</span>
<div class=\"arrg_bank_in\"></div></td>
<td class=\"arrg_num\" width=\"2%\"></td>
<td  class=\"arrg_summ\" align=\"center\" class=\"arrg_summ\" align=\"center\">
<span class=\"arrg_amt\">$matauang<i class=\"\"></i> ".  round($registro["paket"]) ." </span><br>

</div>
</td>
<td class=\"arrg_num\" width=\"2%\"></td>
<td class=\"arrg_name2\" colspan=\"2\"> <span class=\"arrg_user_out\">Your <br> Bank <br> </span>

</td>
</tr>

</tbody>
</table>
</div>
";  }  
}










function showPhMember($x1,$x2){
	echo"
<div class=\"table-responsive\">
<table class=\"table table-striped table-hover\">
  <thead>
    <tr>
      <th>ID Trx</th>
      <th>Date</th>
      <th>Amount</th>
      <th>Pair</th>
      <th>Not Pair</th>
      <th>Status</th>
    </tr>
      </thead>
        <tbody>
	";
	$sql = mysqli_query($con, "SELECT * FROM tb_ph WHERE username='$x1' order by id DESC limit 0,$x2");
	while ($frozen = mysqli_fetch_array($sql)) {
		$ewdiljx= mysqli_fetch_array(mysqli_query($con, "select * from settweb"));
		$matauang=$ewdiljx["ecurrency"];
		$desimal=$ewdiljx["desimal"];
	$frozenId = $frozen['id'];
  $frozenIdTrx = $frozen['idtrx'];
	$frozenUsername = $frozen['username'];
	$frozenAmount = number_format($frozen['paket'],$desimal);
	$frozenDate = date('d F Y, H:i',$frozen['date']);
	$frozenPair= number_format($frozen['saldo'],$desimal);
  $frozenNotPaire=$frozenAmount - $frozenPair;
  $frozenNotPair= number_format($frozenNotPaire,$desimal);
	$frozenDateRelease = date('d F Y, H:i',$frozen['date_release']);
	$frozenStatus = $frozen['status'];
  if($frozenStatus=='pending'){$button='info'; $mystats='Pending';} else
  if($frozenStatus=='problem'){$button='warning'; $mystats='Problem';} else
  if($frozenStatus=='reject'){$button='danger'; $mystats='Reject';} else
  if($frozenStatus=='sukses'){$button='success'; $mystats='Success';}
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='1'"));
$phname=$ewdilj["nama"];
$skph=$ewdilj["singkatan"];
	echo"
		<tr>
    <td>$frozenIdTrx</td>
			<td>$frozenDate</td>
			<td>$matauang $frozenAmount</td>
			<td>$matauang $frozenNotPair</td>
			<td>$matauang $frozenPair</td>
			<td><button type='button' class='btn btn-$button btn-xs'>$mystats</button></td>
		</tr>
	";
	}
    echo "</tbody></table></div>";
}


function showPhOrderMember($x1,$x2){
	echo"
<div class=\"table-responsive\">
<table class=\"table table-striped table-hover\">
  <thead>
    <tr>
      <th>Sender</th>
      <th>Detail Trx</th>
      <th>Receiver</th>

    </tr>
      </thead>
        <tbody>
	";
	$sql = mysqli_query($con, "SELECT * FROM tb_beli WHERE username='$x1' order by id DESC limit 0,$x2");
	while ($frozen = mysqli_fetch_array($sql)) {
	$frozenId = $frozen['id'];
  $frozenIdTrx = $frozen['token'];
	$frozenUsername = $frozen['username'];
  $frozenEmail = $frozen['email'];
  $frozenPhone = $frozen['phone'];
  $frozenPair = $frozen['referer'];
  $sqlz = mysqli_query($con, "SELECT * FROM tb_users WHERE username='$x1'");
  $frozenz = mysqli_fetch_array($sqlz);
  $reffgue= $frozenz['referer'];
  $sqlzt = mysqli_query($con, "SELECT * FROM tb_users WHERE username='$reffgue'");
  $frozenzt = mysqli_fetch_array($sqlzt);
  $phoneref= $frozenzt['phone'];
  $sqlzz = mysqli_query($con, "SELECT * FROM tb_users WHERE username='$frozenPair'");
  $frozenzz = mysqli_fetch_array($sqlzz);
  $emailPair=$frozenzz['email'];
  $phonePair=$frozenzz['phone'];
  $upPair=$frozenzz['referer'];
  $sqlztt = mysqli_query($con, "SELECT * FROM tb_users WHERE username='$upPair'");
  $frozenztt = mysqli_fetch_array($sqlztt);
  $phonereft= $frozenztt['phone'];
	$ewdiljx= mysqli_fetch_array(mysqli_query($con, "select * from settweb"));
	$matauang=$ewdiljx["ecurrency"];
	$desimal=$ewdiljx["desimal"];
	$frozenAmount = number_format($frozen['paket'],$desimal);
	$frozenDate = date('d F Y, h:i:s A',$frozen['date']);
	$frozenStatus = $frozen['status'];
  if($frozenStatus=='pending'){$button='info'; $mystats='Pending';} else
  if($frozenStatus=='problem'){$button='warning'; $mystats='Problem';} else
  if($frozenStatus=='reject'){$button='danger'; $mystats='Reject';} else
  if($frozenStatus=='sukses'){$button='success'; $mystats='Success';}
  $hari = date("H");
  $token=md5($frozenIdTrx.$hari);
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='1'"));
$phname=$ewdilj["nama"];
$skph=$ewdilj["singkatan"];
	echo"
		<tr>
  	<td>Username : $frozenUsername <br> Email : $frozenEmail <br> Phone : $frozenPhone <br> Upline : $reffgue <br> Upline Phone : $phoneref</td>
    <td>ID Trx : $frozenIdTrx <br> Date : $frozenDate <br> Amount : $matauang $frozenAmount <br> Status : $mystats <br><a href='detailph.php?id=$frozenId&token=$token' class='btn btn-$button btn-xs' style='float:right;color:red; text-decoration:underline;'>View Detail</a></td>
		<td>Username : $frozenPair <br> Email : $emailPair <br> Phone : $phonePair <br> Upline : $upPair <br> Upline Phone : $phonereft</td>
		</tr>
	";
	}
    echo "</tbody></table></div>";
}




function showListAllOrderMember($x1){

function timeAgo($timestamp){
	    $time = time() - $timestamp;

	    if ($time < 60)
	    return ( $time > 1 ) ? $time . ' seconds' : 'a second';
	    elseif ($time < 3600) {
	    $tmp = floor($time / 60);
	    return ($tmp > 1) ? $tmp . ' minutes' : ' a minute';
	    }
	    elseif ($time < 86400) {
	    $tmp = floor($time / 3600);
	    return ($tmp > 1) ? $tmp . ' hours' : ' a hour';
	    }
	    elseif ($time < 2592000) {
	    $tmp = floor($time / 86400);
	    return ($tmp > 1) ? $tmp . ' days' : ' a day';
	    }
	    elseif ($time < 946080000) {
	    $tmp = floor($time / 2592000);
	    return ($tmp > 1) ? $tmp . ' months' : ' a month';
	    }
	    else {
	    $tmp = floor($time / 946080000);
	    return ($tmp > 1) ? $tmp . ' years' : ' a year';
	    }
    }
	echo"

<div class=\"table-responsive\">
<table class=\"table table-striped table-hover\">
  <thead>
    <tr>
      <th>Sender</th>
      <th>Amount</th>
      <th>Receiver</th>

    </tr>
      </thead>
        <tbody>
	";
	$sql = mysqli_query($con, "SELECT * FROM tb_beli order by id DESC limit 0,$x1");
	while ($frozen = mysqli_fetch_array($sql)) {
	$frozenId = $frozen['id'];
  $frozenIdTrx = $frozen['token'];
	$frozenUsername = $frozen['username'];
  $frozenEmail = $frozen['email'];
  $frozenPhone = $frozen['phone'];
  $frozenPair = $frozen['referer'];
  $sqlz = mysqli_query($con, "SELECT * FROM tb_users WHERE username='$x1'");
  $frozenz = mysqli_fetch_array($sqlz);
  $reffgue= $frozenz['referer'];
  $sqlzt = mysqli_query($con, "SELECT * FROM tb_users WHERE username='$reffgue'");
  $frozenzt = mysqli_fetch_array($sqlzt);
  $phoneref= $frozenzt['phone'];
  $sqlzz = mysqli_query($con, "SELECT * FROM tb_users WHERE username='$frozenPair'");
  $frozenzz = mysqli_fetch_array($sqlzz);
  $emailPair=$frozenzz['email'];
  $phonePair=$frozenzz['phone'];
  $upPair=$frozenzz['referer'];
  $sqlztt = mysqli_query($con, "SELECT * FROM tb_users WHERE username='$upPair'");
  $frozenztt = mysqli_fetch_array($sqlztt);
  $phonereft= $frozenztt['phone'];
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='1'"));
$phname=$ewdilj["nama"];
$skph=$ewdilj["singkatan"];
$ewdiljx= mysqli_fetch_array(mysqli_query($con, "select * from settweb"));
$matauang=$ewdiljx["ecurrency"];
$desimal=$ewdiljx["desimal"];
	$frozenAmount = number_format($frozen['paket'],$desimal);
	$frozenDate = date('d F Y, h:i:s A',$frozen['date']);
	$frozenDater = $frozen['date'];
	$frozenStatus = $frozen['status'];
  if($frozenStatus=='pending'){$button='info'; $mystats='Pending';} else
  if($frozenStatus=='problem'){$button='warning'; $mystats='Problem';} else
  if($frozenStatus=='reject'){$button='danger'; $mystats='Reject';} else
  if($frozenStatus=='sukses'){$button='success'; $mystats='Success';}
  $hari = date("H");
  $token=md5($frozenIdTrx.$hari);

	echo"

		<tr>
  	<td><i class=\"fa fa-user\"></i> $frozenUsername</td>
    <td><b> <i class=\"fa fa-money\"></i> $matauang $frozenAmount </b> <small> <i class=\"icon-time\"></i> ( ". timeAgo($frozenDater - 60 * 3) ." ago )</small></td>
		<td><i class=\"fa fa-trophy\"></i> $frozenPair</td>
		</tr>
	";
	}
    echo "</tbody></table></div>";
}



//*********************************************************************************
// SHOW COUNT GH FUNCTION
//*********************************************************************************

function userGhOrderCheck($x1){
	$sql1 = mysqli_query($con, "SELECT * FROM tb_beli WHERE username='$x1'");
	$sql2 = mysqli_query($con, "SELECT * FROM tb_jual WHERE username='$x1'");
	$rows1 = mysqli_num_rows($sql1);
	$rows2 = mysqli_num_rows($sql2);
	if($rows2 == '0'){
		echo"
			<div class='info'>No Transactions Found</div>
		";
	}
}

$sql = mysqli_query($con, "SELECT SUM(paket) AS amountTotal FROM tb_gh");
while ($array = mysqli_fetch_array($sql)) {
	if($array['amountTotal'] > '0'){
		$totalAllGh = $array['amountTotal'];
	}
	else{
		$totalAllGh = '0';
	}
}

$sql = mysqli_query($con, "SELECT SUM(paket) AS amountTotal FROM tb_jual where status='sukses'");
while ($array = mysqli_fetch_array($sql)) {
	if($array['amountTotal'] > '0'){
		$totalAllGhSukses = $array['amountTotal'];
	}
	else{
		$totalAllGhSukses = '0';
	}
}

$sql = mysqli_query($con, "SELECT SUM(paket) AS amountTotal FROM tb_jual where status='tunggu transfer'");
while ($array = mysqli_fetch_array($sql)) {
	if($array['amountTotal'] > '0'){
		$totalAllGhPending = $array['amountTotal'];
	}
	else{
		$totalAllGhPending = '0';
	}
}

$sql = mysqli_query($con, "SELECT SUM(paket) AS amountTotal FROM tb_jual where status='problem'");
while ($array = mysqli_fetch_array($sql)) {
	if($array['amountTotal'] > '0'){
		$totalAllGhProblem = $array['amountTotal'];
	}
	else{
		$totalAllGhProblem = '0';
	}
}


//*********************************************************************************
// SHOW GH MEMBER FUNCTION
//*********************************************************************************



function showGhMemberKanan($x1,$x2){
	echo"
<div class=\"table-responsive\">
<table class=\"table table-striped table-hover\">
        <tbody>
	";
	$sql = mysqli_query($con, "SELECT * FROM tb_gh WHERE username='$x1' order by id DESC limit 0,$x2");
	while ($frozen = mysqli_fetch_array($sql)) {
		$ewdiljx= mysqli_fetch_array(mysqli_query($con, "select * from settweb"));
		$matauang=$ewdiljx["ecurrency"];
		$desimal=$ewdiljx["desimal"];
	$frozenId = $frozen['id'];
  $frozenIdTrx = $frozen['idtrx'];
	$frozenUsername = $frozen['username'];
	$frozenAmount = number_format($frozen['paket']);
	$frozenDate = date('d F Y, h:i:s A',$frozen['date']);
	$frozenNotPair= number_format($frozen['saldo']);
  $frozenPair=$frozenAmount - $frozenNotPair;
  
	$frozenDateRelease = date('d F Y, H:i',$frozen['date_release']);
	$frozenStatus = $frozen['status'];
  if($frozenStatus=='pending'){$button='info'; $mystats='Pending';} else
  if($frozenStatus=='problem'){$button='warning'; $mystats='Problem';} else
  if($frozenStatus=='reject'){$button='danger'; $mystats='Reject';} else
  if($frozenStatus=='sukses'){$button='success'; $mystats='Success';} else
  if($frozenStatus=='dikunci'){$button='warning'; $mystats='Wait To Open Pair';}
if($frozenAmount==$frozenNotPair){$deletePair='<a href="deletetrx2.php?id=$frozenId" class="btn btn-danger btn-xs">DELETE REQUEST</a>';} else {$deletePair='';}
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='2'"));
$ghname=$ewdilj["nama"];
$skgh=$ewdilj["singkatan"];
	echo"
		<tr>
<td>Request <b>$skgh $matauang $frozenIdTrx</b> <BR> User:  $frozenUsername <br> Date : $frozenDate <br> Amount : $matauang $frozenAmount <br> Pair : $matauang $frozenPair <br> Not Pair : $matauang $frozenNotPair <br> Status : $mystats <br>
<a data-target=\"#modal-responsiveGH$frozenIdTrx\" data-toggle=\"modal\" class=\"btn btn-success btn-xs\" style=\"float:right;color:red; text-decoration:underline;\" style=\"float:right;color:red; text-decoration:underline;\">View Detail</a><br>

</td>
			<td>
<div id=\"trxgh\"><p class=\"icon\"><i class=\"icon fa fa-arrow-circle-o-left\"></i></p> </div>
</td>
				</tr>
	";
	}
    echo "</tbody></table></div>";
}


function showGhMember($x1,$x2){
	echo"
<div class=\"table-responsive\">
<table class=\"table table-striped table-hover\">
  <thead>
    <tr>
      <th>ID Trx</th>
      <th>Date</th>
      <th>Amount</th>
      <th>Pair</th>
      <th>Not Pair</th>
      <th>Status</th>
    </tr>
      </thead>
        <tbody>
	";
	$sql = mysqli_query($con, "SELECT * FROM tb_gh WHERE username='$x1' order by id DESC limit 0,$x2");
	while ($frozen = mysqli_fetch_array($sql)) {
		$ewdiljx= mysqli_fetch_array(mysqli_query($con, "select * from settweb"));
		$matauang=$ewdiljx["ecurrency"];
		$desimal=$ewdiljx["desimal"];
	$frozenId = $frozen['id'];
  $frozenIdTrx = $frozen['idtrx'];
	$frozenUsername = $frozen['username'];
	$frozenAmount = number_format($frozen['paket'],$desimal);
	$frozenDate = date('d F Y, h:i:s A',$frozen['date']);
	$frozenPair= number_format($frozen['saldo'],$desimal);
  $frozenNotPaire=$frozenAmount - $frozenPair;
  $frozenNotPair= number_format($frozenNotPaire,$desimal);
	$frozenDateRelease = date('d F Y, h:i:s A',$frozen['date_release']);
	$frozenStatus = $frozen['status'];
  if($frozenStatus=='pending'){$button='info'; $mystats='Pending';} else
  if($frozenStatus=='problem'){$button='warning'; $mystats='Problem';} else
  if($frozenStatus=='reject'){$button='danger'; $mystats='Reject';} else
  if($frozenStatus=='sukses'){$button='success'; $mystats='Success';}
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='2'"));
$ghname=$ewdilj["nama"];
$skgh=$ewdilj["singkatan"];
	echo"
		<tr>
    <td>$frozenIdTrx</td>
			<td>$frozenDate</td>
			<td>$matauang $frozenAmount</td>
			<td>$matauang $frozenNotPair</td>
			<td>$matauang $frozenPair</td>
			<td><button type='button' class='btn btn-$button btn-xs'>$mystats</button></td>
		</tr>
	";
	}
    echo "</tbody></table></div>";
}


function showGhOrderMember($x1,$x2){
	echo"
<div class=\"table-responsive\">
<table class=\"table table-striped table-hover\">
  <thead>
    <tr>
      <th>Sender</th>
      <th>Detail Trx</th>
      <th>Receiver</th>

    </tr>
      </thead>
        <tbody>
	";
	$sql = mysqli_query($con, "SELECT * FROM tb_beli WHERE referer='$x1' order by id DESC limit 0,$x2");
	while ($frozen = mysqli_fetch_array($sql)) {
	$frozenId = $frozen['id'];
  $frozenIdTrx = $frozen['token'];
	$frozenUsername = $frozen['username'];
  $frozenEmail = $frozen['email'];
  $frozenPhone = $frozen['phone'];
  $frozenPair = $frozen['referer'];
  $sqlz = mysqli_query($con, "SELECT * FROM tb_users WHERE username='$x1'");
  $frozenz = mysqli_fetch_array($sqlz);
  $reffgue= $frozenz['referer'];
  $sqlzt = mysqli_query($con, "SELECT * FROM tb_users WHERE username='$reffgue'");
  $frozenzt = mysqli_fetch_array($sqlzt);
  $phoneref= $frozenzt['phone'];
  $sqlzz = mysqli_query($con, "SELECT * FROM tb_users WHERE username='$frozenPair'");
  $frozenzz = mysqli_fetch_array($sqlzz);
  $emailPair=$frozenzz['email'];
  $phonePair=$frozenzz['phone'];
  $upPair=$frozenzz['referer'];
  $sqlztt = mysqli_query($con, "SELECT * FROM tb_users WHERE username='$upPair'");
  $frozenztt = mysqli_fetch_array($sqlztt);
  $phonereft= $frozenztt['phone'];
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='2'"));
$ghname=$ewdilj["nama"];
$skgh=$ewdilj["singkatan"];
$ewdiljx= mysqli_fetch_array(mysqli_query($con, "select * from settweb"));
$matauang=$ewdiljx["ecurrency"];
$desimal=$ewdiljx["desimal"];
	$frozenAmount = number_format($frozen['paket'],$desimal);
	$frozenDate = date('d F Y, h:i:s A',$frozen['date']);
	$frozenStatus = $frozen['status'];
  if($frozenStatus=='pending'){$button='info'; $mystats='Pending';} else
  if($frozenStatus=='problem'){$button='warning'; $mystats='Problem';} else
  if($frozenStatus=='reject'){$button='danger'; $mystats='Reject';} else
  if($frozenStatus=='sukses'){$button='success'; $mystats='Success';}
  $hari = date("H");
  $token=md5($frozenIdTrx.$hari);

	echo"
		<tr>
  	<td>Username : $frozenUsername <br> Email : $frozenEmail <br> Phone : $frozenPhone <br> Upline : $reffgue <br> Upline Phone : $phoneref</td>
    <td>ID Trx : $frozenIdTrx <br> Date : $frozenDate <br> Amount : $matauang $frozenAmount <br> Status : $mystats <br><a href='detailph2.php?id=$frozenId&token=$token' class='btn btn-$button btn-xs' style='float:right;color:red; text-decoration:underline;'>View Detail</a></td>
		<td>Username : $frozenPair <br> Email : $emailPair <br> Phone : $phonePair <br> Upline : $upPair <br> Upline Phone : $phonereft</td>
		</tr>
	";
	}
    echo "</tbody></table></div>";
}



//*********************************************************************************
// PH GH FORM FUNCTION
//*********************************************************************************

function cekPHNotSukses($x1){
$sqle = "SELECT COUNT(*) AS cnt FROM tb_ph WHERE username='$x1' and status!='sukses'";
$resulte = mysqli_query($con, $sqle);        
$rowe = mysqli_fetch_array($resulte);
$pend = $rowe['cnt'];
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='1'"));
$phname=$ewdilj["nama"];
$skph=$ewdilj["singkatan"];
$ewdiljX= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='2'"));
$ghname=$ewdiljX["nama"];
$skgh=$ewdiljX["singkatan"];
if ($pend > 0)
{
$error = 1;
$errormsg .= "
<b>Sorry, you cannot request $phname / $ghname !</b><br>
You Have a $phname transaction and not completed. Finishing it FIRST!
";
}
}

function cekPHOrderNotSukses($x1){
$sqle = "SELECT COUNT(*) AS cnt FROM tb_beli WHERE username='$x1' and status!='sukses'";
$resulte = mysqli_query($con, $sqle);        
$rowe = mysqli_fetch_array($resulte);
$pend = $rowe['cnt'];
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='1'"));
$phname=$ewdilj["nama"];
$skph=$ewdilj["singkatan"];
$ewdiljX= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='2'"));
$ghname=$ewdiljX["nama"];
$skgh=$ewdiljX["singkatan"];
if ($pend > 0)
{
$error = 1;
$errormsg .= "
<b>Sorry, you cannot request $phname / $ghname !</b><br>
You Have a $phname transaction and not completed. Finishing it FIRST!
";
}
}

function cekGHNotSukses($x1){
$sqle = "SELECT COUNT(*) AS cnt FROM tb_gh WHERE username='$x1' and status!='sukses'";
$resulte = mysqli_query($con, $sqle);        
$rowe = mysqli_fetch_array($resulte);
$pend = $rowe['cnt'];
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='1'"));
$phname=$ewdilj["nama"];
$skph=$ewdilj["singkatan"];
$ewdiljX= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='2'"));
$ghname=$ewdiljX["nama"];
$skgh=$ewdiljX["singkatan"];
if ($pend > 0)
{
$error = 1;
$errormsg .= "
<b>Sorry, you cannot request $phname / $ghname!</b><br>
You Have a $ghname transaction and not completed. Finishing it FIRST!
";
}
}

function cekGHOrderNotSukses($x1){
$sqle = "SELECT COUNT(*) AS cnt FROM tb_jual WHERE username='$x1' and status!='sukses'";
$resulte = mysqli_query($con, $sqle);        
$rowe = mysqli_fetch_array($resulte);
$pend = $rowe['cnt'];
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='1'"));
$phname=$ewdilj["nama"];
$skph=$ewdilj["singkatan"];
$ewdiljX= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='2'"));
$ghname=$ewdiljX["nama"];
$skgh=$ewdiljX["singkatan"];
if ($pend > 0)
{
$error = 1;
$errormsg .= "
<b>Sorry, you cannot request $phname / $ghname !</b><br>
You Have a $ghname transaction and not completed. Finishing it FIRST!
";
}
}

function cekPHOrderSukses($x1){
$sqle = "SELECT COUNT(*) AS cnt FROM tb_ph WHERE username='$x1' and status='sukses'";
$resulte = mysqli_query($con, $sqle);        
$rowe = mysqli_fetch_array($resulte);
$pend = $rowe['cnt'];
$ewdiljr= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='1'"));
$phname=$ewdiljr["nama"];
$skph=$ewdiljr["singkatan"];
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='3'"));
$ghbname=$ewdilj["nama"];
$skghb=$ewdilj["singkatan"];
$ewdiljX= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='2'"));
$ghname=$ewdiljX["nama"];
$skgh=$ewdiljX["singkatan"];
if ($pend < 1)
{
$error = 1;
$errormsg .= "
<b>Sorry, you cannot request $ghbname / $ghname !</b><br>
You Dont Have a $phname transaction completed. Please $skph FIRST!
";
}
}

function cekPHTiket($x1){
$jfrtylo="select * from settphgh where id='1'";
$kloyvb=mysqli_query($con, $jfrtylo);
$ewdilj=mysqli_fetch_array($kloyvb);
$tiketph=$ewdilj["tiket"];
$jmltiketph=$ewdilj["jmltiket"];
$dpph=$ewdilj["dp"];
if($tiketph=='1'){
$butuhtiket=$jmltiketph;
$sqle = "SELECT FROM tb_users WHERE username='$x1'";
$resulte = mysqli_query($con, $sqle);        
$rowe = mysqli_fetch_array($resulte);
$tiketku=$rowe["saldotiket"];
if($tiketku < $butuhtiket){
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='1'"));
$phname=$ewdilj["nama"];
$skph=$ewdilj["singkatan"];
$ewdiljX= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='2'"));
$ghname=$ewdiljX["nama"];
$skgh=$ewdiljX["singkatan"];
$error = 1;
$errormsg .= "
<b>Sorry, you cannot request $phname !</b><br>
You Dont Have Enaugh Ticket. Please Buy Ticket First!
"; 
} else {}
} else {}
}

function cekGHTiket($x1){
$jfrtylo="select * from settphgh where id='2'";
$kloyvb=mysqli_query($con, $jfrtylo);
$ewdilj=mysqli_fetch_array($kloyvb);
$tiketgh=$ewdilj["tiket"];
$jmltiketgh=$ewdilj["jmltiket"];
$dpph=$ewdilj["dp"];
if($tiketgh=='1'){
$butuhtiket=$jmltiketgh;
$sqle = "SELECT FROM tb_users WHERE username='$x1'";
$resulte = mysqli_query($con, $sqle);        
$rowe = mysqli_fetch_array($resulte);
$tiketku=$rowe["saldotiket"];
if($tiketku < $butuhtiket){
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='1'"));
$phname=$ewdilj["nama"];
$skph=$ewdilj["singkatan"];
$ewdiljX= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='2'"));
$ghname=$ewdiljX["nama"];
$skgh=$ewdiljX["singkatan"];
$error = 1;
$errormsg .= "
<b>Sorry, you cannot request $ghname !</b><br>
You Dont Have Enaugh Ticket. Please Buy Ticket First!
"; 


} else {}
} else {}
}



function cekGHBTiket($x1){
$jfrtylo="select * from settphgh where id='3'";
$kloyvb=mysqli_query($con, $jfrtylo);
$ewdilj=mysqli_fetch_array($kloyvb);
$tiketgh=$ewdilj["tiket"];
$jmltiketgh=$ewdilj["jmltiket"];
$dpph=$ewdilj["dp"];
if($tiketgh=='1'){
$butuhtiket=$jmltiketgh;
$sqle = "SELECT FROM tb_users WHERE username='$x1'";
$resulte = mysqli_query($con, $sqle);        
$rowe = mysqli_fetch_array($resulte);
$tiketku=$rowe["saldotiket"];
if($tiketku < $butuhtiket){
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='1'"));
$phname=$ewdilj["nama"];
$skph=$ewdilj["singkatan"];
$ewdiljX= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='3'"));
$ghname=$ewdiljX["nama"];
$skgh=$ewdiljX["singkatan"];
$error = 1;
$errormsg .= "
<b>Sorry, you cannot request $ghname !</b><br>
You Dont Have Enaugh Ticket. Please Buy Ticket First!
"; 

} else {}
} else {}
}


function acakAngkaHuruf1($panjang)
{
	$karakter= '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$string = '';
	for ($i = 0; $i < $panjang; $i++) {
		$pos = rand(0, strlen($karakter)-1);
		$string .= $karakter{$pos};
	}
	return $string;
}

function acakAngkaHuruf2($panjang)
{
	$karakter= '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$string = '';
	for ($i = 0; $i < $panjang; $i++) {
		$pos = rand(0, strlen($karakter)-1);
		$string .= $karakter{$pos};
	}
	return $string;
}


function cekUpLevel($x1){
$sqle = "SELECT * FROM tb_users WHERE username='$x1'";
$resulte = mysqli_query($con, $sqle);        
$rowe = mysqli_fetch_array($resulte);
$leva = $rowe["leva"];
$levb = $rowe["levb"];
$levc = $rowe["levc"];
$levd = $rowe["levd"];
$leve = $rowe["leve"];
$levf = $rowe["levf"];
$levg = $rowe["levg"];
$levh = $rowe["levh"];
$levi = $rowe["levi"];
$levj = $rowe["levj"];
$upline = $rowe["referer"];
$manager = $rowe["referer"];
$user=$rowe["username"];
$namalengkap=$rowe["namalengkap"];
$email=$rowe["email"];
$phone=$rowe["phone"];
$bbm=$rowe["bbm"];

$bank=$rowe["bank"];
$norek=$rowe["norek"];
$nama=$rowe["nama"];

$bitcoin=$rowe["bitcoin"];
$fasapay=$rowe["fasapay"];
$perfectmoney=$rowe["perfectmoney"];
}



function cekPHon(){
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='1'"));
$phon=$ewdilj["aktif"];
$phname=$ewdilj["nama"];
$skph=$ewdilj["singkatan"];
if($phon=='1'){} else {
$error = 1;
$errormsg .= "
Sorry, $skph Request Was Closed. Please wait to activated. "; 
}
}

function cekGHon(){
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='2'"));
$ghon=$ewdilj["aktif"];
$ghname=$ewdilj["nama"];
$skgh=$ewdilj["singkatan"];
if($ghon=='1'){} else {
$error = 1;
$errormsg .= " Sorry, $skgh Request Was Closed. Please wait to activated."; 
}
}

function cekGHBonuson(){
$ewdilj= mysqli_fetch_array(mysqli_query($con, "select * from settphgh where id='3'"));
$ghbon=$ewdilj["aktif"];
$ghbname=$ewdilj["nama"];
$skghb=$ewdilj["singkatan"];
if($ghbon=='1'){} else {
$error = 1;
$errormsg .= "Sorry, $skghb Request Was Closed. Please wait to activated."; 
}
}





?>
