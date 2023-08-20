# Esc-Aplicacao-Web
 
 

UNICESUMAR – UNIVERSIDADE CESUMAR
CENTRO DE CIÊNCIAS EXATAS TECNOLÓGICAS E AGRÁRIAS
CURSO DE GRADUAÇÃO EM TECNOLOGIA EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS














O USO DA TECNOLOGIA APLICADA À GESTÃO FINANCEIRA PESSOAL: PLANEJAMENTO E CONTROLE INDIVIDUAL







ELIEZER RIBEIRO NUNES
FELIPE ALEXANDRE BRAZ LEITE MIGUEL MOACIR PADILHA JUNIOR








CURITIBA – PR 2022
 


ELIEZER RIBEIRO NUNES - RA - 20055159-2
FELIPE ALEXANDRE BRAZ LEITE - RA 20011337-2
MIGUEL MOACIR PADILHA JUNIOR - RA - 20083570-2






O USO DA TECNOLOGIA APLICADA À GESTÃO FINANCEIRA PESSOAL: PLANEJAMENTO E CONTROLE INDIVIDUAL










Trabalho apresentado ao Curso de Graduação em Análise e Desenvolvimento de Sistemas da UNICESUMAR – Universidade Cesumar como requisito parcial para avaliação da Atividade de Estudo Programada (AEP) do 1º semestre de 2022.










CURITIBA – PR 2022
 

O USO DA TECNOLOGIA APLICADA À GESTÃO FINANCEIRA PESSOAL: PLANEJAMENTO E CONTROLE INDIVIDUAL

Eliezer Ribeiro Nunes Felipe Alexandre Braz Leite Miguel Moacir Padilha Junior








RESUMO

A abordagem sobre a tecnologia aplicada ao controle financeiro pessoal, diz respeito à vida e ao futuro dos cidadãos, com sua capacidade de organização e planejamento da vida financeira. Propõe-se a elaboração de um sistema de gestão para o controle e auxílio financeiro pessoal, proporcionando consciência econômica e melhorando a qualidade de vida das pessoas. Pesquisa qualitativa com viés analítico-descritivo realizada por intermédio de revistas e artigos on-line, junto a pesquisas de campo realizadas na Instituição de Ensino Superior Universidade Cesumar - UniCesumar com consentimento dos entrevistados. Nesse sentido, o presente estudo indica a criação da plataforma mobile como a solução que melhor se enquadra no cenário proposto. As informações nos mostram como a tecnologia tem atuado na vida das pessoas com a elaboração de soluções que facilitam a rotina diária e aplicada a gestão financeira pessoal pode evitar dívidas, reduzir gastos e obter ganhos para utilização em áreas como saúde e lazer, viabilizando a qualidade de vida.

Palavras-chave: Sistema. Controle financeiro. Tecnologia.
 
GLOSSÁRIO


API: Application Programming Interface (Interface de Programação de Aplicação), refere-se a qualquer software com uma função distinta.
APLICAÇÃO: Programa de computador cujo objetivo é solucionar um problema através de instruções passadas ao computador.
AWS: Amazon Web Service - Plataforma de serviços de computação em nuvem, que formam uma plataforma de computação na nuvem.
BACK-END: É o bastidor das funcionalidades da aplicação, é nela que estará contida a regra de negócio do software.
BUDGET: Orçamento, plano financeiro estratégico que consiste na previsão de receitas e despesas.
CASO DE USO: Diagrama onde são representadas as diferentes maneiras que o usuário pode interagir com um sistema.
CONTROLE DE GASTOS FINANCEIROS: Análise e controle das receitas e despesas de um indivíduo.
DESIGN CLEAN: Design limpo.

DESPESAS: Todos os gastos que um indivíduo tem para subsistência e obtenção de receita.

FEATURE: Novo recurso disponibilizado na aplicação por patch de atualização.

FEEDBACKS: Termo cujo significado técnico é: retorno da informação ou do processo.

FRAMEWORK: É uma estrutura com conjuntos de códigos genéricos capaz de unir trechos de um projeto de desenvolvimento.
FRONT-END: É a parte do desenvolvimento da interface gráfica do usuário.

HOME OFFICE: Modalidade de trabalho remoto em casa.

KICK-OFF: Reunião para a definição dos elementos básicos para o projeto.
 
LOGS: Na computação é o histórico de dados e informações de eventos relevantes em um sistema.
MOBILE: Nome atribuído aos dispositivos móveis, tais como o smartphone.

MVP: Sigla para Minimum Viable Product, Produto viável mínimo é a versão mais simples de um produto que pode ser lançada com uma quantidade mínima de esforço e desenvolvimento.
MYSQL: Banco de dados relacional, onde serão armazenados os dados da aplicação.

PÚBLICO-ALVO: Grupo de consumidores com características em comum que a empresa identifica no mercado.
PUSH NOTIFICATION: É um tipo de notificação por mensagem mandada automaticamente pelo servidores da empresa/site/aplicativo. E para o RichPay é a coleta dessa notificação que se tornará um gasto.
RBAC: Role Based Access Control, refere-se ao controle de acesso baseado em papéis.

RECEITAS: Rendimentos totais ou ganhos monetários de um indivíduo.

RESET DE SENHA: Alteração da senha do usuário na aplicação.

RICHPAY: Plataforma de controle de gastos financeiros.

SOA: Service-Oriented Architecture - Padrão de software onde a arquitetura é orientada a serviços.
SOFTWARE: Programa de computador, serviço computacional utilizado para realizar ações nos sistemas de computadores.
STAKEHOLDER: É qualquer indivíduo que pode afetar ou ser afetado pela realização do projeto do software, ou seja, que estão envolvidos no projeto.
UBER: Aplicação facilitadora de mobilidade social.

USER STORY História de usuário, são histórias do que o usuário faz ou precisará fazer, descrevendo uma funcionalidade que será valiosa para ele.
 
1	INTRODUÇÃO

Atualmente os aplicativos estão fazendo cada vez mais parte de nossas vidas. Eles são usados a todo momento e muita das vezes nem percebemos, como por exemplo, ao trabalhar no popular do século XXI, o “home office”. Devido a pandemia que nos assolou no final de 2019, a transformação digital nas empresas aumentou e ocasionou uma “superprodução” por consequência do trabalho remoto e um excesso da utilização das redes sociais, como é elencado na obra “Sociedade do Cansaço” de Byung-Chul Han. Nesse contexto, prezando sempre a agilidade e praticidade no dia a dia dos cidadãos, os aplicativos desempenham um papel muito importante, um exemplo muito claro disso é o aplicativo Uber, que veio para facilitar a mobilidade social.
Embora estejamos inseridos em um mundo onde a tecnologia está presente em nosso cotidiano e tem facilitado cada vez mais nosso modo de viver, enfrentamos problemas no gerenciamento financeiro básico pessoal. Há algumas aplicações nesse nicho de mercado como: Meu Dinheiro, Organizze e etc. Porém, de acordo com a imagem de feedbacks abaixo, nenhuma delas atende completamente a necessidade do usuário e torna ela uma experiência fácil, tanto aspectos de Designs não “Clean” quanto em cumprir o objetivo da aplicação ou outra funcionalidade.
Figura 1 – Avaliação Aplicações de Controle Financeiro

Fonte - STORE, Play. Meu Dinheiro. 2022. Mobile.


Nesse contexto, o presente trabalho tem por objetivo usar a tecnologia para ajudar na
 
vida financeira dos brasileiros e facilitar o acesso ao controle financeiro de forma simples, apresentando a importância de um controle financeiro efetivo e como ela pode potencializar suas metas pessoais. Sendo assim, entende-se que o básico de conhecimento e controle financeiro pode atenuar em uma escala social o número de endividados.


1.1	OBJETIVO GERAL

Usar a tecnologia para ajudar na vida financeira dos brasileiros e facilitar seu controle financeiro de uma forma simples, desse modo, atenuando o número crescente de endividados.


1.2	OBJETIVOS ESPECÍFICOS
Contribuir para o objetivo de instruir os brasileiros financeiramente e melhorar o controle de gastos desnecessários.
Colaborar com o crescimento econômico do país e melhorar a qualidade de vida dos brasileiros.
Usar a tecnologia para solucionar problemas da sociedade.
 
2	PLANEJAMENTO E CONTROLE INDIVIDUAL

De acordo com Cherobim e Espejo (2010), assim como as empresas fazem um planejamento estratégico recorrente, as famílias deveriam também realizar esse planejamento para estarem preparadas tanto em situações de emergência ou para o futuro, independente da classe social ou fase da vida. E o planejamento financeiro pessoal do indivíduo está atrelado aos objetivos que cada pessoa tem na vida e tem como “start” um plano estratégico onde a pessoa define o que quer em determinado período de tempo.
A partir disso, consegue-se enxergar como um planejamento e um controle financeiro assertivo é de suma importância na vida do cidadão, na medida que ele aplicará isso ao longo prazo para alcançar um objetivo ou meta pessoal. Porém, além desse planejamento se faz necessário estar atento aos diversos descuidos que podem ocorrer durante a realização de um planejamento.
Para Hoji (2010), controlar seus rendimentos sem um conhecimento prévio é como martelar um prego sem martelo, pois ele realiza um estudo antecipado de seu orçamento para que sejam executados planos de ações a fim de alcançar o resultado esperado.
Sendo assim, as pessoas vivem em uma sociedade capitalista onde há o dinheiro como uma moeda de troca, o conhecimento de como geri-lo é indispensável para que possa viver e realizar os sonhos e metas pensando tanto no curto prazo como no longo prazo. Prevenindo-se assim também de imprevistos e emergências passíveis durante a vida, tais como doenças e endividamento ou até mesmo a morte.


3	FLUXO DE CAIXA

De acordo com ASSAF NETO (1997, p.35) “o fluxo de caixa é um instrumento que relaciona os ingressos e saídas (desembolsos) de recursos monetários”. Possui como finalidade demonstrar a escassez dos recursos, possibilitando tomar contramedidas.

3.1	Entradas e saídas de Caixa


As entradas são todo e qualquer tipo de receita percebida pelo indivíduo em um determinado período de tempo, como: Salários, aluguéis, vale alimentação, vale transporte, 13º salário, participação nos lucros e resultados (PLR), benefícios etc.
Já as saídas de caixa são todos os gastos realizados pelo indivíduo ou família em um determinado período de tempo. Logo abaixo estão representados as classificações dos gastos:
 


a)	Gastos Diretos e Indiretos
Gastos diretos relacionam-se à aqueles realizados para suprir determinadas necessidades que trazem conforto aos indivíduos, como: alimentação, saúde, lazer etc. Os indiretos são todos aqueles que não trazem benefícios ao pagador, mas sim a um terceiro indivíduo ou um grupo de pessoas como por exemplo: impostos, doações etc.

b)	Gastos Fixos e Variáveis
Os custos fixos são geralmente identificados como pagamentos mensais que pouco variam de valor, como: água, luz, internet, mensalidade da faculdade, financiamento etc. Já os variáveis são aqueles que precisam de mais controle financeiro por causa da sua volatilidade, pois podem surgir custos com diferentes valores a qualquer momento. Exemplo: Farmácia, lazer, manutenção, saúde, IPVA, combustível, etc.
 
4	A PROBLEMÁTICA

De acordo com a CNN Brasil (2021), 70,9% das famílias brasileiras encontravam-se endividadas no ano de 2021, batendo recorde na média em comparação ao ano anterior. Isto se dá devido a diversos fatores combinados, um desses fatores que contribuem para esse indicador é a falta da Educação Financeira na grade curricular das escolas brasileiras. Com isso, pode-se observar a importância que um controle eficaz de finanças pode trazer, nesse contexto, com a ajuda da tecnologia pensou-se no desenvolvimento de uma aplicação para facilitar esse controle e diminuir o endividamento da população.
Para o desenvolvimento da plataforma, a fim de elencar a relação do cidadão com a Educação Financeira e entender o comportamento público-alvo, realizou-se uma pesquisa comum na Universidade Cesumar – UniCesumar Curitiba, onde foram realizadas questões que ajudam a entender a relação do público com o dinheiro e a tecnologia, a faixa etária das 59 respostas foi de pessoas entre 17 e 54 anos.
Uma das questões abordadas foi se a pessoa controla seus gastos e se não qual o motivo, os resultados se encontram baixo:
Figura 2 – Controle de Gastos





Fonte - Os autores.

Pode-se analisar que 67,8% controlam seus gastos, e com os indicadores da CNN supracitados, chega-se à conclusão que esse controle realizado não é efetivo. Logo após fora questionado o motivo pelo qual o indivíduo não controla, e as respostas comuns foram: Desordem e irresponsabilidade. Sendo assim, fica evidente que é necessário certo nível de maturidade e conhecimento para que seja realizado um controle eficaz.
 
Outro ponto abordado nesta pesquisa foi qual o meio é utilizado para esse controle, conforme é mostrado abaixo, somente 7% utilizam uma aplicação para controlar seus gastos, 47,6% utilizam planilha, 28,6% utilizam de papel e caneta e os outros 16,8% utilizam outro meio.
Figura 3 – Meios de controle




Fonte - Os autores.

Em seguida questiona-se acerca da utilização de um software para controlar e elencar seus gastos, abaixo mostra-se os resultados obtidos:
Figura 4 – Utilização de Software para controle de gastos




Fonte - Os autores.

Mais de 80% do público apontaram que usariam um software para controle e somente 17,2% mostraram que não usariam uma aplicação. Por fim, questionou-se sobre a preferência de dispositivo de uso dos participantes, conforme mostrado abaixo cerca de 86% apta pela utilização de uma aplicação mobile ao invés da utilização de um software web para gestão.
 




Figura 5 – Preferência de Plataforma




Fonte - Os autores.
 
5	STAKEHOLDERS

Stakeholder são as partes as partes envolvidas e/ou interessadas no projeto, para Freeman (1984, p. 46), stakeholders são “qualquer grupo ou indivíduo que pode afetar ou é afetado pela realização dos objetivos da empresa”. Trazendo para Análise de Sistemas, podemos definir stakeholder como sendo qualquer indivíduo que pode afetar ou ser afetado pela realização do projeto do software, ou seja, que estão envolvidos no projeto.

Tabela 1 - Stakeholders do Sistema RichPay

Stakeholder	Interesse	Poder	Legitimidade	Urgência	Importância
Clientes	9	9	8	10	9
Professores	9	10	8	10	9,25
Equipe	10	8	10	9	9,25
Comunidade	6	3	6	5	5
Fonte: Os autores.


Acima estão elencados os stakeholders do sistema RichPay com seu grau de importância. Sendo os quais merecem atenção redobrada dada a nota de importância: Clientes e Professores.
5.1	USER STORIES

A user story ou história de usuário, são histórias do que o usuário faz ou precisará fazer, descrevendo uma funcionalidade que será valiosa para ele. São normalmente curtas com uma descrição escrita usada para o planeamento e como lembrete.

User Story #1	Data Criação: 08/08/2022
Descrição: Eu, como usuário, quero realizar meu cadastro na plataforma, já que não sou cadastrado.
Critérios e condições de aceite:
1.	Preencher formulário de cadastro contendo: Nome, E-mail, senha e confirmação de senha.
2.	Efetuar o cadastro apenas após o aceite dos termos e condições.
3.	Validação do cadastro via e-mail.
4.	Perfil e status irão popular com valores default.
5.	Ao clicar em cadastrar, efetuar o cadastro na aplicação e redirecionar para a tela de Login.
Resultado: Cadastro de usuário efetuado realizado com sucesso.
Outras saídas: Cancelamento do processo ou aviso de informações insuficientes.
 



User Story #2	Data Criação: 08/08/2022
Descrição: Eu, como usuário, quero realizar meu login na plataforma, já que realizei meu cadastro.
Critérios e condições de aceite:
1.	Efetuar login na aplicação realizando comunicação com API.
2.	Apresentar formulário de login com e-mail e senha.
3.	Ao clicar em Entrar, efetue o Login e forneça o token de acesso.
4.	Após efetuado o login, redirecione para a tela principal onde escolherá o serviço.
Resultado: Login na aplicação.
Outras saídas: Cancelamento do processo ou aviso de informações incorretas.

User Story #3	Data Criação: 08/08/2022
Descrição: Eu, como usuário, gostaria de solicitar o reset de senha, já que não me lembro da qual foi cadastrada.
Critérios e condições de aceite:
1.	Permitir reset de senha através de token enviado por email.
2.	Permitir opção de reenviar token ao email do usuário.
3.	Alterar senha após fornecer o token.
4.	Redirecionar para a tela de login.
Resultado: Reset de senha concluído.
Outras saídas: Cancelamento do processo ou aviso de informações insuficientes.

User Story #4	Data Criação: 08/08/2022
Descrição: Eu, como usuário, quero cadastrar pelo menos um cartão para iniciar o controle dos meus gastos, já que quero controlar os gastos do cartão.
Critérios e condições de aceite:
1.	Cadastrar ao menos um cartão para início do controle de gastos.
2.	Apresentar formulário de cadastro de cartão com os campos Nome do titular, Banco, função e data de vencimento da fatura do cartão.
3.	Ao clicar em cadastrar, efetuar o cadastro do cartão e redirecionar para a tela principal.
Resultado: Cadastro de cartão efetuado com sucesso.
Outras saídas: Cancelamento do processo ou aviso de informações insuficientes.


User Story #5	Data Criação: 08/08/2022
Descrição: Eu, como usuário, gostaria de consultar meus cartões cadastrados na plataforma, já que preciso saber quais estão cadastrados.
Critérios e condições de aceite:
1.	Apresentar tela com cartões cadastrados na aplicação com opções de inativação e alteração.
2.	Ter cadastrado ao menos um cartão.
3.	Validar se existe cartão cadastrado.
 

 


User Story #6	Data Criação: 08/08/2022
Descrição: Eu, como usuário, gostaria de editar o cadastro de cartões na plataforma, já que pode conter algum erro de digitalização.
Critérios e condições de aceite:
1.	Apresentar formulário de edição do cartão.
2.	Ao clicar no botão de confirmação alterar cadastro de cartão.
Resultado: Alteração no cadastro do cartão selecionado.
Outras saídas: Cancelamento do processo ou aviso de informações insuficientes.


User Story #7	Data Criação: 08/08/2022
Descrição: Eu, como usuário, gostaria de inativar cartões na plataforma, já que posso encerrar minha conta bancária ou cartão bancário a qualquer momento.
Critérios e condições de aceite:
1.	Inativação do cartão.
2.	Aparecer status inativo ao usuário.
3.	Opção de excluir definitivamente e não mostrar ao usuário, porém, manter registro no banco
Resultado: Inativação do cartão.
Outras saídas: Exclusão definitiva pelo usuário ou erro no procedimento.


User Story #8	
Descrição: Eu, como usuário, quero realizar um orçamento, já que quero controlar meus gastos de acordo com meus ganhos e despesas.
Critérios e condições de aceite:
1.	Apresentar formulário de realização de orçamento.
2.	Apresentar categorias padrões de despesas para disponibilização de orçamento.
3.	Disponibilizar criação de categorias no orçamento.
4.	Opção de realocação de verba entre áreas.
5.	Ao clicar em finalizar orçamento, registrar orçamento do mẽs.
Resultado: Realização do plano orçamentário.
Outras saídas: Encerramento do procedimento sem salvar dados informados, cancelamento do processo ou erro ao alocar verba.
 

User Story #9	Data Criação: 08/08/2022
Descrição: Eu, como usuário, quero categorizar meus gastos, já que quero controlar meus gastos em determinadas áreas de acordo com um budget.
Critérios e condições de aceite:
1.	Permitir categorização dos gastos de acordo com o plano orçamentário.
2.	Consumir verba da categoria do orçamento ao informar gastos.
Resultado: Categorização do gasto e consumo da verba alocada.
Outras saídas: Erro de informações insuficientes ou informe de verba esgotada.

User Story #10	Data Criação: 08/08/2022
Descrição: Eu, como usuário, quero que seja coletada a notificação dos meus gastos, já que quero ter facilidade e agilidade no cadastro de gastos dentro da aplicação.
Critérios e condições de aceite:
1.	Solicitar permissão de coletas de notificações push dos gastos.
2.	Categorizar gastos das notificações em categoria padrão de coletas push.
3.	Realizar cadastro do gasto na aplicação com informações padrões push e demais campos default.
Resultado: Efetuar registro de gastos de acordo com a notificação push.
Outras saídas: Erro na coleta da notificação, não permissão do usuário.

User Story #11	Data Criação: 08/08/2022
Descrição: Eu, como usuário, quero ver meus gastos em uma única plataforma, já que não tenho controle financeiro dos mesmos.
Critérios e condições de aceite:
1.	Apresentar dashboard de gastos (Acumulado total - receitas e despesas do mês).
2.	Apresentar gastos por cartões.
3.	Apresentar gastos por categorias.
4.	Apresentar gastos por categorias de acordo com o cartão.
Resultado: Apresentação dos gastos ao usuário.
Outras saídas: Apresentação de gastos em categorias default ou informe de iniciar controle financeiro que ao clicar redirecionar ao plano orçamentário.

User Story #12	Data Criação: 08/08/2022
Descrição: Eu, como usuário, quero registrar minhas compras manualmente e também editar algumas compras, já que posso ter gastos imprevistos.
Critérios e condições de aceite:
1.	Disponibilizar botão na tela principal para criar novo gasto manualmente.
2.	Ao clicar no botão de criar novo gasto, apresentar formulário para registro do gasto.
3.	Ao clicar no botão salvar, registrar o gasto de acordo com as informações fornecidas.
4.	Permitir edição dos gastos efetuados.
5.	Estornar gastos, permanecendo um histórico no banco de dados da realização do estorno.
Resultado: Criação, edição, estorno dos gastos.
Outras saídas: Informações insuficientes ou cancelamento da transação.
 

User Story #13	Data Criação: 08/08/2022
Descrição: Eu, como usuário, quero ser informado de quando ficarei no vermelho e quando minha fatura vence, já que quero controlar meus gastos estipulando um budget.
Critérios e condições de aceite:
1.	Informar o usuário quando ficará no vermelho.
2.	Informar quando a fatura vence de acordo com o vencimento cadastrado.
3.	Informar ao usuário quando ultrapassar o orçamento estabelecido.
Resultado: Informes via notificação push.
Outras saídas: Erro ao informar usuário.

User Story #14	Data Criação: 08/08/2022
Descrição: Eu, como usuário, quero registrar minhas anotações na agenda, já que não quero me esquecer dos pagamentos e afins.
Critérios e condições de aceite:
1.	Disponibilizar opção de agenda no menu
2.	Apresentar formulário de cadastro.
3.	Ao clicar no botão efetuar ação de registrar anotações.
Resultado: Cadastro de lembretes de dívidas e receitas.
Outras saídas: Informações insuficientes ou cancelamento da transação.


User Story #15	Data Criação: 08/08/2022
Descrição: Eu, como usuário administrador, quero realizar login no painel admin, já que quero administrar algumas funcionalidades e afins.
Critérios e condições de aceite:
1.	Efetuar login na aplicação com informações de login e senha.
2.	Ao logar direcionar para a tela inicial do painel admin.
Resultado: Realizar login com sucesso.
Outras saídas: Senha inválida, informações insuficientes.


User Story #16	Data Criação: 08/08/2022
Descrição: Eu, como usuário administrador, quero solicitar reset de senha, já que não me lembro da qual foi cadastrada.
Critérios e condições de aceite:
1.	Disponibilizar reset de senha com token enviado ao email.
2.	Apresentar formulário com token, senha e confirmação de senha.
3.	Disponibilizar reenvio de token
Resultado: Reset de senha efetuado com sucesso.
Outras saídas: Token inválido e/ou expirado, senhas não conferem.
 

User Story #17	Data Criação: 08/08/2022
Descrição: Eu, como usuário administrador, quero cadastrar novos usuários, já que pode haver situações de dificuldade por parte do usuário.
Critérios e condições de aceite:
1.	Realizar cadastro de usuário na aplicação.
2.	Apresentar a seleção de perfil do usuário no cadastro.
Resultado: Cadastro de usuário.
Outras saídas: Informações insuficientes.



18	Data Criação: 08/08/2022
Descrição: Eu, como usuário administrador, quero consultar cadastros de usuários (sem dados sigilosos), já que precisarei suportar em várias questões o usuário.
Critérios e condições de aceite:
1. Consultar informações do usuário.
Resultado: Consulta de usuários.
Outras saídas: Erro ao consultar.


User Story #19	Data Criação: 08/08/2022
Descrição: Eu, como usuário administrador, quero modificar cadastros de usuários (sem dados sigilosos), já que precisarei suportar em várias questões o usuário.
Critérios e condições de aceite:
1.	Consultar informações do usuário.
2.	Alterar perfil do usuário.
3.	Inativar usuário.
4.	Envio de token para reset de senha para um email fornecido no suporte.
Resultado: Alterações no cadastro do usuário.
Outras saídas: Erro na alteração.


User Story #20	Data Criação: 08/08/2022
Descrição: Eu, como usuário administrador, quero lançar promoções, já que podemos dar descontos nos planos em datas comemorativas e adversas.
Critérios e condições de aceite:
1.	Lançar promoções.
2.	Programar promoções.
3.	Cancelar promoções.
Resultado: Gerenciamento de promoções.
Outras saídas: Erro ao gerar promoções.
 

User Story #21	Data Criação: 08/08/2022
Descrição: Eu, como usuário administrador, quero inativar funcionalidades do app por painel admin, já que precisarei controlar features.
Critérios e condições de aceite:
1.	Inativar funcionalidades da aplicação.
2.	Ativar funcionalidades.
Resultado: Gerenciamento de funcionalidades.
Outras saídas: Erro ao na inativação/ativação de funcionalidades.


User Story #22	Data Criação: 08/08/2022
Descrição: Eu, como usuário Master, quero acesso total na aplicação, já que precisarei verificar erros, logs e diversas situações.
Critérios e condições de aceite:
1.	Acesso a logs.
2.	Acesso a relatórios de funcionamento da aplicação.
Resultado: Acesso total na aplicação.
Outras saídas: Erro de perfil.

Com base nas Users Storys acima e pesquisa realizada, foi desenvolvido o restante do projeto, tendo-os como norte.
 
6	DIAGRAMAS
O diagrama de caso de uso resume detalhes dos atores do sistema e suas interações com o sistema, seu objetivo é demonstrar as diferentes maneiras que o usuário pode interagir com o software. Cada “balão” é uma interação do usuário derivada de uma User Story.
Figura 6 - Diagrama de Caso de Uso RichPay



Fonte - Os autores
 


Figura 7 - Diagrama de Caso de Uso RichPay - Painel Admin



Fonte - Os autores
 
Figura 8 – Diagrama de Classe - API


Fonte - Os autores.
 
Figura 9 – Diagrama de Classe - APP


Fonte - Os autores.
 


Figura 10 – Diagrama de Entidade Relacionamento - API







Fonte - Os autores.
 
Figura 11 – Diagrama de Entidade Relacionamento - APP



Fonte - Os autores.
 
Figura 12 - Fluxograma de Funcionamento do Sistema


Fonte - Os autores.
 
7	PROTÓTIPO

Com base nas User Stories e no Diagrama de Casos de Uso, foi realizado a criação de um protótipo e gerado várias idéias, facilitando no entendimento do objetivo do projeto e também na construção e desenvolvimento do mesmo. Conforme abaixo segue algumas telas da prototipação funcional e também o link para visualizar melhor as funcionalidades que foram realizadas na plataforma Figma.
Figura 13 - Exemplo da tela de protótipo funcional do App


Home RichPay	Dashboard RichPay



Fonte - Os autores.

Acesse o link: Protótipo Funcional
 


8	PROJETO DE SISTEMAS

Para o Desenvolvimento da Aplicação em questão será utilizado o Framework AdonisJS com arquitetura de microsserviços (sendo então implementado o padrão SOA - Service-Oriented Architecture - como padrão de software), consumindo essa API com vue.js no Front-End no desenvolvimento do Painel Admin, o aplicativo consumirá a mesma API utilizando Flutter e utilizando do banco de dados MySQL, com domínio do servidor na Amazon AWS.
Veremos na figura abaixo, a descrição de cargos da aplicação com base em papéis (RBAC), onde Master é o cargo que tem acesso total a aplicação e Admin junto a Usuário herdam algumas permissões de Master. Admin: tem acesso a consultas personalizadas para suporte ao usuário, cadastrar novos usuários e gerar convites para a aplicação; Usuário: Acesso a consultas, edições de registros, deleções e inserções de dados do usuário logado somente.
Figura 14 - Descrição de Cargos


Fonte - Os autores.

A fins de controle e versionamento de software utilizou-se a plataforma github, link do repositório:
https://github.com/RichPayTeam
 
9	MÉTODOS E MATERIAIS


No presente trabalho foi realizado um estudo de cunho qualitativo, tendo como meios de fundamentação teórica revistas e artigos on-line, junto a pesquisas de campo realizadas na Instituição de Ensino Superior Universidade Cesumar - UniCesumar por meio de formulário online, agrupando e sintetizando as informações encontradas, apontando a importância da educação financeira e de um controle financeiro efetivo na vida dos cidadãos.
Para atingir os objetivos propostos, na elaboração da pesquisa online de público-alvo, utilizamos a plataforma Google Forms como meio de coleta de dados, onde posteriormente foram analisados os dados obtidos e iniciado o desenvolvimento da parte Backend da aplicação, para fins de desenvolvimento foi utilizado a ferramenta PostMan para testes na API, utilizando o framework do AdonisJS, framework para NodeJS, na criação dos diagramas utilizou-se o meio online de diagramação Draw.io. Para desenvolvimento da aplicação mobile utilizou-se Flutter por ser Cross-platform, onde então foi consumida a API. No FrontEnd da aplicação do Painel Admin foi utilizado Vue.js e AdonisJS.
As atividades realizadas no cronograma foram primordiais para a criação da ferramenta, uma vez que passam por atividades como construção da ideia, pesquisa de mercado e público-alvo, MVP da aplicação e versão final. A figura abaixo, demonstra as etapas necessárias para o desenvolvimento do software de controle financeiro.
Figura 15 - Cronograma / Etapas de desenvolvimento


Fonte - Os autores.
 
Definir a equipe do projeto que será responsável pelo desenvolvimento da aplicação é o primeiro processo, após isso surge a necessidade da construção e elaboração da ideia junto a pesquisa de mercado. Feito isso, elaborou-se o cronograma para dar o “kick-off” no projeto, após essa etapa é o momento de iniciar as pesquisas de embasamento teórico e desenvolvê-lo, e com base nisso definir as tecnologias que devem ser implementadas com a arquitetura desse sistema. Com isso definido, foi iniciada a diagramação e repositório para elaboração do MVP (Minimum Viable Product) para que os testes tenham início. A aplicação de melhorias e correções após os testes, são atividades que devem ter atenção especial, visto que logo após será disponibilizada a versão beta do sistema e efetuada a coletânea de feedbacks. Dada todas essas etapas, a entrega contínua de melhorias após os feedbacks é primordial para a disponibilização final da aplicação junto a realização de treinamentos de utilização da plataforma.
Sendo assim, a aplicação da tecnologia para a gestão financeira pessoal contribui com uma informação mais concisa e segura, facilitando na organização de sua vida financeira e gestão dos seus gastos através de uma interface amigável. Além disso, proporciona a redução de tempo na operação, pois não será necessário o gasto de horas na elaboração e manutenção de sua planilha.
 
10	RESULTADOS E DISCUSSÕES

Após a elaboração do software e do presente estudo, alguns aspectos foram observados com sua versão de produção. Mas, os principais foram melhora na usabilidade do controle financeiro, uma vez que a planilha em excel foi retirada e tornou o processo mais dinâmico, redução de tempo para elaboração do seu orçamento e/ou planejamento financeiro. Melhora na qualidade de vida das pessoas por conta da plataforma reduzir gastos desnecessários e o usuário poder utilizar esse dinheiro com outras atividades como esporte e lazer. Abaixo estão elencados os benefícios que a utilização da plataforma trás.
Figura 16 - Benefícios da plataforma





Fonte - Os autores.
A figura demonstra os pontos de benefícios que foram obtidos com esse software. Redução de tempo, pois não passará horas realizando controles paralelos e demorados, com uma melhor usabilidade para usuários “comuns”, tendo por consequência uma maior organização dos seus gastos e gerando consciência econômica por meio da sua utilização com a redução dos gastos desnecessários.
Todos esses benefícios juntos, permitem com que o usuário tenha um melhor controle e uma melhora em sua qualidade de vida, com uma informação confiável e com precisão. Gerando credibilidade com o usuário que pode priorizar e planejar melhor seus gastos e viagens.
 
11	CONSIDERAÇÕES FINAIS

Com base nesse estudo, podemos observar que a tecnologia com o uso aplicado ao controle financeiro ainda é pouco utilizada no Brasil, visto o número crescente de endividados e a falta de educação financeira, cujo tema é pouco comentado no sistema de ensino. Sendo assim, o uso de um software que corrobora com essa educação e auxilia o usuário em suas finanças se faz necessário.
Além disso, seu uso faz com que a informação se torne confiável e o papel do Analista de Sistema se torna cada vez mais requisitado, visto a gama de complexidade que um software com essa robustez pode trazer.
Sendo assim, o desenvolvimento de um sistema confiável e preciso para a gestão de finanças pessoais é um quesito que impacta diretamente na vida do usuário, que por sua vez, não se preocupa com cálculos complexos ou perde seu tempo que pode aproveitar de outras maneiras. Desse modo, aproveitando melhor seu tempo e dinheiro com atividades que realmente agregam valor a sua vida e saúde, tais como viagens, academia, passeios com a família.
 
REFERÊNCIAS

FERREIRA, J.C. A IMPORTÂNCIA DA EDUCAÇÃO FINANCEIRA PESSOAL PARA A QUALIDADE DE VIDA . 2017. Disponível em:
https://revistas.pucsp.br/caadm/article/viewFile/33268/25017. Acesso em: 03 set. 2021.

STORE, Play. Meu Dinheiro. 2022. Disponível Mobile. Disponível em: https://play.google.com/store/apps/details?id=easyme.meudinheiro. Acesso em: 11 fev. 2022.

LYON, Robert; FLORES, John; et al. O que é o RBAC do Azure: controle de acesso baseado em função do azure. controle de acesso baseado em função do Azure. 2022. Disponível em: https://docs.microsoft.com/pt-br/azure/role-based-access-control/overview. Acesso em: 09 abr. 2022.

CHEROBIM A. P. M. S; ESPEJO M.M.S.B. Finanças pessoais: conhecer para enriquecer! São Paulo: Atlas, 2010. 147 p

SOMMERVILLE, Ian. Software Engineering. 8. ed. Londres: Pearson Universidades, 2011. 568 p.

HAN, Byung-Chul. Sociedade do cansaço. Petrópolis: Editora Vozes, 2015. 136 p.

LUCAS JANONE (Rio de Janeiro). CNN Brasil. Endividamento das famílias bate recorde em 2021, aponta CNC. 2022. Disponível em: https://www.cnnbrasil.com.br/business/endividamento-das-familias-bate-recorde-em-2021-ap onta-cnc/#:~:text=O%20endividamento%20das%20fam%C3%ADlias%20brasileiras,quando
%20come%C3%A7ou%20a%20s%C3%A9rie%20hist%C3%B3rica. . Acesso em: 09 mar. 2022.

HOJI, Masakazu. Administração financeira e orçamentária: matemática financeira aplicada, estratégias financeiras, orçamento empresarial. São Paulo: Atlas, 2010. 592 p.

LUDMILA CANDAL (São Paulo). CNN Brasil. Dia das Crianças: entenda a importância da educação financeira para os pequenos. entenda a importância da educação financeira para os pequenos. 2021. Disponível em:
https://www.cnnbrasil.com.br/business/dia-das-criancas-entenda-a-importancia-da-educacao- financeira-para-os-pequenos/#:~:text=A%20Organiza%C3%A7%C3%A3o%20para%20a%2 0Coopera%C3%A7%C3%A3o,da%20metade%20aprende%20nas%20escolas. . Acesso em: 09 mar. 2022.

GUIDINI, P. A. A comunicação com o mercado por meio de aplicativos: desafios e oportunidades. Signos do Consumo, São Paulo, v. 10, n. 1, p. 59-69, jan./jun. 2018.

EVAN, W. M., & FREEMAN, R. E. A stakeholder theory of the modern corporation: Kantian capitalism. In: T. Beauchamp & N. Bowie (Eds.), Ethical theory and business (2nd ed.): 75–93. Englewood Cliffs, NJ: Prentice-Hall, 1988.

COHN, Mike. User Stories Applied: for agile software development. 2009. Disponível em: https://athena.ecs.csus.edu/~buckley/CSc191/User-Stories-Applied-Mike-Cohn.pdf. Acesso em: 31 jul. 2022.

GIARETA, Marisa. PLANEJAMENTO FINANCEIRO PESSOAL: uma proposta de controle de fluxo de caixa para orçamento familiar. 2011. Disponível em: https://www.lume.ufrgs.br/bitstream/handle/10183/77602/000894439.pdf. Acesso em: 29 ago. 2022.
 
RIBEIRO, Ana Aparecida; TEIXEIRA, Fábio André; et al. ORÇAMENTO PESSOAL: uma pesquisa com os professores da escola estadual são pio x. 2016. Disponível em: https://eventos.crp.ufv.br/egeap/wp-content/uploads/OR%C3%87AMENTO-PESSOAL.pdf. Acesso em: 29 ago. 2022.

CANDIDO, J. G.; FERNANDES, A. H. S. Educação financeira e nível do endividamento: relato de pesquisa entre os estudantes de uma instituição de ensino da cidade de São
Paulo. Revista Eletrônica Gestão e Serviços, v. 5, n. 2, p. 894-913, 2014

WISNIEWSKI, M. L. G.. A importância da educação financeira na gestão das finanças pessoais: uma ênfase na popularização do mercado de capitais brasileiro. Revista Intersaberes, Curitiba, a.6, n.12, p. 155-172. v. 6, n. 11, 2011.


