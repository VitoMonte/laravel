
<div id="content-page" class="content group">
    <div class="hentry group">
        <!-- <script>
            jQuery(document).ready(function($){
            	$('.sidebar').remove();
            	
            	if( !$('#primary').hasClass('sidebar-no') ) {
            		$('#primary').removeClass().addClass('sidebar-no');
            	}
            	
            });
        </script> -->
        <div id="portfolio" class="portfolio-big-image">

        @if($portfolios)
	        @foreach($portfolios as $portfolio)

			<div class="hentry work group">
	            <div class="work-thumbnail">
	                <div class="nozoom">
	                    <img src="{{ asset(env('THEME')) }}/images/projects/{{ $portfolio->img->max }}" alt="{{ $portfolio->title }}" alt="{{ $portfolio->title}}" title="{{ $portfolio->title}}" />							
	                    <div class="overlay">
	                        <a class="overlay_img" href="{{  asset(env('THEME')) }}/images/projects/{{ $portfolio->img->path }}" alt="{{ $portfolio->title }}" rel="lightbox" title="{{ $portfolio->title}}"></a>
	                        <a class="overlay_project" href="{{ route('portfolios.show', ['alias' => $portfolio->alias]) }}"></a>
	                        <span class="overlay_title">{{ $portfolio->title}}</span>
	                    </div>
	                </div>
	            </div>
	            <div class="work-description">
	                <h3>{{ $portfolio->title}}</h3>
	                {!! str_limit($portfolio->text, 300) !!}
	                <div class="clear"></div>
	                <div class="work-skillsdate">{{ $portfolio->title}}
	                	@if($portfolio->filter->title)
	                    <p class="skills"><span class="label">Filter:</span> {{ $portfolio->filter->title}}</p>
	                    @endif

	                    @if($portfolio->customer)
	                    <p class="workdate"><span class="label">Customer:</span> {{ $portfolio->customer}}</p>
	                    @endif

	                    @if($portfolio->created_at)
	                    <p class="year"><span class="label">Year:</span> {{ $portfolio->created_at->format('Y')}}</p>
	                    @endif
	                </div>
	                <a class="read-more" href="{{ route('portfolios.show', ['alias' => $portfolio->alias]) }}">{{ Lang::get('ru.read_more') }}</a>            
	            </div>
	            <div class="clear"></div>
	        </div>

			@endforeach
					<div class="general-pagination group">
			@if($portfolios->lastPage() > 1	)

				@if($portfolios->currentPage() !== 1	)
					<a href="{{ $portfolios->url($portfolios->currentPage() - 1)}}">{{ Lang::get('pagination.previous') }}</a>
				@endif

				@for($i = 1; $i <= $portfolios->lastPage(); $i++)

					@if($portfolios->currentPage() == $i)
						<a class="selected disabled">{{ $i }}</a>
					@else
						<a href="{{ $portfolios->url($i) }}">{{ $i }}</a> 
					@endif			

				@endfor

				@if($portfolios->currentPage() !== $portfolios->lastPage())		
					<a href="{{ $portfolios->url($portfolios->currentPage() + 1)}}">{{ Lang::get('pagination.next') }}</a>
				@endif

			@endif
		</div>
		@endif
            
        </div>
        <div class="clear"></div>
    </div>
    <!-- START COMMENTS -->
    <div id="comments">
    </div>
    <!-- END COMMENTS -->
</div>
