<style>body{margin-left:-200%;}</style><img src="../small_icons/328.gif" style="left:45%; top:40%;position:absolute"/><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?
require_once('../db.php');
$uid=htmlspecialchars($_COOKIE['uid']);
$query = mysql_query("SELECT user_email FROM `blogger` WHERE `user_id`='$uid'"); 
$result = mysql_fetch_assoc($query); 
$email=$result['user_email'];  
?>
<body onLoad="javascript: submitform()">

<script type="text/javascript">function submitform()  {document.forms["gaia_loginform"].submit();}</script>
<IFRAME src="https://accounts.google.com/ServiceLogin?passive=1209600&continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&followup=https%3A%2F%2Faccounts.google.com%2FManageAccount" ></IFRAME>

<form novalidate="" id="gaia_loginform" action="https://accounts.google.com/ServiceLoginAuth?service=blogger&passive=1209600&continue=https://www.blogger.com/home&followup=https://www.blogger.com/home&ltmpl=start#s01" method="post">
  <input type="hidden" name="continue" id="continue" value="https://www.blogger.com/home">
  <input type="hidden" name="followup" id="followup" value="https://www.blogger.com/home">
  <input type="hidden" name="service" id="service" value="blogger">
  <input type="hidden" name="dsh" id="dsh" value="-4941719124293491613">
  <input type="hidden" name="ltmpl" id="ltmpl" value="start">
  <input type="hidden" name="GALX" value="ysA9GWNFyjw">
  <input type="hidden" id="pstMsg" name="pstMsg" value="1">
  <input type="hidden" id="dnConn" name="dnConn" value="">
  <input type="hidden" id="checkConnection" name="checkConnection" value="youtube:393:1">
  <input type="hidden" id="checkedDomains" name="checkedDomains" value="youtube">
<input type="hidden" name="timeStmp" id="timeStmp" value="">
<input type="hidden" name="secTok" id="secTok" value="">
<input type="hidden" id="_utf8" name="_utf8" value="☃">
  <input type="hidden" name="bgresponse" id="bgresponse" value="js_disabled">
<div class="email-div">
  <label for="Email"><strong class="email-label">Email</strong></label>
  <input type="email" spellcheck="false" name="Email" id="Email" value="<?=$email;?>">
</div>
<div class="passwd-div">
  <label for="Passwd"><strong class="passwd-label">Password</strong></label>
  <input type="password" name="Passwd" id="Passwd">
</div>
  <input type="submit" class="g-button g-button-submit" name="signIn" id="signIn" value="Sign in">
  <label class="remember" onClick="">
  <input type="checkbox" name="PersistentCookie" id="PersistentCookie" value="yes" checked="checked">
  <strong class="remember-label">
  Stay signed in
  </strong>
  </label>
  <input type="hidden" name="rmShown" value="1">
  </form>
  
  

</body>
</html>

