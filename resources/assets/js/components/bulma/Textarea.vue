<template>

		<div v-if='horizontal' class="field is-horizontal">
			<div class="field-label"><div class="label">{{label}}</div></div>
			<div class="field-body">
				<textarea v-bind='$attrs'
						:value='value' type="text"
						@input="$emit('input',$event.target.value)" class="textarea"></textarea>
			</div>

		</div>
		<div v-else class='field'>
			<div class="label">{{label}}</div>
			<div class="control">
				<textarea v-bind='$attrs'
						:value='value' type="text"
						@input="$emit('input',$event.target.value)" class="textarea"></textarea>
			</div>
		</div>
</template>
<script>
	export default{
		inheritAttrs:false,
		props:{
				'label':{
				},
				'value':{
				},
				'horizontal':{
					default:false
				}
			},
		created(){
		}

	}
</script>