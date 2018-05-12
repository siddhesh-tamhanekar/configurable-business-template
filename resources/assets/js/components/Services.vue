<template>
	<div class="card">
		<div class="card-content">
			<div class="level-right">
				<div class="level-item">
					<button @click='save' class='button'>Save</button>
				</div>
			</div>
			<section>
				<p class="subtitle">Services</p>
				<table class="table  is-fullwidth">
					<thead>
						<tr>
							<th>Title</th>
							<th>Description</th>
							<th>Icon</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for='(item,index) in data.items'>
							<td>{{item.title}}</td>
							<td>{{item.shortDesc}}</td>
							<td>{{item.icon}}</td>
							<td>
								<a href="#" @click='editItem(index)'  class="button ">Edit</a>
								<a href="#" @click='deleteItem(index)'  class="delete  button is-danger is-large"></a>
							</td>
						</tr>

					</tbody>
					<tfoot>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td >
								<button @click='openModal = true' class='button level-right'>Add New</button>
							</td>

						</tr>
					</tfoot>
				</table>

			</section>

			<section>
				<h3 class="subtitle">Settings</h3>
				<bulmaText label='Title' v-model='data.title' :horizontal='true'></bulmaText>
				<bulmaText label='Description' v-model='data.desc' :horizontal='true'></bulmaText>

			</section>


		</div>
		<bulmaModal :openModal='openModal' @close="openModal=false">
			<form>
				<bulmaText label='Title' v-model='formData.title' ></bulmaText>
				<bulmaText label='Icon' v-model='formData.icon' ></bulmaText>
				<bulmaTextArea label='Icon' v-model='formData.shortDesc' ></bulmaTextArea>

				<div class='field'>
					<a  @click='addItem' class='button is-success  '>Save</a>
				</div>
			</form>
		</bulmaModal>

	</div>

</template>
<script>
import bulmaModal from "./bulma/Modal"
import bulmaText from "./bulma/Text"
import bulmaTextArea from "./bulma/Textarea"
import Component from "./Component"

export default Component.extend({
	components:{bulmaText,bulmaTextArea,bulmaModal},
	data() {
		return {
			type:"Services",
			openModal:false,
			formData : {
				icon:"",
				title:"",
				shortDesc:"",
			},
			data:{
				title:"",
				desc:"",
				id:0,
				items:[]

			}
		}
	},
});
</script>