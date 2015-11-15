@extends('app')


@section('headercss')
<!-- SPECIFIC CSS -->
@endsection
@section('content')
	<div class="container margin_60">
    
            <div id="intro">
                <img src="{{ asset('img/about_1.jpg') }}" alt="" class="img-responsive">
                <h2>We are "Move in Korea"</h2>
                <p>
                    {{ $text }}
                </p>
            </div>
            
            <hr>
           
            
            <div class="banner nomargin">
                <h4>For more detailas <span>read our blog</span></h4>
                <a href="http://moveinkorea.blogspot.kr/" target="_blank" class="btn_1 white">Read more</a>
            </div>
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
