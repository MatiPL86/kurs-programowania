<!DOCTYPE html>
<html lang="">
<head>
    <!-- jakiś kod do pobierania zawratosci head.php -->
    <?php include "head.php";?>
    
</head>

<body>
    <div id="main">
        
        <div id="header">
        
            <?php include "header.php";?>
            
            
        </div>
        
    <div id="sidebar">
        
        <?php include "menu.php";?>
            
    </div>
        
        <div id="content">
        
            <!-- jakiś kod do pobierania zawratosci content.php lub innych -->
				
				<?php 
					include // komenda załączająca plik
					( 
						isset( $_GET['site'] ) // jeśli w adresie istnieje parametr site
						? // gdy istnieje
						$_GET['site'] // użyj parametru
						: // gdy nie istnieje
						"content" // użyj nazwy home
					) 
					. // łączenie tego co wyżej z tym co poniżej
					".php"; // dodanie rozszerzenia aby wyszedł adres np. js.php lub css.php
				?>
        
        </div>
        
        <div id="footer">
        
            <?php include "footer.php";?>
            
        
        </div>
        
        <div class="fixed">
        
          <?php include "coockies.php";?>
        
        </div>
        
    </div>
    
</body>
</html>
