Documentação provisória 


Primeiro passo: criar o banco de dados

Criei o banco de dados chamado "crud-php-bootstrap", com a tabela "students":

CREATE TABLE `phpmyadmin`.`students` (
  `id` INT(6) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(191) NOT NULL,
  `email` VARCHAR(191) NOT NULL,
  `phone` VARCHAR(191) NOT NULL,
  `course` VARCHAR(191) NOT NULL,
  PRIMARY KEY (`id`));

Após, criei o arquivo student-create.php, para depositar o formulario de criação do aluno.
O próximo passo foi criar o arquivode conexão com o banco de dados, o dbcon.php
Então, criei o arquivo message.php para configurar a mensagem que aparece após executar ações
Foi criado o arquivo index.php, onde sera apresentado todos os alunos dentro do sistema
Foi criado o arquivo student_edit.php, para criar o arquivo de edição dos dados do aluno
