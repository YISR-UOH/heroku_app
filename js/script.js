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
                fetch_data2();
              }
      });
  });
});
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
                fetch_data2();
              }
      });
  });
});
function fetch_data()  {  
  $.ajax({  
      url:"update_live.php",  
      method:"POST",
      success:function(result){  
            $('#update_table').html(result);  
         
      }  
  });  
} 
function fetch_data2()  {  
  $.ajax({  
      url:"update_list.php",  
      method:"POST",
      success:function(result){  
            $('#update_list').html(result);  
            
      }  
  });  
} 

var aux=1;
if (aux ==1){
  fetch_data();
  fetch_data2();
  aux=0;
}