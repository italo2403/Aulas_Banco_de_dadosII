create database cadastro;
use cadastro;

create table usuarios(
id int primary key auto_increment, 
logi varchar(120),
senha varchar(20));
select * from usuarios;

create table prova(
id int primary key auto_increment,
nome varchar(120), 
questao1 char(1),
questao2 char(1), 
questao3 char(1),
questao4 char(1),
questao5 char(1), 
questao6 char(1), 
questao7 char(1), 
questao8 char(1), 
questao9 char(1),
questao10 char(1), 
questao11 char(1), 
questao12 char(1), 
questao13 char(1), 
questao14 char(1), 
questao15 char(1),
questao16 char(1), 
questao17 char(1), 
questao18 char(1),
questao19 char(1), 
questao20 char(1), 
questao21 char(1), 
questao22 char(1)
 );
 
 drop table cadastro;
 select * from prova;
DELETE FROM cadastro
WHERE id = 5;


drop database cadastro2;

SELECT u.logi, COUNT(*) AS total_acertos
FROM usuarios u
JOIN prova p ON u.id = p.id_usuario
WHERE (
  (p.questao1 = 'C' /* substitua 'C' pela resposta correta da questão 1 */ AND p.questao1 = 'C') OR
  (p.questao2 = 'C' /* substitua 'C' pela resposta correta da questão 2 */ AND p.questao2 = 'C') OR
  -- continue com as demais questões
)
GROUP BY u.id, u.logi
HAVING total_acertos = (
  SELECT MAX(total_acertos)
  FROM (
    SELECT COUNT(*) AS total_acertos
    FROM usuarios u
    JOIN prova p ON u.id = p.id_usuario
    WHERE (
      (p.questao1 = 'C' /* substitua 'C' pela resposta correta da questão 1 */ AND p.questao1 = 'C') OR
      (p.questao2 = 'C' /* substitua 'C' pela resposta correta da questão 2 */ AND p.questao2 = 'C') OR
      -- continue com as demais questões
    )
    GROUP BY u.id
  ) AS subquery
);


