<?php
require_once('sudo/assets/config/config.php');

// Check if the search form is submitted
if(isset($_GET['search'])) {
    $searchQuery = $_GET['search'];
    // Perform a search query in your database
    $ret = "SELECT * FROM il_books WHERE b_title LIKE '%$searchQuery%'";
} else {
    // If the search form is not submitted, fetch all books
    $ret = "SELECT * FROM il_books";
}

$stmt = $mysqli->prepare($ret);
$stmt->execute();
$res = $stmt->get_result();
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home | St. Mark's Institute Library</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/cardslider.css">
    <link rel="stylesheet" href="css/responsiveslides.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/overright.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/dual-login.css"> <!--new added for student and librarian login-->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body data-spy="scroll" data-target="#mainmenu" data-offset="50">
    
    <header class="relative" id="sc1">
        <div class="header-bg relative home-slide">
            <div class="item">
                <img src="images/slide/slide1.jpg" alt="library">
            </div>
            <div class="item">
                <img src="images/slide/slide2.jpg" alt="library">
            </div>
            <div class="item">
                <img src="images/slide/slide3.jpg" alt="library">
            </div>
            <div class="item">
                <img src="images/slide/slide4.jpg" alt="library">
            </div>
        </div>
        <div class="mainmenu-area navbar-fixed-top" data-spy="affix" data-offset-top="10">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <div class="space-10"></div>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#sc1" class="navbar-left show"><img src="images/logo.png" alt="library"></a>
                        <div class="space-10"></div>
                    </div>
                    <div class="navbar-right in fade" id="mainmenu">
                        <ul class="nav navbar-nav nav-white text-uppercase">
                            <li class="active">
                                <a href="#sc1">Home</a>
                            </li>
                            <li>
                                <a href="books.php">Books</a>
                            </li>
                            <li>
                                <a href="lib_user/pages_std_index.php">Student Login</a>
                            </li>
                            <li>
                                <a href="sudo/pages_sudo_index.php">Librarian Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="space-100"></div>
        <div class="header-text">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
                        <div class="jumbotron">
                            <h1 class="text-white">St. Mark's Institute Library Management System</h1>
                            <p class="text-white">Empowering your child's mind and Enriching his spirit</p>
                        </div>
                        <div class="title-bar white">
                            <ul class="list-inline list-unstyled">
                                <li><i class="icofont icofont-square"></i></li>
                                <li><i class="icofont icofont-square"></i></li>
                            </ul>
                        </div>
                        <div class="space-40"></div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay="0.5s">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="book">
                                        <form action="books.php" method="GET">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="search" placeholder="Enter book name, publisher or author">
                                                <div class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary"><i class="icofont icofont-search-alt-2"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="author">
    <form action="books.php" method="GET">
        <div class="input-group">
            <input type="text" class="form-control" name="author_search" placeholder="Enter author name">
            <div class="input-group-btn">
                <button type="submit" class="btn btn-primary"><i class="icofont icofont-search-alt-2"></i></button>
            </div>
        </div>
    </form>
</div>
<div class="tab-pane fade" id="publisher">
    <form action="books.php" method="GET">
        <div class="input-group">
            <input type="text" class="form-control" name="publisher_search" placeholder="Enter publisher name">
            <div class="input-group-btn">
                <button type="submit" class="btn btn-primary"><i class="icofont icofont-search-alt-2"></i></button>
            </div>
        </div>
    </form>
</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-100"></div>
    </header>
    
    <section>
        <div class="space-80"></div>
        <div class="container"> <!--
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
                    <h2>Book <strong>Categories</strong></h2>
                    <div class="space-20"></div>
                    <div class="title-bar blue">
                        <ul class="list-inline list-unstyled">
                            <li><i class="icofont icofont-square"></i></li>
                            <li><i class="icofont icofont-square"></i></li>
                        </ul>
                    </div>
                    <div class="space-30"></div>
                    <p>Most popular book categories to get your learning started</p>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row text-center">
            </div>
            <div class="space-60"></div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <a href="books.php" class="btn btn-primary">See More</a>
                </div>
            </div>
            <div class="space-80"></div> -->

            <!--New Login and Librarian Login-->
            <div id="allTheThings">
			<div id="member">
				<a href="lib_user/pages_std_index.php">
					<img src="img/ic_membership.svg" width="250px" height="auto"/><br />
					&nbsp;Member Login
				</a>
			</div>
			<div id="verticalLine">
				<div id="librarian">
					<a id="librarian-link" href="sudo/pages_sudo_index.php">
						<img src="img/ic_librarian2.svg" width="250px" height="220" /><br />
						&nbsp;&nbsp;&nbsp;Librarian Login
					</a>
				</div>
			</div>
		</div>
        </div>
    </section>
    
    <!--Footer-->
    <?php require_once('partials/footer.php');?>
    
    <!-- Vendor-JS -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    
    <!-- Plugin-JS -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script src="js/jquery.cardslider.min.js"></script>
    <script src="js/pagination.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/plugins.js"></script>
    
    <!-- Active-JS -->
    <script src="js/main.js"></script>
</body>
</html>

