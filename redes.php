<?php $nombrePagina = 'Redes de computadora'; ?>

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
            <h1>Introducción a las redes (La comunicación con redes, La red como plataforma, Arquitectura de Internet,
                LAN (Red de área local), WAN (Red de área amplia) e Inter redes.)
            </h1>
        </div>
    </div>
</div>
<div class="text">
    <p>En está página podras obtener los conocimientos básicos/fundamentos de las redes de computadora</p>
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
            <h2>La comunicación con redes</h2>
            <p>Podemos definirla como un conjunto de dispositivos conectados entre sí que permiten a las personas compartir información, servicios y recursos.
                Hoy en día los seres humanos dependemos enormemente de las redes de datos o redes de computadores debido a que estas permiten que estemos
                comunicados la mayor parte del tiempo.
                Recordemos que para los seres humanos la necesidad de interactuar y comunicarse entre sí son elementos esenciales para la existencia,
                y estas formas de comunicarnos e interactuar están en constante cambio y evolución; es por esto que las personas apoyadas en el uso de
                la tecnología y las telecomunicaciones han cambiado la forma de interactuar disminuyendo así la brecha digital que años atrás existía
                para podernos comunicar.
                Es inevitable observar la forma como Internet Red de redes, que conecta de forma descentralizada millones de computadores
                utilizando un grupo de protocolos conocidos como TCP/IP. se volvió parte fundamental de nuestra rutina cotidiana, los millones de
                dispositivos interconectados que abarca Internet son transparentes para los usuarios que hacen de Internet una parte esencial para sus
                vidas, y es así como en el transcurso de un día normal, los recursos disponibles en Internet pueden ayudar a las personas a:
                Decidir cómo vestirse, basados en consultas de los pronósticos del clima.
                Decidir la ruta menos congestionada del trabajo usando herramientas que informan sobre el tráfico.
                Consultar nuestras cuentas bancarias o realizar compras y pagos a través de la red.
                Enviar y recibir correos electrónicos, o realizar llamadas a través de Internet Red de redes, que conecta de
                forma descentralizada millones de computadores utilizando un grupo de protocolos conocidos como TCP/IP.
                Consultar recetas de cocina en línea para hacer el almuerzo o la cena del día.
                Consultar al médico o sitios especializados en medicina para obtener información sobre nutrición o cura de enfermedades.
            </p>
        </div>
        <!-- ------------------------------------------------------------------------------------------------------------------------------- -->
        <hr>
        <div class="my-5 text-center px-5 animated wow bounceInRight slow" data-wow-delay="400ms">
            <i class="fas fa-cloud-showers-heavy fa-3x pt-3" style="color: #02E301;"></i>
            <h2>La red como plataforma</h2>
            <p>Poder comunicarse en forma confiable con todos en todas partes es de vital importancia para nuestra vida personal y comercial.
                Para respaldar el envío inmediato de los millones de mensajes que se intercambian entre las personas de todo el mundo, confiamos
                en una Web de redes interconectadas.
                Poder comunicarse en forma confiable con todos en todas partes es de vital importancia para nuestra vida personal y comercial.
                Para respaldar el envío inmediato de los millones de mensajes que se intercambian entre las personas de todo el mundo, confiamos
                en una Web de redes interconectadas. Estas redes de información o datos varían en tamaño y capacidad, pero todas las redes tienen
                cuatro elementos básicos en común:
                Reglas o acuerdos que rigen la forma en que se envían, dirigen, reciben e interpretan los mensajes
                Los mensajes o unidades de información que viajan de un dispositivo a otro
                Un medio para interconectar estos dispositivos: un medio que puede transportar los mensajes de un dispositivo a otro
                Dispositivos en la red que intercambian mensajes unos con otros
                La estandarización de varios elementos de la red permite que trabajen juntos el equipo y los dispositivos creados por
                diferentes compañías. Los expertos en diversas tecnologías pueden contribuir con las mejores ideas para desarrollar una red eficiente,
                sin tener en cuenta la marca o el fabricante del equipo.
            </p>
        </div>
        <!-- ------------------------------------------------------------------------------------------------------------------------------- -->
        <hr>
        <div class="my-5 text-center px-5 animated wow bounceInRight slow" data-wow-delay="400ms">
            <i class="fas fa-cloud-showers-heavy fa-3x pt-3" style="color: #02E301;"></i>
            <h2>LAN (Red de área local), WAN (Red de área amplia) e Inter redes.)</h2>
            <img src="img/lanwan.png" alt="">
        </div>
        <!-- ------------------------------------------------------------------------------------------------------------------------------- -->
        <hr>
        <div class="my-5 text-center px-5 animated wow bounceInRight slow" data-wow-delay="400ms">
            <i class="fas fa-cloud-showers-heavy fa-3x pt-3" style="color: #02E301;"></i>
            <h2>Protocolos de Capas Superiores y Capa de Transporte (Aplicaciones: La interfaz entre redes, Toma de medidas para las aplicaciones y Servicios,
                Protocolo TCP: Comunicación con confiabilidad, Protocolo UDP: Comunicación con baja sobrecarga)
            </h2>
            <dl>
                <dt>Aplicaciones: La interfaz entre redes</dt>
                <dd>La interfaz entre redes Modelo OSI y modelo TCP/IP El modelo de referencia de interconexión de sistemas abiertos es una representación
                    abstracta en capas, creada como guía para el diseño del protocolo de red. El modelo OSI divide el proceso de networking en diferentes
                    capas lógicas, cada una de las cuales tiene una única funcionalidad y a la cual se le asignan protocolos y servicios específicos.
                    La información se pasa de una capa a otra, comenzando en la capa de Aplicación en el host de transmisión, siguiendo por la jerarquía hacia
                    la capa Física, pasando por el canal de comunicaciones al host de destino, donde la información vuelve a la jerarquía y termina en la capa
                    de Aplicación.
                    La capa de Aplicación, Capa siete, es la capa superior de los modelos OSI y TCP/IP. Es la capa que proporciona la interfaz entre las
                    aplicaciones que utilizamos para comunicarnos y la red subyacente en la cual se transmiten los mensajes. Los protocolos de capa de aplicación
                    se utilizan para intercambiar los datos entre los programas que se ejecutan en los hosts de origen y destino. Existen muchos protocolos de
                    capa de aplicación y siempre se desarrollan protocolos nuevos.
                </dd>
                <dt>Toma de medidas para las aplicaciones y Servicios</dt>
                <dd>La forma que adopta una sección de datos en cualquier capa se denomina Unidad de datos del protocolo (PDU). Durante la encapsulación,
                    cada capa encapsula las PDU que recibe de la capa inferior de acuerdo con el protocolo que se utiliza. En cada etapa del proceso, una
                    PDU tiene un nombre distinto para reflejar su nuevo aspecto. Aunque no existe una convención universal de nombres para las PDU, en este
                    curso se denominan de acuerdo con los protocolos de la suite TCP/IP.
                    <ul>
                        <li>Datos: el término general para las PDU que se utilizan en la capa de aplicación.</li>
                        <li>Segmento: PDU de la capa de transporte.</li>
                        <li>Paquete: PDU de la capa de Internetwork.</li>
                        <li>Trama: PDU de la capa de acceso a la red.</li>
                        <li>Bits: una PDU que se utiliza cuando se transmiten físicamente datos a través de un medio.</li>
                    </ul>
                </dd>
                <dt>Protocolo TCP: Comunicación con confiabilidad</dt>
                <dd>Transmission Control Protocol (TCP) es uno de los protocolos fundamentales en Internet. Fue creado entre los años 1973 y 1974 por Vint Cerf
                    y Robert Kahn.
                    Muchos programas dentro de una red de datos compuesta por computadoras, pueden usar TCP para crear conexiones entre ellos a
                    través de las cuales puede enviarse un flujo de datos. El protocolo garantiza que los datos serán entregados en su destino sin
                    errores y en el mismo orden en que se transmitieron. También proporciona un mecanismo para distinguir distintas aplicaciones
                    dentro de una misma máquina, a través del concepto de puerto.
                    TCP da soporte a muchas de las aplicaciones más populares de Internet (navegadores, intercambio de ficheros, programas de
                    mensajería, etc.) y protocolos de aplicación como HTTP, SMTP, SSH y FTP.
                    El protocolo TCP está documentado en el RFC 793 de la IETF, y sus principales características técnicas son:
                    <ul>
                        <li>ORIENTADO A LA CONEXIÓN: dos computadoras establecen una conexión para intercambiar datos. Los sistemas de los extremos
                            se sincronizan con el otro para manejar el flujo de paquetes y adaptarse a la congestión de la red.
                        </li>
                        <li>OPERACIÓN FULL-DÚPLEX: una conexión TCP es un par de circuitos virtuales, cada uno en una dirección. Sólo los dos sistemas
                            finales sincronizados pueden usar la conexión.
                        </li>
                        <li>
                            REVISIÓN DE ERRORES: una técnica de checksum es usada para verificar que los paquetes no estén corruptos.
                        </li>
                        <li>
                            ACUSES DE RECIBO: sobre recibo de uno o más paquetes, el receptor regresa un acuse de recibido, al transmisor
                            indicando que recibió los paquetes. Si los paquetes no son notificados, el transmisor puede reenviar los paquetes
                            o terminar la conexión si el transmisor cree que el receptor no está más en la conexión.
                        </li>
                        <li>
                            CONTROL DE FLUJO: si el transmisor está desbordando el buffer del receptor por transmitir demasiado rápido, el receptor descarta paquetes.
                            Los acuses fallidos que llegan al transmisor le alertan para bajar la tasa de transferencia o dejar de transmitir.
                        </li>
                        <li>SERVICIO DE RECUPERACIÓN DE PAQUETES: el receptor puede pedir la retransmisión de un paquete. Si el paquete no es notificado como
                            recibido (ACK), el transmisor envía de nuevo el paquete.
                        </li>
                    </ul>
                </dd>
                <dt>Protocolo UDP: Comunicación con baja sobrecarga</dt>
                <dd>UDP (User Datagram Protocol) es un protocolo simple que provee las funciones básicas de la capa de transporte.
                    Tiene una sobrecarga mucho menor que el TCP, ya que no está orientado a la conexión y no proporciona mecanismos
                    sofisticados de retransmisión, secuenciamiento y flujo de control.
                    Esto no significa que las aplicaciones que utilizan UDP no son siempre poco confiables. Sólo quiere decir que
                    estas funciones no las contempla el protocolo de la capa de transporte y se deben implementar aparte, si fuera necesario.
                    Pese a que es relativamente baja la cantidad total de tráfico UDP que puede encontrarse en una red típica, los
                    protocolos clave de la capa de aplicación que utiliza UDP incluyen:
                    <ul>
                        <li>Sistema de nombres de dominio (DNS)</li>
                        <li>Protocolo simple de administración de red (SNMP, Simple Network Management Protocol)</li>
                        <li>Protocolo de configuración dinámica de host (DHCP)</li>
                        <li>Protocolo de información de enrutamiento (RIP)</li>
                        <li>Protocolo de transferencia de archivos trivial (TFTP)</li>
                        <li>Juegos en línea</li>
                    </ul>
                    Algunas aplicaciones, tales como los juegos en línea o VoIP, pueden tolerar la pérdida de algunos datos. Si estas
                    aplicaciones utilizan TCP, experimentaron largas demoras, ya que TCP detecta la pérdida de datos y los retransmite.
                    Estas demoras serían más perjudiciales para la aplicación que las pequeñas pérdidas de datos. Algunas aplicaciones,
                    como DNS, simplemente vuelven a intentar la solicitud si no reciben una respuesta y, por lo tanto, no necesitan el
                    TCP para garantizar la entrega del mensaje.
                </dd>
                <dt>Capa de Red y Direccionamiento de la Red: IPv4 e IPV6 (IPv4, IPV6</dt>
                <h3>IPv4</h3>
                <dd>Internet Protocol Version 4 (IPv4) denota la cuarta versión del Protocolo de Internet (IP) que se introdujo en el
                    marco de Arpanet en 1983. IP significa Protocolo de Internet, mientras que v4 representa la Versión Cuatro.
                    El Protocolo de Internet (IP) es un valor numérico único asignado a los dispositivos conectados a una red para facilitar la comunicación.
                    Este modelo todavía enruta la mayoría del tráfico de Internet, pero está al borde del agotamiento. La dirección se compone de enteros
                    de 32 bits expresados como notaciones hexadecimales. Esto hace un total de aproximadamente 4,3 billones de direcciones IPv4.
                    Un buen ejemplo de una dirección IPv4 es 192.168.1.1.
                    <li>Componentes IPV4</li>
                    Las direcciones IPv4 están formadas por la red y el host. La red y el host dependen del prefijo. Prefijo=/16
                    Ejemplo de una Mask-255.255.255.0.0.
                    <li>Red</li>
                    Esta parte representa un identificador numérico único que se asigna a su red. La clase de red se identifica por esta parte.
                    <li>Host</li>
                    La segunda parte de la dirección IPv4 se asigna a los hosts de tu red. Es un identificador de hardware único. En cada dirección
                    IP existente en una red, la parte de red es la misma, pero el host debe ser diferente.
                    <li>Propiedades y Características de IPv4</li>
                    Dirección de 32 bits con caracteres numéricos separados por puntos.
                    Utiliza el protocolo de resolución de direcciones post en la asignación de direcciones mac.
                    12 campos de encabezado.
                    Contiene el estilo de direcciones de unidifusión, multidifusión y difusión.
                    <li>Ventajas y desventajas de IPv4</li>
                    Ventajas
                    <br>
                    Enrutamiento escalable y económico
                    Asignación significativa de la red
                    IPv4 ofrece cifrado para aumentar la privacidad y la seguridad de la red
                    Las direcciones IPv4 facilitan una codificación impecable
                    Especificidad en las comunicaciones, especialmente en las organizaciones de multidifusión
                    Fácil conexión de varios dispositivos a través de una red de gran tamaño.
                    Desventajas
                    <br>
                    Las direcciones IPv4 están al borde del agotamiento
                    Altos precios de gestión de sistemas, complejos y lentos. También requieren mucha mano de obra
                    Enrutamiento de Internet insuficiente
                    Elementos de seguridad no obligatorios.
                </dd>
                <h3>Ipv6</h3>
                <dd>El uso de IPv6 no deja de crecer cada año y se ha convertido en la opción predeterminada en varias configuraciones de red nuevas.
                    Ser un líder en IPv6 aporta experiencia para administrar y entregar aplicaciones en redes modernas. AWS permite diseñar y desplegar
                    un entorno global que aprovecha la conectividad IPv6 de extremo a extremo. Es posible alojar aplicaciones en entornos de redes
                    virtuales de doble pila y exclusivos para IPv6, así como proporcionar conectividad a través de IPv6 en las VPC de Amazon y hacia y
                    desde Internet. Hemos admitido IPv6 en AWS desde 2011. Además, a partir de 2021, disponemos de capacidades de exclusividad para IPv6,
                    como subredes e instancias de EC2 exclusivas para IPv6, puertas de enlace NAT que admiten la traducción de IPv6 a IPv4, equilibradores
                    de carga elásticos con destinos IPv6, compatibilidad de Amazon EKS con IPv6, entre otros. Estas características permiten generar resultados
                    empresariales mediante la creación de arquitecturas altamente escalables en IPv6, a la vez que se mantiene la compatibilidad con versiones
                    anteriores de las cargas de trabajo de IPv4 existentes.
                    <li>Beneficios</li>
                    Arquitectura simplificada y costos reducidos
                    IPv6 en AWS simplifica la arquitectura web al reducir al mínimo la necesidad de mecanismos de traducción. También hace que no sean
                    necesarias arquitecturas complejas creadas con direcciones IPv4 privadas para poder trabajar con direcciones IPv4 públicas limitadas.
                    <li>Escalar más allá de la limitación del espacio IPv4</li>
                    Ahora la posibilidad de escalar la aplicación en AWS ya no está limitada por la cantidad de direcciones IPv4 de la VPC.
                    Al utilizar IPv6, puede asignar rangos de IP contiguos fáciles de administrar a los microservicios y así conseguir escalar de forma
                    prácticamente ilimitada las aplicaciones en las VPC.
                    <li>Amplíe su alcance global</li>
                    La cantidad de dispositivos que se conectan a Internet es cada vez mayor, y muchos de estos dispositivos utilizan direcciones IPv6.
                    Al permitir que las aplicaciones en AWS sean compatibles con IPv6, podrá utilizar IPv6 nativo de extremo a extremo.
                </dd>
                <dt>Redes: División de dispositivos en grupos</dt>
                <dd>Una de las principales funciones de la capa de red es proporcionar un mecanismo para direccionar hosts. A medida
                    que crece la cantidad de hosts de la red, se requiere más planificación para administrar y direccionar la red.
                    Los problemas comunes con las redes grandes son:
                    <ul>
                        <li>Degradación del rendimiento</li>
                        <li>Problemas de seguridad</li>
                        <li>Administración de direcciones</li>
                    </ul>
                    Mejora del rendimiento :Grandes cantidades de hosts conectados a una sola red pueden producir volúmenes de tráfico de datos que pueden extender,
                    sin saturar, los recursos de red como la capacidad de ancho de banda y enrutamiento.
                    La división de grandes redes para que los host que necesitan comunicarse estén agrupados reduce el tráfico a través de las internetworks.
                    Además de las comunicaciones de datos reales entre los hosts, la administración de la red y el tráfico de control (sobrecarga) también aumentan
                    con la cantidad de hosts. Los factores que contribuyen de manera significativa con esta sobrecarga pueden ser los broadcasts de red.
                    Un broadcast es un mensaje desde un host hacia todos los otros hosts en la red. Comúnmente, un host inicia un broadcast cuando se requiere
                    información sobre otro host desconocido. Los broadcasts son una herramienta necesaria y útil utilizada por protocolos para permitir la
                    comunicación de datos en redes. Sin embargo, grandes cantidades de hosts generan grandes cantidades de broadcasts que consumen el ancho de
                    banda de la red. Y como los otros hosts tienen que procesar el paquete de broadcast que reciben, las otras funciones productivas que un host
                    realiza también se interrumpen o degradan.
                    Los broadcasts se contienen dentro de una red. En este contexto, a una red también se la conoce como un dominio de broadcast. La administración
                    del tamaño de los dominios de broadcast al dividir una red en subredes asegura que el rendimiento de la red y de los host no se degrade hasta
                    niveles inaceptables.
                </dd>
                <dt>Procesos de enrutamiento</dt>
                <dd>
                    El enrutamiento requiere que cada salto o router a lo largo de las rutas hacia el destino del paquete tenga una ruta para reenviar el paquete.
                    De otra manera, el paquete es descartado en ese salto. Cada router en una ruta no necesita una ruta hacia todas las redes. Sólo necesita conocer
                    el siguiente salto en la ruta hacia la red de destino del paquete.
                    El enrutamiento requiere que cada salto o router a lo largo de las rutas hacia el destino del paquete tenga una ruta para reenviar el paquete.
                    De otra manera, el paquete es descartado en ese salto. Cada router en una ruta no necesita una ruta hacia todas las redes. Sólo necesita conocer
                    el siguiente salto en la ruta hacia la red de destino del paquete.
                    La tabla de enrutamiento contiene información que un router usa en sus decisiones al reenviar paquetes. Para las decisiones de enrutamiento,
                    la tabla de enrutamiento necesita representar el estado más preciso de rutas de red a las que el router puede acceder. La información de
                    enrutamiento desactualizada significa que los paquetes no pueden enviarse al siguiente salto más adecuado, lo que causa demoras o pérdidas de paquetes.
                    Esta información de ruta puede configurarse manualmente en el router o aprenderse dinámicamente a partir de otros routers en la misma internetwork.
                    Después de que se configuran las interfaces de un router y éstas se vuelven operativas, se instala la red asociada con cada interfaz en la tabla
                    de enrutamiento como una ruta conectada directamente.
                </dd>
                <dt>Capa de enlace de datos: acceso al medio</dt>
                <dd>La capa de enlace de datos proporciona un medio para intercambiar datos a través de medios locales comunes. La capa de enlace de datos
                    realiza dos servicios básicos:
                    <ul>
                        <li>Permite a las capas superiores acceder a los medios usando técnicas como tramas. </li>
                        <li>Controla cómo se ubican los datos en los medios y cómo se reciben desde los medios usando técnicas como el control de acceso
                            a los medios y la detección de errores
                        </li>
                    </ul>
                    Los protocolos de la Capa 2 especifican la encapsulación de un paquete en una trama y las técnicas para colocar y sacar el paquete
                    encapsulado de cada medio. La técnica utilizada para colocar y sacar la trama de los medios se llama método de control de acceso al medio.
                    Para que los datos se transfieran a lo largo de una cantidad de medios diferentes, puede que se requieren diferentes métodos de control de
                    acceso a los medios durante el curso de una única comunicación.
                    Cada entorno de red que los paquetes encuentran cuando viajan desde un host local hasta un host remoto puede tener características diferentes.
                    Por ejemplo: un entorno de red puede componerse de muchos hosts disputando el acceso a un medio de red de forma ad hoc. Otro entorno puede
                    componerse de una conexión directa entre sólo dos dispositivos sobre los cuales fluyen los datos de manera secuencial como bits de manera ordenada.
                    Los métodos de control de acceso a los medios que se describen en los protocolos de capa de enlace de datos definen los procesos por los
                    cuales los dispositivos de red pueden acceder a los medios de red y transmitir tramas en diferentes entornos de red.
                    Un nodo que es un dispositivo final utiliza un adaptador para hacer la conexión a la red. Por ejemplo: para conectarse a una LAN, el
                    dispositivo usaría la tarjeta de interfaz de red (NIC) para conectarse a los medios LAN. El adaptador administra la trama y el control
                    de acceso a los medios (MAC).
                </dd>
                <dt>Técnicas de control de acceso al medio</dt>
                <dd>
                    La regulación de la colocación de tramas de datos en los medios es conocida como control de acceso al medio.
                    Entre las diferentes implementaciones de los protocolos de la capa de enlace de datos, hay diferentes métodos de control de acceso a
                    los medios. Estas técnicas de control de acceso a los medios definen si los nodos comparten los medios y de qué manera lo hacen.
                    Algunas topologías de la red comparten un medio común con varios nodos. En cualquier momento puede haber una cantidad de dispositivos
                    que intentan enviar y recibir datos utilizando los medios de red. Hay reglas que rigen cómo esos dispositivos comparten los medios.
                    Hay dos métodos básicos de control de acceso para medios compartidos:
                    <ul>
                        <li>Controlado: cada nodo tiene su propio tiempo para utilizar el medio</li>
                        <li>Con base en la contención: todos los nodos compiten por el uso del medio</li>
                    </ul>
                </dd>
                <dt>Direccionamiento del control de acceso al medio y tramado de datos</dt>
                <dd>
                    Recuerde que a pesar de que hay muchos protocolos de capa de enlace de datos diferentes que describen las tramas de la capa de enlace de
                    datos, cada tipo de trama tiene tres partes básicas:
                    <ul>
                        <li>Encabezado</li>
                        <li>Datos</li>
                        <li>Tráiler</li>
                    </ul>
                    La capa de enlace de datos proporciona direccionamiento que se utiliza para transportar la trama a través de los medios locales compartidos.
                    Las direcciones de dispositivo en esta capa se llaman direcciones físicas. El direccionamiento de la capa de enlace de datos está contenido en
                    el encabezado de la trama y especifica el nodo de destino de la trama en la red local. El encabezado de la trama también puede contener la
                    dirección de origen de la trama.
                    A diferencia de las direcciones lógicas de la Capa 3 que son jerárquicas, las direcciones físicas no indican en qué red está ubicado el dispositivo.
                    Si el dispositivo se traslada a otra red o subred, sigue funcionando con la misma dirección física de la Capa 2.
                    Debido a que la trama sólo se utiliza para transportar datos entre nodos a través del medio local, la dirección de la capa de enlace de datos
                    sólo se utiliza para entregas locales. Las direcciones en esta capa no tienen significado más allá de la red local. Compare esto con la Capa 3,
                    en donde las direcciones en el encabezado del paquete pasan del host de origen al host de destino sin tener en cuenta la cantidad de saltos de
                    redes a lo largo de la ruta.
                    Si el paquete en la trama debe pasar a otro segmento de la red, el dispositivo intermediario (un router) desencapsula la trama original,
                    crea una nueva trama para el paquete y la envía al nuevo segmento. La nueva trama usa el direccionamiento de origen y de destino según sea
                    necesario para transportar el paquete a través del nuevo medio.
                    Si el paquete en la trama debe pasar a otro segmento de la red, el dispositivo intermediario (un router) desencapsula la trama original,
                    crea una nueva trama para el paquete y la envía al nuevo segmento. La nueva trama usa el direccionamiento de origen y de destino según sea
                    necesario para transportar el paquete a través del nuevo medio.
                    <li>Requisitos de direccionamiento</li>
                    La necesidad de direccionamiento de la capa de enlace de datos en esta capa depende de la topología lógica.
                    Las topologías punto a punto, con sólo dos nodos interconectados, no requieren direccionamiento. Una vez en el medio,
                    la trama sólo tiene un lugar al cual puede ir.
                    Debido a que las topologías de anillo y de acceso múltiple pueden conectar muchos nodos en un medio común, se requiere
                    direccionamiento para estas tipologías. Cuando una trama alcanza cada nodo en la topología, el nodo examina la dirección de
                    destino en el encabezado para determinar si es el destino de la trama.
                </dd>
                <dt>Descripción general de los tipos de Ethernet.</dt>
                <dd>
                    Ethernet es un enlace de datos y un protocolo de capa física definido por la especificación IEEE 802.3 ™.
                    Viene en muchos sabores, definidos por la tasa de bits máxima, modo de transmisión y medio de transmisión física:
                    <ul>
                        <li>Velocidad máxima de bits (Mbits / s): 10, 100, 1000, etc.</li>
                        <li>Modo de transmisión: banda ancha, banda base.</li>
                        <li>Medio de transmisión física: coaxial, fibra, UTP, etc.</li>
                    </ul>
                </dd>
                <dt>La trama de los diferentes tipos de Ethernet.</dt>
                <dd>
                    El estándar Ethernet original definió el tamaño mínimo de trama en 64 bytes y el tamaño máximo de trama en 1518 bytes.
                    Esto incluye todos los bytes del campo Dirección MAC de destino a través del campo Secuencia de verificación de trama (FCS).
                    Los campos Preámbulo y Delimitador de inicio de trama no se incluyen en la descripción del tamaño de una trama. El estándar
                    IEEE 802.3ac, publicado en 1998, amplió el tamaño de trama máximo permitido a 1522 bytes. Se aumentó el tamaño de la trama
                    para que se adapte a una tecnología denominada Red de área local virtual (VLAN). Las VLAN se crean dentro de una red conmutada.
                    Si el tamaño de una trama transmitida es menor que el mínimo o mayor que el máximo, el dispositivo receptor descarta la trama.
                    Es posible que las tramas descartadas se originen en colisiones u otras señales no deseadas y, por lo tanto, se consideran no válidas.
                </dd>
                <dt>Capa Física de Ethernet.</dt>
                <dd>
                    Ethernet opera a través de dos capas del modelo OSI. El modelo ofrece una referencia sobre con qué puede relacionarse Ethernet,
                    pero en realidad se implementa sólo en la mitad inferior de la capa de Enlace de datos, que se conoce como subcapa Control de acceso
                    al medio (Media Access Control, MAC), y la capa física.
                    Ethernet en la Capa 1 implica señales, streams de bits que se transportan en los medios, componentes físicos que transmiten las señales
                    a los medios y distintas topologías. La Capa 1 de Ethernet tiene un papel clave en la comunicación que se produce entre los dispositivos,
                    pero cada una de estas funciones tiene limitaciones.
                    Tal como lo muestra la figura, Ethernet en la Capa 2 se ocupa de estas limitaciones. Las subcapas de enlace de datos contribuyen
                    significativamente a la compatibilidad de tecnología y la comunicación con la computadora. La subcapa MAC se ocupa de los componentes
                    físicos que se utilizarán para comunicar la información y preparar los datos para transmitirlos a través de los medios.
                    La subcapa Control de enlace lógico (Logical Link Control, LLC) sigue siendo relativamente independiente del equipo físico que se utilizará
                    para el proceso de comunicación.
                </dd>
                <dt>Interconexiones de dispositivos.</dt>
                <dd>
                    <ul>
                        <li>El repetidor: El repetidor es una máquina de red que regenera la señal eléctrica que le llega, con el fin de restituir
                            su nivel original y así evitar los problemas que se pudieran producir por una excesiva atenuación.
                        </li>
                        <li>
                            El puente o Bridge: El puente es una máquina de red que posee alguna inteligencia, ya que debe almacenar y expedir las tramas
                            que le llegan por sus puertos en función del contenido de las mismas. Por tanto, son pequeños microordenadores que realizan
                            una serie de operaciones básicas en la red.
                        </li>
                    </ul>
                    Un dispositivo de interconexión de redes es un término ampliamente utilizado para cualquier hardware que conecte diferentes recursos de red.
                    Los dispositivos clave que comprenden una red son conmutadores, enrutadores, bridge (puentes), repetidores y puertas de enlace.
                    Todos los dispositivos tienen características de alcance por separado, según los requisitos y escenarios de la red. Los siguientes son
                    escenarios de interconexión:
                    <ul>
                        <li>Una sola LAN</li>
                        <li>Dos LAN conectadas entre sí (LAN-LAN)</li>
                        <li>Una LAN conectada a una WAN (LAN-WAN)</li>
                        <li>Dos LAN conectadas a través de una WAN (LAN-WAN-LAN)</li>
                    </ul>
                    Las características importantes de los repetidores son las siguientes:
                    <ul>
                        <li>Conectar diferentes segmentos de red de una LAN</li>
                        <li>Reenviar cada paquete que recibe</li>
                        <li>Un repetidor es un regenerador, no un amplificador</li>
                        <li>Los repetidores operan en la capa física del modelo OSI</li>
                    </ul>
                </dd>
                <dt>Monitoreo y documentación de redes.</dt>
                <dd>
                    El término monitoreo de red describe el uso de un sistema que constantemente monitoriza una red de computadoras en busca de componentes
                    defectuosos o lentos, para luego informar a los administradores de redes mediante correo electrónico u otras alarmas. Es un subconjunto
                    de funciones de la administración de redes.
                    Un sistema de monitoreo de red busca problemas causados por la sobrecarga y/o fallas en servidores, routers, switches u otros dispositivos.
                    Debido a la importancia que representa conocer de antemano cualquier problema que exista dentro de un dispositivo, los sistemas suelen
                    reportar inmediatamente de las incidencias por diferentes métodos ya sea vía E-Mail, SMS, Teléfonos, etc.
                    Además del estado de la conexión de un dispositivo es común monitorear algunos aspectos adicionales tales como:
                    <ul>
                        <li>Utilización de interfaces de red.</li>
                        <li>Carga de CPU.</li>
                        <li>Uso de Memoria RAM.</li>
                        <li>Uso de Disco Duro</li>
                        <li>Tiempo de respuesta del equipo.</li>
                    </ul>
                    Para el proceso de selección de la solución correcta para el monitoreo de red, se pueden considerar los siguientes puntos
                    de evaluación de un sistema de monitoreo:
                    <ul>
                        <li>Comunicación de las alertas.</li>
                        <li>Integración con servidores externos.</li>
                        <li>Claridad en la presentación de datos en el panel.</li>
                        <li>Flexibilidad a la hora de adaptarse a herramientas o software particulares.</li>
                        <li>API de acceso desde sistemas externos.</li>
                        <li>Detección de dispositivos de forma automática.</li>
                        <li>Integraciones con Bases de Datos.</li>
                        <li>Escalable.</li>
                        <li>Capacidad de soportar diversos métodos de adquisición de datos.</li>
                        <li>Seguridad.</li>
                        <li>Integración con máquinas virtuales.</li>
                        <li>Integración con diversos tipos, marcas, modelos de hardware.</li>
                        <li>Inventario de Hardware y Software.</li>
                        <li>Monitorización de la nube.</li>
                        <li>Relación costo – beneficio.</li>
                        <li>Documentación, grupos de ayuda.</li>
                    </ul>
                </dd>
            </dl>
        </div>
    </div>
    <!-- fin grid -->

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