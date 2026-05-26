CREATE SCHEMA IF NOT EXISTS `projeto_final`
DEFAULT CHARACTER SET latin1;

USE `projeto_final`;



-- =========================================
-- TABELA USUARIO
-- =========================================
CREATE TABLE IF NOT EXISTS `usuario` (
    `idusuario` INT(11) NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(150) NULL DEFAULT NULL,
    `cpf` VARCHAR(11) NOT NULL,
    `dataNascimento` DATE NULL DEFAULT NULL,
    `email` VARCHAR(150) NULL DEFAULT NULL,
    `senha` VARCHAR(45) NULL DEFAULT NULL,

    PRIMARY KEY (`idusuario`),
    UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;



-- =========================================
-- TABELA FORMACAO ACADEMICA
-- =========================================
CREATE TABLE IF NOT EXISTS `formacaoacademica` (
    `idformacaoAcademica` INT(11) NOT NULL AUTO_INCREMENT,
    `idusuario` INT(11) NOT NULL,
    `inicio` DATE NOT NULL,
    `fim` DATE NULL DEFAULT NULL,
    `descricao` VARCHAR(150) NULL DEFAULT NULL,

    PRIMARY KEY (`idformacaoAcademica`),

    INDEX `idusuario_idx` (`idusuario` ASC),

    CONSTRAINT `fk_formacao_usuario`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;



-- =========================================
-- TABELA EXPERIENCIA PROFISSIONAL
-- =========================================
CREATE TABLE IF NOT EXISTS `experienciaprofissional` (
    `idexperienciaprofissional` INT(11) NOT NULL AUTO_INCREMENT,
    `idusuario` INT(11) NOT NULL,
    `inicio` DATE NULL DEFAULT NULL,
    `fim` DATE NULL DEFAULT NULL,
    `empresa` VARCHAR(45) NULL DEFAULT NULL,
    `descricao` VARCHAR(45) NULL DEFAULT NULL,

    PRIMARY KEY (`idexperienciaprofissional`),

    INDEX `idusuario_idx` (`idusuario` ASC),

    CONSTRAINT `fk_experiencia_usuario`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;



-- =========================================
-- TABELA OUTRAS FORMACOES
-- =========================================
CREATE TABLE IF NOT EXISTS `outrasformacoes` (
    `idoutrasFormacoes` INT(11) NOT NULL AUTO_INCREMENT,
    `idusuario` INT(11) NOT NULL,
    `inicio` DATE NULL DEFAULT NULL,
    `fim` DATE NULL DEFAULT NULL,
    `descricao` VARCHAR(150) NULL DEFAULT NULL,

    PRIMARY KEY (`idoutrasFormacoes`),

    INDEX `idusuario_idx` (`idusuario` ASC),

    CONSTRAINT `fk_outrasformacoes_usuario`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;



-- =========================================
-- TABELA ADMINISTRADOR
-- =========================================
CREATE TABLE IF NOT EXISTS `administrador` (
    `idadministrador` INT(11) NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(45) NULL DEFAULT NULL,
    `cpf` VARCHAR(11) NOT NULL,
    `senha` VARCHAR(45) NOT NULL,

    PRIMARY KEY (`idadministrador`)
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;



-- =========================================
-- INSERT USUARIO
-- =========================================
INSERT INTO `usuario`
(`idusuario`, `nome`, `cpf`, `email`, `dataNascimento`, `senha`)
VALUES
(null, 'uira', '12345678901', 'uira@uira.com', '1970-01-01', '123');



-- =========================================
-- INSERT ADMINISTRADOR
-- =========================================
INSERT INTO `administrador`
(`idadministrador`, `nome`, `cpf`, `senha`)
VALUES
(null, 'Bia', '22222222222', 'bia123');



-- =========================================
-- INSERT EXPERIENCIA PROFISSIONAL
-- =========================================
INSERT INTO `experienciaprofissional`
(`idexperienciaprofissional`, `idusuario`, `inicio`, `fim`, `descricao`, `empresa`)
VALUES
(null, 1, '2020-01-01', '2021-01-01', 'Estagio em TI', 'Empresa X');



-- =========================================
-- INSERT FORMACAO ACADEMICA
-- =========================================
INSERT INTO `formacaoacademica`
(`idformacaoAcademica`, `idusuario`, `inicio`, `fim`, `descricao`)
VALUES
(null, 1, '2023-11-09', '2023-12-29', 'Desenvolvimento de Sistemas');



-- =========================================
-- INSERT OUTRAS FORMACOES
-- =========================================
INSERT INTO `outrasformacoes`
(`idoutrasFormacoes`, `idusuario`, `inicio`, `fim`, `descricao`)
VALUES
(null, 1, '2024-01-01', '2024-06-01', 'Curso de Arduino');