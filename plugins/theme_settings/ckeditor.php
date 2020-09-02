<?php if (!defined('IN_GS')) {die('you cannot load this page directly.');}

/**
 * CKEditor template
 */


$EDHEIGHT = defined('GSEDITORHEIGHT') ? GSEDITORHEIGHT.'px' : '300px';
$EDTOOL = defined('GSEDITORTOOL') ? GSEDITORTOOL : 'basic';
$EDLANG = defined('GSEDITORLANG') ? GSEDITORLANG : i18n_r('CKEDITOR_LANG');
$EDOPTIONS = defined('GSEDITOROPTIONS') && trim(GSEDITOROPTIONS) != '' ? ', '.GSEDITOROPTIONS : '';

if ($EDTOOL == 'advanced') {
  $TOOLBAR = "
    ['Bold', 'Italic', 'Underline', 'NumberedList', 'BulletedList', 'JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock', 'Table', 'TextColor', 'BGColor', 'Link', 'Unlink', 'Image', 'RemoveFormat', 'Source'],
    '/',
    ['Styles','Format','Font','FontSize']
  ";
} elseif ($EDTOOL == 'basic') {
  $TOOLBAR = "['Bold', 'Italic', 'Underline', 'NumberedList', 'BulletedList', 'JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock', 'Link', 'Unlink', 'Image', 'RemoveFormat', 'Source']";
} else {
  $TOOLBAR = "['Cut','Copy','Paste','PasteFromWord','-','Undo','Redo','-','SpecialChar','-', 'Image','Flash' ,'MediaEmbed', 'RemoveFormat','Templates','-','Format','FontSize', 'Source'],
['Bold', 'Italic', 'Underline', 'NumberedList', 'BulletedList','-','Outdent','Indent','JustifyLeft','JustifyCenter','JustifyRight',
'JustifyBlock','BidiLtr','BidiRtl', 'TextColor', 'BGColor', 'Link','Unlink']
";
}

global $HTMLEDITOR, $TEMPLATE, $SITEURL;
  if (isset ($HTMLEDITOR) && $HTMLEDITOR != '') {
    ?>
    <script type="text/javascript" src="template/js/ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
      var editor = CKEDITOR.replaceAll(function(textarea, config) {
 if (textarea.className!="wysiwygedit") return false; //for only assign a class

        config.skin = 'getsimple';
        config.forcePasteAsPlainText = true;
        config.language = '<?php echo $EDLANG; ?>';
        config.defaultLanguage = 'en';
        <?php
        if (file_exists(GSTHEMESPATH . $TEMPLATE . '/editor.css')) {
          $path = suggest_site_path();
          ?>
         config.contentsCss = '<?php echo $path; ?>theme/<?php echo $TEMPLATE; ?>/editor.css';
          <?php
        }
        ?>
        config.entities = false;
        config.uiColor = '#FFFFFF';
        config.height = '<?php echo $EDHEIGHT; ?>';
        config.baseHref = '<?php echo $SITEURL; ?>';
        config.toolbar =
        [
        <?php echo $TOOLBAR; ?>
        ]

//        config.contentsLangDirection = 'rtl';
//        config.extraPlugins = 'MediaEmbed';

        <?php
$search  = array(' : ', ',');
$replace = array(' = ', ';');
echo str_replace($search, $replace, $EDOPTIONS); ?>;


        config.tabSpaces = 10;
        config.filebrowserBrowseUrl = 'filebrowser.php?type=all';
        config.filebrowserImageBrowseUrl = 'filebrowser.php?type=images';
        config.filebrowserWindowWidth = '730';
        config.filebrowserWindowHeight = '500';
         return true;
      });
    </script>
    <?php
    //ckeditor_add_page_link(); // "Link to local page" (Link Type dropdown)
  }

?>