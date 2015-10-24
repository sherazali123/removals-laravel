/* FORM WIZARD VALIDATION SIGN UP ======================================== */

$('form#custom').attr('action', 'quotation-wizard-send.php');  /* new version 1.1 */

$(function() {

				$('#custom').stepy({
					backLabel:	'Previous step',
					block:		true,
					errorImage:	true,
					nextLabel:	'Next step',
					titleClick:	true,
					description:	true,
					legend:			false,
					validate:	true
				});
				
				
				$('#custom').validate({
	
					errorPlacement: function(error, element) {
						
					$('#custom .stepy-error').append(error);
					}, rules: {
						'firstname_quote':		'required',
						'lastname_quote':		'required',
						'email_quote':		'required',
						'phone_quote':	'required',
						'message_general':		'required',
						'country_pickup':			'required',
						'city_pickup':			'required',
						'street_pickup':			'required',
						'state_pickup':			'required',
						'postal_code_pickup':			'required',
						'floor_pickup':			'required',
						'elevator_pickup':			'required',
						'country_delivery':			'required',
						'city_delivery':			'required',
						'street_delivery':			'required',
						'state_delivery':			'required',
						'postal_code_delivery':			'required',
						'floor_delivery':			'required',
						'elevator_delivery':			'required',
						'terms':		'required' 	// BE CAREFUL: last has no comma
					}, messages: {
						'firstname_quote':		{ required: 	 'Name required' },
						'lastname_quote':		{ required: 	 'Last name required' },
						'email_quote':		{ required: 	 'Invalid e-mail!' },					
						'phone_quote':	{ required:  'Phone required!' },
						'message_general':		{ required:  'Description required!' },
						'country_pickup':			{ required:  'Country required' },
						'city_pickup':			{ required:  'City required' },
						'street_pickup':			{ required:  'Street required' },
						'state_pickup':			{ required:  'State required' },
						'postal_code_pickup':			{ required:  'Postal code required' },
						'floor_pickup':			{ required:  'Floor required' },
						'elevator_pickup':			{ required:  'Elevator required' },
						'country_delivery':			{ required:  'Country required' },
						'city_delivery':			{ required:  'City required' },
						'street_delivery':			{ required:  'Street required' },
						'state_delivery':			{ required:  'State required' },
						'postal_code_delivery':			{ required:  'Postal code required' },
						'floor_delivery':			{ required:  'Floor required' },
						'elevator_delivery':			{ required:  'Elevator required' },
						'terms':		{ required:  'Please accept terms!' },
					},
					submitHandler: function(form) 
					{
					if($('input#website').val().length == 0)
					{ 
					form.submit();
					}
					}
				});

			});
			