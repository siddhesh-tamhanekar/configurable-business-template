<form action="{{ route('blog.store')}}" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	<input type="text" name='title'>
	<input type="file" name='logo'>
	<input type="submit">
</form>