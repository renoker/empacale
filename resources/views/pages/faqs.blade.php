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
                            <img src="{{ url('assets/images/faqs/pregunta2.png') }}" class="mas" alt=""
                                id="img_1" onclick="openFaqs(1)">
                            <span>¿De qué trata la promoción?</span>
                        </div>
                        <div class="partDescripcion">
                            <p id="text_1">
                                La primera promoción de Maruchan en donde diariamente tendrás que tomarle 10 fotografías a
                                diferente con
                                sonrisas.
                                <br><br>
                                Revisa el reto cada semana para encontrar las sonrisas diarias así que mantente muy atento a
                                la
                                mecánica.
                            </p>
                        </div>
                    </div>

                    <div class="content_item m">
                        <div class="partTexto">
                            <img src="{{ url('assets/images/faqs/pregunta2.png') }}" class="mas" alt=""
                                id="img_2" onclick="openFaqs(2)">
                            <span>¿Cómo puedo participar?</span>
                        </div>
                        <div class="partDescripcion">
                            <p id="text_2">
                                1. Regístrate en nuestro sitio antojodereirme.maruchan.com.mx
                                <br><br>
                                2. Cada día ingresa un código lote de tus sopas Maruchan favoritas para poder participar.
                                <br><br>
                                3. Se contarán con 4 retos semanales de lunes a domingo, los cuales son:<br>
                                •La sonrisa de mi casa<br>
                                •La sonrisa de mi ciudad<br>
                                •El filtro de las sonrisas<br>
                                •Sonrisa instantánea<br>
                                <br><br>
                                4.- Cada día podrás participar de 10 am a 8 pm y mostrar tu creatividad y rapidez para subir
                                10
                                fotografías con la temática semanal en el menor tiempo posible para poder ser uno de los
                                ganadores
                                diarios.
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
            for (let index = 1; index <= 2; index++) {
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
