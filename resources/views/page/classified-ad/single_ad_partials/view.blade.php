<div class="container margin_60">  
                        <div class="col-md-4">
                            <img src="{{ url('img/classic_ads').'/'.$classic_ad->image }}" alt="" class="img-responsive col-md-4" data-retina="true">
                        </div>
                        <div class="col-md-8">
                            <h4>{{ $user_classic_ad->title }}</h4>
                            <p>
                                {{ $user_classic_ad->description }}
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list_2">
                                        
                                        <li><strong>Name: </strong>{{ $user_classic_ad->advertiser_name }}</li>
                                        <li><strong>Email: </strong>{{ $user_classic_ad->advertiser_email }}</li>
                                        <li><strong>Phone no: </strong>{{ $user_classic_ad->advertiser_telephone }}</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list_2">
                                        <li><strong>Location: </strong>{{ $user_classic_ad->location->location }}</li>
                                        <li><strong>Moving day: </strong>{{ $user_classic_ad->month.', '.$user_classic_ad->year }}</li>
                                    </ul>
                                </div>
                            </div><!-- End row --> 
                            @if(count($user_classic_ad->images) > 0)
                                   <div class="row magnific-gallery">
                                       @foreach($user_classic_ad->images as $image)
                                           <div class="col-md-4">
                                                <a href="{{ asset($image->image) }}" title="{{ basename($image->image) }}"><img src="{{ asset($image->image) }}" alt="{{ basename($image->image) }}" class="img-responsive"></a>
                                           </div>
                                        @endforeach
                                   </div><!-- End row-->
                           @endif
                        </div>
    </div><!-- End container -->
        