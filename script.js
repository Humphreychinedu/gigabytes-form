
// $(document).ready(function() {
//     $('form').on('submit', function(e){
//             e.preventDefault();
//     //I had an issue that the forms were submitted in geometrical progression after the next submit. 
//     // This solved the problem.
//             e.stopImmediatePropagation();
//         // show that something is loading
//         $('#response').html("<b>Loading data...</b>");
//         // Call ajax for pass data to other place
//         $.ajax({
//         type: 'POST',
//         url: 'main.php',
//         data: $(this).serialize() // getting filed value in serialize form
//         })
//         .done(function(data){ // if getting done then call.
//         // show the response
//         $('#response').html(dta);
//         // alert("You have Successfully Registered!");
//         })
//         .fail(function() { // if fail then getting message
//     // just in case posting your form failed
//         alert( "Posting failed." );

//         });

//         // to prevent refreshing the whole page page
//         return false;
//     });
// })

$(document).ready(function(){  
      $('#submit').click(function(e){  
            e.preventDefault();
           var regNumber = $('#regNumber').val();  
           var fullName = $('#fullName').val();  
           var email = $('#email').val();  
           var phone = $('#phone').val(); 
           var facebook = $('#facebook').val(); 
           var instagram = $('#instagram').val(); 
           if(regNumber == '' || fullName == '' || email == '' || phone == '')  
           {  
                $('#response').html('<span class="text-danger">All Fields are required</span>');  
           }  
           else  
           {  
                $.ajax({  
                     url:"main.php",  
                     method:"POST",  
                     data:$('#submit_form').serialize(),  
                     beforeSend:function(){  
                          $('#response').html('<span class="text-info">Loading response...</span>');  
                     },  
                     success:function(data){  
                          $('form').trigger("reset");  
                          $('#response').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#response').fadeOut("slow");  
                          }, 5000);  
                     }  
                });  
           }  
      });  
 });  
