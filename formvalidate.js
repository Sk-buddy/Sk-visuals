 function validation(){

 	let name = document.querySelector("#name").value;
    let alphabets = /^[a-zA-Z\s-, ]+$/;
    let mail = document.querySelector("#mail").value;
    let contact = document.querySelector("#contact").value;
    let mailpattern = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;

     debugger

    if (name === ""){
    	document.getElementById("ucircle").setAttribute("style", "display:inline; color:red;");
    	document.querySelector("#namewarn").setAttribute("style", "display:inline; color:red;");
		document.getElementById("namewarn").innerHTML = "C'mon tell us your name at least";
		return false;
    }else
    if (!name.match(alphabets)) {
    	document.getElementById("ucircle").setAttribute("style", "display:inline; color:red;");
    	document.getElementById("namewarn").setAttribute("style", "display:inline; color:red;");
		document.getElementById("namewarn").innerHTML = "Name always be in Alphabets No digits are allowed";
		return false;    	
    }else
    if ((name.length < 3) || (name.length > 20)) {
    	document.getElementById("ucircle").setAttribute("style", "display:inline; color:red;");
    	document.getElementById("namewarn").setAttribute("style", "display:inline; color:red;");
		document.getElementById("namewarn").innerHTML = "Name you entered is too short or too long min 3 or max 20 characters are allowed";
		return false;
    }else{
        true;
    }

    // mail validation

    if (mail == "") {
        document.querySelector("#ecircle").setAttribute("style", "display:inline; color:red;");
        document.querySelector("#ewarn").setAttribute("style", "display:inline; color:red;");
        document.querySelector("#ewarn").innerHTML = "Give us your mail to connect with you";
        return false;
    }else
    if (mail.indexOf("@") <= 0 ) {
        document.querySelector("#ecircle").setAttribute("style", "display:inline; color:red;");
        document.querySelector("#ewarn").setAttribute("style", "display:inline; color:red;");
        document.querySelector("#ewarn").innerHTML = "The Email you provide is incorrect";
        return false;
    }else
    if ((mail.charAt(mail.length - 4)!=".") && (mail.charAt(mail.length - 3 )!=".")) {
        document.querySelector("#ecircle").setAttribute("style", "display:inline; color:red;");
        document.querySelector("#ewarn").setAttribute("style", "display:inline; color:red;");
        document.querySelector("#ewarn").innerHTML = "The Email you provide is incorrect";
        return false;
    }else
    if (mail.match(mailpattern)) {
        document.querySelector("#ecircle").setAttribute("style", "display:inline; color:red;");
        document.querySelector("#ewarn").setAttribute("style", "display:inline; color:red;");
        document.querySelector("#ewarn").innerHTML = "The Email you provide is incorrect";
        return false;
    }else{
        true;
    }

    // contact validation  
    if(contact == "") {
        document.querySelector("#ccircle").setAttribute ("style", "display:inline; color:red;")
        document.querySelector("#cwarn").setAttribute ("style", "display:inline; color:red;")
        document.querySelector("#cwarn").innerHTML =  "Please enter your mobile number";
        return false;
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(contact) === false) {
        document.querySelector("#ccircle").setAttribute ("style", "display:inline; color:red;")
        document.querySelector("#cwarn").setAttribute ("style", "display:inline; color:red;")
        document.querySelector("#cwarn").innerHTML = "Please enter a valid 10 digit mobile number";
        return false;
        } else{
            true;
        }
    }
}