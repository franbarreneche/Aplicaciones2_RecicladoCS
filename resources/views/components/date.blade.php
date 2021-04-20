<span class="tag is-light">
    @if($slot != "")
   {{ Carbon\Carbon::parse($slot)->format('d/m/Y') }}
   @else
   {{' - '}}
   @endif
</span>
