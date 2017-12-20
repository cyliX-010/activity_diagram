<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src='jquery-1.10.2.js'></script>
	</head>
	<body>

		<div id = "base" style = "position:absolute; top:0px; left:0px; height: 420%; width:100%; background-color:gray;">

			<div id="progressBase" style="position:absolute; top:100px; left:400px; height: 500px; width:500px; background-color:transparent;">

				<img id="progressbar" src="loading.gif" width="100%" height="100%">
			</div>

			<div id="imageBase" style="position:absolute; top:-770px; left:230px; height: 700px; width:900px; background-color:white; opacity:0;">
				<div id="stakes" style="position:absolute; top:0px; left:0px; height: 50px; width:900px; background-color:black; color:white; font-size: 30px; text-align:center; padding-top:5px;">USE CASE DIAGRAM</div>
				<img src="activitydiagram1.png" width="100%" height="100%" style="position:absolute; top:70px;">
			</div>

			<div id = "stakeholders" style="position:absolute; top:900px; left:-900px; height: 200px; width:900px; background-color:white; opacity:0;">
				<div id="stakes" style="position:absolute; top:5px; left:0px; height: 50px; width:900px; background-color:black; color:white; font-size: 30px; text-align:center; padding-top:5px;">STAKEHOLDERS</div>
				<img id = "stakeimage"src = "stakeholder.png" width="900px" height="150px" style="position:absolute; top: 50px;">
			</div>

			<div id = "functionreq" style="position:absolute; top:1250px; left:-900px; height: 1480px; width:900px; background-color:white; opacity:0;">
				<div id="reqtext" style="position:absolute; top:5px; left:0px; height: 50px; width:900px; background-color:black; color:white; font-size: 30px; text-align:center; padding-top:10px;">FUNCTIONAL REQUIREMENTS</div>
				
				<div class="text1" style="position:relative; top:0px; left:10px; height: 70px; width:850px; background-color:gray; color:white; font-size: 20px; text-indent: 1%; padding: 5px; text-align: center; margin:1%; opacity:0;" >
					<label class = "labtext" style="color: white;">Search an available Home, Boarding House or Hotel</label> 
					<p class = "ptext" style="position: absolute; top: 30px;">The users can search any available Home, Boarding House and Hotel in the map.
					</p>
				</div>

				<div class="text2" style="position:relative; top:75px; left:10px; height: 70px; width:850px; background-color:gray; color:white; font-size: 20px; text-indent: 1%; padding: 5px; text-align: center; margin:1%; margin-top: 2%; opacity:0;" >
					<label class = "labtext" style="color: white;">View an available Home, Boarding House or Hotel</label> 
					<p class = "ptext" style="position: absolute; top: 30px;">The users can view any available Home, Boarding House and Hotel in the map.
					</p>
				</div>

				<div class="text3" style="position:relative; top:75px; left:10px; height: 90px; width:850px; background-color:gray; color:white; font-size: 20px; text-indent: 1%; padding: 5px; text-align: center; margin:1%; margin-top: 2%; opacity:0;"  >
					<label class = "labtext" style="color: white;">Reserve an available Home, Boarding House or Hotel</label> 
					<p class = "ptext" style="position: absolute; top: 30px; text-indent:-5px;">The users can reserve any available Home, Boarding House and Hotel that fits their taste but in just three days or else the reservation will be cancelled. 
					</p>
				</div>

				<div class="text4" style="position:relative; top:75px; left:10px; height: 70px; width:850px; background-color:gray; color:white; font-size: 20px; text-indent: 1%; padding: 5px; text-align: center; margin:1%; margin-top: 2%; opacity:0;" >
					<label class = "labtext" style="color: white;">Report the Owner of an Abode</label> 
					<p class = "ptext" style="position: absolute; top: 30px;">The users can report an owner of a Home, Boarding House or Hotel.
					</p>
				</div>

				<div class="text5" style="position:relative; top:75px; left:10px; height: 70px; width:850px; background-color:gray; color:white; font-size: 20px; text-indent: 1%; padding: 5px; text-align: center; margin:1%; margin-top: 2%; opacity:0;" >
					<label class = "labtext" style="color: white;">Register an Account</label> 
					<p class = "ptext" style="position: absolute; top: 30px;">The clients should create an account in order to publicize their businesses.
					</p>
				</div>

				<div class="text6" style="position:relative; top:75px; left:10px; height: 70px; width:850px; background-color:gray; color:white; font-size: 20px; text-indent: 1%; padding: 5px; text-align: center; margin:1%; margin-top: 2%; opacity:0;" >
					<label class = "labtext" style="color: white;">Login an Account</label> 
					<p class = "ptext" style="position: absolute; top: 30px;">The clients can login their account anytime and anywhere. 
					</p>
				</div>


				<div class="text7" style="position:relative; top:75px; left:10px; height: 70px; width:850px; background-color:gray; color:white; font-size: 20px; text-indent: 1%; padding: 5px; text-align: center; margin:1%; margin-top: 2%; opacity:0;" >
					<label class = "labtext" style="color: white;">Post a Home, Boarding House or Hotel</label> 
					<p class = "ptext" style="position: absolute; top: 30px;">The clients can post a Home, Boarding Houses and Hotels that also contents an information.
					</p>
				</div>

				<div class="text8" style="position:relative; top:75px; left:10px; height: 70px; width:850px; background-color:gray; color:white; font-size: 20px; text-indent: 1%; padding: 5px; text-align: center; margin:1%; margin-top: 2%; opacity:0;" >
					<label class = "labtext" style="color: white;">Display in the Map</label> 
					<p class = "ptext" style="position: absolute; top: 30px;">The clients can display their posts about their Home, Boarding House or Hotel businesses in the map. 
					</p>
				</div>


				<div class="text9" style="position:relative; top:75px; left:10px; height: 70px; width:850px; background-color:gray; color:white; font-size: 20px; text-indent: 1%; padding: 5px; text-align: center; margin:1%; margin-top: 2%; opacity:0;" >
					<label class = "labtext" style="color: white;">Manage they posted</label> 
					<p class = "ptext" style="position: absolute; top: 30px;">The clients can manage of what they posted, they can modify or remove their posts.
					</p>
				</div>

				<div class="text10" style="position:relative; top:75px; left:10px; height: 70px; width:850px; background-color:gray; color:white; font-size: 20px; text-indent: 1%; padding: 5px; text-align: center; margin:1%; margin-top: 2%; opacity:0;" >
					<label class = "labtext" style="color: white;">Update their information</label> 
					<p class = "ptext" style="position: absolute; top: 30px;">The clients can modify the information about them.
					</p>
				</div>

				<div class="text11" style="position:relative; top:75px; left:10px; height: 70px; width:850px; background-color:gray; color:white; font-size: 20px; text-indent: 1%; padding: 5px; text-align: center; margin:1%; margin-top: 2%; opacity:0;" >
					<label class = "labtext" style="color: white;">Changing of passwords </label> 
					<p class = "ptext" style="position: absolute; top: 30px;">The clients can change their passwords on their account.
					</p>
				</div>

				<div class="text12" style="position:relative; top:75px; left:10px; height: 70px; width:850px; background-color:gray; color:white; font-size: 20px; text-indent: 1%; padding: 5px; text-align: center; margin:1%; margin-top: 2%; opacity:0;" >
					<label class = "labtext" style="color: white;">Search a Home, Boarding House and Hotel</label> 
					<p class = "ptext" style="position: absolute; top: 30px;">The clients can search other Homes, Boarding Houses and Hotels in the map
					</p>
				</div>

				<div class="text13" style="position:relative; top:75px; left:10px; height: 70px; width:850px; background-color:gray; color:white; font-size: 20px; text-indent: 1%; padding: 5px; text-align: center; margin:1%; margin-top: 2%; opacity:0;" >
					<label class = "labtext" style="color: white;">Search owner of other Homes, Boarding Houses and Hotels</label> 
					<p class = "ptext" style="position: absolute; top: 30px;">The clients can search the owners of other Homes, Boarding Houses and Hotels in the map
					</p>
				</div>

				<div class="text14" style="position:relative; top:75px; left:10px; height: 70px; width:850px; background-color:gray; color:white; font-size: 20px; text-indent: 1%; padding: 5px; text-align: center; margin:1%; margin-top: 2%; opacity:0;" >
					<label class = "labtext" style="color: white;">Block the Clients</label> 
					<p class = "ptext" style="position: absolute; top: 30px;">The admin can block a client.
					</p>
				</div>




			</div>
				


		</div>
	</body>
</html>
<script>

$("#imageBase").delay(5000);

$("#progressBase").animate({ opacity: '0'},5000);

$("#imageBase").animate({top:'0', opacity:'1'}, 2000);
$("#stakeholders").delay(10000);
$("#stakeholders").animate({left:'230' , opacity:'1'}, 2000);
$("#functionreq").delay(15000);
$("#functionreq").animate({left:'230', opacity:'1'}, 2000);


$(".text1").delay(16000);
	$(".text1").animate({top:'75', opacity: '1'}, 2000);
	$(".text1").mouseover(function(){
	    $(".text1").css("background-color", "black");
	});

	$(".text1").mouseleave(function(){
	    $(".text1").css("background-color", "gray");
	});



$(".text2").delay(17000);
	$(".text2").animate({top:'75', opacity: '1'}, 2000);
	$(".text2").mouseover(function(){
	    $(".text2").css("background-color", "black");
	});

	$(".text2").mouseleave(function(){
	    $(".text2").css("background-color", "gray");
	});


$(".text3").delay(18000);
	$(".text3").animate({top:'75', opacity: '1'}, 2000);
	$(".text3").mouseover(function(){
	    $(".text3").css("background-color", "black");
	});

	$(".text3").mouseleave(function(){
	    $(".text3").css("background-color", "gray");
	});


$(".text4").delay(19000);
	$(".text4").animate({top:'75', opacity: '1'}, 2000);
	$(".text4").mouseover(function(){
	    $(".text4").css("background-color", "black");
	});

	$(".text4").mouseleave(function(){
	    $(".text4").css("background-color", "gray");
	});



$(".text5").delay(20000);
	$(".text5").animate({top:'75', opacity: '1'}, 2000);
	$(".text5").mouseover(function(){
	    $(".text5").css("background-color", "black");
	});

	$(".text5").mouseleave(function(){
	    $(".text5").css("background-color", "gray");
	});



$(".text6").delay(21000);
	$(".text6").animate({top:'75', opacity: '1'}, 2000);
	$(".text6").mouseover(function(){
	    $(".text6").css("background-color", "black");
	});

	$(".text6").mouseleave(function(){
	    $(".text6").css("background-color", "gray");
	});



$(".text7").delay(22000);
	$(".text7").animate({top:'75', opacity: '1'}, 2000);
	$(".text7").mouseover(function(){
	    $(".text7").css("background-color", "black");
	});

	$(".text7").mouseleave(function(){
	    $(".text7").css("background-color", "gray");
	});



$(".text8").delay(23000);
	$(".text8").animate({top:'75', opacity: '1'}, 2000);
	$(".text8").mouseover(function(){
	    $(".text8").css("background-color", "black");
	});

	$(".text8").mouseleave(function(){
	    $(".text8").css("background-color", "gray");
	});



$(".text9").delay(24000);
	$(".text9").animate({top:'75', opacity: '1'}, 2000);
	$(".text9").mouseover(function(){
	    $(".text9").css("background-color", "black");
	});

	$(".text9").mouseleave(function(){
	    $(".text9").css("background-color", "gray");
	});



$(".text10").delay(25000);
	$(".text10").animate({top:'75', opacity: '1'}, 2000);
	$(".text10").mouseover(function(){
	    $(".text10").css("background-color", "black");
	});

	$(".text10").mouseleave(function(){
	    $(".text10").css("background-color", "gray");
	});



$(".text11").delay(26000);
	$(".text11").animate({top:'75', opacity: '1'}, 2000);
	$(".text11").mouseover(function(){
	    $(".text11").css("background-color", "black");
	});

	$(".text11").mouseleave(function(){
	    $(".text11").css("background-color", "gray");
	});


$(".text12").delay(27000);
	$(".text12").animate({top:'75', opacity: '1'}, 2000);
	$(".text12").mouseover(function(){
	    $(".text12").css("background-color", "black");
	});

	$(".text12").mouseleave(function(){
	    $(".text12").css("background-color", "gray");
	});


$(".text13").delay(28000);
	$(".text13").animate({top:'75', opacity: '1'}, 2000);
	$(".text13").mouseover(function(){
	    $(".text13").css("background-color", "black");
	});

	$(".text13").mouseleave(function(){
	    $(".text13").css("background-color", "gray");
	});


$(".text14").delay(29000);
	$(".text14").animate({top:'75', opacity: '1'}, 2000);
	$(".text14").mouseover(function(){
	    $(".text14").css("background-color", "black");
	});

	$(".text14").mouseleave(function(){
	    $(".text14").css("background-color", "gray");
	});


</script>