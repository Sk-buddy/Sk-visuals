 function responsive_nav(){
 	var e = document.getElementById('nav');
 	if(e.className === 'menu') {
 		e.className += " responsive";
 	}else{
 		e.className = 'menu';
 	}
 }
      // service page
    
	var m = 0;
 function readmore(){
 	if(!m){
 		document.getElementById("more").style.display = "inline";
 		document.getElementById("dot").style.display = "none";
 		document.getElementById("readbutton").innerHTML="Read less";
 		document.getElementById("readbutton").style.background="green"
 		m=1;
 	}
 	else{
 	    document.getElementById("more").style.display = "none";
 		document.getElementById("dot").style.display = "inline";
 		document.getElementById("readbutton").innerHTML="Read more";
 		document.getElementById("readbutton").style.background="red"
 		m=0;	
 	}
 }

 function readmore1(){
 	if(!m){
 		document.getElementById("more1").style.display = "inline";
 		document.getElementById("dot1").style.display = "none";
 		document.getElementById("readbutton1").innerHTML="Read less";
 		document.getElementById("readbutton1").style.background="green"
 		m=1;
 	}
 	else{
 	    document.getElementById("more1").style.display = "none";
 		document.getElementById("dot1").style.display = "inline";
 		document.getElementById("readbutton1").innerHTML="Read more";
 		document.getElementById("readbutton1").style.background="red"
 		m=0;	
 	}
 }

 function readmore2(){
 	if(!m){
 		document.getElementById("more2").style.display = "inline";
 		document.getElementById("dot2").style.display = "none";
 		document.getElementById("readbutton2").innerHTML="Read less";
 		document.getElementById("readbutton2").style.background="green"
 		m=1;
 	}
 	else{
 	    document.getElementById("more2").style.display = "none";
 		document.getElementById("dot2").style.display = "inline";
 		document.getElementById("readbutton2").innerHTML="Read more";
 		document.getElementById("readbutton2").style.background="red"
 		m=0;	
 	}
 }

 function readmore3(){
 	if(!m){
 		document.getElementById("more3").style.display = "inline";
 		document.getElementById("dot3").style.display = "none";
 		document.getElementById("readbutton3").innerHTML="Read less";
 		document.getElementById("readbutton3").style.background="green"
 		m=1;
 	}
 	else{
 	    document.getElementById("more3").style.display = "none";
 		document.getElementById("dot3").style.display = "inline";
 		document.getElementById("readbutton3").innerHTML="Read more";
 		document.getElementById("readbutton3").style.background="red"
 		m=0;	
 	}
 }

