<!DOCTYPE html>
<html lang="es">
<head>
  
  <meta charset="UTF-8">
  <title>Marles</title>
  <link rel=StyleSheet href="style.css" type="text/css" media="screen">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>

<body>
  <div id="ttl">
    <h1  class="animate__animated animate__fadeIn" >Restaurante los panas</h1>
    <h2 class="animate__animated animate__fadeIn animate__delay-1s">
      La mejor calidad en comida de <strong>Cúcuta</strong>.
    </h2>
  </div>
  <div id="txt">
  <p class="animate__animated animate__fadeIn animate__delay-1s" style="text-align: justify;">Lorem ipsum dolor sit amet, 
    consectetur adipiscing elit. Vestibulum rhoncus nulla nunc. 
    Duis scelerisque nibh in arcu tristique iaculis. Morbi tempor 
    justo elit, ut bibendum tellus suscipit ac. Mauris mi dui, 
    blandit id enim nec, pellentesque luctus est. Vestibulum ultricies 
    risus est, sed sagittis lectus feugiat dignissim. Aenean fermentum 
    massa quis dignissim egestas. Donec ac pharetra est. Cras condimentu
    m elit eget lobortis fringilla. Sed varius aliquet magna, nec gravida
     tortor ultrices in. Suspendisse auctor justo eu fringilla porta. 
     Sed molestie felis justo, et placerat massa pulvinar ac. Maecenas 
     eu sollicitudin ex, nec molestie mi. Aliquam commodo nec turpis ven
     enatis condimentum. Duis ultricies justo at vestibulum finibus.

    Nullam ut mauris vitae odio consectetur volutpat in id lectus. 
    Curabitur convallis nisi sit amet efficitur consequat. 
    Morbi tempor placerat leo, maximus consequat felis blandit ut. 
    Maecenas vitae dictum turpis. Ut nec blandit neque, eleifend dapibus nisi. 
    Aliquam erat volutpat. Nullam congue ante vitae enim mollis, ut gravida eros tristique. 
    Vivamus pretium nibh quis nunc ultrices, vel varius massa malesuada.
    
    Vestibulum dui mi, rutrum vulputate purus ultricies, maximus maximus tortor. 
    Aliquam aliquam maximus luctus. Sed et facilisis massa. Vestibulum gravida, 
    turpis congue porta molestie, erat neque rutrum orci, non pellentesque magna 
    erat blandit metus. Aenean porta efficitur risus, posuere blandit nisi rhoncus ut. 
    Morbi tincidunt imperdiet velit, at blandit orci maximus sit amet. 
    Cras condimentum massa et massa dignissim, eget efficitur quam vulputate.
    
    Phasellus malesuada nisl ut tincidunt blandit. 
    Pellentesque habitant morbi tristique senectus et netus et malesuada 
    fames ac turpis egestas. Sed rutrum feugiat ligula, vel ornare massa maximus nec. 
    Vestibulum nec tempor sem. Nullam pharetra vehicula condimentum. Sed vel pretium nunc. 
    Ut nec interdum leo, at ornare libero. Proin bibendum tellus in sapien suscipit imperdiet.
     Donec suscipit tempor dui, eu sollicitudin arcu pulvinar sed. Nullam at velit est. 
     Etiam congue pretium nisl non placerat. Donec odio ante, aliquam non neque a, rhoncus 
     ultricies urna. Nam hendrerit hendrerit dolor, porttitor pretium dui feugiat eu. Proin 
     ipsum libero, dignissim id dolor vel, vehicula fermentum tellus. Etiam vel eleifend 
     tellus.
    
    Etiam ut mollis mauris. In id dignissim arcu. Mauris eu auctor nulla. 
    Nam id leo nec enim vestibulum ultrices. Pellentesque pulvinar nunc maximus tempor tempor. 
    Etiam commodo efficitur nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus.
     Nunc molestie feugiat lorem non eleifend.</p>
  <button id="btn" onclick='<?php
$mail = "Prueba de mensaje";
//Titulo
$titulo = "PRUEBA DE TITULO";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Geeky Theory < tu_dirección_email >\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail("tu_dirección_email",$titulo,$mail,$headers);
if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}?>'>Pregunta</button>
  </div>
  
  <script src="alert.js"></script>

  

</body>


</html>