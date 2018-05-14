<template>
	<div class='card'>
		<div class="card-content">
			<div class="level-right">
				<div class="level-item">
					<button @click='save' class='button'>Save</button>
				</div>
			</div>
			<h2 class="subtitle">Menu Items</h2>
			<ul class='list'>
				<li class="columns">
					<div class="column">Components</div>
					<div class="column">Status</div>
					<div class="column">Sort order</div>
				</li>
				<li class="columns" v-for='component in componentList'>
					<div class="column">
						{{component.class}}
					</div>
					<div class="column">
						<div class="label">
							<div class="checkbox">
								<input type="checkbox" v-model='data.components[component.class].status'>	Enabled
							</div>
						</div>
					</div>
					<div class="column">
						<input type="text" v-model='data.components[component.class].sort' size=2 class="input" >
					</div>

				</li>
			</ul>

		</div>
	</div>

</template>

<script>
import Component from "./Component"
export default Component.extend({
	data(){
		return {
			type:"Menu",
			componentList:[],
			data:{
				id:0,
				components:{}
			},

		}
	},

	created() {
		axios.get("/admin/component-list").then((res) => {
			this.componentList = res.data
			for(let i in this.componentList) {
				if(!this.data.components[this.componentList[i].class ])
					this.data.components[this.componentList[i].class ]= { status:0,sort:0 }
			}
		})
	},
})
</script>