@if($count > $page_size)
<nav class="text-right">
    <ul class="pagination cPagination">
        @if($offset > 0)
            <li class="<?php echo ($offset <= 0 ) ? 'disabled' : ''; ?>"><a href="{{ URL::to('/classified-ad').'/'.$classic_ad->slug.'?offset='.($offset - 1) }}" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
        @endif
        @for($i = 0; $i < $count / $page_size; $i++)
            <li class="<?php echo (($i+1) == $page_no) ? 'active' : ''; ?>"><a href="{{ URL::to('/classified-ad').'/'.$classic_ad->slug.'?offset='.$i }}">{{ $i + 1 }}</a></li>
        @endfor
        @if(($offset + 1) < $count / $page_size )
            <li class=""><a href="{{ URL::to('/classified-ad').'/'.$classic_ad->slug.'?offset='.($offset + 1) }}" aria-label="Next"><span aria-hidden="true">»</span></a></li>
        @endif
	</ul>
</nav>
@endif