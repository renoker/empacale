@extends('layouts.main')
@section('title', 'Maruchan - Faqs')
@section('back', 'back_faqs')

@section('content')
    <div class="content_faqs">
        <input type="hidden" id="url" value="{{ url('') }}">
        <div class="cont_imgen_titulo">
            <img src="{{ url('assets/images/faqs/titulo.png') }}" class="img_titulo" alt="">
            <h6 class="texto_small"></h6>
            <div class="content_faqs relative">
                <div class="cont_f">
                    <div class="content_item">
                        <div class="partTexto">
                            <input type="hidden" value="{{ $now }}">
                            <img src="{{ url('assets/images/faqs/pregunta2.png') }}" class="mas" alt=""
                                id="img_1" onclick="openFaqs(1)">
                            <span>¿Cómo participo en Empácale con Maruchan?</span>
                        </div>
                        <div class="partDescripcion">
                            <p id="text_1">
                                - Regístrate en empacale.maruchan.com.mx y crea tu cuenta, posteriormente registra el código
                                lote de tu Maruchan favorita para poder jugar, la cual te dará 3 oportunidades para empacar
                                tu maleta. En caso de perderlas, deberás registrar otro código LOTE para seguir jugando, sin
                                embargo, los puntos no son acumulables en las 3 sesiones.
                                <br>
                                - Una vez iniciado el juego, deberás arrastrar todos los elementos que estén en la lista
                                para empacarlos en la maleta, cada uno tiene un valor de 5 puntos. Los objetos serán
                                relacionados al destino que corresponda cada semana, así que si ves algunos que no tienen
                                nada que ver no los toques ya que te restarán 5 puntos y esto puede hacerte perder tus 3
                                oportunidades de juego. La participación será válida una vez que completes la lista.
                                <br>
                                - Los objetos irán pasando más y más rápido conforme pasa el tiempo. Cada 5 objetos de la
                                lista correctos metidos en la maleta aumentará la velocidad en la que aparezcan los objetos.
                                Una vez que hayas metido los objetos de la lista y cerrado la maleta, se terminará tu
                                participación y tendrás tu puntaje final y tiempo.
                                <br>
                                - Existen PRODUCTOS Maruchan dorados que darán puntos extra por su valor superior a los
                                otros, los cuales son:
                                <br>
                                <br>
                                &#9679; Maruchan Instant Lunch: 10 puntos.
                                <br>
                                &#9679; Maruchan Ramen: 20 puntos.
                                <br>
                                &#9679; Maruchan Bowl: 30 puntos.
                                <br>
                                &#9679; Maruchan Yakisoba 40 puntos.
                                <br>
                                &#9679; Ottima Pasta: 50 puntos.

                            </p>
                        </div>
                    </div>

                    <div class="content_item m">
                        <div class="partTexto">
                            <img src="{{ url('assets/images/faqs/pregunta2.png') }}" class="mas" alt=""
                                id="img_2" onclick="openFaqs(2)">
                            <span>¿Cuál es la vigencia de la promoción?</span>
                        </div>
                        <div class="partDescripcion">
                            <p id="text_2">
                                Del 22 de julio al 18 de agosto del 2024.
                            </p>
                        </div>
                    </div>

                    <div class="content_item m">
                        <div class="partTexto">
                            <img src="{{ url('assets/images/faqs/pregunta2.png') }}" class="mas" alt=""
                                id="img_3" onclick="openFaqs(3)">
                            <span>¿Cómo sé qué destino toca cada semana?</span>
                        </div>
                        <div class="partDescripcion">
                            <p id="text_3">
                                En el sitio web de la promoción empacale.aruchan.com.mx y en nuestras redes sociales,
                                estaremos comunicando el destino que corresponde a cada semana, para que la lista de objetos
                                a empacar te haga sentido con el lugar a visitar.
                            </p>
                        </div>
                    </div>

                    <div class="content_item m">
                        <div class="partTexto">
                            <img src="{{ url('assets/images/faqs/pregunta2.png') }}" class="mas" alt=""
                                id="img_4" onclick="openFaqs(4)">
                            <span>¿Cuáles son los destinos por semana?</span>
                        </div>
                        <div class="partDescripcion">
                            <p id="text_4">
                                - Semana 1 – Playa
                                <br>
                                - Semana 2 – Pueblo Mágico
                                <br>
                                - Semana 3 – Campamento
                                <br>
                                - Semana 4 – Destino Urbano/ciudad

                            </p>
                        </div>
                    </div>

                    <div class="content_item m">
                        <div class="partTexto">
                            <img src="{{ url('assets/images/faqs/pregunta2.png') }}" class="mas" alt=""
                                id="img_5" onclick="openFaqs(5)">
                            <span>¿Cómo puedo iniciar a jugar?</span>
                        </div>
                        <div class="partDescripcion">
                            <p id="text_5">
                                Después de registrar el código lote de tu Maruchan favorita, podrás jugar con 3
                                oportunidades, arrastrando los elementos que correspondan a la lista mostrada a la maleta.
                                Cada 5 objetos correctos la velocidad aumentará para dificultar el nivel, así que pon
                                atención porque será más fácil que empaques objetos rojos que no están dentro de la lista y
                                te restarán 5 puntos. Si encuentras productos dorados Maruchan, arrástralos a tu maleta ya
                                que te darán más puntos.
                                Si se te acaban las 3 oportunidades de jugar por empacar objetos incorrectos, deberás
                                registrar otro código lote para volver a intentarlo. Los puntos NO SON ACUMULABLES entre
                                partidas.
                            </p>
                        </div>
                    </div>

                    <div class="content_item m">
                        <div class="partTexto">
                            <img src="{{ url('assets/images/faqs/pregunta2.png') }}" class="mas" alt=""
                                id="img_6" onclick="openFaqs(6)">
                            <span>¿Quién gana?</span>
                        </div>
                        <div class="partDescripcion">
                            <p id="text_6">
                                Cada semana ganarán los 3 usuarios que hayan conseguido completar la lista de objetos y la
                                mayor cantidad de puntos en el menor tiempo posible. En caso de empate, se tomará en cuenta
                                la hora de registro y participación en el juego, quien lo haya hecho primero, será el
                                ganador.
                            </p>
                        </div>
                    </div>

                    <div class="content_item m">
                        <div class="partTexto">
                            <img src="{{ url('assets/images/faqs/pregunta2.png') }}" class="mas" alt=""
                                id="img_7" onclick="openFaqs(7)">
                            <span>¿Cuáles marcas de la Familia Maruchan participan?</span>
                        </div>
                        <div class="partDescripcion">
                            <p id="text_7">
                                Maruchan Instant Lunch, Maruchan Select, Maruchan Ramen, Maruchan Bowl, Maruchan Yakisoba,
                                Ottima Pasta Piatto (tazón) y Ottima Pasta Della Casa (sobre).
                            </p>
                        </div>
                    </div>

                    <div class="content_item m">
                        <div class="partTexto">
                            <img src="{{ url('assets/images/faqs/pregunta2.png') }}" class="mas" alt=""
                                id="img_8" onclick="openFaqs(8)">
                            <span>¿Cuáles son los premios semanales?</span>
                        </div>
                        <div class="partDescripcion">
                            <p id="text_8">
                                Cada semana se otorgarán los premios dependiendo del puntaje y la velocidad de cada
                                participante, siendo diferentes entre 1er, 2do y 3er lugar:
                                <br><br>
                                &#9679; PRIMER LUGAR: Go Pro, maleta deportiva, sleeping bag (bolsa para dormir), hielera,
                                bocina, set de toallas.
                                <br>
                                &#9679; SEGUNDO LUGAR: Bicicleta eléctrica, maleta deportiva, sleeping bag (bolsa para
                                dormir), hielera, bocina, set de toallas.
                                <br>
                                &#9679; TERCER LUGAR: Asador, maleta deportiva, sleeping bag (bolsa para dormir), hielera,
                                bocina, toalla.
                            </p>
                        </div>
                    </div>

                    <div class="content_item m">
                        <div class="partTexto">
                            <img src="{{ url('assets/images/faqs/pregunta2.png') }}" class="mas" alt=""
                                id="img_9" onclick="openFaqs(9)">
                            <span>En caso de resultar ganador, ¿cómo puedo reclamar mis premios?</span>
                        </div>
                        <div class="partDescripcion alto">
                            <p id="text_9">
                                Es importante recordar que en ninguna circunstancia se pueden canjear los premios por otros
                                en especie o valor, ni ser transferidos a personas no participantes. Una vez que fuiste
                                nombrado ganador en los canales oficiales de Maruchan, serán contactados vía correo
                                electrónico y redes sociales, por lo que tendrás 48hrs. para responder y seguir las
                                instrucciones que te demos. Tendrás que enviarnos a donde te indiquemos, el empaque vacío
                                del producto que registraste y te hizo ganador, así como tu identificación oficial para
                                poder validar tu información y programar la entrega de tus premios.
                            </p>
                        </div>
                    </div>

                    <div class="content_item m">
                        <div class="partTexto">
                            <img src="{{ url('assets/images/faqs/pregunta2.png') }}" class="mas" alt=""
                                id="img_10" onclick="openFaqs(10)">
                            <span>¿Puedo ganar varias veces?</span>
                        </div>
                        <div class="partDescripcion">
                            <p id="text_10">
                                No, si resultaste ganador una semana ya no es posible ganar en las siguientes. Sí puedes
                                participar muchas veces, pero solo podrás ganar una sola vez. En caso de no seguir esta
                                regla, será motivo de descalificación inmediata. CONSIDERA QUE, SI HAS GANADO EN PROMOCIONES
                                Y DINÁMICAS DE MARUCHAN DURANTE EL 2024, NO PODRÁS PARTICIPAR, NI GANAR EN ESTA PROMOCIÓN.
                            </p>
                        </div>
                    </div>

                    <div class="content_item m">
                        <div class="partTexto">
                            <img src="{{ url('assets/images/faqs/pregunta2.png') }}" class="mas" alt=""
                                id="img_11" onclick="openFaqs(11)">
                            <span>¿Qué pasa si no guardo el empaque del producto con el que me registré?</span>
                        </div>
                        <div class="partDescripcion alto">
                            <p id="text_11">
                                No podrás ser acreedor de tu premio en caso de ser ganador.
                            </p>
                        </div>
                    </div>

                    <div class="content_item m">
                        <div class="partTexto">
                            <img src="{{ url('assets/images/faqs/pregunta2.png') }}" class="mas" alt=""
                                id="img_12" onclick="openFaqs(12)">
                            <span>¿Hasta qué día tengo para participar?</span>
                        </div>
                        <div class="partDescripcion">
                            <p id="text_12">
                                La vigencia de la promoción es del 22 de julio al 18 de agosto de 2024, es decir 4 semanas.
                                Cada semana es una oportunidad participar ya que se asigna un destino diferente para empacar
                                tus maletas, ¡así que tienes 4 oportunidades de ganar! La participación cierra todos los
                                domingos de cada semana a las 23:59hrs.
                            </p>
                        </div>
                    </div>

                    <div class="content_item m">
                        <div class="partTexto">
                            <img src="{{ url('assets/images/faqs/pregunta2.png') }}" class="mas" alt=""
                                id="img_13" onclick="openFaqs(13)">
                            <span>¿Cuántos ganadores habrá?</span>
                        </div>
                        <div class="partDescripcion">
                            <p id="text_13">
                                Cada semana habrá 3 ganadores, 12 ganadores a total promoción.
                            </p>
                        </div>
                    </div>

                    <div class="content_item m">
                        <div class="partTexto">
                            <img src="{{ url('assets/images/faqs/pregunta2.png') }}" class="mas" alt=""
                                id="img_14" onclick="openFaqs(14)">
                            <span>¿Cada cuándo puedo participar?</span>
                        </div>
                        <div class="partDescripcion">
                            <p id="text_14">
                                La participación y el otorgamiento de premios son de forma semanal, así que puedes
                                participar de lunes a domingo para empacar tu maleta.
                                <br>
                                &#9679; Semana 1: Del 22 al 28 de julio del 2024.
                                <br>
                                &#9679; Semana 2: Del 29 de julio al 4 de agosto del 2024.
                                <br>
                                &#9679; Semana 3: Del 5 al 11 de agosto del 2024.
                                <br>
                                &#9679; Semana 4: Del 12 al 18 de agosto del 2024.

                            </p>
                        </div>
                    </div>

                    <div class="content_item m">
                        <div class="partTexto">
                            <img src="{{ url('assets/images/faqs/pregunta2.png') }}" class="mas" alt=""
                                id="img_15" onclick="openFaqs(15)">
                            <span>¿Puedo participar varias veces?</span>
                        </div>
                        <div class="partDescripcion">
                            <p id="text_15">
                                Sí, puedes participar cada semana siempre y cuando no hayas sido ganador en las semanas
                                previas de esta promoción. Ningún participante ganador puede volver a participar en las
                                siguientes semanas, de lo contrario será descalificado.

                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        const openFaqs = (fq) => {
            let u = document.getElementById('url').value;
            for (let index = 1; index <= 15; index++) {
                closeFaqs(index)
            }
            var faq = document.getElementById('img_' + fq)
            faq.src = u + '/assets/images/faqs/pregunta2.png';
            var description = document.getElementById('text_' + fq)
            var onclick = faq.getAttribute("onclick");
            if (typeof(onclick) != "function") {
                faq.setAttribute('onclick', 'closeFaqs(' + fq + ');');
            }
            description.classList.add('active')
        }

        const closeFaqs = (fq) => {
            let u = document.getElementById('url').value;

            var faq = document.getElementById('img_' + fq)
            faq.src = u + '/assets/images/faqs/pregunta2.png';
            var description = document.getElementById('text_' + fq)
            var onclick = faq.getAttribute("onclick");
            if (typeof(onclick) != "function") {
                faq.setAttribute('onclick', 'openFaqs(' + fq + ');');
            }
            description.classList.remove('active')
        }
    </script>
@endsection
