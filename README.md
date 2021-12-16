# Projeto Mind Consulting

Projeto visava as seguintes diretrizes:

● Requisitos não funcionais
○ É necessário utilizar umas das seguintes tecnologias :
■ Javascript utilizando React ou React Native para frontend e com 
Node.js para o backend;
■ PHP utilizando um dos frameworks: Codeigniter ou Laravel;
○ As senhas devem ser criptografadas utilizando BCrypt;
○ O banco de dados pode ser relacional ou não relacional, sendo de escolha 
livre do candidato;
○ O projeto deve ser web ou mobile;
● Requisitos funcionais
○ Cadastro
■ O sistema deve permitir o auto-cadastro de usuários comuns
■ através de um formulário simples e intuitivo.
■ Entradas:
● - Nome completo
● - CPF
● - E-mail
● - Senha
● - Imagem de perfil
● Login
○ O sistema deve realizar o gerenciamento através de uma tela de login, 
permitindo o acesso de usuários que possuam credenciais de e-mail e senha 
válidos para um dashboard.
○ O sistema deve ser dividido em duas visões diferentes:
■ administrador: deve ter nível de acesso 999
■ usuário comum. deve ter o nível de acesso 1
■ usuário desativado: deve ter o nível de acesso 0 e não poderá acessar 
a plataforma de forma alguma.
○ Entradas:
■ E-mail ou CPF
■ Senha
● Dashboard Usuário Admin
○ O sistema deverá possuir na visão administrador um dashboard com uma 
tabela listando todos os usuários salvos no sistema. Nesta tabela deverão ser 
exibidas todas as informações e os botões de ação para o administrador 
poder editar e desativar qualquer usuário.
○ Features:
■ Tabela para listar todos os usuários
■ Botão de ação para editar um usuário
■ Botão de ação para ativar/desativar um usuário
● Dashboard Usuário Comum
○ O sistema deverá incluir a visão de usuários comuns um dashboard com apenas 
as informações de seu perfil e a opção para editar todos seus próprios dados.
○ Features:
■ Tela de perfil para exibir todos os dados do usuário
■ Tela para edição dos dados

## Até o presente momento:
# Telas criadas:
- Login
- Cadastro
- Dashboard tanto de um usuário comum quanto a de um usuário administrador
- Tela de atualização de cadastro
- Tela de erro se acaso o usuário digitar na tela de login algo errado (a tela tem um link que o redireciona para a tela de Login)

# Tecnologia escolhida:
O projeto contou com o framework CodeIgniter na versão mais recente disponível em Dezembro de 2021 (v.4)
As telas foram desenvolvidas utilizando Bootstrap v.5

#Soluções implatadas:
- usuário consegue fazer login no sistema com email e senha
- o dashboard do usuario comum mostra seus dados, inclusive na hora de fazer alguma alteração
- o dashboard do administrador mostra seus dados e o de outros usuários, permitindo também fazer alterações tanto no seu perfil quanto dos outros usuarios

#Soluções pendentes:
- Tratamento dos inputs, como número máximo de caracteres do CPF
- Salvar imagem 
- Carregar imagem do usuário em tela
- Função de excluir usuário
- A seleção de tipo de usuário deveria ficar apenas para os administradores

#Observações:
- O arquivo de script do BD criado para projeto se encontra na pasta Script BD

#Links Utilizados para consulta:
Realizar o upload de imagem
[https://codeigniter.com/user_guide/libraries/uploaded_files.html#single-file]

Documentação do boostrap
[https://getbootstrap.com/docs/5.1]

Documentação oficial do CodeIgniter
[https://codeigniter.com/user_guide/tutorial/index.html]

Controle de Sessão 
[https://codeigniter.com/user_guide/libraries/sessions.html?highlight=session]

Rota
[https://codeigniter.com/user_guide/incoming/routing.html]

Controller
[https://codeigniter.com/user_guide/incoming/controllers.html]

Model
[https://codeigniter.com/user_guide/models/model.html]

CRUD com codeigniter
[https://www.positronx.io/codeigniter-crud-with-bootstrap-and-mysql-example/]



