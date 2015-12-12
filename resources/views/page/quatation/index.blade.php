@extends('app')


@section('headercss')
<!-- SPECIFIC CSS -->
    <link href="{{ asset('/css/jquery.switch.css') }}" rel="stylesheet">

     <!-- Form Control CSS (checkboxes and radio buttons)  -->
    <link href="{{ asset('/css/beautify_control.css') }}" rel="stylesheet">
    <!-- LayerSlider stylesheet -->
	<link href="{{ asset('/layerslider/css/layerslider.css') }}" rel="stylesheet">

	<link href="{{ asset('/css/jquery.datetimepicker.css') }}" rel="stylesheet">
@endsection
@section('content')

@include('page/classified-ad/partials/header')
@include('page/quatation/index_partials/form')
@include('page/quatation/index_partials/terms_and_conditions')
@include('page/quatation/index_partials/congratulations')

@endsection
@section('footerjs')
<!-- Specific scripts -->
	<script src="{{ asset('/js/jquery.validate.js') }}"></script>
		<!-- Specific scripts -->
	<script src="{{ asset('/js/jquery.validate.js') }}"></script>
	<script src="{{ asset('/js/jquery.stepy.min.js') }}"></script>
	<script src="{{ asset('/js/quotation-validate.js') }}"></script>
	<script src="{{ asset('/js/bootstrap-select.js') }}"></script>
	<script src="{{ asset('/js/moment.js') }}"></script>
	<script src="{{ asset('/js/jquery.datetimepicker.min.js') }}"></script>
	<script>


	 function collapse(id){
	    if(id=='one'){
	    	$("#service_type").val("Economic Service");
	        $('#collapseAlertOne').collapse('toggle');
	        $('#collapseAlertTwo').collapse('hide');
	        $('#collapseAlertThree').collapse('hide');

	    }else if(id=='two'){
	    	$("#service_type").val("Standard Service");
	    	$('#collapseAlertTwo').collapse('toggle');
	        $('#collapseAlertOne').collapse('hide');
	        $('#collapseAlertThree').collapse('hide');

	    } else if(id=='three'){
	    	$("#service_type").val("Premium Service");
	        $('#collapseAlertThree').collapse('toggle');
	        $('#collapseAlertTwo').collapse('hide');
	        $('#collapseAlertOne').collapse('hide');

	    }
	 }



	 $("#custom").validate({
	 	submitHandler: function(form) {
		        // do other things for a valid form
		        //form.submit();
            $.ajax({
              type: 'POST',
              url: $("#custom").attr('action'),
              data: $('#custom').serialize(),
              beforeSend: function(data){
                $("#finish_quotation").val('Sending...');
  		        	$("#finish_quotation").prop('disabled', true);
              },
              success: function(response) {

                 if(response.status == 200){
                  responseData = response;
                    $("#quotationFilled").modal('show');
                 } else {
                   $("#finish_quotation").val('Finish');
     		           $("#finish_quotation").prop('disabled', false);
                  alert(response.message);
                 }
                $("#finish_quotation").val('Sent');
  		        	$("#finish_quotation").prop('disabled', true);
              },
              complete: function(data) {
                $("#finish_quotation").val('Sent');
  		        	$("#finish_quotation").prop('disabled', true);
              },
              error: function() {
                   //$("#commentList").append($("#name").val() + "<br/>" + $("#body").val());
                   $("#finish_quotation").val('Finish');
     		        	$("#finish_quotation").prop('disabled', false);
                  alert("There was an error submitting comment");
              }
           });
		}
	 });

	</script>
	<script>
	  $(document).ready(function(){

	    $('#date_quote').datetimepicker({
				lang:'ch',
			});

	    $('#collapseAlertOne').collapse({'toggle': false});
	    $('#collapseAlertTwo').collapse({'toggle': false});
	    $('#collapseAlertThree').collapse({'toggle': false});
	});
	</script>

@endsection
