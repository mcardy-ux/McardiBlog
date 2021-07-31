
<div class=akea-mobile-header-wrap>
    <div class="akea-mobile-header akea-header-background akea-style-slide akea-sticky-mobile-navigation " id=akea-mobile-header>
        <div class="akea-mobile-header-container akea-container clearfix">
            <div class="akea-logo  akea-item-pdlr">
                <div class=akea-logo-inner>
                    <a class href="/"><img src="{{asset('img/min/logo.png')}}" alt="Logo Empresa Mcardi Studios" width="140" height="33" title="Mcardi Studios"></a>
                </div>
            </div>
            <div class=akea-mobile-menu-right>
                

                <div class="akea-overlay-menu akea-mobile-menu" id=akea-mobile-menu><a class="akea-overlay-menu-icon akea-mobile-menu-button akea-mobile-button-hamburger" href=#><span></span></a>
                    <div class="akea-overlay-menu-content akea-navigation-font">
                        <div class=akea-overlay-menu-close></div>
                        <div class=akea-overlay-menu-row>
                            <div class=akea-overlay-menu-cell>
                                <ul id=menu-main-navigation class=menu>
                                    <!------------------------------------->
                                    <!-- Links Menu Barra Lateral  - Mobile-->
                                    <!------------------------------------->
                                    <li class="menu-item menu-item-home current-menu-item"><a href=/ aria-current=page>🏠 Inicio</a>
                                        
                                    </li>
                                    <li class="menu-item"><a href="{{ route('trends') }}">🚀 Tendencias</a></li>
                                    
                                    <li class="menu-item menu-item-has-children"><a href=#>Articulos</a>
                                        <ul class=sub-menu>
                                            <li class="menu-item"><a href="{{ route('programming') }}">Programación</a></li>
                                            <li class="menu-item"><a href="{{ route('marketing') }}">Marketing</a></li>
                                            <li class="menu-item"><a href="{{ route('design') }}">Diseño y Marca Personal</a></li>
                                        </ul>
                                    </li>
                                  
                                    <li class="menu-item"><a href="{{ route('contact') }}">💬 Feedback</a></li>
                                    <li class="menu-item"><a href="{{ route('login') }}">Login</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="akea-body-outer-wrapper ">
    <div class="akea-body-wrapper clearfix  akea-with-frame">
<header class="akea-header-wrap akea-header-style-plain  akea-style-splitted-menu akea-sticky-navigation akea-style-slide" data-navigation-offset=75px>
            <div class=akea-header-background></div>
            <div class="akea-header-container  akea-container">
                <div class="akea-header-container-inner clearfix">
                    <div class="akea-navigation akea-item-pdlr clearfix ">
                        <div class=akea-main-menu id=akea-main-menu>
                            <ul id=menu-main-navigation-1 class=sf-menu>
                             <!------------------------------------->
                                    <!-- Links Menu Barra Central-->
                                    <!------------------------------------->
                                <li class="menu-item menu-item-home current-menu-item akea-normal-menu"><a href=/ class=sf-with-ul-pre>🏠 Inicio</a></li>
                                <li class="menu-item menu-item-has-children akea-normal-menu" data-size=60><a href="{{ route('trends') }}">🚀 Tendencias
                                </a></li>
                                
                                <li class=akea-center-nav-menu-item>
                                    <div class=akea-above-logo>
                                        <a href="/"><img src="{{asset('img/min/logo.png')}}" alt="Logo Empresa Mcardi Studios" width="140" height="33" title="Mcardi Studios">   </a>
                                    </div>
                                    <div class="akea-logo  akea-item-pdlr">
                                        <div class=akea-logo-inner>
                                        
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-has-children akea-normal-menu"><a href=# class=sf-with-ul-pre>🤓 Articulos</a>
                                    <ul class=sub-menu>
                                        <li class="menu-item" data-size=60><a href="{{ route('programming') }}">Programación</a></li>
                                        <li class="menu-item" data-size=60><a href="{{ route('marketing') }}">Marketing</a></li>
                                        <li class="menu-item" data-size=60><a href="{{ route('design') }}">Diseño y Marca Personal</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item akea-normal-menu"><a href="{{ route('contact') }}">💬 Feedback</a></li>
                            </ul>
                            <div class=akea-navigation-slide-bar id=akea-navigation-slide-bar></div>
                        </div>

                         <!------------------------------------->
                        <!-- Links Menu Barra Lateral  - Derecha-->
                        <!------------------------------------->
                        <div class="akea-main-menu-right-wrap clearfix  akea-item-mglr akea-navigation-top">
                            <div class="akea-overlay-menu akea-main-menu-right" id=akea-right-menu><a class="akea-overlay-menu-icon akea-right-menu-button akea-top-menu-button akea-mobile-button-hamburger" href=#><span></span></a>
                                <div class="akea-overlay-menu-content akea-navigation-font">
                                    <div class=akea-overlay-menu-close></div>
                                    <div class=akea-overlay-menu-row>
                                        <div class=akea-overlay-menu-cell>
                                            <ul id=menu-main-navigation-2 class=menu>
                                                <li class="menu-item menu-item-home current-menu-item"><a href=/ aria-current=page>🏠 Inicio</a>
                                                </li>
                                                <li class="menu-item"><a href="{{ route('trends') }}">🚀 Tendencias</a></li>

                                                <li class="menu-item menu-item-has-children"><a href=#>Articulos</a>
                                                    <ul class=sub-menu>
                                                        <li class="menu-item"><a href="{{ route('programming') }}">Programación</a></li>
                                                        <li class="menu-item"><a href="{{ route('marketing') }}">Marketing</a></li>
                                                        <li class="menu-item"><a href="{{ route('design') }}">Diseño y Marca Personal</a></li>
                                                        
                                                    </ul>
                                                </li>
                                                <li class="menu-item"><a href="{{ route('contact') }}">💬 Feedback</a></li>
                                                <li class="menu-item"><a href="{{ route('login') }}">Login</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                            
                        </div>
                        
                        <div id="redes" class="akea-main-menu-left-wrap akea-main-menu-left-social clearfix akea-item-pdlr akea-navigation-top">
                            <a href="https://github.com/mcardy-ux" target=_blank class=akea-top-bar-social-icon title=github>
                                <i class="fa fa-github" ></i>
                            </a>
                            <a href="https://www.instagram.com/ux.mcardi/?hl=es" target=_blank class=akea-top-bar-social-icon title=instagram>
                                <i class="fa fa-instagram" ></i>
                            </a>
                            <a href="https://vimeo.com/user126185259" target=_blank class=akea-top-bar-social-icon title=vimeo>
                                <i class="fa fa-vimeo" ></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>