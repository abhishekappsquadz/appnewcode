
$(document).ready(function($) { 


	//configuration
	var max_file_size 			= 10485760; //allowed file size. (1 MB = 1048576)
	var allowed_file_types 		= ['application/zip', 'application/x-compressed-zip', 'application/x-compressed', 'application/x-zip-compressed', 'multipart/x-zip', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/vnd.ms-excel', 'application/pdf', 'text/plain', 'application/vnd.ms-powerpointtd', 'text/csv','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-powerpoint', 'application/octet-stream']; //allowed file types
	var result_output 			= '#output3'; //ID of an element for response output
	var my_form_id 				= '#quote_files_webdev'; //ID of an element for response output
	var total_files_allowed 	= 5; //Number files allowed to upload
	var progress_bar_id 		= '#progress-wrp3'; //ID of an element for response output

	//on form submit
	$('#quote_files_webdev').on("change", function(event) {
		event.preventDefault();
		var proceed = true; //set proceed flag
		var error = [];	//errors
		var total_files_size = 0;
		
		if(!window.File && window.FileReader && window.FileList && window.Blob){ //if browser doesn't supports File API
			$('.gritter-item-wrapper').remove();
			$.gritter.add({
				title: 'File error:',
				fade_in_speed: 'medium',
				fade_out_speed: 2000,
				time: 6000,
				text: "Your browser does not support new File API! Please upgrade.",
				sticky: false,
				class_name: 'growl-warning',
			});
		}else{
			var total_selected_files = $('#quote_files_webdev')[0].files.length; //number of files
			//limit number of files allowed
			if(total_selected_files > total_files_allowed){
				$('.gritter-item-wrapper').remove();
				$.gritter.add({
					title: 'File error:',
					fade_in_speed: 'medium',
					fade_out_speed: 2000,
					time: 6000,
					text: "You have selected "+total_selected_files+" file(s), " + total_files_allowed +" is maximum!",
					sticky: false,
					class_name: 'growl-warning',
				});
				proceed = false; //set proceed flag to false
			}
			 //iterate files in file input field
			$($('#quote_files_webdev')[0].files).each(function(i, ifile){
				if(ifile.value !== ""){ //continue only if file(s) are selected
					file_exe = ifile.name.split('.').pop();
					if(allowed_file_types.indexOf(ifile.type) === -1 && ifile.type!='' && file_exe!='zip'){ //check unsupported file
						$('.gritter-item-wrapper').remove();
						$.gritter.add({
							title: 'File error:',
							fade_in_speed: 'medium',
							fade_out_speed: 2000,
							time: 6000,
							text: "<b>"+ ifile.name + "</b> is unsupported file type!",
							sticky: false,
							class_name: 'growl-danger',
						});
						proceed = false; //set proceed flag to false
					}

					total_files_size = total_files_size + ifile.size; //add file size to total size
				}
			});
			
			//if total file size is greater than max file size
			if(total_files_size > max_file_size){	
				$('.gritter-item-wrapper').remove();
				$.gritter.add({
					title: 'File error:',
					fade_in_speed: 'medium',
					fade_out_speed: 2000,
					time: 6000,
					text: "You have uploaded "+(total_files_size/1048576).toFixed(2)+" MB file size(s), only" + (max_file_size/1048576) +" MB file size is allowed!",
					sticky: false,
					class_name: 'growl-warning',
				});
				proceed = false; //set proceed flag to false
			}
			
			//if everything looks good, proceed with jQuery Ajax
			if(proceed){
				var form_data = new FormData();
				//Append files info
				jQuery.each($('#quote_files_webdev')[0].files, function(i, file) {
					form_data.append('quote_files['+i+']', file);
					$('#files').val(file.name);
				});

				//jQuery Ajax to Post form data
				$.ajax({
					url: "https://www.appsquadzinfo.com/contacts/upload",
					type: "POST",
					data : form_data,
					contentType: false,
					cache: false,
					processData:false,
					xhr: function(){
						//upload Progress
						var xhr = $.ajaxSettings.xhr();
						if (xhr.upload) {
							$(progress_bar_id).show();
							xhr.upload.addEventListener('progress', function(event) {
								var percent = 0;
								var position = event.loaded || event.position;
								var total = event.total;
								if (event.lengthComputable) {
									percent = Math.ceil(position / total * 100);
								}
								//update progressbar
								$(progress_bar_id +" .progress-bar").css("width", + percent +"%");
								$(progress_bar_id + " .status").text(percent +"%");
								
								setTimeout(function () {
									$(progress_bar_id +" .progress-bar").css("0", + percent +"%");
									$(progress_bar_id + " .status").text("0%");
									$(progress_bar_id).hide();
								}, 2000)
							}, true);
						}
						return xhr;
					},
					mimeType:"multipart/form-data"
				}).complete(function(res){ //
					/* $('.gritter-item-wrapper').remove();
					$.gritter.add({
						title: 'You have uploaded following files:',
						fade_in_speed: 'medium',
						fade_out_speed: 2000,
						time: 6000,
						text: res,
						sticky: false,
						class_name: 'growl-success',
					}); */
					$('#output3').hide();
					$('#output3').html(res.responseText);
					$('#output3').show();
					/* setTimeout(function(){
					   $('#output').show();
					}, 1000); */
				});
			}
		}
		
		$(result_output).html(""); //reset output 
		var newErrorMsg = '';
		$(error).each(function(i){ //output any error to output element
			//$(result_output).append('<div class="error">'+error[i]+"</div>");
			newErrorMsg += error[i] + '<br />';
		});
		
		if(newErrorMsg != '') {
			$('.gritter-item-wrapper').remove();
			$.gritter.add({
				title: 'File error:',
				fade_in_speed: 'medium',
				fade_out_speed: 2000,
				time: 6000,
				text: newErrorMsg,
				sticky: false,
				class_name: 'growl-danger',
			});
		}
			
		//function to format bites bit.ly/19yoIPO
		function bytesToSize(bytes) {
		   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
		   if (bytes == 0) return '0 Bytes';
		   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
		   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
		}
	});


    $('a').attr('tabindex',-1); 
}); 
