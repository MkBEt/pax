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
							<h3 class="dark ">{{$info->blc_steem}} Steem / {{$info->blc_sbd}} SBD</h3>
							<span class="dark" id="memo">{{$info->memo}}</span>&nbsp;<a class="btn btn-warning btn-sm btn-collapsible" onclick="copyToClipboard()"><i class="fa fa-copy"></i> <span>Copy</span></a>
							
						</div>
					</div>
					<div class="col-md-6 col-sm-12 quick-actions">
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
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('javascript')
<script>
	function copyToClipboard() {
	    var copyText = document.getElementById("memo");
	    var textArea = document.createElement("textarea");
	    textArea.value = copyText.textContent;
	    document.body.appendChild(textArea);
	    textArea.select();
	    document.execCommand("Copy");
	    textArea.remove();
	}
</script>
@endsection