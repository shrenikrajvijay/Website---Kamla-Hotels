


<div class="container">
    <div id="content-slider">
        <div id="slider">

            <ul>

                <li id="first" class="firstanimation">
         
                    <img src="images/pic1.jpg" width="100%" height="100%"  alt="Cougar"/>
           
           
                </li>

                 <li id="second" class="secondanimation">
           
                    <img src="images/pic2.jpg" width="100%" height="100%" alt="Lions"/>
            
            
                 </li>
            
                 <li id="third" class="thirdanimation">
            
                     <img src="images/pic3.jpg" width="100%" height="100%"  alt="Snowalker"/>
            
           
                 </li>
                  
                 <li id="fourth" class="fourthanimation">
          
                     <img src="images/pic4.jpg" width="100%" height="100%"  alt="Snowalker"/>
                        
           
                 </li>

                <li id="fifth" class="fifthanimation">
           
                     <img src="images/pic5.jpg" width="100%" height="100%"  alt="Snowalker"/>
          
           
                </li>
     
            
            </ul>
            </div>
            <div class="progress-bar"></div>
        </div>
    </div>
</div>


 <div class="reservation-box">
          
            <table class="reservation-box-table">
                    <tr>
                        <!-- <td style="vertical-align:bottom;"><div class="reser"><h2>RESERVATIONS</h2><br><h1>(562) 562-5622</h1></div></td> -->
                        <td style="vertical-align:middle;width:17%;"><p><p  type="text">CHECK-IN</p> <input  type="text"class="inputtypewith" id="datepicker1"></p></td>
                        <td style="vertical-align:middle;width:17%;"><p><p  type="text">CHECK-OUT</p><input type="text"  class="inputtypewith" id="datepicker2"></p></td>
                          <td style="vertical-align:middle;width:12%;" class="promobox"><b>PROMO<br> </b><input  class="inn" type="text"></td>
                          <td style="vertical-align:middle;width:12%;" class="groupbox"><b>GROUP<br> </b><input  class="inn" type="text"></td>
                          <td style="vertical-align:middle;width:12%;" class="corpbox"><b>CORP ID<br> </b><input  class="inn" type="text"></td>
                        <td style="vertical-align:middle;width:8%;"><b>ADULT<br> </b><input id="adults" class="in" type="text" value="1"></td>
                      
                   
                        <td style="vertical-align:middle;width:8%;"  class="brtest"><b >CHILD<br> </b><input id="child" class="in" type="text" value="0"></td>
                        <!-- <td style="background-color:#0076BD;text-align:center;"><b>CORPORATE CODE</b> <input class="inputtype" type="text"></input></td> -->
                        <td  style="vertical-align:middle;padding-left: 30px;"><!-- <a href="https://www.hiexpress.com/hotels/us/en/reservation/book?qAdlt=1&qBrs=6c.hi.ex.rs.ic.cp.in.sb.cw.cv.ul.vn&qChld=0&qCiD=08&qCiMy=012015&qCoD=09&qCoMy=012015&qDest=10330+W.+Olympic+Blvd+Los+Angeles+California+United+States&qFRA=1&qGRM=0&qHtlC=laxcy&qPSt=0&qRRSrt=rt&qRef=df&qRms=1&qRpn=1&qRpp=12&qRtP=6CBARC&qSHp=1&qSlH=hesca&qSmP=3&qSrt=sBR&qWch=0&srb_u=1&method=redirect&icdv=99502222"> -->
                            <div class="mybutton-shadow"><a 
                                onclick="getParameters();"
                                href="#"
                                 class="myButton" ><div class="booktext">BOOK NOW</div> <div class="brg">OR CALL 562-231-5973</div></a></div></td>
                    </tr>
            </table>
          </div>

<script>
function getParameters() {
    
    // document.getElementById("demo").innerHTML = "Hello World";
    var date1=document.getElementById('datepicker1').value;
    var date2=document.getElementById('datepicker2').value;

    var date1value=date1.split("/");
    var date2value=date2.split("/");

    // var promo=document.getElementById('promo').value;
    
    // var group=document.getElementById('group').value;

    // var corp=document.getElementById('corp').value;

    var adults=document.getElementById('adults').value;
    var child=document.getElementById('child').value;
    
    window.location.replace("https://www.ihg.com/holidayinnexpress/hotels/us/en/reservation/book?method=roomRate&qAdlt="+adults+"&qBrs=6c.hi.ex.rs.ic.cp.in.sb.cw.cv.ul.vn&qChld="+child+"&qCiD="+date1value[1]+"&qCiMy="+(date1value[0]-1)+date1value[2]+"&qCoD="+date2value[1]+"&qCoMy="+(date2value[0]-1)+date2value[2]+"&qDest=10330+W.+Olympic+Blvd+Los+Angeles+California+United+States&qFRA=1&qGRM=0&qHtlC=laxcy&qPSt=0&qRRSrt=rt&qRef=rr&qRms=1&qRpn=1&qRpp=12&qSHp=1&qSlH=hesca&qSmP=3&qSrt=sBR&qWch=0&srb_u=1&icdv=99502222");
    // return "https://www.ihg.com/holidayinnexpress/hotels/us/en/reservation/book?method=roomRate&qAdlt="+adults+"&qBrs=6c.hi.ex.rs.ic.cp.in.sb.cw.cv.ul.vn&qChld="+child+"&qCiD="+date1value[1]+"&qCiMy="+(date1value[0]-1)+date1value[2]+"&qCoD="+date2value[1]+"&qCoMy="+(date2value[0]-1)+date2value[2]+"&qDest=10330+W.+Olympic+Blvd+Los+Angeles+California+United+States&qFRA=1&qGRM=0&qHtlC=laxcy&qPSt=0&qRRSrt=rt&qRef=rr&qRms=1&qRpn=1&qRpp=12&qSHp=1&qSlH=hesca&qSmP=3&qSrt=sBR&qWch=0&srb_u=1&icdv=99502222";
    
}
</script>



