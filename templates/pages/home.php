<div class='reg-butt register-button no-select print-hide'>REGISTER</div>
<div class='clear'></div>


<div>
	<div class='top-picture'>
		<h2 class='header no-select'>25th<br/>Anniversary</h2>
		<img class='image' src='images/misc/stokes_bay.jpg' />
	</div>


	<div class='showing welcome-page'>
		
		<div class='event-details'>
			<h2 class='header'>Debbie and Kevin</h2>
			<br/>
			<img class='debbie-kevin' src='images/event_details/debbie_kevin.png' alt='Debbie and Kevin' />
			
			<span class='details-text'>
				Congratulations to Debbie and Kevin for their 25th anniversary. 
				You are invited to a surprise dinner on September 10th at Stokes By the Bay.
				<ul class='details-list'>
					<li>Cocktails at 4:30PM.</li>
					<li>Dinner at 6:00PM.</li>
					<li>This will be a formal party, please dress appropriately.</li>
				</ul>
			</span>
			<span class='details-text print-hide'>
				Please register on this website by August 27th. <div class='reg-butt second-register-button'>REGISTER</div>
			</span>
			<div class='spacer'></div>
			<h2 class='header-two'>Gifts</h2>
			<br />
			<p class='gifts'>
				Their home is quite complete now, they've been together so long, 
				<br/>
				so please consider our request and do not take us wrong. 
				<br/>
				A delicate request it is, we hope you understand. 
				<br/>
				They're going on their second honeymoon maybe you can lend a hand.
				<br/>
				The tradition of the wishing well is one that's known by all. 
				<br/>
				Go to the well, toss in a coin and as the coin does fall, 
				<br/>
				Make a wish upon that coin and careful as you do. 
				<br/>
				Cause as the well's tradition goes, your wishes will come true.
			</p>
			
			<div class='clear'></div>
		</div>
		
		<div class='middle-divider'>
			<img class='image' src='images/flowers/blooming_pink_tree.png'/>
		</div>
		
		<div class='dinner-details'>
			<div class='header'>
				<img class='header-image' src='images/dining_options/dining_details.png' />
			</div>
			<div class='dining-options'>
				<article class='food steak'>
					<img class='image' src='images/dining_options/food_icon_steak.png' />
					<h3 class='food-header'>10oz. New York Steak</h3>
					<p class='food-description'>A 10oz. Black Angus that will melt in your mouth.</p>
				</article><article class='food chicken'>
				
					<img class='image' src='images/dining_options/food_icon_chicken.png' />
					<h3 class='food-header'>Broasted Chicken</h3>
					<p class='food-description'>Incredibly juicy and tender chicken, with a crispy golden brown coating.</p>
				</article><article class='food fish'>
				
					<img class='image' src='images/dining_options/food_icon_fish.png' />
					<h3 class='food-header'>Broasted Pickerel</h3>
					<p class='food-description'>Our delicious pickerel, breaded then broasted until golden brown.</p>
				</article><article class='food ribs second-row'>
				
					<img class='image' src='images/dining_options/food_icon_ribs.png' />
					<h3 class='food-header'>Baby Back Ribs</h3>
					<p class='food-description'>Slow-roasted, then grilled, fall-off-the-bone ribs.</p>
				</article><article class='food cappelletti second-row'>
				
					<img class='image' src='images/dining_options/food_icon_pasta.png' />
					<h3 class='food-header'>Oven-Baked Cheese Cappelletti</h3>
					<p class='food-description'>Fresh cappelletti tossed in a blush sauce, loaded with cheese.</p>
				</article>
			
				<hr />
				
				<article class='extra-food'>
					<img class='image' src='images/dining_options/food_icon_drink.png' />
					<h3 class='extra-food-header'>Drinks</h3>
					<p class='extra-food-description'>Tea, Coffee, and Pop Included</p>
				</article><article class='extra-food'>
					
					<img class='image' src='images/dining_options/food_icon_salad.png' />
					<img class='image' src='images/dining_options/food_icon_loaf.png' />
					<h3 class='extra-food-header'>Side Dish</h3>
					<p class='extra-food-description'>All entr&eacute;es are served with Caesar salad and garlic home loaf.</p>
				</article><article class='extra-food'>
				
					<img class='image' src='images/dining_options/food_icon_desert.png' />
					<h3 class='extra-food-header'>Desserts</h3>
					<p class='extra-food-description'>Stoke's own ice cream pie.</p>
				</article>
			</div>
			
		</div>
	</div>

	<div class='register-page'>
		<h2 class='header print-hide'>Tell Us You're Coming</h2>
		<p class='description print-hide'>
			Please provide the following information.
		</p>
		<p class='help-text print-hide'>
			If any changes are required concerning your registration, you can contact me at Trial3213@yahoo.ca and I will change the information for you.
		</p>
		<div class='registration-fields print-hide'>
			<label>First and Last Name: </label>
			<input id='input_name' type='text' placeholder='Kyle Crossman' />
			<br/>
			<label>Phone Number: </label>
			<input id='input_phone' type='text' placeholder='(226)-932-6157' />
			<br/>
			<label>Email Address: </label>
			<input id='input_email' type='text' placeholder='Kcross119@yahoo.ca' />
			<br/>
			<label>Total Number Attending In Your Party: </label>
			<input id='input_total' type='number' />
			<br/>
			<div id='submit-button' class='submit-button no-select'>Register</div>
		</div>
		<div class='list-of-people'>
			<h2 class='header'>Guest List</h2>
			<div class='registered-guest-header'>
				<span class='name'>Name</span>
				<span class='guest'>Total Attending In Party</span>
			</div>
			<div id='guest_list'>
			
			</div>
		</div>
	</div>


	<div class='bottom-picture print-hide'>
		<img class='image' src='images/flowers/blue_flowers_small.png' />
	</div>
</div>


<script>
	function changePage() {
		var cn = 'showing';
		var d = 1250;
		var wp = $('.welcome-page');
		var rp = $('.register-page');
		
		if ($('.showing').is(':animated') != true) {		
			if (wp.hasClass(cn)) {
				wp.removeClass(cn);
				rp.addClass(cn);
				rp.slideDown(d);
				wp.slideUp(d);
				$('.register-button').text('DETAILS');
			}
			else {
				wp.addClass(cn);
				rp.removeClass(cn);
				wp.slideDown(d);
				rp.slideUp(d);
				$('.register-button').text('REGISTER');
			}
		}
	}

	function addGuest() {
		var e_name = $('#input_name');
		var e_phone = $('#input_phone');
		var e_email = $('#input_email');
		var e_total = $('#input_total');
		
		if (!e_name.val().length > 0 || !e_phone.val().length > 0 || !e_email.val().length > 0 || !e_total.val().length > 0) {
			if (!e_name.val().length > 0) { e_name.css('border', 'solid 2px #ff0000'); } else { e_name.css('border', 'solid 2px #32cd32'); }
			if (!e_phone.val().length > 0) { e_phone.css('border', 'solid 2px #ff0000'); } else { e_phone.css('border', 'solid 2px #32cd32'); }
			if (!e_email.val().length > 0) { e_email.css('border', 'solid 2px #ff0000'); } else { e_email.css('border', 'solid 2px #32cd32'); }
			if (!e_total.val().length > 0) { e_total.css('border', 'solid 2px #ff0000'); } else { e_total.css('border', 'solid 2px #32cd32'); }
		}
		else {
			e_name.css('border', 'solid 2px #32cd32');
			e_phone.css('border', 'solid 2px #32cd32');
			e_email.css('border', 'solid 2px #32cd32');
			e_total.css('border', 'solid 2px #32cd32');
			
			$.ajax({
				url: 'php_libs/sql_calls.php',
				type: 'post',
				data: {
					'callFunction_Add_Name': e_name.val(),
					'callFunction_Add_Email': e_email.val(),
					'callFunction_Add_Phone': e_phone.val(),
					'callFunction_Add_Total': e_total.val()
				},
				success: function(data) {
					data = $.parseJSON(data);
					if (data.error) {
						alertify.error('Failed registering for the event. Please contact me about this error.');
					}
					else if (data.success) {
						alertify.success('Successfully registered for the event.');
						e_name.val('').css('border', 'solid 2px #9a9a9a');
						e_phone.val('').css('border', 'solid 2px #9a9a9a');
						e_email.val('').css('border', 'solid 2px #9a9a9a');
						e_total.val('').css('border', 'solid 2px #9a9a9a');
						updateGuestList();					
					}
				}
			});	
		}
		
	}
	function updateGuestList() {
		$.ajax({
			url: 'php_libs/sql_calls.php',
			type: 'post',
			data: {
				'callFunction_Update': 'Y'
			},
			success: function(data) {
				data = $.parseJSON(data);
				if (data.error) {
					alertify.error('An error occured while updating the guest list. Please contact me via email.');
				}
				else if (data.success) {
					$('#guest_list').html(data.success.value);
					alertify.success('Successfully updated guest list.');
				}
			}
		})
	}
	
	$(document).ready(function() {
		$("#input_total").keydown(function (e) {
			// Allow: backspace, delete, tab, escape, enter and .
			if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
				 // Allow: Ctrl+A, Command+A
				(e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
				 // Allow: home, end, left, right, down, up
				(e.keyCode >= 35 && e.keyCode <= 40)) {
					 // let it happen, don't do anything
					 return;
			}
			// Ensure that it is a number and stop the keypress
			if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
				e.preventDefault();
			}
		});
		$('#input_name').keypress(function (e) { if (e.which == 13) { addGuest(); }});
		$('#input_phone').keypress(function (e) { if (e.which == 13) { addGuest(); }});
		$('#input_email').keypress(function (e) { if (e.which == 13) { addGuest(); }});
		$('#input_total').keypress(function (e) { if (e.which == 13) { addGuest(); }});
		
		$('.reg-butt').click(function() {changePage();});
	
		$('#submit-button').click(function() {addGuest();});
		
		updateGuestList();
	});
</script>