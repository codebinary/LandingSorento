<?php
$json_modelos = file_get_contents('http://kia.com.pe/json-api/?modelo=all');
$json_modelos = json_decode($json_modelos, true);

function getInfo( $nombre_modelo, $data ){
  for($i=0; $i<sizeof( $data); $i++){
    if( $nombre_modelo == (string)$data[$i]['modelo_path'] ){
      return array(
        'nombre' => $data[$i]['nombre'],
        'precio_dolares' => $data[$i]['precios']['dolares'],
        'precio_soles' => $data[$i]['precios']['soles'],
        'bono' => $data[$i]['bono']
      );
    }
  }
}

$picanto = getInfo('picanto', $json_modelos);
$rio_sedan = getInfo('rio-sedan', $json_modelos);
$rio_hatchback = getInfo('rio-hatchback', $json_modelos);
$cerato_sedan = getInfo('cerato-sedan', $json_modelos);
$cerato_koup = getInfo('cerato-koup', $json_modelos);
$cerato_hatchback = getInfo('cerato-hatchback', $json_modelos);
$optima = getInfo('optima', $json_modelos);
$cadenza = getInfo('cadenza', $json_modelos);
$quoris = getInfo('quoris', $json_modelos);
$soul = getInfo('soul', $json_modelos);
$sportage = getInfo('sportage', $json_modelos);
$sorento = getInfo('sorento', $json_modelos);
$sorento2015 = getInfo('sorento2015', $json_modelos);
$mohave = getInfo('mohave', $json_modelos);
$carens = getInfo('carens', $json_modelos);
$carnival = getInfo('carnival', $json_modelos);
$k2700 = getInfo('k2700', $json_modelos);

?>
<header class="Header">
  <div class="Header-content">
    <nav class="SecondaryMenu">
      <ul class="SecondaryMenu-list">
        <li class="SecondaryMenu-item"><a href="contactenos.php" class="SecondaryMenu-link"><img src="img/header/button-contactenos.gif"></a></li>
        <li class="SecondaryMenu-item"><a href="http://www.kiamotors.com/goto-local.aspx" target="_blank" class="SecondaryMenu-link"><img src="img/header/button-worldwide.gif"></a></li>
      </ul>
    </nav>
    <nav class="MainMenu">
      <figure class="Header-logoContainer u-floatLeft"><a href="index.php"><img src="img/sorento2015/logo.png" alt="Kia Perú" class="Header-logo"></a></figure>
      <!-- <div id="button-menuMobile" class="MainMenu-mobileButton"></div> -->
      <ul id="mainMenu" class="MainMenu-list u-floatRight">
        <li class="MainMenu-item"><a id="button-menuModelos" href="#" class="MainMenu-link">Modelos</a></li>
        <li class="MainMenu-item"><a id="mainmenu-sobrekia-link" href="nosotros.php" class="MainMenu-link">Empresa</a></li>
        <li class="MainMenu-item"><a id="mainmenu-postventa-link" href="mantenimiento.php" class="MainMenu-link">Servicios</a></li>
        <li class="MainMenu-item"><a href="sucursal-kia-primavera.php" class="MainMenu-link">Sucursales</a></li>
        <li class="MainMenu-item"><a href="promocion-picanto.php" class="MainMenu-link MainMenu-link">PROMOCIONES</a></li>
        <li class="MainMenu-item"><a href="cotizar.php" class="MainMenu-link">Cotizar</a></li>
      </ul>
      <!--SUBMENU SOBRE-KIA-->
      <div id="mainmenu-sobrekia-submenu" class="MainMenu-sobrekia-submenu MainMenu-submenu">
        <div class="MainMenu-sobrekia-submenu-header">
          <div class="MainMenu-sobrekia-submenu-title">Acerca de Kia</div>
          <div class="MainMenu-sobrekia-submenu-name">Compañía</div>
        </div>
        <div class="MainMenu-sobrekia-submenu-buttons">
          <ul class="MainMenu-sobrekia-submenu-list">
            <li class="MainMenu-sobrekia-submenu-item MainMenu-postventa-submenu-item--compania"><a href="compania-kia.php"><span>Compañia</span></a></li>
            <li class="MainMenu-sobrekia-submenu-item MainMenu-sobrekia-submenu-item--innovacion"><a href="diseno.php"><span>Innovación</span></a></li>
            <li class="MainMenu-sobrekia-submenu-item MainMenu-sobrekia-submenu-item--sostenibilidad"><a href="sostenibilidad.php"><span>Sostenibilidad</span></a></li>
            <li class="MainMenu-sobrekia-submenu-item MainMenu-sobrekia-submenu-item--noticias"><a href="noticias.php"><span>Noticias</span></a></li>
            <li class="MainMenu-sobrekia-submenu-item MainMenu-sobrekia-submenu-item--eventos"><a href="eventos.php"><span>Eventos</span></a></li>
          </ul>
        </div>
      </div>
      <!--SUBMENU POST-VENTA-->
      <div id="mainmenu-postventa-submenu" class="MainMenu-postventa-submenu MainMenu-submenu">
        <div class="MainMenu-postventa-submenu-header">
          <div class="MainMenu-postventa-submenu-title">Servicios Kia</div>
          <div class="MainMenu-postventa-submenu-name">Post Venta</div>
        </div>
        <div class="MainMenu-postventa-submenu-buttons">
          <ul class="MainMenu-postventa-submenu-list">
            <li class="MainMenu-postventa-submenu-item MainMenu-postventa-submenu-item--postventa"><a href="post-venta.php"><span>Post-venta</span></a></li>
            <li class="MainMenu-postventa-submenu-item MainMenu-postventa-submenu-item--familylikecare"><a href="family-like-care.php"><span>Family like Care</span></a></li>
            <li class="MainMenu-postventa-submenu-item MainMenu-postventa-submenu-item--grupoelitekia"><a href="grupo-elite-kia.php"><span>Grupo Élite Kia</span></a></li>
            <li class="MainMenu-postventa-submenu-item MainMenu-postventa-submenu-item--garantia"><a href="garantia.php"><span>Garantía</span></a></li>
            <li class="MainMenu-postventa-submenu-item MainMenu-postventa-submenu-item--serviciokiaexpress"><a href="servicio-kia-express.php"><span>Servicio Kia Express</span></a></li>
            <li class="MainMenu-postventa-submenu-item MainMenu-postventa-submenu-item--servicio10k"><a href="servicio-10k.php"><span>Servicio 10k</span></a></li>
            <li class="MainMenu-postventa-submenu-item MainMenu-postventa-submenu-item--planesmantenimiento"><a href="http://ske.kia.com.pe/planmantenimiento/login" target="_blank"><span>Planes de Mantenimiento</span></a></li>
            <li class="MainMenu-postventa-submenu-item MainMenu-postventa-submenu-item--manualusuarios"><a href="manual-usuarios.php"><span>Manual de usuarios</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div id="submenu-modelos" class="ModelosMenu MainMenu-submenu">
      <div class="ModelosMenu-navsContainer"><i class="ModelosMenu-buttonClose icon-close"></i>
        <nav class="ModelosMenu-nav ModelosMenu-nav--pasajeros">
          <div class="ModelosMenu-categoriaContainer"><span class="ModelosMenu-nombreCategoria"><i class="ModelosMenu-categoriaDecorator"></i>Pasajeros</span></div>
          <ul class="ModelosMenu-list">
            <!--PICANTO-->
            <li class="ModelosMenu-item"><a href="modelo-picanto.php" class="ModelosMenu-link"><span class="ModelosMenu-imagenContainer"><img src="img/header/modelos/thumbnails/picanto.png" alt="Picanto" class="ModelosMenu-imagenModelo"></span><span class="ModelosMenu-nombreModelo"><?= $picanto['nombre']; ?></span></a>
              <div class="ModelosMenu-desplegableContainer">
                <div class="ModeloDesplegado">
                  <div class="ModeloDesplegado-mascara"></div>
                  <div class="ModeloDesplegado-logo"></div>
                  <div class="ModeloDesplegado-botonConocelo"><a href="modelo-picanto.php"><img src="img/header/boton-conocelo.png" alt="Cónocelo."></a></div>
                  <div class="ModeloDesplegado-botonFichaTecnica"><a href="/pdf/modelos/ficha-tecnica-picanto.pdf" target="_blank"><img src="img/header/boton-ficha-tecnica.png" alt="Ficha técnica."></a></div>
                  <div class="ModeloDesplegado-botonCotizar"><a href="cotizar.php"><img src="img/header/boton-cotizar.png" alt="Cotizar."></a></div>
                  
                  <div class="ModeloDesplegado-imageContainer"><img src="http://kia.com.pe/wp-content/themes/kia/img/header/modelos/picanto/fondo_menu.jpg" alt="Picanto."></div>
                </div>
              </div>
            </li>
            <!--RIO SEDÁN-->
            <li class="ModelosMenu-item"><a href="modelo-rio-sedan.php" class="ModelosMenu-link"><span class="ModelosMenu-imagenContainer"><img src="img/header/modelos/thumbnails/rio_sedan.png" alt="Rio Sedán" class="ModelosMenu-imagenModelo"></span><span class="ModelosMenu-nombreModelo"><?= $rio_sedan['nombre']; ?></a>
              <div class="ModelosMenu-desplegableContainer">
                <div class="ModeloDesplegado">
                  <div class="ModeloDesplegado-mascara"></div>
                  <div class="ModeloDesplegado-logo"></div>
                  <div class="ModeloDesplegado-botonConocelo"><a href="modelo-rio-sedan.php"><img src="img/header/boton-conocelo.png" alt="Conócelo."></a></div>
                  <div class="ModeloDesplegado-botonFichaTecnica"><a href="/pdf/modelos/ficha-tecnica-rio-sedan.pdf" target="_blank"><img src="img/header/boton-ficha-tecnica.png" alt="Ficha técnica."></a></div>
                  <div class="ModeloDesplegado-botonCotizar"><a href="cotizar.php"><img src="img/header/boton-cotizar.png" alt="Cotizar."></a></div>
                  
                  <div class="ModeloDesplegado-imageContainer"><img src="http://kia.com.pe/wp-content/themes/kia/img/header/modelos/rio-sedan/fondo_menu.jpg" alt="Rio Sedán."></div>
                </div>
              </div>
            </li>
            <!--RIO HATCHBACK-->
            <li class="ModelosMenu-item"><a href="modelo-rio-hatchback.php" class="ModelosMenu-link"><span class="ModelosMenu-imagenContainer"><img src="img/header/modelos/thumbnails/rio_hatchback.png" alt="Rio Hatchback" class="ModelosMenu-imagenModelo"></span><span class="ModelosMenu-nombreModelo"><?= $rio_hatchback['nombre']; ?></a>
              <div class="ModelosMenu-desplegableContainer">
                <div class="ModeloDesplegado">
                  <div class="ModeloDesplegado-mascara"></div>
                  <div class="ModeloDesplegado-logo"></div>
                  <div class="ModeloDesplegado-botonConocelo"><a href="modelo-rio-hatchback.php"><img src="img/header/boton-conocelo.png" alt="Conócelo."></a></div>
                  <div class="ModeloDesplegado-botonFichaTecnica"><a href="/pdf/modelos/ficha-tecnica-rio-hatchback.pdf" target="_blank"><img src="img/header/boton-ficha-tecnica.png" alt="Ficha técnica."></a></div>
                  <div class="ModeloDesplegado-botonCotizar"><a href="cotizar.php"><img src="img/header/boton-cotizar.png" alt="Cotizar."></a></div>
                  
                  <div class="ModeloDesplegado-imageContainer"><img src="http://kia.com.pe/wp-content/themes/kia/img/header/modelos/rio-hatchback/fondo_menu.jpg" alt="Rio Hatchback."></div>
                </div>
              </div>
            </li>
            <!--CERATO SEDÁN-->
            <li class="ModelosMenu-item"><a href="modelo-cerato-sedan.php" class="ModelosMenu-link"><span class="ModelosMenu-imagenContainer"><img src="img/header/modelos/thumbnails/cerato_sedan.png" alt="Cerato Sedán" class="ModelosMenu-imagenModelo"></span><span class="ModelosMenu-nombreModelo"><?= $cerato_sedan['nombre']; ?></a>
              <div class="ModelosMenu-desplegableContainer">
                <div class="ModeloDesplegado">
                  <div class="ModeloDesplegado-mascara"></div>
                  <div class="ModeloDesplegado-logo"></div>
                  <div class="ModeloDesplegado-botonConocelo"><a href="modelo-cerato-sedan.php"><img src="img/header/boton-conocelo.png" alt="Conócelo."></a></div>
                  <div class="ModeloDesplegado-botonFichaTecnica"><a href="/pdf/modelos/ficha-tecnica-cerato-sedan.pdf" target="_blank"><img src="img/header/boton-ficha-tecnica.png" alt="Ficha técnica."></a></div>
                  <div class="ModeloDesplegado-botonCotizar"><a href="cotizar.php"><img src="img/header/boton-cotizar.png" alt="Cotizar."></a></div>
                  
                  <div class="ModeloDesplegado-imageContainer"><img src="http://kia.com.pe/wp-content/themes/kia/img/header/modelos/cerato-sedan/fondo_menu.jpg" alt="Cerato Sedán."></div>
                </div>
              </div>
            </li>
            <!--CERATO KOUP-->
            <li class="ModelosMenu-item"><a href="modelo-cerato-koup.php" class="ModelosMenu-link"><span class="ModelosMenu-imagenContainer"><img src="img/header/modelos/thumbnails/cerato_koup.png" alt="Cerato Koup" class="ModelosMenu-imagenModelo"></span><span class="ModelosMenu-nombreModelo"><?= $cerato_koup['nombre']; ?></span></a>
              <div class="ModelosMenu-desplegableContainer">
                <div class="ModeloDesplegado">
                  <div class="ModeloDesplegado-mascara"></div>
                  <div class="ModeloDesplegado-logo"></div>
                  <div class="ModeloDesplegado-botonConocelo"><a href="modelo-cerato-koup.php"><img src="img/header/boton-conocelo.png" alt="Conócelo."></a></div>
                  <div class="ModeloDesplegado-botonFichaTecnica"><a href="/pdf/modelos/ficha-tecnica-koup.pdf" target="_blank"><img src="img/header/boton-ficha-tecnica.png" alt="Ficha técnica."></a></div>
                  <div class="ModeloDesplegado-botonCotizar"><a href="cotizar.php"><img src="img/header/boton-cotizar.png" alt="Cotizar."></a></div>
                  
                  <div class="ModeloDesplegado-imageContainer"><img src="http://kia.com.pe/wp-content/themes/kia/img/header/modelos/cerato-koup/fondo_menu.jpg" alt="Cerato Koup."></div>
                </div>
              </div>
            </li>
            <!--CERATO HATCHBACK-->
            <li class="ModelosMenu-item"><a href="modelo-cerato-hatchback.php" class="ModelosMenu-link"><span class="ModelosMenu-imagenContainer"><img src="img/header/modelos/thumbnails/cerato_hatchback.png" alt="Cerato Hatchback" class="ModelosMenu-imagenModelo"></span><span class="ModelosMenu-nombreModelo"><?= $cerato_hatchback['nombre']; ?></a>
              <div class="ModelosMenu-desplegableContainer">
                <div class="ModeloDesplegado">
                  <div class="ModeloDesplegado-mascara"></div>
                  <div class="ModeloDesplegado-logo"></div>
                  <div class="ModeloDesplegado-botonConocelo"><a href="modelo-cerato-hatchback.php"><img src="img/header/boton-conocelo.png" alt="Conócelo."></a></div>
                  <div class="ModeloDesplegado-botonFichaTecnica"><a href="/pdf/modelos/ficha-tecnica-cerato-hatchback.pdf" target="_blank"><img src="img/header/boton-ficha-tecnica.png" alt="Ficha técnica."></a></div>
                  <div class="ModeloDesplegado-botonCotizar"><a href="cotizar.php"><img src="img/header/boton-cotizar.png" alt="Cotizar."></a></div>
                  
                  <div class="ModeloDesplegado-imageContainer"><img src="http://kia.com.pe/wp-content/themes/kia/img/header/modelos/cerato-hatchback/fondo_menu.jpg" alt="Cerato Hatchback."></div>
                </div>
              </div>
            </li>
            <!--OPTIMA-->
            <li class="ModelosMenu-item"><a href="modelo-optima.php" class="ModelosMenu-link"><span class="ModelosMenu-imagenContainer"><img src="img/header/modelos/thumbnails/new_optima.png" alt="Optima." class="ModelosMenu-imagenModelo"></span><span class="ModelosMenu-nombreModelo"><?= $optima['nombre']; ?></a>
              <div class="ModelosMenu-desplegableContainer">
                <div class="ModeloDesplegado">
                  <div class="ModeloDesplegado-mascara"></div>
                  <div class="ModeloDesplegado-logo"></div>
                  <div class="ModeloDesplegado-botonConocelo"><a href="modelo-optima.php"><img src="img/header/boton-conocelo.png" alt="Conócelo."></a></div>
                  <div class="ModeloDesplegado-botonFichaTecnica"><a href="/pdf/modelos/ficha-tecnica-optima.pdf" target="_blank"><img src="img/header/boton-ficha-tecnica.png" alt="Ficha técnica."></a></div>
                  <div class="ModeloDesplegado-botonCotizar"><a href="cotizar.php"><img src="img/header/boton-cotizar.png" alt="Cotizar."></a></div>
                  
                  <div class="ModeloDesplegado-imageContainer"><img src="http://kia.com.pe/wp-content/themes/kia/img/header/modelos/optima/fondo_menu.jpg" alt="Optima."></div>
                </div>
              </div>
            </li>
            <!--CADENZA-->
            <li class="ModelosMenu-item"><a href="modelo-cadenza.php" class="ModelosMenu-link"><span class="ModelosMenu-imagenContainer"><img src="img/header/modelos/thumbnails/cadenza.png" alt="Cadenza." class="ModelosMenu-imagenModelo"></span><span class="ModelosMenu-nombreModelo"><?= $cadenza['nombre']; ?></span></a>
              <div class="ModelosMenu-desplegableContainer">
                <div class="ModeloDesplegado">
                  <div class="ModeloDesplegado-mascara"></div>
                  <div class="ModeloDesplegado-logo"></div>
                  <div class="ModeloDesplegado-botonConocelo"><a href="modelo-cadenza.php"><img src="img/header/boton-conocelo.png" alt="Conócelo."></a></div>
                  <div class="ModeloDesplegado-botonFichaTecnica"><a href="/pdf/modelos/ficha-tecnica-cadenza.pdf" target="_target"><img src="img/header/boton-ficha-tecnica.png" alt="Ficha técnica."></a></div>
                  <div class="ModeloDesplegado-botonCotizar"><a href="cotizar.php"><img src="img/header/boton-cotizar.png" alt="Cotizar."></a></div>
                  
                  <div class="ModeloDesplegado-imageContainer"><img src="http://kia.com.pe/wp-content/themes/kia/img/header/modelos/cadenza/fondo_menu.jpg" alt="Cadenza."></div>
                </div>
              </div>
            </li>
            <!--QUORIS-->
            <li class="ModelosMenu-item"><a href="modelo-quoris.php" class="ModelosMenu-link"><span class="ModelosMenu-imagenContainer"><img src="img/header/modelos/thumbnails/quoris.png" alt="Quoris." class="ModelosMenu-imagenModelo"></span><span class="ModelosMenu-nombreModelo"><?= $quoris['nombre']; ?></span></a>
              <div class="ModelosMenu-desplegableContainer">
                <div class="ModeloDesplegado">
                  <div class="ModeloDesplegado-mascara"></div>
                  <div class="ModeloDesplegado-logo"></div>
                  <div class="ModeloDesplegado-botonConocelo"><a href="modelo-quoris.php"><img src="img/header/boton-conocelo.png" alt="Conócelo."></a></div>
                  <div class="ModeloDesplegado-botonFichaTecnica"><a href="/pdf/modelos/ficha-tecnica-quoris.pdf" target="_blank"><img src="img/header/boton-ficha-tecnica.png" alt="Ficha técnica."></a></div>
                  <div class="ModeloDesplegado-botonCotizar"><a href="cotizar.php"><img src="img/header/boton-cotizar.png" alt="Cotizar."></a></div>
                  
                  <div class="ModeloDesplegado-imageContainer"><img src="http://kia.com.pe/wp-content/themes/kia/img/header/modelos/quoris/fondo_menu.jpg" alt="Quoris."></div>
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <nav class="ModelosMenu-nav ModelosMenu-nav--suv">
          <div class="ModelosMenu-categoriaContainer ModelosMenu-categoriaContainer--small"><span class="ModelosMenu-nombreCategoria"><i class="ModelosMenu-categoriaDecorator"></i>Suv</span></div>
          <ul class="ModelosMenu-list">
            <!--SOUL-->
            <li class="ModelosMenu-item"><a href="modelo-soul.php" class="ModelosMenu-link"><span class="ModelosMenu-imagenContainer"><img src="img/header/modelos/thumbnails/new_soul.png" alt="Soul." class="ModelosMenu-imagenModelo"></span><span class="ModelosMenu-nombreModelo"><?= $soul['nombre']; ?></span></a>
              <div class="ModelosMenu-desplegableContainer">
                <div class="ModeloDesplegado">
                  <div class="ModeloDesplegado-mascara"></div>
                  <div class="ModeloDesplegado-logo"></div>
                  <div class="ModeloDesplegado-botonConocelo"><a href="modelo-soul.php"><img src="img/header/boton-conocelo.png" alt="Conócelo."></a></div>
                  <div class="ModeloDesplegado-botonFichaTecnica"><a href="/pdf/modelos/ficha-tecnica-soul.pdf" target="_blank"><img src="img/header/boton-ficha-tecnica.png" alt="Ficha técnica."></a></div>
                  <div class="ModeloDesplegado-botonCotizar"><a href="cotizar.php"><img src="img/header/boton-cotizar.png" alt="Cotizar."></a></div>
                  
                  <div class="ModeloDesplegado-imageContainer"><img src="http://kia.com.pe/wp-content/themes/kia/img/header/modelos/soul/fondo_menu.jpg" alt="Soul."></div>
                </div>
              </div>
            </li>
            <!--SPORTAGE-->
            <li class="ModelosMenu-item"><a href="modelo-sportage.php" class="ModelosMenu-link"><span class="ModelosMenu-imagenContainer"><img src="img/header/modelos/thumbnails/new_sportage.png" alt="Sportage." class="ModelosMenu-imagenModelo"></span><span class="ModelosMenu-nombreModelo"><?= $sportage['nombre']; ?></span></a>
              <div class="ModelosMenu-desplegableContainer">
                <div class="ModeloDesplegado">
                  <div class="ModeloDesplegado-mascara"></div>
                  <div class="ModeloDesplegado-logo"></div>
                  <div class="ModeloDesplegado-botonConocelo"><a href="modelo-sportage.php"><img src="img/header/boton-conocelo.png" alt="Conócelo"></a></div>
                  <div class="ModeloDesplegado-botonFichaTecnica"><a href="/pdf/modelos/ficha-tecnica-sportage.pdf" target="_blank"><img src="img/header/boton-ficha-tecnica.png" alt="Ficha técnica."></a></div>
                  <div class="ModeloDesplegado-botonCotizar"><a href="cotizar.php"><img src="img/header/boton-cotizar.png" alt="Cotizar."></a></div>
                  
                  <div class="ModeloDesplegado-imageContainer"><img src="http://kia.com.pe/wp-content/themes/kia/img/header/modelos/sportage/fondo_menu.jpg" alt="Sportage."></div>
                </div>
              </div>
            </li>
            <!--SORENTO-->
           <!-- <li class="ModelosMenu-item"><a href="modelo-sorento.php" class="ModelosMenu-link"><span class="ModelosMenu-imagenContainer"><img src="img/header/modelos/thumbnails/sorento.png" alt="Sorento." class="ModelosMenu-imagenModelo"></span><span class="ModelosMenu-nombreModelo"><?= $sorento['nombre']; ?></span></a>
              <div class="ModelosMenu-desplegableContainer">
                <div class="ModeloDesplegado">
                  <div class="ModeloDesplegado-mascara"></div>
                  <div class="ModeloDesplegado-logo"></div>
                  <div class="ModeloDesplegado-botonConocelo"><a href="modelo-sorento.php"><img src="img/header/boton-conocelo.png" alt="Conócelo."></a></div>
                  <div class="ModeloDesplegado-botonFichaTecnica"><a href="/pdf/modelos/ficha-tecnica-sorento.pdf" target="_blank"><img src="img/header/boton-ficha-tecnica.png" alt="Ficha técnica."></a></div>
                  <div class="ModeloDesplegado-botonCotizar"><a href="cotizar.php"><img src="img/header/boton-cotizar.png" alt="Cotizar."></a></div>
                  
                  <div class="ModeloDesplegado-imageContainer"><img src="img/header/modelos/desplegable/sorento.jpg" alt="Sorento."></div>
                </div>
              </div>
            </li>-->
            <!--SORENTO 2015-->
            <li class="ModelosMenu-item"><a href="sorento2015.php" class="ModelosMenu-link"><span class="ModelosMenu-imagenContainer"><img src="img/header/modelos/thumbnails/sorento2015.png" alt="Sorento." class="ModelosMenu-imagenModelo"></span><span class="ModelosMenu-nombreModelo"><?= $sorento2015['nombre']; ?></span></a>
              <div class="ModelosMenu-desplegableContainer">
                <div class="ModeloDesplegado">
                  <div class="ModeloDesplegado-mascara"></div>
                  <div class="ModeloDesplegado-logo"></div>
                  <div class="ModeloDesplegado-botonConocelo"><a href="sorento2015.php"><img src="img/header/boton-conocelo.png" alt="Conócelo."></a></div>
                  <div class="ModeloDesplegado-botonFichaTecnica"><a href="pdf/modelos/ficha-tecnica-sorento2015.pdf" target="_blank"><img src="img/header/boton-ficha-tecnica.png" alt="Ficha técnica."></a></div>
                  <div class="ModeloDesplegado-botonCotizar"><a href="cotizar.php"><img src="img/header/boton-cotizar.png" alt="Cotizar."></a></div>
                  
                  <div class="ModeloDesplegado-imageContainer"><img src="http://kia.com.pe/wp-content/themes/kia/img/header/modelos/sorento2015/fondo_menu.jpg" alt="Sorento."></div>
                </div>
              </div>
            </li>
            <!--MOHAVE-->
            <li class="ModelosMenu-item"><a href="modelo-mohave.php" class="ModelosMenu-link"><span class="ModelosMenu-imagenContainer"><img src="img/header/modelos/thumbnails/mohave.png" alt="Mohave." class="ModelosMenu-imagenModelo"></span><span class="ModelosMenu-nombreModelo"><?= $mohave['nombre']; ?></span></a>
              <div class="ModelosMenu-desplegableContainer">
                <div class="ModeloDesplegado">
                  <div class="ModeloDesplegado-mascara"></div>
                  <div class="ModeloDesplegado-logo"></div>
                  <div class="ModeloDesplegado-botonConocelo"><a href="modelo-mohave.php"><img src="img/header/boton-conocelo.png" alt="Conócelo."></a></div>
                  <div class="ModeloDesplegado-botonFichaTecnica"><a href="/pdf/modelos/ficha-tecnica-mohave.pdf" target="_blank"><img src="img/header/boton-ficha-tecnica.png" alt="Ficha técnica."></a></div>
                  <div class="ModeloDesplegado-botonCotizar"><a href="cotizar.php"><img src="img/header/boton-cotizar.png" alt="Cotizar."></a></div>
                  
                  <div class="ModeloDesplegado-imageContainer"><img src="http://kia.com.pe/wp-content/themes/kia/img/header/modelos/mohave/fondo_menu.jpg" alt="Mohave."></div>
                </div>
              </div>
            </li>

          </ul>
        </nav>
        <nav class="ModelosMenu-nav ModelosMenu-nav--comercial">
          <div class="ModelosMenu-categoriaContainer ModelosMenu-categoriaContainer--small"><span class="ModelosMenu-nombreCategoria"><i class="ModelosMenu-categoriaDecorator"></i>Familiares</span></div>
          <ul class="ModelosMenu-list">

            <!--CARENS-->
            <li class="ModelosMenu-item"><a href="modelo-carens.php" class="ModelosMenu-link"><span class="ModelosMenu-imagenContainer"><img src="img/header/modelos/thumbnails/carens.png" alt="Carens." class="ModelosMenu-imagenModelo"></span><span class="ModelosMenu-nombreModelo"><?= $carens['nombre']; ?></span></a>
              <div class="ModelosMenu-desplegableContainer">
                <div class="ModeloDesplegado">
                  <div class="ModeloDesplegado-mascara"></div>
                  <div class="ModeloDesplegado-logo"></div>
                  <div class="ModeloDesplegado-botonConocelo"><a href="modelo-carens.php" alt="Conócelo"><img src="img/header/boton-conocelo.png" alt="Conócelo."></a></div>
                  <div class="ModeloDesplegado-botonFichaTecnica"><a href="/pdf/modelos/ficha-tecnica-carens.pdf" target="_blank"><img src="img/header/boton-ficha-tecnica.png" alt="Ficha técnica."></a></div>
                  <div class="ModeloDesplegado-botonCotizar"><a href="cotizar.php"><img src="img/header/boton-cotizar.png" alt="Cotizar."></a></div>
                  
                  <div class="ModeloDesplegado-imageContainer"><img src="http://kia.com.pe/wp-content/themes/kia/img/header/modelos/carens/fondo_menu.jpg" alt="Carens."></div>
                </div>
              </div>
            </li>
            <!--CARNIVAL-->
            <li class="ModelosMenu-item"><a href="modelo-carnival.php" class="ModelosMenu-link"><span class="ModelosMenu-imagenContainer"><img src="img/header/modelos/thumbnails/carnival.png" alt="Carnival." class="ModelosMenu-imagenModelo"></span><span class="ModelosMenu-nombreModelo"><?= $carnival['nombre']; ?></span></a>
              <div class="ModelosMenu-desplegableContainer">
                <div class="ModeloDesplegado">
                  <div class="ModeloDesplegado-mascara"></div>
                  <div class="ModeloDesplegado-logo"></div>
                  <div class="ModeloDesplegado-botonConocelo"><a href="modelo-carnival.php"><img src="img/header/boton-conocelo.png" alt="Conócelo."></a></div>
                  <div class="ModeloDesplegado-botonFichaTecnica"><a href="/pdf/modelos/ficha-tecnica-carnival.pdf" target="_blank"><img src="img/header/boton-ficha-tecnica.png" alt="Ficha técnica."></a></div>
                  <div class="ModeloDesplegado-botonCotizar"><a href="cotizar.php"><img src="img/header/boton-cotizar.png" alt="Cotizar."></a></div>
                  
                  <div class="ModeloDesplegado-imageContainer"><img src="http://kia.com.pe/wp-content/themes/kia/img/header/modelos/carnival/fondo_menu.jpg" alt="Carnival."></div>
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <nav class="ModelosMenu-nav ModelosMenu-nav--comercial">
          <div class="ModelosMenu-categoriaContainer ModelosMenu-categoriaContainer--small"><span class="ModelosMenu-nombreCategoria"><i class="ModelosMenu-categoriaDecorator"></i>Linea Comercial</span></div>
          <ul class="ModelosMenu-list">


           <!--K2700-->
            <li class="ModelosMenu-item"><a href="modelo-k2700.php" class="ModelosMenu-link"><span class="ModelosMenu-imagenContainer"><img src="img/header/modelos/thumbnails/k2700.png" alt="K2700." class="ModelosMenu-imagenModelo"></span><span class="ModelosMenu-nombreModelo"><?= $k2700['nombre']; ?></span></a>
              <div class="ModelosMenu-desplegableContainer">
                <div class="ModeloDesplegado">
                  <div class="ModeloDesplegado-mascara"></div>
                  <div class="ModeloDesplegado-logo"></div>
                  <div class="ModeloDesplegado-botonConocelo"><a href="modelo-k2700.php"><img src="img/header/boton-conocelo.png" alt="Conócelo."></a></div>
                  <div class="ModeloDesplegado-botonFichaTecnica"><a href="/pdf/modelos/ficha-tecnica-k2700.pdf" target="_blank"><img src="img/header/boton-ficha-tecnica.png" alt="Ficha técnica."></a></div>
                  <div class="ModeloDesplegado-botonCotizar"><a href="cotizar.php"><img src="img/header/boton-cotizar.png" alt="Cotizar."></a></div>
                  
                  <div class="ModeloDesplegado-imageContainer"><img src="http://kia.com.pe/wp-content/themes/kia/img/header/modelos/k2700/fondo_menu.jpg" alt="K2700."></div>
                </div>
              </div>
            </li>
          </ul>
          <div class="ModelosMenu-legalGeneral">
            <p>*Precio incluye bono de descuento en todos los modelos.</p>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
