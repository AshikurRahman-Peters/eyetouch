/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	
	
	  // for local
	   config.filebrowserBrowseUrl 		= 'http://localhost/club/assets/backend/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';
	   config.filebrowserImageBrowseUrl 	= 'http://localhost/club/assets/backend/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';
	   config.filebrowserFlashBrowseUrl 	= 'http://localhost/club/assets/backend/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';
	   config.filebrowserUploadUrl 		= 'http://localhost/club/assets/backend/ckeditor/kcfinder/upload.php?opener=ckeditor&type=files';
	   config.filebrowserImageUploadUrl	= 'http://localhost/club/assets/backend/ckeditor/kcfinder/upload.php?opener=ckeditor&type=images';
	   config.filebrowserFlashUploadUrl 	= 'http://localhost/club/assets/backend/ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash';

	   
	   //for live
	   //config.filebrowserBrowseUrl 		= 'http://sindhiya.com/libs/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';
	   //config.filebrowserImageBrowseUrl = 'http://sindhiya.com/libs/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';
	   //config.filebrowserFlashBrowseUrl = 'http://sindhiya.com/libs/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';
	   //config.filebrowserUploadUrl 		= 'http://sindhiya.com/libs/ckeditor/kcfinder/upload.php?opener=ckeditor&type=files';
	   //config.filebrowserImageUploadUrl = 'http://sindhiya.com/libs/ckeditor/kcfinder/upload.php?opener=ckeditor&type=images';
	   //config.filebrowserFlashUploadUrl = 'http://sindhiya.com/libs/ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash';
	   
//	   var base_url = window.location.origin;
//	   //alert(base_url);
//	   config.filebrowserBrowseUrl 		= base_url+'/libs/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';
//	   config.filebrowserImageBrowseUrl = base_url+'/libs/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';
//	   config.filebrowserFlashBrowseUrl = base_url+'/libs/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';
//	   config.filebrowserUploadUrl 		= base_url+'/libs/ckeditor/kcfinder/upload.php?opener=ckeditor&type=files';
//	   config.filebrowserImageUploadUrl = base_url+'/libs/ckeditor/kcfinder/upload.php?opener=ckeditor&type=images';
//	   config.filebrowserFlashUploadUrl = base_url+'/libs/ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash';

	   
	   
	  
	   
	   

	   
	   
	   
	   
	   
	config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		'/',
		{ name: 'styles' },
		{ name: 'colors' },

	];


	

	config.extraPlugins = 'font,button,panel,floatpanel,listblock,panelbutton,colorbutton';

	
	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';
};
