<h4 class="ad_heading">What is "{{ $classic_ad->title }}" Service</h4>
                        <p>MIK is now offering a quick and convenient service we call “Moving Day” where you can rent our movers to transport a few items across town. If you’re selling a couch or a TV and just need to transport it from one end of the city to the other, Moving Day is ideal for you. The same day service is very quick, convenient and affordable. The larger the group for Moving Day, the cheaper the cost.</p>
                    @if(count($classic_ad->benefits) > 0)  
                        <h4 class="ad_heading">Benefits</h4>
                            
                            <ul class="list_ok">
                                @foreach($classic_ad->benefits as $benefit)
                                    <li><strong>{{ $benefit->description }}</strong></li>
                                @endforeach
                            </ul>
                    @endif
                    @if(count($classic_ad->conditions) > 0)  
                        <h4 class="ad_heading">Conditions</h4>
                            
                            <ul class="list_ok">
                                @foreach($classic_ad->conditions as $condition)
                                    <li><strong>{{ $condition->description }}</strong></li>
                                @endforeach
                            </ul>
                    @endif
                    @if(count($classic_ad->processes) > 0)  
                        <h4 class="ad_heading">Process</h4>
                            
                            <ul class="list_ok">
                                @foreach($classic_ad->processes as $process)
                                    <li><strong>{!! $process->description !!}</strong></li>
                                @endforeach
                            </ul>
                    @endif