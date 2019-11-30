<!DOCTYPE html>
<html>
<head>
		<title>Halaman Login></title>
        <style type="text/css">
<!--
.style1 {color: #FFFFFF}
.next {color: #FFFFFF}
-->
        </style>
</head>
<body>
<div align="center"><?php echo form_open('websekolah/proseslogin') ?>
	  <table width="1290" height="186" border="0" align="center" cellspacing="0" bordercolor="#FFFFFF">
        <tr>
          <td width="1280" height="186"><blockquote>
              <table width="31%" border="10" align="center" cellpadding="5" cellspacing="5" bordercolor="#333333">
                <tr>
                  <td height="50" bgcolor="#FF0000"><div align="center">
                      <h1 class="next">Silahkan Login</h1>
                    <p>
                        <input type="email" name="email" placeholder="E-mail"/>
                    </p>
                    <p>
                        <input type="password" name="password" placeholder="Password"/>
                    </p>
                    <p>
                        <input type="submit" name="login" value="Login"/>
						<p><?php echo form_close() ?>
                    </p>
                  </div></td>
                </tr>
              </table>
          </blockquote></td>
        </tr>
  </table>
	  <p>&nbsp;</p>
</div>
</body>
</html>