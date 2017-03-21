// define
var Notification = Vue.extend({
  props: ['showSuccess', 'successMessage', 'showError', 'errorMessage'],
  template: '#notification',
});

Vue.mixin({
	data: function() {
		return {
			showNotifSuccess: false,
			successMessage: '',
			showNotifError: false,
			errorMessage: '',
		}
	},
	methods: {
		setNotification: function(type, msg) {
			var self = this;
			this.$set('showNotifSuccess', false);
			this.$set('showNotifError', false);

			if(type === 'success') {
				this.$set('successMessage', msg);
				this.$set('showNotifSuccess', true);
			} else {
				this.$set('errorMessage', msg);
				this.$set('showNotifError', true);
			}

			setTimeout(function(){
				self.$set('showNotifSuccess', false);
				self.$set('showNotifError', false);
				self.$set('successMessage', '');
				self.$set('errorMessage', '');
			}, 3000);
		},
	}
});

// register
Vue.component('notification', Notification);

var App = new Vue({
	el: '#app',
	data: function() {
		return {
			SiteName: 'Web Applications',
      Authentication: 'Authentication System',
      SiteFooter: 'Copyright © 2017 Bisma Labs Web Applications. All rights reserved.',
			identity: '',
			password: ''

		}
	},
	methods: {
		login: function(event) {
			event.preventDefault();
			var self = this;
			var data = {
				identity: this.identity,
				password: this.password
			};

			$.ajax({
				type: "post",
				url: base_url + "login/apps",
				data: data,
				success: function(response) {
					//console.log(response);
					var result  = JSON.parse(response);
					if(result.status) {
						window.location = result.redirect;
					} else {
						self.setNotification('error', result.message);
					}
				},
				error: function() {
					self.setNotification('error', 'Error Authentication System');
				}
			});
		}
	}
});
