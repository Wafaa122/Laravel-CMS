@extends('layouts._sailor')

@section('content')
<!-- end header -->
    @if($sliders->count()>0)
    <section id="featured" class="bg">            
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Slider -->
                    <div id="main-slider" class="main-slider flexslider">
                        <ul class="slides">
                            @foreach($sliders as $slider)
                            <li>
                                <img src='{{ asset("storage/images/" . $slider->image)  }}' alt="" />
                                <div class="flex-caption">
                                    <h3>{{ $slider->title }}</h3>
                                    <p>{{ $slider->subtitle }}</p>
                                    @if($slider->url)
                                    <a href="{{ $slider->url }}" class="btn btn-theme">{{ $slider->button_text }}</a>
                                    @endif
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
		<!--section class="callaction">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="cta-text">
							<h2>Awesome site template <span>corporate</span> business</h2>
							<p> Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="cta-btn">
							<a href="#" class="btn btn-theme btn-lg">Grab it now <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section-->

		<section id="content">
			<div class="container">
				<div class="row">
					@foreach($articles as $article)
					<div class="col-sm-6 article-item col-md-4" style="margin-bottom:30px;">
						<a href="{{ asset('article/' . $article->id ) }}" class="thumbnail">
						<img class="media-object" src="{{ asset('thumb.php?size=350x230&src=storage/images/' . $article->photos->file) }}" alt="{{ $article->title }}">
						<div class="caption">
							<h4>{{ $article->title }}</h4>
							<p>{{ $article->summary }}</p>
							<div class='text-left'><small>{{ $article->created_at }}</small></div>
						</div>
						</a>
					</div>
					@endforeach
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="blankline">
						</div>
					</div>
				</div>
			</div>



			<!-- clients -->
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-md-2 aligncenter client">
						<img alt="logo" src="/Sailor/img/clients/logo1.png" class="img-responsive" />
					</div>

					<div class="col-xs-6 col-md-2 aligncenter client">
						<img alt="logo" src="/Sailor/img/clients/logo2.png" class="img-responsive" />
					</div>

					<div class="col-xs-6 col-md-2 aligncenter client">
						<img alt="logo" src="/Sailor/img/clients/logo3.png" class="img-responsive" />
					</div>

					<div class="col-xs-6 col-md-2 aligncenter client">
						<img alt="logo" src="/Sailor/img/clients/logo4.png" class="img-responsive" />
					</div>

					<div class="col-xs-6 col-md-2 aligncenter client">
						<img alt="logo" src="/Sailor/img/clients/logo5.png" class="img-responsive" />
					</div>
					<div class="col-xs-6 col-md-2 aligncenter client">
						<img alt="logo" src="/Sailor/img/clients/logo6.png" class="img-responsive" />
					</div>

				</div>
			</div>

		</section>

@endsection
