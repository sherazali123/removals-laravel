@extends('home_layout')


@section('headercss')
	<!-- SPECIFIC CSS -->
    <link href="{{ asset('/css/jquery.switch.css') }}" rel="stylesheet">

     <!-- Form Control CSS (checkboxes and radio buttons)  -->
    <link href="{{ asset('/css/beautify_control.css') }}" rel="stylesheet">
    <!-- LayerSlider stylesheet -->
	<link href="{{ asset('/layerslider/css/layerslider.css') }}" rel="stylesheet">
@endsection

@section('content')
    
    @include('home/slider')
    @include('home/banner')

@endsection

@section('footerjs')

<!-- LayerSlider script files -->
<script src="{{ asset('layerslider/js/greensock.js') }}"></script>
 <script src="{{ asset('layerslider/js/layerslider.transitions.js') }}"></script>
<script src="{{ asset('layerslider/js/layerslider.kreaturamedia.jquery.js') }}"></script>

<!-- Specific scripts -->
	<script type="text/javascript">
	    // Running the code when the document is ready
	    $(document).ready(function(){
	        // Calling LayerSlider on the target element with adding custom slider options
	        $('#layerslider').layerSlider({
	            autoStart: true,
				responsive: true,
				responsiveUnder: 1280,
				layersContainer: 1170,
	            skinsPath: 'layerslider/skins/'
	            // Please make sure that you didn't forget to add a comma to the line endings
	            // except the last line!
	        });
	    });
	</script>
@endsection
