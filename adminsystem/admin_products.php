<?php 
require_once('../db_connect.php');

session_start();

if (isset($_POST['add_product'])) {
    $product_name = $_POST['product_name'];
    $product_name = filter_var($product_name, FILTER_SANITIZE_STRING);
    $price = $_POST['price'];
    $price = filter_var($price, FILTER_SANITIZE_STRING);
    $description = $_POST['description'];
    $description = filter_var($description, FILTER_SANITIZE_STRING);

    $image = $_FILES['image']['name'];
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../uploaded_img/' . $image;

    $select_products = $pdo->prepare("SELECT * FROM `artikel` WHERE artikel = ?");
    $select_products->execute([$product_name]);

    if ($select_products->rowCount() > 0) {
        echo '<div class="error"><p>product is al toegevoegd</p></div>';
    } else {
        $insert_products = $pdo->prepare("INSERT INTO `artikel`(artikel, prijs, omschrijving, foto)
        VALUES(?,?,?,?)");
        $insert_products->execute([$product_name, $price, $description, $image]);

        if ($insert_products) {
            if ($image_size > 2000000) {
                echo '<div class="error"><p>Foto bestand is te groot</p></div>';
            } else {
                move_uploaded_file($image_tmp_name, $image_folder);
                echo '<div class="success"><p>Product is toegevoegd</p></div>';
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../style.css">

<head>
    <title>Admin</title>
</head>

<body>
    <header>
        <div class="navbar">
            <a href="../homepage.php"><img src="../images/logo.png" class="logo"></a>
            <ul>
                <li><a href="../homepage.php">Home</a></li>
                <li><a href="admin_products.php">Add Products</a></li>
                <li><a href="../shoppagina.php">Assortment</a></li>
                <li><a href="../informatie.php">Information</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </div>
    </header>
    <main>
        <?php include '../db_connect.php'; ?>
        <div class="container-login">
        <h1 class="title">Add new products</h1>
        <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
					<label for="email">Artikelnaam</label>
					<input type="text" name="product_name" placeholder="Artikelnaam" class="form-control">
				</div>
                <div class="form-group">
					<label for="email">Prijs</label>
					<input type="number" step="any" name="price" min="0" placeholder="Prijs" class="form-control">
				</div>
                <div class="form-group">
					<label for="email">Omschrijving</label>
					<textarea name="description" required placeholder="Omschrijving" cols="30" rows="10" class="form-control"></textarea>
				</div>
                <div class="form-group">
					<label for="email">Foto</label>
					<input type="file" name="image" required class="form-control" accept="image/jpg, image/jpeg, image/png">
				</div>

				<button type="submit" name="add_product" class="button-pink">Toevoegen</button>
				
		</form>
        </div>
        <div class="bottom-container">
            <div class="row">
                <div class="col">
                    <a href="logout.php?logout=true" style="color:white" class="btn">Uitloggen</a>
                </div>
                <div class="col">
                    <a href="#" style="color:white" class="btn">Wachtwoord veranderen?</a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer">
            <div class="column">
                <div class="title">Mijn gegevens</div>
                <ul>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                </ul>
            </div>
            <div class="column">
                <div class="title">Service</div>
                <ul>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                </ul>
            </div>
            <div class="column">
                <div class="title">Contact</div>
                <ul>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                </ul>
            </div>
            <div class="column">
                <div class="title">Informatie</div>
                <ul>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                </ul>
            </div>
            <div class="column">
                <div class="title">Categorie&#235;n</div>
                <ul>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>
