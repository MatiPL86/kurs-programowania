
<?php 
	$site = isset( $_GET['site'] ) ? $_GET['site'] : 'home';
	// za pomocą isset sprawdzam czy parametr site istnieje, $_GET pobiera wartość paramentru site, parametr site występuje w adresie strony i za jego pomocą zmieniam content strony
	// zapis powyższy oznacza, że jeśli site istnieje to wpisz go do zmiennej $site, a jeśli nie to do zmiennej $site wpisz słowo: home
	// poniżej komenda echo oznacza wyświetl wynik
	// w menu otwieram kod php aby sprawzić czy zmienna $site ustawiona wyżej jest równa home, lub c lub java lub js lub php lub css lub html i jeśli tak to za pomocą echo wyświetlam w kodzie html klasę active a jeśli nie to nie wyświetlam nic (pusty znak)
	
?>

<a class=" <?php echo $site == 'content' ? 'active' : '';  ?> " href="index.php">Strona Główna</a>
<a class=" <?php echo $site == 'jednostki' ? 'active' : '';  ?> " href="index.php?site=jednostki" title="Sprawdz">Jednostki</a>
<a class=" <?php echo $site == 'pojazdy' ? 'active' : '';  ?> " href="index.php?site=pojazdy" title="Zobacz">Pojazdy</a>
<a class=" <?php echo $site == 'wyposazenie' ? 'active' : '';  ?> " href="index.php?site=wyposazenie" title="Obczaj :D">wyposazenie</a>
<a class=" <?php echo $site == 'trening' ? 'active' : '';  ?> " href="index.php?site=trening" title="Looknij;p">trening</a>
