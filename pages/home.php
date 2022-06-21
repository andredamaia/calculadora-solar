<div class="area-white">
    <div class="container">
        <h1>Saiba quanto custa gerar a sua própria energia solar!</h1>

        <form action="" class="form-default">
            <div class="inputs">
                <div class="input-block">
                    <input type="text" name="cep" id="cep" placeholder="CEP da instalação" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required/>
                </div>

                <div class="input-block">
                    <select name="cidade" id="cidade" disabled>
                        <option value="Cidade">Cidade</option>
                    </select>

                    <span class="triangle-down"></span>
                </div>
            </div>

            <div class="inputs">
                <div class="input-block">
                    <select name="estado" id="estado" disabled>
                        <option value="UF">UF</option>
                    </select>

                    <span class="triangle-down"></span>
                </div>

                <div class="input-block">
                    <select name="concessionaria" id="concessionaria" disabled>
                        <option value="Concessionária de Energia">Concessionária de Energia</option>
                    </select>

                    <span class="triangle-down"></span>
                </div>
            </div>

            <div class="inputs">
                <div class="input-block">
                    <input type="text" name="valor" id="valor" placeholder="Qual o valor mensal da conta de luz?" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required/>
                </div>

                <div class="input-block">
                    <input type="text" name="consumo" id="consumo" placeholder="Consumo mensal kW/h" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required/>
                </div>
            </div>

            <button>Simular meu gerador</button>
        </form>

        <span class="black-line"></span>

        <div class="toggle">
            <h2>Dúvidas frequentes</h2>

            <div class="match-toggle">
                <div class="toggle-header">
                    <div class="img-left">
                        <img src="<?php echo $pageurl; ?>/public/images/sun-png.png"  />
                    </div>

                    <div class="mid-content">
                        <strong>O QUE É A CALCULADORA SOLAR?</strong>
                    </div>

                    <div class="img-right">
                        <img src="<?php echo $pageurl; ?>/public/images/plus-png.png"  />

                    </div>
                </div>
                <div class="toggle-body">
                    
                    <p>É uma ferramenta online indispensável para quem tem interesse em gerar a sua própria energia solar. Com ela é possível simular em poucos segundos o e o custo do gerador de energia solar ideal para suprir os gastos de luz de sua residência ou empresa.</p>
                
                </div>
            </div>

            <div class="match-toggle">
                <div class="toggle-header">
                    <div class="img-left">
                        <img src="<?php echo $pageurl; ?>/public/images/sun-png.png"  />
                    </div>

                    <div class="mid-content">
                        <strong>COMO FUNCIONA A CALCULADORA SOLAR?</strong>
                    </div>

                    <div class="img-right">
                        <img src="<?php echo $pageurl; ?>/public/images/plus-png.png"  />

                    </div>
                </div>
                <div class="toggle-body">
                    
                    <p>Através das informações referente a localização e o valor da conta de luz a ferramenta realizará cálculos utilizando-se de bancos de dados próprios para simular as principais informações sobre o gerador de energia solar mais adequado a sua demanda de consumo. Desta forma, você vai saber em poucos segundos qual será a potência ideal a ser instalada em kWp, a produção mensal e anual em kWh, a economia monetária que será gerada após a instalação do gerador, além do valor estimado a ser investido e o retorno desse investimento. Lembrando que a potência do gerador está baseada em uma simulação e por essa razão pode sofrer variações de acordo com a orientação e inclinação dos painéis, local de instalação e radiação para a região informada. Vale também informar que essa
                    simulação não inclui serviços de engenharia e instalação.
                    </p>
                
                </div>
            </div>

            <div class="match-toggle">
                <div class="toggle-header">
                    <div class="img-left">
                        <img src="<?php echo $pageurl; ?>/public/images/sun-png.png"  />
                    </div>

                    <div class="mid-content">
                        <strong>O QUE FAZER COM O RESULTADO DA CALCULADORA SOLAR?</strong>
                    </div>

                    <div class="img-right">
                        <img src="<?php echo $pageurl; ?>/public/images/plus-png.png"  />

                    </div>
                </div>
                <div class="toggle-body">
                    
                    <p>Ao final da simulação, você poderá solicitar um orçamento grátis que será realizado através de um revendedor Autorizado da Aldo Solar mais próximo do CEP informado. Essa empresa entrará em contato para te auxiliar no dimensionamento, cotação e formalização de uma proposta adequada à sua necessidade. E o melhor, de forma gratuita, segura e especializada.
                    </p>
                
                </div>
            </div>

            <div class="match-toggle">
                <div class="toggle-header">
                    <div class="img-left">
                        <img src="<?php echo $pageurl; ?>/public/images/sun-png.png"  />
                    </div>

                    <div class="mid-content">
                        <strong>É POSSÍVEL SIMULAR UM FINANCIAMENTO ATRAVÉS DA CALCULADORA SOLAR?</strong>
                    </div>

                    <div class="img-right">
                        <img src="<?php echo $pageurl; ?>/public/images/plus-png.png"  />

                    </div>
                </div>
                <div class="toggle-body">
                    
                    <p>Sim! Ao finalizar a simulação de orçamento grátis uma pergunta será feita sobre o interesse de realizar uma outra simulação de financiamento do gerador  solar. Clicando em “Sim” a plataforma fará uma avaliação baseada no score do CPF informado e se aprovado trará todas as informações pertinentes ao  financiamento como números de parcelas, valor da parcela, forma de pagamento, dentre outras informações inerentes da proposta pré-aprovada.
                    </p>
                
                </div>
            </div>

            <div class="match-toggle">
                <div class="toggle-header">
                    <div class="img-left">
                        <img src="<?php echo $pageurl; ?>/public/images/sun-png.png"  />
                    </div>

                    <div class="mid-content">
                        <strong>QUEM É A ALDO SOLAR?</strong>
                    </div>

                    <div class="img-right">
                        <img src="<?php echo $pageurl; ?>/public/images/plus-png.png"  />

                    </div>
                </div>
                <div class="toggle-body">
                    
                    <p>A Aldo Solar é a maior distribuidora de soluções para energia solar do Brasil. Com mais de 40 anos no mercado de distribuição, possui uma sólida  operacional e comercial para atender com disponibilidade, eficiência logística e pós-vendas seus milhares de clientes revendedores em todo Brasil.
                    </p>
                
                </div>
            </div>
        </div>

        <div class="politica-de-privacidade">
            <p>Ao informar meus dados, eu concordo com a <a href="https://www.aldo.com.br/termos-de-uso" target="_blank"> Política de Privacidade</a> da ALDO, e autorizo o uso dos mesmos dentro desta Política.</p>
        </div>

        <div class="blog">
            <a href="https://www.aldo.com.br/blog/" target="_blank" class="button-black">Acesse nosso blog</a>

            <div class="redes-sociais">
                <p>Nos siga:</p>

                <div class="redes">
                    <a href="https://www.instagram.com/aldo.solar/" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 100 100"><path fill="#010101" d="M99.467 49.885c0 27.32-22.146 49.467-49.465 49.467C22.681 99.352.534 77.205.534 49.885.534 22.568 22.681.417 50.002.417c27.318 0 49.465 22.151 49.465 49.468"/><g fill="#fff"><path d="M65.357 31.173a3.4 3.4 0 0 0 0 6.801 3.405 3.405 0 0 0 3.402-3.403 3.402 3.402 0 0 0-3.402-3.398M50.241 35.531c-7.878 0-14.284 6.407-14.284 14.288 0 7.869 6.406 14.283 14.284 14.283 7.876 0 14.28-6.414 14.28-14.283 0-7.881-6.404-14.288-14.28-14.288m0 23.434c-5.048 0-9.15-4.102-9.15-9.146 0-5.05 4.102-9.153 9.15-9.153 5.046 0 9.147 4.103 9.147 9.153.001 5.044-4.101 9.146-9.147 9.146"/><path d="M61.578 78.817H38.422c-9.608 0-17.419-7.814-17.419-17.419V38.237c0-9.605 7.811-17.42 17.419-17.42h23.156c9.609 0 17.424 7.814 17.424 17.42v23.162c0 9.604-7.814 17.418-17.424 17.418M38.422 26.275c-6.599 0-11.965 5.365-11.965 11.962v23.162c0 6.594 5.366 11.965 11.965 11.965h23.156c6.602 0 11.971-5.371 11.971-11.965V38.237c0-6.597-5.369-11.962-11.971-11.962H38.422z"/></g></svg>
                    </a>

                    <a href="https://www.facebook.com/AldoSolarDistribuidora" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" viewBox="0 0 100 100"><defs><path id="a" d="M.34.28h99.63v99.63H.34z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path fill="#010101" d="M99.96 50.1a49.8 49.8 0 1 0-57.6 49.2V64.5H29.73V50.1h12.65V39.11c0-12.49 7.43-19.38 18.8-19.38 5.46 0 11.16.98 11.16.98v12.25h-6.28c-6.19 0-8.12 3.84-8.12 7.78v9.34h13.82l-2.21 14.4h-11.6V99.3a49.82 49.82 0 0 0 42.02-49.2" clip-path="url(#b)"/><path fill="#fff" d="m69.54 64.5 2.2-14.4h-13.8v-9.35c0-3.94 1.92-7.78 8.11-7.78h6.28V20.71s-5.7-.97-11.15-.97c-11.38 0-18.81 6.9-18.81 19.38v10.97H29.72v14.4h12.65V99.3a50.13 50.13 0 0 0 15.56 0V64.5h11.6z" clip-path="url(#b)"/></svg>
                    </a>

                    <a href="https://twitter.com/Aldo_Solar" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 100 100"><path fill="#010101" d="M99.47 50.36a49.47 49.47 0 1 1-98.94 0 49.47 49.47 0 0 1 98.94 0"/><path fill="#fff" d="M77.33 33.41c-1.71.78-3.6 1.25-5.45 1.56.87-.15 2.16-1.74 2.68-2.38a10 10 0 0 0 1.81-3.3c.05-.1.08-.21 0-.28-.13-.05-.2-.03-.3.02a27.8 27.8 0 0 1-6.47 2.47.43.43 0 0 1-.44-.12c-.2-.2-.37-.4-.57-.58a10.97 10.97 0 0 0-7.94-2.7 11.79 11.79 0 0 0-8.24 4.3 11.39 11.39 0 0 0-2.2 4.4 11.95 11.95 0 0 0-.11 4.65c.03.26 0 .3-.23.26C41 40.39 33.64 37.2 27.66 30.4c-.26-.3-.4-.3-.62.02-2.61 3.92-1.34 10.22 1.92 13.32.44.41.89.82 1.37 1.2-.18.04-2.35-.2-4.29-1.2-.26-.17-.39-.07-.42.22a11.41 11.41 0 0 0 7.1 10.36c.45.2.95.36 1.43.44-.86.19-1.75.32-4.2.13-.31-.06-.43.1-.31.39 1.85 5.04 5.84 6.54 8.84 7.4.4.07.8.07 1.2.16-.03.04-.05.04-.08.07-.99 1.52-4.43 2.64-6.03 3.2a21.72 21.72 0 0 1-9.17 1.18c-.49-.08-.6-.07-.73 0-.13.08-.01.2.14.33a30.08 30.08 0 0 0 8.04 3.58c11.02 3.04 23.42.8 31.7-7.41 6.49-6.45 8.76-15.35 8.76-24.26 0-.35.41-.54.66-.73a21.51 21.51 0 0 0 4.31-4.48c.28-.38.29-.72.29-.86v-.05c0-.14 0-.1-.23 0"/></svg> 
                    </a>

                    <a href="https://www.youtube.com/aldosolar" target="_blank">
                        <svg width="100px" height="100px" enable-background="new 0 0 100 100" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <line x1="99.688" x2="-4.823" y1="99.434" y2="99.434" fill="none"/>
                            <path d="M99.688,49.967c0,27.319-22.146,49.467-49.469,49.467c-27.318,0-49.467-22.147-49.467-49.467  S22.9,0.5,50.219,0.5C77.541,0.5,99.688,22.647,99.688,49.967" fill="#010101"/>
                            <path d="m76.705 42.903c0-6.566-5.32-11.881-11.879-11.881h-30.374c-6.562 0-11.88 5.314-11.88 11.881v14.131c0 6.558 5.318 11.878 11.88 11.878h30.375c6.559 0 11.879-5.32 11.879-11.878v-14.131zm-17.867 8.122-13.618 6.739c-0.532 0.291-2.346-0.096-2.346-0.706v-13.83c0-0.615 1.827-1.002 2.361-0.694l13.039 7.09c0.544 0.311 1.121 1.104 0.564 1.401" fill="#fff"/>
                        </svg>
                    </a>

                    <a href="https://www.linkedin.com/company/aldosolar" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 100 100"><path fill="#010101" d="M99.514 49.687c0 27.316-22.148 49.47-49.472 49.47-27.317 0-49.463-22.153-49.463-49.47C.579 22.369 22.725.219 50.042.219c27.323 0 49.472 22.149 49.472 49.468"/><path fill="#fff" d="M29.3 40.471h9.576v30.777H29.3V40.471zm4.792-15.292a5.548 5.548 0 0 1 5.546 5.539 5.552 5.552 0 1 1-11.102 0c0-3.053 2.485-5.539 5.556-5.539M44.882 40.473h9.174v4.212h.129c1.277-2.425 4.396-4.976 9.055-4.976 9.688 0 11.477 6.373 11.477 14.662v16.883h-9.563V56.282c0-3.569-.072-8.157-4.971-8.157-4.982 0-5.74 3.89-5.74 7.899v15.229h-9.561v-30.78z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>