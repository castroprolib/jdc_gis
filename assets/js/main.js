// cargo los countrys con ajax
$.ajax({
  url: BASE_URL+'api/countrys'    
})
.done(function(result) { 

  $.each(result, function(index, val) {
   $("#country").append('<option>'+val.country+'</option>') 
 });
});
