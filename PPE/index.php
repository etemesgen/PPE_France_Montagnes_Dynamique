<?php
    include_once('./src/data.inc.php');
?>

<?php
    require_once("./src/header.inc.php");
?>
<body>
<header> 
      <div id="navbar" role="navigation" aria-labelledby="navbar"> 
        <img src="./asset/logo.png" alt="logo">   
        <ul>
          <li><a href="#guide_des_stations" class="active">GUIDE DES STATIONS</a></li>
          <li><a href="#">MAGAZINE</a></li>
          <li><a href="#">INFO LIVE</a></li>
          <li><a href="#reservation">RESÉRVATION</a></li>
        </ul>
        <section id="loop">  
          <img src="./asset/loop.png" alt="loop">
        </section>
      </div>
    </header> 
</header>
    <main>
        <?php
           include_once("./src/main.inc.php");
        ?>
    </main>
<?php
    include_once('./src/footer.inc.php');
?>

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="./js/app.js"></script>
    
</body>
</html>