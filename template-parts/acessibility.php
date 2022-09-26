<section class="acessibilidade">
      <div class="container">
        <div class="listas">
          <ul class="itens-acessibilidade">
            <li class="item-acessibilidade">
              <a href="'. get_page_link( get_page_by_path('acessibilidade')).'" title="Ir para Acessibilidade" alt="acessibilidade">ACESSIBILIDADE</a>
            </li>
            <li class="btn-fonts">
              <button id="btn-increase" class="btn btn-default" type="button"><i class="fa fa-font" aria-hidden="true"></i>+</button>
            </li> 

            <li class="btn-fonts">
              <button id="btn-decrease" class="btn btn-default" type="button"><i class="fa fa-font" aria-hidden="true"></i>-</button>
            </li> 

            <li class="item-contraste">
              <a href="javascript:void(5);" title="Ativar Contraste" alt="Contraste">
                <img width="40px" height="28px" src="'. get_template_directory_uri().'/assets/icons/common/btn-contraste.svg" class="ic-contraste img-lazy-loading" alt="Botão Contraste" title="Ativar Contraste">
              </a>
            </li>
            <li class="item-handtalk">
              <a href="javascript:void(6);" title="Ativar o Handtalk" alt="Handtalk" style="z-index: 1000000;" onclick="loadScripthand()">
                <img width="40px" height="28px" src="'. get_template_directory_uri().'/assets/icons/common/btn-handtalk.svg" class="ic-handtalk img-lazy-loading" alt="Botão Handtalk" title="Ativar o Handtalk">
              </a>
            </li>
            <li class="item-leitor">
              <a href="javascript:void(6);" title="Ativar Leitor de Tela" alt="Leitor de Tela" style="z-index: 1000000;" onclick="loadScripthand()">              
                <img width="40px" height="28px" src="'. get_template_directory_uri().'/assets/icons/common/btn-leitor-tela.svg" class="ic-leitor-tela img-lazy-loading" alt="Botão Leitor de Tela" title="Ativar Leitor de Tela">
              </a>
            </li>

            <li class="item-icom">
              <a href="https://call.icom-libras.com.br/tokiomarine/autentica?uId=058f6f6518d53cf1805d1a7f669b4ec5293806aab6a20155c118c8a0a2c814ed&amp;svId=9ac0249b-b516-4760-84e9-cbdee6c9940e&amp;type=video" title="Ativar ICOM" alt="ICOM" target="_blanck" style="z-index: 1000000;">              
                <img width="40px" height="28px" src="'. get_template_directory_uri().'/assets/icons/common/btn-icom-topo.svg" class="ic-leitor-tela img-lazy-loading" alt="Botão ICOM" title="Ativar ICOM">
              </a>

            </li>

          </ul>
          <ul class="ir-para">
            <li class="ir">IR PARA:</li>
            <li class="item-link-conteudo"><a href="javascript:void(1);" accesskey="1" title="Acesso para conteudo" alt="Acesso para Conteudo">CONTEÚDO [1]</a></li>
            <li class="item-link-menu"><a href="javascript:void(2);" accesskey="2" title="Acesso para Menu" alt="Acesso para menu">MENU [2]</a></li>
            <li class="item-link-rodape"><a href="javascript:void(3);" accesskey="3" title="Acesso para Rodapé" alt="Acesso para rodapé">RODAPÉ [3]</a></li>            
          </ul>
        </div>
      </div>
     </section>