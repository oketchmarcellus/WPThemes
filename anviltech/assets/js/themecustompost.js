// Open upload window
	   $('#upload-file-button').click(function() {
		formfield = $('#download-file').attr('name');
		tb_show( '','media-upload.php?type=image&TB_iframe=true' );
		return false;
	   });

	   // user inserts file into post. only run custom if user started process using the above process
	   // window.send_to_editor(html) is how wp would normally handle the received data
	   window.original_send_to_editor = window.send_to_editor;

	   window.send_to_editor = function(html) {
		if (formfield) {			
		   // Get the src value from the image
		   fileurl = $('img', html).attr('src');

		   // The upload is not an image! Get the href instead
		   if( fileurl === undefined )
			fileurl = $(html).attr('href');

		   // Insert it into the text box and close
		   $('#download-file').val(fileurl);

		   tb_remove();
		} else {
		   window.original_send_to_editor(html);
		}
	   };
        