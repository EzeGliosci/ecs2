<?php
class usuario
{
    public $NombreUsuario;
    public $clave;
    public $Email;
    public $Nombre;
    public $Id;
    public $Apellido;
    public $NroDocumento;
    public $Fechadenacimiento;
    public $FechaAlta;

    public function MostrarPropiedades()

    {
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Apellido: ' . $this->Apellido . '<br>';
        echo 'Email: ' . $this->Email . '<br>';
        echo 'Id: ' . $this->Id . '<br>';
        echo 'NombreUsuario: ' . $this->NombreUsuario . '<br>';
        echo 'Clave: ' . $this->clave . '<br>';
        echo 'NroDocumento: ' . $this->NroDocumento . '<br>';
        echo 'Fecha de Nacimiento: ' . $this->Fechadenacimiento . '<br>';
        echo 'Fecha de Alta: ' . $this->FechaAlta . '<br>';
    }
}