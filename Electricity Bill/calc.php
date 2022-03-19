   <?php
      $units=$_POST['units'];
      // $units=500;

// echo $_POST['units'];
      $R_Tax=460;
      $Service_Tax=118;
      $City_Tax=44.25;
      $D_C=42.95;
      $Meter_Tax=100;
      $Panelty=90;
      error_reporting(0);
      if ($units=='') {
         echo 'Enter units Again';
      }else{
      if ($units<=50) {
         $result=$units*4.75+$R_Tax+$Service_Tax+$City_Tax+$Meter_Tax+$D_C;
         $Panelty=$result+$Panelty;
         echo "<br><span disabled='true' >Total-><b>".$result."</b> <br>With Fine(Rs.90)-><b>".$Panelty."</b></span>";

      }
      elseif ($units>=51 ||$units<=150 ) {
         $result.=$units*6.5+$R_Tax+$Service_Tax+$City_Tax+$Meter_Tax+$D_C;
         $Panelty=$result+$Panelty;

         echo "<br><span disabled='true' >Total-><b>".$result."</b> <br>With Fine(Rs.90)-><b>".$Panelty."</b></span>";
      }elseif($units>=151 ||$units<=300){
         $result.=$units*7.35+$R_Tax+$Service_Tax+$City_Tax+$Meter_Tax+$D_C;
         $Panelty=$result+$Panelty;
         echo "<br><span disabled='true' >Total-><b>".$result."</b> <br>With Fine(Rs.90)-><b>".$Panelty."</b></span>";
          
      }
      elseif($units>=300 ||$units<=500){
         $result.=$units*7.65+$R_Tax+$Service_Tax+$City_Tax+$Meter_Tax+$D_C;
         $Panelty=$result+$Panelty;
                  echo "<span<br> disabled='true' >Total-><b>".$result."</<br>b> With Fine(Rs.90)-><b>".$Panelty."</b></span>";

      }
      elseif($units>=500 ){
         $result.=$units*7.95+$R_Tax+$Service_Tax+$City_Tax+$Meter_Tax+$D_C;
         $Panelty=$result+$Panelty;
         echo "<br><span disabled='true' >Total-><b>".$result."</b> <br>With Fine(Rs.90)-><b>".$Panelty."</b></span>";

      }

      else{
         echo 'Contact NearBy PowerServices';
      }}
      
   ?>