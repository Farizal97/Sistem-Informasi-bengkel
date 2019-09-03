<!DOCTYPE html>
<html>
<head>
	<title>Example of how to use CKEditor</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="ckeditor.js"></script>
</head>
<body>
	<h1>Example of how to use CKEditor with Textarea</h1>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<p>
			<label for="editor1">Content: </label>
			<textarea class="ckeditor" cols="80" id="content" name="content" rows="16" placeholder="Content">It just some example texts.</textarea>
		</p>
		<p>
			<input type="submit" value="Submit">
		</p>
	</form>
	
	<script type="text/javascript">
		CKEDITOR.replace( 'content', {
			toolbar: [
				{ name: 'document', groups: [ 'source', 'savenew' ], items: [ 'Source', '-', 'Save', 'NewPage' ] }
				{ name: 'clipboard', groups: [ 'cutcopypaste', 'undoredo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', '-', 'Undo', 'Redo' ] },
				{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'bidi' ], items: [ 'BulletedList', 'NumberedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'BidiLtr', 'BidiRtl' ] },
				{ name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
				{ name: 'others', items: [ '-' ] },
				{ name: 'about', items: [ 'About' ] },
				'/',
				{ name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
				{ name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', 'RemoveFormat' ] },
				{ name: 'align', items: [  'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] }
			]
		});
	</script>
</body>
</html>
