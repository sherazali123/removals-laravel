@extends('app')


@section('headercss')
<!-- SPECIFIC CSS -->
    <link href="{{ asset('/css/jquery.switch.css') }}" rel="stylesheet">

     <!-- Form Control CSS (checkboxes and radio buttons)  -->
    <link href="{{ asset('/css/beautify_control.css') }}" rel="stylesheet">
    <!-- LayerSlider stylesheet -->
	<link href="{{ asset('/layerslider/css/layerslider.css') }}" rel="stylesheet">
@endsection
@section('content')
    
    @include('page/box-rental/partials/features_banner')
    @include('page/box-rental/partials/quatation')

@endsection




@section('footerjs')
<!-- Specific scripts -->
	<script src="{{ asset('/js/jquery.validate.js') }}"></script>
	<script>
	  var responseData;

	  $("#box_rentel_form").validate({
	      submitHandler: function(form) {
	        // do other things for a valid form
	        // form.submit();

	        $.ajax({
		        type: 'POST',
		        url: $("#box_rentel_form").attr('action'),
		        data: $('#box_rentel_form').serialize(), 
		        beforeSend: function(data){
		        },
		        success: function(response) {

		           if(response.status == 200){
		           	responseData = response;

		           	$("#confirm_rental_deposit_total").html(response.data.cost.rental_deposit_total);
		           	$("#confirm_purchase_deposit_total").html(response.data.cost.purchase_deposit_total);
		           	$("#confirm_delivery_fee").html(response.data.cost.delivery_fee);
		           	$("#confirm_total_amount_due").html(response.data.cost.total_amount_due);
		           	$("#confirm_refund").html(response.data.cost.refund);
		           	$("#confirm_total_cost").html(response.data.cost.total_amount_due);

		           	$("#order").modal('show');
		           } else {
		           	alert(response.message);
		           }
		        },
		        complete: function(data) {
		        },
		        error: function() {
		             //$("#commentList").append($("#name").val() + "<br/>" + $("#body").val());
		            alert("There was an error submitting comment");
		        }
		     });

	      }
	    });
	    
	    $("#confirmOrderBtn").on('click', function(e){
	    	$.ajax({
		        type: 'POST',
		        url: $("#box_rentel_form").attr('action') + '-email',
		        data: responseData, 
		        beforeSend: function(data){
		        	$("#confirmOrderBtn").html('Confirming...');
		        	$("#confirmOrderBtn").prop('disabled', true);
		        },
		        success: function(response) {
		           if(response.status == 200){
		           	
		           	$(':input','#box_rentel_form')
						  .not(':button, :submit, :reset, :hidden')
						  .val('')
						  .removeAttr('checked')
						  .removeAttr('selected');

		           	$("#order").modal('hide');
	        		$("#confirmorder").modal('show');

	        		responseData = null;

		           } else {
		           	alert(response.message);
		           }
		           $("#confirmOrderBtn").html('Confirm Order');
		        	$("#confirmOrderBtn").prop('disabled', false);
		        },
		        complete: function(data) {
		        	$("#confirmOrderBtn").html('Confirm Order');
		        	$("#confirmOrderBtn").prop('disabled', false);
		        },
		        error: function() {
		        	$("#confirmOrderBtn").html('CConfirm Order');
		        	$("#confirmOrderBtn").prop('disabled', false);
		             //$("#commentList").append($("#name").val() + "<br/>" + $("#body").val());
		            alert("There was an error submitting comment");
		        }
		     });
	        
	    });
	</script>

	<!-- LayerSlider script files -->
	<script src="{{ asset('/layerslider/js/greensock.js') }}"></script>
	 <script src="{{ asset('/layerslider/js/layerslider.transitions.js') }}"></script>
	<script src="{{ asset('/layerslider/js/layerslider.kreaturamedia.jquery.js') }}"></script>
	<script type="text/javascript">
	    // Running the code when the document is ready
	    var cost = {
		    			rental_deposit_total: 0, 
		    			purchase_deposit_total: 0,
		    			delivery_fee: {{ $cost['delivery_fee'] }},
		    			refund: {{ $cost['refund'] }},
		    			total_amount_due: {{ $cost['delivery_fee'] }}
	    			};

	    $(document).ready(function(){
	        $("input[name=if_yes_no]:radio").change(function () {
	           if($(this).val() == "yes"){
	            $("#if_filled_quatation").slideDown();
	           } else {
	            $("#if_filled_quatation").slideUp();
	           }     
	        });

	        $(".serviceChanged").on('change', function(e){
	        	updateCosts();
	        });

	    });
	    function updateCosts(){



	    	$( ".rental_services" ).each(function( index ) {
			  var quantities_rental = $(this).find('.serviceChanged').val();
			  var unit_price_rental = $(this).find('input[name=price]').val();
			  cost.rental_deposit_total = cost.rental_deposit_total + (quantities_rental * unit_price_rental);
			  console.log(quantities_rental, unit_price_rental, cost.rental_deposit_total);
			});

			$( ".purchase_services" ).each(function( index ) {
			  var quantities_purchase = $(this).find('.serviceChanged').val();
			  var unit_price_purchase = $(this).find('input[name=price]').val();
			  cost.purchase_deposit_total = cost.purchase_deposit_total + (quantities_purchase * unit_price_purchase);
			  console.log(quantities_purchase, unit_price_purchase, cost.purchase_deposit_total);
			});

			cost.total_amount_due = cost.rental_deposit_total + cost.purchase_deposit_total + cost.delivery_fee;
			

			$("#br_rental_deposit_total").html(cost.rental_deposit_total);
		    $("#br_purchase_deposit_total").html(cost.purchase_deposit_total);
		    $("#br_delivery_fee").html(cost.delivery_fee);
		    $("#br_total_amount_due").html(cost.total_amount_due);
		    $("#br_refund").html(cost.refund);

		    cost.total_amount_due = 0;
	    	cost.purchase_deposit_total = 0;
	    	cost.rental_deposit_total = 0;
	    }
	</script>
@endsection
