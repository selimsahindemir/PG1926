<?php
      $kontrol=0;
      $sayi= $_POST['sayi'];
      if(is_numeric($sayi)){
       for ($a=2; $a<=($sayi-1) ; $a++)
         {
         if($sayi%$a==0)
         {
           $kontrol=1;
           echo "Sayınız asal sayı değildir. Çünkü $a ' e tam bölünmektedir.";
           break;
         }
         }
          if($kontrol==0)
         {
          echo " Sayınız asal sayıdır. Çünkü hiçbir sayıya tam bölünmemektedir.";
          }
        }else{
          echo "Lütfen bir sayı giriniz.";
        }
      ?>
