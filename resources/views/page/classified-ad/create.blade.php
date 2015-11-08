@extends('app')


@section('headercss')

@endsection

@section('content')
    
    @include('page/classified-ad/partials/header')
    @include('page/classified-ad/create_partials/form')

@endsection

@section('footerjs')
	<!-- Specific scripts -->
	<script src="{{ asset('js/jquery.validate.js') }}"></script>
	<script type="text/javascript">
	    // Running the code when the document is ready
	    $(document).ready(function(){
	    	$.validator.addMethod("allImagesValid", function(value, element) {
	    		alert(value);
			    return true;
			}, "* Amount must be greater than zero");
	        $("#add_new_add").validate({
	        	rules: {
	        		images: {allImagesValid: true}
	        	},
		      submitHandler: function(form) {
		        // do other things for a valid form
		        form.submit();
		      }
		    });
	    });
	</script>
@endsection
