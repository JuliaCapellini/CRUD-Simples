# Sistema de Cadastro de Alunos

Nesse projeto, foi criado um sistema CRUD de cadastro de alunos. O cadastro contém o ID do aluno, nome, e-mail, telefone e curso. Segue link de vídeo do sistema funcionando: https://vimeo.com/1083373605/ff9c701dc1?share=copy 

# Recursos utilizados

- PHP
- MySQL
- Bootstrap

# Views

1. **Tela Principal - index.php** <br>
Quando acessar o sistema, será demonstrada uma lista com os alunos cadastrados no banco de dados. 
![image](./img-views/index.png)

2. **Formulário de cadastro - student-create.php** <br>
Ao clicar em "Cadastrar aluno" na tela principal, será enviado para o fomulário de cadastro de alunos.
![image](./img-views/student-create.png)

3. **Visualizar cadastro - student-view.php** <br>
Para acessar essa página, clique em **Visualizar**. 
![image](./img-views/student-view.png)

4. **Editar cadastro - student-edit.php** <br>
É possível editar o cadastro, clicando no botão **Editar**. 
![image](./img-views/student-edit.png)

5. **Estrutura do banco de dados** <br>
Segue informações caso queira replicar o banco: <br>
CREATE TABLE phpmyadmin.students ( <br>
   id INT(6) NOT NULL AUTO_INCREMENT, <br>
   name VARCHAR(191) NOT NULL, <br>
   email VARCHAR(191) NOT NULL, <br>
   phone VARCHAR(191) NOT NULL, <br>
   course VARCHAR(191) NOT NULL, <br>
  PRIMARY KEY (id)); <br>
  ![image](./img-views/banco.png)
