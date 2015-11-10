@extends('app')


@section('headercss')

@endsection

@section('content')
    
    @include('page/classified-ad/partials/header')
    <div class="container margin_60">
        
            <div class="row tableHeader">
               
                <div class="col-md-3">
                    <a href="{{ URL::to('classified-ad/create').'?ad='.$classic_ad->slug }}" class="btn_1 medium">Add new ad</a> 
                </div>
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-3">
                {!! Form::select('location', array('' => 'Select Location') + $locations, null, ['class' => 'form-control required', 'id' => 'location_select']) !!}
                </div>
                <div class="col-md-3">
                    <input type="text" placeholder="Search here" class="form-control" id="search_query" name="search">
                </div>
            </div>    
            <div id="listView">
    			@include('page/classified-ad/show_partials/list')
    		</div>
	</div>
@endsection

@section('footerjs')
<!-- Specific scripts -->
	<script type="text/javascript">
	    // Running the code when the document is ready
	    $(document).ready(function(){
	        $("#location_select, #search_query").on('change', function(e){
	        	updateTable();
	        });
	    });

	    function updateTable(){
	    	var location = $("#location_select").val();
	    	var search_query = $("#search_query").val();
	    	var url = "{{ URL::to('/classified-ad').'/'.$classic_ad->slug }}";
	    	url = url + '?location=' + location + '&ajax=true&search_query=' + search_query;
	    	$_token = "{{ csrf_token() }}";
		    var userid = userid;
		    $.ajax({
		        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
		        url: url,
		        type: 'GET',
		        cache: false,
		        datatype: 'html',
		        beforeSend: function() {
		            //something before send
		        },
		        success: function(data) {
		            //success
		            //var data = $.parseJSON(data);
		            if(data.status == 200) {
		              //user_jobs div defined on page
		              $('#listView').html(data.html);
		            } else {
		            }
		        },
		        error: function(xhr,textStatus,thrownError) {
		            alert(xhr + "\n" + textStatus + "\n" + thrownError);
		        }
		    });
	    }

	</script>
@endsection
