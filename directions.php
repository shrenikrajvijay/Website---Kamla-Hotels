

<?php include_once('include_head.php');?>

<body style="font-family:myriad pro">


	<div class="header">
		<?php include('header.php');?>
    <?php include('navbar_directions.php');?>

	</div>	
	

  <div class="wholepageslider-map">
        <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d106092.64032909529!2d-117.923615!3d33.802118000000014!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcd7df45f1e17b%3A0x429a1a2d3dec273!2sEden+Roc+Inn+%26+Suites+Anaheim!5e0!3m2!1sen!2sus!4v1421276395007" width="600" height="450" frameborder="0" style="border:0"></iframe>
              </div> 
      </div>



	<div class="footer">
		<?php include('footer.php');?>
	</div>




	
<script>
  $(function() {
    $( "#datepicker1" ).datepicker({
      showOn: "button",
      // buttonImage: "images/calendar.gif",
      buttonImageOnly: true,
      buttonText: "Select date"
    });
  });
   $(function() {
    $( "#datepicker2" ).datepicker({
      showOn: "button",
      // buttonImage: "images/calendar1.gif",
      buttonImageOnly: true,
      buttonText: "Select date"
    });
  });
  </script>
  
</body>
</html>