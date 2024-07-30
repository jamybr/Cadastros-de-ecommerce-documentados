# Índice 

[Cadastros-de-ecommerce-documentados](#cadastros-de-ecommerce-documentados-1)  
[Descrição](#descri%C3%A7%C3%A3o)  
[Funcionalidades](#funcionalidades)    
[Composição do Projeto](#%EF%B8%8Fcomposi%C3%A7%C3%A3o-do-projeto)   
[Funções em PHP](#fun%C3%A7%C3%B5es-em-php)  
[Funções em Javascript](#fun%C3%A7%C3%B5es-em-javascript)   
[Tecnologias Utilizadas](#%EF%B8%8Ftecnologias-utilizadas)  
[Fontes consultadas](#fontes-consultadas)  
[Colaboradores](#colaboradores)  
[Autores](#%EF%B8%8Fautores)  

# Cadastros-de-ecommerce-documentados  

# 📌Cadastros-de-ecommerce-documentados  

## 📝Descrição  
 * Este projeto é uma aplicação web desenvolvida para gerenciar o cadastro de produtos em um sistema de e-commerce. O objetivo principal é fornecer uma interface simples e funcional para adicionar e gerenciar categorias, marcas e produtos em um banco de dados MySQL. A aplicação utiliza PHP para o backend e HTML/CSS para o frontend, com suporte a operações básicas de CRUD (Create, Read, Update, Delete) para a gestão de dados.

## 🔛Funcionalidades   
 * O Sistema de Cadastro e Gestão de Produtos oferece diversas funcionalidades para a administração de produtos em um ambiente de e-commerce. As principais funcionalidades incluem:
   
   ### 1. Cadastro de Categorias
   * Descrição: Permite o cadastro de novas categorias que serão usadas para classificar os produtos.  
   * Funcionamento: O usuário preenche um formulário com a descrição da categoria e, ao enviar, a categoria é salva no banco de dados.
  
   ### 2. Cadastro de Marcas
   * Descrição: Permite o cadastro de novas marcas que serão associadas aos produtos.  
   * Funcionamento: O usuário preenche um formulário com a descrição da marca e, ao enviar, a marca é salva no banco de dados.

   ### 3. Cadastro de Produtos
   * Descrição: Permite o cadastro de novos produtos no sistema.  
   * Funcionamento: O usuário preenche um formulário com informações detalhadas sobre o produto, como nome, descrição, estoque, preço, categoria e marca. O produto é então salvo no banco de dados.
  
   ### 4. Visualização de Produtos
   * Descrição: Exibe uma lista de todos os produtos cadastrados.  
   * Funcionamento: O sistema recupera os dados dos produtos armazenados no banco de dados e os apresenta em uma tabela na interface do usuário.
  
   ### 5. Interface Amigável e Funcional
   * Design Responsivo: A aplicação possui um design responsivo que se adapta a diferentes tamanhos de tela, garantindo uma boa experiência de usuário em dispositivos móveis e desktops.  
   * Interatividade: Utiliza JavaScript e jQuery para proporcionar uma experiência interativa e dinâmica.
  
   ### 6. Mensagens de Sucesso e Erro
   * Cadastro de Dados: Após a tentativa de cadastro de categorias, marcas ou produtos, o sistema exibe mensagens de sucesso ou erro para informar o usuário sobre o status da operação.  

## ⚙️Composição do Projeto  
   * O projeto é organizado de forma modular para facilitar o desenvolvimento e a manutenção. A seguir, está uma visão geral da estrutura e dos componentes principais do projeto:

   ### 1. Estrutura de Pastas  
   
   * `controller/` : Contém os arquivos PHP responsáveis pela lógica de controle e interação com o banco de dados. Os controladores processam as requisições do usuário e manipulam os dados conforme necessário.

   `conexao.php` : Estabelece a conexão com o banco de dados MySQL.   
   `carrinho-add.php` : Adiciona itens ao carrinho de compras.  
   `carrinho-busca.php` : Busca e exibe itens no carrinho de compras.  
   `insere-categoria.php` : Insere novas categorias no banco de dados.  
   `insere-marca.php` : Insere novas marcas no banco de dados.  
   `insere-produto.php` : Insere novos produtos no banco de dados.  
   `produtos-busca.php` : Busca e exibe produtos cadastrados.  
   `produtos-resumo.php` : Exibe um resumo detalhado de um pedido específico.  

   * `model/` : Inclui as classes PHP que representam os modelos de dados. Estas classes encapsulam a lógica de negócios e interagem com o banco de dados.  

   `Carrinho.class.php` : Gerencia operações relacionadas ao carrinho de compras, como adicionar e buscar itens.  
   `Produtos.class.php` : Lida com operações de produto, como inserção, busca e resumo dos produtos.  

   * `view/` : Armazena os arquivos de visualização em HTML que definem a interface do usuário.  
   
   `cadastro-categoria.php` : Página para cadastrar novas categorias.  
   `cadastro-marca.php` : Página para cadastrar novas marcas.  
   `cadastro-produto.php` : Página para cadastrar novos produtos.  
   `produtos.php` : Página para visualizar a lista de produtos cadastrados.  
   `produtos-resumo.php` : Página para exibir o resumo de um pedido específico.  

   * `css/` : Contém arquivos de estilo CSS que definem o design visual da aplicação.    

   `style.css` : Define o estilo da aplicação, incluindo layout, cores e fontes.  

   * `js/` : Inclui arquivos JavaScript para funcionalidades interativas e dinâmicas.   

   `jquery-2.1.4.min.js` : Biblioteca jQuery para manipulação do DOM e eventos.  
   `script.js` : Scripts personalizados para a funcionalidade interativa da aplicação.  

   ### 2. Banco de Dados  
   * Tabelas:  
   `categoria` : Armazena informações sobre categorias de produtos, com campos como `IDCATEGORIA` e `DESCRICAO`.  
   `marca` : Armazena informações sobre marcas de produtos, com campos como `IDMARCA` e `DESCRICAO`.  
   `produtos` : Armazena detalhes sobre produtos, incluindo `IDCATEGORIA`, `IDMARCA`, `NOME`, `DESCRICAO`, `ESTOQUE` e `PRECO`.

   ### 3. Funcionalidades de Front-End    
   `HTML` : Estrutura básica das páginas da web.  
   `CSS` : Estilos que definem o layout e a aparência das páginas.  
   `JavaScript` : Scripts para interação e dinâmica, como adição de itens ao carrinho e exibição de alertas.  

   ### 4. Funcionalidades de Back-End  
   `PHP` : Scripts que processam dados do usuário, interagem com o banco de dados e gerenciam a lógica de aplicação.  

## Funções em PHP  

## Funções em Javascript  

## ⌨️Tecnologias Utilizadas

 * PHP  
 * CSS   
 * HTML  
 * GitHub  
 * Javacript

## 📑Fontes consultadas  

 * Google   
 * Chat.openai

## 🤝🏻Colaboradores

 * [Professor Leonardo Rocha](https://github.com/LeonardoRochaMarista)  
 * [Leonardo Rocha](https://github.com/LeonardoRochaMarista)

 ## ✒️Autores
 * Esse projeto foi criado por [Jasminy Matias e Silva](https://github.com/jamybr)  

   
