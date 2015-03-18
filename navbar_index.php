<div class="navbar">
	<nav >
		<div class="navbar_dropdown" style="text-align:center;">Menu</div>
			<ul>
				
					<div class="navbar-width">

					<a href="index.php"><li onclick="myfunction(this);" id="home" class="home">HOME</li></a>
					<li  class="nav_line">|</li>
					<a href="rooms.php"><li onclick="myfunction(this);" id="rooms">ROOMS</li></a>
					<li class="nav_line">|</li>
					<a href="gallery.php"><li id="gallery">GALLERY</li></a>
					<li class="nav_line">|</li>
					<a href="specials.php"><li id="specials">SPECIALS</li></a>
					<li class="nav_line">|</li>
					<a href="meet_and_event.php"><li id="meet">MEETINGS & EVENTS</li></a>
					<li class="nav_line">|</li>
					<a href="contactus.php"><li id="contact">CONTACT</li></a>
					<li class="nav_line">|</li>
					<a href="directions.php"><li id="directions">DIRECTIONS</li></a>
					
					</div>
				
			</ul>
		
	</nav> 
   
</div>

<script>
$('.navbar_dropdown').on('click', function () {
		$('nav ul').toggleClass('dropdown_showing')
});

</script>
<script>
function myfunction(context){
	
	
	document.getElementById("home").style.color="white";
	document.getElementById("rooms").style.color="white";
	document.getElementById("gallery").style.color="white";
	document.getElementById("specials").style.color="white";
	document.getElementById("meet").style.color="white";
	document.getElementById("contact").style.color="white";
	document.getElementById("directions").style.color="white";
	context.style.color="black";
}
</script>