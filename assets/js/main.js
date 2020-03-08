// cargo los roles con ajax
$.ajax({
  url: BASE_URL+'api/roles',   
  dataType: 'json'    
})
.done(function(result) { 

  $.each(result, function(index, val) {
   $("#role").append('<option>'+val.role+'</option>') 
 });
});
