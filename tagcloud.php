<?php
    class TagCloud {
        var $tags = "";
        var $url  = "";
        var $trimStr = "deleteSpaces";
        
        function create($tags, $url = ""){
            if($tags == "") $this->$tags = $tags;
            if($url == "") $url = $_SERVER['PHP_SELF'];
            $this->url = $url;
            
            // Formateamos y limpiamos el string sustituyendo caracteres especiales por comas
            $tags=substr($tags,0,strlen($tags)-1);
            $array_sustitucion = array(',,','.','/',':');
            $etiquetas=str_replace($array_sustitucion, ",", $tags);
    
            // Llenamos el array
            $etiquetas=explode(",",$etiquetas);
            @array_walk($etiquetas, $this->trimStr);
            $total=count($etiquetas);
            $etiquetasOk = array_count_values($etiquetas);
    
            foreach($etiquetasOk as $palabra=>$valor) {
                $porcentaje = round($valor*100/$total);
                if($porcentaje>= 70){
                    $estilo = 6;
                }elseif($porcentaje>= 35){
                    $estilo = 5;
                }elseif($porcentaje>= 30){
                    $estilo = 4;
                }elseif($porcentaje>= 22){
                    $estilo = 3;
                }elseif($porcentaje>= 10){
                    $estilo = 2;
                }else{
                    $estilo = 1;
                }
                echo '<a href="'.$this->url.'?cat='.$palabra.'" title="Coincidencias: '.$valor.'" class="etiqueta'.$estilo.'">'.$palabra.'</a><span  class="etiqueta0">'.'('.$valor.')</span>';
            }
        }
        
        function deleteSpaces($e=' '){
            $e = trim($e);
        }
    }
?>
