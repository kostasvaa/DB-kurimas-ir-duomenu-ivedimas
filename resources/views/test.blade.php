<?php 




    $menesis = date('m');                              // Koks menesis
    $metai = date('Y');                               // Kokie metai
    $pirma_diena = mktime(0,0,0,$menesis, 1, $metai);  // Kokia pirma menesio diena
    $menesis_v = date('F', $pirma_diena);               // Menesio vardas angliskai
    $savaites_diena = date('D', $pirma_diena);         // kelintadienis yra pirma menesio diena
    $menesis_dienos = cal_days_in_month(0, $menesis, $metai); // dienu kiekis menesyje
    
    switch($savaites_diena)                         
    {                                       // Kiek pradzioje bus tusciu laukeliu kalendroiuje
      
      case "Mon": $tuscia = 0; break; 
      case "Tue": $tuscia = 1; break; 
      case "Wed": $tuscia = 2; break; 
      case "Thu": $tuscia = 3; break; 
      case "Fri": $tuscia = 4; break; 
      case "Sat": $tuscia = 5; break;
      case "Sun": $tuscia = 6; break;  
    }
 
     echo "<table border=1 width=auto>";         //Lenteles sudarymas
     echo "<tr><th colspan=7> $menesis_v $metai </th></tr>";
     echo "<tr>                                     
          <td>Pirm</td>
          <td>Ant</td>
          <td>Trec</td>
          <td>Ketv</td>
          <td>Penkt</td>
          <td>Sest</td>
          <td>Sek</td></tr>";

    $t =  $tuscia;  
   while ( $t > 0 )                     // tusciu dienu uzpildimas
   { 
      echo "<td></td>"; 
      $t--; 
   }
 
   $dienos_num = 1;                                // dienos skaicius
   $sk = $tuscia;                           
    while ( $dienos_num <= $menesis_dienos )  //Sukam cikla kol dienu skaicius pasieks menesio dienu paskutine diena
   {       
      if ($sk==7)
     {
      $sk = 0;
     };
        
     while ($sk < 7) 
      {
       if($sk<5)
        echo " <td>$dienos_num</td> "; 
       if($sk>4)
       echo " <td style='background-color: yellow'>$dienos_num</td> "; 
       $dienos_num++; 
        $sk++;
       if ($dienos_num > $menesis_dienos) {break;}
       if ($sk == 7) 
       {
          echo "</tr>"; 
        }  
      }
    }
  echo "</tr></table>";
?>