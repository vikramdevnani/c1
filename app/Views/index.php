<h1>Welcome</h1>
<a href="/products/new">Add new Product</a>
<table border="1">
<?php foreach($products as $product):?>

		<tr>
			<td><?php echo $product['title'];?></td>
			<td><?php echo $product['body_html'];?></td>
			<td><img width="150" src="<?php echo $product['image'];?>"/></td>
			<td><?php echo $product['price'];?></td>
			<td><a href="/products/view/<?php echo $product['id'];?>">View</a></td>
		</tr>

<?php endforeach;?>
</table>
