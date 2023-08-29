<?php
$menu = array(
    "index" => "Home",
    "about" => "About Us",
    "pizzas" => "Pizzas",
    "contact" => "Contact"
);

$aboutSections = array(
    "about" => array(
        "image" => "img/about.jpg",
        "title" => "Our Story",
        "fullText" => "<p>
                                We started as a small family business so that nowadays, 20 years since our establishment,
                                we could stand proudly in front of 14 PIZZAS pizza outlets in Serbia.
                                </p>
                                <p>
                                Cras sed nibh id magna consequat vulputate ut eu leo. Mauris pulvinar suscipit commodo.
                                Aenean ac est lorem. Mauris pharetra felis id nibh semper, eget bibendum urna ornare.
                                Aliquam odio augue, viverra a urna eget, aliquet posuere elit. Duis at sodales quam.
                                Sed pulvinar nunc nec tempor tristique. Pellentesque et neque eros.
                                Aenean ultrices euismod lacus ut maximus.
                            </p>"
    ),
    "preparation" => array(
        "image" => "img/hero/slide-01.jpg",
        "title" => "Traditional preparation",
        "fullText" => "<p>
                                The food preparation process in our restaurants takes place in front of your eyes,
                                and the unique combination of ever-fresh ingredients ensures that all our customers are
                                satisfied.
                            </p>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum
                                is that it has a more-or-less normal distribution of letters,
                                as opposed to using 'Content here, content here', making it look like readable English.
                            </p>"
    ),
    'quality' => array(
        "image" => "img/hero/slide-02.jpg",
        "title" => "Best Quality",
        "fullText" => "<p>
                                All ingredients used in our products undergo very detailed and strict safety analyses and
                                inspection checks.
                            </p>
                            <p>
                                Contrary to popular belief, Lorem Ipsum is not simply random text.
                                It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                old.
                            </p>"
    ),
    'fresh' => array(
        "image" => "img/hero/slide-03.jpg",
        "title" => "Apsolytely fresh",
        "fullText" => "<p>
                                It is our wish not to sell a product which is not absolutely fresh.
                                Our pizza is served right out of the oven.
                            </p>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>"
    )
);

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

<main>

    <div class="container">

        <?php
        $aboutSection = $aboutSections['about'];

        if (!empty($aboutSection['image']) && !empty($aboutSection['title']) && !empty($aboutSection['fullText'])) {
            ?>

            <section class="about-section">
                <aside class="about-image">
                    <img src=" <?php echo $aboutSection['image'] ?>" alt="">
                </aside>
                <article class="about-info">
                    <h2 class="section-title"><?php echo $aboutSection['title'] ?></h2>
                    <div class="about-info-data">
                        <?php echo $aboutSection['fullText']; ?>
                    </div>
                </article>
            </section>
        <?php } ?>


        <?php
        $preparationSection = $aboutSections['preparation'];

        if (!empty($preparationSection['image']) && !empty($preparationSection['title']) && !empty($preparationSection['fullText'])) {
            ?> 

            <section class="about-section" id="preparation">
                <article class="about-info">
                    <h2 class="section-title"><?php echo $preparationSection['title']; ?></h2>
                    <div class="about-info-data">
                        <?php echo $preparationSection['fullText']; ?>
                    </div>
                </article>
                <aside class="about-image">
                    <img src="<?php echo $preparationSection['image']; ?>" alt="">
                </aside>
            </section>
        <?php } ?>


        <?php
        $qualitySection = $aboutSections['quality'];

        if (!empty($qualitySection['image']) && !empty($qualitySection['title']) && !empty($qualitySection['fullText'])) {
            ?>
            <section class="about-section" id="quality">
                <aside class="about-image">
                    <img src="<?php echo $qualitySection['image']; ?>" alt="">
                </aside>
                <article class="about-info">
                    <h2 class="section-title"><?php echo $qualitySection['title']; ?></h2>
                    <div class="about-info-data">
                        <?php echo $qualitySection['fullText']; ?>
                    </div>
                </article>
            </section>
        <?php } ?>

        <?php
        $freshSection = $aboutSections['fresh'];

        if (!empty($freshSection['image']) && !empty($freshSection['title']) && !empty($freshSection['fullText'])) {
            ?>
            <section class="about-section" id="fresh">
                <article class="about-info">
                    <div class="about-info-data">
                        <h2 class="section-title"><?php echo $freshSection['title']; ?></h2>
                        <div class="about-info-data">
                            <?php echo $freshSection['fullText']; ?>
                        </div>
                    </div>
                </article>
                <aside class="about-image">
                    <img src="<?php echo $freshSection['image']; ?>" alt="">
                </aside>
            </section>
        <?php } ?>

    </div>
</main>


