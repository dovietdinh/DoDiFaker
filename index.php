<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" ref="stylesheet">
    <title>Giày Faker</title>
    <!--Bootstrap-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">

    <style>
        .navbar-light .navbar-nav .nav-link {
            color: black;
        }
        
        @media (min-width: 600px) {
            li.nav-item>a {
                font-weight: bolder;
                font-size: 1.1em;
            }
            ul.navbar-nav.nav-1>li {
                padding-right: 5em;
            }
        }
        
        @media (min-width: 1000px) {
            li.nav-item>a {
                font-weight: bolder;
                font-size: 1.2em;
            }
            ul.navbar-nav.nav-1>li {
                padding-right: 7em;
            }
        }
        
        @media (min-width: 600px) {
            .carousel-inner {
                height: 450px;
            }
        }
        
        @media (min-width: 1000px) {
            .carousel-inner {
                height: 500px;
            }
        }
        
        @media (min-width: 1200px) {
            .carousel-inner {
                height: 650px;
            }
        }
        
        .banner {
            width: 93%;
            padding-top: 1%;
            margin: 0 auto;
        }
        
        .bg-yellow {
            background: yellow;
        }
        
        .bg-red {
            background: red;
        }
        
        .bg-green {
            background: green;
        }
        
        .bg-blue {
            background: blue;
        }
        
        .bg-title {
            background: violet;
            ;
        }
        
        p.format-name {
            font-size: 2.1em;
            margin-top: 1%;
            margin-bottom: 1px;
        }
        
        .card {
            margin-top: 2%;
        }
    </style>


</head>

<body>

    <nav class=" navbar navbar-expand-md bg-dark navbar-dark fixed-tops   " style="background:white">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Giày Faker</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
            <ul class="navbar-nav nav-1">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Giày </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#adidas">Adidas</a>
                        <a class="dropdown-item" href="#balenciaga-giay">Balenciaga</a>
                        <a class="dropdown-item" href="#vans">Vans</a>
                        <a class="dropdown-item" href="#nike-giay">Nike</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Dép </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#balenciaga-dep">Balenciaga</a>
                        <a class="dropdown-item" href="#crocs">Crocs</a>
                        <a class="dropdown-item" href="#jordan">Jordan</a>
                        <a class="dropdown-item" href="#nike-dep">Nike</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#superFace"><span>Super Face</span></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="#Aboutus">About us</a>
                </li>
            </ul>




        </div>

    </nav>

    <div class="banner">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
                <li data-target="#demo" data-slide-to="5"></li>
                <li data-target="#demo" data-slide-to="6"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="#adidas"><img src="images/adidas/040e19f3fe831bdd4292.jpg" alt="addias" width="100%" height="100%"></a>
                </div>
                <div class="carousel-item">
                    <a href="#adidas"><img src="images/adidas/4c438b9e6cee89b0d0ff.jpg" alt="addias" width="100%" height="100%"></a>
                </div>

                <div class="carousel-item">
                    <a href="#nike">
                        <img src="images/nike/72b8d01b3feddfb386fc.jpg" alt="nike" width="100%" height="100%">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#nike">
                        <img src="images/nike/2e649313016aef34b67b.jpg" alt="nike" width="100%" height="100%">
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="#vans"> <img src="images/vans/48e37a157fd89f86c6c9.jpg" alt="vans" width="100%" height="100%">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#vans"></a><img src="images/vans/59672633ae374e691726.jpg" alt="vans" width="100%" height="100%">
                </div>
                <div class="carousel-item">
                    <a href="#vans"> <img src="images/vans/26907229_1563192520444293_3786401844908349106_n.jpg" alt="vans" width="100%" height="100%">
                    </a>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

    <div class="product">
        <div class="giay" id="giay">
            <div id="adidas">
                <div class="container-fluid">
                    <p class="format-name">Adidas</p>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 ">
                            <div class="card">
                                <img class="card-img-top" src="images/adidas/1469170834904_22010.jpg" alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title adidas-name">John Doe</h4>
                                    <p class="card-text">Giá: <span class="adidas-mony">100000</span><sup>đ</sup></p>
                                    <a href="#" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="card">
                                <img class="card-img-top" src="images/adidas/1469170834904_22010.jpg" alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title adidas-name">John Doe</h4>
                                    <p class="card-text">Giá: <span class="adidas-mony">100000</span><sup>đ</sup></p>
                                    <a href="#" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="card">
                                <img class="card-img-top" src="images/adidas/1469170834904_22010.jpg" alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title adidas-name">John Doe</h4>
                                    <p class="card-text">Giá: <span class="adidas-mony">100000</span><sup>đ</sup></p>
                                    <a href="#" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 ">
                            <div class="card">
                                <img class="card-img-top" src="images/adidas/1469170834904_22010.jpg" alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title adidas-name">John Doe</h4>
                                    <p class="card-text">Giá: <span class="adidas-mony">100000</span><sup>đ</sup></p>
                                    <a href="#" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--balenciaga-giay-->
            <div id="balenciaga-giay">
                <div class="container-fluid">
                    <p class="format-name">Balenciaga</p>
                    <div class="row">
                    </div>
                </div>
            </div>


            <!--vans-->
            <div id="vans">
                <div class="container-fluid">
                    <p class="format-name">Vans</p>
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

<script>
    var name_product = ['Adidas', 'Balenciaga', 'Nike', 'Vans'];
    var product_vans = [10000, 20000, 2000, 1212] //ten
        +
        ['vấ', 'ádasdasd', 'ádasd']; // giá

    function formatNumber(nStr, decSeperate, groupSeperate) { //use formatNumber(number input,'.',',')
        nStr += '';
        x = nStr.split(decSeperate);
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + groupSeperate + '$2');
        }
        return x1 + x2;
    }

    function create_col_product_HTML(product_name, mony, id_product) {

    }
</script>


</html>