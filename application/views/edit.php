<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CI Insert Form</title>
</head>
<body>
<form method="post" action="<?php echo base_url();?>index.php/users/update">
<?php
extract($user);
?>
<table width="400" border="0" cellpadding="5">
<tr>
<th width="213" align="right" scope="row">Enter product name</th>
<td width="161"><input type="text" name="prodname" size="20" value="<?php echo $prodname; ?>" /></td>
</tr>
<tr>
<th align="right" scope="row">Enter stock</th>
<td><input type="text" name="stock" size="20" value="<?php echo $stock; ?>" /></td>
</tr>
<tr>
<th align="right" scope="row">Enter price</th>
<td><input type="text" name="price" size="20" value="<?php echo $price; ?>" /></td>
</tr>
<tr>
<th align="right" scope="row">&nbsp;</th>
<td>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" name="submit" value="Update" /></td>
</tr>
</table>
</form>
</body>
</html>