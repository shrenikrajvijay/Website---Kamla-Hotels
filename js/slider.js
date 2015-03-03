
var imagecount1=1;
var total1=7;



function slide(x){
var image1=document.getElementById('img1');
imagecount1=imagecount1+x;
if(imagecount1>total1){imagecount1=1;}
if(imagecount1<1){imagecount1=total1;}
image1.src="images/pic"+imagecount1+".jpg";
}

window.setInterval(function slideA(){
var image1=document.getElementById('img1');
imagecount1=imagecount1+1;
if(imagecount1>total1){imagecount1=1;}
if(imagecount1<1){imagecount1=total1;}
image1.src="images/pic"+imagecount1+".jpg";
},5000);
