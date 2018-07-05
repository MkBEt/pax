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
      <button style="width: 70%;" class="btn-app-teal button button-rounded button-xlarge" >SEND STEEM/SBD</button>
      {{-- <p class="lead balance mb-md-0 mt-md-0" style="color: rgb(12, 46, 138)">0 STEEM
        <strong class="text-muted native-amount dark">≈ 0 USD</strong>
      </p> --}}
    </div>
  </div>
</section>
<div class="container">
  
  <section class="address-info">
    <div class="row address-container mb-4">
      <div class="col-lg-1 offset-lg-3 col-md-2  offset-md-2 col-sm-2 offset-sm-2 d-none d-md-block">
        <span id="fiasteem_memo_qr_code">
          <i class="fas fa-expand"></i>
          <qrcode  value="{{Auth::user()->memo}}" :options="{ size: 100 }"></qrcode>
        </span>
      </div>
      <div class="col-sm-8">
        <span class="help-block help-bigger nobottommargin">Your Steem deposit memo is below 
          <i class="icon-line2-question" data-toggle="popover" data-placement="top" data-content="Deposit bitcoins to address below from bitcoin ATM or any other bitcoin wallet. This is your permanent bitcoin address and never changes." data-container="body" data-trigger="hover" data-original-title="" title="">
            
          </i>
        </span>
        <span id="permanent-crypto-address" data-crypto-address="{{Auth::user()->memo}}">{{Auth::user()->memo}}</span>
        <div class="btn-group">
          <button type="button" class="btn-app-teal btn-app-teal-xs " id="memo" onclick="copyToClipboard()" data-clipboard-text="{{Auth::user()->memo}}">Copy address</button>
          <ul class="dropdown-menu">
            <li><a href="#" id="quick-new-crypto-address">Get new address</a></li>
          </ul>
        </div>
        <div class="btn-group d-block d-sm-none float-right">
          <a href="#" class="qr-icon-link" data-toggle="modal" data-target="#requestedBitcoinAddressModal">
            <qrcode value="{{Auth::user()->memo}}" :options="{ size: 20 }"></qrcode> Enlarge QR
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="transaction-history">
      <transaction-history memo="{{Auth::user()->memo}}"></transaction-history>
  </section>
</div>

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