<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Cadastro de Cliente</h5>
            </div>
            <div class="widget-content nopadding">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger">' . $custom_error . '</div>';
} ?>
                <form action="<?php echo current_url(); ?>" id="formCliente" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <label for="codigoCliente" class="control-label">Codigo<span class="required">*</span></label>
                        <div class="controls">
                            <input id="codigoCliente" type="text" name="codigoCliente" value="<?php echo set_value('codigoCliente'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="nomeCliente" class="control-label">Nome / Nome Fantasia<span class="required">*</span></label>
                        <div class="controls">
                            <input id="nomeCliente" type="text" name="nomeCliente" value="<?php echo set_value('nomeCliente'); ?>"  />
                        </div>
                    </div>
                      <div class="control-group">
                        <label for="nomeCompleto" class="control-label">Nome Completo / Razão Social<span class="required">*</span></label>
                        <div class="controls">
                            <input id="nomeCompleto" type="text" name="nomeCompleto" value="<?php echo set_value('nomeCompleto'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="data" class="control-label">Data Nascimento / Data Fundação<span class="required">*</span></label>
                        <div class="controls">
                            <input id="data" type="text" name="data" value="<?php echo set_value('data'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="documento" class="control-label">CPF/CNPJ<span class="required">*</span></label>
                        <div class="controls">
                            <input id="documento" type="text" name="documento" value="<?php echo set_value('documento'); ?>"  />
                        </div></div>
                           <div class="control-group">
                        <label for="rgie" class="control-label">RG/IE<span class="required">*</span></label>
                        <div class="controls">
                            <input id="rgie" type="text" name="rgie" value="<?php echo set_value('rgie'); ?>"  />
                        </div>
                    </div>
                          <div class="control-group">
                        <label for="info" class="control-label">Informações</label>
                        <div class="controls">
                             <textarea class="span12" name="info" id="info" cols="30" rows="5" value="<?php echo set_value('info'); ?>"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="telefone" class="control-label">Telefone<span class="required">*</span></label>
                        <div class="controls">
                            <input id="telefone" type="text" name="telefone" value="<?php echo set_value('telefone'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="celular" class="control-label">Celular</label>
                        <div class="controls">
                            <input id="celular" type="text" name="celular" value="<?php echo set_value('celular'); ?>"  />
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="email" class="control-label">Email<span class="required">*</span></label>
                        <div class="controls">
                            <input id="email" type="text" name="email" value="<?php echo set_value('email'); ?>"  />
                        </div>
                    </div>
                                          <div class="control-group" class="control-label">
                        <label for="cep" class="control-label">CEP<span class="required">*</span></label>
                        <div class="controls">
                            <input id="cep" type="text" name="cep" value=""  />
                        </div></div>
                        
                         <div class="control-group" class="control-label">
                        <label for="rua" class="control-label">Rua<span class="required">*</span></label>
                        <div class="controls">
                            <input id="rua" type="text" name="rua" value=""  />
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="numero" class="control-label">Número<span class="required">*</span></label>
                        <div class="controls">
                            <input id="numero" type="text" name="numero" value=""  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="complemento" class="control-label">Complemento</label>
                        <div class="controls">
                            <input id="complemento" type="text" name="complemento" value="<?php echo set_value('complemento'); ?>"  />
                        </div>
                    </div>
                    
                    <div class="control-group" class="control-label">
                        <label for="bairro" class="control-label">Bairro<span class="required">*</span></label>
                        <div class="controls">
                            <input id="bairro" type="text" name="bairro" value=""  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cidade" class="control-label">Cidade<span class="required">*</span></label>
                        <div class="controls">
                            <select class="span3" name="cidade" id="cidade" value="">
                                                <option value=""></option>
                                                <option id='Agudo'>Agudo</option>
                                                <option id='Ajuricaba'>Ajuricaba</option>
                                                <option id='Alecrim'>Alecrim</option>
                                                <option id='Alegrete'>Alegrete</option>
                                                <option id='Alegria'>Alegria</option>
                                                <option id='Alpestre'>Alpestre</option>
                                                <option id='Alto Alegre'>Alto Alegre</option>
                                                <option id='Alto Feliz'>Alto Feliz</option>
                                                <option id='Alvorada'>Alvorada</option>
                                                <option id='Amaral Ferrador'>Amaral Ferrador</option>
                                                <option id='Ametista do Sul'>Ametista do Sul</option>
                                                <option id='Andre da Rocha'>Andre da Rocha</option>
                                                <option id='Anta Gorda'>Anta Gorda</option>
                                                <option id='Antonio Prado'>Antonio Prado</option>
                                                <option id='Arambare'>Arambare</option>
                                                <option id='Ararica'>Ararica</option>
                                                <option id='Aratiba'>Aratiba</option>
                                                <option id='Arroio Grande'>Arroio Grande</option>
                                                <option id='Arroio do Meio'>Arroio do Meio</option>
                                                <option id='Arroio do Sal'>Arroio do Sal</option>
                                                <option id='Arroio do Tigre'>Arroio do Tigre</option>
                                                <option id='Arroio dos Ratos'>Arroio dos Ratos</option>
                                                <option id='Arvorezinha'>Arvorezinha</option>
                                                <option id='Augusto Pestana'>Augusto Pestana</option>
                                                <option id='Aurea'>Aurea</option>
                                                <option id='Bage'>Bage</option>
                                                <option id='Balneario Pinhal'>Balneario Pinhal</option>
                                                <option id='Barao de Cotegipe'>Barao de Cotegipe</option>
                                                <option id='Barao do Triunfo'>Barao do Triunfo</option>
                                                <option id='Barao'>Barao</option>
                                                <option id='Barra Funda'>Barra Funda</option>
                                                <option id='Barra do Guarita'>Barra do Guarita</option>
                                                <option id='Barra do Quarai'>Barra do Quarai</option>
                                                <option id='Barra do Ribeiro'>Barra do Ribeiro</option>
                                                <option id='Barra do Rio Azul'>Barra do Rio Azul</option>
                                                <option id='Barracao'>Barracao</option>
                                                <option id='Barros Cassal'>Barros Cassal</option>
                                                <option id='Benjamin Constant do Sul'>Benjamin Constant do Sul</option>
                                                <option id='Bento Goncalves'>Bento Goncalves</option>
                                                <option id='Boa Vista das Missoes'>Boa Vista das Missoes</option>
                                                <option id='Boa Vista do Burica'>Boa Vista do Burica</option>
                                                <option id='Boa Vista do Sul'>Boa Vista do Sul</option>
                                                <option id='Bom Jesus'>Bom Jesus</option>
                                                <option id='Bom Principio'>Bom Principio</option>
                                                <option id='Bom Progresso'>Bom Progresso</option>
                                                <option id='Bom Retiro do Sul'>Bom Retiro do Sul</option>
                                                <option id='Boqueirao do Leao'>Boqueirao do Leao</option>
                                                <option id='Bossoroca'>Bossoroca</option>
                                                <option id='Braga'>Braga</option>
                                                <option id='Brochier'>Brochier</option>
                                                <option id='Butia'>Butia</option>
                                                <option id='Cacapava do Sul'>Cacapava do Sul</option>
                                                <option id='Cacequi'>Cacequi</option>
                                                <option id='Cachoeira do Sul'>Cachoeira do Sul</option>
                                                <option id='Cachoeirinha'>Cachoeirinha</option>
                                                <option id='Cacique Doble'>Cacique Doble</option>
                                                <option id='Caibate'>Caibate</option>
                                                <option id='Caicara'>Caicara</option>
                                                <option id='Camaqua'>Camaqua</option>
                                                <option id='Camargo'>Camargo</option>
                                                <option id='Cambara do Sul'>Cambara do Sul</option>
                                                <option id='Campestre da Serra'>Campestre da Serra</option>
                                                <option id='Campina das Missoes'>Campina das Missoes</option>
                                                <option id='Campinas do Sul'>Campinas do Sul</option>
                                                <option id='Campo Bom'>Campo Bom</option>
                                                <option id='Campo Novo'>Campo Novo</option>
                                                <option id='Campos Borges'>Campos Borges</option>
                                                <option id='Candelaria'>Candelaria</option>
                                                <option id='Candido Godoi'>Candido Godoi</option>
                                                <option id='Candiota'>Candiota</option>
                                                <option id='Canela'>Canela</option>
                                                <option id='Cangucu'>Cangucu</option>
                                                <option id='Canoas'>Canoas</option>
                                                <option id='Capao da Canoa'>Capao da Canoa</option>
                                                <option id='Capao do Leao'>Capao do Leao</option>
                                                <option id='Capela de Santana'>Capela de Santana</option>
                                                <option id='Capitao'>Capitao</option>
                                                <option id='Capivari do Sul'>Capivari do Sul</option>
                                                <option id='Caraa'>Caraa</option>
                                                <option id='Carazinho'>Carazinho</option>
                                                <option id='Carlos Barbosa'>Carlos Barbosa</option>
                                                <option id='Carlos Gomes'>Carlos Gomes</option>
                                                <option id='Casca'>Casca</option>
                                                <option id='Caseiros'>Caseiros</option>
                                                <option id='Catuipe'>Catuipe</option>
                                                <option id='Caxias do Sul'>Caxias do Sul</option>
                                                <option id='Centenario'>Centenario</option>
                                                <option id='Cerrito'>Cerrito</option>
                                                <option id='Cerro Branco'>Cerro Branco</option>
                                                <option id='Cerro Grande do Sul'>Cerro Grande do Sul</option>
                                                <option id='Cerro Grande'>Cerro Grande</option>
                                                <option id='Cerro Largo'>Cerro Largo</option>
                                                <option id='Chapada'>Chapada</option>
                                                <option id='Charqueadas'>Charqueadas</option>
                                                <option id='Charrua'>Charrua</option>
                                                <option id='Chiapeta'>Chiapeta</option>
                                                <option id='Chui'>Chui</option>
                                                <option id='Chuvisca'>Chuvisca</option>
                                                <option id='Cidreira'>Cidreira</option>
                                                <option id='Ciriaco'>Ciriaco</option>
                                                <option id='Colinas'>Colinas</option>
                                                <option id='Colorado'>Colorado</option>
                                                <option id='Condor'>Condor</option>
                                                <option id='Constantina'>Constantina</option>
                                                <option id='Coqueiros do Sul'>Coqueiros do Sul</option>
                                                <option id='Coronel Barros'>Coronel Barros</option>
                                                <option id='Coronel Bicaco'>Coronel Bicaco</option>
                                                <option id='Cotipora'>Cotipora</option>
                                                <option id='Coxilha'>Coxilha</option>
                                                <option id='Crissiumal'>Crissiumal</option>
                                                <option id='Cristal do Sul'>Cristal do Sul</option>
                                                <option id='Cristal'>Cristal</option>
                                                <option id='Cruz Alta'>Cruz Alta</option>
                                                <option id='Cruzeiro do Sul'>Cruzeiro do Sul</option>
                                                <option id='David Canabarro'>David Canabarro</option>
                                                <option id='Derrubadas'>Derrubadas</option>
                                                <option id='Dezesseis de Novembro'>Dezesseis de Novembro</option>
                                                <option id='Dilermano de Aguiar'>Dilermano de Aguiar</option>
                                                <option id='Dois Irmaos das Missoes'>Dois Irmaos das Missoes</option>
                                                <option id='Dois Irmaos'>Dois Irmaos</option>
                                                <option id='Dois Lajeados'>Dois Lajeados</option>
                                                <option id='Dom Feliciano'>Dom Feliciano</option>
                                                <option id='Dom Pedrito'>Dom Pedrito</option>
                                                <option id='Dom Pedro de Alcantara'>Dom Pedro de Alcantara</option>
                                                <option id='Dona Francisca'>Dona Francisca</option>
                                                <option id='Doutor Mauricio Cardoso'>Doutor Mauricio Cardoso</option>
                                                <option id='Doutor Ricardo'>Doutor Ricardo</option>
                                                <option id='Eldorado do Sul'>Eldorado do Sul</option>
                                                <option id='Encantado'>Encantado</option>
                                                <option id='Encruzilhada do Sul'>Encruzilhada do Sul</option>
                                                <option id='Engenho Velho'>Engenho Velho</option>
                                                <option id='Entre Rios do Sul'>Entre Rios do Sul</option>
                                                <option id='Entre-Ijuis'>Entre-Ijuis</option>
                                                <option id='Erebango'>Erebango</option>
                                                <option id='Erechim'>Erechim</option>
                                                <option id='Ernestina'>Ernestina</option>
                                                <option id='Erval Grande'>Erval Grande</option>
                                                <option id='Erval Seco'>Erval Seco</option>
                                                <option id='Esmeralda'>Esmeralda</option>
                                                <option id='Esperanca do Sul'>Esperanca do Sul</option>
                                                <option id='Espumoso'>Espumoso</option>
                                                <option id='Estacao'>Estacao</option>
                                                <option id='Estancia Velha'>Estancia Velha</option>
                                                <option id='Esteio'>Esteio</option>
                                                <option id='Estrela Velha'>Estrela Velha</option>
                                                <option id='Estrela'>Estrela</option>
                                                <option id='Eugenio de Castro'>Eugenio de Castro</option>
                                                <option id='Fagundes Varela'>Fagundes Varela</option>
                                                <option id='Farroupilha'>Farroupilha</option>
                                                <option id='Faxinal do Soturno'>Faxinal do Soturno</option>
                                                <option id='Faxinalzinho'>Faxinalzinho</option>
                                                <option id='Fazenda Vilanova'>Fazenda Vilanova</option>
                                                <option id='Feliz'>Feliz</option>
                                                <option id='Flores da Cunha'>Flores da Cunha</option>
                                                <option id='Floriano Peixoto'>Floriano Peixoto</option>
                                                <option id='Fontoura Xavier'>Fontoura Xavier</option>
                                                <option id='Formigueiro'>Formigueiro</option>
                                                <option id='Fortaleza dos Valos'>Fortaleza dos Valos</option>
                                                <option id='Frederico Westphalen'>Frederico Westphalen</option>
                                                <option id='Garibaldi'>Garibaldi</option>
                                                <option id='Garruchos'>Garruchos</option>
                                                <option id='Gaurama'>Gaurama</option>
                                                <option id='General Camara'>General Camara</option>
                                                <option id='Gentil'>Gentil</option>
                                                <option id='Getulio Vargas'>Getulio Vargas</option>
                                                <option id='Girua'>Girua</option>
                                                <option id='Glorinha'>Glorinha</option>
                                                <option id='Gramado Xavier'>Gramado Xavier</option>
                                                <option id='Gramado dos Loureiros'>Gramado dos Loureiros</option>
                                                <option id='Gramado'>Gramado</option>
                                                <option id='Gravatai'>Gravatai</option>
                                                <option id='Guabiju'>Guabiju</option>
                                                <option id='Guaiba'>Guaiba</option>
                                                <option id='Guapore'>Guapore</option>
                                                <option id='Guarani das Missoes'>Guarani das Missoes</option>
                                                <option id='Harmonia'>Harmonia</option>
                                                <option id='Herval'>Herval</option>
                                                <option id='Herveiras'>Herveiras</option>
                                                <option id='Horizontina'>Horizontina</option>
                                                <option id='Hulha Negra'>Hulha Negra</option>
                                                <option id='Humaita'>Humaita</option>
                                                <option id='Ibarama'>Ibarama</option>
                                                <option id='Ibiaca'>Ibiaca</option>
                                                <option id='Ibiraiaras'>Ibiraiaras</option>
                                                <option id='Ibirapuita'>Ibirapuita</option>
                                                <option id='Ibiruba'>Ibiruba</option>
                                                <option id='Igrejinha'>Igrejinha</option>
                                                <option id='Ijui'>Ijui</option>
                                                <option id='Ilopolis'>Ilopolis</option>
                                                <option id='Imbe'>Imbe</option>
                                                <option id='Imigrante'>Imigrante</option>
                                                <option id='Independencia'>Independencia</option>
                                                <option id='Inhacora'>Inhacora</option>
                                                <option id='Ipe'>Ipe</option>
                                                <option id='Ipiranga do Sul'>Ipiranga do Sul</option>
                                                <option id='Irai'>Irai</option>
                                                <option id='Itaara'>Itaara</option>
                                                <option id='Itacurubi'>Itacurubi</option>
                                                <option id='Itapuca'>Itapuca</option>
                                                <option id='Itaqui'>Itaqui</option>
                                                <option id='Itatiba do Sul'>Itatiba do Sul</option>
                                                <option id='Ivora'>Ivora</option>
                                                <option id='Ivoti'>Ivoti</option>
                                                <option id='Jaboticaba'>Jaboticaba</option>
                                                <option id='Jacutinga'>Jacutinga</option>
                                                <option id='Jaguarao'>Jaguarao</option>
                                                <option id='Jaguari'>Jaguari</option>
                                                <option id='Jaquirana'>Jaquirana</option>
                                                <option id='Jari'>Jari</option>
                                                <option id='Joia'>Joia</option>
                                                <option id='Julio de Castilhos'>Julio de Castilhos</option>
                                                <option id='Lagoa Vermelha'>Lagoa Vermelha</option>
                                                <option id='Lagoa dos Tres Cantos'>Lagoa dos Tres Cantos</option>
                                                <option id='Lagoao'>Lagoao</option>
                                                <option id='Lajeado do Bugre'>Lajeado do Bugre</option>
                                                <option id='Lajeado'>Lajeado</option>
                                                <option id='Lavras do Sul'>Lavras do Sul</option>
                                                <option id='Liberato Salzano'>Liberato Salzano</option>
                                                <option id='Lindolfo Collor'>Lindolfo Collor</option>
                                                <option id='Linha Nova'>Linha Nova</option>
                                                <option id='Macambara'>Macambara</option>
                                                <option id='Machadinho'>Machadinho</option>
                                                <option id='Mampituba'>Mampituba</option>
                                                <option id='Manoel Viana'>Manoel Viana</option>
                                                <option id='Maquine'>Maquine</option>
                                                <option id='Marata'>Marata</option>
                                                <option id='Marau'>Marau</option>
                                                <option id='Marcelino Ramos'>Marcelino Ramos</option>
                                                <option id='Mariana Pimentel'>Mariana Pimentel</option>
                                                <option id='Mariano Moro'>Mariano Moro</option>
                                                <option id='Marques de Souza'>Marques de Souza</option>
                                                <option id='Mata'>Mata</option>
                                                <option id='Mato Castelhano'>Mato Castelhano</option>
                                                <option id='Mato Leitao'>Mato Leitao</option>
                                                <option id='Maximiliano de Almeida'>Maximiliano de Almeida</option>
                                                <option id='Minas do Leao'>Minas do Leao</option>
                                                <option id='Miraguai'>Miraguai</option>
                                                <option id='Montauri'>Montauri</option>
                                                <option id='Monte Alegre dos Campos'>Monte Alegre dos Campos</option>
                                                <option id='Monte Belo do Sul'>Monte Belo do Sul</option>
                                                <option id='Montenegro'>Montenegro</option>
                                                <option id='Mormaco'>Mormaco</option>
                                                <option id='Morrinhos do Sul'>Morrinhos do Sul</option>
                                                <option id='Morro Redondo'>Morro Redondo</option>
                                                <option id='Morro Reuter'>Morro Reuter</option>
                                                <option id='Mostardas'>Mostardas</option>
                                                <option id='Mucum'>Mucum</option>
                                                <option id='Muitos Capoes'>Muitos Capoes</option>
                                                <option id='Muliterno'>Muliterno</option>
                                                <option id='Nao-Me-Toque'>Nao-Me-Toque</option>
                                                <option id='Nicolau Vergueiro'>Nicolau Vergueiro</option>
                                                <option id='Nonoai'>Nonoai</option>
                                                <option id='Nova Alvorada'>Nova Alvorada</option>
                                                <option id='Nova Araca'>Nova Araca</option>
                                                <option id='Nova Bassano'>Nova Bassano</option>
                                                <option id='Nova Boa Vista'>Nova Boa Vista</option>
                                                <option id='Nova Brescia'>Nova Brescia</option>
                                                <option id='Nova Candelaria'>Nova Candelaria</option>
                                                <option id='Nova Esperanca do Sul'>Nova Esperanca do Sul</option>
                                                <option id='Nova Hartz'>Nova Hartz</option>
                                                <option id='Nova Padua'>Nova Padua</option>
                                                <option id='Nova Palma'>Nova Palma</option>
                                                <option id='Nova Petropolis'>Nova Petropolis</option>
                                                <option id='Nova Prata'>Nova Prata</option>
                                                <option id='Nova Ramada'>Nova Ramada</option>
                                                <option id='Nova Roma do Sul'>Nova Roma do Sul</option>
                                                <option id='Nova Santa Rita'>Nova Santa Rita</option>
                                                <option id='Novo Barreiro'>Novo Barreiro</option>
                                                <option id='Novo Cabrais'>Novo Cabrais</option>
                                                <option id='Novo Hamburgo'>Novo Hamburgo</option>
                                                <option id='Novo Machado'>Novo Machado</option>
                                                <option id='Novo Tiradentes'>Novo Tiradentes</option>
                                                <option id='Osorio'>Osorio</option>
                                                <option id='Paim Filho'>Paim Filho</option>
                                                <option id='Palmares do Sul'>Palmares do Sul</option>
                                                <option id='Palmeira das Missoes'>Palmeira das Missoes</option>
                                                <option id='Palmitinho'>Palmitinho</option>
                                                <option id='Panambi'>Panambi</option>
                                                <option id='Pantano Grande'>Pantano Grande</option>
                                                <option id='Parai'>Parai</option>
                                                <option id='Paraiso do Sul'>Paraiso do Sul</option>
                                                <option id='Pareci Novo'>Pareci Novo</option>
                                                <option id='Parobe'>Parobe</option>
                                                <option id='Passa Sete'>Passa Sete</option>
                                                <option id='Passo Fundo'>Passo Fundo</option>
                                                <option id='Passo do Sobrado'>Passo do Sobrado</option>
                                                <option id='Paverama'>Paverama</option>
                                                <option id='Pedro Osorio'>Pedro Osorio</option>
                                                <option id='Pejucara'>Pejucara</option>
                                                <option id='Pelotas'>Pelotas</option>
                                                <option id='Picada Cafe'>Picada Cafe</option>
                                                <option id='Pinhal Grande'>Pinhal Grande</option>
                                                <option id='Pinhal'>Pinhal</option>
                                                <option id='Pinheirinho do Vale'>Pinheirinho do Vale</option>
                                                <option id='Pinheiro Machado'>Pinheiro Machado</option>
                                                <option id='Pirapo'>Pirapo</option>
                                                <option id='Piratini'>Piratini</option>
                                                <option id='Planalto'>Planalto</option>
                                                <option id='Poco das Antas'>Poco das Antas</option>
                                                <option id='Pontao'>Pontao</option>
                                                <option id='Ponte Preta'>Ponte Preta</option>
                                                <option id='Portao'>Portao</option>
                                                <option id='Porto Alegre'>Porto Alegre</option>
                                                <option id='Porto Lucena'>Porto Lucena</option>
                                                <option id='Porto Maua'>Porto Maua</option>
                                                <option id='Porto Vera Cruz'>Porto Vera Cruz</option>
                                                <option id='Porto Xavier'>Porto Xavier</option>
                                                <option id='Pouso Novo'>Pouso Novo</option>
                                                <option id='Presidente Lucena'>Presidente Lucena</option>
                                                <option id='Progresso'>Progresso</option>
                                                <option id='Protasio Alves'>Protasio Alves</option>
                                                <option id='Putinga'>Putinga</option>
                                                <option id='Quarai'>Quarai</option>
                                                <option id='Quevedos'>Quevedos</option>
                                                <option id='Quinze de Novembro'>Quinze de Novembro</option>
                                                <option id='Redentora'>Redentora</option>
                                                <option id='Relvado'>Relvado</option>
                                                <option id='Restinga Seca'>Restinga Seca</option>
                                                <option id='Rio Grande'>Rio Grande</option>
                                                <option id='Rio Pardo'>Rio Pardo</option>
                                                <option id='Rio dos Indios'>Rio dos Indios</option>
                                                <option id='Riozinho'>Riozinho</option>
                                                <option id='Roca Sales'>Roca Sales</option>
                                                <option id='Rodeio Bonito'>Rodeio Bonito</option>
                                                <option id='Rolante'>Rolante</option>
                                                <option id='Ronda Alta'>Ronda Alta</option>
                                                <option id='Rondinha'>Rondinha</option>
                                                <option id='Roque Gonzales'>Roque Gonzales</option>
                                                <option id='Rosario do Sul'>Rosario do Sul</option>
                                                <option id='Sagrada Familia'>Sagrada Familia</option>
                                                <option id='Saldanha Marinho'>Saldanha Marinho</option>
                                                <option id='Salto do Jacui'>Salto do Jacui</option>
                                                <option id='Salvador das Missoes'>Salvador das Missoes</option>
                                                <option id='Salvador do Sul'>Salvador do Sul</option>
                                                <option id='Sananduva'>Sananduva</option>
                                                <option id='Santa Barbara do Sul'>Santa Barbara do Sul</option>
                                                <option id='Santa Clara do Sul'>Santa Clara do Sul</option>
                                                <option id='Santa Cruz do Sul'>Santa Cruz do Sul</option>
                                                <option id='Santa Maria do Herval'>Santa Maria do Herval</option>
                                                <option id='Santa Maria'>Santa Maria</option>
                                                <option id='Santa Rosa'>Santa Rosa</option>
                                                <option id='Santa Tereza'>Santa Tereza</option>
                                                <option id='Santa Vitoria do Palmar'>Santa Vitoria do Palmar</option>
                                                <option id='Santana da Boa Vista'>Santana da Boa Vista</option>
                                                <option id='Santana do Livramento'>Santana do Livramento</option>
                                                <option id='Santiago'>Santiago</option>
                                                <option id='Santo Angelo'>Santo Angelo</option>
                                                <option id='Santo Antonio da Patrulha'>Santo Antonio da Patrulha</option>
                                                <option id='Santo Antonio das Missoes'>Santo Antonio das Missoes</option>
                                                <option id='Santo Antonio do Palma'>Santo Antonio do Palma</option>
                                                <option id='Santo Antonio do Planalto'>Santo Antonio do Planalto</option>
                                                <option id='Santo Augusto'>Santo Augusto</option>
                                                <option id='Santo Cristo'>Santo Cristo</option>
                                                <option id='Santo Expedito do Sul'>Santo Expedito do Sul</option>
                                                <option id='Sao Borja'>Sao Borja</option>
                                                <option id='Sao Domingos do Sul'>Sao Domingos do Sul</option>
                                                <option id='Sao Francisco de Assis'>Sao Francisco de Assis</option>
                                                <option id='Sao Francisco de Paula'>Sao Francisco de Paula</option>
                                                <option id='Sao Gabriel'>Sao Gabriel</option>
                                                <option id='Sao Jeronimo'>Sao Jeronimo</option>
                                                <option id='Sao Joao da Urtiga'>Sao Joao da Urtiga</option>
                                                <option id='Sao Joao do Polesine'>Sao Joao do Polesine</option>
                                                <option id='Sao Jorge'>Sao Jorge</option>
                                                <option id='Sao Jose das Missoes'>Sao Jose das Missoes</option>
                                                <option id='Sao Jose do Herval'>Sao Jose do Herval</option>
                                                <option id='Sao Jose do Hortencio'>Sao Jose do Hortencio</option>
                                                <option id='Sao Jose do Inhacora'>Sao Jose do Inhacora</option>
                                                <option id='Sao Jose do Norte'>Sao Jose do Norte</option>
                                                <option id='Sao Jose do Ouro'>Sao Jose do Ouro</option>
                                                <option id='Sao Jose dos Ausentes'>Sao Jose dos Ausentes</option>
                                                <option id='Sao Leopoldo'>Sao Leopoldo</option>
                                                <option id='Sao Lourenco do Sul'>Sao Lourenco do Sul</option>
                                                <option id='Sao Luiz Gonzaga'>Sao Luiz Gonzaga</option>
                                                <option id='Sao Marcos'>Sao Marcos</option>
                                                <option id='Sao Martinho da Serra'>Sao Martinho da Serra</option>
                                                <option id='Sao Martinho'>Sao Martinho</option>
                                                <option id='Sao Miguel das Missoes'>Sao Miguel das Missoes</option>
                                                <option id='Sao Nicolau'>Sao Nicolau</option>
                                                <option id='Sao Paulo das Missoes'>Sao Paulo das Missoes</option>
                                                <option id='Sao Pedro da Serra'>Sao Pedro da Serra</option>
                                                <option id='Sao Pedro do Butia'>Sao Pedro do Butia</option>
                                                <option id='Sao Pedro do Sul'>Sao Pedro do Sul</option>
                                                <option id='Sao Sebastiao do Cai'>Sao Sebastiao do Cai</option>
                                                <option id='Sao Sepe'>Sao Sepe</option>
                                                <option id='Sao Valentim do Sul'>Sao Valentim do Sul</option>
                                                <option id='Sao Valentim'>Sao Valentim</option>
                                                <option id='Sao Valerio do Sul'>Sao Valerio do Sul</option>
                                                <option id='Sao Vendelino'>Sao Vendelino</option>
                                                <option id='Sao Vicente do Sul'>Sao Vicente do Sul</option>
                                                <option id='Sapiranga'>Sapiranga</option>
                                                <option id='Sapucaia do Sul'>Sapucaia do Sul</option>
                                                <option id='Sarandi'>Sarandi</option>
                                                <option id='Seberi'>Seberi</option>
                                                <option id='Sede Nova'>Sede Nova</option>
                                                <option id='Segredo'>Segredo</option>
                                                <option id='Selbach'>Selbach</option>
                                                <option id='Senador Salgado Filho'>Senador Salgado Filho</option>
                                                <option id='Sentinela do Sul'>Sentinela do Sul</option>
                                                <option id='Serafina Correa'>Serafina Correa</option>
                                                <option id='Serio'>Serio</option>
                                                <option id='Sertao Santana'>Sertao Santana</option>
                                                <option id='Sertao'>Sertao</option>
                                                <option id='Sete de Setembro'>Sete de Setembro</option>
                                                <option id='Severiano de Almeida'>Severiano de Almeida</option>
                                                <option id='Silveira Martins'>Silveira Martins</option>
                                                <option id='Sinimbu'>Sinimbu</option>
                                                <option id='Sobradinho'>Sobradinho</option>
                                                <option id='Soledade'>Soledade</option>
                                                <option id='Tabai'>Tabai</option>
                                                <option id='Tapejara'>Tapejara</option>
                                                <option id='Tapera'>Tapera</option>
                                                <option id='Tapes'>Tapes</option>
                                                <option id='Taquara'>Taquara</option>
                                                <option id='Taquari'>Taquari</option>
                                                <option id='Taquarucu do Sul'>Taquarucu do Sul</option>
                                                <option id='Tavares'>Tavares</option>
                                                <option id='Tenente Portela'>Tenente Portela</option>
                                                <option id='Terra de Areia'>Terra de Areia</option>
                                                <option id='Teutonia'>Teutonia</option>
                                                <option id='Tiradentes do Sul'>Tiradentes do Sul</option>
                                                <option id='Toropi'>Toropi</option>
                                                <option id='Torres'>Torres</option>
                                                <option id='Tramandai'>Tramandai</option>
                                                <option id='Travesseiro'>Travesseiro</option>
                                                <option id='Tres Arroios'>Tres Arroios</option>
                                                <option id='Tres Cachoeiras'>Tres Cachoeiras</option>
                                                <option id='Tres Coroas'>Tres Coroas</option>
                                                <option id='Tres Forquilhas'>Tres Forquilhas</option>
                                                <option id='Tres Palmeiras'>Tres Palmeiras</option>
                                                <option id='Tres Passos'>Tres Passos</option>
                                                <option id='Tres de Maio'>Tres de Maio</option>
                                                <option id='Trindade do Sul'>Trindade do Sul</option>
                                                <option id='Triunfo'>Triunfo</option>
                                                <option id='Tucunduva'>Tucunduva</option>
                                                <option id='Tunas'>Tunas</option>
                                                <option id='Tupanci do Sul'>Tupanci do Sul</option>
                                                <option id='Tupancireta'>Tupancireta</option>
                                                <option id='Tupandi'>Tupandi</option>
                                                <option id='Tuparendi'>Tuparendi</option>
                                                <option id='Turucu'>Turucu</option>
                                                <option id='Ubiretama'>Ubiretama</option>
                                                <option id='Uniao da Serra'>Uniao da Serra</option>
                                                <option id='Unistalda'>Unistalda</option>
                                                <option id='Uruguaiana'>Uruguaiana</option>
                                                <option id='Vacaria'>Vacaria</option>
                                                <option id='Vale Real'>Vale Real</option>
                                                <option id='Vale Verde'>Vale Verde</option>
                                                <option id='Vale do Sol'>Vale do Sol</option>
                                                <option id='Vanini'>Vanini</option>
                                                <option id='Venancio Aires'>Venancio Aires</option>
                                                <option id='Vera Cruz'>Vera Cruz</option>
                                                <option id='Veranopolis'>Veranopolis</option>
                                                <option id='Vespasiano Correa'>Vespasiano Correa</option>
                                                <option id='Viadutos'>Viadutos</option>
                                                <option id='Viamao'>Viamao</option>
                                                <option id='Vicente Dutra'>Vicente Dutra</option>
                                                <option id='Victor Graeff'>Victor Graeff</option>
                                                <option id='Vila Flores'>Vila Flores</option>
                                                <option id='Vila Langaro'>Vila Langaro</option>
                                                <option id='Vila Maria'>Vila Maria</option>
                                                <option id='Vila Nova do Sul'>Vila Nova do Sul</option>
                                                <option id='Vista Alegre do Prata'>Vista Alegre do Prata</option>
                                                <option id='Vista Alegre'>Vista Alegre</option>
                                                <option id='Vista Gaucha'>Vista Gaucha</option>
                                                <option id='Vitoria das Missoes'>Vitoria das Missoes</option>
                                                <option id='Xangri-la'>Xangri-la</option>
                                                </select>

                    </div>
                            
                            
                      
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="estado" class="control-label">Estado<span class="required">*</span></label>
                        <div class="controls">
                            <input id="estado" type="text" name="estado" value="RS"  />
                        </div>
                    </div>
                    
                    <div class="control-group" class="control-label">
                        <label for="obs" class="control-label">Observações</label>
                        <div class="controls">
                            <input id="obs" type="text" name="obs" value="<?php echo set_value('obs'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group" class="control-label">
                        <label for="como" class="control-label">Como conheceu</label>
                        <div class="controls">
                            <input id="como" type="text" name="como" value="<?php echo set_value('como'); ?>"  />
                        </div>
                    </div>


                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar</button>
                                <a href="<?php echo base_url() ?>index.php/clientes" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
           $('#formCliente').validate({
            rules :{
                  codigoCliente:{ required: true},
                  nomeCliente:{ required: true},
                  nomeCompleto:{ required: true},
                  documento:{ required: true},
                  data:{ required: true},
                  rgie:{ required: true},
                  email:{ required: true},
                  telefone:{ required: true},
                  rua:{ required: true},
                  numero:{ required: true},
                  bairro:{ required: true},
                  cidade:{ required: true},
                  estado:{ required: true},
                  cep:{ required: true},
            },
            messages:{
                  nomeCliente :{ required: 'Campo Requerido.'},
                  codigoCliente :{ required: 'Campo Requerido.'},
                  nomeCompleto :{ required: 'Campo Requerido.'},
                  documento :{ required: 'Campo Requerido.'},
                  data :{ required: 'Campo Requerido.'},
                  rgie :{ required: 'Campo Requerido.'},
                  telefone:{ required: 'Campo Requerido.'},
                  rua:{ required: 'Campo Requerido.'},
                  email:{ required: 'Campo Requerido.'},
                  numero:{ required: 'Campo Requerido.'},
                  bairro:{ required: 'Campo Requerido.'},
                  cidade:{ required: 'Campo Requerido.'},
                  estado:{ required: 'Campo Requerido.'},
                  cep:{ required: 'Campo Requerido.'},


            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
           });
      });
</script>
