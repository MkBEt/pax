<template>
	<section class="transaction-table table-responsive">
		<table class="table table-bordered  table-sm">
			<thead class="thead-dark">
				<th>Transaction Id</th>
				<th>From Steemit A/c</th>
				<th>Amount</th>
				<th>Transaction Info</th>
				<th>Actions</th>
			</thead>
			<tbody>
				<tr v-for="(trans,index) in user_transaction">
					<td>{{trans.trx_id}}</td>
					<td>{{trans.from}}</td>
					<td>{{trans.amount}}</td>
					<td>{{trans.timestamp}}</td>
					<td><button class="btn btn-primary btn-xs" @click="redeem(trans)" :disabled="trans.disable==1">Redeem</button></td>
				</tr>
				<tr v-if="user_transaction.length == 0">
					<td colspan="5" class="text-center">No transactions.</td>
				</tr>
			</tbody>
		</table>
	</section>
</template>
<script >
	export default {

      data(){
 /*     	steem.broadcast.transfer("", "milan.amatya13", "fiasteem", "0.001 STEEM", "test", function(err, result) {
  console.log(err, result);
});*/

      	return {
      				user_transaction:[],
      				user_transaction_fiasteem:[],
      			}
      },
      created(){
      	this.fetchredeems();
      },
      props:{
      	memo: {
	      type: String,
	      required: true
	    },

      },
      methods:{
      	fetchtransaction(memo=this.memo){
      		let self=this;
      		steem.api.getAccountHistory('fiasteem', -1, 1500, (err, result) => {
				const transfers = result.filter(tx => tx[1].op[0] === 'transfer');
				transfers.forEach((tx) => {
					const transfer = tx[1].op[1];
					if (transfer.memo == memo) {
						let obj_to_ins = transfer;
						obj_to_ins.trx_id = tx[1].trx_id;
						obj_to_ins.timestamp = tx[1].timestamp;
						obj_to_ins.disable = 0;
						// console.log(_.find(self.user_transaction_fiasteem, ['trx_id', obj_to_ins.trx_id]),obj_to_ins.trx_id);
						if (_.find(self.user_transaction_fiasteem, ['trx_id', obj_to_ins.trx_id])) {
							obj_to_ins.disable = 1;
						}
						(self.user_transaction).unshift(obj_to_ins);
					}
				});
			});

      	},
      	fetchredeems(){
      		let self=this;
      		axios.get('/redeems')
			  .then(function (response) {
			    self.user_transaction_fiasteem = response.data;
		      	self.fetchtransaction();
			  })
			  .catch(function (error) {
			    console.log(error);
			  });
      	},
      	redeem(transaction){
			axios.post('/redeem', transaction)
			    .then(function(response) {
			        switch (response.status) {
			         /*   case 200:
			                window.location.replace(response.data.redirect_path);
			                break;
			            case 204:
			                break;
			            default:*/
			        }
			    })
			    .catch(function(error) {
			        if (error.response) {
			            // The request was made and the server responded with a status code
			            // that falls out of the range of 2xx
			        /*    switch (error.response.status) {
			                case 500:
			                    self.$toastr.e(error.response.data.message);
			                    break;
			                case 204:
			                    console.log('conflict');
			                    break;
			                default:
			            }*/
			        } else if (error.request) {
			            // The request was made but no response was received
			            // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
			            // http.ClientRequest in node.js
			            console.log(error.request);
			        } else {
			            // Something happened in setting up the request that triggered an Error
			            console.log('Error', error.message);
			        }
			    });
		}
      }
    }
</script>