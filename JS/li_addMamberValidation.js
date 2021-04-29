function get(uname){
			return document.getElementById(uname);
		}
		
	
  
		function validate(){
			refresh();
			var hasError=false;
			var name= get("name");
			var uname= get("uname");
			var pass= get("pass");
			var mail= get("email");
			var phone= get("contact_number");
           
			if(name.value == ""){
				get("err_name").innerHTML = "*Name Required";
				get("err_name").style.color = "red";
				hasError = true;
			}
			else if(name.value.length<6){
				get("err_name").innerHTML = "*Name more then 6 charecters required";
				get("err_name").style.color = "red";
				hasError = true;
			}
			
			if(uname.value == ""){
				get("err_uname").innerHTML = "*Username Required";
				get("err_uname").style.color = "red";
				hasError = true;
			}
			else if(uname.value.length<6){
				get("err_uname").innerHTML = "*User name more then 6 charecters required";
				get("err_uname").style.color = "red";
				hasError = true;
			}
			
			if(get("pass").value == ""){
				get("err_pass").innerHTML = "*Password Required";
				get("err_pass").style.color = "red";
				hasError = true;
			}
			
			
			else if(Space(pass.value)){
				get("err_pass").innerHTML = "*Password must not have any space";
				get("err_pass").style.color = "red";
				hasError = true;
			}
			
			
			if(get("cpass").value == ""){
				get("err_cpass").innerHTML = "*Password Not Matched";
				get("err_cpass").style.color = "red";
				hasError = true;
			}
			
			
			if(get("mail").value == ""){
				get("err_mail").innerHTML = "*Email Required";
				get("err_mail").style.color = "red";
				hasError = true;
			}
			else if(!AtTheRate(mail.value)){
				get("err_mail").innerHTML = "*'@' required";
				get("err_mail").style.color = "red";
				hasError = true;
			}
			
			
			if(get("phone").value == ""){
				get("err_phone").innerHTML = "*Phone Required";
				get("err_phone").style.color = "red";
				hasError = true;
			}
			else if(phone.value.length<11){
				get("err_phone").innerHTML = "*11 numbers required";
				get("err_phone").style.color = "red";
				hasError = true;
			}
			
			
			return !hasError;
				
		}
	
  
       function AtTheRate(h) {
      return h.indexOf('@') >= 0;
    }
        function Space(h) {
       return h.indexOf(' ') >= 0;
  }
		
		function refresh(){
			get("err_name").innerHTML = "";
			get("err_uname").innerHTML = "";
			get("err_pass").innerHTML = "";
			get("err_email").innerHTML = "";
			get("err_contact_number").innerHTML = "";
            
			
		}
		
		function checkUsername(uname){
		//alert(uname.value);
		var name = uname.value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				var rs = this.responseText;
				if(rs == "true"){
					document.getElementById("err_uname").innerHTML = "";
				}
				else document.getElementById("err_uname").innerHTML = "Not a valid Username";
			}
		};
		xhttp.open("GET","checkMemberUsername.php?uname="+name,true);
		xhttp.send();
	}