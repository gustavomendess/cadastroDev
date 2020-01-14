# cadastroDev
Projeto solicitado pela Portabilis.

Requisitos: 

1 - Baixar o WAMP na máquina local (https://wamp.soft32.com.br/); <br />
2 - É necessário que a configuração de usuário do phpmyadmin seja:  <br />
2.1 - Usuário : root;  <br />
2.2 - Senha : "" (sem senha);  <br />

Passo a passo: 

1 - Clonar o repositório para a máquina local.  <br />
2 - Executar o WAMP para que libere acesso ao phpmyadmin no endereço http://localhost.  <br />
3 - Ir ao phpmyadmin(http://localhost/phpmyadmin/), aba SQL, executar os comandos SQL no arquivo "Script criação banco de dados.sql";  <br />
4 - Pegar a pasta 'cadastroDev' clonada e colar na pasta de instalação do WAMP, sub-diretório "www".  <br />
5 - Após isso, ir ao link http://localhost/cadastroDev/src/, que é a página inicial e de cadastro de desenvolvedores.  <br />

Problemas com SQL Injection:

1:O fato de nao utilizar comandos afim de evitar invasoes nas tabelas.
2:Por ser um software onde qualquer um pode editar os cadastros e mexer nos dados pessoais.

Possiveis soluções:

1-Utilizar a função addslashes() , onde sera adicionada uma barra invertida antes de cada aspa simples ou aspa dupla encontrada
2-Utilizar o comando [ :alpha: ] para limpar as variaveis impedindo de usarem o classico OR ‘ 1=’1 .
3-Utilizar PDO nas queries do SQL.

