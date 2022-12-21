
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<form  method="post">
  <input name='name' id="name" placeholder='user'><br>
  <input name='phone' id="phone" type='text' placeholder='password'><br>
  <button type='button' id="myform">Try</button>
</form>
<script>
    $("#myform").on('click',function (e){
        alert();
//   var data1 = JSON.stringify( $(form).serializeArray() ); //  <-----------
// e.preventDefault();
//   $.ajax({
//       url: "myapi.php",
//       type: "POST",
//       data: new FormData(this),
//       contentType: false,
//       cache: false,
//       processData: false,
//       success: function(response) {
//         $("#myForm").trigger("reset"); // this line is to reset form input fields
//         alert('submitted');
//       },
//       error: function(e) {
//         alert('Failed to sumit');
//       }
//     });
//   return false; //don't submit

$.ajax({
    url: "myapi.php",
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
    data: JSON.stringify( { "name": $('#name').val(), "phone": $('#phone').val() } ),
    processData: false,
    success: function( data, textStatus, jQxhr ){
        // $('#response pre').html( JSON.stringify( data ) );
    },
    error: function( jqXhr, textStatus, errorThrown ){
        console.log( errorThrown );
    }
});
});
</script>