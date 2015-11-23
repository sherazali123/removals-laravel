@extends('app')


@section('headercss')
<!-- SPECIFIC CSS -->
@endsection
@section('content')
	<div class="container margin_60">
    
            <div id="intro">
                <img src="{{ asset('img/about_1.jpg') }}" alt="" class="img-responsive">
                <h2 style="margin: 30px 0;">We are "Move in Korea"</h2>
                <p>
                    {{ $text }}
                </p>
            </div>
            
            <hr>
           
            
          
        </div>
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
	     
	    });
	</script>
@endsection
