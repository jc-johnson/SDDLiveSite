<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- Your site name -->
	<title>Jordan C. Johnson</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
	<script type="text/javascript" src="js/jquery.flow.1.2.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#menu").jFlow({
			slides: "#works",
			//if you got any problems with the content height, adjust the size below
			height: "590px",
			duration: 300
		});
	});
	
	</script>
</head>
<body>
<div id="all">
	<div id="header">
		<!-- Your site name -->
		<h1>Jordan C. Johnson</h1>
		<!-- Contact info -->
		<p><p>
		<a href="https://www.linkedin.com/in/thejordanjohnson"><img src="works/linkedIn.png" alt="LinkedIn" style="width:40px;height:40px;"/></a><br />
		<!-- email: <a href="mailto:johnsonjordan188@gmail.com">johnsonjordan188@gmail.com</a> --> 
		</p>
	</div>
	<!-- List of your works, each li element corresponds with a div inside div#works -->
	<ul id="menu">
		<li class="jFlowControl">My best work</li>
		<li class="jFlowControl">Another great work</li>
		<li class="jFlowControl">A nice project</li>
		<li class="jFlowControl">Contact Me</li>
	</ul>
	
	<div id="works">
	<!-- Your works, each div here corresponds to a li element in the ul#menu -->
		<div><!-- Inside this div is the first work -->
			<img src="works/work-one.jpg" alt="work one" />
			<h2>Here goes some details about the work.</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer quis turpis commodo massa ullamcorper fringilla. Aenean vitae purus. Praesent lorem magna, porttitor in, commodo porttitor, pretium eget, dolor. Proin eu metus a mi dignissim vulputate. Vivamus turpis justo, porta ullamcorper, imperdiet et, pharetra et, mauris. Integer eu diam. Cras non felis. Nam sit amet tortor nec sapien interdum ornare. Nullam laoreet aliquam dui. Sed sagittis. Suspendisse in nunc non leo ultrices congue. Quisque luctus erat ultrices tellus. Vivamus turpis justo, porta ullamcorper, imperdiet et, pharetra et, mauris. Integer eu diam. Cras non felis. Nam sit amet tortor nec sapien interdum ornare. Nullam laoreet aliquam dui. Sed sagittis. Suspendisse in nunc non leo ultrices congue. Quisque luctus erat ultrices tellus.</p>
		</div>
		<div><!-- Inside this div is the second work -->
			<img src="works/work-two.jpg" alt="work two" />
			<h2>Here goes some details about the work.</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer quis turpis commodo massa ullamcorper fringilla. Aenean vitae purus. Praesent lorem magna, porttitor in, commodo porttitor, pretium eget, dolor. Proin eu metus a mi dignissim vulputate. Vivamus turpis justo, porta ullamcorper, imperdiet et, pharetra et, mauris. Integer eu diam. Cras non felis. Nam sit amet tortor nec sapien interdum ornare. Nullam laoreet aliquam dui. Sed sagittis. Suspendisse in nunc non leo ultrices congue. Quisque luctus erat ultrices tellus.</p>
		</div>
		<div><!-- Inside this div is the third work -->
			<img src="works/work-three.jpg" alt="work three" />
			<h2>Here goes some details about the work.</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer quis turpis commodo massa ullamcorper fringilla. Aenean vitae purus. Praesent lorem magna, porttitor in, commodo porttitor, pretium eget, dolor. Proin eu metus a mi dignissim vulputate. Vivamus turpis justo, porta ullamcorper, imperdiet et, pharetra et, mauris. Integer eu diam. Cras non felis. Nam sit amet tortor nec sapien interdum ornare. Nullam laoreet aliquam dui. Sed sagittis. Suspendisse in nunc non leo ultrices congue. Quisque luctus erat ultrices tellus.</p>
		</div>
		
		
		<!-- Contact Form Div -->	
		<div id="contactform">
        <div id="successmessgae" style="display:none;">Your message has been sent. We will get back to you soon.</div>
			<form name="contactform" method="post" id="contactform"  enctype="multipart/form-data">
            <input type="hidden" name="submitcontactform" value="yes" />
				<table width="450px">
					<tr>
						<td valign="top">
							<label for="name">Name *</label>
						</td>
						<td valign="top">
							<input  type="text" name="fullname" id="fname" maxlength="50" size="30" placeholder="Please enter your name *"  >
                            <div id="namerror"></div>
						</td>
					</tr> 
					<tr>
						<td valign="top">
 							<label for="email">Email Address *</label>
                           
 						</td>
 						<td valign="top">
							<input  type="text" name="email" id="email" maxlength="50" size="30" placeholder="Please enter your email *" >
                             <div id="emailrror"></div>
						</td>
					</tr>			
					<tr>
						<td valign="top">
							<label for="subject">Subject *</label>
						</td>
						<td valign="top">
							<input  type="text" name="subject" id="subject" maxlength="80" size="30" placeholder="Please enter a subject *" >
                             <div id="subjectrror"></div>
						</td>
					</tr>
					<tr>
						<td style="vertical-align:middle"> 
							<label for="message">Message *</label>
						</td>
						<td valign="top">
							<textarea  name="message" id="message" maxlength="1000" size="30" cols="25" rows="6" placeholder="Your message for me *" ></textarea>
                             <div id="messagerror"></div>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center">
                        <a id="contctbtn">Submit</a>
							<!--<input type="submit" value="Submit">--> 
						</td>
					</tr>
				</table>
			</form>
		</div>
		
	</div>
    
    <script type="text/javascript">
	function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    }
	
	$("#fname").blur(function(){
		var fname=$('#fname').val();
if(fname==''){
$('#fname').addClass('error');
$("#namerror").html("Please enter your name");
$('#namerror').addClass('error');
} else {
	$("#namerror").html("");
	$('#fname').removeClass('error');
	$('#namerror').removeClass('error');
}
	});
	
	$("#subject").blur(function(){
		var subject=$('#subject').val();
if(subject==''){
$('#subject').addClass('error');
$("#subjectrror").html("Please enter the subject.");
$('#subjectrror').addClass('error');
} else {
	$("#subjectrror").html("");
	$('#subject').removeClass('error');
	$('#subjectrror').removeClass('error');
}
	});
		$("#message").blur(function(){
		

var message=$('#message').val();
if(message==''){
$('#message').addClass('error');
$("#messagerror").html("Please enter your message.");
$('#messagerror').addClass('error');
} else {
	$("#messagerror").html("");
	$('#message').removeClass('error');
	$('#messagerror').removeClass('error');
}
	});
	
	$("#email").blur(function(){
		var email=$('#email').val();
if(email==''){
$('#email').addClass('error');
$("#emailrror").html("Please enter your Email.");
$('#emailrror').addClass('error');
} else {
	if (!ValidateEmail(email)) {
$('#email').addClass('error');
$('#emailrror').addClass('error');
  
           $('#emailrror').html("Invalid email address.");

return false;
        }
	$("#emailrror").html("");
	$('#email').removeClass('error');
	$('#emailrror').removeClass('error');
}
	});
    $("#contctbtn").click(function(){
		var fname=$('#fname').val();
if(fname==''){
$('#fname').addClass('error');
$("#namerror").html("Please enter your name");
$('#namerror').addClass('error');
} else {
	$("#namerror").html("");
	$('#fname').removeClass('error');
	$('#namerror').removeClass('error');
}
var email=$('#email').val();
if(email==''){
$('#email').addClass('error');
$("#emailrror").html("Please enter your Email.");
$('#emailrror').addClass('error');
} else {
	if (!ValidateEmail(email)) {
$('#email').addClass('error');
$('#emailrror').addClass('error');
  
           $('#emailrror').html("Please enter a valid email address.");

return false;
        }
	$("#emailrror").html("");
	$('#email').removeClass('error');
	$('#emailrror').removeClass('error');
}
var subject=$('#subject').val();
if(subject==''){
$('#subject').addClass('error');
$("#subjectrror").html("Please enter the subject.");
$('#subjectrror').addClass('error');
} else {
	$("#subjectrror").html("");
	$('#subject').removeClass('error');
	$('#subjectrror').removeClass('error');
}
var message=$('#message').val();
if(message==''){
$('#message').addClass('error');
$("#messagerror").html("Please enter your message.");
$('#messagerror').addClass('error');
} else {
	$("#messagerror").html("");
	$('#message').removeClass('error');
	$('#messagerror').removeClass('error');
}
	if(fname!='' && email!='' && subject!='' && message!='')	{
		$.ajax({

		url:"contactmail.php",

	data:{"fullname":fname,"subject":subject,"email":email,"message":message,"submitcontactform":"yes"},

		beforeSend:function(){

		//$(".fade-main-page").show();	

		},

		success:function(data){
			$('#successmessgae').show();
			$('#fname').val('');
			$('#email').val('');
			$('#subject').val('');
			$('#message').val('');
			//alert('hello');
		}
		})
	}
	});
    </script>
    <style type="text/css">
	#contactform .error {
    color: #ce1919;
    font-size: 12px; 
	border-color:#ce1919;
}
#successmessgae {
	color: #228B22;
    background-color: rgba(34, 139, 34, 0.31);
    width: 90%;
    padding: 10px;
    border-radius: 3px;
}
#contctbtn {
width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 48px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
	</style>
	<div id="footer">
		<p>
		<!-- Your copyright information -->
			&copy; 2016 Driven Software Development, Ltd. All Rights Reserved.
		</p>
	</div>
</div>
</body>
</html>
