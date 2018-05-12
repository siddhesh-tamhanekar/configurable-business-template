<template>
	<div class='card'>
		<section class="card-content">
			<div class="level-right">
				<div class="level-item">
					<button @click='save' class='button'>Save</button>

				</div>
			</div>
			<h3 class="subtitle">General Settings</h3>

			<bulmaText label='Site Name' v-model='data.name' :horizontal='true'></bulmaText>
			<bulmaTextArea label='Site Description' v-model='data.desc' :horizontal='true'></bulmaTextArea>
			<bulmaImageUpload label='Logo Image' v-model='data.logo' :horizontal='true' ></bulmaImageUpload>
			<bulmaImageUpload label='Hero Background Image' v-model='data.hbg' :horizontal='true' ></bulmaImageUpload>
			<bulmaText label='Hero Title' v-model='data.htitle' :horizontal='true'></bulmaText>
			<bulmaText label='Hero Lead Line' v-model='data.lead' :horizontal='true'></bulmaText>
			<bulmaText label='Hero Button Text' v-model='data.ctaText' :horizontal='true'></bulmaText>
			<bulmaText label='Hero Button Url' v-model='data.ctaUrl' :horizontal='true'></bulmaText>
			<bulmaText label='Footer Text' v-model='data.footerText' :horizontal='true'></bulmaText>

		</section>
	</div>
</template>
<script>
	import Component from "./Component"
	import bulmaImageUpload from "./bulma/ImageUpload"
	export default Component.extend({
		components:{bulmaImageUpload},
		data(){
			return {
				type:"Settings",
				data:{
					name:"",
					desc:"",
					logo:"",
					htitle:"",
					lead:"",
					ctaText:"",
					ctaUrl:"",
					hbg:"",
					id:0,
					footerText:"",
				}
			}
		}
	})
</script>