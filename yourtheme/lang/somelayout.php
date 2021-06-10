<?php
$templatecontext = [
'imageone' => $OUTPUT->image_url('logo', 'theme'),

];
 
echo $OUTPUT->render_from_template('theme_yourtheme/somelayout', $templatecontext);
?>