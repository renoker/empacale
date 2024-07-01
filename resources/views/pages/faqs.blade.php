@extends('layouts.main')
@section('title', 'Maruchan - Faqs')

@section('content')

@endsection
@section('scripts')
    <script>
        // const openFaqs = (fq) => {
        //     let u = document.getElementById('url').value;
        //     for (let index = 1; index <= 15; index++) {
        //         closeFaqs(index)
        //     }
        //     var faq = document.getElementById('img_' + fq)
        //     faq.src = u + '/images/faqs/menos.png';
        //     var description = document.getElementById('text_' + fq)
        //     var onclick = faq.getAttribute("onclick");
        //     if (typeof(onclick) != "function") {
        //         faq.setAttribute('onclick', 'closeFaqs(' + fq + ');');
        //     }
        //     description.classList.add('active')
        // }

        // const closeFaqs = (fq) => {
        //     let u = document.getElementById('url').value;

        //     var faq = document.getElementById('img_' + fq)
        //     faq.src = u + '/images/faqs/mas.png';
        //     var description = document.getElementById('text_' + fq)
        //     var onclick = faq.getAttribute("onclick");
        //     if (typeof(onclick) != "function") {
        //         faq.setAttribute('onclick', 'openFaqs(' + fq + ');');
        //     }
        //     description.classList.remove('active')
        // }
    </script>
@endsection
