@extends('app')


@section('headercss')

@endsection

@section('content')
    
    @include('page/classified-ad/partials/header')
    @include('page/classified-ad/single_ad_partials/view')

@endsection

@section('footerjs')
	<!-- Specific scripts -->
	<script type="text/javascript">
	    // Running the code when the document is ready
	    $(document).ready(function(){
	        
	    });
	</script>
@endsection
