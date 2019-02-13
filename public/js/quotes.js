$(document).ready(function(){
    $("blockquote").children("a #nextQuote").click(function(){
       jQuery.ajax({
           type:"POST",
           url:"../Repository/QuoteRepository.php",
           data: quotes,
           success: console.log("success"),
           error: function(xhr, textStatus, errorThrown){
               console.log("error");
           }

       });
    });
});

