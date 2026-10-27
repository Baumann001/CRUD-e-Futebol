# ⚽ CRUD Futebol

Sistema web para gerenciar times, jogadores e partidas de futebol, com tela de login.

## Funcionalidades
- CRUD completo de **times** (nome e cidade)
- CRUD completo de **jogadores** (posição, número da camisa e time)
- CRUD completo de **partidas** (time da casa, visitante, data e placar)
- Login com sessão e painel (dashboard)

## Tecnologias
- PHP
- MySQL (chaves estrangeiras entre times, jogadores e partidas)
- HTML e CSS

## Banco de dados
- [`db.sql`](db.sql): times, jogadores e partidas, com dados de exemplo
- [`banco.sql`](banco.sql): tabela de usuários do login

## Como executar
1. Instale o [XAMPP](https://www.apachefriends.org/) (Apache + MySQL).
2. Clone este repositório dentro da pasta `htdocs`.
3. No phpMyAdmin, importe `db.sql` e `banco.sql`.
4. Confira os dados de conexão em `db.php`.
5. Acesse `http://localhost/CRUD-e-Futebol`.

---
Desenvolvido por [Gustavo Baumann](https://www.linkedin.com/in/gustavo-baumann-92b1442a1/).
