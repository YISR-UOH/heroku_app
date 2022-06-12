
// Busca elementos en la tabla test 
$(document).ready(function(){
  $('#search').keyup(function(){
      $.ajax({
        url: 'backend.php',
        type: 'post',
        data:{search:$(this).val()},
        success:function(result){
          $("#result").html(result);
        }
      });
  });
});

//agregan los datos ingresados a la tabla test
$(document).ready(function(){
  $("#add").submit(function(e) {
      e.preventDefault();
      $.ajax({
              url: 'backend.php',
              type: 'post',
              data:{add:$(this).serialize()},
              success: function(result) {
                alert(result);
                fetch_data();
              }
      });
  });
});

//elimina los datos ingresados a la tabla test
$(document).ready(function(){
  $("#del").submit(function(e) {
      e.preventDefault();
      $.ajax({
              url: 'backend.php',
              type: 'post',
              data:{del:$(this).serialize()},
              success: function(result) {
                alert(result);
                fetch_data();
              }
      });
  });
});


//muestra la tabla test y sus elementos, se actualiza con cada accion realizada
function fetch_data()  {  
  $.ajax({  
      url:"update_live.php",  
      method:"POST",
      success:function(result){  
            $('#update_table').html(result);  
            fetch_data2();
      }  
  });  
} 

//muestra las tablas disponibles y la cantidad de elementos
function fetch_data2()  {  
  $.ajax({  
      url:"update_list.php",  
      method:"POST",
      success:function(result){  
            $('#update_list').html(result);     
      }  
  });  
} 


//nos permite mostrar los datos la primera vez
var aux=1;
if (aux ==1){
  fetch_data();
  fetch_data2();
  aux=0;
}