<template>
	<div class="card">
		<div class="card-content">
			<div class="level-right">
				<div class="level-item">
					<button @click='save' class='button'>Save</button>
				</div>
			</div>
			<section>
				<h2 class="subtitle">Testimonials</h2>
				<table class="table is-fullwidth">
					<tr>
						<th>Name</th>
						<th>Title</th>
						<th>Photo</th>
					</tr>
					<tr v-for='(item,index) in data.items'>
						<td>{{item.name}}</td>
						<td>{{item.title}}</td>
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
			</section>
		</div>

		<bulmaModal :openModal='openModal' @close="openModal=false">
			<form>
				<bulmaText label='Name' v-model='formData.name' ></bulmaText>
				<bulmaText label='Title' v-model='formData.title' ></bulmaText>
				<bulmaTextArea label='Te' v-model='formData.testimony' ></bulmaTextArea>
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
			type: "Testimonial",
			openModal: false,
			formData : {
				name:"",
				title:"",
				image:"",
				testimony:"",
			},
			data: {
				title: "",
				desc: "",
				items: [],
				id: 0
			}
		}
	},
});
</script>