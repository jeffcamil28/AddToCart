<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CI Insert Form</title>
</head>
<body>
<form method="post" action="<?php echo base_url();?>index.php/users/insert_new_user">
<table width="400" border="0" cellpadding="5">
<tr>
<th width="213" align="right" scope="row">Enter product name</th>
<td width="161"><input type="text" name="prodname" size="20" /></td>
</tr>
<tr>
<th align="right" scope="row">Enter stock</th>
<td><input type="text" name="stock" size="20" /></td>
</tr>
<tr>
<th align="right" scope="row">Enter price</th>
<td><input type="text" name="price" size="20" /></td>
</tr>
<tr>
<th align="right" scope="row">&nbsp;</th>
<td><input type="submit" name="submit" value="Send" /></td>
</tr>
</table>
</form>
</body>
</html>