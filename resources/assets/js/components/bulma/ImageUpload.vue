<template>
	<div class="field" :class='{"is-horizontal":horizontal}'>
		<div class="label" :class='{"field-label":horizontal}'>{{label}}</div>
		<div class="control" :class='{"field-body":horizontal}'>
			<label for='file'>

			</label><img :src="value" alt="" width="150" style='height:100px'>
			<input  name='file' @change='upload' type="file" class="file">
		</div>
	</div>
</template>
<script>
	export default {
		props:['label', 'value','horizontal'],
		data(){
			return {
				image:this.value
			}
		},
		mounted(){
			console.log("image upload component created",this)
			this.image = this.value
		},
		methods:{
			upload($event){
				console.log($event)
				let file = $event.target.files[0]
				let form = new FormData()
				form.append("file",file)
				console.log(form)
				self = this
				axios.post("upload/",form).then((res) => {
					this.image = res.data.image
					self.$emit("input",res.data.image);
				})
			}
		}
	}
</script>