<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="css/index_page.css">

    <title>Home page</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="register/register_products.php" enctype="multipart/form-data" method=POST>
                <label for="name">Product name</label>
                <input type="text" name="name" placeholder="Type here the product name" required>

                <label for="description">Product description</label>
                <input type="text" name="description" placeholder="Type here the product description" required >

                <label for="price">Price</label>
                <input type="text" name="price" placeholder="Type here the product price" required>

                <label for="description">Amount</label>
                <input type="number" name="amount" placeholder="Type here the product amount" required>

                <button type="submit" class="btn">Send</button>    
            </form>
        </div>     
        <div class="products-table">
            <?php 
                include './connection.php';
                $sqlSelect = "select * from products order by id DESC";
                $results = mysqli_query($connection, $sqlSelect);
            ?>
            <table border="1"> 
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Amount</th>
                </tr>

                <?php while ($row = mysqli_fetch_array($results)) { ?>

                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td>R$<?php echo $row['price']; ?></td>
                    <td><?php echo $row['amount']; ?></td>    
                    <td>
                        <form action="delete/delete_products.php" method="POST">
                            <input type="text" style="display: none;" name="id" value="<?=$row['id']?>">

                            <button type="submit" class="btn-delete" value="delete_register">Delete</button>
                        </form>
        
                    </td>
                </tr>
                <?php } ?>
            </table>

            
        </div>
    </div>
</body>
</html>