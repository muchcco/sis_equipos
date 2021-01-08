<!DOCTYPE html>
<html lang="en">
<head>
  <title>Acta de {{ $tipo_reparto }}  de equipo móvil - {{ $nom_completo }} </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

      .firma-2{
        border-top: 1px solid #000;
        width: 180px;
        padding-top: 0;
        margin-top:-2em;
      }
    
  </style>
</head>
<body >    
  <div class="content">
    <div class="col-sm-8 text-left"> 
        <div class="logo">
                <img src="img/miangri.png" alt="" width="210" height="50">
                <img src="img/inia.png" alt="" width="80" height="80" style="margin-left: 350px;">            
        </div>
        <p style="text-align: center">"Decenio de la igualdad de oportunidades para la mujer y hombres"</p>
        <p style="text-align: center">"Año de la Universalización de la Salud"</p>
      <h3 style="text-align: center;  text-transform: uppercase;" >ACTA DE {{ $tipo_reparto }}  DE EQUIPO MÓVIL</h3>
      <p>La Unidad de Informática hace entrega del equipo móvil al Sr(a) <span style="text-transform: capitalize;">{{ $nom_completo }}</span>, identificado con DNI N° {{ $DNI }}  en el cargo de <span> {{ $cargo }}</span>, en adelante receptor.</p>
      
      <p>El equipo móvil cuenta con las siguientes caracteristicas:</p>
        
      
      <p>DATOS DEL EQUIPO MÓVIL:</p>
     
      <ul>
          <li>Marca        :  {{ $marca }} </li>
          <li>Modelo       :  {{ $modelo }} </li>
          <li>IMEI         :  {{ $IMEI }} </li>
          <li>N° Celular   :  {{ $n_celular }} </li>
          <li>Estado       :  {{ $estado_cel }} </li>
      </ul>
     
      <p>ACCEESORIOS:</p>
      

      <ul>
          <li>Adaptador de Corriente UDB: {{ $adaptador }} </li>
          <li>Cable USB :  {{ $cable_usb }}</li>
          <li>SIM Card  :  {{ $sim_card }}</li>
      </ul>
    
     

      <p>El Receptor declara conocer y asumir la responsabilidad del uso adecuado del equipo.</p>
     
      <p>En caso de extravío, pérdida o sustracción del equipo, el Receptor es el único responsable para reponer el equipo móvil. El hecho anterior deberá ser comunicado inmediatamente adjuntando la denuncia policial a la Unidad de Informática para coordinar con el Proveedor la reposición del equipo móvil.</p>

      
      <p>El Receptor firma en señal de conformidad la presente Acta.</p>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="logo">
            <div class="firmas">
                <div class="firma-2">
                    <h4>  FIRMA</h4>
                </div>
                <p>Nombres: {{ $nombre }}<br>
                Apellidos: {{ $ap_paterno }} {{ $ap_materno }}<br>
                DNI: {{ $DNI }} <br>
                Fecha de Recepción: <?php echo date("m.d.20y");?></p>
            </div>
      </div>
      <br>
      <br>
      <div class="logo" style="opacity: .5">
        <img src="img/direccion.png" alt="" width="180" height="80" style="margin-left: 2px;">
        <img src="img/peru_primero.png" alt="" width="200" height="80" style="margin-left: 250px; background:#fff;">            
    </div>
      
    </div>
  </div>



</body>
</html>
