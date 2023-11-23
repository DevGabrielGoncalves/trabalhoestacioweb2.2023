
README - Site "Salve a Amazônia"

Este README fornece informações detalhadas sobre o site "Salve a Amazônia", incluindo uma visão geral do conteúdo, instruções para navegação e descrições dos scripts PHP utilizados.

Conteúdo do Site
O site "Salve a Amazônia" é um projeto dedicado à conscientização e arrecadação de fundos para a preservação da Amazônia. Abaixo estão os principais recursos do site:

Página Inicial (index.html):

Apresenta um banner destacado e informações sobre a importância da preservação da Amazônia.
Página de Galeria (galeria.html):

Uma galeria visual destacando a beleza e a importância da Amazônia.
Inclui imagens representativas e elementos visuais para atrair a atenção dos visitantes.
Página de Doações (doacoes.html):

Oferece diferentes planos de doação, cada um com uma imagem representativa, valor e botão para doação.
Os planos redirecionam para a página de checkout do Greenpeace para facilitar o processo de doação.
Página de Login (login.html):

Permite que usuários cadastrados façam login para acessar áreas restritas do site.
Página de Download (download.php):

Acessível apenas para usuários autenticados.
Contém informações ou recursos especiais disponíveis para download.
Página de Contato (contato.php):

Apresenta um formulário simples para coletar feedback e sugestões dos usuários.
Os dados inseridos no formulário são armazenados em um banco de dados MySQL.
Scripts PHP Utilizados
Cadastro de Usuários (cadastro.php):

Processa o cadastro de novos usuários, inserindo dados no banco de dados.
Cadastro de Contato (enviar.php):

Insere feedback e sugestões do formulário de contato no banco de dados.
Configuração do Banco de Dados (configuracao_bd.php):

Configuração inicial do banco de dados, criando o banco e a tabela necessários.
Processamento de Login (processa_login.php):

Verifica as credenciais do usuário durante o processo de login.
Como Utilizar o Site
Navegação:

Use a barra de navegação no topo do site para acessar diferentes seções (Home, Galeria, Download, etc.).
O breadcrumb exibe a hierarquia de páginas para facilitar a navegação.
Galeria:

Na página "Galeria", explore imagens representativas da Amazônia para entender sua diversidade e importância.
Doações:

Na página "Doações", escolha um dos planos e clique no botão "Doar agora" para contribuir.
Contato:

Utilize a página "Contato" para enviar feedback ou fazer sugestões.
Preencha o formulário e clique em "Enviar".
Login:

Acesse a área de login para experiências personalizadas ou acesso a recursos exclusivos.
Cadastro:

Novos usuários podem se cadastrar na página de login clicando em "Cadastre-se aqui".
Configuração do Banco de Dados
configuracao_bd.php:

Execute este script uma vez para configurar o banco de dados inicial.
Banco de Dados:

As informações do usuário e feedback do formulário de contato são armazenadas no banco de dados "cadastro_login_db".
Requisitos Técnicos
PHP 7.x
Servidor Web (ex.: Apache)
MySQL