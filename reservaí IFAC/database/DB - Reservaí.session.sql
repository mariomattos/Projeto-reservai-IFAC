-- Cria o banco de dados caso ele ainda não exista
CREATE DATABASE IF NOT EXISTS Reservai;
USE Reservai;

-- 1. ESTRUTURA DE ESPAÇOS E ITENS

-- Space: Define os locais físicos que podem ser reservados
CREATE TABLE IF NOT EXISTS Space (
    spaceId VARCHAR(50) PRIMARY KEY,
    spaceCondition ENUM('Disponível', 'Manutenção', 'Indisponível') NOT NULL,
    spaceName VARCHAR(100) NOT NULL,
    spaceDescription VARCHAR(255) NOT NULL
);

-- SpaceInventory: Tabela ponte que liga o espaço ao inventário
CREATE TABLE IF NOT EXISTS SpaceInventory (
    idSpaceInventory INT AUTO_INCREMENT PRIMARY KEY,
    spaceId VARCHAR(50) NOT NULL,
    FOREIGN KEY (spaceId) REFERENCES Space(spaceId) ON DELETE CASCADE
);

-- Item: Catálogo de objetos contidos nos espaços, vinculado ao inventário
CREATE TABLE IF NOT EXISTS Item (
    itemId INT AUTO_INCREMENT PRIMARY KEY,
    itemName VARCHAR(100) NOT NULL,
    itemDescription VARCHAR(100) NOT NULL,
    itemQuantity INT NOT NULL,
    idSpaceInventory INT NOT NULL,
    FOREIGN KEY (idSpaceInventory) REFERENCES SpaceInventory(idSpaceInventory) ON DELETE CASCADE
);

-- 2. ESTRUTURA DE USUÁRIOS (HERANÇA)

-- User: Tabela base que armazena os dados comuns de todos os tipos de usuários
CREATE TABLE IF NOT EXISTS `User` (
    registrationId VARCHAR(25) PRIMARY KEY,
    userCpf VARCHAR(14) UNIQUE NOT NULL,
    userBirthDate DATE NOT NULL,
    userEmail VARCHAR(100) UNIQUE NOT NULL,
    userPassword VARCHAR(255) NOT NULL,
    userName VARCHAR(100) NOT NULL
);

-- Especializações que herdam o ID do usuário principal
CREATE TABLE IF NOT EXISTS Administrator (
    registrationId VARCHAR(25) PRIMARY KEY,
    FOREIGN KEY (registrationId) REFERENCES `User`(registrationId) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS Student (
    registrationId VARCHAR(25) PRIMARY KEY,
    educationLevel VARCHAR(100) NOT NULL,
    FOREIGN KEY (registrationId) REFERENCES `User`(registrationId) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS Teacher (
    registrationId VARCHAR(25) PRIMARY KEY,
    subject VARCHAR(100) NOT NULL,
    FOREIGN KEY (registrationId) REFERENCES `User`(registrationId) ON DELETE CASCADE
);

-- 3. GESTÃO DE RESERVAS

-- Booking: Conecta o usuário ao espaço escolhido em um período
CREATE TABLE IF NOT EXISTS Booking (
    bookingId INT AUTO_INCREMENT PRIMARY KEY,
    bookingDate DATE NOT NULL,
    bookingStart TIME NOT NULL,
    bookingEnd TIME NOT NULL,
    registrationId VARCHAR(25) NOT NULL,
    spaceId VARCHAR(50) NOT NULL,
    FOREIGN KEY (registrationId) REFERENCES `User`(registrationId) ON DELETE CASCADE,
    FOREIGN KEY (spaceId) REFERENCES Space(spaceId) ON DELETE CASCADE
);