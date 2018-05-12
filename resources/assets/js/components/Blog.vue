<template>
	<div class="card">
		<div class="card-content">
			<div class="level-right">
				<div class="level-item">
					<button @click='save' class='button'>Save</button>
				</div>
			</div>
			<section>
				<h3 class="subtitle">Blog Posts</h3>
				<table class="table is-fullwidth">
					<tr>
						<th>Post Title</th>
						<th>Post Status</th>
						<th>Post Action</th>
					</tr>
					<tr v-for='post in posts'>
						<td>{{post.title}}</td>
						<td>{{post.status}}</td>
						<td>
							<a href="#" @click='edit(post.slug)' class="button edit">Edit</a>
							<a href="#" @click='deletePost(post.id)' class="button is-danger is-large delete"></a>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><button @click='openModal=true' class="button">Add New</button></td>
					</tr>

				</table>
			</section>
			<section>
				<h3 class="subtitle">Blog Settings</h3>
					<bulmaText label='Title' v-model='data.title'  ></bulmaText>
					<bulmaText label='Description' v-model='data.desc' ></bulmaText>

			</section>

		</div>
			<bulmaModal :openModal='openModal' @close="openModal=false">
				<form>
					<bulmaText label='Title' v-model='post.title' @input='makeSlug' ></bulmaText>
					<bulmaText label='Post Url' v-model='post.slug'  ></bulmaText>
					<bulmaImageUpload label='Post Thumbnail' v-model='post.thumbnail' ></bulmaImageUpload>
					<bulmaTextArea label='Icon' v-model='post.body' ></bulmaTextArea>
					<bulmaSelect label='Status' v-model='post.status'  :options='["DRAFT","PUBLISHED"]'></bulmaSelect>

					<div class='field'>
						<a  @click='store' class='button is-success  '>Save</a>
					</div>
				</form>
			</bulmaModal>


	</div>

</template>
<script>
import Component from "./Component"
import bulmaImageUpload from "./bulma/ImageUpload"
import bulmaSelect from "./bulma/Select"

export default Component.extend({
	components:{bulmaImageUpload,bulmaSelect},
	data(){
		return {
			type:"Blog",
			openModal:false,
			posts:[],
			data:{
				id:0,
				title:"",
				desc:"",
			},
			post:{
				id:0,
				title:"",
				slug:"",
				body:"",
				status:"",
				thumbnail:""
			}
		}
	},
	created(){

		axios.get("blog").then((response) => {
			console.log(response)
			this.posts = response.data
		})
	},

	methods:{
		makeSlug(){
			this.post.slug = this.post.title.replace(/\s+/g,"-")
		},
		store(){

			if(this.post.id) {
				//this.post._method='PUT'
				axios.put("blog/"+this.post.id,this.post)
			} else {
				axios.post("blog", this.post)
			}

			this.post = {
				id:0,
				title:"",
				slug:"",
				body:"",
				status:"",
				thumbnail:""
			}
			this.openModal = false
		},
		deletePost(postId){
			axios.delete("blog/"+postId)
		},

		edit(postId){
			axios.get("blog/"+postId).then(({data})=>{
				this.post = data
				this.openModal = true
			})
		}
	}
})
</script>