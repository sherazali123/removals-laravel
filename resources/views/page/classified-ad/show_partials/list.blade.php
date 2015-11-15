
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
                              @if($index  > 0)
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
                                  <td><a href="{{ URL::to('classified-ad/view').'/'.$classic_ad->slug.'/'.$ad->slug }}"><i class="icon-search-circled"></i><span class="i-name">View</span></a></td>
                                </tr>
                                @endforeach
                                
                              @else
                               <tr>
                                  <td colspan=8>No ad is added yet.</td>
                              @endif
                            </tbody>
                    </table>
                    @include('application.paginator', ['offset' => $offset, 'page_no' => $page_no, 'page_size' => $page_size, 'count' => $result_count, 'result_list' => $user_classic_ads])    
                </div>
            </div><!-- End row -->
            
           
        