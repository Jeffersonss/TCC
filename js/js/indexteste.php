<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Home</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5" />
        <link rel="stylesheet" href="estilos/style.css"  media="all"/>

        <script type="text/javascript" src="js/jQuery.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.nicescroll.js"></script>
        <script type="text/javascript">
            $(function() {
                /**
                 * for each menu element, on mouseenter,
                 * we enlarge the image, and show both sdt_active span and
                 * sdt_wrap span. If the element has a sub menu (sdt_box),
                 * then we slide it - if the element is the last one in the menu
                 * we slide it to the left, otherwise to the right
                 */
                $('#sdt_menu > li').bind('mouseenter',function(){
                    var $elem = $(this);
                    $elem.find('img')
                    .stop(true)
                    .animate({
                        'width':'170px',
                        'height':'170px',
                        'left':'0px'
                    },400,'easeOutBack')
                    .andSelf()
                    .find('.sdt_wrap')
                    .stop(true)
                    .animate({'top':'140px'},500,'easeOutBack')
                    .andSelf()
                    .find('.sdt_active')
                    .stop(true)
                    .animate({'height':'170px'},300,function(){
                        var $sub_menu = $elem.find('.sdt_box');
                        if($sub_menu.length){
                            var left = '170px';
                            if($elem.parent().children().length == $elem.index()+1)
                                left = '-170px';
                            $sub_menu.show().animate({'left':left},200);
                        }
                    });
                }).bind('mouseleave',function(){
                    var $elem = $(this);
                    var $sub_menu = $elem.find('.sdt_box');
                    if($sub_menu.length)
                        $sub_menu.hide().css('left','0px');
					
                    $elem.find('.sdt_active')
                    .stop(true)
                    .animate({'height':'0px'},300)
                    .andSelf().find('img')
                    .stop(true)
                    .animate({
                        'width':'0px',
                        'height':'0px',
                        'left':'65px'},400)
                    .andSelf()
                    .find('.sdt_wrap')
                    .stop(true)
                    .animate({'top':'13px'},500);
                });
  
                $("body").niceScroll();  // The document page (body)
                $("#object2").niceScroll();
            });
        </script>

    </head>
    <body id="resol">
        <div id="geral">
            <div id="banner"><p id="p1">Anfitrium v1.0</p></div>
            <!-- /main -->

            <ul id="sdt_menu" class="sdt_menu">
                <li>
                    <a href="Classes/formulariopesquisarCheckin2.php"target="1">
                        <img src="imgmenu/lupa.png" alt=""/>
                        <span class="sdt_active"></span>
                        <span class="sdt_wrap">
                            <span class="sdt_link">Entrada</span>
                            <span class="sdt_descr">Check-in/Check-out</span>
                        </span></a>
                    <div class="sdt_box">
                        <a href="Classes/formularioCadastrarCheckin2.php" target="1">Incluir</a>
                        <a href="" target="principal">Alterar</a>
                        <a href="Classes/formularioExcluirCheckin2.php"target="1">Excluir</a>
                    </div>
                </li>
                <li>
                    <a href="Classes/formularioPesquisarCliente2.php"target="1">
                        <img src="imgmenu/cliente.png" alt=""/>
                        <span class="sdt_active"></span>
                        <span class="sdt_wrap">
                            <span class="sdt_link">Clientes</span>
                            <span class="sdt_descr">Gestao de Clientes</span>
                        </span></a>
                    <div class="sdt_box">
                        <a href="Classes/formularioCadastrarCliente2.php"target="1">Incluir</a>
                        <a href="Classes/formularioExcluirCliente3.php"target="principal">Excluir</a>
                    </div>
                </li>
                <li>
                    <a href="Classes/formularioPesquisarFuncionario2.php" target="principal">
                        <img src="imgmenu/usuario.png" alt=""/>
                        <span class="sdt_active"></span>
                        <span class="sdt_wrap">
                            <span class="sdt_link">Usuarios</span>
                            <span class="sdt_descr">Funcionarios </span>
                        </span></a>
                    <div class="sdt_box">
                        <a href="Classes/formularioCadastrarFuncionario2.php" target="principal">Incluir</a>

                        <a href="Classes/formularioExcluirFuncionario2.php"target="principal">Excluir</a>
                    </div></li>
                <li>
                    <a href="Classes/formularioPesquisarSuite2.php"target="principal">
                        <img src="imgmenu/suites.png" alt=""/>
                        <span class="sdt_active"></span>
                        <span class="sdt_wrap">
                            <span class="sdt_link">Suites</span>
                            <span class="sdt_descr">Gestao de Quartos</span>
                        </span></a>
                    <div class="sdt_box">
                        <a href="Classes/formularioCadastrarSuite2.php"target="principal">Incluir</a>

                        <a href="Classes/formularioExcluirSuite2.php"target="principal">Remover</a>
                    </div>
                </li>
                <li>
                    <a href="#"target="principal">
                        <img src="imgmenu/carteira.png" alt=""/>
                        <span class="sdt_active"></span>
                        <span class="sdt_wrap">
                            <span class="sdt_link">Pagamentos</span>
                            <span class="sdt_descr">Gestao Economica</span>
                        </span></a>
                    <div class="sdt_box">
                        <a href="#"target="principal">Despesas</a>

                        <a href="#"target="principal">Remover</a>
                    </div>
                </li>
                <li>
                    <a href="Classes/formularioPesquisarServico2.php"target="principal">
                        <img src="imgmenu/entrada.png" alt=""/>
                        <span class="sdt_active"></span>
                        <span class="sdt_wrap">
                            <span class="sdt_link">Servicos</span>
                            <span class="sdt_descr">Pedidos e Outros </span>
                        </span></a>
                    <div class="sdt_box">
                        <a href="Classes/formularioCadastrarServico2.php"target="principal">Incluir</a>

                        <a href="Classes/formularioExcluirServico2.php"target="principal">Remover</a>
                    </div></li></ul>


            <div id="conteudo">
                <div id="caixa_coluna">
                    <script type="text/javascript">
	
                        // When the document loads do everything inside here ...
                        $(document).ready(function(){
                            $(".content").niceScroll();
		
                            // When a link is clicked
                            $("a.tab").click(function () {
			
			
                                // switch all tabs off
                                $(".active").removeClass("active");
			
                                // switch this tab on
                                $(this).addClass("active");
			
                                // slide all content up
                                $(".content").slideUp();
			
                                // slide this content up
                                var content_show = $(this).attr("title");
                                $("#"+content_show).slideDown();
		 
                            });
		
                        });
                    </script>
                    <div id="tabbed_box_1" class="tabbed_box">
                        <h4><center>Suites<small>Status</small></center></h4>
                        <div class="tabbed_area">
                            <ul class="tabs">
                                <li class="tab active"><a title="content_1" class="tab active"><img src="imgmenu/verde.png" alt=""/></a></li>
                                <li><a title="content_2" class="tab"><img src="imgmenu/vermelho.png" alt=""/></a></li>
                                <li><a title="content_3" class="tab"><img src="imgmenu/amarelo.png" alt=""/></a></li>
                            </ul>

                            <div id="content_1" class="content">
                                                              
							<object type="text/html" class="content" data="Classes/DisponivelSuite.php"></object>
                                
                            </div>
                            <div id="content_2" class="content">
                                <ul>
                                    <li><a href=""> Quarto 01 <small>Cliente nome</small></a></li>
                                    <li><a href=""> Quarto 01 <small>Cliente nome</small></a></li>
                                    <li><a href=""> Quarto 01 <small>Cliente nome</small></a></li>
                                    <li><a href=""> Quarto 01 <small>Cliente nome</small></a></li>
                                    <li><a href=""> Quarto 01 <small>Cliente nome</small></a></li>
                                    <li><a href=""> Quarto 01 <small>Cliente nome</small></a></li>
                                    <li><a href=""> Quarto 01 <small>Cliente nome</small></a></li>
                                    <li><a href=""> Quarto 01 <small>Cliente nome</small></a></li>
                                    <li><a href=""> Quarto 01 <small>Cliente nome</small></a></li>
                                    <li><a href=""> Quarto 02 <small>Cliente nome</small></a></li>
                                    <li><a href=""> Quarto 03 <small>Cliente nome</small></a></li>
                                    <li><a href=""> Quarto 04 <small>Cliente nome</small></a></li>
                                    <li><a href=""> Quarto 05 <small>Cliente nome</small></a></li>
                                    <li><a href=""> Quarto 06 <small>Cliente nome</small></a></li>
                                    <li><a href=""> Quarto 06 <small>Cliente nome</small></a></li>
                                    <li><a href=""> Quarto 06 <small>Cliente nome</small></a></li>
                                    <li><a href=""> Quarto 06 <small>Cliente nome</small></a></li>
                                </ul>
                            </div>
                            <div id="content_3" class="content">
                                <ul>
                                    <li><a href="">Status Quarto 01</a></li>
                                    <li><a href="">Status Quarto 02</a></li>
                                    <li><a href="">Status Quarto 03</a></li>
                                    <li><a href="" target="principal">Status Quarto 04</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <object type="text/html"  id="1"  class="object2" name="1">
                           
                </object>
            </div>
            <div id="rodape">
                <div class="legenda">Disponivel | Ocupado | manutencao</div>
                <div class="copia">
                    <ul>
                        <li><a class="copia" href="#">Sobre</a></li>
                        <li> | </li>
                        <li><a href="#">Servicos</a></li>
                        <li> | </li>
                        <li><a href="#">Clientes</a></li>
                        <li> | </li>
                        <li><a href="#">Parceiros</a></li>
                        <li> | </li>
                        <li><a href="#">Contatos</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </body>
</html>
