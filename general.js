$(document).ready(function(){
$('#content').load('content/index.php');
$('ul #box li a').click(function(){
var page=$(this).attr('href');
$('#content').load('content/' + page +'.php');
return false;
});
});