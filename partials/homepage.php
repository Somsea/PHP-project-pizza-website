
<?php 

    $slider = array(
        
        "1" => array(
            "image"       => "img/hero/slide-01.jpg",
            "title"       => "Traditional preparation",
            "sliderDesc"  => "The food preparation process in our restaurants takes place in front of your eyes,
                              and the unique combination of ever-fresh ingredients ensures that all our customers are
                              satisfied.",
            "link"        => "/about.php#preparation"
        ),
        "2"=>array(
            "image"       => "img/hero/slide-02.jpg",
            "title"       => "Best Quality",
            "sliderDesc"  => "All ingredients used in our products undergo very detailed and strict safety analyses and
                            inspection checks.",
            "link"        => "/about.php#quality"
        ),
        "3"=>array(
            "image"       => "img/hero/slide-03.jpg",
            "title"       => "Apsolytely fresh",
            "sliderDesc"  => "It is our wish not to sell a product which is not absolutely fresh.
                                Our pizza is served right out of the oven.",
            "link"        => "/about.php#fresh"
        )
    );


    $homepageAbout = array(
            "image"       => "img/about.jpg",
            "title"       => "Our Story",
            "aboutDesc"  => "We started as a small family business so that nowadays,
                             20 years since our establishment,
                             we could stand proudly in front of 14 PIZZAS pizza outlets in Serbia... ",
            "link"        => "/about.php"
    );

?>


<div class="container">
    <?php if (!empty($slider)) { ?>
        <section class="hero-section">
            <div class="hero-slider owl-carousel">
                <?php foreach ($slider as $slide) { ?>
                    <div class = "hero-item">
                        <img src = "<?php echo $slide['image'] ?>" alt = "">
                        <div class = "caption">
                            <h2><?php echo $slide['title'] ?></h2>
                            <p><?php echo $slide['sliderDesc'] ?></p>
                            <a class = "btn" href = "<?php echo $slide['link'] ?>">Read More</a>
                        </div>
                    </div><!--Item end-->
                <?php } ?>
            </div>
        </section>
    <?php } ?>

    <?php if (!empty($homepageAbout)) { ?>
        <section class="about-section">
            <aside class="about-image">
                <img src="<?php echo $homepageAbout ['image'];?>" alt="">
            </aside>
            <article class="about-info">
                <h2><?php echo $homepageAbout ['title'] ?></h2>
                <p>
                    <?php echo $homepageAbout ['aboutDesc'] ?>
                </p>
                <a href="<?php echo $homepageAbout ['link'] ?>" class="btn">Read More</a>
            </article>
        </section>
    <?php } ?>
</div>