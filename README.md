
# 🎓 Aulas de desenvolvimento web - módulo 03

Este repositório guarda todos os exercícios realizados no terceiro módulo da disciplina de desenvolvimento web, dentro do curso técnico de Desenvolvimento de Sistemas da ETEC de Registro-SP, com o professor Maylon.

As aulas do módulo 03 tinham como objetivo a introdução da Programação Orientada a Objetos com o framework PHP Laravel.

## 🗃 Como visualizar?
Cada pasta do repositório guarda uma atividade diferente. O próprio Laravel permite visualizar seu projeto localmente, pois é capaz de emular um servidor web. No entanto, para fins de desenvolvimento, é importante usar um servidor Apache. 

Aqui vai um passo a passo para visualizar as atividades, do mesmo modo que foi realizado em aula:

1. Baixe este repositório.
2. Instale o PHP. Você pode usar [este](https://www.php.net/downloads.php) link.
3. Instale o Laravel. Você pode usar [este](https://laravel.com/docs/12.x/installation) link.
4. Instale o Composer. Você pode usar [este](https://getcomposer.org/download/) link.
5. Instale o HeidiSQL. Você pode usar [este](https://www.heidisql.com/download.php) link.
6. No gerenciador de sessões do HeidiSQL, você deve adicionar uma sessão usando o botão "Nova". Para que a sessão não entre em conflito com as configurações das atividades, ela deve possuir:
- Servidor/IP: **127.0.0.1**
- Usuário: **root**
- Nenhuma senha
7. Entre no repositório baixado, acesse a pasta com a atividade que você deseja visualizar e procure um arquivo de extensão *.sql* (se a atividade utilizar banco de dados, ele estará disponível através deste arquivo)
8. Abra o arquivo *.sql* com o programa HeidiSQL e execute o código usando **CTRL+A** e **F9**. Você também pode entrar na sessão do HeidiSQL e selecionar a opção *arquivo > executar arquivo SQL...* (isto deve baixar o banco de dados usado na atividade)
9. Entre no repositório baixado e abra a pasta da atividade pelo terminal
10. Execute o comando de terminal:

-  *php artisan serve*
- Esse comando inicia o servidor e gera um link para acessar o projeto no seu navegador padrão


## ❓ O que é Laravel?
É uma framework PHP muito popular pela sua sintaxe elegante e ferramentas poderosas. 

O Laravel foi criado em 2011 por Taylor Otwell. Ao longo dos anos, sofreu várias modificações e hoje em dia possui um ecossistema robusto, documentação extensiva e comunidade ativa.

Dentre as características do Laravel, podemos citar:
- Segue o **padrão MVC** (Models - Views - Controllers) para organizar o desenvolvimento orientado a objetos
- Usa o **Artisan** como interface de linha de comando para automatizar tarefas
- Usa o **Eloquent** para interagir com bancos de dados através do PHP, ao invés de código SQL "cru"
- Facilita a manipulação e o teste de bancos de dados no próprio terminal através das **Migrations** e das **Seeds**
- Facilita a criação de interfaces dinâmicas usando o engine-template **Blade**, com sintaxe limpa e poderosa
- Segurança integrada para ameaças web como XSS, CSRF e SQL Injection

## ⚙️ O que é Framework?
É conjunto de ferramentas, bibliotecas e padrões que formam uma base de código reutilizável para desenvolver software. 

Ao invés de programar todo o sistema do zero, você pode aproveitar a arquitetura e os componentes de um framework para se concentrar apenas nas funcionalidades e na lógica específica do seu projeto.

Outros exemplos de framework para web são Django (Python) e Angular (JavaScript)

## 📦 O que é Programação Orientada a Objetos?

A Programação Orientada a Objetos (POO) é um paradigma de programação, ou seja, uma maneira de programar que aproxima o código do mundo real, visando resolver problemas de forma mais eficiente.

Diverge do paradigma conhecido como programação estruturada, que tenta codificar apenas através de funções e estruturas de controle como condições e laços, organizando o software em blocos lógicos.
 
A POO organiza o software em classes e objetos. Essas estruturas tentam "imitar" as características e comportamentos de entidades reais para melhorar a reutilização e a manutenção do código. 

Esse conceito pode ser aplicado à várias linguagens de programação e possui alguns fundamentos:
- 🚹 **Classes**: abstração de um elemento ou grupo de elementos reais, possuindo atributos e métodos
- 🔖 **Atributos**: características de uma classe, representadas por variáveis que armazenam dados
- 🔧 **Métodos**: comportamentos de uma classe, representadas por funções
- 🙋🙋‍♀️ **Objetos**: são instâncias de classes, ou seja, entidades específicas que derivam de um grupo maior, possuindo seus mesmos atributos  e métodos
- 📝 **Abstração**: capacidade de representar entidades abstratas ou concretas da vida real em formato de código
- ⬇️ **Herança**: transferência de propriedades entre classes ou de uma classe para um objeto
- 🎛 **Polimorfismo**: capacidade de objetos usarem os mesmos métodos, mas de formas diferentes
- 🔒 **Encapsulamento**: possibilidade de ocultar detalhes internos das entidades, controlando a herança e o polimorfismo

## ✏️ Meu aprendizado em PHP & POO
1. Classes, atributos e métodos
2. Modificadores de acesso *public/private/protected*
3. Métodos de definição e consulta
4. Instanciamento de objetos
5. Método construtor
6. Polimorfismo de inclusão
7. Referências à classe pai com *parent::*
8. Classes e métodos abstratos
9. Interfaces
10. Métodos estáticos com *self::*

## ✏️ Meu aprendizado em Laravel
1. Estrutura lógica com Models e Controllers
2. Estrutura de apresentação com Views
3. Componentização de Views
3. Criação de bancos de dados usando Migrations
4. Diferentes tipos de rotas
5. Envio e consumo de dados das Views com Controllers
6. Loops, condicionais e diretivas de segurança

## Tecnologias utilizadas

[![My Skills](https://skillicons.dev/icons?i=laravel,php,html,css,bootstrap,mysql)](https://skillicons.dev)

## 📃 Licença

- [MIT](https://choosealicense.com/licenses/mit/)

## 👤 Sobre mim
- 👤 Guilherme Shimada Pereira ([guilhermexmada](https://github.com/guilhermexmada))
- 🎓 Técnico em Desenvolvimento de Sistemas (2024)
- 🎓 Cursando Desenvolvimento de Software Multiplataforma (até 2027!) 
- 🚀 Rumo à Cibersegurança!

## 🔗 Referências

- Laravel: [laravel/docs/installation](https://laravel.com/docs/12.x/installation)
- Composer: [getcomposer/download](https://getcomposer.org/download/)
- PHP: [php/downloads](https://www.php.net/downloads.php)
- HeidiSQL: [heidisql/download](https://www.heidisql.com/download.php)
- Ícones das tecnologias: [tandpfun/skill-icons](https://github.com/tandpfun/skill-icons)
- Emojis: [piliapp/emoji](https://getemoji.com/)
