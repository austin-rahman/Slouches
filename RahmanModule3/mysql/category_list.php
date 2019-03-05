<?php
require_once('database.php');

// Get all categories
$query = 'SELECT * FROM categories
                       ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Product Manager</h1></header>
<main>
    <h1>Category List</h1>
	
    <table>
        <tr>
            <th>Name</th>
		    <th>&nbsp;</th>
			
        </tr>
		<?php foreach ($categories as $category) : ?>
		<tr>
            <td><?php echo $category['categoryName']; ?></td>
		    <td>&nbsp;</td>
		</tr>
		<?php endforeach; ?>
       
    
    </table>

    <h2>Add Category</h2>
     <form id="form1" name="form1" method="post" action=
	 "add_category.php">
		<label for="categoryName">Name: </label>
		<input type="text" name="categoryName" id="categoryName" />
		<input type="submit" name="addButton" id="addButton" value=
	"Add" />
	</form>
	<p>&nbsp;</p>
        
    
    <br>
    <p><a href="index.php">List Products</a></p>

    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>