# Projeto Laravel — Seeders e Exportação de Banco de Dados

Projeto desenvolvido para aplicar os conceitos de **povoamento de banco de dados (Seeders)** em uma aplicação Laravel, culminando na exportação de um script SQL final (estrutura + dados).

## Tecnologias utilizadas

- PHP
- Laravel
- MySQL
- phpMyAdmin
- Composer / Artisan CLI

## Estrutura relevante do projeto

```
database/
├── migrations/        # Estrutura das tabelas
├── seeders/            # Classes de povoamento (Seeders)
│   ├── DatabaseSeeder.php
│   ├── UserSeeder.php
│   └── ProdutoSeeder.php
└── factories/          # Factories usadas pelos seeders (quando aplicável)
```

## Como executar o projeto

1. Clone o repositório
   ```bash
   git clone <link-do-repositorio>
   cd <pasta-do-projeto>
   ```
2. Instale as dependências
   ```bash
   composer install
   ```
3. Configure o arquivo `.env` com as credenciais do seu banco MySQL

4. Rode as migrations e os seeders
   ```bash
   php artisan migrate --seed
   ```

## Etapas de construção

### Etapa 1 — Criação dos Seeders

Os seeders foram criados via Artisan CLI:

```bash
php artisan make:seeder UserSeeder
php artisan make:seeder ProdutoSeeder
```

A lógica de inserção massiva foi implementada no método `run()` de cada classe, utilizando [Model Factories com Faker / DB::table()->insert() — *A lógica de inserção massiva foi implementada no método run() de cada classe, utilizando Model Factories com Faker (Categoria::factory() e Produto::factory()).*].

### Etapa 2 — Execução do povoamento

O povoamento foi executado com:

```bash
php artisan db:seed
```

A integridade dos dados foi validada no phpMyAdmin, verificando:
- Quantidade de registros inseridos em cada tabela
- Corretude dos relacionamentos (chaves estrangeiras)


### Etapa 3 — Exportação do banco (Dump)

Após validar a persistência dos dados, o banco foi exportado em formato `.sql` (estrutura + dados) via [phpMyAdmin / mysqldump].

O arquivo gerado está disponível em: [`/seeders_db`](./seeders_db)


## Entregáveis

- [x] Código-fonte com os Seeders implementados
- [x] README documentando as etapas
- [x] Arquivo `.sql` com o dump completo do banco (estrutura + dados)

## Autor

*mariana Rigueiro*