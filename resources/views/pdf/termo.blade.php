<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
  </head>
  <body>
  <style>
    .clearfix:after {
      content: "";
      display: table;
      clear: both;
    }

    a {
      color: #5D6975;
      text-decoration: underline;
    }

    body {
      position: relative;
      width: 21cm;
      height: 29.7cm;
      margin: 0 auto;
      color: #001028;
      background: #FFFFFF;
      font-family: Arial, sans-serif;
      font-size: 12px;
      font-family: Arial;
    }

    header {
      padding: 10px 0;
      margin-bottom: 30px;
    }

    #logo {
      text-align: center;
      margin-bottom: 10px;
    }

    #logo img {
      width: 90px;
    }

    h1 {
      border-top: 1px solid  #5D6975;
      border-bottom: 1px solid  #5D6975;
      color: #5D6975;
      font-size: 2.4em;
      line-height: 1.4em;
      font-weight: normal;
      text-align: center;
      margin: 0 0 20px 0;
      background: url(dimension.png);
    }

    #project {
      float: left;
    }

    #project span {
      color: #5D6975;
      text-align: right;
      width: 52px;
      margin-right: 10px;
      display: inline-block;
      font-size: 0.8em;
    }

    #company {
      float: right;
      text-align: right;
    }

    #project div,
    #company div {
      white-space: nowrap;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
      margin-bottom: 20px;
    }

    table tr:nth-child(2n-1) td {
      background: #F5F5F5;
    }

    table th,
    table td {
      text-align: center;
    }

    table th {
      padding: 5px 20px;
      color: #5D6975;
      border-bottom: 1px solid #C1CED9;
      white-space: nowrap;
      font-weight: normal;
    }

    table .service,
    table .desc {
      text-align: left;
    }

    table td {
      padding: 20px;
      text-align: right;
    }

    table td.service,
    table td.desc {
      vertical-align: top;
    }

    table td.unit,
    table td.qty,
    table td.total {
      font-size: 1.2em;
    }

    table td.grand {
      border-top: 1px solid #5D6975;;
    }

    #notices .notice {
      color: #5D6975;
      font-size: 1.2em;
    }

    footer {
      color: #5D6975;
      width: 100%;
      height: 30px;
      position: absolute;
      bottom: 0;
      border-top: 1px solid #C1CED9;
      padding: 8px 0;
      text-align: center;
    }
  </style>
    <header class="clearfix">
      <div id="logo">
        <img src="logo.png">
      </div>
      <div class="universidade-content">
        <div class="container sub-content">
          <span class="universidade-content-title col-12">INSTITUI????O DE ENSINO</span>
          <div class="row">
            <span class="universidade-description col-10">Raz??o Social: FUNDA????O EDUCACIONAL SEVERINO SOMBRA,
                mantenedora da
                Universidade de Vassouras</span>
          </div>
        </div>
        <div class="container sub-content">
          <div class="row">
              <span class="universidade_description col-8">Endere??o: AV.EXPEDICION??RIO OSWALDO DE ALMEIDA RAMOS, N??
                280</span>
            <span class="universidade__description col-2">Bairro: CENTRO</span>
          </div>
        </div>
        <div class="container sub-content">
          <div class="row">
            <span class="universidade_description col-2">CEP: 27700-000</span>
            <span class="universidade__description col-2">Cidade: Vassouras</span>
            <span class="universidade__description col-2">UF: RJ</span>
            <span class="universidade__description col-4">Telefone: (24) 2471 8378</span>
          </div>
        </div>
        <div class="container sub-content">
          <div class="row">
                        <span
                                class="universidade_description col-5">Representada por: ENG. MARCOS ANTONIO VAZ CAPUTE</span>
            <span class="universidade__description col-5">Cargo: PRESIDENTE</span>
          </div>
        </div>
        <div class="container sub-content">
          <div class="row">
              <span class="universidade_description col-6">Resp. pela assinatura do TCE: PROF. F??BIO DOS SANTOS
                GON??ALVES</span>
            <span class="universidade__description col-4">Cargo: COORD.CE</span>
          </div>
        </div>
      </div>
      <div class="universidade-content" style="margin-top: 50px;">
        <div class="container sub-content">
          <span class="universidade-content-title col-12">CONCEDENTE</span>
          <div class="row">
            <span class="universidade-description col-10">Raz??o Social: FUNDA????O EDUCACIONAL SEVERINO SOMBRA,
                mantenedora da
                Universidade de Vassouras</span>
          </div>
        </div>
        <div class="container sub-content">
          <div class="row">
              <span class="universidade_description col-8">Endere??o: AV.EXPEDICION??RIO OSWALDO DE ALMEIDA RAMOS, N??
                280</span>
            <span class="universidade__description col-2">Bairro: CENTRO</span>
          </div>
        </div>
        <div class="container sub-content">
          <div class="row">
            <span class="universidade_description col-2">CEP: 27700-000</span>
            <span class="universidade__description col-2">Cidade: Vassouras</span>
            <span class="universidade__description col-2">UF: RJ</span>
            <span class="universidade__description col-4">Telefone: (24) 2471 8378</span>
            <span class="universidade__description col-4">CNPJ: </span>
          </div>
        </div>
        <div class="container sub-content">
          <div class="row">
                        <span
                                class="universidade_description col-5">Representada por: ENG. MARCOS ANTONIO VAZ CAPUTE</span>
            <span class="universidade__description col-5">Cargo: PRESIDENTE</span>
          </div>
        </div>
        <div class="container sub-content">
          <div class="row">
              <span class="universidade_description col-6">Supervisor: ENG. MARCOS ANTONIO VAZ CAPUTE</span>
            <span class="universidade__description col-4">Cargo: COORD.CE</span>
          </div>
        </div>
      </div>
      <div class="universidade-content" style="margin-top: 50px;">
        <div class="container sub-content">
          <span class="universidade-content-title col-12">ESTAGIARIO</span>
          <div class="row">
            <span class="universidade-description col-10">NOME: FUNDA????O EDUCACIONAL SEVERINO SOMBRA</span>
          </div>
        </div>
        <div class="container sub-content">
          <div class="row">
              <span class="universidade_description col-8">Endere??o: AV.EXPEDICION??RIO OSWALDO DE ALMEIDA RAMOS, N??
                280</span>
            <span class="universidade__description col-2">Bairro: CENTRO</span>
          </div>
        </div>
        <div class="container sub-content">
          <div class="row">
            <span class="universidade_description col-2">CEP: 27700-000</span>
            <span class="universidade__description col-2">Cidade: Vassouras</span>
            <span class="universidade__description col-2">UF: RJ</span>
            <span class="universidade__description col-4">Telefone: (24) 2471 8378</span>
          </div>
        </div>
        <div class="container sub-content">
          <div class="row">
            <span class="universidade_description col-5">Regularmente Matriculado no: ENG. MARCOS ANTONIO VAZ CAPUTE</span>
            <span class="universidade__description col-5">Periodo do curso de: PRESIDENTE</span>
          </div>
        </div>
        <div class="container sub-content">
          <div class="row">
            <span class="universidade_description col-6">Nivel: Superior</span>
            <span class="universidade__description col-4">Matricula: 201910758</span>
            <span class="universidade__description col-4">CPF: 201910758</span>
            <span class="universidade__description col-4">Data de Nascimento: 201910758</span>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="row col-12">
        <span class="end-description"><b style="font-size: 0.9rem;">Celebram entre si este TERMO DE COMPROMISSO DE EST??GIO, convencionando as cl??usulas seguintes:</b></span><br>
        <span class="end-description"><b style="font-size: 0.9rem;">CL??USULA 1??</b> - Este instrumento tem por objetivo formalizar as condi????es para a realiza????o do EST??GIO DE ESTUDANTE e particularizar a rela????o juridica especial existente entre o ESTUDANTEm a CONCEDENTE e a INSTITUI????O DE ENSINO caracterizando a n??o vincula????o empregaticia, nos termos da legisla????o vigente.</span><br>
        <span class="end-description"><b style="font-size: 0.9rem;">CL??USULA 2??</b> - O EST??GIO DE ESTUDANTES, obrigat??rio ou n??o-obrigat??rio, ?? de interesse curricular e suas condi????es est??o adequadas ao projeto pedag??gico do curso, nos termos da Lei no.11.788/08</span><br>
        <span class="end-description"><b style="font-size: 0.9rem;">CL??USULA 3??</b> - Cabe ?? INSTITUI????O DE ENSINO:</span>
        <p class="end-description">a) Aprovar o EST??GIO de que trata o presente instrumento,
          considerando as condi????es de sua adequa????o ?? proposta pedag??gica do curso, ?? etapa e
          modalidade da forma????o escolar do ESTAGI??RIO e ao hor??rio e calend??rio escolar;</p>
        <p class="end-description">b) Aprovar o Plano de Atividades de Est??gio que consubstancie a
          condi????es / requisitos suficientes ?? exig??ncia legal de adequa????o ?? etapa e modalidade
          de forma????o escolar do ESTAGI??RIO;</p>
        <p class="end-description">c) Avaliar e aprovar as instala????es da CONCEDENTE atrav??s de
          instrumentos pr??prios;</p>
        <p class="end-description">d) Indicar professor orientador, da ??rea a ser desenvolvida no
          EST??GIO, como respons??vel pelo acompanhamento e avalia????o das atividades do
          ESTAGI??RIO;</p>
        <p class="end-description">e) Comunicar a parte concedente do est??gio, no in??cio do per??odo
          letivo, as datas de realiza????o de avalia????es escolares ou acad??micas;</p>
        <p class="end-description"><b style="font-size: 0.9rem;">CL??USULA 4??</b> - Cabe ??
          CONCEDENTE:</p>
        <p class="end-description">a) Zelar pelo cumprimento do presente termo de compromisso;</p>
        <p class="end-description">b) Proporcionar ao ESTAGI??RIO condi????es do exerc??cio das
          atividades pr??ticas compat??veis com plano de atividades de est??gio;</p>
        <p class="end-description">c) Designar um supervisor/professor que seja funcion??rio de seu
          quadro de pessoal</p>
        <p class="end-description">d) Solicitar ao ESTAGI??RIO, a qualquer tempo, documentos
          comprobat??rios da regularidade da situa????o escolar, uma vez que trancamento de
          matr??cula, abandono, conclus??o de curso ou transfer??ncia de Institui????o de Ensino
          constituem motivos de imediata rescis??o;</p>
        <p class="end-description">f) Conceder per??odo de recesso a ser gozado preferencialmente
          durante as f??rias escolares, nos termos da legisla????o vicente,</p>
        <p class="end-description">g) Reduzir a jornada de est??gio nos per??odos de avalia????o
          previamente informados pelo ESTAGI??RIO;</p>
        <p class="end-description">h) Encaminhar para a Institui????o de Ensino o relat??rio individual
          de atividades, assinado pelo Supervisor com o periodicidade m??nima de 6 (seis) meses com
          vista obrigat??ria do ESTAGI??RIO;</p>
        <p class="end-description">i) Entregar, por ocasi??o do desligamento, termo de realiza????o do
          est??gio com indica????o resumida das atividades desenvolvidas, dos per??odos e da avalia????o
          do desempenho;</p>
        <p class="end-description">j) Manter em arquivo e ?? disposi????o da fiscaliza????o os documentos
          firmados que comprovem a rela????o de est??gio;</p>
        <span class="end-description"><b style="font-size: 0.9rem;">CL??USULA 5??</b> - Cabe ao Estagiario:</span>
        <p class="end-description">a) Observar, obedecer e cumprir as normas internas da CONCEDENTE,
          preservando o sigilo e a confidencialidade das informa????es que tiver acesso;</p>
        <p class="end-description">b) Apresentar documento comprobat??rios da regularidade da
          regularidade da sua situa????o escolar, sempre que solicitado pelo COCEDENTE;</p>
        <p class="end-description">c) Manter rigorosamente atualizados seus cadastrais e escolares,
          junto ?? Concedente e ao Agente de Integra????o;</p>
        <p class="end-description">d) Informar de imediato, qualquer altera????o na sua situa????o
          escolar, tais como: trancamento de matr??cula, abandono, conclus??o de curso ou
          transfer??ncia de Institui????o de Ensino;</p>
        <p class="end-description">e) Entregar, obrigatoriamente, ?? Institui????o de Ensino e ??
          Condente uma via do presente instrumento, devidamente assinado pelas partes;</p>
        <p class="end-description">f) Informar previamente ?? CONCEDENTE os per??odos de avalia????o na
          Institui????o de Ensino, para fins de redu????o da jornada de est??gio;</p>
        <p class="end-description">g) Preencher, obrigatoriamente, os Relat??rios de Atividades na
          periodicidade m??nima de 6 (seis) meses e, inclusive, sempre que solicitado;</p>
        <p class="end-description">h) Informar a Institui????o de Ensino em caso de quaisquer
          ocorr??ncias que estejam em desconformidade com o presente Termo de Compromisso de
          Est??gio.</p>
        <span class="end-description"><b style="font-size: 0.9rem;">CL??USULA 6??</b> - O presente instrumento e o Plano de Atividade de Est??gio ser??o alterados ou prorrogados atrav??s de TERMOS ADITIVOS.</span>
        <p class="end-description">Par??grafo Primeiro: O presente Termo de Compromisso de Est??gio
          pode ser denunciado, a qualquer tempo, mediante comunica????o escrita, pela Institui????o de
          Ensino, pela Concedente ou pelo Estagi??rio.</p>
        <p class="end-description">Par??grafo Segundo: O n??o cumprimento de quaisquer cl??usulas do
          presente TERMO DE COMPROMISSO DE EST??GIO, constituem motivos de imediata rescis??o.</p>
        <span class="end-description"><b style="font-size: 0.9rem;">CL??USULA 7??</b> - E, por estarem de inteiro e comum acordo com o Plano de Atividades de Est??gio abaixo descrito e com as demais condi????es estabelecidas neste TERMO DE COMPROMISSO DE EST??GIO - TCE, as partes assinam em 3 vias de igual teor.</span>
      </div>
    </main>
  </body>
</html>