<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CI CRUD</title>
<script type="text/javascript">
function remove_cart(act,gotoid)
{
if(act=="removetocart")
var r=confirm("Do you really want to remove this to cart?");
else
var r=confirm("Do you really want to delete?");
if (r==true)
{
window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;
}
}
</script>

</head>
<body>

<h2> My Cart Items </h2>
<table width="600" border="1" cellpadding="5">
<tr>
<th scope="col">Id</th>
<th scope="col">Product ID</th>
<th scope="col">Quantity</th>
<th scope="col">Price</th>
<th scope="col" colspan="2">Action</th>
</tr>
<?php foreach ($cart_list as $u_key){ ?>
<tr>
<td><?php echo $u_key->id; ?></td>
<td><?php echo $u_key->prodid; ?></td>
<td><?php echo $u_key->quantity; ?></td>
<td><?php echo $u_key->totalprice; ?></td>
<td width="40" align="left" ><a href="#" onClick="remove_cart('removetocart',<?php echo $u_key->id;?>)">Remove to cart</a></td>
</tr>
<?php }?>
<tr>
<td colspan="7" align="right"> <a href="<?php echo base_url();?>index.php/users/checkout_form">Checkout</a></td>
</tr>
</table>




</body>
</html>