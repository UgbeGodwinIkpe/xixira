<?php
include "../config/config.php";
global $loggedin;

//*********************************************************************************
// GLOBAL SETTING
//*********************************************************************************

if($_GET['r'])
{
$_SESSION['r'] = $_GET['r'];
}

$user = $_COOKIE['username'];
$sponsor= $_GET['r'];

$laip = $_SERVER['REMOTE_ADDR'];
$eltiempo=time();
$varDomain = $_SERVER['HTTP_HOST'];
$varSelf = $_SERVER['PHP_SELF'];
$varTime = time();
$hari = date("j");
if($hari=='1'){$minggu='1';}
if($hari=='2'){$minggu='1';}
if($hari=='3'){$minggu='1';}
if($hari=='4'){$minggu='1';}
if($hari=='5'){$minggu='1';}
if($hari=='6'){$minggu='1';}
if($hari=='7'){$minggu='1';}
if($hari=='8'){$minggu='2';}
if($hari=='9'){$minggu='2';}
if($hari=='10'){$minggu='2';}
if($hari=='11'){$minggu='2';}
if($hari=='12'){$minggu='2';}
if($hari=='13'){$minggu='2';}
if($hari=='14'){$minggu='2';}
if($hari=='15'){$minggu='3';}
if($hari=='16'){$minggu='3';}
if($hari=='17'){$minggu='3';}
if($hari=='18'){$minggu='3';}
if($hari=='19'){$minggu='3';}
if($hari=='20'){$minggu='3';}
if($hari=='21'){$minggu='3';}
if($hari=='22'){$minggu='4';}
if($hari=='23'){$minggu='4';}
if($hari=='24'){$minggu='4';}
if($hari=='25'){$minggu='4';}
if($hari=='26'){$minggu='4';}
if($hari=='27'){$minggu='4';}
if($hari=='28'){$minggu='4';}
if($hari=='29'){$minggu='4';}
if($hari=='30'){$minggu='4';}
if($hari=='31'){$minggu='4';}
$bulan = date("m");
$tahun = date("Y");
$unik=rand(111,999);





//*********************************************************************************
// WEB SETTING
//*********************************************************************************

$pecahan='1';
$grtecxrgkl="select * from settweb where id='1'";
$uyhasrfg=mysqli_query($con, $grtecxrgkl);
$yugbnatvc=mysqli_fetch_array($uyhasrfg);
$namaweb=$yugbnatvc["nama"];
$config['site_name']=$namaweb;
$emailweb=$yugbnatvc["email"];
$hpweb=$yugbnatvc["phone"];
$namaadmin=$yugbnatvc["namaadmin"];
$alamatweb=$yugbnatvc["alamat"];
$kotaweb=$yugbnatvc["kota"];
$negaraweb=$yugbnatvc["negara"];
$kodeposweb=$yugbnatvc["kodepos"];
$bbweb=$yugbnatvc["bbm"];
$waweb=$yugbnatvc["wa"];
$lineweb=$yugbnatvc["line"];
$fbweb=$yugbnatvc["fb"];
$twweb=$yugbnatvc["twitter"];
$ymweb=$yugbnatvc["ym"];
$sloganweb=$yugbnatvc["tagline"];
$descweb=$yugbnatvc["descweb"];
$keyweb=$yugbnatvc["keyword"];
$bank1=$yugbnatvc["bank1"];
$bank2=$yugbnatvc["bank2"];
$bank3=$yugbnatvc["bank3"];
$bank4=$yugbnatvc["bank4"];
$bank5=$yugbnatvc["bank5"];
$pmweb=$yugbnatvc["pm"];
$btcweb=$yugbnatvc["bitcoin"];
$payeerweb=$yugbnatvc["payeer"];
$fasapayweb=$yugbnatvc["fasapay"];
$egopayweb=$yugbnatvc["egopay"];
$stpweb=$yugbnatvc["stp"];
$pecunixweb=$yugbnatvc["pecunix"];
$paypalweb=$yugbnatvc["paypal"];
$usersmsweb=$yugbnatvc["usersms"];
$apismsweb=$yugbnatvc["apisms"];
$sitekey=$yugbnatvc["sitekey"];
$secretkey=$yugbnatvc["secretkey"];
$chatweb=$yugbnatvc["chatcode"];
$matauang=$yugbnatvc["ecurrency"];
$desimal=$yugbnatvc["desimal"];
$maxemail=$yugbnatvc["maxemail"];
$maxrekening=$yugbnatvc["maxrek"];
$maxhp=$yugbnatvc["maxhp"];
$uploadweb=$yugbnatvc["upload"];
$uploadku=$yugbnatvc["upload"];
$autoblock=$yugbnatvc["autoblock"];
$expph=$yugbnatvc["expiredph"]*3600;
$expgh=$yugbnatvc["expiredapp"]*3600;
$expdp=$yugbnatvc["expireddp"]*3600;
$pairingsistem=$yugbnatvc["pairingsistem"];
$gauthsistem=$yugbnatvc["gauth"];
$tiketsistem=$yugbnatvc["tiketsistem"];
$localec=$yugbnatvc["localec"];
$ratetousd=$yugbnatvc["ratetousd"];


//*********************************************************************************
// PROFIT SETTING
//*********************************************************************************

$yhkmncui="select * from settprofit where id='1'";
$axzvvbtgm=mysqli_query($con, $yhkmncui);
$ncxrygk=mysqli_fetch_array($axzvvbtgm);
$komdaily=$ncxrygk["daily"];
//$komisidaily=$ncxrygk["daily"] / 100;
$releasedate=$ncxrygk["releasedate"];
$komsponsor=$ncxrygk["sponsor"];
$komisisponsor=$ncxrygk["sponsor"] / 100;
$komisifast=$ncxrygk["fast"] / 100;
$fastlimit=$ncxrygk["fasttime"] * 3600;
$komlev1=$ncxrygk["level1"] / 100;
$komlev2=$ncxrygk["level2"] / 100;
$komlev3=$ncxrygk["level3"] / 100;
$komlev4=$ncxrygk["level4"] / 100;
$komlev5=$ncxrygk["level5"] / 100;
$komlev6=$ncxrygk["level6"] / 100;
$komlev7=$ncxrygk["level7"] / 100;
$komlev8=$ncxrygk["level8"] / 100;
$komlev9=$ncxrygk["level9"] / 100;
$komlev10=$ncxrygk["level10"] / 100;
$komlev1a=$ncxrygk["level1"];
$komlev2a=$ncxrygk["level2"];
$komlev3a=$ncxrygk["level3"];
$komlev4a=$ncxrygk["level4"];
$komlev5a=$ncxrygk["level5"];
$komlev6a=$ncxrygk["level6"];
$komlev7a=$ncxrygk["level7"];
$komlev8a=$ncxrygk["level8"];
$komlev9a=$ncxrygk["level9"];
$komlev10a=$ncxrygk["level10"];



//*********************************************************************************
// PH SETTING
//*********************************************************************************

$jfrtylo="select * from settphgh where id='1'";
$kloyvb=mysqli_query($con, $jfrtylo);
$ewdilj=mysqli_fetch_array($kloyvb);
$phon=$ewdilj["aktif"];
$phname=$ewdilj["nama"];
$skph=$ewdilj["singkatan"];
$paketph=$ewdilj["paket"];
$lockph=$ewdilj["lockme"]*3600;
$tiketph=$ewdilj["tiket"];
$dpph=$ewdilj["dp"];
$feeadmin=$ewdilj["jmldp"] / 100;
$jmltiketph=$ewdilj["jmltiket"];
$maximalphdr=$ewdilj["maxday"];
$maximalphwr=$ewdilj["maxweek"];
$maximalphmr=$ewdilj["maxmonth"];
$maximalphdrl=$ewdilj["maxdayl"];
$maximalphwrl=$ewdilj["maxweekl"];
$maximalphmrl=$ewdilj["maxmonthl"];
$maximalphdrm=$ewdilj["maxdaym"];
$maximalphwrm=$ewdilj["maxweekm"];
$maximalphmrm=$ewdilj["maxmonthm"];
$autogh=$ewdilj["autophgh"];



//*********************************************************************************
// GH SETTING
//*********************************************************************************


$jfrtyloe="select * from settphgh where id='2'";
$kloyvbe=mysqli_query($con, $jfrtyloe);
$ewdilje=mysqli_fetch_array($kloyvbe);
$ghon=$ewdilje["aktif"];
$ghname=$ewdilje["nama"];
$skgh=$ewdilje["singkatan"];
$paketgh=$ewdilje["paket"];
$lockgh=$ewdilje["lockme"]*3600;
$tiketgh=$ewdilje["tiket"];
$dpgh=$ewdilje["dp"];
$maximalghdr=$ewdilje["maxday"];
$maximalghwr=$ewdilje["maxweek"];
$maximalghmr=$ewdilje["maxmonth"];
$maximalghdrl=$ewdilje["maxdayl"];
$maximalghwrl=$ewdilje["maxweekl"];
$maximalghmrl=$ewdilje["maxmonthl"];
$maximalghdrm=$ewdilje["maxdaym"];
$maximalghwrm=$ewdilje["maxweekm"];
$maximalghmrm=$ewdilje["maxmonthm"];
$autoph=$ewdilje["autophgh"];
$mingha=$ewdilje["minreq"];
$maxgha=$ewdilje["maxreq"];


//*********************************************************************************
// GH BONUS SETTING
//*********************************************************************************

$jfrtyloeR="select * from settphgh where id='3'";
$kloyvbeR=mysqli_query($con, $jfrtyloeR);
$ewdiljeR=mysqli_fetch_array($kloyvbeR);
$ghbon=$ewdiljeR["aktif"];
$ghbname=$ewdiljeR["nama"];
$skghb=$ewdiljeR["singkatan"];
$paketghb=$ewdiljeR["paket"];
$lockghb=$ewdiljeR["lockme"]*3600;
$tiketghb=$ewdiljeR["tiket"];
$dpghb=$ewdiljeR["dp"];
$maximalghbdr=$ewdiljeR["maxday"];
$maximalghbwr=$ewdiljeR["maxweek"];
$maximalghbmr=$ewdiljeR["maxmonth"];
$maximalghbdrl=$ewdiljeR["maxdayl"];
$maximalghbwrl=$ewdiljeR["maxweekl"];
$maximalghbmrl=$ewdiljeR["maxmonthl"];
$maximalghbdrm=$ewdiljeR["maxdaym"];
$maximalghbwrm=$ewdiljeR["maxweekm"];
$maximalghbmrm=$ewdiljeR["maxmonthm"];
$autophb=$ewdiljeR["autophgh"];
$minghba=$ewdiljeR["minreq"];
$maxghba=$ewdiljeR["maxreq"];



//*********************************************************************************
// MANAGER SETTING
//*********************************************************************************

$jfrtyloex1="select * from settmanager where id='1'";
$kloyvbex1=mysqli_query($con, $jfrtyloex1);
$ewdiljex1=mysqli_fetch_array($kloyvbex1);
$levmgr1=$ewdiljex1["level"];
$namamgr1=$ewdiljex1["nama"];
$minommgr1=$ewdiljex1["minomzet"];
$minphmgr1=$ewdiljex1["minphself"];
$mindowmgr1=$ewdiljex1["mindownline"];
$aktifmgr1=$ewdiljex1["aktif"];
$commgr1=$ewdiljex1["commission"] / 100;


$jfrtyloex2="select * from settmanager where id='2'";
$kloyvbex2=mysqli_query($con, $jfrtyloex2);
$ewdiljex2=mysqli_fetch_array($kloyvbex2);
$levmgr2=$ewdiljex2["level"];
$namamgr2=$ewdiljex2["nama"];
$minommgr2=$ewdiljex2["minomzet"];
$minphmgr2=$ewdiljex2["minphself"];
$mindowmgr2=$ewdiljex2["mindownline"];
$aktifmgr2=$ewdiljex2["aktif"];
$commgr2=$ewdiljex2["commission"] / 100;


$jfrtyloex3="select * from settmanager where id='3'";
$kloyvbex3=mysqli_query($con, $jfrtyloex3);
$ewdiljex3=mysqli_fetch_array($kloyvbex3);
$levmgr3=$ewdiljex3["level"];
$namamgr3=$ewdiljex3["nama"];
$minommgr3=$ewdiljex3["minomzet"];
$minphmgr3=$ewdiljex3["minphself"];
$mindowmgr3=$ewdiljex3["mindownline"];
$aktifmgr3=$ewdiljex3["aktif"];
$commgr3=$ewdiljex3["commission"] / 100;


$jfrtyloex4="select * from settmanager where id='4'";
$kloyvbex4=mysqli_query($con, $jfrtyloex4);
$ewdiljex4=mysqli_fetch_array($kloyvbex4);
$levmgr4=$ewdiljex4["level"];
$namamgr4=$ewdiljex4["nama"];
$minommgr4=$ewdiljex4["minomzet"];
$minphmgr4=$ewdiljex4["minphself"];
$mindowmgr4=$ewdiljex4["mindownline"];
$aktifmgr4=$ewdiljex4["aktif"];
$commgr4=$ewdiljex4["commission"] / 100;


$jfrtyloex5="select * from settmanager where id='5'";
$kloyvbex5=mysqli_query($con, $jfrtyloex5);
$ewdiljex5=mysqli_fetch_array($kloyvbex5);
$levmgr5=$ewdiljex5["level"];
$namamgr5=$ewdiljex5["nama"];
$minommgr5=$ewdiljex5["minomzet"];
$minphmgr5=$ewdiljex5["minphself"];
$mindowmgr5=$ewdiljex5["mindownline"];
$aktifmgr5=$ewdiljex5["aktif"];
$commgr5=$ewdiljex5["commission"] / 100;


$jfrtyloex6="select * from settmanager where id='6'";
$kloyvbex6=mysqli_query($con, $jfrtyloex6);
$ewdiljex6=mysqli_fetch_array($kloyvbex6);
$levmgr6=$ewdiljex6["level"];
$namamgr6=$ewdiljex6["nama"];
$minommgr6=$ewdiljex6["minomzet"];
$minphmgr6=$ewdiljex6["minphself"];
$mindowmgr6=$ewdiljex6["mindownline"];
$aktifmgr6=$ewdiljex6["aktif"];
$commgr6=$ewdiljex6["commission"] / 100;


$jfrtyloex7="select * from settmanager where id='7'";
$kloyvbex7=mysqli_query($con, $jfrtyloex7);
$ewdiljex7=mysqli_fetch_array($kloyvbex7);
$levmgr7=$ewdiljex7["level"];
$namamgr7=$ewdiljex7["nama"];
$minommgr7=$ewdiljex7["minomzet"];
$minphmgr7=$ewdiljex7["minphself"];
$mindowmgr7=$ewdiljex7["mindownline"];
$aktifmgr7=$ewdiljex7["aktif"];
$commgr7=$ewdiljex7["commission"] / 100;


$jfrtyloex8="select * from settmanager where id='8'";
$kloyvbex8=mysqli_query($con, $jfrtyloex8);
$ewdiljex8=mysqli_fetch_array($kloyvbex8);
$levmgr8=$ewdiljex8["level"];
$namamgr8=$ewdiljex8["nama"];
$minommgr8=$ewdiljex8["minomzet"];
$minphmgr8=$ewdiljex8["minphself"];
$mindowmgr8=$ewdiljex8["mindownline"];
$aktifmgr8=$ewdiljex8["aktif"];
$commgr8=$ewdiljex8["commission"] / 100;


$jfrtyloex9="select * from settmanager where id='9'";
$kloyvbex9=mysqli_query($con, $jfrtyloex9);
$ewdiljex9=mysqli_fetch_array($kloyvbex9);
$levmgr9=$ewdiljex9["level"];
$namamgr9=$ewdiljex9["nama"];
$minommgr9=$ewdiljex9["minomzet"];
$minphmgr9=$ewdiljex9["minphself"];
$mindowmgr9=$ewdiljex9["mindownline"];
$aktifmgr9=$ewdiljex9["aktif"];
$commgr9=$ewdiljex9["commission"] / 100;


$jfrtyloex10="select * from settmanager where id='10'";
$kloyvbex10=mysqli_query($con, $jfrtyloex10);
$ewdiljex10=mysqli_fetch_array($kloyvbex10);
$levmgr10=$ewdiljex10["level"];
$namamgr10=$ewdiljex10["nama"];
$minommgr10=$ewdiljex10["minomzet"];
$minphmgr10=$ewdiljex10["minphself"];
$mindowmgr10=$ewdiljex10["mindownline"];
$aktifmgr10=$ewdiljex10["aktif"];
$commgr10=$ewdiljex10["commission"] / 100;



//*********************************************************************************
// LOCK SETTING
//*********************************************************************************


mysqli_query($con, "UPDATE tb_ph SET status='pending' WHERE lockph < '$eltiempo' and status='dikunci'") or die(mysqli_error($con));
mysqli_query($con, "UPDATE tb_gh SET status='pending' WHERE lockgh < '$eltiempo' and status='dikunci'") or die(mysqli_error($con));






//*********************************************************************************
// PAIRING SETTING
//*********************************************************************************

if($pairingsistem == "1"){

$skrg=time();
$tablaz = mysqli_query($con, "SELECT * FROM tb_gh where saldo >'0' and status='pending' and jenis!='9' order by rand() limit 0,1"); 
while ($registroz = mysqli_fetch_array($tablaz)) { 
$kurirz=$registroz["username"];
$biayaz=$registroz["saldo"];
$idnyaz=$registroz["id"];
$bankeem=$registroz["bank"];
$norekeem=$registroz["norek"];
$bitcoineem=$registroz["bitcoin"];
$pmeem=$registroz["perfectmoney"];
$fasapayeem=$registroz["fasapay"];
$namaeem=$registroz["nama"];
$phoneeem=$registroz["phone"];
$emaileem=$registroz["email"];
$paketzeem=$biayaz*$pecahan;
$surabaya=$paketzeem/$pecahan;

$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc1=$paketzeem / $rate;


$tabla = mysqli_query($con, "SELECT * FROM tb_ph where status='pending' and username!='$kurirz' and saldo > '0' and jenis!='9' ORDER by id ASC limit 0,1"); 
while ($registro = mysqli_fetch_array($tabla)) { 
$kuriree=$registro["username"];
$biayaee=$registro["saldo"];
$idnyaee=$registro["id"];
$bankee=$registro["bank"];
$norekee=$registro["norek"];
$bitcoinee=$registro["bitcoin"];
$pmee=$registro["perfectmoney"];
$fasapayee=$registro["fasapay"];
$namaee=$registro["nama"];
$phoneee=$registro["phone"];
$emailee=$registro["email"];
$mangkosim=$registro["upline"];
$paketzee=$biayaee*$pecahan;
$surabayae=$paketzee/$pecahan;
if($biayaee > $biayaz){ $hasileksekusi="0";} else 
if($biayaee < $biayaz){ $hasileksekusi="1";} else 
if($biayaee == $biayaz){ $hasileksekusi="2";} 
$da=date("m");
$daek = date("j");
$waktutt=$expph;
$eltiempo=time();
$exp=$eltiempo+$waktutt;
$dilockezqee=$lockph;
$unikee=rand(111,999);

function acakwedok($panjang)
{
	$karakter= '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$string = '';
	for ($i = 0; $i < $panjang; $i++) {
		$pos = rand(0, strlen($karakter)-1);
		$string .= $karakter{$pos};
	}
	return $string;
}
$unikeef=acakwedok(12);

$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc2=$paketzee / $rate;

if($hasileksekusi == "0"){
$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc1=$paketzeem / $rate;
$convertbtc2=$paketzee / $rate;
$queryteryoked = "INSERT INTO tb_beli (username, bank, norek, nama, ec, bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, referer, iddb, date, ip, exp, unik,idph, upline, token) 
VALUES('$kuriree','$bankee','$norekee','$namaee','$matauang','$bitcoinee', '$pmee', '$fasapayee', '$paketzeem', '$surabaya', '$convertbtc1', '$phoneee', '$emailee', 'pending', '$kurirz', '$idnyaz', '$skrg', '$laip', '$exp','$unikee','$idnyaee','$mangkosim','$unikeef')";
mysqli_query($con, $queryteryoked);

$queryteryokedi = "INSERT INTO tb_jual (username, bank, norek, nama, ec, bitcoin, perfectmoney, fasapay,  paket, saldo, amountbtc, phone, email, status, date, ip, idgh, token) 
VALUES('$kurirz','$bankeem','$norekeem','$namaeem','$matauang','$bitcoineem', '$pmeem', '$fasapayeem', '$paketzeem', '$surabaya', '$convertbtc1','$phoneeem', '$emaileem', 'tunggu transfer', '$skrg', '$laip', '$idnyaz','$unikeef')";
mysqli_query($con, $queryteryokedi);

mysqli_query($con, "UPDATE tb_ph SET saldo=saldo-'$surabaya' where id='$idnyaee' ") or die(mysqli_error($con));
mysqli_query($con, "UPDATE tb_gh SET saldo=saldo-'$surabaya' where id='$idnyaz'") or die(mysqli_error($con));
} else

if($hasileksekusi == "1"){
$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc1=$paketzeem / $rate;
$convertbtc2=$paketzee / $rate;
$queryteryoked = "INSERT INTO tb_beli (username, bank, norek, nama, ec,  bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, referer, iddb, date, ip, exp, unik,idph, upline, token) 
VALUES('$kuriree','$bankee','$norekee','$namaee','$matauang', '$bitcoinee', '$pmee', '$fasapayee', '$paketzee', '$surabayae', '$convertbtc2','$phoneee', '$emailee', 'pending', '$kurirz', '$idnyaz', '$skrg', '$laip', '$exp','$unikee','$idnyaee','$mangkosim','$unikeef')";
mysqli_query($con, $queryteryoked);

$queryteryokedi = "INSERT INTO tb_jual (username, bank, norek, nama, ec,  bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, date, ip, idgh, token) 
VALUES('$kurirz','$bankeem','$norekeem','$namaeem','$matauang','$bitcoineem', '$pmeem', '$fasapayeem', '$paketzee', '$surabayae', '$convertbtc2','$phoneeem', '$emaileem', 'tunggu transfer', '$skrg', '$laip', '$idnyaz','$unikeef')";
mysqli_query($con, $queryteryokedi);

mysqli_query($con, "UPDATE tb_ph SET saldo=saldo-'$surabayae' where id='$idnyaee' ") or die(mysqli_error($con));
mysqli_query($con, "UPDATE tb_gh SET saldo=saldo-'$surabayae' where id='$idnyaz'") or die(mysqli_error($con));

} else

if($hasileksekusi == "2"){
$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc1=$paketzeem / $rate;
$convertbtc2=$paketzee / $rate;
$queryteryoked = "INSERT INTO tb_beli (username, bank, norek, nama, ec,  bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, referer, iddb, date, ip, exp, unik,idph, upline, token) 
VALUES('$kuriree','$bankee','$norekee','$namaee','$matauang','$bitcoinee', '$pmee', '$fasapayee', '$paketzee', '$surabayae', '$convertbtc2','$phoneee', '$emailee', 'pending', '$kurirz', '$idnyaz', '$skrg', '$laip', '$exp','$unikee','$idnyaee','$mangkosim','$unikeef')";
mysqli_query($con, $queryteryoked);

$queryteryokedi = "INSERT INTO tb_jual (username, bank, norek, nama, ec,  bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, date, ip, idgh, token) 
VALUES('$kurirz','$bankeem','$norekeem','$namaeem','$matauang','$bitcoineem', '$pmeem', '$fasapayeem', '$paketzee', '$surabayae', '$convertbtc2','$phoneeem', '$emaileem', 'tunggu transfer', '$skrg', '$laip', '$idnyaz','$unikeef')";
mysqli_query($con, $queryteryokedi);

mysqli_query($con, "UPDATE tb_ph SET saldo=saldo-'$surabayae' where id='$idnyaee' ") or die(mysqli_error($con));
mysqli_query($con, "UPDATE tb_gh SET saldo=saldo-'$surabayae' where id='$idnyaz'") or die(mysqli_error($con));

}
else {}
}}}

else {

if($pairingsistem == "2"){

$skrg=time();
$tablaz = mysqli_query($con, "SELECT * FROM tb_gh where saldo >'0' and status='pending'  and jenis!='9' order by rand() limit 0,1"); 
while ($registroz = mysqli_fetch_array($tablaz)) { 
$kurirz=$registroz["username"];
$biayaz=$registroz["saldo"];
$idnyaz=$registroz["id"];
$bankeem=$registroz["bank"];
$norekeem=$registroz["norek"];
$bitcoineem=$registroz["bitcoin"];
$pmeem=$registroz["perfectmoney"];
$fasapayeem=$registroz["fasapay"];
$namaeem=$registroz["nama"];
$phoneeem=$registroz["phone"];
$emaileem=$registroz["email"];
$paketzeem=$biayaz*$pecahan;
$surabaya=$paketzeem/$pecahan;
$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc1=$paketzeem / $rate;
$tabla = mysqli_query($con, "SELECT * FROM tb_ph where status='pending' and username!='$kurirz' and saldo > '0'  and jenis!='9'  ORDER by rand() limit 0,1"); 
while ($registro = mysqli_fetch_array($tabla)) { 
$kuriree=$registro["username"];
$biayaee=$registro["saldo"];
$idnyaee=$registro["id"];
$bankee=$registro["bank"];
$norekee=$registro["norek"];
$bitcoinee=$registro["bitcoin"];
$pmee=$registro["perfectmoney"];
$fasapayee=$registro["fasapay"];
$namaee=$registro["nama"];
$phoneee=$registro["phone"];
$emailee=$registro["email"];
$mangkosim=$registro["upline"];
$paketzee=$biayaee*$pecahan;
$surabayae=$paketzee/$pecahan;
if($biayaee > $biayaz){ $hasileksekusi="0";} else 
if($biayaee < $biayaz){ $hasileksekusi="1";} else 
if($biayaee == $biayaz){ $hasileksekusi="2";} 
$da=date("m");
$daek = date("j");
$waktutt=$expph;
$eltiempo=time();
$exp=$eltiempo+$waktutt;
$dilockezqee=$lockph;
$unikee=rand(111,999);

function acakwedok($panjang)
{
	$karakter= '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$string = '';
	for ($i = 0; $i < $panjang; $i++) {
		$pos = rand(0, strlen($karakter)-1);
		$string .= $karakter{$pos};
	}
	return $string;
}
$unikeef=acakwedok(12);

$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc2=$paketzee / $rate;

if($hasileksekusi == "0"){
$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc1=$paketzeem / $rate;
$convertbtc2=$paketzee / $rate;
$queryteryoked = "INSERT INTO tb_beli (username, bank, norek, nama, ec, bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, referer, iddb, date, ip, exp, unik,idph, upline, token) 
VALUES('$kuriree','$bankee','$norekee','$namaee','$matauang','$bitcoinee', '$pmee', '$fasapayee', '$paketzeem', '$surabaya', '$convertbtc1','$phoneee', '$emailee', 'pending', '$kurirz', '$idnyaz', '$skrg', '$laip', '$exp','$unikee','$idnyaee','$mangkosim','$unikeef')";
mysqli_query($con, $queryteryoked);

$queryteryokedi = "INSERT INTO tb_jual (username, bank, norek, nama, ec, bitcoin, perfectmoney, fasapay,  paket, saldo, amountbtc, phone, email, status, date, ip, idgh, token) 
VALUES('$kurirz','$bankeem','$norekeem','$namaeem','$matauang','$bitcoineem', '$pmeem', '$fasapayeem', '$paketzeem', '$surabaya', '$convertbtc1','$phoneeem', '$emaileem', 'tunggu transfer', '$skrg', '$laip', '$idnyaz','$unikeef')";
mysqli_query($con, $queryteryokedi);

mysqli_query($con, "UPDATE tb_ph SET saldo=saldo-'$surabaya' where id='$idnyaee' ") or die(mysqli_error($con));
mysqli_query($con, "UPDATE tb_gh SET saldo=saldo-'$surabaya' where id='$idnyaz'") or die(mysqli_error($con));
} else

if($hasileksekusi == "1"){
$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc1=$paketzeem / $rate;
$convertbtc2=$paketzee / $rate;
$queryteryoked = "INSERT INTO tb_beli (username, bank, norek, nama, ec,  bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, referer, iddb, date, ip, exp, unik,idph, upline, token) 
VALUES('$kuriree','$bankee','$norekee','$namaee','$matauang', '$bitcoinee', '$pmee', '$fasapayee', '$paketzee', '$surabayae', '$convertbtc2','$phoneee', '$emailee', 'pending', '$kurirz', '$idnyaz', '$skrg', '$laip', '$exp','$unikee','$idnyaee','$mangkosim','$unikeef')";
mysqli_query($con, $queryteryoked);

$queryteryokedi = "INSERT INTO tb_jual (username, bank, norek, nama, ec,  bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, date, ip, idgh, token) 
VALUES('$kurirz','$bankeem','$norekeem','$namaeem','$matauang','$bitcoineem', '$pmeem', '$fasapayeem', '$paketzee', '$surabayae', '$convertbtc2','$phoneeem', '$emaileem', 'tunggu transfer', '$skrg', '$laip', '$idnyaz','$unikeef')";
mysqli_query($con, $queryteryokedi);

mysqli_query($con, "UPDATE tb_ph SET saldo=saldo-'$surabayae' where id='$idnyaee' ") or die(mysqli_error($con));
mysqli_query($con, "UPDATE tb_gh SET saldo=saldo-'$surabayae' where id='$idnyaz'") or die(mysqli_error($con));

} else

if($hasileksekusi == "2"){
$api = "https://blockchain.info/ticker";
$json = file_get_contents($api);
$data = json_decode($json, TRUE);
$rate = $data["USD"]["15m"];
$symbol = $data["USD"]["symbol"];
$convertbtc1=$paketzeem / $rate;
$convertbtc2=$paketzee / $rate;
$queryteryoked = "INSERT INTO tb_beli (username, bank, norek, nama, ec,  bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, referer, iddb, date, ip, exp, unik,idph, upline, token) 
VALUES('$kuriree','$bankee','$norekee','$namaee','$matauang','$bitcoinee', '$pmee', '$fasapayee', '$paketzee', '$surabayae', '$convertbtc2','$phoneee', '$emailee', 'pending', '$kurirz', '$idnyaz', '$skrg', '$laip', '$exp','$unikee','$idnyaee','$mangkosim','$unikeef')";
mysqli_query($con, $queryteryoked);

$queryteryokedi = "INSERT INTO tb_jual (username, bank, norek, nama, ec,  bitcoin, perfectmoney, fasapay, paket, saldo, amountbtc, phone, email, status, date, ip, idgh, token) 
VALUES('$kurirz','$bankeem','$norekeem','$namaeem','$matauang','$bitcoineem', '$pmeem', '$fasapayeem', '$paketzee', '$surabayae', '$convertbtc2','$phoneeem', '$emaileem', 'tunggu transfer', '$skrg', '$laip', '$idnyaz','$unikeef')";
mysqli_query($con, $queryteryokedi);

mysqli_query($con, "UPDATE tb_ph SET saldo=saldo-'$surabayae' where id='$idnyaee' ") or die(mysqli_error($con));
mysqli_query($con, "UPDATE tb_gh SET saldo=saldo-'$surabayae' where id='$idnyaz'") or die(mysqli_error($con));

}
else {}
}}}

}



//*********************************************************************************
// EXPIRED DONT TRANSFER SETTING
//*********************************************************************************

$skrg=time();
$queryf="select * from tb_beli where exp < '$skrg' and exp != '' and referer !='' and iddb !='' and status='pending'";
$result=mysqli_query($con, $queryf);
while ($rowf=mysqli_fetch_array($result)) {
$namaibubu=$rowf["username"];
$idbubu=$rowf["id"];
$idkolbu=$rowf["iddb"];
mysqli_query($con, "UPDATE tb_users SET suspend='1' WHERE username='$namaibubu'") or die(mysqli_error($con));
mysqli_query($con, "UPDATE tb_jual SET status='problem' WHERE id='$idkolbu'") or die(mysqli_error($con));
mysqli_query($con, "UPDATE tb_beli SET status='problem', reason='Time Out' WHERE id='$idbubu'") or die(mysqli_error($con));
}


//*********************************************************************************
// AUTO APPROVE SETTING
//*********************************************************************************

$skrg=time();
$queryf="select * from tb_beli where autoapp < '$skrg' and autoapp != '' and referer !='' and iddb !='' and status='pending'";
$result=mysqli_query($con, $queryf);
while ($rowf=mysqli_fetch_array($result)) {
$namaibubu=$rowf["username"];
$idbubu=$rowf["id"];
$idkolbu=$rowf["iddb"];
$sldcv=$rowf["saldo"];
$phcv=$rowf["idph"];
$ghcv=$rowf["iddb"];
$tkncv=$rowf["token"];
mysqli_query($con, "UPDATE tb_beli SET status='sukses', saldo=saldo-'$sldcv', verify='$skrg', exp='', autoapp='' WHERE id='$idbubu'") or die(mysqli_error($con));
mysqli_query($con, "UPDATE tb_ph SET sisa=sisa-'$sldcv' WHERE id='$phcv'") or die(mysqli_error($con));
mysqli_query($con, "UPDATE tb_jual SET status='sukses', saldo='0' WHERE token='$tkncv'") or die(mysqli_error($con));
mysqli_query($con, "UPDATE tb_gh SET sisa=sisa-'$sldcv' WHERE id='$ghcv'") or die(mysqli_error($con));
}



//*********************************************************************************
// SENT DAILY PROFIT SETTING
//*********************************************************************************


$skrg=time();
$nextprofku=$skrg + 86400;
$queryfqgggg="select * from tb_ph where status='sukses' and statusprofit='aktif' and totalprofit > '0' and dpro < '$skrg'";
$resultgggg=mysqli_query($con, $queryfqgggg);
while ($rowfgggg=mysqli_fetch_array($resultgggg)) {
$idbuqqgggg=$rowfgggg["id"];
$idbuqqggggx=$rowfgggg["idtrx"];
$userphjang=$rowfgggg["username"];
$paketphjang=$rowfgggg["paket"];
$profitphjang=$rowfgggg["profit"];
$profitphke=$rowfgggg["totalprofit"];
mysqli_query($con, "UPDATE tb_users SET money=money+'$profitphjang' WHERE username='$userphjang'") or die(mysqli_error($con));
mysqli_query($con, "UPDATE tb_ph SET totalprofit=totalprofit-'1',dpro='$nextprofku', readygh=readygh + '$profitphjang'  where id='$idbuqqgggg'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip, jenis,idph) VALUES('','$userphjang', 'Profit Growht $phname $idbuqqggggx', '$paketphjang','$profitphjang','$eltiempo','$laip','1','$idbuqqgggg' )";
mysqli_query($con, $query);
}


//*********************************************************************************
// SENT FAST TRANSFER PROFIT SETTING
//*********************************************************************************

$queryfqgggg="select * from tb_beli where status='sukses' and verify!='' and komisifast=''";
$resultgggg=mysqli_query($con, $queryfqgggg);
while ($rowfgggg=mysqli_fetch_array($resultgggg)) {
$idbuji=$rowfgggg["id"];
$pazph=$rowfgggg["paket"];
$userphjy=$rowfgggg["username"];
$userghjy=$rowfgggg["referer"];
$dateph=$rowfgggg["date"];
$verifyph=$rowfgggg["verify"];
$ceklucky=$verifyph - $dateph;
$duitkom=$pazph * $komisifast;

if($ceklucky > $fastlimit){} else {

mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$duitkom' WHERE username='$userphjy'") or die(mysqli_error($con));
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$duitkom' WHERE username='$userghjy'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$userphjy', 'Fast Transfer Commission PH $idbuji $userphjy', '$pazph','$duitkom','$eltiempo','$laip' )";
mysqli_query($con, $query);
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$userghjy', 'Fast Transfer Commission PH $idbuji $userphjy', '$pazph','$duitkom','$eltiempo','$laip' )";
mysqli_query($con, $query);
mysqli_query($con, "UPDATE tb_beli SET komisifast='1' WHERE id='$idbuji'") or die(mysqli_error($con));
}
}



//*********************************************************************************
// SENT PROFIT UPLINE AND MANAGER SETTING
//*********************************************************************************


$skrg=time();
$probesok=$skrg + 86400;
$queryfqgggg="select * from tb_ph where saldo='0' and sisa='0' and status='pending' and eksekusi!='1'";
$resultgggg=mysqli_query($con, $queryfqgggg);
while ($rowfgggg=mysqli_fetch_array($resultgggg)) {
$idbuqqgggg=$rowfgggg["id"];
$userphjang=$rowfgggg["username"];
$uplph=$rowfgggg["upline"];
$pakeat=$rowfgggg["paket"];
$paketphjang=$rowfgggg["paket"];


$yhkmncui="select * from settprofit where id='1'";
$axzvvbtgm=mysqli_query($con, $yhkmncui);
$ncxrygk=mysqli_fetch_array($axzvvbtgm);
$komdaily=$ncxrygk["daily"];
$komisidaily=$ncxrygk["daily"] / 100;
$jmlprofit=$ncxrygk["releasedate"];


$komgrl1=$pakeat * $commgr1; 
$komgrl2=$pakeat * $commgr2;
$komgrl3=$pakeat * $commgr3;
$komgrl4=$pakeat * $commgr4;
$komgrl5=$pakeat * $commgr5;
$komgrl6=$pakeat * $commgr6; 
$komgrl7=$pakeat * $commgr7;
$komgrl8=$pakeat * $commgr8;
$komgrl9=$pakeat * $commgr9;
$komgrl10=$pakeat * $commgr10;
$komspoleo=$pakeat * $komisisponsor;
$komlev1leo=$pakeat * $komlev1;
$komlev2leo=$pakeat * $komlev2;
$komlev3leo=$pakeat * $komlev3;
$komlev4leo=$pakeat * $komlev4;
$komlev5leo=$pakeat * $komlev5;
$komlev6leo=$pakeat * $komlev6;
$komlev7leo=$pakeat * $komlev7;
$komlev8leo=$pakeat * $komlev8;
$komlev9leo=$pakeat * $komlev9;
$komlev10leo=$pakeat * $komlev10;


$queryleo="select * from tb_users where username='$userphjang'";
$resultleo=mysqli_query($con, $queryleo);
$rowleox=mysqli_fetch_array($resultleo);
$sponsorleo=$rowleox["referer"];

$queryleos="select * from tb_users where username='$sponsorleo'";
$resultleos=mysqli_query($con, $queryleos);
$rowleos=mysqli_fetch_array($resultleos);
$managerga=$rowleo["manager"];
$managergal=$rowleo["levmgr"];
$lev1leo=$rowleo["leva"];
$lev2leo=$rowleo["levb"];
$lev3leo=$rowleo["levc"];
$lev4leo=$rowleo["levd"];
$lev5leo=$rowleo["leve"];
$lev6leo=$rowleo["levf"];
$lev7leo=$rowleo["levg"];
$lev8leo=$rowleo["levh"];
$lev9leo=$rowleo["levi"];
$lev10leo=$rowleo["levj"];


if($managerga=='1'){

if($managergal=='1'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komgrl1' WHERE username='$sponsorleo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$sponsorleo', 'Manager 1 Commission PH User $userphjang', '$paketphjang','$komgrl1','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else 
if($managergal=='2'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komgrl2' WHERE username='$sponsorleo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$sponsorleo', 'Manager 2 Commission PH User $userphjang', '$paketphjang','$komgrl2','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else
if($managergal=='3'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komgrl3' WHERE username='$sponsorleo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$sponsorleo', 'Manager 3 Commission PH User $userphjang', '$paketphjang','$komgrl3','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else 
if($managergal=='4'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komgrl4' WHERE username='$sponsorleo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$sponsorleo', 'Manager 4 Commission PH User $userphjang', '$paketphjang','$komgrl4','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else 
if($managergal=='5'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komgrl5' WHERE username='$sponsorleo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$sponsorleo', 'Manager 5 Commission PH User $userphjang', '$paketphjang','$komgrl5','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else {}
if($managergal=='6'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komgrl6' WHERE username='$sponsorleo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$sponsorleo', 'Manager 6 Commission PH User $userphjang', '$paketphjang','$komgrl6','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else {}
if($managergal=='7'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komgrl7' WHERE username='$sponsorleo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$sponsorleo', 'Manager 7 Commission PH User $userphjang', '$paketphjang','$komgrl7','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else {}
if($managergal=='8'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komgrl8' WHERE username='$sponsorleo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$sponsorleo', 'Manager 8 Commission PH User $userphjang', '$paketphjang','$komgrl8','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else {}
if($managergal=='9'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komgrl9' WHERE username='$sponsorleo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$sponsorleo', 'Manager 9 Commission PH User $userphjang', '$paketphjang','$komgrl9','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else {}
if($managergal=='10'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komgrl10' WHERE username='$sponsorleo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$sponsorleo', 'Manager 10 Commission PH User $userphjang', '$paketphjang','$komgrl10','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else {}
} else {}


if($sponsorleo!=''){
if($komspoleo!='0'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komspoleo' WHERE username='$sponsorleo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$sponsorleo', 'Sponsor Commission PH User $userphjang', '$paketphjang','$komspoleo','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else {}
} else {}


if($lev1leo!=''){
if($komlev1leo!='0'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komlev1leo' WHERE username='$lev1leo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev1leo', 'Lev 1 Commission PH User $userphjang', '$paketphjang','$komlev1leo','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else {}
} else {}

if($lev2leo!=''){
if($komlev2leo!='0'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komlev2leo' WHERE username='$lev2leo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev2leo', 'Lev 2 Commission PH User $userphjang', '$paketphjang','$komlev2leo','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else {}
} else {}

if($lev3leo!=''){
if($komlev3leo!='0'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komlev3leo' WHERE username='$lev3leo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev3leo', 'Lev 3 Commission PH User $userphjang', '$paketphjang','$komlev3leo','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else {}
} else {}

if($lev4leo!=''){
if($komlev4leo!='0'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komlev4leo' WHERE username='$lev4leo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev1leo', 'Lev 4 Commission PH User $userphjang', '$paketphjang','$komlev4leo','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else {}
} else {}

if($lev5leo!=''){
if($komlev5leo!='0'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komlev5leo' WHERE username='$lev5leo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev5leo', 'Lev 5 Commission PH User $userphjang', '$paketphjang','$komlev5leo','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else {}
} else {}

if($lev6leo!=''){
if($komlev6leo!='0'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komlev6leo' WHERE username='$lev6leo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev6leo', 'Lev 6 Commission PH User $userphjang', '$paketphjang','$komlev6leo','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else {}
} else {}

if($lev7leo!=''){
if($komlev7leo!='0'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komlev7leo' WHERE username='$lev7leo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev7leo', 'Lev 7 Commission PH User $userphjang', '$paketphjang','$komlev7leo','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else {}
} else {}

if($lev8leo!=''){
if($komlev8leo!='0'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komlev8leo' WHERE username='$lev8leo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev8leo', 'Lev 8 Commission PH User $userphjang', '$paketphjang','$komlev8leo','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else {}
} else {}

if($lev9leo!=''){
if($komlev9leo!='0'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komlev9leo' WHERE username='$lev9leo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev9leo', 'Lev 9 Commission PH User $userphjang', '$paketphjang','$komlev9leo','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else {}
} else {}

if($lev10leo!=''){
if($komlev10leo!='0'){
mysqli_query($con, "UPDATE tb_users SET moneys=moneys+'$komlev10leo' WHERE username='$lev10leo'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip) VALUES('','$lev10leo', 'Lev 10 Commission PH User $userphjang', '$paketphjang','$komlev10leo','$eltiempo','$laip' )";
mysqli_query($con, $query);
} else {}
} else {}


mysqli_query($con, "UPDATE tb_ph SET status='sukses', statusprofit='aktif', verify='$eltiempo', readygh='$pakeat', dpro='$probesok', eksekusi='1' WHERE id='$idbuqqgggg'") or die(mysqli_error($con));
mysqli_query($con, "UPDATE tb_users SET money=money+'$paketphjang' WHERE username='$userphjang'") or die(mysqli_error($con));
$query = "INSERT INTO `profit` (id, username, nama, jumlah, komisi, date, ip, jenis, idph) VALUES('','$userphjang', 'Return Principal $skph Amount', '$paketphjang','$paketphjang','$eltiempo','$laip', '1', '$idbuqqgggg' )";
mysqli_query($con, $query);
}


//*********************************************************************************
// PH FINISH SETTING AND REFUND PH AMOUNT
//*********************************************************************************

$skrg=time();
$nextprofku=$skrg + 86400;
$queryfqgggg="select * from tb_ph where status='sukses' and statusprofit='aktif' and totalprofit ='0' and refund=''";
$resultgggg=mysqli_query($con, $queryfqgggg);
while ($rowfgggg=mysqli_fetch_array($resultgggg)) {
$idbuqqgggg=$rowfgggg["id"];
mysqli_query($con, "UPDATE tb_ph SET statusprofit='selesai',refund='1' where id='$idbuqqgggg'") or die(mysqli_error($con));
}


//*********************************************************************************
// GH FINISH SETTING
//*********************************************************************************

mysqli_query($con, "UPDATE tb_gh SET status='sukses' WHERE saldo='0' and sisa='0' and status='pending'") or die(mysqli_error($con));



//*********************************************************************************
// PAYMENT FUNCTION SETTING
//*********************************************************************************

if($bank1!=''){$showbank1=$bank1;} else {$showbank1='';}
if($bank2!=''){$showbank2=' $bank2 <br> ';} else {$showbank2='';}
if($bank3!=''){$showbank3=' $bank3 <br> ';} else {$showbank3='';}
if($bank4!=''){$showbank4=' $bank4 <br> ';} else {$showbank4='';}
if($bank5!=''){$showbank5=' $bank5 <br> ';} else {$showbank5='';}
if($pmweb!=''){$showpm=' $pmweb <br> ';} else {$showpm='';}
if($btcweb!=''){$showbtc=' $btcweb <br> ';} else {$showbtc='';}
if($payeerweb!=''){$showpy=' $payeerweb <br> ';} else {$showpy='';}
if($fasapayweb!=''){$showfasa=' $fasapayweb <br> ';} else {$showfasa='';}
if($egopayweb!=''){$showego=' $egopayweb <br> ';} else {$showego='';}
if($stpweb!=''){$showstp=' $stpweb <br> ';} else {$showstp='';}
if($pecunixweb!=''){$showpc=' $pecunixweb <br> ';} else {$showpc='';}
if($paypalweb!=''){$showpp=' $paypalweb <br> ';} else {$showppp='';}


function saiful($string) {
   // $string = stripslashes($string);
   // $string = strip_tags($string);
  // $string = htmlspecialchars($string);
  // $string = mysqli_real_escape_string($con, $string);
    return $string;
}


//*********************************************************************************
// UPDATE BLANK FUNCTION SETTING
//*********************************************************************************

//mysqli_query($con, "UPDATE tb_users SET avatar='http://i68.tinypic.com/2yw7juq.jpg' WHERE avatar=''") or die(mysqli_error($con));
//mysqli_query($con, "UPDATE tb_users SET saldotiket='0' WHERE saldotiket=''") or die(mysqli_error($con));
//mysqli_query($con, "UPDATE tb_beli SET pic='http://i68.tinypic.com/2mw9dhg.png' WHERE pic=''") or die(mysqli_error($con));


?>