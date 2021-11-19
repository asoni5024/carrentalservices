function create_account(){

	var name = $('#name').val();
	var email = $('#email').val();
	var number = $('#number').val();
	var password = $('#password').val();
	var type = $('#type').val();
	

		
	var numbers = /^[0-9]+$/;	
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

	if(name == "" || name == null) {
	     var msg = "*Please enter your name";
	     infomessage(msg);
	     
	}
	
	if(email == "" || email == null) {
	     var msg ="*Please enter an email id";
	     infomessage(msg);
	     
	}	
	else if (reg.test(email) == false) 
        {
           var msg ="*Invalid email id";
           infomessage(msg);
        }	
		
	if(number == "" || number == null) {
	     var msg ="*Please enter a mobile number";
	     infomessage(msg);
	     
	}	
	else if(numbers.test(number) == false) {
	     var msg ="*Please enter only numbers";
	     infomessage(msg);
	     
	}

	if(password == "" || password == null) {
	     var msg ="*Please enter a password"; 
	     infomessage(msg);
	     
	}

	if(!document.getElementById('terms').checked) {
	     var msg ="*Please agree to the terms of service";
	     infomessage(msg);
	     
	}

	else{
	$.ajax({
			type: "POST",
			url: "./php/insert.php",
			data: {name:name, email:email, number:number, password:password, type:type},
			cache: false,		 
			success: function(data){
				if(data==100){
					var msg ="The Email & Mobile Number has already been taken.";
				 	infomessage(msg);
				}
				else if(data==101){
					var msg ="Account has been created.Please Login!";
					successmessage(msg);
					setTimeout(function(){location.reload(true);}, 2000);
				}
				else{
					var msg ="Error! Account has not been created";
					errormessage(msg);
				}

			}
		});
	
	}
}

function user_login(email,pass,cook){

	cook = cook || 0;
	var email = email || $("#user_id").val();
	var pass = pass || $("#user_password").val();
	var remember =$("#rememberme").val();

	if (user_id){
		$.ajax({
			type : 'POST',
			url : './php/user_login.php',
			data : { 'user_id' : email,
					 'user_password' : pass,
					 'rememberme' : remember,
					 'cook' : cook,

					  },
			cache : false,
			success : function(result){
				
				if(result==101){
					window.location.href = 'index.php';
				}
				else if(result==102){
					var msg ="Password is incorrect!";
					infomessage(msg);
				}
				else if(result==103){
					var msg ="Please register first!";
					infomessage(msg);

				}
				else if(result==104){
					var msg ="Please enter Email and Password Correctly!";
					infomessage(msg);
				}
				else{
					var msg ="Something went wrong!";
					errormessage(msg);
				}
			}

		});
	}

}


function add_car(id, user_id,c){


	if(user_id == ""){
		var msg ="Please Login first to add the product";
		infomessage(msg);
		setTimeout(function(){location.href = 'signup.php';}, 2000);
	}
	else{
		var startdate = $('#startdate_'+c+'').val();
		var days = $('#days_'+c+'').val();
		var numbers = /^[0-9]+$/;	
		// alert(days);
		if(startdate == "" || startdate == null) {
		     var msg = "*Please enter your date";
		     infomessage(msg);
		     
		}
			
			
		if(days == "" || days == null) {
		     var msg ="*Please enter a days";
		     infomessage(msg);
		     
		}	
		else if(numbers.test(days) == false) {
		     var msg ="*Please enter only numbers";
		     infomessage(msg);
		     
		}
		else{
			$.ajax({
			type : 'POST',
			url : './php/add_car.php',
			data : {id:id, user_id:user_id,startdate:startdate,days:days},
			cache : false,
			success : function(result){
				
				if(result==100){
					var msg ="Car is on rent";
					infomessage(msg);
				}
				else if(result==101){
					var msg ="Car is added to rented for you";
					successmessage(msg);
					setTimeout(function(){location.href = 'cart.php';}, 2000);
				}
				else{
					var msg ="Something went wrong!";
					errormessage(msg);
				}
			}

		});
		}
		
	}
	
}

function addcars(){

	var model = $('#model').val();
	var number = $('#number').val();
	var seat = $('#seat').val();
	var rent = $('#rent').val();
	

		
	var numbers = /^[0-9]+$/;	
	
	if(model == "" || model == null) {
	     var msg = "*Please enter your model name";
	     infomessage(msg);
	     
	}
	
	if(number == "" || number == null) {
	     var msg ="*Please enter an Vehicle number";
	     infomessage(msg);
	     
	}	
		
		
	if(seat == "" || seat == null) {
	     var msg ="*Please enter a no of seat";
	     infomessage(msg);
	     
	}	
	else if(numbers.test(seat) == false) {
	     var msg ="*Please enter only numbers";
	     infomessage(msg);
	     
	}

	if(rent == "" || rent == null) {
	     var msg ="*Please enter a amount"; 
	     infomessage(msg);
	     
	}
	else if (numbers.test(rent) == false) 
        {
           var msg ="*Please enter only numbers";
           infomessage(msg);
        }

	else{
	$.ajax({
			type: "POST",
			url: "./php/insertcars.php",
			data: {model:model, number:number, seat:seat, rent:rent},
			cache: false,		 
			success: function(data){
				if(data==100){
					var msg ="Car is already Added.";
				 	infomessage(msg);
				}
				else if(data==101){
					var msg ="Car is Added!";
					successmessage(msg);
					setTimeout(function(){location.reload(true);}, 2000);
				}
				else{
					var msg ="Error! Car is not added";
					errormessage(msg);
				}

			}
		});
	
	}
}

function updatecars(id,c){

	var model = $('#model1_'+c+'').val();
	var number = $('#number1_'+c+'').val();
	var seat = $('#seat1_'+c+'').val();
	var rent = $('#rent1_'+c+'').val();
	

	// alert(model);	
	var numbers = /^[0-9]+$/;	
	
	if(model == "" || model == null) {
	     var msg = "*Please enter your model name";
	     infomessage(msg);
	     
	}
	
	if(number == "" || number == null) {
	     var msg ="*Please enter an Vehicle number";
	     infomessage(msg);
	     
	}	
		
		
	if(seat == "" || seat == null) {
	     var msg ="*Please enter a no of seat";
	     infomessage(msg);
	     
	}	
	else if(numbers.test(seat) == false) {
	     var msg ="*Please enter only numbers";
	     infomessage(msg);
	     
	}

	if(rent == "" || rent == null) {
	     var msg ="*Please enter a amount"; 
	     infomessage(msg);
	     
	}
	else if (numbers.test(rent) == false) 
        {
           var msg ="*Please enter only numbers";
           infomessage(msg);
        }

	else{
	$.ajax({
			type: "POST",
			url: "./php/updatecars.php",
			data: {model:model, number:number, seat:seat, rent:rent,id:id},
			cache: false,		 
			success: function(data){
				if(data==101){
					var msg ="Car is Updated.";
				 	infomessage(msg);
				 	setTimeout(function(){location.reload(true);}, 2000);
				}
	
				else{
					var msg ="Error! Car is not updated";
					errormessage(msg);
				}

			}
		});
	
	}
}


function deletecars(id){
	$.ajax({
			type : 'POST',
			url : './php/deletecars.php',
			data : {id:id},
			cache : false,
			success : function(result){
				
				if(result==100){
					var msg ="Car is Deleted";
					infomessage(msg);
					setTimeout(function(){location.href = 'addcars.php';}, 2000);
				}
		
				else{
					var msg ="Something went wrong!";
					errormessage(msg);
				}
			}

		});
}

function successmessage(msg){
    var priority = 'success';
    var title    = 'Success';
    var message  = msg;

    $.toaster({ priority : priority, title : title, message : message });
    
    
}
function errormessage(msg){
    var priority = 'danger';
    var title    = 'Error';
    var message  = msg;

    $.toaster({ priority : priority, title : title, message : message });
}
function infomessage(msg){
    var priority = 'info';
    var title    = 'Warning';
    var message  = msg;

    $.toaster({ priority : priority, title : title, message : message });
}

