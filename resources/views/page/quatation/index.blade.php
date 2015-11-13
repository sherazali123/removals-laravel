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
    
@include('page/classified-ad/partials/header')

@endsection
@section('footerjs')
<!-- Specific scripts -->
	<script src="{{ asset('/js/jquery.validate.js') }}"></script>
	<script>
	  $("#quotation").validate({
	      submitHandler: function(form) {
	        // do other things for a valid form
	        // form.submit();
	        $("#order").modal('show');
	      }
	    });
	    
	    $("#confirmOrderBtn").on('click', function(e){
	        $("#order").modal('hide');
	        $("#confirmorder").modal('show');
	    });
	</script>

@endsection
