var Vue = require('vue');

Vue.use(require('vue-resource'));

import Tweets from './components/Tweets.vue';

new Vue({

	el: '#app',

	components: {
		Tweets
	},

	data: {

		tweets: []
	
	},

	ready() {

		console.log('Ready!');

		this.fetchTweets();

	},

	methods: {

		fetchTweets() {

			this.$http.get('/tweets').then( function(response) {

				this.$set('tweets', response.data);

				console.log(response.data);

			});

		}
	}	
})