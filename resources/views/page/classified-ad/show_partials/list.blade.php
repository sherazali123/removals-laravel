<div class="container margin_60">
        
            <div class="row tableHeader">
               
                <div class="col-md-3">
                    <a href="{{ URL::to('classified-ad/create').'?ad='.$classic_ad->slug }}" class="btn_1 medium">Add new ad</a> 
                </div>
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-3">
                {!! Form::select('location', array('' => 'Select Location') + $locations, null, ['class' => 'form-control required', 'name' => 'location']) !!}
                </div>
                <div class="col-md-3">
                    <input type="text" placeholder="Search here" class="form-control" id="search" name="search">
                </div>
            </div>    
            <div class="row">
               
                <div class="col-md-12">
                    
                    <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Location</th>
                                <th>Moving day</th>
                                <th>Advertiser</th>
                                @if($classic_ad->type == 1)
                                 <th>Picture</th>
                                @endif
                                <th>Ad title</th>
                                <th>Last post</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $index = count($user_classic_ads); ?>
                              @foreach($user_classic_ads as $ad)
                              <tr>
                                <td>{{ $index-- }}</td>
                                <td>{{ $ad->location->location }}</td>
                                <td>{{ $ad->year.'.'.$ad->month }}</td>
                                <td>{{ $ad->advertiser_name }}</td>
                                @if($classic_ad->type == 1)
                                    <?php $first_image = $ad->images()->first(); ?>
                                    <td><img src="{{ asset($first_image->image) }}" width="20" height="20" /></td>
                                @endif
                                <td>{{ $ad->title }}</td>
                                <td>{{ Carbon\Carbon::parse($ad->created_at)->format('d.m.Y')  }}</td>
                                <td><a href="#"><i class="icon-search-circled"></i><span class="i-name">View</span></a></td>
                              </tr>
                              @endforeach
                            </tbody>
                    </table>
                    <nav class="text-right">
                      <ul class="pagination cPagination">
                        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                     </ul>
                   </nav>    
                </div>
            </div><!-- End row -->
            
           
        </div>