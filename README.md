<p align="center">
  <img src="/public/img/logo.svg" alt="Meu Projeto" width="200" height="auto">
  <h1 align="center"> Cash Status </h1>
</p>


## Tecnologias

![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white) ![MySQL](https://img.shields.io/badge/mysql-4479A1.svg?style=for-the-badge&logo=mysql&logoColor=white) ![Figma](https://img.shields.io/badge/figma-%23F24E1E.svg?style=for-the-badge&logo=figma&logoColor=white) ![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white) ![Visual Studio Code](https://img.shields.io/badge/Visual%20Studio%20Code-0078d7.svg?style=for-the-badge&logo=visual-studio-code&logoColor=white)

## Resumo


## Pré Requisitos 
- <a href="https://getcomposer.org/download/"> Composer 2.8.9 </a>
- <a href="https://www.php.net/downloads.php"> PHP 8.3.29 </a>
- <a href="https://nodejs.org/en/blog/release/v24.13.0"> Node.Js 24.13.0 </a>

## Como Instalar 
#### Clonar Repositório
Clone este repositório no seu computador com o comando:
```bash 
    git clone https://github.com/Arthurlima0301/Cash-Status    
```

#### Instalar Dependências
Após clonar o repositório, no terminal digite:
```bash 
    composer install
```

#### Criar .env
Após a instalação do autoload, execute o seguinte comando no terminal:
```bash 
    cp .env.example .env
```

#### Criar chave do projeto
A seguir é necessário criar a chave da aplicação, para isso:
```bash 
    php artisan key:generate
```

#### Realizar Migrations
Por fim, realize as migrações do banco de dados:
```bash 
    php artisan migrate
```

## Como Usar 
Após terminar as configurações, faça o comando a seguir:
```bash 
   php artisan serve 
```

Como último passo, abra o navegador e acesse http://127.0.0.1:8000.

## Contribuidores 
[Arthur Lima](https://www.linkedin.com/in/arthur-lima-2b68342bb/)







