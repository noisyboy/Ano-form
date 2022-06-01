<?php
date_default_timezone_set('Asia/Kolkata');
$timestamp=date('Y-m-d'.'_'.'h-i-s');
if (isset($_POST['submit']) && !empty($_POST['textbox'])  ) {
$fname = $timestamp.".txt";
$list='<br/><li> <a href="'.'forms/'.$fname.'">'.$_SERVER['REMOTE_ADDR'].'_'.$_SERVER['HTTP_USER_AGENT'].'_'.$fname.'</a> </li>';
fwrite(fopen("dash/index.html",'a'),$list);
$data= $_POST['textbox'] ;
$file=fopen('dash/forms/'.$fname,'a');
fwrite($file,$data);
echo("
<h1 style='font-family:courier'>Form has been submitted, click <a href='/'>here</a> to go back .<h1/>
");
}
if(empty($_POST['textbox'])){
  echo('<h1>Empty Fields</h1>');
}
?>