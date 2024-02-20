$.ajax({
    url : 'data.php', // your php file
    type : 'GET', // type of the HTTP request
    success : function(data){
       var obj = jQuery.parseJSON(data);
       //console.log(obj);
       for(let i=0; i<obj.length; i++){
       console.log(obj[i])
     }
    }
 });  