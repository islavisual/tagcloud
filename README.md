tagcloud
========
Esta utilidad también está explicada en el blog de ISLAVISUAL  http://www.islavisual.com/articulos/desarrollo_web/tagcloud-clase-para-crear-nubes-de-etiquetas-en-php

La clase usa como fuente de datos una cadena en la que se encuentran todas las etiquetas o tags separadas por comas. Con la función create() se crearán las etiquetas y se le aplicarán los estilos definidos en tu CSS.


Estilos aplicados por CSS
-------------------------

Los estilos los podéis cambiar en la hoja de estilos CSS vuestra. Sólo tienen que estar definidos como los siguientes:

<pre>
   .etiqueta0 { color:#aaaaaa; font-size: 12px; }
   .etiqueta0:hover span { text-decoration:none !important; }
   a.etiqueta1 { font-size: 12px; text-decoration:none; padding:2px; margin:3px; display:inline-block; }
   a.etiqueta2 { font-size: 16px; text-decoration:none; padding:2px; margin:3px; display:inline-block; }
   a.etiqueta3 { font-size: 20px; text-decoration:none; padding:2px; margin:3px; display:inline-block; }
   a.etiqueta4 { font-size: 24px; text-decoration:none; padding:2px; margin:3px; display:inline-block; }
   a.etiqueta5 { font-size: 28px; text-decoration:none; padding:2px; margin:3px; display:inline-block; }
   a.etiqueta6 { font-size: 32px; text-decoration:none; padding:2px; margin:3px; display:inline-block; }
   a.etiqueta1:hover{ text-decoration:underline; }
   a.etiqueta2:hover{ text-decoration:underline; }
   a.etiqueta3:hover{ text-decoration:underline; }
   a.etiqueta4:hover{ text-decoration:underline; }
   a.etiqueta5:hover{ text-decoration:underline; }
   a.etiqueta6:hover{ text-decoration:underline; }
   a.etiqueta1:hover span{ text-decoration:none !important; color:#5567B9 }
</pre>

Forma de usarla
---------------
Suponemos que tenemos una cadena que contiene los siguientes valores:
<pre>
   $tags = "KPIs,SEO,SEM,SEM,Marketing,Social Media,SEO,Marketing,SEM,Social Media,SERPsMarketing,Social Media,Social Media,SMO,Social Media,Redes Sociales,Redes Sociales";
</pre>

Si queremos crear la nube de etiquetas insertaremos las siguientes 2 líneas:
<pre>
   include "tagcloud.php";
   $tagCloud = new TagCloud;
   $tagCloud->create($tags);
</pre>

Si además le queremos enviar una URL distinta a la actual podemos incluirlo en la función create(). Si no se le pone URL se tomara por defecto la URL actual.

<pre>
   include "tagcloud.php";
   $tagCloud = new TagCloud;
   $tagCloud->create($tags, $_SERVER['REQUEST_URI']);
</pre>
