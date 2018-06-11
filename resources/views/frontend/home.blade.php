{{-- {{dd(Auth::user()->allPublicInformations())}} --}}
@extends('frontend.master_frontend')
@section('content')

<!-- Preloader -->
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
{{-- top artical with background begin --}}
    <section id="welcome-section" style="background:url('2/images/homepage/hrdarkblue.jpg') no-repeat #092437; background-size: cover; background-position: -140px;">
        <div class="content-wrap welcome-container" id="landing-header">
            <div class="container">
                                <div class="heading-block topmargin bottommargin-sm dark">
                    <h1 class="text-center">Buy steem/sbd instantly</h1>
                    <div class="center hidden-xs" style="position: relative;">
                        <a href="https://www.youtube.com/watch?v=ZPP1oQ5yX7w" data-lightbox="iframe">
                            See how it works <i class="icon-youtube-play"></i>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 block-center">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-container visible-xs">
                                    <p>FiaSteem is a Peer to Peer steem/sbd marketplace connecting buyers with sellers. Simply select your preferred payment method and type in how many steem/sbd you need.</p>
                                </div>
                                <div class="left-container">
                                    <h3>Buy steem/sbd with</h3>
                                    <ul class="select-method">
                                        <li data-id="4" data-slug="amazon-gift-card">
                                            <div class="row">
                                                <div class="col-md-3 col-xs-2 text-center">
                                                    <img src="2/images/homepage/13726804581274293659.png">
                                                </div>
                                                <div class="col-md-9 col-xs-10 right-side">
                                                    <h5>Amazon Gift Card</h5>
                                                    <span>Instant &mdash; Private</span>
                                                    <span class="pull-right">
                                                        <a href="#">Select</a>
                                                        <i class="icon-line-check" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-id="14" data-slug="paypal">
                                            <div class="row">
                                                <div class="col-md-3 col-xs-2 text-center">
                                                    <img src="2/images/homepage/acceptance_marks_standard_260x165.png">
                                                </div>
                                                <div class="col-md-9 col-xs-10 right-side">
                                                    <h5>Paypal</h5>
                                                    <!-- <span class="offers">Total offers: 54</span> -->
                                                    <span>Instant &mdash; ID may be required</span>
                                                    <span class="pull-right">
                                                        <a href="#">Select</a>
                                                        <i class="icon-line-check" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-id="1" data-slug="western-union">
                                            <div class="row">
                                                <div class="col-md-3 col-xs-2 text-center">
                                                    <img src="2/images/homepage/western-union.png">
                                                </div>
                                                <div class="col-md-9 col-xs-10 right-side">
                                                    <h5>Western Union</h5>
                                                    <span>Best price &mdash; Private</span>
                                                    <span class="pull-right">
                                                        <a href="#">Select</a>
                                                        <i class="icon-line-check" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-id="195" data-slug="onevanilla-visamastercard-gift-card">
                                            <div class="row">
                                                <div class="col-md-3 col-xs-2 text-center">
                                                    <img src="2/images/homepage/onevanilla_logo.png">
                                                </div>
                                                <div class="col-md-9 col-xs-10 right-side">
                                                    <h5>OneVanilla Gift Card</h5>
                                                    <!-- <span class="offers">Total offers: 54</span> -->
                                                    <span>Instant &mdash; Private</span>
                                                    <span class="pull-right">
                                                        <a href="#">Select</a>
                                                        <i class="icon-line-check" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-id="142" data-slug="any-creditdebit-card">
                                            <div class="row">
                                                <div class="col-md-3 col-xs-2 text-center">
                                                    <img src="2/images/homepage/credit-card-icon.png">
                                                </div>
                                                <div class="col-md-9 col-xs-10 right-side">
                                                    <h5>ANY Credit/Debit Card</h5>
                                                    <span>Instant &mdash; ID required</span>
                                                    <span class="pull-right">
                                                        <a href="#">Select</a>
                                                        <i class="icon-line-check" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="select-search">
                                            <select>
                                            </select>
                                            <div class="select-display">
                                                <h5 class="hidden-xs">Select another payment method</h5>
                                                <h5 class="visible-xs">Find another payment method</h5>
                                                <span class="hidden-xs">More than 300 ways to pay for steem/sbd</span>
                                                <span class="visible-xs">More than 300 ways to pay</span>
                                            </div>
                                            <div class="method-display">
                                                <div class="right-side">
                                                    <i class="icon-line-check hidden-xs" aria-hidden="true" style="display: inline-block;"></i>
                                                    <h5>home.paypal</h5>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <i class="icon icon-line-arrow-down" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="right-container">
                                    <h3>Select amount to buy</h3>
                                    <form method="POST" action="https://FiaSteem.com/offer/search" accept-charset="UTF-8" role="form" id="select-amount"><input name="_token" type="hidden" value="cJvjmCiNlbDvDHCXRA6s6ybguNpWtdqlrZb3KYYA">
                                        <input type="hidden" name="payment_method">
                                        <div class="form-group form-group-default required input-group ">
                                            <label for="fiat_amount" class="">How much you want</label>
                                            <input class="form-control input-lg" id="fiat_amount" value="25" placeholder="0" step="1" min="1" name="amount_request" type="text">
                                            <p class="text-left text-danger hide"></p>
                                            <span class="input-group-addon">
                                                <select name="fiat_currency_id" id="fiat_currency_id" class="currency_select2">
                                                    <!-- <option selected="selected" value="" data-rateBtc=""></option> -->
                                                </select>
                                            </span>
                                        </div>
                                        <div class="form-group form-group-default required input-group group-steem/sbd">
                                            <label for="fiat_amount" class="">You get in steem/sbd</label>
                                            <input class="form-control input-lg" id="btc_amount" placeholder="0" step="0.00000001" name="btc_amount" type="text">
                                            <p class="text-left text-danger hide"></p>
                                            <span class="input-group-addon">
                                                BTC
                                            </span>
                                        </div>
                                        <div class="text-container visible-xs">
                                            <div class="row stats">
                                                <div class="col-xs-4 column">
                                                    <h5>40,000<small>+</small></h5>
                                                    <span>steem/sbd traded</span>
                                                </div>
                                                <div class="col-xs-4 column">
                                                    <h5>55,125</h5>
                                                    <span>Happy customers</span>
                                                </div>
                                                <div class="col-xs-4 column">
                                                    <h5>1,289</h5>
                                                    <span>Trusted offers</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-container hidden-xs">
                                            <p>FiaSteem is a Peer to Peer steem/sbd marketplace connecting buyers with sellers. Simply select your preferred payment method and type in how many steem/sbd you need.</p>
                                            <div class="row stats">
                                                <div class="col-xs-4 column">
                                                    <h5>40,000<small>+</small></h5>
                                                    <span>steem/sbd traded</span>
                                                </div>
                                                <div class="col-xs-4 column">
                                                    <h5>55,125</h5>
                                                    <span>Happy customers</span>
                                                </div>
                                                <div class="col-xs-4 column">
                                                    <h5>1,289</h5>
                                                    <span>Trusted offers</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="find-button">
                                            <button value="search" name="search" id="search-btn" class="ladda-button button button-3d btn-block nomargin button-xlarge button-green" data-style="zoom-in" type="submit">
                                                <span class="ladda-label">Buy steem/sbd now</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="payment-group-section">
        <div class="content-wrap welcome-container">
            <div class="container clearfix">
                <div class="text-center topmargin">
                    <h3><strong>More than 300 ways to pay for steem/sbd</strong></h3>
                </div>
                <div id="method_section" class="row topmargin">
                    <a href="buy-steem/sbdf306.html?group=gift-cards#content" class="block-element col-md-3 open-register-modal">
    <div class="text-center">
        <div data-mh="payment-group-container" class=" payment-group-container method-box well shadow-border">
            <img class="box-icon" src="2/images/landing-pages/affiliate/giftcards_icon.svg" width="70" />
            <h4 class="nomargin">Gift cards</h4>
            <span class="help-block nobottommargin">Instant &mdash; Private</span>
            <div class="line line-sm"></div>
            <div class="payment-group-body text-left">
                <p class="bottommargin-xs">Want to buy $20 of steem/sbd fast? Gift cards are accepted. Buy one with cash (save the receipt too) at your local drugstore and exchange it here for instant steem/sbd.</p>
                <span>OneVanilla VISA/MasterCard, Amazon, Target, GameStop, BestBuy, WalMart and many more.</span>
            </div>
        </div>
    </div>
</a>

<a href="buy-steem/sbd.html#content" class="block-element col-md-3 open-register-modal">
    <div class="text-center">
        <div data-mh="payment-group-container" class=" payment-group-container method-box well shadow-border">
            <img class="box-icon" src="2/images/landing-pages/affiliate/cashdeposits_icon.svg" width="70" />
            <h4 class="nomargin">Cash deposits</h4>
            <span class="help-block nobottommargin">Best price &mdash; Less than 1 hour &mdash; Private</span>
            <div class="line line-sm"></div>
            <div class="payment-group-body text-left">
                <p class="bottommargin-xs">No ID or bank account needed, just walk over to your closest branch and deposit cash to the teller. Upload the receipt have steem/sbd in less than 1 hour. Awesome price!</p>
                <span>Western Union, MoneyGram, Bank of America, Wells Fargo, COOP Credit Unions, TD Bank, SEPA, National bank transfers.</span>
            </div>
        </div>
    </div>
</a>

<a href="buy-steem/sbd66a8.html?group=online-transfers#content" class="block-element col-md-3 open-register-modal">
    <div class="text-center">
        <div data-mh="payment-group-container" class=" payment-group-container method-box well shadow-border">
            <img class="box-icon" src="2/images/landing-pages/affiliate/onlinewallets_icon.svg" width="70" />
            <h4 class="nomargin">Online transfers</h4>
            <span class="help-block nobottommargin">Instant &mdash; ID may be required</span>
            <div class="line line-sm"></div>
            <div class="payment-group-body text-left">
                <p class="bottommargin-xs">Don't want to leave the house? If you have an online wallet account and don't mind uploading ID you can have steem/sbd instantly.</p>
                <span>PayPal, Serve to Serve transfer, Skrill, NetSpend, PerfectMoney, OkPay, Paxum and other major online wallets.</span>
            </div>
        </div>
    </div>
</a>

<a href="buy-steem/sbda8be.html?group=debitcredit-cards#content" class="block-element col-md-3 open-register-modal">
    <div class="text-center">
        <div data-mh="payment-group-container" class=" payment-group-container method-box well shadow-border">
            <img class="box-icon" src="2/images/landing-pages/affiliate/cards_icon.svg" width="70" />
            <h4 class="nomargin">Debit/credit cards</h4>
            <span class="help-block nobottommargin">Instant &mdash; ID required</span>
            <div class="line line-sm"></div>
            <div class="payment-group-body text-left">
                <p class="bottommargin-xs">Want to use your personal debit/credit card? Upload ID and pay a bit more to the seller and you've got instant steem/sbd. Your personal VISA, MasterCard or AmEx debit and credit cards.</p>
                <span>Your personal VISA, MasterCard, AmEx debit and credit cards.</span>
            </div>
        </div>
    </div>
</a>                </div>
            </div>
        </div>
    </section>

    <section id="summary" class="darker-bg">
        <div class="content-wrap bottompadding-xs">
            <div class="container clearfix">

                <div class="col_one_third nobottommargin">
                    <div class="heading-block fancy-title nobottomborder title-bottom-border">
                        <h3><i class="icon-steem/sbd2"></i> Purchase Easily</h3>
                    </div>
                    <p>Buying steem/sbd directly from other people makes it even simpler. Just sign up and buy right away. You pay sellers directly from your personal accounts.</p>
                </div>

                <div class="col_one_third nobottommargin">
                    <div class="heading-block fancy-title nobottomborder title-bottom-border">
                        <h3><i class="icon-eye"></i> Instant Live Chat</h3>
                    </div>
                    <p>First time buying steem/sbd? Have questions? Once you start a trade an experienced seller will guide you through the process in a one on one live chat. Start by finding an offer you like!</p>
                </div>

                <div class="col_one_third col_last nobottommargin">
                    <div class="heading-block fancy-title nobottomborder title-bottom-border">
                        <h3><i class="icon-shield"></i> Safe &amp; Secure</h3>
                    </div>
                    <p>If you are a buyer you are 100% protected. We verify and check all of our sellers for your safety. Pay with confidence, 2-factor, escrow, highest level encryption and professionally audited security.</p>
                </div>
            </div>
        </div>
    </section>

        <section id="affiliate-section">
        <div class="content-wrap bottompadding-xs">
            <div class="container">
                <div class="heading-block center">
                    <h2 class="text-center">Join FiaSteem Partner program and earn steem/sbd!</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <img class="affiliate-image" src="2/images/landing-pages/steem/sbd_kiosk_homepage.png" alt="The FiaSteem Partner Program is an easy way to earn steem/sbd passively.">
                    </div>
                    <div class="col-sm-6 right-side">
                        <p>
                            <strong>Do you want to easily refer a friend to buy steem/sbd, monetize your site, blog, steem/sbd wallet or any app and become your own boss?</strong>
                            <br />
                            <br />
                            Share your partner link on any social network or offer a "Buy steem/sbd" option on your site, and reap 2% of every purchase made. It's easy and we have everything prepared - buttons, banners, custom links. A few clicks, and you can kick back and watch the steem/sbd pile up.</p>
                        <p class="text-center">
                            <a href="buy-steem/sbd-kiosk.html" id="affiliate-section-btn" class="button button-3d button-yellow button-xlarge nobottommargin header-cta">
                                Become a partner
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="walkthrough">
        <div class="content-wrap bottompadding-xs">
            <div class="container clearfix">
                <div class="heading-block center">
                    <h2>How to Earn Profit Selling steem/sbd on FiaSteem as a vendor</h2>
                </div>
                <div id="walkthrough-slider" class="owl-carousel owl-theme owl-single">
                    <div class="item"><img src="2/images/how-to-sell-steem/sbd/1.jpg" alt="Selling steem/sbd can be very profitable"></div>
                    <div class="item"><img src="2/images/how-to-sell-steem/sbd/2.jpg" alt="Get some steem/sbd to sell"></div>
                    <div class="item"><img src="2/images/how-to-sell-steem/sbd/3.jpg" alt="Put up an offer"></div>
                    <div class="item"><img src="2/images/how-to-sell-steem/sbd/4.jpg" alt="Monitor your sales"></div>
                    <div class="item"><img src="2/images/how-to-sell-steem/sbd/5.jpg" alt="Close the deall"></div>
                </div>
            </div>
        </div>
    </section>

    <div class="divider divider-short divider-center"><i class="icon-circle"></i></div>

    <section id="overview">
        <div class="content-wrap notoppadding">
            <div class="container clearfix">
                <div class="heading-block center">
                    <h2>On FiaSteem you can</h2>
                </div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <i class="i-alt noborder icon-steem/sbd"></i>
                        </div>
                        <h3>Buy steem/sbd online<span class="subtitle">On FiaSteem you buy steem/sbd from other people in real-time. Trading happens online via live chat.</span></h3>
                    </div>
                </div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <i class="i-alt noborder icon-shop"></i>
                        </div>
                        <h3>Sell steem/sbd<span class="subtitle">FiaSteem Vendors can earn six figures from the comfort of their home and many do.</span></h3>
                    </div>
                </div>

                <div class="col_one_third nobottommargin col_last">
                    <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <i class="i-alt noborder icon-shield"></i>
                        </div>
                        <h3>Trade with Secure Escrow<span class="subtitle">Once payment is made and verified by the seller, the steem/sbd will be released to your wallet.</span></h3>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <i class="i-alt noborder icon-user3"></i>
                        </div>
                        <h3>Build your Reputation<span class="subtitle">We've built a feedback and reputation system on the advice of the very best traders in the space.</span></h3>
                    </div>
                </div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <i class="i-alt noborder icon-wallet"></i>
                        </div>
                        <h3>Get a Free Wallet<span class="subtitle">Use the simplest steem/sbd wallet on earth. You can't make a mistake and know exactly where to go next.</span></h3>
                    </div>
                </div>

                <div class="col_one_third nobottommargin col_last">
                    <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <i class="i-alt noborder icon-shopping-cart"></i>
                        </div>
                        <h3>Earn Passive Income<span class="subtitle">Our Affiliate program helps you earn steem/sbd by driving traffic to your afffiliate link.</span></h3>
                    </div>
                </div>

                <div class="clear"></div>
            </div>
        </div>
    </section>

    <section id="seen-on" class="dark section nomargin nopadding">
        <div class="content-wrap nopadding">
            <div class="container clearfix toppadding">

                <div class="heading-block center nomargin">
                    <h2>As seen on</h2>
                </div>

                <div class="clear"></div>

                <div class="col_one_fifth center">
                    <a target="_blank" href="http://www.coindesk.com/nyc-newsstand-steem/sbd-credit-cards/"><img src="2/images/asseenon_coindesk.png" /></a>
                </div>
                <div class="col_one_fifth center">
                    <a target="_blank" href="https://www.youtube.com/watch?v=edeRqUgjmzc"><img src="2/images/asseenon_fox.png" /></a>
                </div>
                <div class="col_one_fifth center">
                    <a target="_blank" href="http://cointelegraph.com/news/113165/busker-stands-up-to-nypd-becomes-newest-easybitz-client"><img src="2/images/asseenon_cointelegraph.png" /></a>
                </div>
                <div class="col_one_fifth center">
                    <a target="_blank" href="https://steem/sbdmagazine.com/18099/the-face-of-steem/sbd-documentary/"><img src="2/images/asseenon_steem/sbdmagazine.png" /></a>
                </div>
                <div class="col_one_fifth col_last center">
                    <a target="_blank" href="https://btcmanager.com/news/business/interview-with-FiaSteem-how-it-all-started-the-future-of-steem/sbd-and-their-new-affiliate-program/"><img src="2/images/asseenon_btcmanager.png" /></a>
                </div>

                <div class="clear"></div>

                <div class="col_full center">
                    <span>* formerly known as EasyBitz</span>
                </div>

            </div>
        </div>
    </section>

    <section id="section-buy" class="section notopmargin notoppadding footer-stick">
        <div class="content-wrap topbottompadding-sm topmargin-sm">
            <div class="container clearfix">

                <div class="heading-block title-center nobottomborder">
                                            <h2>Get free FiaSteem steem/sbd wallet!</h2>
                        <span>Buy steem/sbd instantly with over 300 different ways to pay</span>
                                    </div>

                <div class="center">
                                            <a href="#" class="open-register-modal button button-3d button-green button-xlarge nobottommargin">Buy steem/sbd now</a>
                                    </div>

            </div>
        </div>
    </section>


</div>
    <div class="modal fade" id="register-modal" data-href="https://FiaSteem.com/user/new-register/home_page" tabindex="-1" role="dialog" aria-labelledby="register-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <i class="fa-spinner fa-spin fa"></i> Loading
                </div>
            </div>
        </div>
    </div>

<div id="gotoTop" class="icon-angle-up"></div>

@endsection

@section('javascript')
<!-- Preloader -->
<script type="text/javascript">
    //<![CDATA[
        $(window).on('load', function() { // makes sure the whole site is loaded 
            $('#status').fadeOut(); // will first fade out the loading animation 
            $('#preloader').delay(250).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(250).css({'overflow':'visible'});
          })
    //]]>
</script>
@endsection


