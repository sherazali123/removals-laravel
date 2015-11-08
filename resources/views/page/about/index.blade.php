@extends('app')


@section('headercss')
<!-- SPECIFIC CSS -->
@endsection
@section('content')
	<div class="container margin_60">
    
            <div id="intro">
                <img src="{{ asset('img/about_1.jpg') }}" alt="" class="img-responsive">
                <img src="{{ asset('img/logo_web.jpg') }}" alt="" class="add_bottom_15">
                <h2>We are "Move in Korea"</h2>
                <p>
                    Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel.<br>
                    Libris hendrerit ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in.
                </p>
            </div>
            
            <hr>
            
            <div class="row">
                <div class="col-md-4">
                    <h3>Some words about us</h3>
                    <p>
                        Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc <strong>doctus definitiones</strong> an, vix id dicam putent. Ius ornatus instructior in.
                    </p>
                    <p>
                        Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in.
                    </p>
                    <h4>Mission</h4>
                    <p>
                        Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. <strong>Libris hendrerit</strong> ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in.
                    </p>
                    <p>
                        Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in.
                    </p>
                    <h4>Filosofy</h4>
                    <p>
                        Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. <strong>Libris hendrerit</strong> ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent. Ius ornatus instructior in.
                    </p>
                </div>
                <div class="col-md-7 col-md-offset-1">
                    <ul class="feat" id="about">
                        <li>
                        <img src="{{ asset('img/icon_domestic_1.png') }}" alt="" width="50" height="54" data-retina="true">
                        <h4>Fast moving service</h4>
                        <p>
                            Eum purto epicurei cotidieque at, ius luptatum invidunt no, vim at sint pertinacia repudiandae. Ad cum dicant laboramus delicatissimi, ex has nonumes explicari prodesset, brute tincidunt conclusionemque no has. Sit ullum latine ei. Ius id adhuc iriure torquatos. Justo prompta senserit eos cu, omnesque posidonium liberavisse pri in.
                        </p>
                        </li>
                        <li>
                        <img src="{{ asset('img/icon_domestic_2.png') }}" alt="" width="50" height="56" data-retina="true">
                        <h4>Secure checklist</h4>
                        <p>
                            Eum purto epicurei cotidieque at, ius luptatum invidunt no, vim at sint pertinacia repudiandae. Ad cum dicant laboramus delicatissimi, ex has nonumes explicari prodesset, brute tincidunt conclusionemque no has. Sit ullum latine ei. Ius id adhuc iriure torquatos. Justo prompta senserit eos cu, omnesque posidonium liberavisse pri in.
                        </p>
                        </li>
                        <li>
                        <img src="{{ asset('img/icon_domestic_5.png') }}" alt="" width="50" height="50" data-retina="true">
                        <h4>Heavy furniture</h4>
                        <p>
                            Eum purto epicurei cotidieque at, ius luptatum invidunt no, vim at sint pertinacia repudiandae. Ad cum dicant laboramus delicatissimi, ex has nonumes explicari prodesset, brute tincidunt conclusionemque no has. Sit ullum latine ei. Ius id adhuc iriure torquatos. Justo prompta senserit eos cu, omnesque posidonium liberavisse pri in.
                        </p>
                        </li>
                        <li>
                        <img src="{{ asset('img/icon_domestic_6.png') }}" alt="" width="50" height="50" data-retina="true">
                        <h4>Cargo service</h4>
                        <p>
                            Eum purto epicurei cotidieque at, ius luptatum invidunt no, vim at sint pertinacia repudiandae. Ad cum dicant laboramus delicatissimi, ex has nonumes explicari prodesset, brute tincidunt conclusionemque no has. Sit ullum latine ei. Ius id adhuc iriure torquatos. Justo prompta senserit eos cu, omnesque posidonium liberavisse pri in.
                        </p>
                        </li>
                    </ul>
                </div>
            </div><!-- End row -->
            
            <hr>
           
            
            <div class="banner nomargin">
                <h4>For more detailas <span>read our blog</span></h4>
                <a href="#" class="btn_1 white">Read more</a>
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
