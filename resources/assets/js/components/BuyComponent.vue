<template>
<!-- 	<div class="row">
		<div class="col-md-6">
			<div class="row">
              <div class="col-md-3 mb-1">
                <div>
                	<label>
                        <input type="radio" name="type" id="type1" value="steem" v-model="type">
	                        Buy Steem
                    </label>
                </div>
                <div>
                	<label>
                        <input type="radio" name="type" id="type1" value="sbd" v-model="type">
	                        Buy SBD
                    </label>
                </div>
              </div>
              <div class="col-md-4 mb-2">
                <v-input v-validate="'required'" placeholder="Enter amount" name="amount" inputType="text" data-vv-as="amount" v-model="amount" label="Amount" required="true"></v-input>
              </div>
              <div class="col-md-4 mb-2">
                <v-input required="true" v-validate="'required'" placeholder="Enter account name" name="account_name" inputType="text" data-vv-as="account name" v-model="account_name" label="Account name"></v-input>
              </div>
            </div>
        </div>
		<div class="clearfix">
			
		</div>		
	</div> -->
	<section class="info-section">
		<div class="jumbotron">
			<div class="container text-center">
				<h1 class="dark">BUY STEEM/SBD</h1> 
				<div class="row">
				  <div class="col-md-3 mb-2">
				    <div>
				    	<label class="dark">
				            <input type="radio" name="type" id="type1" value="steem" v-model="type">
				        Buy Steem
				        </label class="dark">
				    </div>
				    <div>
				    	<label>
				            <input type="radio" name="type" id="type1" value="sbd" v-model="type">
				        Buy SBD
				        </label>
				    </div>
				  </div>
				  <div class="col-md-3 mb-2">
				    <v-input v-validate="'required'" placeholder="Enter amount" name="amount" inputType="number" data-vv-as="amount" v-model="amount" label="Amount" required="true" class="dark" id="amount" @keydown-enter="focusOnEnter('#account_name')"></v-input>
				    <span class="invalid-feedback" v-if="invalid_amount" style="width: 100%;">
						Insufficient amount.
					</span>
				  </div>
				  <div class="col-md-3 mb-2">
				    <v-input required="true" class="dark" v-validate="'required'" placeholder="Enter account name" name="account_name" inputType="text" data-vv-as="account name" v-model="account_name" label="Account name" @keydown-enter="transfer()"  id="account_name"></v-input>
				    <span class="invalid-feedback" v-if="invalid_account" style="width: 100%;">
						Invalid account name.
					</span>
				  </div>
				  <div class="col-md-3 mb-2">
				    <button class="btn btn-info-theme" :disabled="amount==0?true:(disable_buy_btn==1?true:false)" @click="transfer()">Buy It!</button>
				  </div>
				</div>
			</div>
		</div>
	</section>
</template>
<script>
    export default {
    	props:{
    		memo: {
		      type: String,
		      required: true
		    },
    	},
        mounted() {
        	$('#amount').select();
        },
        data(){
        	return {
        		disable_buy_btn:0,
        		type: 'steem',
        		amount: '100',
        		account_name:'',
        		invalid_amount:false,
        		invalid_account:false,
        	}
        },
        methods:{
        	focusOnEnter(id){
        		$(id).focus();
        	},
        	transfer_link_generator(type="STEEM",to='milan.amatya13',amount=this.amount,memo=this.memo){
        		var link = api.sign('transfer', {
				  to: to,
				  amount: parseFloat(amount).toFixed(3)+' '+type,
				  memo: memo,
				}, 'http://fiasteem.com/transfer-complete');
				window.open(link,"_self");
        	},
        	transfer(){
        		let self = this;
        		this.disable_buy_btn=1;
        		this.$validator.validateAll().then(result => {
				   // result is true or false depending on the validation result.

				  if (result) {
					steem.api.getAccounts([self.account_name], function(err, response) {
						if (err) {
							self.$toastr.e("Please try again later."); 
							self.invalid_account = true;
							self.disable_buy_btn = 0;
							return false;
						}
						if (response.length>0) {
							let res = response[0];
							if (self.type=='steem') {
								console.log(parseFloat((res.balance).replace("STEEM",'')));
								if (parseFloat((res.balance).replace("STEEM",'')) < parseFloat(self.amount)) {
									self.invalid_amount = true;
									self.disable_buy_btn = 0;
									return false;
								}else{
									self.invalid_amount = false;
									self.transfer_link_generator();
								}
							}
							if (self.type=='sbd') {
								if (parseFloat((res.sbd_balance).replace("SBD",'')) < parseFloat(self.amount)) {
									self.invalid_amount = true;
									self.disable_buy_btn = 0;
									return false;
								}else{
									self.invalid_amount = false;
									self.transfer_link_generator("SBD");

								}
							}
						}else{
							self.$toastr.e("Account name doesn't exists."); 
							self.invalid_account = true;
							self.disable_buy_btn = 0;
							return false;

						}
					});
				  } else {
				    self.disable_buy_btn = 0;
				  }
				});
        	}
        }
    }
</script>