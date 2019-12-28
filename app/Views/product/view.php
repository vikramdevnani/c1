<h1>You're viewing <?php echo $product['title'];?></h1>
<a href="/products/new">Add new Product</a>
<a href="/products/">View all </a>
<table border="1">

	<tr>
		<td><?php echo $product['title'];?></td>
		<td><?php echo $product['body_html'];?></td>
		<td><img width="150" src="<?php echo $product['image'];?>"/></td>
		<td><?php echo $product['price'];?></td>
	</tr>

</table>
