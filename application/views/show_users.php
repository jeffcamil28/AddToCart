<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CI CRUD</title>
<script type="text/javascript">
function show_confirm(act,gotoid)
{
if(act=="edit")
var r=confirm("Do you really want to edit?");
else
var r=confirm("Do you really want to delete?");
if (r==true)
{
window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;
}
}
</script>

<script type="text/javascript">
function add_cart(act,gotoid)
{
if(act=="addtocart")
var r=confirm("Add to cart?");
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
<h2> CRUD </h2>
<table width="600" border="1" cellpadding="5">
<tr>
<th scope="col">Id</th>
<th scope="col">Product Name</th>
<th scope="col">Stock</th>
<th scope="col">Price</th>
<th scope="col" colspan="2">Action</th>
</tr>
<?php foreach ($user_list as $u_key){ ?>
<tr>
<td><?php echo $u_key->id; ?></td>
<td><?php echo $u_key->prodname; ?></td>
<td><?php echo $u_key->stock; ?></td>
<td><?php echo $u_key->price; ?></td>
<td width="40" align="left" ><a href="#" onClick="show_confirm('edit',<?php echo $u_key->id;?>)">Edit</a></td>
<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $u_key->id;?>)">Delete </a></td>
</tr>
<?php }?>
<tr>
<td colspan="7" align="right"> <a href="<?php echo base_url();?>index.php/users/add_form">Insert New Product</a></td>
</tr>
</table>

<h2> My Products </h2>
<table width="600" border="1" cellpadding="5">
<tr>
<th scope="col">Id</th>
<th scope="col">Product Name</th>
<th scope="col">Stock</th>
<th scope="col">Price</th>
<th scope="col" colspan="2">Action</th>
</tr>
<?php foreach ($user_list as $u_key){ ?>
<tr>
<td><?php echo $u_key->id; ?></td>
<td><?php echo $u_key->prodname; ?></td>
<td><?php echo $u_key->stock; ?></td>
<td><?php echo $u_key->price; ?></td>
<td width="40" align="left" ><a href="#" onClick="add_cart('addtocart',<?php echo $u_key->id;?>)">Add cart</a></td>
</tr>
<?php }?>
<tr>
<td colspan="7" align="right"> <a href="<?php echo base_url();?>index.php/users/view_cart">View Cart</a></td>
</tr>
</table>




</body>
</html>