<!DOCTYPE html>
<html>

<head>
   <title>Start</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- CSS only -->
   <!-- cdn -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
   <!-- end cdn -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <style type="text/css">
   .container {
      padding: 20px;
      border: 2px solid red;
      /*height: 100%;*/
   }
   #result{
      width: 200px;
   }
   </style>

</head>

<body>
   <div class="container">
      <div class='col-lg-12'>
        <form class="form-group"  id="form" >
         <div class="table-responsive">
         
         <table class="table table-light table-striped table-hover table-sm text-center">
            <thead class="thead-light">
               <tr class="table-light">
                  <th width="150">Date </th>
                  <th>Expenditure </th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <th>Units</th>
                  <td><input type="number" name="units" id="units"></td>
               </tr>
               <tr>
                  <th>Residential Tax</th>
                  <td>460</td>
               </tr>
               <tr>
                  <th>Service Tax</th>
                  <td>118</td>
               </tr>
               <tr>
                  <th>Debit+Credit</th>
                  <td>42.95</td>
               </tr>
               <tr>
                  <th>City Taxes</th>
                  <td>44.25</td>
               </tr>
               <tr>
                  <th>Meter Tax </th>
                  <td>100</td>
               </tr>
              
               <tr >
                  <th>Panelty (15days)</th>
                  <td>90</td>
               </tr>
            </tbody>
            <tfoot>
               <tr class="table-light-md table-light"              >
                  <th  class="b-primary-md b-warning-sm">Total </th>
                  <td><div class="bg-secondary text-white"><span  name="result"  id="result" class="btn btn-md btn-primary trigger" >Click</span></td></div>
               </tr>
            </tfoot>
         </table>
      </div>
</form>
   </div>
 
   </div>
   



   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
      <script src="jq.js"></script>
      <script type="text/javascript">
    $(document).ready(function(){
      $units=$('#units').val();
            $('.trigger').on('click',function(e){
               e.preventDefault();
               $.ajax({
                  url:'calc.php',
                  type:'POST',
                  data:$('form').serialize(),
                  success:function(data){
                     if (data) {
                        
                     $('#result').html(data);
                  console.log(data);
                     }else{
                        document.write('echoa');

                     }
                  }
               });

            });
            
         
         });
</script>

</body>

</html>