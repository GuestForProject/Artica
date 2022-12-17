<? $root = $_SERVER['DOCUMENT_ROOT'];
    $dir1 = $root . '/admin/posts';
    $dir2 = $root . '/admin/topics';
    $dir3 = $root . '/admin/users';
?>
<div class='sideBar'>
	<a href="/admin/posts">Посты</a>
	<a href="/admin/topics">Темы</a>
	<a href="/admin/users">Users</a>
</div>

<style>
	.sideBar {
		position: absolute;
		left: 250px;
		display: flex;
		flex-direction: column;
	}
	.sideBar a {
		text-decoration: none;
		color: black;
		font-size: 20px;
	}

</style>
