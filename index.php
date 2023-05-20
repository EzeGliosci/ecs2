<?php

require_once 'modelo/clases.php';

$p = new usuario();
$p->Nombre = "Ezequiel";
$p->Apellido = "gliosci";
$p->Id = "19";
$p->Email = "ezegliosci@gmail.com";
$p->NombreUsuario= "EzeGliosci";
$p->clave= "Gatosyperros";
$p->NroDocumento= "45639333";
$p->Fechadenacimiento="18/02/04";
$p->FechaAlta="25/12/2010";

$p->MostrarPropiedades();
