
<template>
	<button 
		class="btn btn-primary btn-sm"
		@click="likeATweet"
	>Like ({{ count }})</button>
</template>

<script>

	export default {

		data() {

			return {

				count: 0

			}
		},

		methods: {

			likeATweet() {

				this.count++

			}

		}

	}
</script>