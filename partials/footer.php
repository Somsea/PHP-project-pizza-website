 
<?php
$social = array(
    "1" => array(
        "icon" => "fa-facebook-f",
        "link" => "https://www.facebook.com/CubesSchool"
    ),
    "2" => array(
        "icon" => "fa-instagram",
        "link" => "https://www.instagram.com/cubesschool/"
    )
);
?>

<footer>
    <div class="container">
        <p>&copy; All right reserved. <a href="https://cubes.edu.rs">Cubes Scholl</a></p>
        <nav class="social">
            <?php
            foreach ($social as $item) {
                ?>
                <a href="<?php echo $item['link']; ?>" class="fa <?php echo $item['icon']; ?>" target="_blank"></a>
                <?php
            }
            ?>
        </nav>
    </div>
</footer>
