<template>
	<div class="content">
		<div class="card-content">
			<div class="level-right">
				<div class="level-item">
					<button @click='save' class='button'>Save</button>
				</div>
			</div>
			<section>
				<h2 class="subtitle">Work</h2>
				<table class="table is-fullwidth">
					<tr>
						<th>Name</th>
						<th>Category</th>
						<th>photo</th>
					</tr>
					<tr v-for='(item,index) in data.items'>
						<td>{{item.title}}</td>
						<td>{{item.category}}</td>
						<td><img :src="item.image" width="100" alt=""></td>
						<td>
							<a href="#" @click='editItem(index)'  class="button ">Edit</a>
							<a href="#" @click='deleteItem(index)'  class="delete  button is-danger is-large"></a>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><a class='button' @click='openModal=true'>Add New</a></td>
					</tr>
				</table>
			</section>
			<section>
				<h2 class="subtitle">Settings</h2>
				<bulmaText label='Title' v-model='data.title' :horizontal='true'></bulmaText>
				<bulmaText label='Description' v-model='data.desc' :horizontal='true'></bulmaText>
				<bulmaText label='Intro Video Heading' v-model='data.vhead' :horizontal='true'></bulmaText>
				<bulmaText label='Intro Video URL' v-model='data.vurl' :horizontal='true'></bulmaText>
				<bulmaText label='Intro VideoDescription' v-model='data.vdesc' :horizontal='true'></bulmaText>

			</section>

		</div>
		<bulmaModal :openModal='openModal' @close="openModal=false">
			<form>
				<bulmaText label='Title' v-model='formData.title' ></bulmaText>
				<bulmaText label='Category' v-model='formData.category' ></bulmaText>
				<bulmaImageUpload label='Image' v-model='formData.image' ></bulmaImageUpload>

				<div class='field'>
					<a  @click='addItem' class='button is-success  '>Save</a>
				</div>
			</form>
		</bulmaModal>
	</div>
</template>
<script>
import Component from "./Component"
import bulmaImageUpload from "./bulma/ImageUpload"

export default Component.extend({
	components:{bulmaImageUpload},
	data() {
		return {
			type: "Portfolio",
			openModal: false,
			formData : {
				title:"",
				category:"",
				image:"",
			},
			data: {
				title: "",
				desc: "",
				vhead: "",
				vdesc: "",
				vurl: "",
				items: [],
				id: 0
			}

		}
	},
});
</script>