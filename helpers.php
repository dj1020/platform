<?php

function head($title) {

	print <<< HEADER_TAG
	<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
	<title>$title|EDUx platform</title>
HEADER_TAG;
}

function is_login() {
	return isset($_SESSION['email']);
}

function admin_link($description, $link) {
	if(is_admin()): 
		echo '<p class="backpage">';
		echo "<a href=\"$link\">$description</a>";
		echo '</p>';
	endif;
}

function admin_say($zzz) {
	if (is_admin()):
		echo $zzz;
	endif;
}

function form_open($action, $legend=null) {
	print <<< FORM_OPEN
	<form action="$action" method="POST" class="myform" onsubmit="tt.post();">
	<fieldset>
FORM_OPEN;

	if (!empty($legend)):
		echo "<legend>$legend</legend>";
	endif;
}

function form_close() {
	echo '</fieldset>';
	echo '</form>';
}

function submit() {
	echo '<p style="text-align:center;">';
	echo '<input type="submit" name="submit" value="送出" class="sub" />';
	echo '</p>';
}

function text_input($name, $label, $value) {
	print <<< TEXT_INPUT
	<p>
	<label for="$name">$label:</label>
	<input name="$name" type="text" value="$value" class="text" />
	</p>
TEXT_INPUT;
}

function active_select($name, $label, $default_value) {
	$active_types = array('座談會','研討會','國際會議', '研習營','其他活動');
	
	echo "<label for='$name'>$label</label>";
	echo "<select name='$name'>";

	foreach ($active_types as $type ) {
		$selected = ($default_value == $type)? 'selected' : '';
		echo "<option value='$type' $selected >$type</option>";
	}
	echo '</select>';
}

function docs_select($name, $label, $default_value) {
	$docs_type = array('新聞稿', '講稿', '政策文件');

	echo "<label for='$name'>$label</label>";
	echo "<select name='$name'>";

	foreach ($docs_type as $type ) {
		$selected = ($default_value == $type)? 'selected' : '';
		echo "<option value='$type' $selected >$type</option>";
	}
	echo '</select>';

}

function hidden_input($name, $value) {
	print <<< HIDDEN_INPUT
	<input name="$name" type="hidden" value="$value" />
HIDDEN_INPUT;
}

function text_area($name, $label, $value) {
	print <<< TEXT_AREA_INPUT
	<p>
	<label for="$name">$label:</label>
	<textarea name="$name">$value</textarea>
	</p>
TEXT_AREA_INPUT;
}

function tiny_editor($name, $label, $value) {
	print <<< TINY_EDITOR
<p>
<label for="$name">$label</label><br/>
<textarea id="input" name="$name" style="width:750px; height:400px">$value</textarea>
</p>
<script type="text/javascript">
	var tt = new TINY.editor.edit('editor',{
	id:'input',
	width: 650,
	height:500,
	cssclass:'te',
	controlclass:'tecontrol',
	rowclass:'teheader',
	dividerclass:'tedivider',
	controls:['bold','italic','underline','strikethrough','|','subscript','superscript','|',
			  'orderedlist','unorderedlist','|','outdent','indent','|','leftalign',
			  'centeralign','rightalign','blockjustify','|','unformat','|','undo','redo','n',
			  'font','size','style','|','hr','link','unlink','|','cut','copy','paste','print'],
	footer:true,
	fonts:['新細明體','標楷體','微軟正黑體','Verdana','Arial','Georgia','Trebuchet MS'],
	xhtml:true,
	cssfile:'tinyeditor_style.css',
	bodyid:'editor',
	footerclass:'tefooter',
	toggle:{text:'source',activetext:'wysiwyg',cssclass:'toggle'},
	resize:{cssclass:'resize'}
});
</script>
TINY_EDITOR;
}


# 以下跟圖片上傳有關

# 產生一個圖片上傳的ajax form
function picture_uploader($target, $origin_pic) {

	if (empty($origin_pic))
		$origin_pic = "目前沒有圖片";
	else
		$origin_pic = "目前圖片:<img src=\"image/$origin_pic\" />";

	print <<< FORM_PIC
	<form id="myAjaxForm" action="image_controller.php" method="POST" enctype="multipart/form-data" class="myform">
	<fieldset>
		<div id="message">$origin_pic</div>
		<legend>上傳圖片</legend>
		<input type="file" name="file" class="multi" accept="gif|png|jpg" maxlength="1" />
		<input type="hidden" name="target" value="$target" />
		<input type="hidden" name="action" value="update" />
		<input type="submit" name="update" value="上傳圖片" />
		<input type="submit" name="remove" value="移除圖片" />
		</fieldset>
	</form>	
FORM_PIC;
}

# 圖片、檔案上傳
function file_uploader_lib() {
	print <<< PIC_HEAD
	<script src="jquery.MultiFile.pack.js" type="text/javascript" ></script>
	<script src="jquery.form.js" type="text/javascript" ></script>  
    <script type="text/javascript" >     	
        // wait for the DOM to be loaded 
        $(document).ready(function() {

        	var bar = $('.bar');
        	var percent = $('.percent');        	
        	var progress = $('.progress');
        	progress.hide();

        	var options = {
    			target: '#message',
    			success: function() {
    				$('input:file').MultiFile('reset');
    			},
    			beforeSend: function() {		        			
        			bar.width('0%');
        			percent.html('0%');
        			progress.fadeIn('fast');
    			},
    			uploadProgress: function(event, position, total, percentComplete) {
        			var percentVal = percentComplete + '%';
        			bar.width(percentVal)
        			percent.html(percentVal);
        			progress.fadeOut('slow');
    			}
    		}
            $('#myAjaxForm').ajaxForm(options);            
        }); 	
    </script>
PIC_HEAD;
}

function att_html_view($attached_files, $editable=false) {
	
	echo '<br />';
	echo '<b>目前附檔:</b>';
	echo '<ul class="filelist">';

	foreach ($attached_files as $a) {
		
		echo '<li>';
		echo '<img src="image/file-icon.png" />';
		echo "<a href=\"upload/$a->filename\"> $a->oldname </a>";

		if ($editable) {
			echo '<img src="image/remove-icon.png"',
				'alt="刪除圖片" class="remove"',
				"onclick=\"remove_file($a->id, '$a->oldname');\" />";
		}
		echo '</li>';		
	}
	echo '</ul>';
	echo '<br />';

}

function load_view($filename, $data = array()) {

	foreach ($data as $key => $value) {
		$$key = $value;
	}
	include('view/' . $filename);
}
