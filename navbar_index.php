<div class="navbar">
	<nav >
		<div class="navbar_dropdown" style="text-align:center;">Menu</div>
			<ul>
				
					<div class="navbar-width">

					<a href="index.php" ><li class="home">HOME</li></a>
					<li class="nav_line">|</li>
					<a href="rooms.php"><li>ROOMS</li></a>
					<li class="nav_line">|</li>
					<a href="gallery.php"><li>GALLERY</li></a>
					<li class="nav_line">|</li>
					<a href="specials.php"><li>SPECIALS</li></a>
					<li class="nav_line">|</li>
					<a href="meet_and_event.php"><li>MEETINGS & EVENTS</li></a>
					<li class="nav_line">|</li>
					<a href="contactus.php"><li>CONTACT</li></a>
					<li class="nav_line">|</li>
					<a href="directions.php"><li>DIRECTIONS</li></a>
					
					</div>
				
			</ul>
		
	</nav> 
   
</div>

<script>
$('.navbar_dropdown').on('click', function () {
		$('nav ul').toggleClass('dropdown_showing')
});
</script>