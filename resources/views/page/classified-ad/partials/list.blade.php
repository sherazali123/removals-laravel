

    <div class="container margin_60">
            <div class="row">
                <div class="col-md-12">
                    <ul class="feat" id="about">
                        @foreach($classic_ads as $ad)
                        <li>
                            <?php $image_path = 'img/classic_ads/'.$ad->image; ?>
                            <img src="{{ url($image_path) }}" alt="" width="50" height="54" data-retina="true">
                            <?php $ad_link = 'classified-ad/'.$ad->slug; ?>
                            <h4><a href="{{ url($ad_link) }}">{{ $ad->title }}</a></h4>
                            <p>
                               {{ $ad->description }}
                            </p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div><!-- End row -->
            
           
        </div><!-- End container -->
        