<?php

class Formatos {
 
    public function descargarFormato($nombreFormato,$extension) 
    {
        // Se llamará downloaded.pdf
        $formato=$nombreFormato.$extension;
        header('Content-Disposition: attachment;'
                . 'filename='.$formato);

        // La fuente de PDF se encuentra en original.pdf
        readfile('original.pdf');
    }
    
    
    public function mostrarFormato() {
        // Vamos a mostrar un PDF
        header('Content-type: application/pdf');
    }
 }
 
 $j=new Formatos();
 $j->descargarFormato("hola", ".pdf");
?>