<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CI CRUD</title>
<!— jQuery library —>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!— Latest compiled JavaScript —>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

<h2> My Cart </h2>
<table width="600" border="1" cellpadding="5">
<tr>
<th scope="col">Id</th>
<th scope="col">Product ID</th>
<th scope="col">Quantity</th>
<th scope="col">Price</th>
</tr>
<?php $totalamount = 0; foreach ($cart_list as $u_key){ ?>
<tr>
<td><?php echo $u_key->id; ?></td>
<td><?php echo $u_key->prodid; ?></td>
<td><?php echo $u_key->quantity; ?></td>
<td><?php echo $u_key->totalprice; ?></td>
</tr>
<?php $totalamount += $u_key->totalprice; } ?>
</table>

<form method="post" action="<?php echo base_url();?>index.php/users/insert_sales">
<table width="400" border="0" cellpadding="5">
<tr>
<th width="213" align="right" scope="row">Tendered Amount</th>
<td width="161"><input type="text" name="tenderedamount" id="tenderedamount" size="20" /></td>
</tr>
<th align="right" scope="row">Total Amount:</th>
<td><input type="text" name="totalamount" id="totalamount" size="20" value="<?php echo $totalamount ?>" readonly></td>
</tr>
<tr>
<th align="right" scope="row">Change</th>
<td><input type="text" name="change" id="change" size="20" readonly></td>
</tr>
<tr>
<tr>
<th align="right" scope="row">&nbsp;</th>
<td><input type="submit" name="submit" value="Send" /></td>
</tr>
</table>
</form>

<script>
      $(function() {
      $("#totalamount, #tenderedamount").on("keydown keyup", product);
      function product() {
      $("#change").val(Number($("#tenderedamount").val()) - Number($("#totalamount").val()));
      }
      });

    
 </script>



</body>
</html>