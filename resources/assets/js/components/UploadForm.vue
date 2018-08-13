<template>
	<div>
	    <input type="file" name="image">
	    <img src="" alt="Image">
	    <a href="#" class="btn btn-success" @click.prevent="upload"></a>
	</div>

</template>

<<script>
	export default {
		methods:{
			upload(){
				axios.post('/upload')
			}
		}
	}
</script>