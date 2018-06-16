
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VeeValidate from 'vee-validate';
// import Toastr
import Toastr from 'vue-toastr';
Vue.use(Toastr);
Vue.use(VeeValidate);
// Register vue component

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('simpleform', require('./components/SimpleForm.vue'));

const app = new Vue({
    el: '#app'
});
*/

require('./bootstrap');

window.Vue = require('vue');
// window.Slug = require('slug');
// Slug.defaults.mode = 'rfc3986';

/*import Buefy from 'buefy'
Vue.use(Buefy);*/
Vue.component('v-input', {
	$_veeValidate: {
  	value () {
    	// this.value isn't always updated until the next `update` cycle so its always
      // not synced with the actual input value.
    	return this.innerValue;
    }
  },
  template: `
  	<div>
		<label>
    	<span v-if="label">{{label}}</span> <span v-if="required" class="required">*</span> 
		</label>
			<input @input="$emit('input', $event.target.value)"
             @blur="$emit('blur')"
             			 :placeholder="placeholder"
						 :type="inputType"
						 :name="name"
						 :value="value"
						 :class="{'form-control': true, 'is-danger': errors.has(name) }"
			>
		<div class="invalid-feedback" v-if="errors.has(name)" style="width: 100%;">
          {{ errors.first(name)}}
	  </div>
	</div>
  `,
  props: ['value', 'name','placeholder'],
  name: 'v-input',
  inject: ['$validator'], // we want the same errors as the parent validator so we inject it.
  props: {
    name: {
      type: String,
      required: true
    },
    label: String,
    value: {
      type: String,
      default: ''
    },
    placeholder:{
    	type: String,
    	default:''
    },
    inputType:{
    	type: String,
    	default:'text'
    },
    required:{
    	type: String,
    	default:''
    },
    dataRules: String
  },
  data: () => ({
  	innerValue: null // keep an always update source of value
  }),
  watch: {
  	innerValue (val) {
    	// emit to support v-model on this component.
    	this.$emit('input', val);
    }
  }
});
Vue.component('registration-form', require('./components/RegistrationForm.vue'));

// Vue.component('slug-widget', require('./components/slugWidget.vue'));

// var app = new Vue({
//   el: '#app',
//   data: {}
// });

require('./manage')
