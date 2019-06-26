<ol class="breadcrumb">
  @forelse($links as $link)
      @if(!$loop->last)
          <li><a href="{{ $link['url'] }}"><i class="fa {{ $link['icon'] }}"></i> {{ $link['name'] }}</a></li>
      @else
          <li class="active"> {{ $link['name'] }}</li>
      @endif
  @empty
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
  @endforelse
</ol>
