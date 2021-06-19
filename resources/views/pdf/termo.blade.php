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
          <span class="universidade-content-title col-12">INSTITUIÇÃO DE ENSINO</span>
          <div class="row">
            <span class="universidade-description col-10">Razão Social: FUNDAÇÃO EDUCACIONAL SEVERINO SOMBRA,
                mantenedora da
                Universidade de Vassouras</span>
          </div>
        </div>
        <div class="container sub-content">
          <div class="row">
              <span class="universidade_description col-8">Endereço: AV.EXPEDICIONÁRIO OSWALDO DE ALMEIDA RAMOS, N°
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
              <span class="universidade_description col-6">Resp. pela assinatura do TCE: PROF. FÁBIO DOS SANTOS
                GONÇALVES</span>
            <span class="universidade__description col-4">Cargo: COORD.CE</span>
          </div>
        </div>
      </div>
      <div class="universidade-content" style="margin-top: 50px;">
        <div class="container sub-content">
          <span class="universidade-content-title col-12">CONCEDENTE</span>
          <div class="row">
            <span class="universidade-description col-10">Razão Social: FUNDAÇÃO EDUCACIONAL SEVERINO SOMBRA,
                mantenedora da
                Universidade de Vassouras</span>
          </div>
        </div>
        <div class="container sub-content">
          <div class="row">
              <span class="universidade_description col-8">Endereço: AV.EXPEDICIONÁRIO OSWALDO DE ALMEIDA RAMOS, N°
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
            <span class="universidade-description col-10">NOME: FUNDAÇÃO EDUCACIONAL SEVERINO SOMBRA</span>
          </div>
        </div>
        <div class="container sub-content">
          <div class="row">
              <span class="universidade_description col-8">Endereço: AV.EXPEDICIONÁRIO OSWALDO DE ALMEIDA RAMOS, N°
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
        <span class="end-description"><b style="font-size: 0.9rem;">Celebram entre si este TERMO DE COMPROMISSO DE ESTÁGIO, convencionando as cláusulas seguintes:</b></span><br>
        <span class="end-description"><b style="font-size: 0.9rem;">CLÁUSULA 1ª</b> - Este instrumento tem por objetivo formalizar as condições para a realização do ESTÁGIO DE ESTUDANTE e particularizar a relação juridica especial existente entre o ESTUDANTEm a CONCEDENTE e a INSTITUIÇÃO DE ENSINO caracterizando a não vinculação empregaticia, nos termos da legislação vigente.</span><br>
        <span class="end-description"><b style="font-size: 0.9rem;">CLÁUSULA 2ª</b> - O ESTÁGIO DE ESTUDANTES, obrigatório ou não-obrigatório, é de interesse curricular e suas condições estão adequadas ao projeto pedagógico do curso, nos termos da Lei no.11.788/08</span><br>
        <span class="end-description"><b style="font-size: 0.9rem;">CLÁUSULA 3ª</b> - Cabe à INSTITUIÇÃO DE ENSINO:</span>
        <p class="end-description">a) Aprovar o ESTÁGIO de que trata o presente instrumento,
          considerando as condições de sua adequação à proposta pedagógica do curso, à etapa e
          modalidade da formação escolar do ESTAGIÁRIO e ao horário e calendário escolar;</p>
        <p class="end-description">b) Aprovar o Plano de Atividades de Estágio que consubstancie a
          condições / requisitos suficientes á exigência legal de adequação à etapa e modalidade
          de formação escolar do ESTAGIÁRIO;</p>
        <p class="end-description">c) Avaliar e aprovar as instalações da CONCEDENTE através de
          instrumentos próprios;</p>
        <p class="end-description">d) Indicar professor orientador, da área a ser desenvolvida no
          ESTÁGIO, como responsável pelo acompanhamento e avaliação das atividades do
          ESTAGIÁRIO;</p>
        <p class="end-description">e) Comunicar a parte concedente do estágio, no início do período
          letivo, as datas de realização de avaliações escolares ou acadêmicas;</p>
        <p class="end-description"><b style="font-size: 0.9rem;">CLÁUSULA 4ª</b> - Cabe à
          CONCEDENTE:</p>
        <p class="end-description">a) Zelar pelo cumprimento do presente termo de compromisso;</p>
        <p class="end-description">b) Proporcionar ao ESTAGIÁRIO condições do exercício das
          atividades práticas compatíveis com plano de atividades de estágio;</p>
        <p class="end-description">c) Designar um supervisor/professor que seja funcionário de seu
          quadro de pessoal</p>
        <p class="end-description">d) Solicitar ao ESTAGIÁRIO, a qualquer tempo, documentos
          comprobatórios da regularidade da situação escolar, uma vez que trancamento de
          matrícula, abandono, conclusão de curso ou transferência de Instituição de Ensino
          constituem motivos de imediata rescisão;</p>
        <p class="end-description">f) Conceder período de recesso a ser gozado preferencialmente
          durante as férias escolares, nos termos da legislação vicente,</p>
        <p class="end-description">g) Reduzir a jornada de estágio nos períodos de avaliação
          previamente informados pelo ESTAGIÁRIO;</p>
        <p class="end-description">h) Encaminhar para a Instituição de Ensino o relatório individual
          de atividades, assinado pelo Supervisor com o periodicidade mínima de 6 (seis) meses com
          vista obrigatória do ESTAGIÁRIO;</p>
        <p class="end-description">i) Entregar, por ocasião do desligamento, termo de realização do
          estágio com indicação resumida das atividades desenvolvidas, dos períodos e da avaliação
          do desempenho;</p>
        <p class="end-description">j) Manter em arquivo e à disposição da fiscalização os documentos
          firmados que comprovem a relação de estágio;</p>
        <span class="end-description"><b style="font-size: 0.9rem;">CLÁUSULA 5ª</b> - Cabe ao Estagiario:</span>
        <p class="end-description">a) Observar, obedecer e cumprir as normas internas da CONCEDENTE,
          preservando o sigilo e a confidencialidade das informações que tiver acesso;</p>
        <p class="end-description">b) Apresentar documento comprobatórios da regularidade da
          regularidade da sua situação escolar, sempre que solicitado pelo COCEDENTE;</p>
        <p class="end-description">c) Manter rigorosamente atualizados seus cadastrais e escolares,
          junto à Concedente e ao Agente de Integração;</p>
        <p class="end-description">d) Informar de imediato, qualquer alteração na sua situação
          escolar, tais como: trancamento de matrícula, abandono, conclusão de curso ou
          transferência de Instituição de Ensino;</p>
        <p class="end-description">e) Entregar, obrigatoriamente, à Instituição de Ensino e à
          Condente uma via do presente instrumento, devidamente assinado pelas partes;</p>
        <p class="end-description">f) Informar previamente á CONCEDENTE os períodos de avaliação na
          Instituição de Ensino, para fins de redução da jornada de estágio;</p>
        <p class="end-description">g) Preencher, obrigatoriamente, os Relatórios de Atividades na
          periodicidade mínima de 6 (seis) meses e, inclusive, sempre que solicitado;</p>
        <p class="end-description">h) Informar a Instituição de Ensino em caso de quaisquer
          ocorrências que estejam em desconformidade com o presente Termo de Compromisso de
          Estágio.</p>
        <span class="end-description"><b style="font-size: 0.9rem;">CLÁUSULA 6ª</b> - O presente instrumento e o Plano de Atividade de Estágio serão alterados ou prorrogados através de TERMOS ADITIVOS.</span>
        <p class="end-description">Parágrafo Primeiro: O presente Termo de Compromisso de Estágio
          pode ser denunciado, a qualquer tempo, mediante comunicação escrita, pela Instituição de
          Ensino, pela Concedente ou pelo Estagiário.</p>
        <p class="end-description">Parágrafo Segundo: O não cumprimento de quaisquer cláusulas do
          presente TERMO DE COMPROMISSO DE ESTÁGIO, constituem motivos de imediata rescisão.</p>
        <span class="end-description"><b style="font-size: 0.9rem;">CLÁUSULA 7ª</b> - E, por estarem de inteiro e comum acordo com o Plano de Atividades de Estágio abaixo descrito e com as demais condições estabelecidas neste TERMO DE COMPROMISSO DE ESTÁGIO - TCE, as partes assinam em 3 vias de igual teor.</span>
      </div>
    </main>
  </body>
</html>