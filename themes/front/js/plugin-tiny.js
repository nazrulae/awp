tinymce.init({    selector: "textarea",    theme: "modern",    height: 300,    subfolder:"",	    font_formats: "Andale Mono=andale mono,times;"+        "Arial=arial,helvetica,sans-serif;"+        "Arial Black=arial black,avant garde;"+        "Book Antiqua=book antiqua,palatino;"+        "Comic Sans MS=comic sans ms,sans-serif;"+        "Courier New=courier new,courier;"+        "Georgia=georgia,palatino;"+        "Helvetica=helvetica;"+        "Impact=impact,chicago;"+        "Symbol=symbol;"+        "Tahoma=tahoma,arial,helvetica,sans-serif;"+        "Terminal=terminal,monaco;"+        "Times New Roman=times new roman,times;"+        "Trebuchet MS=trebuchet ms,geneva;"+        "Verdana=verdana,geneva;"+        "Webdings=webdings;"+        "Wingdings=wingdings,zapf dingbats",    plugins: [         "advlist autolink link image lists charmap print preview hr anchor pagebreak",         "searchreplace wordcount visualblocks visualchars code insertdatetime media nonbreaking",         "table contextmenu directionality emoticons paste textcolor filemanager"   ],   image_advtab: true,   toolbar: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect forecolor backcolor | link unlink anchor | image media | print preview code"   	 }); 