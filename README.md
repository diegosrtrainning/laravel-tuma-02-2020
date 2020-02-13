# laravel-tuma-02-2020

Material da aula da turma de Fevereiro de 2020 de Laravel

# Aula 1 - Laravel (Parte 1)

Laravel é um framework de desenvolvimento rápido para PHP, livre e de código aberto. Cuja o principal objetivo é permitir que você trabalhe de forma estruturada e rápida.

**Gosta de código bonito?** Quem utiliza Laravel também gosta! Como o próprio slogan diz: _“O framework PHP para artesões da web”_.


## Instalando o Laravel globalmente

Abra o gitbash e execute *composer global require laravel/installer*

## Criando um novo projeto Laravel com Composer

Acesse a pasta que deseja criar o projeto em Laravel e execute *composer create-project --prefer-dist laravel/laravel trainning_ecom_laravel*


## Minhas sugestões

**1** Markdown All in One (ative no  F1)

**2** vscode-icons (ative no F1 - Icons:Activate VSCODE Icons)

## Execução

Abra o VSCode na pasta que o projeto foi criado e abra o Terminal (Terminal > New Terminal). Execute *php artisan serve*
*Abra seu browser em localhost:8000*

-- OU -- 

*php artisan serve --p=8081*

*Abra seu browser em localhost:8000*


# Aula 1 - Laravel (Parte 1 b)

## Verbos HTTP:

**GET**: Obter algo  

**POST**: Criar Algo

**PUT**: Alterar Algo

**PATCH**: Altera algo (parcialmente)

**DELETE**: Excluir Algo

## Estrutura de pastas

**app/Http/Controllers**: Onde ficam as nossas controllers

**app**: Onde ficam (também) nossas Models

**resource/views**: Onde ficam nossas Views

**routes/web.php**: Onde ficam as configurações das rotas das Controllers

## Minhas sugestões

**1** Extensão Laravel Blade Snippets

## Instalando um nova Controller via Artisan Make
*php artisan make:controller UsuariosController*

# O que aprendemos até aqui?

 1. Instalar o ambiente para o Laravel
 
 2. Criar um novo projeto em Laravel utilizando composer
 
 3. A estrutura básica Controller, Route, View
 
 4. Iniciar o servidor na porta 8000 e outra porta
 
 5. Criar uma novo Controller por meio do Artisan make:controller
 
 6. Criar uma Rota para um método da controller no arquivo routes/web.php
 
 7. Injeção de dependência com o objeto Request (Illuminate\Http\Request)
 
 8. Trabalhar com a querystring


# Aula 1 - Laravel (Parte 2)

## Minhas sugestões

**1.** Extensão laravel-goto-controller

**2.** Extensão Laravel goto view
 
**3** Extensão dotenv

# O que aprendemos até aqui?

**1.** Criando Masterpage com Yelds

**2.** Criando páginas que herdam a masterpage

**3.** Preparar um formulário para cadastro de Perfil

**4.** Criar uma Model com o comando *php artisan make:Model Perfil*

**5.** Estrutura do arquivo .env

**6.** Melhorar a visualização com a extensão dotenv

**7.** Uso do {{ $variavel }} ao invés do <?php echo $variavel; ?>

**8.** Uso do **@csrf** nas requisições dos forms

**9.** Ajustar a engine e o charset no banco mysql

**10** Utilização das extensões laravel-goto-controller e dotenv


# Aula 2 - Laravel (Parte 1)

# O que aprendemos até aqui?
1. php artisan make:migration create_table_perfis

2. php artisan migrate

3. php artisan migrate:rollback --step=1

4. Criar rotas com get, post e delete

5. Apelidamos as rotas

6. Fontawesome

7. Redirect com Route

8. Utilizamos o save e query do Eloquent via Actived Record 

9. Pattern

10. Session Flash