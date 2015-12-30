
<template>
	<ul class="list-group">

		<tweet v-for="tweet in tweets" :tweet="tweet">

		</tweet>
	</ul>
</template>

<script>

	import Tweet from './Tweet.vue';

	export default {

		props: ['tweets'],

		components: { Tweet },

		data() {

			return {


			}
		}

	}
</script>