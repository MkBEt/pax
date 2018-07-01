@extends('frontend.master_frontend')
@section('content')
<section class="wallet-info-section">
	<div class="jumbotron">
	</div>
</section>
<section class="transaction-history">
	<div class="container">
		
		<transaction-history memo="{{Auth::user()->memo}}"></transaction-history>
	</div>
</section>

@endsection

@section('javascript')
  <script type="text/javascript">
    var vm = new Vue({
      el: '#app',
      data :{

      },
      created(){
      	// this.fetchtransaction();
      },
    });
  </script>
@endsection