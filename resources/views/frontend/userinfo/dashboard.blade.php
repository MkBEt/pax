@extends('frontend.master_frontend')
@section('content')
	<section class="info-section">
		<div class="jumbotron">
			<div class="container">
				<div class="row ">
					<div class="col-md-6 col-sm-12">
						<div class="avatar-wrapper">
							<img src="http://via.placeholder.com/150x150" class="d-block mx-auto">
						</div>
						<div class="summary-overview">
							<h2 class="dark ">{{$info->username}}</h2>
							<h3 class="dark ">0 Steem / 0 STB</h3>
							<span class="dark">{{$info->memo}}</span>&nbsp;&nbsp;<a class="btn btn-outline-info btn-sm btn-collapsible"><i class="fa fa-copy"></i> <span>Copy</span></a>
							
						</div>
					</div>
				{{-- 	<div class="col-md-6 col-sm-12 quick-actions">
						<div class="row ">
							<div class="col-xs-3 text-center quick-action-specific bounceIn animated" data-animate="bounceIn">
								<a href="#" class="btn-circle btn">
	                                <i class="i-circled i-light i-xlarge divcenter bottommargin-xs fa fa-help"></i>
	                                <span class="dark">Buy Steem/SBD</span>
	                            </a>
							</div>
							<div class="col-xs-3 text-center quick-action-specific bounceIn animated" data-animate="bounceIn">
								<a href="#" class="btn-circle btn">
	                                <i class="i-circled i-light i-xlarge divcenter bottommargin-xs fa fa-wallet "></i>
	                                <span class="dark">Buy Steem/SBD</span>
	                            </a>
							</div>
							<div class="col-xs-3 text-center quick-action-specific bounceIn animated" data-animate="bounceIn">
								<a href="#" class="btn-circle btn">
	                                <i class="i-circled i-light i-xlarge divcenter bottommargin-xs fa fa-home "></i>
	                                <span class="dark">Buy Steem/SBD</span>
	                            </a>
							</div>
							<div class="col-xs-3 text-center quick-action-specific bounceIn animated" data-animate="bounceIn">
								<a href="#" class="btn-circle btn">
	                                <i class="i-circled i-light i-xlarge divcenter bottommargin-xs fa fa-home "></i>
	                                <span class="dark">Buy Steem/SBD</span>
	                            </a>
							</div>

							
						</div>
					</div> --}}
				</div>
			</div>
		</div>
	</section>
@endsection