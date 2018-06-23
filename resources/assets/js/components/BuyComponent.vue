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
				    <v-input v-validate="'required'" placeholder="Enter amount" name="amount" inputType="number" data-vv-as="amount" v-model="amount" label="Amount" required="true" class="dark"></v-input>
				  </div>
				  <div class="col-md-3 mb-2">
				    <v-input required="true" class="dark" v-validate="'required'" placeholder="Enter account name" name="account_name" inputType="text" data-vv-as="account name" v-model="account_name" label="Account name"></v-input>
				  </div>
				  <div class="col-md-3 mb-2">
				    <button class="btn btn-info-theme" :disabled="amount==0?true:false">Buy It!</button>
				  </div>
				</div>
			</div>
		</div>
	</section>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.');
            steem.api.getAccounts(['pranishg','oldtimer'], function(err, result) {
	console.log(err, result);
});


        },
        data(){
        	return {
        		type: 'steem',
        		amount: '100',
        		account_name:'',

        	}
        }
    }
</script>