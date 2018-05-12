<template>
	<div class="card">
		<section class="card-content">
			<div class="level-right">
				<div class="level-item">
					<button @click='save' class='button'>Save</button>
				</div>
			</div>
			<h2 class="subtitle">Settings</h2>
			<bulmaText label='Email' v-model='data.email' :horizontal='true'></bulmaText>
			<bulmaText label='Reply-to' v-model='data.replyTo' :horizontal='true'></bulmaText>
			<bulmaText label='Display Email' v-model='data.displayEmail' :horizontal='true'></bulmaText>
			<bulmaText label='Address' v-model='data.address' :horizontal='true'></bulmaText>

		</section>
	</div>

</template>

<script>
import Component from "./Component"

export default Component.extend  ({
	data(){
		return {
			type:"Contact",
			data:{
				email:"",
				replyTo:"",
				address:"",
				displayEmail:"",
				id:0
			}
		}
	},
})
</script>