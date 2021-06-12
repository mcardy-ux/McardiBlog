@extends('sections.model')

@section('title', 'Blog')

@section('content')
        <div class=akea-page-wrapper id=akea-page-wrapper>
            <div class=gdlr-core-page-builder-body>
                <div class="gdlr-core-pbf-sidebar-wrapper ">
                    <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                        <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" id="div_2207_2">
                            <div class=gdlr-core-pbf-sidebar-content-inner data-skin="Blog List">
                                <div class=gdlr-core-pbf-element>
                                    <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full">
                                        <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout=fitrows>
                                            <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="{{ route('article1') }}"><img src="{{asset('img/banners/web.png')}}" alt width=1000 height=426 title=pexels-photo-871053></a>
                                                    </div><a href="{{ route('article1') }}" class=zilla-likes id=zilla-likes-6613 title="Like this"><span class=zilla-likes-count>261</span> <span class=zilla-likes-postfix></span></a></div>
                                                <div class=gdlr-core-blog-full-content-wrap>

                                                    <div class="gdlr-core-blog-full-head clearfix">
                                                        <div class=gdlr-core-blog-full-head-right>
                                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_2207_3">
                                                                <a href="{{ route('article1') }}" >Top 10 - Como mejorar tu empresa con un buen diseño web.</a>
                                                            </h3>
                                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                                    <img alt src="{{asset('img/avatar/juan.png')}}"  class='avatar avatar-50 photo' height=50 width=50>
                                                                        <a href=# title="Posts by Jane Smith" rel=author>Juan Cardenas</a>
                                                                    </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                        <a href=#>Noviembre 1, 2020</a>
                                                                    </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                                                                        <a href="{{ route('programming') }}"  rel=tag>Programación</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=gdlr-core-blog-content>I neglect my talents Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia....</div>
                                                         
                                                        <a href="{{ route('article1') }}">
                                                            <strong>Ver Articulo 🔎
                                                                <span class=gdlr-core-social-share-wrap>

                                                                </span>
                                                            </strong>
                                                        </a>
                                                </div>
                                            </div>


                                          <!-- Generar mas articulos -->

                                        <!-- Articulo Marketing -->

                                        <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href=#><img src="{{asset('img/banners/marketing.png')}}" alt width=1000 height=426 title=pexels-photo-871053></a>
                                                    </div><a href=# class=zilla-likes id=zilla-likes-6613 title="Like this"><span class=zilla-likes-count>261</span> <span class=zilla-likes-postfix></span></a></div>
                                                <div class=gdlr-core-blog-full-content-wrap>

                                                    <div class="gdlr-core-blog-full-head clearfix">
                                                        <div class=gdlr-core-blog-full-head-right>
                                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_2207_3">
                                                                <a href=# >¿Que beneficios existen en utilizar marketing digital?</a>
                                                            </h3>
                                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                                    <img alt src="{{asset('img/avatar/juan.png')}}"  class='avatar avatar-50 photo' height=50 width=50>
                                                                        <a href=# title="Posts by Juan David Cardenas" rel=author>Juan Cardenas</a>
                                                                    </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                        <a href=#>Abril 1, 2020</a>
                                                                    </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                                                                    <a href="{{ route('marketing') }}" rel=tag>Marketing</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=gdlr-core-blog-content>I neglect my talents Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia....</div>
                                                         <strong>Ver Articulo 🔎
                                                            <span class=gdlr-core-social-share-wrap>

                                                            </span>
                                                        </strong>
                                                </div>
                                            </div>

                                            <!-- Articulo Logo -->

                                            <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                <div class="gdlr-core-blog-thumbnail-wrap clearfix">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href=#><img src="{{asset('img/banners/logo.png')}}" alt width=1000 height=426 title=pexels-photo-871053></a>
                                                    </div><a href=# class=zilla-likes id=zilla-likes-6613 title="Like this"><span class=zilla-likes-count>261</span> <span class=zilla-likes-postfix></span></a></div>
                                                <div class=gdlr-core-blog-full-content-wrap>
                                                                                                        
                                                    <div class="gdlr-core-blog-full-head clearfix">
                                                        <div class=gdlr-core-blog-full-head-right>
                                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_2207_3">
                                                                <a href=# >Como hacer que tu propio logo genere beneficios.</a>
                                                            </h3>
                                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                                    <img alt src="{{asset('img/avatar/juan.png')}}"  class='avatar avatar-50 photo' height=50 width=50>
                                                                        <a href=# title="Posts by Juan David Cardenas" rel=author>Juan Cardenas</a>
                                                                    </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                        <a href=#>Mayo 1, 2021</a>
                                                                    </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                                                                     <a href="{{ route('design') }}">Diseño y Marca Personal</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=gdlr-core-blog-content>I neglect my talents Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia....</div>
                                                         <strong>Ver Articulo 🔎
                                                            <span class=gdlr-core-social-share-wrap>
                                                                
                                                            </span>
                                                        </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('sections.panelRight')
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection
