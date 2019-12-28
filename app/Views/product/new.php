<h1>Add new product</h1>

<form method="post" action="/products/add">
	<p>Title
		<input type="text" name="title" placeholder="Product Title">
	</p>

	<p> Image
		<input type="text" name="image" placeholder="Product Image url">
	</p>

	<p> Body_html
		<textarea name="body_html"></textarea>
	</p>

	<p> Compare At Price
		<input type="text" name="compare_price" placeholder="Compare At Price">
	</p>

	<p> Price
		<input type="text" name="price" placeholder="Product Price">
	</p>


	<input type="submit" value="Add Product"/>
</form>

