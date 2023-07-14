<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/fontawesome.min.css">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <script src="JS/bootstrap.js"></script>
    <link rel="stylesheet" href="./CSS/package.css">
    <link rel="stylesheet" href="./CSS/mystyle.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-black myNav" id="myHeader" >

<div class="container-fluid">
    <img src="images/logo-light.png" alt="" width="190px" class="d-inline-block align-text-top">

    <button style="background-color: white;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a style="color: white;" class="nav-link active" aria-current="page" href="index.php"><span>HOME</span></a>
      </li>

      <li class="nav-item">
        <a style="color: white;" class="nav-link active" aria-current="page" href="classes.php"> <span>CLASSES</span> </a>
      </li>

      <li class="nav-item">
        <a style="color: white;" class="nav-link active" aria-current="page" href="portfolio.php"> <span>PORFOLIO</span> </a>
      </li>

      <li class="nav-item">
        <a style="color: white;" class="nav-link active" aria-current="page" href="contact.php"> <span>CONTACT US</span> </a>
      </li>

      <li class="nav-item">
        <a style="color: white;" class="nav-link active" aria-current="page" href="signup.php"> <span>SIGNUP</span> </a>
      </li>

      <li class="nav-item">
        <a style="color: white;" class="nav-link active" aria-current="page" href="shop.php"> <span>SHOP</span> </a>
      </li>

      <li class="nav-item">
        <i class="fa-solid fa-magnifying-glass"></i>
      </li>

      <li class="fa-solid" id="slash">\</li>

      <li class="nav-item">
        <i class="fa-solid fa-cart-plus"></i>
      </li>
      
    </ul>
  </div>
</div>
</nav>

    <section class="section_9">
        <div class="s9_container">
            <div class="s9ConDiv1">
              <div class="s9ConD1Div1">
                <div>
                  <h2>PRICING TABLE</h2>
                  <p>
                    This also meant we needed to provide a learning environment run by experienced and successful coaches. However, our most <br>
                    important goal was to create a welcoming atmosphere.
                  </p>
                  <div id="DividerEdit" class="divider"></div>
                  
                  <form action="packages.php" method="POST">
                    <label class="IDINPLAB" for="IDInp">Enter Your Email Here  : </label>
                    <input type="number" id="IDInp" name="inputOfUserID" value="75740">
                    <input type="submit" name="subm">
                  </form>
                </div>

              </div>
  
              <div class="s9ConD1Div2">
                <div class="container">
                  <div class="row row-cols-2 row-cols-lg-3">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 s9BootConDiv1">
                      <div class="s9BootConD1Div1">
                        <p>STANDARD</p>
                        <p><span>$</span> 120 <span>/ per month</span></p>
                        <p class="tri"></p>
                        <ul>
                          <li class="checkedMark"><span>Unlimited </span> <span> access to the gym</span></li>
                          <li class="checkedMark"><span>7 classes </span><span>per week</span></li>
                          <li class="checkedMark"><span>Six Month </span><span>memberships</span></li>
                          <li class="checkedMark"><span>FREE </span><span>drinking package</span></li>
                          <li class="unCheckedMark"><span class="canc">20 sessions </span><span class="canc"> Free Massage</span></li>
                          <li class="unCheckedMark"><span class="canc">3 Month </span><span class="canc">Free personal training</span></li>

                          <form action="packages.php" method="POST">                          
                            <input class="Suppbtn" type="submit" value="Add To Cart" name="GsFor120">
                          </form>
                        
                          
                        </ul>
                      </div>
                    </div>
  
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 s9BootConDiv1">
                      <div class="s9BootConD1Div1">
                        <p>ADVANCE</p>
                        <p><span>$</span> 180 <span>/ per month</span></p>
                        <p class="tri"></p>
                        <ul>
                          <li class="checkedMark"><span>Unlimited </span> <span> access to the gym</span></li>
                          <li class="checkedMark"><span>7 classes </span><span>per week</span></li>
                          <li class="checkedMark"><span>Six Month </span><span>memberships</span></li>
                          <li class="checkedMark"><span>FREE </span><span>drinking package</span></li>
                          <li class="checkedMark"><span>20 sessions </span><span> Free Massage</span></li>
                          <li class="unCheckedMark"><span class="canc">3 Month </span><span class="canc">Free personal training</span></li>
                          <input class="Suppbtn" type="submit" value="Add To Cart" name="GsFor180">
                          
                        </ul>
                      </div>
                    </div>
  
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 s9BootConDiv1">
                      <div class="s9BootConD1Div1">
                        <p>PREMIUM</p>
                        <p><span>$</span> 250 <span>/ per month</span></p>
                        <p class="tri"></p>
                        <ul>
                          <li class="checkedMark"><span>Unlimited </span> <span> access to the gym</span></li>
                          <li class="checkedMark"><span>7 classes </span><span>per week</span></li>
                          <li class="checkedMark"><span>Six Month </span><span>memberships</span></li>
                          <li class="checkedMark"><span>FREE </span><span>drinking package</span></li>
                          <li class="checkedMark"><span>20 sessions </span><span> Free Massage</span></li>
                          <li class="checkedMark"><span>3 Month </span><span>Free personal training</span></li>
                          <input class="Suppbtn" type="submit" value="Add To Cart" name="GsFor250">
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>
</body>
</html>