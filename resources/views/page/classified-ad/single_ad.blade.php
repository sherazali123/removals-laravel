@extends('app')


@section('headercss')
	<meta property="og:title" content="{{ $user_classic_ad->title }}" />
	<meta property="og:site_name" content="Move in Korea"/>
	<meta property="og:url" content="{{ URL::to('/') }}" />
	<meta property="og:description" content="{{ $user_classic_ad->description }}" />
	<meta property="og:type" content="article" />
	<meta property="og:locale" content="en_US" />            <!-- Default -->
	<meta property="og:image" content="{{ url('img/classic_ads').'/'.$classic_ad->image }}" />
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
