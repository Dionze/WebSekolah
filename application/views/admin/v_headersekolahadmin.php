<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home</title>
<style type="text/css">
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #000000;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 17px 20px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #CCCCCC;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	color:#330099;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #FF0000}

.dropdown:hover .dropdown-content {
    display: block;
}
<!--
.style2 {font-family: Geneva, Arial, Helvetica, sans-serif}
.style4 {
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #FFFFFF;
}
.style5 {color: #FFFFFF}
.style9 {color: #CCCCCC}
.style10 {color: #FF0000}
.style12 {color: #999999}
.style13 {font-size: small}
.style14 {
	color: #CCCCCC;
	font-size: small;
	font-family: sans-serif;
}
.style15 {font-family: sans-serif}
.style16 {color: #FFFFFF; font-family: sans-serif; }
.menunavigasi {font-family: sans-serif; font-size: 16px; }
-->
</style>
</head>

<body>
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#090909">
	<th width="889" bordercolor="#FFFFFF" bgcolor="#000000" scope="col"><div align="left">
<blockquote>
	<h1 class="style10 style15"><a href="<?php echo base_url().'admin' ?>" style="text-decoration:none"><span class="style10">SMK NEGERI 1 KONOHA</span></a></h1>
</blockquote></div></th>
	<th width="427" height="85" bgcolor="#000000" scope="col"><div align="left">
<blockquote>
<p align="center"><img src="../../img/1483157434-Naruto-Konoha-Leaf-Symbol.png.jpg" width="94" height="81" /></p>
</blockquote></div></th></tr></table>
<ul>
<li><a href="<?php echo base_url().'admin' ?>"class="menunavigasi">DASBOARD</a></li>
<li class="dropdown">
<span class="style15 style15"><a href="javascript:void(0)" class="dropbtn style2">ADMIN</a></span>
<div class="dropdown-content">
    <a href="<?php echo site_url('websekolah/index') ?>">Logout</a></div>
</li></ul>
</th></tr></table></div>