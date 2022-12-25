<?php $nombrePagina = 'Arquitectura de PC'; ?>

<?php
include 'includes/conexion.php';
?>

<!-- header -->
<?php
include 'includes/header.php';
?>
<!-- fin header -->
<!-- barra de navegacion -->
<?php
include 'includes/navegacion.php';
?>
<!-- fin de barra de navegacion -->

<!-- Inicio header -->
<div class="bgimagen-textura">
    <div class="container animated wow zoomIn mt-5">
        <div class="titulo-bgimagen my-5">
            <h1>arquitectura de pc's</h1>
        </div>
    </div>
</div>
<div class="text">
    <p>En está página podras obtener los conocimientos básicos de la arquitectura de las computadoras o pc's</p>
</div>
<div class="container cbta">
    <p>A continuación se te mostraran los temas por los cuales podras navegar
        y aprender sobre éste interesante tema, con el cúal vivimos ya día a día.
    </p>
</div>
<!-- Fin header -->

<!-- inicio grid -->
<div>
    <!-- ------------------------------------------------------------------------------------------------------------------------------- -->
    <hr>
    <h2 class="Nosotros tituloNuevo">Temas</h2>
    <hr>
    <div class="container perro">
        <div class="my-5 text-center px-5 animated wow bounceInLeft slow" data-wow-delay="200ms">
            <i class="fas fa-home fa-3x pt-3" style="color: #02E301;"></i>
            <h2>Evolución de las computadoras</h2>
            <img src="img/evolucion.jpg" alt="la evolucion de pcs">
        </div>
        <!-- ------------------------------------------------------------------------------------------------------------------------------- -->
        <hr>
        <div class="my-5 text-center px-5 animated wow bounceInRight slow" data-wow-delay="400ms">
            <i class="fas fa-cloud-showers-heavy fa-3x pt-3" style="color: #02E301;"></i>
            <h2>Concepto de hardware y software</h2>
            <ul>
                <li>Hardware: El conjunto de los componentes que integran la parte material de una computadora u ordenador.</li>
                <li>Software: Conjunto de programas, instrucciones y reglas informáticas para ejecutar ciertas tareas en una computadora.</li>
            </ul>
        </div>
        <!-- ------------------------------------------------------------------------------------------------------------------------------- -->
        <hr>
        <div class="my-5 text-center px-5 animated wow bounceInLeft slow" data-wow-delay="200ms">
            <i class="fas fa-home fa-3x pt-3" style="color: #02E301;"></i>
            <h2>Software en general</h2>
            <p>Ahora aclarado las bases de todo lo que hablaremos, hay que enfocarnos en entrar en materia,
                por lo cual sería necesario iniciar con lo que le dará sentido al hardware, que es el software;
                primero que nada, hay que entender que existen 3 distintos tipos de software, que pretenden darle
                uso al hardware en el medio digital, dicho esto, conozcamos cada uno de ellos:
            </p>
            <!-- ***************************************************************************************************************************  -->
            <dl>
                <dt>Software de sistema: </dt>
                <dd>Es lo primordial de todos los software´s, es conocido como software base o de sistema;
                    este tiene por trabajo dar un conjunto de instrucciones a la computadora para permitir su uso.
                    Siendo este el que permite el funcionamiento que conocemos de la computadora, junto a esto es
                    el software donde se instalan los programas que descargamos y/o usamos cotidianamente.
                    Algunos ejemplos posibles de software de sistema son:
                </dd>
                <li>Cargadores de programas (loaders). Programas encargados de la ejecución de otros programas y de garantizar
                    la estabilidad del sistema.
                </li>
                <li>
                    Sistemas operativos. En realidad muchos de sus componentes, ya que cierta parte de los S.O forman parte de otros
                    aspectos del funcionamiento del sistema.
                </li>
                <li>
                    Programas utilitarios básicos. Como los garantes del correcto estado del hardware, o los medidores de energía, temperatura, etc.
                </li>
                <li>
                    BIOS. Siglas en inglés de Basic Input-Output System (Sistema Básico de Entrada y Salida),
                    es el programa elemental de control de la información del sistema, que garantiza que el
                    computador se comunique con el mundo externo.
                </li>
                <li>
                    Líneas de comandos. Instrucciones preprogramadas en el sistema que permiten llevar a cabo
                    funciones muy básicas e indispensables, de ejecución prioritaria.
                </li>
                <li>
                    También están los drivers o controlador de dispositivo que es un programa que facilita la
                    comunicación entre un sistema operativo (S.O) y un periférico.
                </li>
                <!-- ***************************************************************************************************************************  -->
                <dt>Software de programación: </dt>
                <dd>
                    Es el software que permite la creación de otros softwares, siendo este un conjunto de herramientas que
                    permiten a los programadores el diseñar dichos programas a partir de la utilización de las herramientas
                    de desarrollo de software que se pueden dividir en las siguientes categorías:
                </dd>
                <li>
                    Herramientas de análisis de rendimiento
                </li>
                <li>
                    Herramientas de depuración
                </li>
                <li>
                    Análisis estático y herramientas formales de verificación
                </li>
                <li>
                    Herramientas de corrección y supervisión
                </li>
                <li>
                    Herramientas de uso de la memoria
                </li>
                <li>
                    Herramientas de construcción de aplicaciones
                </li>
                <li>
                    Entorno de desarrollo integrado
                </li>
                <li>
                    Editores de texto
                </li>
                <dd>
                    Algo a mencionar es que por ende se necesita de un lenguaje de programación para poder hacer uso correcto de estos
                    y lograr lo que se planea realizar, por ello se divide en dos: lenguaje de alto nivel y lenguaje de bajo nivel.
                </dd>
                <li>
                    Lenguaje de alto nivel: De una manera resumida, son los lenguajes que son más cercanos al lenguaje humano.
                    Es decir, son aquellos lenguajes que son fáciles de comprender y que usan palabras más comprensibles.
                    Ejemplos de estos están: C, Python, C++, Java, Sql, PHP.
                </li>
                <li>
                    Lenguajes de bajo nivel: Son los lenguajes que su comprensión es más abstracta. Es más una interacción con la máquina,
                    ya que utilizan más instrucciones para el hardware. Además utilizan el sistema binario y hexadecimal que es lo que
                    mayormente usan las computadoras. Ejemplos de estos tenemos solo 2: Lenguaje máquina y Lenguaje ensamblador.
                </li>
                <br>
                <p>Aquí algunos ejemplos de los lenguajes de Programación enfocados a ciertas áreas:</p>
                <img src="img\lp.png" alt="">
            </dl>
            <!-- ***************************************************************************************************************************  -->
            <dt>Software de aplicación: </dt>
            <dd>
                Son todos los programas y/o aplicaciones que se desarrollaron para que sean usadas por los usuarios,
                aún sin tener conocimiento de estas (la mayoría de las veces), claro está en que uno se puede dedicar
                a ver el funcionamiento de estos programas pero originalmente están creados con la intención de solo
                descargarse y usarse. Estos como se mencionó anteriormente son instalados en el software base para poder ser usados;
                por ello, pueden venir instalados en el sistema o ser instalados por el usuario. Dentro de este campo existen algunos
                tipos de software de aplicación, junto a sus características; como lo son los siguientes a mencionar:
            </dd>
            <li>
                Aplicaciones de escritorio: Incluyen funciones que permiten a las personas manipular conjuntos de datos,
                gráficos o números para crear una salida. Los ejemplos de aplicaciones de escritorio incluyen procesadores
                de texto, reproductores de música y reproductores de video.
            </li>
            <li>
                Aplicaciones basadas en la Web: Si bien la mayoría del software de aplicación se puede instalar directamente
                en una máquina, muchos permiten a los usuarios acceder a las herramientas a través de navegadores web utilizando
                la conexión a internet. Estos servicios no solo liberan espacio en el disco duro o la red de un usuario, lo que
                significa que se puede acceder a ellos desde cualquier parte del mundo en cualquier momento, con los datos
                almacenados en la nube.
            </li>
            <li>
                Conjuntos de Aplicaciones (Suits): También se pueden agrupar en conjuntos de aplicaciones, que ofrecen una variedad
                de aplicaciones diferentes desarrolladas por la misma compañía para cubrir más de un aspecto de su negocio. La ventaja
                es que proporcionan múltiples aplicaciones a un precio más bajo que comprar cada una por separado y pueden proporcionar
                una mejor integración en comparación a utilizar aplicaciones distintas.
            </li>
            <li>
                Está hecho para que lo utilice el usuario: Normalmente ofrecen interfaces gráficas amigables y funciones que están
                enfocadas a satisfacer necesidades del usuario.
            </li>
            <li>
                Corre sobre el software del sistema: No funciona por sí solo, ya que corre sobre la capa de software del sistema,
                tomando como ejemplo un editor de texto que funciona sobre un sistema operativo.
            </li>
            Es más conocido por los usuarios comunes: Los software más populares que conocen los usuarios comunes pertenecen
            a esta categoría gracias a casos como los editores de texto o los navegadores web.
            </li>
        </div>
        <!-- ------------------------------------------------------------------------------------------------------------------------------- -->
        <hr>
        <div class="my-5 text-center px-5 animated wow bounceInRight slow" data-wow-delay="400ms">
            <i class="fas fa-cloud-showers-heavy fa-3x pt-3" style="color: #02E301;"></i>
            <h2>Hardware</h2>
            <p>Ahora bien, ya que conocemos lo que es la información sobre lo que le da vida al hardware
                (aparte de la energía eléctrica, claro está), es hora de entrar de lleno a este mismo; para
                ello comenzaremos con dar a conocer lo que son los componentes esenciales:
            </p>
            <!-- ***************************************************************************************************************************  -->
            <dl>
                <hr>
                <dt>PROCESADOR (CPU)</dt>
                <dd>Así como se escucha el CPU no es el gran gabinete que la mayoría creíamos,
                    se trata de una pieza cuadrada la cual tiene los chips y circuitos que permiten
                    la ejecución e interpretación de datos. Estos procesadores cuentan con un “reloj”
                    en el cual la frecuencia de reloj indica la frecuencia a la cual los transistores
                    abren y cierran el flujo de una corriente eléctrica, en determinado tiempo.
                    Este mismo está compuesto por lo siguiente:
                </dd>
                <li>Unidad de control: dirige la operación del sistema entero, coordina la ejecución de
                    todos los pasos para completar las instrucciones que se le dan. Controla la unidad
                    aritmética/lógica y los periféricos (pronto se hablará de esto).
                </li>
                <li>
                    Unidad aritmética/lógica: Realiza las operaciones aritméticas y lógicas sobre los datos expresados en números binarios (O,1).
                </li>
                <li>
                    Núcleos: Un núcleo es una especie de procesador en miniatura. Los procesadores actuales contienen varios núcleos,
                    lo cual acelera ciertos tipos de aplicaciones, evita bloqueos y mejora la calidad de imagen y video.
                    El procesador puede tener 2, 3, 4, 6 y de 6 a 16.
                </li>
                <li>
                    Cache: La memoria caché es el elemento del sistema de memoria de un PC se usa para acelerar la velocidad de los accesos a la RAM.
                </li>
                <li>
                    Tarjeta gráfica: Componente del ordenador diseñado para mostrar imágenes (o videos) en los distintos medios de visualización,
                    como puede ser un monitor, utilizando una gran variedad de distintos estándares de visualización
                    (También existen las mismas tarjetas gráficas de las cuales pronto se hablará).
                </li>
                <li>
                    Zócalo: Lugar donde se inserta el procesador y que permite la conexión con el resto del equipo.
                </li>
                <li>
                    Chipset: Conjunto de Chips encargados del control de las determinadas funciones del equipo.
                </li>
                <dd>Esto es a lo que se refiere sobre el “¿Qué es el CPU?”, ahora bien, hay que hablar de las
                    marcas principales y las generaciones actuales de estos; para ello haremos mención de las
                    dos principales corporaciones que controlan el mercado:
                </dd>
                <ul>
                    Intel: Fue el primero en manejar el campo de los microprocesadores, aunque actualmente no es el
                    que domina el mercado; cuenta con procesadores que han ido evolucionando con el pasar del tiempo,
                    en la siguiente lista hablaremos de los procesadores que maneja intel; en cuestión de sus generaciones
                    van desde la primera generación hasta la generación 13:
                    <li>
                        Intel Celeron: son procesadores económicos con dos núcleos y dos hilos que cubren el nivel básico.
                        Ofrecen un buen rendimiento en ofimática general, multimedia y navegación web, y también con juegos poco exigentes.
                    </li>
                    <li>
                        Intel Pentium: los modelos basados en la arquitectura Skylake tienen dos núcleos y dos hilos y,
                        en general, no ofrecen una mejora de rendimiento importante frente a los Celeron. Con la llegada
                        de Kaby Lake los Pentium G4560 y superiores montan dos núcleos y cuatro hilos, lo que los convierte
                        en una opción sólida para PCs multimedia económicos. Rinden bien en la mayoría de los juegos de la
                        generación actual, salvo aquellos más recientes que requieren cuatro núcleos.
                    </li>
                    <li>
                        Intel Core i3: Procesador de gama baja y bajo consumo para equipos de ofimática, educación y aplicaciones en la nube.
                    </li>
                    <li>
                        Intel Core i5: Procesador de gama media que ofrece un buen rendimiento en todo tipo de tareas,
                        aunque sufre cuando se utiliza con aplicaciones o juegos intensivos.
                    </li>
                    <li>
                        Intel Core i7: Procesador de alto rendimiento pensado para gaming y tareas multimedia o de diseño gráfico.
                    </li>
                    <li>
                        Intel Core i9: se ha convertido en el nuevo tope de gama de Intel en el mercado de consumo general.
                        Debutaron con la serie 9000 (Coffee Lake Refresh), ofrecen un alto rendimiento y tienen 8 núcleos y 16 hilos.
                        Pueden con cualquier cosa y tienen una larga vida útil por delante. Con el lanzamiento de la serie Core i9 10000
                        veremos una renovación que mejorará las especificaciones a 10 núcleos y 20 hilos.
                    </li>
                    </li>
                </ul>
                <dd>Ahora bien, hay ciertos datos que te llegan a aparecer cuando vas a ver que procesador tienes,
                    en el caso de intel, para entender esos datos, esta la siguiente imagen:
                </dd>
                <img src="img/estructura.jpg" alt="">
                <ul>
                    Amd: Siendo este el que encabeza el mercado, se trata de una compañía que se enfoca en el gran
                    rendimiento de sus procesadores y de igual modo ha tenido un gran avance durante los años con dicho producto,
                    de los cuales se mencionan a continuación:
                    <li>
                        AMD Athlon: podemos encontrar versiones que tienen entre dos y cuatro núcleos. El rendimiento de las versiones
                        basadas en Bulldozer y sus derivados es bueno en cualquier tarea básica, y los modelos de cuatro núcleos ofrecen
                        un desempeño aceptable en juegos no muy exigentes.
                    </li>
                    <li>
                        APUs: son soluciones que integran procesador y unidad gráfica en un mismo encapsulado. Existen configuraciones
                        muy variadas tanto por arquitectura a nivel CPU y GPU como por especificaciones. Por ejemplo, los modelos menos
                        potentes y más antiguos se basan en Bulldozer a nivel CPU y en Terascale 3 a nivel GPU, mientras que las más actuales
                        utilizan la arquitectura Zen+ y Radeon Vega a nivel de procesador y unidad gráfica. Estas versiones montan procesadores
                        de hasta 4 núcleos y 8 hilos y unidades gráficas con 704 shaders, lo que las convierte en soluciones bastante potentes
                        y capaces de mover juegos actuales con garantías.
                    </li>
                    <li>
                        Ryzen 3: la arquitectura Zen marcó un enorme salto a nivel de IPC frente a Bulldozer (un 52% más que los modelos de
                        primera generación). Estos modelos tienen cuatro núcleos y cuatro hilos. Son muy económicos y pueden mover cualquier
                        juego actual con garantías.
                    </li>
                    <li>
                        Ryzen 5: hay tres variantes, los modelos 1500 e inferiores, que suman cuatro núcleos y ocho hilos, y los modelos 1600,
                        2600 y 3600, que tienen seis núcleos y doce hilos. AMD lanzó un Ryzen 5 3500 con seis núcleos y seis hilos, pero su
                        disponibilidad ha sido muy limitada. Su rendimiento es muy bueno, pueden jugar con juegos actuales de forma totalmente
                        óptima y están preparados para trabajar con aplicaciones multihilo exigentes.
                    </li>
                    </li>
                    Ryzen 7: suman 8 núcleos y 16 hilos en sus tres generaciones (serie 1000, 2000 y 3000). Ofrecen un excelente rendimiento
                    en cualquier escenario y están preparados para superar sin problemas la transición que marcará la nueva generación de consolas.
                    </li>
                    <li>
                        Ryzen 9: tenemos dos versiones, el Ryzen 9 3900 X, que tiene 12 núcleos y 24 hilos, y el Ryzen 9 3950 X, que suma 16
                        núcleos y 32 hilos. Son lo más potente que existen en el mercado de consumo general, y pueden con cualquier cosa.
                    </li>
                </ul>
                <dd>De igual modo que intel, estos cuentan con ciertos datos para corroborar su información y
                    datos relevantes, para identificar cada uno de ellos, se muestra la siguiente imagen:
                </dd>
                <img src="img/amd.jpg" alt="">
                <!-- ***************************************************************************************************************************  -->
                <hr>
                <dt>MOTHERBOARD</dt>
                <dd>
                    Una tarjeta madre es la plataforma sobre la que se construye la computadora, sirve como medio de conexión
                    entre el microprocesador y los circuitos electrónicos de soporte de un sistema de cómputo, de este modo, una
                    tarjeta madre se comporta como aquel dispositivo que opera como plataforma o circuito principal de una computadora.
                    Al igual que el procesador, cuenta con varias partes; generalizar la mayoría para que sea mas entendible pero mostrar
                    gráficamente cual es cual:
                </dd>
                <ul>
                    <li>
                        Las ranuras de expansión: o slots donde se conectan las demás tarjetas que utilizará el computador
                        como por ejemplo la tarjeta de video,sonido, modem, etc.
                    </li>
                    <li>
                        Chips: como puede ser el BIOS, los Chipset o controladores.
                    </li>
                    <li>
                        Puerto de gráficos acelerado: En ocasiones llamado Puerto de Gráficos Avanzado) es un puerto
                        (puesto que sólo se puede conectar un dispositivo, mientras que en el bus se pueden conectar varios).
                        El puerto AGP es de 32 bit como PCI pero cuenta con notables diferencias como 8 canales más adicionales
                        para acceso a la memoria RAM.
                    </li>
                    <li>
                        PCI:("Interconexión de Componentes Periféricos") consiste en un bus de ordenador estándar para conectar
                        dispositivos de tipo periféricos directamente a su placa base.
                    </li>
                    <li>
                        SATA: Es una interfaz de transferencia de datos entre la placa base y algunos dispositivos de almacenamiento,
                        como puede ser el disco duro, Lectores y grabadores de CD/DVD/BR,Unidades de Estado Sólido u otros dispositivos.
                    </li>
                    <li>
                        Dispositivos de entrada o salida: Son aquellos que permiten conectar los periféricos, los cuales son los siguientes
                        (Citando algunos): Teclado, ratón, Cámara web, micrófono, monitor, etc.
                    </li>
                    <li>
                        Conectores de alimentación: Apartado donde se conecta a la fuente de alimentación/fuente de poder, para poder obtener
                        energía y del mismo modo transmitirla a todo lo que esté conectado.
                    </li>
                </ul>
                <img src="img/mother.png" alt="">
                <dd>
                    Al igual que los procesadores, las motherboards tiene varias marcas que las distribuyen y distintas generaciones,
                    por lo cual haremos mención de algunas de las más relevantes:
                    <ul>
                        <li>
                            ASUS: es conocida por su alta calidad de las placas base y de tarjetas de video , es la marca más usada por los
                            gamers y la más recordada cuando se trata de armar una PC gaming.
                        </li>
                        <li>
                            Gigabyte le sigue cuello a cuello con ASUS para la marca número uno en la mente de la mayoría de los aficionados.
                            Se ha ganado su reputación a través de años de entrega de placas que son de alta calidad, fiable y buen diseño.
                            Gigabyte está en el mercado más agresivo que el ASUS en lo que se refiere a la comercialización de tarjetas de gama
                            baja, especialmente a las micro-ATX placa madre.
                        </li>
                    </ul>
                </dd>
                <dd>
                    Tipos de motherboard; existen varios tipos de placas bases dependiendo de su tamaño, entre ellos podemos mencionar:
                    <ul>
                        <li>
                            E-ATX Extended ATX: Esta placa madre tiene un tamaño ligeramente más grande que el estándar ATX. Esta es la placa
                            que generalmente se utiliza con mayor frecuencia en el mercado y es de las que tienen mejor potencia. Al igual que
                            los Chipsets de alto rendimiento permite hasta 8 módulos para memoria RAM.
                        </li>
                        <li>
                            ATX: Tiene el tamaño más común y es llamada placa base estándar. Podemos encontrar desde placas muy potentes las
                            cuales cuentan con una gran capacidad de procesamiento y posibilidades, hasta las placas madre más básicas.
                        </li>
                        <li>
                            M-ATX Micro ATX: Estas placas tienen un tamaño estándar reducido y son más pequeñas que las ATX. Parte de las ATX
                            y tienen en común los puntos de anclaje que dependen del tamaño de la torre, aunque los anclajes coincidan.
                        </li>
                        <li>
                            Mini ITX: Este es el tipo de formato más pequeño pero es capaz de lograr un rendimiento similar a las placas base
                            más grandes. Es ideal para montar equipos compactos que incluyen equipos de trabajo hasta PCs gaming de tamaño pequeño.
                        </li>
                    </ul>
                </dd>
                <!-- ***************************************************************************************************************************  -->
                <hr>
                <dt>MEMORIA RAM</dt>
                <dd>
                    Es la memoria principal de un dispositivo, esa donde se almacenan de forma temporal los datos de los programas que estás
                    utilizando en este momento. Sus siglas significan Random Access Memory; tiene dos características que la diferencian del
                    resto de tipos de almacenamiento. Por una parte tiene una enorme velocidad, y por otra los datos sólo se almacenan de forma
                    temporal. Existen los siguientes tipos de RAM; DDR, DDR2, DDR3, DDR4: La mayoría de las placas base solo admiten un tipo de RAM,
                    pero ha habido modelos que admite 2 tipos de RAM, con ranuras dedicadas (no al mismo tiempo). El más antiguo de todos es el DDR,
                    que ahora ya no se utiliza. DDR2 tuvo su momento de gloria durante varios años, pero ahora casi ha desaparecido porque corresponde
                    a las viejas tomas de corriente. En cuanto a la DDR3, si se ha generalizado con las plataformas AMD AM3 e Intel 1366 y 1156, actualmente
                    está en peligro, siendo reemplazada por la próxima generación. Finalmente, apareció la DDR4 con que está equipada en la mayoría de las
                    placas base actuales. La frecuencia es algo importante de qué hablar ya que hay muchas frecuencias diferentes para las matrices de RAM.
                    Al ser memorias de tipo DDR, la frecuencia efectiva de funcionamiento es el doble de la frecuencia real. Por ejemplo, en el caso de una
                    memoria DDR4 a 1200 MHz tendríamos una frecuencia efectiva de 2400 MHz (términos de física) y actualmente la recien llegada DDR5.
                    El fabricante de la placa base nos avisa de cuál es la frecuencia máxima que podemos montar, por lo que es un dato importante.
                    Y para terminar está el Single, Dual, Triple o Quad channel Dual, Triple o Quad channel es una tecnología administrada por
                    el controlador de memoria para duplicar el ancho de banda de la memoria desde un punto de vista teórico. Pero la situación
                    es diferente en la práctica. Esta tecnología permite al controlador de memoria
                    leer desde varios módulos a la vez, en lugar de uno solo. En cuanto a las marcas, están las siguientes, por mencionar algunas:
                    <ul>G-SKILL, CORSAIR, KINGSTON, PATRIOT, CRUCIAL</ul>
                    <img src="img/ram.jpg" alt="">
                </dd>
                <!-- ***************************************************************************************************************************  -->
                <hr>
                <dt>PERIFERICOS</dt>
                <dd>
                    Ya anteriormente se mencionó algunos de ellos, pero su función en sí se basa en ser dispositivos que se
                    conectan a la motherboard para permitirnos interactuar con el equipo, desde escribir, ver, escuchar, etc.
                </dd>
                <img src="img/peri.jpg" alt="">
                <!-- ***************************************************************************************************************************  -->
                <dt>DISIPADOR DE CALOR</dt>
                <dd>
                    Como el nombre lo indica, se encarga de dispersar el calor del dispositivo para evitar su sobrecalentamiento.
                    Este tiene un conductor térmico que transfiere el calor lejos de la CPU en un diseño con un ventilador que permite
                    que el calor se disipa con facilidad en el aire.
                    En cuanto a éste, no hay mucho que decir que más que lo ya mencionado de forma resumida, y que llega a contar en la
                    mayoría de los casos, con las siguientes características:
                    <ul>
                        <li>Pasta térmica</li>
                        <li>Bloque frío</li>
                        <li>Tubos de calor</li>
                        <li>Torre o bloque aleteado</li>
                        <li>Ventilador</li>
                        <li>Disipadores pasivos</li>
                    </ul>
                </dd>
                <dd>
                    Existen 3 tipos de disipación, que son las siguientes:
                    <li>Stock: Son los disipadores que ya vienen integrados con el empaque del procesador; por lo regular son ventiladores
                        que aunque sí sirven su eficiencia es muy limitada.
                    </li>
                    <li>Disipación por torre: es la disipación similar a la de stock pero más eficiente, que disipa mejor el calor.
                    </li>
                    <li>Refrigeración líquida: Es la refrigeración que se recomienda para equipos con alta demanda.
                    </li>
                </dd>
                <dd>
                    Por mencionar algunos, estas llegan a ser de las mejores marcas:
                    <li>Noctua NH-U12A</li>
                    <li>CRYORIG R1 Ultimate</li>
                    <li>SCYTHE Fuma 2 SCFM-2000</li>
                    <li>Phanteks TC14 Premium Edition</li>
                    <li>ARCTIC Freezer 50 TR</li>
                    <li>Noctua NH-D15 chromax</li>
                    <li>BeQuiet!</li>
                    <li>Thermalright Le Grand Macho RT</li>
                </dd>
                <img src="img/refri.jpg" alt="">
                <!-- ***************************************************************************************************************************  -->
                <dt>ALMACENAMIENTO</dt>
                <dd>
                    Este, como su nombre hace referencia, almacena la información que nosotros queremos que se guarde en esta especie
                    de memoria, como lo es imágenes, videos, archivos, programas, etc. Dentro de las cuestiones de almacenamiento
                    físico actual, están los HDD que son algo lentos pero los más usados aun, y posteriormente están los SSD
                    (unidad de estado sólido)de tipo sata y luego los SSD de tipo NVME; en el orden mencionado es que son más
                    rápidos y más eficientes, además de que el precio es también va variando dependiendo de cual se busque y de
                    su capacidad de almacenamiento (Gigabytes). A continuación se muestra una breve línea del tiempo de su avance:
                </dd>
                <img src="img/alma.png" alt="">
                <!-- ***************************************************************************************************************************  -->
                <dt>FUENTE DE PODER</dt>
                <dd>
                    No es ni más ni menos que lo que le da la vida el equipo, ya que se conecta a cada componente, que a su vez se conecta
                    al tomacorriente para darle energía. De este mismo hay varios modelos y cosas a tomar en cuenta como son las protecciones
                    contra descargas de energía, los watts, los cables con los que cuenta, y en ciertas ocasiones la certificación
                    (es lo que te dice la calidad del producto, desde 80 plus, 80 plus bronce, platinum, etc.), en este componente, sin importar para qué uso
                    le des a la computadora, es al que mayor importancia e inversión se le debe dar, dado que como mencione, es la que se conecta con todo y si
                    hay alguna descarga de energía, al no tener protección contra estas descargas (es por poner un ejemplo claro), quemará cada uno de los componentes.
                    Algunas de las marcas más recomendadas para tener un buena fuente de poder (aunque de preferencia siempre investigar si es buena la fuente),
                    son las siguientes:
                    <ul>
                        <li>Seasonic.</li>
                        <li>Corsair.</li>
                        <li>Antec.</li>
                        <li>Cooler Master.</li>
                        <li>EVGA.</li>
                        <li>Thermaltake.</li>
                        <li>XFX.</li>
                        <li>Enermax.</li>
                    </ul>
                </dd>
                <img src="img/poder.jpg" alt="">
                <!-- ***************************************************************************************************************************  -->
                <dt>GABINETE</dt>
                <dd>
                    La cuestión que le dará estética al equipo además de una estructura; el gabinete es donde se guarda,
                    ensambla y coloca todos los componentes protegiendolos al estar todos dentro de este, junto con que hay
                    distintos diseños para tener una apariencia que le agrade al usuario.
                    </ul>
                </dd>
                <img src="img/gabi.jpg" alt="">
            </dl>
            <!-- ------------------------------------------------------------------------------------------------------------------------------- -->
            <h2>COMPONENTES EXTRAS</h2>
            <p>
                Esto de forma “muy” resumida fueron los componentes esenciales de un equipo de cómputo, pero no obstante hay
                ciertos componentes que son extras y ayudan a mejorar la calidad del equipo y/o darle un complemento para su
                uso; en este caso mencionaré algunos que suelen ser los más buscados y/o requeridos por los usuarios para cuestiones específicas):
            </p>
            <dl>
                <dt>TARJETA GRÁFICA</dt>
                <dd>Anteriormente se mencionó que el CPU tiene una tarjeta gráfica que le permite mostrar video a la hora de encender el
                    equipo, pero hay otras tarjetas graficas externas que mejoran la calidad de dicho video y van variando en tamaño,
                    capacidad y enfoque que se le pretende dar (sobre el enfoque se hablará posteriormente cuando se toque el tema de
                    los usos de los equipos a la hora de ser usados), para saber si son buenas, podemos guiarnos de la GAMA (baja, media o alta,
                    dependiendo de los usos que se le quiera dar) y del chip grafico que es el que se encargará de darnos esa calidad que se busca.
                    Las marcas más conocidas son la Nvidia y Radeon.
                </dd>
                <img src="img/grafica.jpg" alt="">
                <!-- ***************************************************************************************************************************  -->
                <dt>TARJETA DE RED</dt>
                <dd>
                    Es la que permite conectarse a una red de wifi de forma inalámbrica con el fin de tener conexión a internet
                    sin tener un cable conectado.
                </dd>
                <!-- ***************************************************************************************************************************  -->
                <dt>LECTOR DE DISCOS</dt>
                <dd>
                    Este es opcional dado que muchos equipos de cómputo tienen o no uno, dependiendo de las necesidades del usuario;
                    tiene como fin el leer la información de unidades de almacenamiento de tipo CD para visualizarlas o abrir datos que contenga este mismo.
                </dd>
            </dl>
            <!-- ------------------------------------------------------------------------------------------------------------------------------- -->
            <h2>Previo a la Finalización</h2>
            <p>
                Por fin tenemos claro lo que es lo esencial y lo que se le puede denominar como extra (Los componentes extras dependen del uso que le pretendas dar al equipo);
                pero antes de pasar ya a las área de uso, hay que mencionar algo importante, a la hora de adquirir un equipo ya armado y listo para usar, no hay mayor ciencia
                que ver si cumple con lo que buscamos, pero en el caso de que lo armemos por cuenta propia, hay que tomar en cuenta dos cosas, que sean compatibles, que para
                ello deben ser de la misma generación (por ejemplo en el caso de las memorias Ram y procesadores con las motherboards, si la motherboard soporta solo
                procesadores INTEL de quinta generación y memoria Ram DDR3, no debemos exceder su capacidad en agregarle componentes que no soporte la motherboard,
                si soporta dicha generación de procesador y Ram, podemos colocar lo que soporte o generaciones anteriores) y sobretodo que se adapten a lo que requerimos,
                con esto nos referimos a que si solo buscas un equipo para tareas escolares de primaria, no busques agregarle componentes de última generación que no le
                sacaran su provecho. Para entender mejor lo último mencionado, es para lo que sirve el siguiente apartado que es los usos, el cual se refiere a que tipo
                de equipo de cómputo sea el adecuado en ciertas áreas (adecuado para un trabajo eficiente, más no significa que no se puedan usar equipos mejores, aunque
                si se tiene equipos mejores para cosas simples, no se les sacará provecho a lo que tenga el equipo).
            </p>
            <!-- ------------------------------------------------------------------------------------------------------------------------------- -->
            <h2>Usos</h2>
            <p>
                Ahora bien, para cumplir con el fin de esta investigación que en resumidas palabras es, informar a quien lea este documento sobre
                los conocimientos esenciales y/o básicos del hardware y software, junto al donde se aplican; hablaremos de los principales puntos
                donde son usados estos equipos, junto a las áreas donde se llegan a ocupar.
            </p>
            <dl>
                <!-- ***************************************************************************************************************************  -->
                <dt>LABORAL</dt>
                <dd>Siendo este el más importante y donde no solo se ocupan, sino que hasta se fabrican; el ámbito laboral llega a
                    ser donde más se le da importancia a los equipos, junto en el cual se le pide mayor rendimiento. Dependiendo de
                    las actividades que se lleguen a realizar es donde se puede necesitar desde lo mínimo hasta el máximo rendimiento;
                    para ello está la siguiente lista con una serie de profesiones donde se ocupan estos equipos y los requerimientos
                    necesarios para poder trabajar de forma adecuada:
                    <ul>
                        <li>Administración: En esta profesión, se llegan a ocupar equipos de cómputo con un hardware no tan demandante,
                            dado que la principal por lo que ocupan las PC es para cuestiones de oficina, como lo es word, excel, power
                            point, BD, inventario, por mencionar algunos. Un equipo de cómputo adecuado partiría desde un procesador
                            Intel Core i3 de segunda generación o Amd Ryzen 3 de segunda generación, de 4 a 6 GB de Ram (8 de ram sería lo recomendado), el almacenamiento
                            unos 500 GB y una motherboard compatible con estos componentes, junto a una fuente de alimentación y/o poder que
                            tenga una calidad eficiente, disipación stock, y los periféricos que serán mouse, teclado, y monitor de las pulgadas que se deseen.
                        </li>
                        <li>Ingenieria: Dependiendo de la ingeniería que se practique es que se buscara un equipo
                            (como se ha estado enfatizando, dependiendo de tus necesidades es lo que buscas); pero
                            generalizando dado que la mayoría de ingenierías usa software que es muy demandante en los
                            requisitos del hardware, partiremos de un equipo con un Intel Core i5 de cuarta o quinta
                            generación o en su equivalente como lo seria un Amd Ryzen 5 de segunda o tercera generación,
                            8GB de Ram como mínimo (16 recomendado), una almacenamiento de 500GB (Puede ser un HDD o SSD o
                            si el presupuesto alcanza ambas) y una motherboard compatible con estos componentes, junto a una
                            fuente de alimentación y/o poder que tenga una calidad eficiente, disipación de torre, y los
                            periféricos que serán mouse, teclado, y monitor de 19 pulgadas en adelante.
                        </li>
                        <li>
                            Pc Gaming: Aunque muchos dirían que no se consideraría de un ámbito laboral, la cuestión es que usarlas para jugar videojuegos,
                            armarlas para venderlas, usarlas para probar juegos que después serán vendidos, etc. las convierten en tanto algo de entretenimiento
                            como laboral; estas son de las que más demandadas son en cuanto a sus componentes, aquí partiremos desde lo más básico para iniciar,
                            que sería; procesador Intel Core i5/i7 de novena generación (o superior), o Amd Ryzen 5/Ryzen 7 de tercera generación (Si te vas por el
                            lado de Intel, comprar una tarjeta gráfica que se adapte a tus necesidades y si te vas por el lado de Amd y tu presupuesto es limitado,
                            comprar el procesador que tenga APU es decir gráficos integrados que sirven bastante bien o de igual manera una tarjeta gráfica), 16Gb de
                            almacenamiento, un SSD (para que se instale en este el software de sistema y los softwares consiguientes) de 240GB y HDD (para almacenar
                            archivos, imágenes, renders, etc.) de 500GB y una motherboard compatible con estos componentes, junto a una fuente de alimentación y/o
                            poder que tenga una calidad eficiente, disipación de torre, y los periféricos que serán mouse, teclado, y monitor de preferencia de 22
                            pulgadas en adelante.
                        </li>
                        <li>Diseño gráfico/edición de video: En este es donde más igual, dependiendo de lo que planees hacer, es lo que necesitas; los requisitos mínimos
                            para iniciar serían desde un procesador Intel Core i7 o Core i9 de decima generación o Amd Ryzen de 5 de quinta generación
                            (o superiores esa generaciones), una tarjeta gráfica que se adapte a lo que van a diseñar (Nvidia quadro o Nvidia RTX 2060 en adelante),
                            8GB de memoria Ram mínimo (de preferencia 16), un SSD (para que se instale en este el software de sistema y
                            los softwares consiguientes) de 240GB y HDD (para almacenar archivos, imágenes, renders, etc.) de 500GB y una
                            motherboard compatible con estos componentes, junto a una fuente de alimentación y/o poder que tenga una calidad eficiente,
                            disipación de torre, y los periféricos que serán mouse, teclado, y monitor de preferencia de 19 pulgadas en adelante.
                        </li>
                    </ul>
                </dd>
                <!-- ***************************************************************************************************************************  -->
                <dt>PERSONAL</dt>
                <dd>En este no haré muchas énfasis dado que como es el ámbito personal, cualquiera de las opciones ya mencionadas o que se mencionan
                    son por las cuales el individuo puede adquirir un equipo, es decir, si el lo desea puede adquirir el equipo que desee y darle los
                    usos que quiera, sacandole o no el mayor rendimiento. En pocas palabras, todo dependera de las necesidades del usuario.
                </dd>
                <!-- ***************************************************************************************************************************  -->
                <dt>ESCOLAR</dt>
                <dd>Estando en la época de pandemia en la que vivimos, un equipo de cómputo en esta área se ha vuelto necesario,
                    por lo cual lo dividiremos en los distintos niveles donde se usan para que sea adecuado a lo que se llegue a adquirir:
                    <ul>
                        <li>Primaria y secundaria: Al ser niveles escolares donde la demanda de PC no es tan alta, y las tareas en esta misma tampoco,
                            un equipo adecuado para empezar podría ir desde un procesador Intel Pentium o AMD Athlon, 4Gb de Ram, de 120Gb de almacenamiento
                            (HDD) y una motherboard compatible con estos componentes, junto a una fuente de alimentación y/o poder que tenga una calidad
                            eficiente, disipación stock, y los periféricos que serán mouse, teclado, y monitor de las pulgadas que se deseen.
                        </li>
                        <li>Bachillerato o Preparatoria: Aquí la demanda depende de la PC depende de si es preparatoria (de ser este el caso un equipo como el
                            de primaria o secundaria estaría bien) o bachillerato, de ser el caso de este, depende si la carrera ahí necesita o no equipo de
                            cómputo específicamente o no; si no lo necesita, con un equipo igual al de primaria estaría bien pero de ser el caso que es una
                            carrera que lo requiere va ir variando dependiendo de las necesidades, aunque podemos partir de un equipo con un procesador Intel
                            Core i3 de segunda generación o Amd Ryzen 3 de segunda generación, de 4 a 6 GB de Ram, el almacenamiento unos 500 GB y una motherboard
                            compatible con estos componentes, junto a una fuente de alimentación y/o poder que tenga una calidad eficiente, disipación stock, y los
                            periféricos que serán mouse, teclado, y monitor de las pulgadas que se deseen.
                        </li>
                        <li>Universidad: Aquí al igual que en el bachillerato dependerá de si la carrera necesita o no un equipo de cómputo, de no ser
                            específicamente necesario un equipo como el del bachillerato o hasta uno como el del área laboral de administración estaría bien;
                            pero de ser el caso que es una carrera donde lo principal a utilizar es una PC, seria recomendable usar un procesador Intel Core i5
                            de cuarta o quinta generación o en su equivalente como lo seria un Amd Ryzen 5 de segunda o tercera generación (una tarjeta grafica
                            seria buena idea si tu carrera lo requiere y/o un procesador con APU), 8GB de Ram como mínimo, una almacenamiento de 500GB (Puede ser
                            un HDD o SSD o si el presupuesto alcanza ambas) y una motherboard compatible con estos componentes, junto a una fuente de alimentación
                            y/o poder que tenga una calidad eficiente, disipación de torre, y los periféricos que serán mouse, teclado, y monitor de 19 pulgadas en
                            adelante.
                        </li>
                    </ul>
                </dd>
            </dl>
            <!-- ------------------------------------------------------------------------------------------------------------------------------- -->
            <h2>Final</h2>
            <p>
                Ahora bien, ya con estos conocimientos ya puede saber lo que, dependiendo de sus necesidades, adquirir; por lo cual tendrá dos opciones para
                disponer de una PC, comprarla ya lista para usarse (si usted opta por está opción, no cometa el grave error de solo querer comprarla en lugares
                como lo son Soriana, Walmart, Sam´s, etc ya que ahi la mayoria de las veces venden equipos con componentes muy viejos o limitados a precios de nuevos)
                o armarla usted mismo, en cualquiera de los casos ya cuenta con la información base para adquirir un equipo. En el caso de que la arme usted mismo,
                le dejare links de como armarla paso a paso (créditos a la persona de ese canal de youtube) e instalarle el software, además de links de compañías que
                se dedican a vender las computadoras a un precio real y adecuado, con componentes actuales (si es que la quiere adquirir ya armada) o bien si la pretende
                armar usted mismo en estas mismas compañías le venden los componentes para hacerlo, algunas de estas compañías incluso cuentan con apartados donde te dicen
                que componentes son compatibles con otros. Espero que esta información sea de su utilidad y agrado (cabe aclarar que en ningún momento maneje precios dado
                que varían del lugar de compra y con las actualizaciones de hardware y software que son recurrentes, no es apto fijar un precio de cada cosa; por ello es
                mejor buscar en ciertos lugares especializados).
            </p>
            <!-- ***************************************************************************************************************************  -->
            <ul>
                Sitios web de las compañias
                <li><a href="https://ddtech.mx/?__cf_chl_tk=ULjpOIDbpscTA74e7hlvF0nvy7NvIyc2OTjkvr6pikg-1671861296-0-gaNycGzNCCU">DDtech</a></li>
                <li><a href="https://grupodecme.com/">Grupo Decme</a></li>
                <li><a href="https://www.cyberpuerta.mx/">Cyberpuerta</a></li>
                <li><a href="https://www.supertienda.mx/">Supertienda MX</a></li>
            </ul>
            <!-- ***************************************************************************************************************************  -->
                <ul>
                    <li class="card mb-4 text-white table-hover table-dark border border-primary aso1">
                        <a href="https://www.youtube.com/watch?v=u1wFMFrVDc8">Armado de PC</a>
                    </li>
                    <li class="card mb-4 text-white table-hover table-dark border border-primary aso1">
                        <a href="https://www.youtube.com/watch?v=StCsw25MUEM">Video de instalación de software</a>
                    </li>
                </ul>
        </div>
    </div>
    <!-- fin grid  -->

    <!-- inicio footer -->
    <?php
    include 'includes/footer.php';
    ?>
    <!-- fin footer -->

    <!-- archivos js -->
    <?php
    include 'includes/scripts.php';
    ?>
    <!-- fin archivos js -->
    </body>

    </html>