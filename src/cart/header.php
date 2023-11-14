<header id="header">
    <nav class="navbar navbar-expand-lg ">
        <style>
            .navbar {
                background-color: rgb(223, 231, 221);
            }

            a {
                color: black;
            }

            a:hover {
                color: rgb(190, 39, 20);
            }
        </style>
        <!-- create an API to conect to react home page for now use exact location-->
        <a href="http://localhost:3000/" class="navbar-brand">
            <h3 class="px-5">
                E-Porosia
            </h3>
        </a>

        <div class="collapse navbar-collapse show" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Shporta
                        <?php

                        if (isset($_SESSION['cart'])) {
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-dark\">($count)</span>";
                        } else {
                            echo "<span id=\"cart_count\" class=\"text-dark t\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>