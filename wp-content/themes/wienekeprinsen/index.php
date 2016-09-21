<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wieneke Prinsen</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
  </head>
  <body>
    <div class="container-fluid">
      <header>
        <nav class="navbar navbar-fixed-top" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="images/logo-groot.jpg" alt=""></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php 
              /* Primary navigation */
              wp_nav_menu( array(
                'menu' => 'top_menu',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'nav',
                //Process nav menu using our custom nav walker
                'walker' => new wp_bootstrap_navwalker())
              );
            ?>
              <!-- <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Over Wieneke</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reflexologie <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Volwassenen</a></li>
                    <li><a href="#">Kinderen</a></li>
                    <li><a href="#">Baby's</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Massages <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Volwassenen</a></li>
                    <li><a href="#">Zwangere vrouwen</a></li>
                    <li><a href="#">Baby's</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Workshops <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Babyreflexologie</a></li>
                    <li><a href="#">Slapeloosheid kinderen</a></li>
                    <li><a href="#">Masseren volwassenen</a></li>
                  </ul>
                </li>
                <li><a href="#">Cadeaubon</a></li>
                <li><a href="#">Tarieven</a></li>
                <li><a href="#">Contact</a></li>
              </ul> -->
              </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </header>
          <div class="container margin-top">
            <div class="row callbackbuttons">
              <div class="col-md-4">
                <div class="col-md-12 bgpurple">
                  <h1 class="callbackbutton"><a href="#">Reflexologie</a></h1>
                  <p class="callbackp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus libero sed expedita consectetur labore odio, qui error sint.</p>
                  <button>Volwassenen</button>
                  <button>Kinderen</button>
                  <button>Baby's</button>
                </div>
              </div>
              <div class="col-md-4">
                <div class="col-md-12 bgpink">
                  <h1 class="callbackbutton"><a href="#">Massages</a></h1>
                  <p class="callbackp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus libero sed expedita consectetur labore odio, qui error sint.</p>
                  <button>Volwassenen</button>
                  <button>Zwangere vrouwen</button>
                  <button>Baby's</button>
                </div>
              </div>
              <div class="col-md-4">
                <div class="col-md-12 bggrey">
                  <h1 class="callbackbutton"><a href="#">Workshops</a></h1>
                  <p class="callbackp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus libero sed expedita consectetur labore odio, qui error sint.</p>
                  <button>Babyreflexologie</button>
                  <button>Slapeloosheid kinderen</button>
                  <button>Masseren volwassenen</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 call-to-action">
              <p>Maak een afspraak!</p>
              <button><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></span> 0646165400</button>
            </div>
          </div>
          <div class="container">
            <div class="row abouttitle">
              <div class="col-md-12">
                <h1>Over Wieneke</h1>
              </div>
            </div>
            <div class="row aboutcontent">
              <div class="col-md-4">
                <div class="col-md-12">
                  <img src="images/wieneke.jpg" alt="">
                </div>
              </div>
              <div class="col-md-8">
                <div class="col-md-12">
                  <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates deleniti maiores qui obcaecati ut, iste enim dolorum sint? Modi optio sit cumque quam corrupti esse, minus voluptates eligendi sequi amet. >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates deleniti maiores qui obcaecati ut, iste enim dolorum sint? Modi optio sit cumque quam corrupti esse, minus voluptates eligendi sequi amet.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates deleniti maiores qui obcaecati ut, iste enim dolorum sint? Modi optio sit cumque quam corrupti esse, minus voluptates eligendi sequi amet. >Lorem ipsum dolor sit amet, consectetur adipisicing elit."</p>
                </div>
              </div>
            </div>
            <div class="row price">
              <div class="col-md-6 pricelist">
                <div class="priceTitle"><span class="min">+</span> <h3>Reflexologie</h3></div>
                <div class="prices">
                  <p>
                    lorem ipsum<br>
                    lorem ipsum<br>
                    lorem ipsum<br>
                    lorem ipsum
                  </p>
                </div>
                <div class="priceTitle"><span class="min">+</span> <h3>Massages</h3></div>
                <div class="prices">
                  <p>
                    lorem ipsum<br>
                    lorem ipsum<br>
                    lorem ipsum<br>
                    lorem ipsum
                  </p>
                </div>
                <div class="priceTitle"><span class="min">+</span> <h3>Workshops</h3></div>
                <div class="prices">
                  <p>
                    lorem ipsum<br>
                    lorem ipsum<br>
                    lorem ipsum<br>
                    lorem ipsum
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row footer">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="col-md-12">
                    <h1 class="callbackbutton">Contact</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus libero sed expedita consectetur labore odio, qui error sint.</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="col-md-12">
                    <h1 class="callbackbutton">Locaties</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus libero sed expedita consectetur labore odio, qui error sint.</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="col-md-12">
                    <h1 class="callbackbutton">Openingstijden</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus libero sed expedita consectetur labore odio, qui error sint.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </body>
    </html>