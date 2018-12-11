/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisgerlab`
--

-- --------------------------------------------------------


--
-- Estrutura da tabela `funcao`
--
CREATE TABLE funcao (
  id int(11) AUTO_INCREMENT,
  funcao varchar(50) NOT NULL,
  PRIMARY KEY(id),
  UNIQUE KEY(funcao)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO funcao (funcao) VALUES('Administrador');
INSERT INTO funcao (funcao) VALUES('Coordenador');
INSERT INTO funcao (funcao) VALUES('Professor');

--
-- Estrutura da tabela `laboratorio`
--
CREATE TABLE laboratorio (
  id int(11) AUTO_INCREMENT,
  nome varchar(50) NOT NULL,
  PRIMARY KEY(id),
  UNIQUE KEY(nome)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO laboratorio (nome) VALUES('Lab1 - Bloco 5');
INSERT INTO laboratorio (nome) VALUES('Lab2 - Bloco 4');
INSERT INTO laboratorio (nome) VALUES('Latidic - Bloco 5');

--
-- Estrutura da tabela `usuario`
--
CREATE TABLE usuario (
  id int(11) AUTO_INCREMENT,
  cpf varchar(11) NOT NULL,
  nome varchar(100) NOT NULL,
  email varchar(150) NOT NULL,
  senha varchar(32) NOT NULL,
  funcao int(11) NOT NULL,
  situacao varchar(20),
  PRIMARY KEY(id),
  UNIQUE KEY(cpf, email),
  FOREIGN KEY (funcao) REFERENCES funcao(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO usuario (cpf,nome,email,senha,funcao, situacao) VALUES('00000000000','Adm Default','adm@adm.com',MD5('adm@adm'),1,'on');

--
-- Estrutura da tabela `reserva`
--
CREATE TABLE reserva (
  id int(11) AUTO_INCREMENT,
  data varchar(20) NOT NULL,
  laboratorio int(11) NOT NULL,
  professor int(11) NOT NULL,
  status varchar(10) NOT NULL,
  PRIMARY KEY(id),
  UNIQUE KEY(data),
  FOREIGN KEY (laboratorio) REFERENCES laboratorio(id),
  FOREIGN KEY (professor) REFERENCES usuario(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;






