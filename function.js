$('#name').keyup(function(){
var name = $('#name').val();
$.post('php/process_name.php', { firstName: name }, function(data){
$('#firstName_feedback').html(data);
});
});
