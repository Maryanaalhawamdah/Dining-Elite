<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Full Text Search in Laravel using Ajax Example - tutsmake.com</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">    
     <br />
     <h3 align="center">Full Text Search in Laravel using Ajax Example - tutsmake.com</h3>
     
     <div class="table-responsive">
        @csrf
    <table class="table table-bordered table-hover">
        <thead>
         <tr>
            <th>Name</th>
            <th>description</th>
            <th>location</th>
            
         </tr>
     </thead>
     <tbody></tbody>
    </table>
   </div>
        </div>
 </body>
</html>
 
 
<script>
$(document).ready(function(){
 
 load_data('');
 
 function load_data(full_text_search_query = '')
 {
  var _token = $("input[name=_token]").val();
  $.ajax({
   url:"{{ url('search') }}",
   method:"POST",
   data:{full_text_search_query:full_text_search_query, _token:_token},
   dataType:"json",
   success:function(data)
   {
    var output = '';
    if(data.length > 0)
    {
     for(var count = 0; count < data.length; count++)
     {
      output += '<tr>';
      output += '<td>'+data[count].name+'</td>';
      output += '<td>'+data[count].description+'</td>';
      output += '<td>'+data[count].location+'</td>';
     
      output += '</tr>';
     }
    }
    else
    {
     output += '<tr>';
     output += '<td colspan="6">No Data Found</td>';
     output += '</tr>';
    }
    $('tbody').html(output);
   }
  });
 }
 
 $('#search').click(function(){
  var full_text_search_query = $('#full_text_search').val();
  load_data(full_text_search_query);
 });
 
});
</script>