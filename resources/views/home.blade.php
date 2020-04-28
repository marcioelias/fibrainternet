@extends('layouts.app')

@section('content')
    <div id="layoutDefault">
        <div id="layoutDefault_content">
            <main>
                @include('layouts.nav')
                <header class="page-header page-header-home" data-aos="fade" data-aos-delay="10" id="home">
                    <div class="page-header-content pt-10">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="50">
                                    <h1 class="page-header-title">Sul Internet em Laguna agora é <strong class="text-primary">Fibra Internet!</strong></h1>
                                    <p class="page-header-text mb-5">Novo nome, a mesma qualidade. Conheça nossos planos e tenha acesso a um mundo de conteúdo em Ultra Velocidade!</p>
                                    {{-- <a class="btn btn-teal btn-marketing rounded-pill lift lift-sm" href="landing-multipurpose.html">View Demo<i class="fas fa-arrow-right ml-1"></i></a><a class="btn btn-link btn-marketing" href="https://docs.startbootstrap.com/sb-ui-kit-pro/quickstart">Documentation</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="svg-border-rounded text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
                    </div> --}}
                </header>

                <x-sobre />
                <x-planos />
                <x-contato />
            </main>
        </div>
        <footer class="footer pt-10 pb-5 mt-auto bg-dark footer-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-brand">
                            Fibra Soluções em Internet
                        </div>
                        <div class="mb-4">Você mais conectado!</div>
                        <div class="icon-list-social mb-5">
                            <a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-instagram fa-2x"></i></a>
                            <a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-facebook fa-2x"></i></a>
                            <a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-twitter fa-2x"></i></a>
                            <a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-youtube fa-2x"></i></a>
                            <a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-whatsapp fa-2x"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <div class="text-uppercase-expanded text-xs mb-4">Quem Somos</div>
                               {{--  <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="javascript:void(0);">Landing</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Sections</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Documentation</a></li>
                                    <li><a href="javascript:void(0);">Changelog</a></li>
                                </ul> --}}
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                <div class="text-uppercase-expanded text-xs mb-4">Planos</div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="javascript:void(0);">Residenciais</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Condomínio</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Empresariais</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                                <div class="text-uppercase-expanded text-xs mb-4">Central do Assinante</div>
                                {{-- <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="javascript:void(0);">Utilities</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Components</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Layouts</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Code Samples</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Products</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Affiliates</a></li>
                                    <li><a href="javascript:void(0);">Updates</a></li>
                                </ul> --}}
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="text-uppercase-expanded text-xs mb-4">Fale conosco</div>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><a href="javascript:void(0);">Departamento Comercial</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Suporte Técnico</a></li>
                                    <li class="mb-2"><a href="javascript:void(0);">Setor Financeiro</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-5">
                <div class="row align-items-center">
                    <div class="col-md-6 small">Copyright © Fibra Soluções em Internet 2020</div>
                    <div class="col-md-6 text-md-right small">
                        <a href="javascript:void(0);">Políticas de Privacidade</a>
                        ·
                        <a href="javascript:void(0);">Termos &amp; Condições</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection

@push('bottom-scripts')
<script>
    var scrool = new SmoothScroll('a[href*="#"]', {
        speed: 800,
	    //speedAsDuration: true
        //easing: 'easeOutCubic', //
    })
</script>

@endpush
