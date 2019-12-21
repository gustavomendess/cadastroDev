# cadastroDev
Projeto solicitado pela Portabilis.

Requisitos: 

1 - Baixar o WAMP na máquina local (https://wamp.soft32.com.br/);
2 - É necessário que a configuração de usuário do phpmyadmin seja:
2.1 - Usuário : root;
2.2 - Senha : "" (sem senha);

Passo a passo: 

1 - Clonar o repositório para a máquina local.
2 - Executar o WAMP para que libere acesso ao phpmyadmin no endereço http://localhost.
3 - Ir ao phpmyadmin(http://localhost/phpmyadmin/), aba SQL, executar os comandos SQL no arquivo "Script criação banco de dados.sql";
4 - Pegar a pasta 'cadastroDev' clonada e colar na pasta de instalação do WAMP, sub-diretório "www".
5 - Após isso, ir ao link http://localhost/cadastroDev/src/, que é a página inicial e de cadastro de desenvolvedores.