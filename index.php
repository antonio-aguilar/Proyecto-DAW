<?php
session_start();

// Llamada a archivos requeridos
require_once "funciones.php";
require_once "bbdd/bd.php";
require_once "funcionesConsultas.php";

/* Cabecera html de la web */
encabezado1();

/* Contenido de la web */
?>
<br/>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/img/k1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img/k2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img/k3.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img/k4.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>

<h1>¿Qué es un tablero de kanban?</h1>
<p>Un tablero de kanban es una herramienta ágil de gestión de proyectos diseñada para ayudar a visualizar el trabajo, limitar el trabajo en curso y 
    maximizar la eficiencia (o el flujo). Puede ayudar tanto a los equipos ágiles como a los de DevOps a definir el orden de su trabajo diario. Los 
    tableros de kanban utilizan tarjetas, columnas y la mejora continua para ayudar a los equipos tecnológicos y de servicios a comprometerse con la 
    cantidad de trabajo adecuada y, por supuesto, a llevarla a cabo.
</p>
<p>Kanban ha recorrido un largo camino desde sus orígenes en el ámbito de la producción lean gracias a un pequeño pero mañoso grupo de entusiastas 
    del kanban. El trabajo de David Anderson para definir el método kanban ayudó a llevar el kanban al dominio del software y los servicios; y Personal 
    Kanban, de Jim Benson y Tonianne DeMaria, ha contribuido a extender las aplicaciones de kanban a ámbitos que ni te imaginarías.
</p>
<img src="images/img/image2.png" alt="Responsive image"></img>
<p>Yo utilizo tableros de kanban todos los días y no podría imaginarme la vida sin ellos. Las ideas y prácticas recomendadas que aquí se recogen 
    constituyen un popurrí de mi experiencia personal, mis investigaciones y las conversaciones que he mantenido con Zach Nies, Keith Nottinson y Jim Benson.</p>
<p>Lo que hace que recurra constantemente al kanban son sus valores y su (sorprendente) ausencia de reglas. Los valores de kanban son el respeto a las personas y 
    la mejora continua.</p>
<h1>Elementos de un tablero de kanban</h1>
<p>David Anderson estableció que los tableros de kanban se pueden dividir en cinco componentes: señales visuales, columnas, límites del trabajo en curso, un 
    punto de compromiso y un punto de entrega.</p>
<img src="images/img/Elements_of_a_kanban_board.png" alt="Responsive image" width="600"></img>

<ol>
<li>Señales visuales: una de las primeras cosas que observarás en un tablero de kanban son las tarjetas visuales (adhesivos, tickets, etc.). Los equipos de kanban 
    escriben todos sus proyectos y elementos de trabajo en tarjetas, generalmente uno por tarjeta. Para los equipos ágiles, cada tarjeta podría encapsular una 
    historia de usuario. Sobre el tablero, estas señales visuales ayudan a los compañeros de equipo y a las partes interesadas a discernir rápidamente en qué está 
    trabajando el equipo.
</li>
<li>Columnas: otra de las señas de identidad de los tableros de kanban son las columnas. Cada columna representa una actividad específica que, en conjunto, conforman 
    un “flujo de trabajo”. Las tarjetas van moviéndose por el flujo de trabajo hasta que este termina. Los flujos de trabajo pueden ser algo tan sencillo como “Por hacer”, 
    “En curso” y “Terminado” o pueden ser mucho más complejos.
</li>
<li>Límites del trabajo en curso: los límites del trabajo en curso son el número máximo de tarjetas que puede haber en una columna en un momento dado. Una columna con un 
    límite de trabajo en curso de tres no puede contener más de tres tarjetas. Cuando la columna está “al máximo”, el equipo debe concentrarse en esas tarjetas y hacer que 
    avancen antes de que puedan entrar tarjetas nuevas en esa etapa del flujo de trabajo. Estos límites del trabajo en curso resultan vitales para exponer los cuellos de 
    botella del flujo de trabajo y maximizar el flujo. Dichos límites te brindan una señal de alerta temprana de que te has comprometido a asumir demasiado trabajo.
</li>
<li>Punto de compromiso: los equipos de kanban suelen tener un backlog para su tablero. Es aquí donde los clientes y los compañeros de equipo plantean ideas para proyectos 
    que el equipo puede adoptar cuando esté listo para ello. El punto de compromiso es el momento en que el equipo adopta una idea y se inicia el trabajo en el proyecto.
</li>
<li>Punto de entrega: el punto de entrega es el final del flujo de trabajo de un equipo de kanban. Para la mayoría de los equipos, el punto de entrega es el momento en 
    el que el producto o servicio está en manos del cliente. El objetivo del equipo consiste en llevar las tarjetas desde el punto de compromiso hasta el punto de entrega 
    cuanto antes. El tiempo transcurrido entre ambos es lo que se conoce como “plazo”. Los equipos de kanban mejoran continuamente para acortar al máximo los plazos.
</li>
</ol>

<p>Un tablero de kanban que reúna estos cinco elementos preparará indudablemente a tu equipo para el éxito. Sin embargo, ahora presentaré el punto de vista opuesto.</p>
<p>Jim Benson dice que el kanban solo tiene dos reglas: limitar el trabajo en curso y visualizar el trabajo. Si partes únicamente de estas reglas y las aplicas a tu 
    trabajo, tu tablero de kanban tendrá un aspecto muy diferente al descrito más arriba. Y no hay ningún problema con ello. Jim aboga por comenzar con solo estas dos 
    reglas porque, según él, "cuantas más reglas añadas, en menos contextos encajarán".
</p>
<h1>Tipos y ejemplos de tableros de kanban</h1>
<p>El kanban puede adaptarse a muchos entornos, desde la fabricación hasta los recursos humanos, pasando por el desarrollo de software DevOps y ágil. El tipo de entorno 
    en el que se adopta el kanban suele determinar si el tablero debe ser físico o digital. Durante mi investigación conocí una obra de construcción de 58 millones de 
    dólares gestionada con un tablero físico en un remolque, y también hablé con muchísimos equipos de software que usan tableros de kanban digitales.
</p>
<h2>Tableros físicos</h2>
<p>Los tableros de kanban más sencillos son tableros físicos divididos en columnas verticales. Los equipos dibujan las columnas en una pizarra y colocan notas 
    adhesivas sobre el tablero. Estas notas adhesivas se van moviendo por el flujo de trabajo y demuestran el progreso.
</p>
<img src="images/img/image5.png" width="600" alt="Responsive image"></img>
<p>Una ventaja de un tablero físico es que está "siempre activo". No puedes abrir una nueva pestaña en una pizarra móvil que se encuentra junto a tu 
    escritorio. Es fácil de configurar, fácil de mostrar a los demás y, con frecuencia, es la mejor manera de comunicarse con ciertos equipos. Sin embargo, los 
    tableros físicos no son ideales para los equipos remotos ni para las personas con una escritura horrible, como yo.
</p>
<p>Optimizely crea software para ayudar a las empresas a descubrir cuáles son las variantes de una página web o producto que más les gustan a los usuarios. Utilizan 
    Jira para hacer un seguimiento de los elementos de trabajo grandes y pequeños, pero Keith Nottonson, el director sénior de Desarrollo, detectó una carencia.
</p>
<p>Los equipos individuales se afanaban en Jira, pero no hablaban entre sí. Para que todo el mundo estuviera en sintonía, Keith erigió un enorme tablero de kanban 
    físico llamado "el muro del trabajo".
</p>
<img src="images/img/physical_kanban_board-2.jpg" width="800" alt="Responsive image"></img>
<p>Este tablero contiene todos los proyectos en los que trabaja el equipo de ingeniería, con las métricas, los miembros del equipo y los estados visibles para todo 
    el mundo. Aunque resultó útil para comprender toda la cartera de trabajo, comenzó a aflorar un valor aún más interesante.
</p>
<p>“Al principio, el muro contaba con las columnas ‘Por hacer’, ‘En proceso’ y ‘Hecho‘, pero con el tiempo la gente empezó a debatir sobre nuestra forma de trabajar”, 
    comenta Keith. Keith afirma que, gracias a estos debates, el muro creció y evolucionó y, en cuestión de semanas, en Optimizely pudieron ver con mayor nitidez que 
    nunca cómo se llevaba a cabo el trabajo.
</p>
<p>El tablero de Optimizely es especialmente bueno porque tiene un punto de compromiso y un punto de entrega. En cuanto se define un proyecto y este cumple ciertos 
    requisitos, un equipo de ingeniería se encarga del proyecto y se compromete a llevarlo a cabo. Llegado a este punto, el proyecto pasa a Jira para que dicho equipo 
    pueda capturar todos los datos con enjundia y las interacciones que intervienen en la entrega final.
</p>
<p>Keith recomienda que los equipos empiecen con un tablero de kanban físico, ya que los debates iniciales conducirán a iteraciones rápidas del flujo de trabajo y del tablero.</p>

<h1>Tableros digitales</h1>
<p>A medida que el sistema kanban fue ganando adeptos entre los equipos de software e ingeniería, los tableros de kanban experimentaron una transformación digital. Los tableros 
    digitales permiten a los equipos que no comparten un espacio físico de oficina utilizar tableros de kanban de forma remota y asíncrona.
</p>
<img src="images/img/image4.png" width="700" alt="Responsive image"></img>
<p>Trello es una forma rápida y sencilla de crear un tablero de kanban digital. Solo hacen falta unos cuantos clics para configurarlo y crear listas digitales, que representan 
    las etapas de tu proceso de kanban, en una vista de tablero a la que todo tu equipo puede acceder y que también puede gestionar.
</p>
<p>Por ejemplo, puedes crear listas para "Backlog", "A continuación", "En curso" y "Finalizado". Cada tarea está organizada como una tarjeta, y las tarjetas se van moviendo por 
    las listas a medida que se ponen en cola, se trabaja en ellas y se completan.
</p>
<p>Las ventajas de un tablero de kanban digital como este son la velocidad de configuración, la facilidad para compartirlo con otros y la capacidad de realizar un 
    seguimiento asíncrono de un número infinito de conversaciones y comentarios a medida que avanza el proyecto. Independientemente de dónde o cuándo revisen los miembros 
    del equipo el tablero de kanban, verán el estado más actualizado del proyecto. Además, podrás incluso utilizar un flujo de trabajo de kanban en Trello para tus tareas 
    personales, como se muestra en este tablero de ejemplo.
</p>
<p>Algunos tableros de kanban digitales son sencillos y, otros, más robustos y personalizables. Los equipos que necesitan funciones adicionales como, por ejemplo, 
    límites del trabajo en curso y gráficos de control, deben optar por una herramienta más potente como Jira Software. Jira integra de serie una plantilla de proyecto 
    de kanban lista para usar que hace que poner en marcha un equipo de kanban sea coser y cantar. El equipo puede acceder al proyecto y luego personalizar el flujo de 
    trabajo y el tablero, establecer límites del trabajo en curso, crear carriles e incluso activar un backlog si necesitan una forma mejor de priorizar.
</p>

<?php
/* Pie html de la web */
pie();

?>