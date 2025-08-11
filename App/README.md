# 🧱 Arquitetura MVC

Este projeto segue o padrão de arquitetura **MVC** — Model-View-Controller. Esse padrão é amplamente utilizado no desenvolvimento de aplicações web, desktop e mobile, pois organiza o código de forma clara, separando responsabilidades e facilitando a manutenção e escalabilidade da aplicação.

## 🔍 O que é MVC?

**MVC (Model-View-Controller)** é um padrão de arquitetura de software que divide a aplicação em três camadas principais:

### 🧠 Model (Modelo)

Responsável por **gerenciar os dados** e as regras de negócio da aplicação. Ele se comunica com o banco de dados, realiza cálculos e aplica as lógicas necessárias. O Model **não sabe nada sobre a interface gráfica (View)**.

- Representa os dados e a lógica da aplicação.
- Exemplo: classes de banco de dados, ORMs, validações.

### 👁️ View (Visão)

Responsável por **exibir a interface** ao usuário. A View **apresenta os dados** que recebe do Controller ou diretamente do Model e **coleta entradas** do usuário.

- Foca na experiência visual.
- Pode ser uma página HTML, um layout em uma aplicação mobile, etc.
- Não contém lógica de negócio.

### 🎮 Controller (Controlador)

Responsável por **intermediar a comunicação** entre o Model e a View. O Controller **recebe as entradas do usuário**, processa essas entradas (geralmente chamando métodos do Model) e **escolhe qual View renderizar** como resposta.

- Atua como "ponte" entre a interface e os dados.
- Contém a lógica de controle da aplicação.

---

## 🧩 Exemplo de Fluxo MVC

1. O usuário acessa uma URL ou clica em um botão.
2. O **Controller** é acionado e interpreta essa ação.
3. O Controller chama o **Model**, que busca ou manipula os dados necessários.
4. Os dados são devolvidos ao Controller.
5. O Controller passa os dados para a **View**, que os renderiza na tela.

---

## 🗂️ Estrutura de Pastas
```plaintext
/APP_PHP
│
├── /Controller              # Lógica de controle e fluxo da aplicação
│   ├── AlunoController.php
│   ├── AutorController.php
│   ├── CategoriaC0ntroller.php
│   ├── Controller.php
│   ├── EmprestimoController.php
│   ├── InicialController.php
│   ├── LivroController.php
│   └── LoginController.php
│
├── /DAO                    # Objetos de acesso a dados (comunicação com banco)
│   ├── AlunoDAO.php
│   ├── AutorDAO.php
│   ├── CategoriaDAO.php
│   ├── DAO.php
│   ├── EmprestimoDAO.php
│   ├── LivroDAO.php
│   └── LoginDAO.php
│
├── /Model                  # Classes de domínio (entidades)
│   ├── Aluno.php
│   ├── Autor.php
│   ├── Categoria.php
│   ├── Emprestimo.php
│   ├── Livro.php
│   ├── Login.php
│   └── Model.php
│
├── autoload.php            # Carregamento automático de classes
├── config.php              # Configurações globais (como DB, etc.)
├── index.php               # Ponto de entrada da aplicação
└── routes.php              # Definição de rotas
```
---
## Como ver funcionando
  * Abra o projeto no VS Code e via terminal inicialize o servidor PHP com o comando php -S localhost:8000
  * Se necessário, edite os dados de conexão com MySQL no PHP (host, porta, usuário e senha)
  * Acesse no seu navegador: http://localhost:8000
