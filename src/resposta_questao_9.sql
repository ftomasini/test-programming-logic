
--2. Crie o esquema do banco e apresente o DDL utilizado.
CREATE DATABASE banco_de_dados_filmes;

CREATE TABLE ator(
    id serial primary key,
    nome varchar (45)
);

CREATE TABLE diretor(
    id serial primary key,
    nome varchar (45)
);

CREATE TABLE filme(
  id serial primary key,
  titulo varchar (45),
  ano integer
);

CREATE TABLE participa(
    id serial  primary key,
    idAtor integer references ator(id),
    idFilme integer references filme(id)
);

CREATE TABLE dirige(
    id serial  primary key,
    idFilme integer references filme(id),
    idDiretor integer references diretor(id)
);

--3. Apresente o SQL para as seguintes consultas:

--a. Atores do filme com título “XYZ”.
    SELECT ator.id,
           ator.nome
      FROM ator
INNER JOIN participa
        ON ator.id = participa.idAtor
INNER JOIN filme
        ON filme.id = participa.idFilme
     WHERE filme.titulo = 'XYZ'

--b. Filmes que o ator de nome “FULANO” participou.
    SELECT filme.id,
           filme.ano,
           filme.titulo
      FROM filme
INNER JOIN participa
        ON participa.idFilme = filme.id
INNER JOIN ator
        ON participa.idAtor = ator.id
     WHERE ator.nome = 'FULANO'


--c. Listar os filmes do ano 2015 ordenados pela quantidade de atores participantes e pelo título em ordem alfabética.

    SELECT filme.id,
           filme.ano,
           filme.titulo,
           count(ator.id) as participantes
      FROM filme
 LEFT JOIN participa
        ON participa.idFilme = filme.id
 LEFT JOIN ator
        ON participa.idAtor = ator.id
     WHERE filme.ano = '2015'
  GROUP BY 1,2,3
  ORDER BY participantes desc, filme.titulo asc


--d. Listar os atores que trabalharam em filmes cujo diretor foi “SPIELBERG”.

    SELECT DISTINCT ator.id,
           ator.nome
      FROM ator
INNER JOIN participa
        ON ator.id = participa.idAtor
INNER JOIN filme
        ON filme.id = participa.idFilme
INNER JOIN dirige
        ON dirige.idFilme = filme.id
INNER JOIN diretor
        ON diretor.id = dirige.idDiretor
     WHERE diretor.nome = 'SPIELBERG'
