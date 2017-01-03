<?php
session_start();
error_reporting(0);

$site_title = " maazika ";

// using banned in role will show user that he is banned when he try to login .
$users = array(
               "666" => array("name" => "Yousaf", "role"=> "admin"),
               "666" => array("name" => "Abdullah", "role"=> "admin"),
               );

if(isset($_SESSION['logged']) && !isset($users[$_SESSION['password']]) || $users[$_SESSION['password']]['role'] == 'banned'){
      unset($_SESSION['logged']);
      unset($_SESSION['password']);
      unset($_SESSION['username']);
}

if(!isset($_SESSION['logged']) || $_SESSION['logged'] ==  false){
	$showlogin = true;
	$loginerror = "";

   if(isset($_POST['password'])){

      $password = $_POST['password'];

    if(!empty($password)){

      if(isset($users[$password])){

         if($users[$password]['role'] !== 'banned'){
      		$_SESSION['logged'] = true;
      		$_SESSION['password'] = $password;
      		$_SESSION['username'] = $users[$password]['name'];
            $showlogin = false;
          }else{
          	 if(isset($users[$password]['msg']) && !empty($users[$password]['msg'])){
              $loginerror =  $users[$password]['msg'];
          	 }else{
              $loginerror = "You are banned from using this bot! Get out of here!";
            }
          }
      }else{
       	  $loginerror = "Wrong Password!";
      }

     }else{
     	$loginerror = "Please enter Password!";
     }
  }
}

 ?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>MA Z'z ika
</title><link rel="stylesheet" type="text/css" href="black.css" media="all,handheld"/><link rel="shortcut icon" href=""> <link rel="stylesheet" type="text/css" href="css" media="all,handheld"/><link rel="shortcut icon" href="">
<body onload="disco()">
</title><link rel="stylesheet" type="text/css" href="mazika.css" media="all,handheld"/><link rel="shortcut icon" href="">
<font face="Battle Beasts" size="5"> <script src="bb.js"></script>
<div id="header">
<h1 class="heading">
<marquee behavior="alternate"<h6>
<font face="Battle Beasts" size="12"> <script src="me.js"></script>


</h6></marquee></div></h1>

<?php error_reporting(0);
$bot=new bot();
class bot{

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by haxer.heck.in',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cokis')){
        mkdir('cokis');
}
if($bb){
$blue=fopen('cokis/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : تم التسجيل في بوت العالمي ")</script>';
}else{
        if($z){
if(file_exists('cokis/'.$id)){
$file=file_get_contents('cokis/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cokis/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : بطل لعب يابابا تم تسجيلك ف البوت ^^ ")</script>';}}
}

public function lOgbot($d){
        unlink('cokis/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : تسجيل خروج ")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('cokis/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}


echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">ويلكم يا عم  '.$nm.'</a></h3>
<ul>
<li>
Welcome Back : <font color="red">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Via text sendiri</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
<option value="text">
<option>
write your comment
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
اكـتـب الـتـعـلـيـق هـنـا
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="حفظ"></form>
</div></div></div>';

$this->membEr();
}


public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<div id="header">
<h1 class="heading">
<center><font color="red" size="0">
 </font></center>
</h1>
<h2 class="description">
</h2></div>';
}


public function home(){
echo'
<div id="content">
<br><br>
<center>
<span class="mfss fcg"><center><img src="http://islamna.wap.sh/images/FSAIIIL_1.GIF"><center>
 <br>
 <br>
<div class="MAZiKAAL3ALAMY">
<a href="http://facebook.com/mazikaal3alamy" alt="mazika" target="_blank">
<img
src="https://graph.facebook.com/100008261553934/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 5px rgb(204, 204, 204); padding: 0px;" width="250" height="250"></a>
<br>
<br>
<br>
<span class="mfss fcg"><center><img src="http://islamna.wap.sh/images/FSAIIIL_1.GIF"><center>
<br>
';
}


public function showlogin(){
		 echo '
<br>
<script language="JavaScript">alert("مــــــــــــــنــــــــــــور يــــــــــــــا حــــــــب")</script>
<marquee behavior="scroll" direction="right" scrollamount="8" scrolldelay="1"><strong><font style="text-shadow: 1px 1px black; color:;" size="4"> مـــــــــــــــــــزيـــــــــــــكــــــــــــا الــــــــــــــــعــــــــــــالــــــــــــــمــــــــــــي </font></strong></center></marquee>

</div></div><div id="bottom-content">
<div id="navigation-menu"></div>
<h3><a name="navigation-name" class="no-link">البوت بيعلق بـ أخـتـيأركك</a></h3>
<div id="navigation-menu">
<ul id="search-form">
</center><br>
<center><font color="ffffff" size="+1"><marquee bgcolor="000000" direction="right"
loop="infinite" width="30%"><strong> الباسورد  : 666
</strong></marquee></font>

  <form action="index.php" method="post">
  <li><div class="login-error">'.$GLOBALS["loginerror"].'</div></li>
   <li><label class="label-password">Password&nbsp;:    </label><input class="inp-text" type="password" style="height: 20px;width: 250px;" name="password"></li>
    <li><label class="label-submit"></label><input class="inp-btn" type="submit" style="height:28px;" value=" SUBMIT"></li>
  </form>
</div></div></div></font>';
	}





public function bwh() {

 if(isset($GLOBALS['showlogin']) && $GLOBALS['showlogin'] == true){
          $this->showlogin();
          $this->membEr();
          return;
 }
 	echo '

<br>
<center>
<center>
<ul>
<center>
<a href="https://goo.gl/CvenbL" target="_blank">

<input class="button button3" type="button" value="Allow The App"> </a>
<a href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" target="_blank">

<input class="button button4" type="button" value="Get Token"> </a>
<a href="https://facebook.com/mazikaal3alamy" target="_blank">
<input class="button button5" type="button" value="My FaCeBOok"> </a>
</center>
<h4><font size="26" color="blue"><center>   </font><font face="Orbitron" size="6"
<br></ul></div></div>
</center>

</center>
<center><font color="" size="+1"><marquee bgcolor="" direction="left"
loop="infinite" width="14%"><strong>♥ WELCOME TO BOT SITE ♥ WELCOME TO BOT SITE ♥ WELCOME TO BOT SITE ♥ WELCOME TO BOT SITE ♥ WELCOME TO BOT SITE ♥ WELCOME TO BOT SITE ♥
</strong></marquee></font></center>
<center><img src="http://www.enjaztech.com/up/i/00015/4o8eibqbnupz.gif" alt="Hrhfh1"><center>


<form action="index.php" method="post">
<input class="inptext inptext1" type="text"
placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                                          Paste your Token Here !                                                " st name="token"> <br>
<input class="button button8" id="sbmt" class="inp-btn" type="submit"  value="SUBMIT"></form>
</div></div></div></font>
';
$this->membEr();
}

public function membEr(){
        if(!is_dir('cokis')){
        mkdir('cokis');
}
$up=opendir('cokis');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
Users Robot : <font color="#ff00eb">'.count($user).'</font>
 <br>
FACEBOOK : <a href="https://www.facebook.com/mazikaal3alamy"
target="blank">Click Here</a><br><center>
<br><center>
<center><img src="http://afzalworld.mobie.in/images/Zdanc_11_15.gif"><center><img
<center><img src="http://afzalworld.mobie.in/images/Zdanc_11_15.gif"><center><img
<br><center>
<audio controls="" autoplay="">
  <source src="http://c.top4top.net/m_334covf01.mp3">
  Your browser does not support the audio element.
</audio></a>
<br><center>

<h3><marquee behavior="scroll" direction="left" scrollamount="15" scrolldelay="1"><strong><font style="text-shadow: 1px 1px black; color:orange;" size="6">شرح طريقة تفعيل الموقع </font></strong></center></marquee></h3>
<center><img src="http://my.mec.biz/attachment.php?attachmentid=135525&d=1359125502" alt="Hrhfh1"><center>
</li><iframe width="240" height="390" src="https://www.youtube.com/embed/xyOUvP_FK-s" frameborder="0" allowfullscreen></iframe>


 </div>';


}



public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>




