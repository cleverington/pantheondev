<?php if ($wrapper): ?><div<?php print $attributes; ?>><?php endif; ?>  
  <div<?php print $content_attributes; ?>>    
    <?php if ($breadcrumb): ?>
      <div id="breadcrumb" class="grid-<?php print $columns; ?>"><?php print $breadcrumb; ?></div>
    <?php endif; ?>    
    <?php if ($messages): ?>
      <div id="messages" class="grid-<?php print $columns; ?>"><?php print $messages; ?></div>
    <?php endif; ?>
    <?php print $content; ?>
  </div>
<?php if ($wrapper): ?></div><?php endif; ?>


	; This section lists the regions defined in Zen's default page.tpl.php and
; maintenance-page.tpl.php files. The name in brackets is the machine name of
; the region. The text after the equals sign is a descriptive text used on the
; admin/structure/blocks page.
;
; In the page.tpl, the contents of the region are output with a
; $page['MACHINE-NAME'] variable and, in the maintenance-page.tpl, the region is
; output with a $MACHINE-NAME variable. For example, with this line in the .info
; file:
;   regions[header_top] = Header top
; You'll use this variable in page.tpl.php:
;   <?php print render($page['header_top']); ?>
; And you'll use this variable in maintenance-page.tpl.php:
;   <?php print $header_top; ?>




regions[postscript_first] = Postscript First
regions[postscript_second] = Postscript Second
regions[postscript_third] = Postscript Third
regions[postscript_fourth] = Postscript Fourth


regions[footer_first] = Footer First
regions[footer_second] = Footer Second