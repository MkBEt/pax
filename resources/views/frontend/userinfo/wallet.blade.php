@extends('frontend.master_frontend')
@section('content')
<section class="wallet-info-section">
  <div class="jumbotron text-center">
    <div class="container ">
      <h1 class="dark">Current Balance</h1>
      <p class="lead balance mb-md-0" style="color: rgb(12, 46, 138)">{{Auth::user()->blc_steem}}&nbsp;STEEM
        <small class="text-muted native-amount dark">&nbsp;/&nbsp;{{Auth::user()->blc_sbd}}&nbsp;SBD</small>
      </p>
      <a href="{{route('deposit')}}" class=" btn-sm btn-app-blue">ADD MONEY</a>
      <p class="dark mb-md-0">
        You can transfer Fiasteem balance to other Fiasteem user or your Steemit balance to your Fiasteem friends.
      </p>
      <button style="width: 100%;" class="btn-app-teal button button-rounded button-xlarge" >SEND STEEM/SBD</button>
      {{-- <p class="lead balance mb-md-0 mt-md-0" style="color: rgb(12, 46, 138)">0 STEEM
        <strong class="text-muted native-amount dark">≈ 0 USD</strong>
      </p> --}}
    </div>
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