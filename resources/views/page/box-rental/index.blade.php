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

	<!-- LayerSlider script files -->
	<script src="{{ asset('/layerslider/js/greensock.js') }}"></script>
	 <script src="{{ asset('/layerslider/js/layerslider.transitions.js') }}"></script>
	<script src="{{ asset('/layerslider/js/layerslider.kreaturamedia.jquery.js') }}"></script>
	<script type="text/javascript">
	    // Running the code when the document is ready
	    $(document).ready(function(){
	        $("input[name=if_yes_no]:radio").change(function () {
	           if($(this).val() == "yes"){
	            $("#if_filled_quatation").slideDown();
	           } else {
	            $("#if_filled_quatation").slideUp();
	           }     
	        });
	    });
	</script>
@endsection
