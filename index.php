<?php   if (!empty($_POST['phone'])) {
        send_the_order ($_POST);
    }
    function send_the_order ($post){
        $params=array(
          'flow_hash' => $post['flow_hash'],
            'landing' => $post['landing'],
            'referrer' => $post['referrer'],
            'phone' => $post['phone'],
            'name' => $post['name'],
            'country' => $post['country'],
            'address' => $post['address'],
            'email' => $post['email'],
            'lastname' => $post['lastname'],
            'comment' => $post['comment'],
            'layer' => $post['layer'],
            'ip' => $post['ip'],
            'sub1' => $post['sub1'],
            'sub2' => $post['sub2'],
            'sub3' => $post['sub3'],
            'sub4' => $post['sub4'],
            'sub5' => $post['sub5'],
            'link_redirect' => $post['link_redirect']
        );
       $url = 'http://wapi.leadbit.com/api/new-order/_5f882f3e564ba295860995';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_REFERER, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        $return= curl_exec($ch);
        curl_close($ch);
        $array=json_decode($return, true);
        header('Location: order/order.html');
} ?>

<!DOCTYPE html>
<html dir="ltr">

<head>


  
  <script src="js/jquery-1.12.4.min.js" type="text/javascript">
  </script>
  <style>
    .ac_footer {
      position: relative;
      top: 10px;
      height: 0;
      text-align: center;
      margin-bottom: 70px;
      color: #A12000;
    }

    .ac_footer a {
      color: #A12000;
    }

    .ac_footer p {
      text-align: center;
    }

    img[height="1"],
    img[width="1"] {
      display: none !important;
    }
  </style>
 
  <meta charset="utf-8">
  <title>Keto Diet</title>
  <meta content="initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="css/main.css" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,    600,600i,700,700i,800,800i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
    rel="stylesheet">
  <link href="css/slick-theme.css" rel="stylesheet">
  <link href="css/slick.css" rel="stylesheet">
</head>

<body data-lang="PT">
  <!--retarget-->
  <!--retarget-->
  <div class="container s__main">
    <div class="block1 block">
      <div class="bg_cont">
        <div class="top">
          <div class="limit">
            <ul class="list">
              <li> Ingredientes naturais </li>
              <li> Elevados efeitos de melhoria da saúde </li>
              <li> Resultados garantidos </li>
            </ul>
          </div>
        </div>
        <div class="limit">
          <div class="middle">
            <div class="left">
              <h1> Keto Diet </h1>
              <h2> PARA OS AMANTES DE SOBREMESAS QUE SONHAM SER MAGROS </h2>
              <ul class="list">
                <li> Absorve a gordura transformando-a em energia </li>
                <li> Remove toxinas do corpo </li>
                <li> Suprime o apetite e dá energia </li>
                <li> Liberta a retenção de líquidos </li>
                <li> Produz dopamina (a hormona da felicidade) </li>
              </ul>
              <div class="sect"><span> Resultado garantido </span> em qualquer idade </div>
            </div><img alt class="prod" src="img/prod3.png" width="400px">
            <div class="right">
              <p class="sale"> Desconto: <span class="js_percent_sign"> 50% </span></p>
              <div class="price"><span class="old js_old_price_curs price_old"> 78 EUR </span><span class="new js_new_price_curs price_main">
                  39 EUR </span></div>
              <form action="" method="post" class="order_form">
                  <select class="country country_select" id="country_code_selector" name="country">
                    <option value="pt">Portugal</option>
                  </select>

                   <input type="hidden" name="landing" value="pt4.ketodietnd.com"><!-----><input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>"><input type="hidden" name="createdAt" value="<?=date("Y-m-d H:i:s")?>"><input type="hidden" name="userAgent" value="<?=$_SERVER['HTTP_USER_AGENT']?>"><input type="hidden" name="flow_hash" value="GKAk"><input type="hidden" name="sub1" value=""><input type="hidden" name="sub2" value=""><input type="hidden" name="sub3" value=""><input type="hidden" name="sub4" value=""><input type="hidden" name="sub5" value=""><input type="hidden" name="referrer" value="<?=$_SERVER['HTTP_REFERER']?>">


                  <input name="name" required="" placeholder="Nome" type="text">
                  <input class="only_number" name="phone" required="" placeholder="Telefone" type="text">
                  <button class="btn button__text" type="submit">ENCOMENDAR </button>
                  <input type="hidden" name="landing" value="pt4.ketodietnd.com">
                </form>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom">
        <div class="limit">
          <p class="pack"> APENAS <span class="pack_value"> 30 </span> EMBALAGENS RESTANTES COM DESCONTO </p>
        </div>
      </div>
    </div>
    <div class="block6 block">
      <div class="limit">
        <h1> KETO Diet É O SEGREDO EFICAZ E ENERGIZANTE DAS CELEBRIDADES. </h1>
        <div class="sect">
          <div class="text">
            <p class="label"><b> O produto de emagrecimento mais popular entre as maiores estrelas do mundo! </b></p>
            <p><span> A Especialista em Nutrição Saudável Synthia, <b> que aconselha Charlize Theron e Sandra Bullock,
                </b> recomenda a toma de Keto Diet para uma perda de peso rápida em substituição de uma refeição
                completa ou de lanches. </span>
              <!--<img src="preview/img/cup.png" alt="" class="cup">--><span> Este produto estimula o metabolismo, dá
                energia e é saudável para o seu corpo. Substitua as suas refeições por esse produto durante um mês no
                máximo. Este período deverá ser suficiente para atingir resultados impressionantes. </span></p>
          </div>
          <div class="prod"><img alt class="prod" src="img/prod3.png"></div>
        </div>
        <!--<img src="preview/img/cup2.png" alt="" class="cup2">--><img alt class="photo" src="img/block6_item.png">
      </div><img alt class="meter" src="img/block6_item1.png">
    </div>
    <div class="block2 block">
      <div class="limit">
        <div class="top">
          <ul class="slider" id="slider1">
            <li class="item">
              <div class="left">
                <div class="img_cont">
                  <div class="inst_head"><img alt src="img/ava4.jpg"><span><b> van3ssa1989 </b></span></div><img alt
                    src="img/slide_4.jpg">
                  <div class="inst_foot"><b> 2399 </b><span class="inst_date">
                      <script>
                        dtime_nums(-2, true)
                      </script>
                    </span></div>
                </div>
              </div>
              <div class="right">
                <p class="comm"> Pensava que ia ser gorda para sempre! Mas Keto Diet deu-me uma nova vida com um corpo
                  elegante! </p>
                <p class="line"></p>
                <p class="name"> Vanessa, 28 anos </p>
                <p class="info work"> Gestora de Recursos Humanos </p>
                <p class="info"> Uso de Keto Diet: <span> 29 dias </span></p>
                <p class="info"> Resultado: <span> -14,7 kg </span></p>
              </div>
            </li>
            <li class="item">
              <div class="left">
                <div class="img_cont">
                  <div class="inst_head"><img alt src="img/ava2.jpg"><span><b> marta_gomesmil </b></span></div><img alt
                    src="img/slide_2.jpg">
                  <div class="inst_foot"><b> 3122 </b><span class="inst_date">
                      <script>
                        dtime_nums(-4, true)
                      </script>
                    </span></div>
                </div>
              </div>
              <div class="right">
                <p class="comm"> Sempre tentei usar roupas largas para disfarçar o meu corpo sem forma. Quero expressar
                  a minha gratidão ao Keto Diet. Agora só uso mini saias e tenho imensos fãs! </p>
                <p class="line"></p>
                <p class="name"> Marta, 39 anos </p>
                <p class="info work"> Contabilista </p>
                <p class="info"> Uso de Keto Diet: <span> 37 dias </span></p>
                <p class="info"> Resultado: <span> -12 kg </span></p>
              </div>
            </li>
            <li class="item">
              <div class="left">
                <div class="img_cont">
                  <div class="inst_head"><img alt src="img/ava3.jpg"><span><b> Isabel2451 </b></span></div><img alt
                    src="img/slide_3.jpg">
                  <div class="inst_foot"><b> 2752 </b><span class="inst_date">
                      <script>
                        dtime_nums(-3, true)
                      </script>
                    </span></div>
                </div>
              </div>
              <div class="right">
                <p class="comm"> Consegui uma barriga lisa em apenas um mês graças a Keto Diet! É um milagre. E sem
                  dietas! </p>
                <p class="line"></p>
                <p class="name"> Isabel, 24 anos </p>
                <p class="info work"> Gestora </p>
                <p class="info"> Uso de Keto Diet: <span> 31 dias </span></p>
                <p class="info"> Resultado: <span> -17 kg </span></p>
              </div>
            </li>
            <li class="item">
              <div class="left">
                <div class="img_cont">
                  <div class="inst_head"><img alt src="img/ava1.jpg"><span><b> filipa_gomes </b></span></div><img alt
                    src="img/slide_1.jpg">
                  <div class="inst_foot"><b> 3480 </b><span class="inst_date">
                      <script>
                        dtime_nums(-5, true)
                      </script>
                    </span></div>
                </div>
              </div>
              <div class="right">
                <p class="comm"> Transformei-me num sapo gordo depois da gravidez... Keto Diet ajudou-me a eliminar a
                  minha gordura corporal. Agora a minha filha tem uma mãe magrinha! </p>
                <p class="line"></p>
                <p class="name"> Filipa, 33 anos </p>
                <p class="info work"> Advogada </p>
                <p class="info"> Uso de Keto Diet: <span> 92 dias </span></p>
                <p class="info"> Resultado: <span> -28 kg </span></p>
              </div>
            </li>
          </ul>
        </div>
        <div class="bottom">
          <h1> RESULTADOS VISÍVEIS <span> A PARTIR DO DIA 1 </span></h1>
          <p> Cientistas Americanos finalmente descobriram um método simples e conveniente para perder peso sem alterar
            o estilo de vida. <b> Eles desenvolveram uma fórmula para Keto Diet. </b> Mas <b> os seus ingredientes ativos absorvem ativamente </b> e
            desagregam a gordura e removem todas as toxinas do corpo. <b> Keto Diet estimula o metabolismo e controla o
              apetite. </b> E isto leva à perda de peso, lentamente, semana após semana, sem ter de fazer exercício
            físico adicional. </p>
          <div class="al_right"><img alt class="prod" src="img/prod2.png">
            <div class="symbol">
            </div>
          </div>
        </div><img alt class="girl" src="img/woman.png">
      </div>
    </div>
    <div class="block3 block">
      <div class="limit">
        <h1> Ingredientes de alta qualidade que ajudam a perder peso de forma rápida e segura! </h1>
        <ul class="list">
          <li>
            <div class="section">
              <div class="img_cont"><img alt src="img/block3_item.png">
                <p class="label"><span> Framboesa cetonas </span> </p>
              </div>
              <p> O efeito é
                semelhante aos corpos cetônicos produzidos pelo corpo humano. Eles têm atividade extremamente alta. </p>
            </div>
          </li>
          <li>
            <div class="section">
              <div class="img_cont"><img alt src="img/block3_item2.jpg">
                <p class="label"> Coenzima Q10 </p>
              </div>
              <p> Falta de Q10 causa obesidade em 78% dos casos.
                Normaliza o metabolismo.
                Reduz o colesterol. </p>
            </div>
          </li>
          <li>
            <div class="section">
              <div class="img_cont"><img alt src="img/block3_item3.png">
                <p class="label"> Sinefrina orgânica </p>
              </div>
              <p> Lipolítico
                pronunciado. Bloqueia a atividade dos receptores alfa nas células adiposas. Lutas com gordura
                "persistente", incluindo visceral.
                Aumenta a ingestão de calorias no corpo. </p>
            </div>
          </li>
          <li>
            <div class="section">
              <div class="img_cont"><img alt src="img/block3_item4.jpg">
                <p class="label"> Bromelina </p>
              </div>
              <p> Ajuda a digestão.
                Dissolve ativamente a gordura visceral.
                Elimina o inchaço.
                Previne a obesidade dos órgãos internos. </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="block5 block">
      <div class="limit">
        <div class="right">
          <h1> COM KETO Diet NÃO SÓ PERDE PESO, MAS TAMBÉM REVITALIZA TODO O SEU CORPO! </h1>
          <ul class="list">
            <li> Absorve a gordura transformando-a em energia </li>
            <li> Suprime o apetite e dá energia </li>
            <li> Estimula o metabolismo </li>
            <li> Remove toxinas do corpo e alivia a retenção de líquidos </li>
            <li> Produz dopamina (a hormona da felicidade) </li>
          </ul>
        </div><img alt class="prod" src="img/prod2.png">
      </div>
    </div>
    <div class="block7 block">
      <div class="limit">
        <h1><span> QUANDO COMEÇAR A USAR KETO Diet </span> COMO IRÁ O SEU CORPO MUDAR? </h1>
        <ul class="list">
          <li>
            <div class="days"> Dia 1 </div>
            <p> Notará que vai acordar de manhã sentindo-se mais fresca e repousada. </p>
          </li>
          <li>
            <div class="days"> Dia 2 </div>
            <p> O corpo começará a funcionar em modo de emagrecimento, estará a começar a perder gordura </p>
          </li>
          <li>
            <div class="days"> Dia 10 </div>
            <p> Vai sentir-me mais alegre, já terá perdido algum peso. Agora vai começar a usar roupa 1 tamanho abaixo.
            </p>
          </li>
          <li>
            <div class="days"> Dia 21 </div>
            <p> O seu corpo torna-se mais jovem, ocupa menos espaço, o excesso de peso está a desaparecer. </p>
          </li>
          <li>
            <div class="days"> Dia 28 </div>
            <p> Já terá perdido muito peso! Começará a usar roupas mais de 1 tamanho abaixo e mais sensuais. Toda a
              gente estará boquiaberta consigo! </p>
          </li><img alt class="arrow" src="img/arrow.png"><img alt class="weight" src="img/weight.png">
        </ul>
      </div>
    </div>
    <div class="block8 block">
      <div class="limit">
        <h1> A EFICÁCIA DE KETO Diet FOI DEMONSTRADA POR ENSAIOS CLÍNICOS REALIZADOS NOS EUA, NO REINO UNIDO E EM
          ISRAEL. </h1>
        <ul class="list">
          <li><img alt src="img/block8_item1.jpg">
            <p> EUA </p>
          </li>
          <li><img alt src="img/block8_item2.jpg">
            <p> Israel </p>
          </li>
          <li><img alt src="img/block8_item3.jpg">
            <p> Reino Unido </p>
          </li>
          <li><img alt src="img/block8_item4.jpg">
            <p> Academia Nacional de Ciências, Questões Nutricionais, Conselho de Coordenação Interdisciplinar </p>
          </li>
        </ul>
      </div>
    </div>
    <div class="block9 block">
      <div class="limit">
        <h1> 900 PESSOAS QUE PESAVAM ENTRE 10-40 KG A MAIS JUNTARAM-SE AO ESTUDO </h1>
        <ul class="list">
          <li>
            <p> redução de volume em 11-16 cm </p><span> 91% </span>
          </li>
          <li>
            <p> perda de peso de 8-16 kg </p><span> 99% </span>
          </li>
          <li>
            <p> cura de ardor e sensação de peso no estômago </p><span> 100% </span>
          </li>
          <li>
            <p> melhoria do sono e melhor desempenho profissional </p><span> 97% </span>
          </li>
          <li>
            <p> redução de sintomas de edema e celulite </p><span> 94% </span>
          </li>
        </ul>
      </div><img alt class="meter" src="img/block9_item1.png">
    </div>
    <div class="block10 block">
      <div class="limit">
        <div class="mark">
          <div class="left">
            <p> Organização Mundial de Saúde </p>
            <div class="img_cont"><img alt src="img/mark.jpg"></div>
          </div>
          <div class="right">
            <p> Todas as fases do estudo foram aprovadas pelos especialistas desta instituição: </p>
            <p class="color"> Organização Mundial de Saúde </p>
          </div>
        </div>
        <h1> COM KETO Diet ESTÁ A APENAS UM PASSO DO RESULTADO QUE DESEJA! AQUI FICAM ALGUMAS HISTÓRIAS DOS NOSSOS 2.350
          CLIENTES </h1>
        <ul class="slider" id="slider2">
          <li class="item">
            <div class="top">
              <div class="left"><img alt src="img/block10_slide1.1.jpg"></div>
              <div class="right">
                <p class="label"> Renovei completamente o meu guarda-roupa, mas o melhor de tudo é que tenho um novo
                  namorado! </p>
                <p class="name"><span> Ana Matias </span> 30 anos, Portalegre </p>
                <p class="line"></p>
                <p class="text"> Tenho 30 anos, mas até há pouco tempo pesava 80 kg. Também tinha muitos problemas de
                  estômago. Por isso nenhuma dieta era adequada para mim. É tão difícil encontrar produtos dietéticos
                  úteis por aqui. Nunca fui fã de desporto. Não gosto de fazer exercício. Segui todas as instruções durante um
                  mês e as minhas expetativas cumpriram-se! Isto é inacreditável. Durante este tempo, renovei
                  completamente o meu guarda-roupa, mas o melhor de tudo é que tenho um novo namorado! Flores,
                  encontros, caminhadas pela praia! Nunca pensei ter disto na minha vida! Estou a planear fazer mais um
                  ciclo de tratamento. E depois quero repetir o ciclo para manter o meu peso e torná-lo permanente. </p>
              </div>
            </div>
            <div class="bottom">
              <ul class="list">
                <li><img alt src="img/block10_slide1.2.jpg"></li>
                <li><img alt src="img/block10_slide1.3.jpg"></li>
                <li><img alt src="img/block10_slide1.4.jpg"></li>
              </ul>
            </div>
          </li>
          <li class="item">
            <div class="top">
              <div class="left"><img alt src="img/block10_slide2.4.jpg"></div>
              <div class="right">
                <p class="label"> Consigo caber nas calças que usava antes da primeira gravidez! </p>
                <p class="name"><span> Lúcia </span> 30 anos, Lisboa </p>
                <p class="line"></p>
                <p class="text"> Depois do meu terceiro filho, não conseguia voltar à minha forma anterior. Tinha a
                  barriga flácida e as coxas gordas. Incomodava-me muito pensar nisso, mas não havia nada que pudesse
                  fazer. O problema é que, com três miúdos, não tinha tempo para nada... Não era fácil fazer dieta
                  porque sou alérgica a quase tudo! E ainda estou a amamentar. Por isso não é muito fácil escolher uma
                  nutrição adequada. Uma vizinha minha contou-me que perdeu peso depois de ter tido a filha com Keto
                  Diet. As indicações prometiam que o excesso de gordura desapareceria num mês. Não podia acreditar.
                  Como é que isso podia ser possível?
                  Li avaliações de clientes e decidi que não tinha nada a perder ao utilizar e, por isso, comecei a
                  tomar. Numa semana comecei a sentir as primeiras mudanças. Tinha mais energia, dormia melhor. Claro
                  que podia ser uma coincidência. E nessa altura o tempo também já estava mais agradável e passámos o
                  meu filho mais novo para o quartinho dele. Duas semanas depois, nem podia acreditar no que via! Já
                  tinha perdido uns quilos! Nem tinha feito um mês. Já conseguia caber nas minhas calças de ganga
                  anteriores à minha primeira gravidez! O meu marido tornou-se muito mais ativo na cama. Acho que já
                  temos o quarto filhote a caminho :)) Agora já sei como voltar a ficar em forma depois de dar à luz. Já
                  não tenho tanto receio. </p>
              </div>
            </div>
            <div class="bottom">
              <ul class="list">
                <li><img alt src="img/block10_slide2.2.jpg"></li>
                <li><img alt src="img/block10_slide2.3.jpg"></li>
                <li><img alt src="img/block10_slide2.1.jpg"></li>
              </ul>
            </div>
          </li>
          <li class="item">
            <div class="top">
              <div class="left"><img alt src="img/block10_slide4.1.jpg"></div>
              <div class="right">
                <p class="label"> Não dá para enganar a balança: Perdi 8 kg! </p>
                <p class="name"><span> Cátia </span> 34 anos, Loures </p>
                <p class="line"></p>
                <p class="text"> Fui muito cuidadosa com o meu corpo até por volta dos 27 anos. Estava em boa forma e
                  tinha bom aspeto. Mas os anos passaram e as mudanças hormonais foram-se manifestando. Também não tinha
                  força de vontade para fazer dietas ou exercício. Tive de renovar o meu guarda-roupa para comprar
                  roupas de tamanho acima. E depois ainda aumentei mais um tamanho... Isto podia ter continuado assim e
                  ainda podia ter aumentado mais um tamanho, mas uma amiga minha falou-me de Keto Diet e disse-me para
                  tomar essas cápsula todos os dias. Também me aconselhou a beber mais água. Não podia realmente
                  acreditar no resultado que o produto prometia. Imaginem a minha surpresa quando consegui caber nas
                  minhas roupas antigas um mês depois! Além disso, sentia-me vigorosa e cheia de energia! A minha pele
                  parece muito mais jovem. Não sei se é por causa do Keto Diet ou se é coincidência, mas não dá para
                  enganar a balança! E acho que ainda fiquei 10 anos mais nova! </p>
              </div>
            </div>
            <div class="bottom">
              <ul class="list">
                <li><img alt src="img/block10_slide4.2.jpg"></li>
                <li><img alt src="img/block10_slide4.3.jpg"></li>
                <li><img alt src="img/block10_slide4.4.jpg"></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="block11 block">
      <div class="limit">
        <h1> COMO TRABALHAMOS? </h1>
        <ul class="list">
          <li><img alt src="img/block11_item1.jpg">
            <p> Encomende agora e obtenha o desconto </p>
          </li>
          <li><img alt src="img/block11_item2.jpg">
            <p> Aguarde o contacto do nosso especialista para confirmar os detalhes </p>
          </li>
          <li><img alt src="img/block11_item3.jpg">
            <p> Não terá de fazer nenhum pagamento até receber o produto por correio ou transportadora </p>
          </li>
        </ul>
      </div>
    </div>
    <div class="block12 block">
      <div class="bg_cont">
        <div class="limit">
          <div class="top">
            <h1> Não há nada melhor do que perder peso com este produto </h1>
            <h2> Ajude o seu corpo a eliminar os quilos a mais! </h2>
            <div class="left">
              <div class="sect">
                <p class="sale"> Desconto: <span class="js_percent_sign"> 50% </span></p>
                <div class="price"><span class="old js_old_price_curs price_old"> 78 EUR </span><span class="new js_new_price_curs price_main">
                    39 EUR </span></div>
              </div>
              <!--<img src="preview/img/cup.png" alt="" class="cup">--><img alt class="prod" src="img/prod3.png">
            </div>
            <div class="right">
              <div class="limit">
                <ul class="list">
                  <li> Absorve a gordura transformando-a em energia </li>
                  <li> Purifica o corpo de toxinas </li>
                  <li> Suprime o apetite e dá energia </li>
                  <li> Liberta a retenção de líquidos </li>
                  <li> Produz dopamina (a hormona da felicidade) </li>
                </ul>
                 <form action="" method="post" class="order_form">
                  <select class="country country_select" id="country_code_selector" name="country">
                    <option value="pt">Portugal</option>
                  </select>

                   <input type="hidden" name="landing" value="pt4.ketodietnd.com"><!-----><input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>"><input type="hidden" name="createdAt" value="<?=date("Y-m-d H:i:s")?>"><input type="hidden" name="userAgent" value="<?=$_SERVER['HTTP_USER_AGENT']?>"><input type="hidden" name="flow_hash" value="GKAk"><input type="hidden" name="sub1" value=""><input type="hidden" name="sub2" value=""><input type="hidden" name="sub3" value=""><input type="hidden" name="sub4" value=""><input type="hidden" name="sub5" value=""><input type="hidden" name="referrer" value="<?=$_SERVER['HTTP_REFERER']?>">

                  <input name="name" required="" placeholder="Nome" type="text">
                  <input class="only_number" name="phone" required="" placeholder="Telefone" type="text">
                  <button class="btn button__text" type="submit">ENCOMENDAR </button>
                  <input type="hidden" name="landing" value="pt4.ketodietnd.com">
                </form>
              </div><img alt class="girl" src="img/woman2.png">
            </div>
          </div>
        </div>
      </div>
      <div class="bottom">
        <div class="limit">
          <div class="left">
            <ul class="list">
              <li> INGREDIENTES <br> NATURAIS </li>
              <li> Elevados efeitos de melhoria da saúde </li>
            </ul>
          </div>
          <div class="right">
            <div class="limit">
              <p class="pack"> APENAS <span class="pack_value"> 30 </span> EMBALAGENS RESTANTES COM DESCONTO </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/slick.js">
  </script>
  <script src="js/slick.min.js">
  </script>
  <script src="js/slider.js">
  </script>
  <script src="js/main.js" type="text/javascript">
  </script>
  <div class="payment_timeout" style="display:none !important"> 300 </div>

  <script>
    $(document).ready(function () {
      try {
        moment.locale("");
        $('.day-before').text(moment().subtract(1, 'day').format('D.MM.YYYY'));
        $('.day-after').text(moment().add(1, 'day').format('D.MM.YYYY'));
      } catch (e) {
        console.log('moment problems!');
      }
    });
  </script>

  <div class="ac_footer"> Global Partners LTD,        <br>        <a href="priv.html" target="_blank">Privacy Policy</a> | <a href="" target="_blank">Report</a></div>

</body>

</html>