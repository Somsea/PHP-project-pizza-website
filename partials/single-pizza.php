<?php
$pizzas = array(
    "1" => array(
        "name" => "Margarita",
        "description" => " Sometimes you just can’t beat fresh, simple, and classic Margarita Pizza. ",
        "image" => "margarita.jpg",
        "size" => array(
            "M" => array(
                "radius" => 27,
                "price" => 5
            ),
            "L" => array(
                "radius" => 32,
                "price" => 8
            ),
            "XL" => array(
                "radius" => 42,
                "price" => 10
            ),
        ),
        "favorite" => false,
        "preparationTime" => 15,
        "rating" => 5.00
    ),
    "2" => array(
        "name" => "Vege",
        "description" => " A wonderful crust layered with herbed tomato sauce and toppings encourages my family of six to dig right in to this low-fat main course.",
        "image" => "vege.jpg",
        "size" => array(
            "M" => array(
                "radius" => 27,
                "price" => 5
            ),
            "L" => array(
                "radius" => 32,
                "price" => 8
            ),
            "XL" => array(
                "radius" => 42,
                "price" => 10
            ),
        ),
        "favorite" => true,
        "preparationTime" => 15,
        "rating" => 4.80
    ),
    "3" => array(
        "name" => "Capricciosa",
        "description" => " Pizza capricciosa is a style of pizza in Italian cuisine prepared with mozzarella cheese, Italian baked ham, mushroom, artichoke and tomato. ",
        "image" => "capricciosa.jpg",
        "size" => array(
            "M" => array(
                "radius" => 27,
                "price" => 6
            ),
            "L" => array(
                "radius" => 32,
                "price" => 9
            ),
            "XL" => array(
                "radius" => 42,
                "price" => 12
            ),
        ),
        "favorite" => false,
        "preparationTime" => 13,
        "rating" => 5.00
    ),
    "4" => array(
        "name" => "Supreme",
        "description" => " it's the highlight of my favorite casual meal. ",
        "image" => "supreme.jpg",
        "size" => array(
            "M" => array(
                "radius" => 27,
                "price" => 6
            ),
            "L" => array(
                "radius" => 32,
                "price" => 10
            ),
            "XL" => array(
                "radius" => 42,
                "price" => 12
            ),
        ),
        "favorite" => true,
        "preparationTime" => 10,
        "rating" => 5.00
    ),
    "5" => array(
        "name" => "Venezia",
        "description" => " Delicious Pizza ",
        "image" => "venezia.jpg",
        "size" => array(
            "M" => array(
                "radius" => 27,
                "price" => 6
            ),
            "L" => array(
                "radius" => 32,
                "price" => 10
            ),
            "XL" => array(
                "radius" => 42,
                "price" => 12
            ),
        ),
        "favorite" => false,
        "preparationTime" => 12,
        "rating" => 4.50
    ),
    "6" => array(
        "name" => "Mexico",
        "description" => " Mexican Pizzas are delicious corn tortillas topped with beans, beef and all the delicious taco toppings you can imagine!  ",
        "image" => "mexico.jpg",
        "size" => array(
            "M" => array(
                "radius" => 27,
                "price" => 7
            ),
            "L" => array(
                "radius" => 32,
                "price" => 11
            ),
            "XL" => array(
                "radius" => 42,
                "price" => 14
            ),
        ),
        "favorite" => false,
        "preparationTime" => 10,
        "rating" => 5.00
    ),
    "7" => array(
        "name" => "Bergamo",
        "description" => " Taste of Bergamo.  ",
        "image" => "bergamo.jpg",
        "size" => array(
            "M" => array(
                "radius" => 27,
                "price" => 7
            ),
            "L" => array(
                "radius" => 32,
                "price" => 10
            ),
            "XL" => array(
                "radius" => 42,
                "price" => 13
            ),
        ),
        "favorite" => false,
        "preparationTime" => 15,
        "rating" => 5.00
    ),
    "8" => array(
        "name" => "Romana",
        "description" => " Pizza Romana is made using a completely different technique, resulting in a very different-looking and tasting pie.  ",
        "image" => "romana.jpg",
        "size" => array(
            "M" => array(
                "radius" => 27,
                "price" => 7
            ),
            "L" => array(
                "radius" => 32,
                "price" => 10
            ),
            "XL" => array(
                "radius" => 42,
                "price" => 13
            ),
        ),
        "favorite" => false,
        "preparationTime" => 14,
        "rating" => 5.00
    ),
    "9" => array(
        "name" => "Quattro stagioni",
        "description" => " Pizza quattro stagioni (four seasons pizza) is a variety of pizza in Italian cuisine that is prepared in four sections with diverse ingredients, with each section representing one season of the year.  ",
        "image" => "quattro-stagioni.jpg",
        "size" => array(
            "M" => array(
                "radius" => 27,
                "price" => 9
            ),
            "L" => array(
                "radius" => 32,
                "price" => 13
            ),
            "XL" => array(
                "radius" => 42,
                "price" => 20
            ),
        ),
        "favorite" => true,
        "preparationTime" => 15,
        "rating" => 5.00
    ),
);
?>


<div class="container">
    <?php if (!isset($_GET['id'])) { ?>
        <h2>Greška 404, stranica ne postoji</h2>
        <a href="/pizzas.php">Nazad na proizvode</a>
    <?php } else {
        $id = trim($_GET['id']);
        if (array_key_exists($id, $pizzas)) {
            $pizza = $pizzas[$id];
            ?>
            <section class="single-pizza">
                <aside class="pizza-image">
                    <img src="./img/pizzas/<?php echo $pizza['image']; ?>">
                </aside>
                <article class="pizza-detail">
                    <h1 class="pizza-title"><?php echo $pizza['name']; ?></h1>
                    <p class="pizza-description">
                        <?php echo $pizza['description']; ?>
                    </p>
                    <div class="price">
                        <?php foreach ($pizza['size'] as $size => $details) { ?>
                            <p><b>Size:</b><span class="size"> <?php echo $size; ?> (<?php echo $details['radius']; ?>cm)</span> : <b class="price"><?php echo $details['price']; ?></b> &euro;</p>
                        <?php } ?>
                    </div>
                    <p><b>Preparation time</b>: <span class="preparation-time"><?php echo $pizza['preparationTime']; ?></span> min</p>
                    <p><b>Customer rate</b>: <span class="rate"><?php echo $pizza['rating']; ?></span> <span class="fa fa-star"></span></p>
                </article>
            </section>
        <?php } else { ?>
            <h2>Proizvod sa datim ID-om ne postoji</h2>
            <a href="/index.php">Nazad na proizvode</a>
        <?php }
    } ?>
</div>