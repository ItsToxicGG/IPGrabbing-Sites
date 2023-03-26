$(document).ready(function(){
  $('#saveBtn').click(function(){
    $.ajax({
      url: 'ipsave.php',
      type: 'POST',
      dataType: 'json',
      success: function(response){
        console.log(response.message);
      },
      error: function(xhr, status, error){
        console.log(xhr.responseText);
      }
    });
  });

  $('#stayTogether').click(function(){
    window.location.href = 'thankyou.php';
    $.ajax({  
      url: 'ipsave.php',
      type: 'POST',
      dataType: 'json',
      success: function(response){
        console.log(response.message);
      },
      error: function(xhr, status, error){
        console.log(xhr.responseText);
      }
    });
  });
});
