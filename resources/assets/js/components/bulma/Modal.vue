<template>
		<div class="modal " :class='{"is-active":openModal}'>
			<div class="modal-background" @click='$emit("close")'></div>
			<div class="modal-content animated zoomIn">
				<div class="box">
					<slot></slot>
				</div>
			</div>
			<button @click='$emit("close")' class="modal-close is-large" aria-label="close">
	</button>

		</div>
</template>
<script>
	export default{
		props:['openModal'],

	}
</script>