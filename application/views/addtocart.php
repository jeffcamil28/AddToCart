<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CI Insert Form</title>
</head>
<body>
<form method="post" action="<?php echo base_url();?>index.php/users/addtocart1">
<?php
extract($user);
?>
<table width="400" border="0" cellpadding="5">
<tr>
<th align="right" scope="row">Enter quantity</th>
<td><input type="text" name="quantity" size="20"/></td>
</tr>
<tr>
<th align="right" scope="row">&nbsp;</th>
<td>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="hidden" name="stock" value="<?php echo $stock; ?>" />
<input type="hidden" name="price" value="<?php echo $price; ?>" />
<input type="submit" name="submit" value="Update" /></td>
</tr>
</table>
</form>
</body>
</html>