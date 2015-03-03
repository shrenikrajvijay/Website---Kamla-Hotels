<script>
  
  
  $(function() {
    $( "#datepicker1" ).datepicker();
  });
  
  $(function() {
    $( "#datepicker2" ).datepicker();
  });
  
// var full=new Date();
// var day=full.getDate();
// var mon=full.getMonth()+1;
// var  year=full.getYear();
// var date=mon+"/"+day+"/"+year;
// alert(date);

  $('#datepicker1').datepicker({
   
    autoSize: true,
    duration:'slow',
    
    showAnim:"slideDown",
    minDate: '0', // The min date that can be selected, i.e. 30 days from the 'now'
    maxDate: '+1m +1w +1d', // The max date that can be selected, i.e. + 1 month, 1 week, and 1 days from 'now'
    onClose: function( selectedDate ) {
          // selectedDate.setTime(selectedDate.getTime() + (1000*60*60*24));
          split_res=selectedDate.split("/");
          var mon=split_res[0];
          var day=parseInt(split_res[1])+1;
          var year=split_res[2];
          var total=mon.toString()+"/"+day.toString()+"/"+year.toString();

          
         $("#datepicker2" ).datepicker( "setDate",  total);
         $("#datepicker2" ).datepicker( "option", "minDate", total );
         // $("#datepicker2" ).datepicker( "show" );
       }
   }); 
  
  $('#datepicker2').datepicker({
    autoSize: true,
    duration:'slow',
    showAnim:"slideDown",
    minDate: '+1', // The min date that can be selected, i.e. 30 days from the 'now'
     // The max date that can be selected, i.e. + 1 month, 1 week, and 1 days from 'now'
  });

    var today = new Date();
    

  
    $('#datepicker1').val($.datepicker.formatDate('mm/dd/yy', today));
    $('#datepicker2').val($.datepicker.formatDate('mm/dd/yy', today));
    // var today1 = new Date();

    

    var date = $('#datepicker1').datepicker('getDate');

    date.setTime(date.getTime() + (1000*60*60*24));
    $('#datepicker2').datepicker("setDate", date);


 $(document).ready(function(){
  
  //Check to see if the window is top if not then display button
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.scrollToTop').fadeIn();
    } else {
      $('.scrollToTop').fadeOut();
    }   //scroll to top completed
  });
  
  //Click event to scroll to top
  $('.scrollToTop').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;   //scroll to top completed
  });
  
});   

// $('.datepicker1 a', $(this).next()).addClass('ui-state-highlight');
  </script>

  <style type="text/css">
  div.ui-datepicker{
  font-size:13px;
 }
.ui-datepicker {
   background: #87a7cf;
   border: 1px solid #555;
   color: #1f62a8;
 }
.ui-datepicker a{
   background: white;
   /*color: yellow;*/
 }
 .ui-datepicker div{
   background: #1f62a8;
   color: white;
 }



</style>