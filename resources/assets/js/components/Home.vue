<template>
	<div>
		<div class="w3-container w3-padding-32 w3-theme-d1">
			<h1>Products</h1>
		</div>
	</div>
</template>

<style>

</style>

<script>
	export default {
		data() {
			return {
				products: []
			}
		},
		created() {
			this.fetchProducts();
		},
		methods: {
			fetchProducts() {
				axios.get('api/products').then(response => this.products = response.data.products)
			}
		}
	}
</script>