<template>

		<div v-if='horizontal' class="field is-horizontal">
			<div class="field-label"><div class="label">{{label}}</div></div>
			<div class="field-body">
				<select v-bind='$attrs'
						:value='value'
						@input="$emit('input',$event.target.value)" class="select">
					<option value="">Please Select</option>
					<option v-for='o in options' :value="o" v-text='o'></option>
				</select>
			</div>

		</div>
		<div v-else class='field'>
			<div class="label">{{label}}</div>
			<div class="control">
				<select v-bind='$attrs'
						:value='value'
						@input="$emit('input',$event.target.value)" class="select">
					<option value="">Please Select</option>
					<option v-for='o in options' :value="o" v-text='o'></option>
				</select>

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
				},
				'options':{
					default:[]
				}
			},
		created(){
		}

	}
</script>