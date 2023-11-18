<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="style.css">
    <style>
      .container{
	margin: 0px;
	padding: 0px;
justify-content: center;

}
    </style>
  </head>
<body>
  <?php session_start(); ?>
  
    <header>
      <div class="main"></div>
         <div class="logo">
            <img src="logo.png">
            
          <ul>
            <li><a href="pizza.php">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li class="active"><a href="menu.php">MENU</a></li> 
            <li ><a href="contact.html">CONTACT</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
          </ul>
          </div>
        </div>
      </header>
      <main>
        <div class="container">
          <div class="menu">
          <h1>Menu</h1>
          <div class="menu-container">
            <a href="veg.php" class="card-links">
            <div class="menu-item">
              <img src="vegpizza.jpg" alt="Veg Pizza">
              <h2>Veg Pizza</h2>
              <p>A delightful combination of fresh vegetables and savory cheese on a crispy crust. Perfect for veggie lovers!</p>
             </div>
            </a>
            <a href="nonveg.php" class="card-links">
            <div class="menu-item">
              <img src="nonveg.jpg" alt="Non-Veg Pizza">
              <h2>Non-Veg Pizza</h2>
              <p>A savory combination of premium meats, cheese, and vegetables on a crispy crust. Satisfy your carnivorous cravings!</p>
            </div>
           </a>
           <a href="beverages.php" class="card-links">
            <div class="menu-item">
              <img src="beverages.jpg" alt="Bevarages">
              <h2>Bevarages</h2>
              <p>Our Beverages, They come in various forms, including hot and cold options. Go grab them now!</p>
            </div>
    
  
          <!-- Add more menu items as needed -->
  
      </div>
      </main>
      
</body>
</html>