<template>
	<div class="col-md-6 order-md-1">
          <h4 class="mb-3">Personal Info</h4>
          <form class="needs-validation">
            <div class="row">
              <div class="col-md-4 mb-2">
                <v-input required="true" v-validate="'required|min:3'" placeholder="First Name" name="first_name" inputType="text" data-vv-as="first name" v-model="first_name" label="First name"></v-input>
              </div>
              <div class="col-md-4 mb-2">
                <v-input v-validate="'min:3'" placeholder="Middle Name" name="middle_name" inputType="text" data-vv-as="middle name" v-model="middle_name" label="Middle name"></v-input>
              </div>
              <div class="col-md-4 mb-2">
                <v-input required="true" v-validate="'required|min:3'" placeholder="Last Name" name="last_name" inputType="text" data-vv-as="last name" v-model="last_name" label="Last name"></v-input>
              </div>
            </div>

            <div class="mb-3">
				<v-input v-validate="'required|min:3'" placeholder="Username" name="username" inputType="text" data-vv-as="username" v-model="username" label="Username" required="true"></v-input>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">

					<v-input required="true" v-validate="'required|email'" placeholder="you@example.com" name="email" inputType="text" data-vv-as="email" v-model="email" label="Email"></v-input>
                </div>

				<!-- <v-input v-validate="'required|min:3'" name="username" type="text" data-vv-as="username" v-model="username" label="Username"></v-input> -->


                <div class="col-md-6 mb-3">
					<v-input required="true" v-validate="'required|email'" placeholder="you@example.com" name="email_confirmation" inputType="text" data-vv-as="email confirmation" v-model="email_confirmation" label="Confirm Email "></v-input>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
					<v-input required="true" v-validate="'required|min:6'" placeholder="Password" name="password" inputType="password" data-vv-as="password" v-model="password" label="Password"></v-input>
                </div>

                <div class="col-md-6 mb-3">
					<v-input required="true" v-validate="'required'" placeholder="Confirm Password" name="password_confirmation" inputType="password" data-vv-as="confirm password" v-model="password_confirmation" label="Confirm Password "></v-input>
                </div>
            </div>

        <!--     <div class="row">
                <div class="col-md-12 mb-6">
                    <p class=" text-justify">
                      <small class="text-muted mb-0 ">Tips:<br>
                        <strong>Make the password at least 8 characters long. The longer the better.</strong> Longer passwords are harder for thieves to crack.<br>
                        <strong>Include numbers, capital letters and symbols. </strong>Consider using a $ instead of an S or a 1 instead of an L, or including an & or % – but note that $1ngle is NOT a good password. Password thieves are onto this. But Mf$J1ravng (short for “My friend Sam Jones is really a very nice guy) is an excellent password.
                      </small>
                    </p>                   
                </div>
            </div> -->
            <!-- <hr class="mb-4"> -->
            <button class="btn btn-success btn-lg btn-block" type="button" @click="submitUser()">Create Account & Free Wallet</button>
          </form>
        </div>
</template>
<script >
	export default {

      data(){
      	return this.initialData();
      },
      created(){
      },
      methods:{
      	initialData(){
      		return {
      			first_name:'',
      			middle_name:'',
      			last_name:'',
      			username:'',
      			email:'',
      			email_confirmation:'',
      			password:'',
      			password_confirmation:''
      		}
      	},
      	checkUserNameEmailExistence(type){
      		axios.post('/user/check_existence', {
      			tyepe:type,
			    value: tyep==='username'?this.username:this.email
			  })
			  .then(function (response) {
			    console.log(response);
			  })
			  .catch(function (error) {
			    console.log(error);
			  });
      	},
      	submitUser(){
          let self=this;
      		this.$validator.validateAll().then((result) => {
			if (!result) {
				return;
			}else{
				/*checking for username and email existence first*/
			/*	axios.post('/api/user/check_existence', {
					username: this.username,
					email: this.email
				})
				.then(function (response) {*/
					axios.post('/register', {
						first_name:this.first_name,
		      			middle_name:this.middle_name,
		      			last_name:this.last_name,
		      			username:this.username,
		      			email:this.email,
		      			email_confirmation:this.email_confirmation,
		      			password:this.password,
		      			password_confirmation:this.password_confirmation,
		      			is_agreed: 1,
					})
					.then(function (response) {
						switch(response.status){
							case 200:
  							window.location.replace(response.data.redirect_path);
                break;
              case 204:
                break;
              default:
            }
          })
          .catch(function (error) {
            if (error.response) {
              // The request was made and the server responded with a status code
              // that falls out of the range of 2xx
              switch(error.response.status){
                case 500:
                  self.$toastr.e(error.response.data.message); 
                  break;
                case 204:
                  console.log('conflict');
                  break;
                default:
              }
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
				/*})
				.catch(function (error) {
					console.log(error);
				});*/

			}

			});
      	}
      }
  
	}
</script>