# CRUD-Login
Códigos em PHP que permitem criar, atualizar, consultar e excluir usuários. Uma tela de login é apresentada e partes do site são acessíveis apenas para quem criar uma conta e usar as credenciais de acesso da mesma na tela de login.

1) Como testar em Localhost (servidor Xampp)

a - copie nossa pasta "pmd_privado" e seus arquivos para a pasta xampp que existe no seu c:<br>
b - no htdocs, crie a pasta "pmd" e copie para ela os arquivos da raiz deste repositório<br>
c - no seu navegador, digite http://localhost/pmd/newuser.php e crie um usuário<br>
d - você terá acesso à página inicial do sistema<br>

2) Como fazer login no sistema

a - no seu navegador, digite http://localhost/pmd/login.php e preencha o formulário<br>
b - clique em "Entrar"<br>
c - caso ainda não tenha criado uma conta, clique em "clique aqui" ao lado de "Já possui cadastro"

3) Como fazer Logout no sistema

a - basta clicar em "Sair" no canto superior direito do sistema e o logout será feito<br>
b - olhando o código, é possível perceber que o cookie de sessão sofre uma limpeza neste processo

4) Mudar conta

a - clique em "Minha conta" no canto superior direito do sistema<br>
b - na coluna da esquerda ("meus dados"), altere os dados e clique em "Mudar"<br>
c - perceba que todos os campos do formulário precisam estar preenchidos para enviar o formulário

5) Mudar senha

a - clique em "Minha conta" no canto superior direito do sistema<br>
b - na coluna da direita ("mudar senha"), digite e confirme a nova senha (ela precisa ter 4 ou mais caracteres)<br>
c - clique em "Mudar" (este botão fica ativo apenas quando a senha nova e sua confirmação são iguais e possuem 4 ou mais caracteres)

6) Excluir conta

a - clique em "Minha conta" no canto superior direito do sistema<br>
b - na parte inferior da tela, clique em "Excluir conta" e o usuário é excluído imediatamente
