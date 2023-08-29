

<header>
    <div class="container">
        <a href="#" class="logo">
            <img src="img/logo.png" alt=""/>
        </a>
        <nav class="navigation">
            <ul class="menu">
                <?php
                foreach ($menu as $key => $value) {
                    ?>
                    <li>
                        <a href = "/<?php echo $key; ?>.php"><?php echo $value; ?></a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </nav>
    </div>
</header>