@extends('sections.model')
 
@section('title', 'Programación')

@section('content')
<div class="gdlr-core-pbf-element">
            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px ;">
                <div class="gdlr-core-title-item-title-wrap ">
                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="color:rgba(29, 47, 72, 100); text-transform: none ;">Diseño y Marca Personal<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-style: normal ;">Checa nuestros articulos especializados en Diseño y Marca Personal, coméntanos que tal te parecio</span></div>
        </div>
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
                                                        <a href="{{ route('article3') }}"><img src="{{asset('img/banners/logo.png')}}" alt width=1000 height=426 title=pexels-photo-871053></a>
                                                    </div><a href="{{ route('article3') }}" class=zilla-likes id=zilla-likes-6613 title="Like this"><span class=zilla-likes-count>261</span> <span class=zilla-likes-postfix></span></a></div>
                                                <div class=gdlr-core-blog-full-content-wrap>
                                                                                                        
                                                    <div class="gdlr-core-blog-full-head clearfix">
                                                        <div class=gdlr-core-blog-full-head-right>
                                                            <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_2207_3">
                                                                <a href="{{ route('article3') }}" >¿Que beneficios puede aportar tu propio logo?</a>
                                                            </h3>
                                                            <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
                                                                    <img alt src="{{asset('img/avatar/juan.png')}}"  class='avatar avatar-50 photo' height=50 width=50>
                                                                        <a href="{{ route('article3') }}" title="Posts by Juan David Cardenas" rel=author>Juan Cardenas</a>
                                                                    </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                        <a href="{{ route('article3') }}">Mayo 1, 2021</a>
                                                                    </span>
                                                                    <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category">
                                                                    <a href="{{ route('design') }}">Diseño y Marca Personal</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=gdlr-core-blog-content>Uno de los objetivos al plasmar tu marca o idea en una imagen es que sea fácil de reconocer, recordar y evocar un buen pensamiento en la persona que lo ve.  
                                                        Y desde luego es muy importante apelar a las conexiones que tenemos como seres humanos como a nivel de gusto, identificación y representación.
                                                        Pero ademas de tener estos objetivos en mente, puedes ponerte como meta estos objetivos para que tu propio logo genere beneficios...</div>
                                                         <a href="{{ route('article3') }}">
                                                            <strong>Ver Articulo 🔎
                                                            <span class=gdlr-core-social-share-wrap>
                                                                
                                                            </span>
                                                        </strong>
                                                        </a>
                                                </div>
                                            </div>
                                          
                                            
                                          <!-- Generar mas articulos -->
                                            
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

