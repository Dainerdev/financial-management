<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">  
    <link rel="stylesheet" href="../../css/general.css">  
    <title>WaySy</title>
</head>
<body>
    <div class="container">

        <!-- User options -->
        <nav class="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="navbar-menu">            
                        <span id="open-sidebar">&#9776;</span>
                    </div>
                </li>
                <li class="nav-item">
                    <span id="brand" class="nav-link username">WaySy</span>
                </li>
                <li class="nav-item dropdown">
                    <?php
                        if (isset($_SESSION["user.find"]) && $_SESSION["user.find"] !== null) {
                            $userName = $_SESSION["user.find"];
                        
                    ?>
                    <a href="#" class="nav-link username" id="username"><?= $userName ?></a>
                    <?php
                        }
                    ?>
                    <ul class="dropdown-menu" id="menu">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="../../index.php">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Menu sidebar -->        
        <header class="welcome">
            <h1>Hi <span id="name"><?=$userName ?></span>, welcome to WaySy!</h1>
            <h2>Try our new features!</h2>
        </header>

        <div id="sidebar-menu" class="sidebar-menu">
            <div class="sidebar-header">
                <h2 id="menu">Menú</h2>
                <div class="line"></div>
            </div>
            <ul>
                <li><a href="">Main</a></li>
                <li><a href="">Transactions</a></li>
                <li><a href="">Categories</a></li>
                <li><a href="">Goals</a></li>
                <li><a href="">Budgets</a></li>
            </ul>
        </div>
        
        <!-- Sections (Temporal) -->
        <div class="sub-container">
            <!-- Content -->
            <section id="Goals">
                <h2>Goals</h2>
                <div class="line"></div>
                <span>You can view your goals here</span>
            </section>

            <section id="Budgets" class="hidden">
                <h2>Budgets</h2>
                <div class="line"></div>
                <span>You can view your budgets here</span>
            </section>

        </div>        
    </div>
    <script src="../../js/sidebarMenu.js"></script>
</body>
</html>