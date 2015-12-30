
<template>
	<li class="list-group-item">
		<ul class="media-list">
			<li class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object" src="http://placehold.it/60x60" alt="Image" />
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">{{ tweet.name }}</h4>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					</p>

					<reply-button></reply-button>
					<retweet-button></retweet-button>
					<like-button @click="likeATweet"></like-button>
					
				</div>
			</li>
		</ul>
	</li>
</template>

<script>

	import ReplyButton from './ReplyButton.vue';
	import RetweetButton from './RetweetButton.vue';
	import LikeButton from './LikeButton.vue';

	export default {

		props: ['tweet'],

		components: {
			ReplyButton,
			RetweetButton,
			LikeButton
		},

		data() {

			return {


			}
		},

		methods: {

		}

	}
</script>