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

	        $('#collapseAlertOne').collapse('toggle');
	        $('#collapseAlertTwo').collapse('hide');
	        $('#collapseAlertThree').collapse('hide');

	    }else if(id=='two'){

	    	$('#collapseAlertTwo').collapse('toggle');
	        $('#collapseAlertOne').collapse('hide');
	        $('#collapseAlertThree').collapse('hide');

	    } else if(id=='three'){

	        $('#collapseAlertThree').collapse('toggle');
	        $('#collapseAlertTwo').collapse('hide');
	        $('#collapseAlertOne').collapse('hide');

	    }
	 }

	 

	 $("#quotation").validate({
	 	submitHandler: function(form) {
		        // do other things for a valid form
		        form.submit();
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
