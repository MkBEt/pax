@extends('frontend.master_frontend')
@section('content')
{{-- 	<section class="info-section">
		<div class="jumbotron">
			<div class="container text-center">
			  <h1 class="dark">BUY STEEM/SBD</h1> 
			  <p class="dark">FiaSteem, best place to buy Steem/SBD instantly</p> 
			</div>
		</div>
	</section> --}}
	{{-- <div class="container"> --}}
	<section class="transfer-section" id="app">
		{{-- {{ Auth::user()}} --}}
		<transfer-form memo="{{ Auth::user()->memo}}"></transfer-form>
	</section>
	{{-- </div> --}}
@endsection

@section('javascript')
  <script type="text/javascript">
    var vm = new Vue({
      el: '#app',
      data :{

      },
      methods:{
/*        initialData(){
          return {
            first_name : '',
            last_name: '',

          }
        }*/
      }
    });
  </script>
@endsection