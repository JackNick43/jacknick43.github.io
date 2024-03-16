<!DOCTYPE html>
<html lang="it">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../styles/style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
      <title>JackComputers</title>
    </head>
    <body>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid text-center">
                <a class="navbar-brand" href="index.php">JackComputers</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">PC</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Hardware
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Accessori Mod</a></li>
                                <li><a class="dropdown-item" href="#">Alimentatori</a></li>
                                <li><a class="dropdown-item">Case</a></li>
                                <li><a class="dropdown-item" href="#">Dissipatori</a></li>
                                <li><a class="dropdown-item" href="#">Memorie</a></li>
                                <li><a class="dropdown-item" href="#">Processori</a></li>
                                <li><a class="dropdown-item" href="#">Schede Madri</a></li>
                                <li><a class="dropdown-item" href="#">Schede Video</a></li>
                                <li><a class="dropdown-item" href="#">Ventole</a></li>
                                <li><a class="dropdown-item" href="#">SSD</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Accessori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Supporto</a>
                        </li>
                    </ul>
                    <form class="d-flex"> 
                        <input type="text" name="" style="border-radius: 15px; border: none;" placeholder=" Cerca prodotti...">
                        <a href="#">
                            <ion-icon class="search" name="search"></ion-icon>
                        </a>    
                    </form>
                    <div class="icons">
                        <div class="button-cart" onclick="addToCart()">
                            Carrello<ion-icon name="cart-outline"></ion-icon><div class="cart-counter">0</div>
                        </div>
                        <div class="button-login">
                            Login<ion-icon name="person-outline"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- LOGIN/REGISTRATI-->
        <div class="box">
            <span class="close"><ion-icon name="close" class="icon-close"></ion-icon></span>
            <!-- LOGIN -->
            <div class="form-box login">
                <h2>Login</h2>
                <form action="../login/login.php" method="post" autocomplete="off">
                    <input autocomplete="false" name="hidden" type="text" style="display:none;">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                        <br>
                    </div>
                    <div class="input-box pass-login">
                        <span class="icon"><ion-icon name="eye-off"></ion-icon></span>
                        <input type="password" name="password"  required>
                        <label>Password</label>
                        <br>
                    </div>
                    <div class="ricorda">
                        <label><input type="checkbox"></input> Ricordami</label>
                        <a href="#">Password dimenticata?</a>
                    </div>
                    <button type="submit" name="submit" class="login-btn">Login</button>
                    <div class="register">
                        <p>Non hai un account? <a href="#" class="register-link">Registrati</a></p>
                    </div>
                </form>
            </div>

            <!-- REGISTRATI -->
            <div class="form-box registrati">
                <h2>Registrati</h2>
                <form action="../login/login.php" method="post" autocomplete="off">
                    <input autocomplete="false" name="hidden" type="text" style="display:none;">
                    <div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="document-text"></ion-icon></span>
                            <input type="text" name="nome" required>
                            <label>Nome</label>
                            <br>
                        </div>
                    </div>

                    <div class="input-box">
                        <span class="icon"><ion-icon name="document-text"></ion-icon></span>
                        <input type="text" name="cognome" required>
                        <label>Cognome</label>
                        <br>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                        <br>
                    </div>
                    <div class="input-box pass-register">
                        <span class="icon"><ion-icon name="eye-off"></ion-icon></span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                        <br>
                    </div>
                    <div class="input-box pass-register">
                        <span class="icon"><ion-icon name="eye-off"></ion-icon></span>
                        <input type="password" name="confirm-password" required>
                        <label>Conferma Password</label>
                        <br>
                    </div>
                    <div class="ricorda">
                        <label><input type="checkbox"></input> Accetto i termini e condizioni</label>
                    </div>
                    <button type="submit" name="submit" class="login-btn">Registrati ora</button>
                    <div class="register">
                        <p>Hai già un account? <a href="#" class="login-link">Login</a></p>
                    </div>
                </form>
            </div>
        </div>

        <!-- CAROSELLO -->
        <div class="main">
            <!-- SIDEBAR LEFT-->
            <div class="sidebar-left">
                <p>qui andranno i filtri di ricerca muhahahahahaahahdai</p>
            </div>
        
            <div class="custom-carousel">
                <div id="carouselExampleIndicators" class="carousel slide w-75 mx-auto custom-carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../img/pc-carousel-1.jpg" class="d-block w-100" alt="img1">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/pc-carousel-2.jpg" class="d-block w-100" alt="img2">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/pc-carousel-3.jpg" class="d-block w-100" alt="img3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- CONTENT -->
                <div class="content-container content">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex cupiditate, magni necessitatibus tempora sunt, quasi possimus accusamus impedit, maxime non eligendi dolor repellat deserunt omnis obcaecati laboriosam quis architecto amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cupiditate nemo accusantium? Doloremque labore asperiores distinctio magnam vero enim similique consectetur quas iusto! Vitae consectetur distinctio accusamus! Dolor, dolores nihil? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat soluta sequi nostrum adipisci praesentium ea rerum culpa, perspiciatis ab tempore sed consectetur incidunt eius tenetur pariatur sapiente! Laudantium, provident iusto!
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex cupiditate, magni necessitatibus tempora sunt, quasi possimus accusamus impedit, maxime non eligendi dolor repellat deserunt omnis obcaecati laboriosam quis architecto amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cupiditate nemo accusantium? Doloremque labore asperiores distinctio magnam vero enim similique consectetur quas iusto! Vitae consectetur distinctio accusamus! Dolor, dolores nihil? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat soluta sequi nostrum adipisci praesentium ea rerum culpa, perspiciatis ab tempore sed consectetur incidunt eius tenetur pariatur sapiente! Laudantium, provident iusto!
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex cupiditate, magni necessitatibus tempora sunt, quasi possimus accusamus impedit, maxime non eligendi dolor repellat deserunt omnis obcaecati laboriosam quis architecto amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cupiditate nemo accusantium? Doloremque labore asperiores distinctio magnam vero enim similique consectetur quas iusto! Vitae consectetur distinctio accusamus! Dolor, dolores nihil? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat soluta sequi nostrum adipisci praesentium ea rerum culpa, perspiciatis ab tempore sed consectetur incidunt eius tenetur pariatur sapiente! Laudantium, provident iusto!
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex cupiditate, magni necessitatibus tempora sunt, quasi possimus accusamus impedit, maxime non eligendi dolor repellat deserunt omnis obcaecati laboriosam quis architecto amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cupiditate nemo accusantium? Doloremque labore asperiores distinctio magnam vero enim similique consectetur quas iusto! Vitae consectetur distinctio accusamus! Dolor, dolores nihil? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat soluta sequi nostrum adipisci praesentium ea rerum culpa, perspiciatis ab tempore sed consectetur incidunt eius tenetur pariatur sapiente! Laudantium, provident iusto!
                </div>
            </div>
            
            <!-- SIDEBAR RIGHT-->
            <div class="sidebar-right">
                <h5>PARTNERS</h5>
                <a href="#AMD-page"><img src="../img/brands/AMD.jpg" alt="AMD"></a>
                <a href="#ASUS-page"><img src="../img/brands/ASUS.jpg" alt="ASUS"></a>
                <a href="#GIGABYTE-page"><img src="../img/brands/gigabyte.jpg" alt="GIGABYTE"></a>
                <a href="#INTEL-page"><img src="../img/brands/intel.jpg" alt="INTEL"></a>
                <a href="#MSI_page"><img src="../img/brands/MSI.jpg" alt="MSI"></a>
                <a href="#NVIDIA-page"><img src="../img/brands/nvidia.jpg" alt="NVIDIA"></a>
                <a href="#SAPPHIRE-page"><img src="../img/brands/sapphire.jpg" alt="SAPPHIRE"></a>
            </div>
        </div>
        
        
        
        <!-- NEWSLETTER -->
        <div class="container newsletter">
            <h1>ISCRIVITI ALLA NEWSLETTER</h1>

            <div class="inserisci-email">
                <div class="registrati-news">    
                    <input type="email" placeholder="Inserisci il tuo indirizzo email">
                    <input type="button" value="Registrati">
                </div>
                <div class="acc-reg">
                    <label><input type="checkbox">Dichiaro di aver almeno 14 anni e di volermi iscrivere alla newsletter per ricevere comunicazioni commerciali e promozionali.</label>
                </div>
                
            </div>


        </div>

        <!-- PRE-FOOTER -->
        <div class="container pre-footer">
            <div class="row">
                <div class="col">
                    <h5>Consegna</h5>
                    <h5>Gratuita e veloce</h5>
                    <p>Ricevi gli ordini in 3 giorni lavorativi</p>
                </div>
                <div class="col">
                    <h5>Reso Gratuito</h5>
                    <h5>Gratuita e veloce</h5>
                    <p>Restituisci i prodotti entro 30 giorni</p>
                </div>
                <div class="col">
                    <h5>Pagamento a Rate</h5>
                    <h5>Gratuita e veloce</h5>
                    <p>Paga con <strong>Klarna</strong> in 3 rate senza interessi</p>
                </div>
                <div class="col">
                    <h5>Assistenza dedicata</h5>
                    <h5>Gratuita e veloce</h5>
                    <p>Lunedì-Venerdì (Eccetto festivita)</p>
                    <p style="margin-top:-17px;">8:00 - 18:00 Tel. 392 065 4466 da fisso o mobile</p>
                </div>
            </div> 
        </div>


        <!-- FOOTER -->
        <div class="container-fluid footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Contact Us</h5>
                        <p><i class="fa-solid fa-envelope" style="margin-right: 7px"></i><a href="mailto:info@example.com">jacopo.nicolini05@gmail.com</a></p>
                        <p><i class="fa-solid fa-envelope" style="margin-right: 7px"></i><a href="mailto:info@example.com">player28p28@gmail.com</a></p>
                        <p><i class="fa-solid fa-phone" style="margin-right: 7px"></i>+39 392 065 4466</p>
                    </div>
                    <div class="col-md-3">
                        <h5>Where?</h5>
                        <p><i class="fa-solid fa-clock" style="margin-right: 7px"></i>Orario: 8:00 - 14:00 / 14:30 - 19:00</p>
                        <p><i class="fa-solid fa-location-dot" style="margin-right: 7px"></i><a href="https://www.google.it/maps/place/Via+dei+Mulini,+7,+23899+Robbiate+LC/@45.6875661,9.4438905,17z/data=!3m1!4b1!4m6!3m5!1s0x4786addf101cbba1:0x65cfa78b561ec371!8m2!3d45.6875624!4d9.4464654!16s%2Fg%2F11c5lcn57d?entry=ttu" target="blank">Via dei Mulini 7, Robbiate(LC)</a></p>
                    </div>
                    <div class="col-md-3">
                        <h5>About Us</h5>
                        <ul class="list-unstyled">
                            <li><a href="#"></a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Follow Us</h5>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="../scripts/script.js"></script>
    </body>
</html>