<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd%22%3E
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  <head>
    <title>Premier programme PHP !</title>
  </head>
  <body>
    <?php
     

      $subAges = ['André' => 88, 'Julie' => 'yes', 'flag'=> true];
      $ages = ['Mathilde' => 27, 'Pierre' => 29, 'tab' => $subAges, 'toto' => 56];
      function mydump($tab, $indent = 0, $name=''){
     

     
        echo 'Tableau ('.$name.') '.count($tab). ' éléments'.'<br>';


       foreach($tab as $cle => $valeur){
         if(gettype($valeur)!== 'array'){
         echo $indent. ' =>'.$cle.' ' .$valeur.' ' .strlen($valeur) .' '.gettype($valeur).'<br/>';
        
       }else{
       mydump($valeur, $indent+1);

       }}}
       mydump($ages); 
    ?>
  </body>
</html>