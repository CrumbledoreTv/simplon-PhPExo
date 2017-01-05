<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">

    <title>Exo1</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/materialize.min.css" media="screen" title="no title">

    <?php $user = 2; ?>

  </head>

  <body class="<?php if($user==1){
    echo 'body1';
  }elseif($user==2){
    echo 'body2';
  }else{
    echo 'body3';
  }?>">

    <nav>
      <div class="nav-wrapper black">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="sass.html">Sass</a></li>
          <li><a href="badges.html">Components</a></li>
          <li><a href="collapsible.html">JavaScript</a></li>
        </ul>
      </div>
    </nav>


<div class="container-fluid">
    <div class="row">
      <img src="<?php if($user==1){
        echo "images/foret.jpg";
      }elseif($user==2){
        echo "images/ocean.jpg";
      }else{
        echo "images/ville.jpg";
      }
      ?>"/>
    </div>


    <div class="row">
      <div class="col l3">
        <img src="<?php if($user==1){
          echo "images/profil1.jpg";
        }elseif($user==2){
          echo "images/profil2.jpg";
        }else{
          echo "images/profil3.jpg";
        }
        ?>">
        </div>

        <div class="col l9">
          <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum.</p>
        </div>
      </div>
    </div>

  </div>

  <footer class="page-footer black">
           <div class="container">
             <div class="row">
               <div class="col l6 s12">
                 <h5 class="white-text">Footer Content</h5>
                 <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
               </div>
               <div class="col l4 offset-l2 s12">
                 <h5 class="white-text">Links</h5>
                 <ul>
                   <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                   <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                   <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                   <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                 </ul>
               </div>
             </div>
           </div>
           <div class="footer-copyright">
             <div class="container">
             © 2014 Copyright Text
             <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
             </div>
           </div>
         </footer>

  </body>
</html>
