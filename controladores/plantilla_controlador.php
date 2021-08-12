<?php

class ControladorPlantilla
{

    /* Llamar a la plantilla */
    public function ctrTraerPlantilla()
    {
        #El 'Include' se usa para llamar archivos de tipo html o php
        include "vistas/plantilla.php";
    }
}
