CREATE DATABASE IF NOT EXISTS Reservaí;
USE Reservaí;

-- User (Tabela pai)
CREATE TABLE IF NOT EXISTS User (
    registrationId INT PRIMARY KEY,
    userCpf VARCHAR(14) UNIQUE NOT NULL,
    userBirthDate DATE NOT NULL,
    userEmail VARCHAR(100) UNIQUE NOT NULL,
    userPassword VARCHAR(255) NOT NULL,
    userName VARCHAR(100) NOT NULL
);

-- Herança de usuários
CREATE TABLE IF NOT EXISTS Administrator (
    registrationId INT PRIMARY KEY,
    FOREIGN KEY (registrationId) REFERENCES User (registrationId) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS Student (
    registrationId INT PRIMARY KEY,
    educationLevel VARCHAR(100) NOT NULL,
    FOREIGN KEY (registrationId) REFERENCES User (registrationId) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS Teacher (
    registrationId INT PRIMARY KEY,
    subject VARCHAR(100) NOT NULL,
    FOREIGN KEY (registrationId) REFERENCES User (registrationId) ON DELETE CASCADE
);

-- Space (Salas / Laboratórios)
CREATE TABLE IF NOT EXISTS Space (
    spaceId VARCHAR(50) PRIMARY KEY,
    spaceCondition ENUM('Disponível', 'Manutenção', 'Indisponível') NOT NULL,
    spaceName VARCHAR(100) NOT NULL,
    spaceDescription VARCHAR(100) NOT NULL
);

-- Booking (Reservas)
CREATE TABLE IF NOT EXISTS Booking (
    bookingId INT AUTO_INCREMENT PRIMARY KEY,
    bookingDate DATE NOT NULL,
    bookingStart TIME NOT NULL,
    bookingEnd TIME NULL,
    registrationId INT NOT NULL,
    spaceId VARCHAR(50) NOT NULL,
    FOREIGN KEY (registrationId) REFERENCES User (registrationId),
    FOREIGN KEY (spaceId) REFERENCES Space (spaceId),
    
    -- Impede agendamento duplicado (mesma sala, dia e hora de início)
    UNIQUE KEY prevent_double_booking (spaceId, bookingDate, bookingStart),
    INDEX search_by_user_index (registrationId)
);

-- SpaceInventory (Inventário)
CREATE TABLE IF NOT EXISTS SpaceInventory (
    idSpaceInventory INT AUTO_INCREMENT PRIMARY KEY,
    spaceId VARCHAR(50) UNIQUE NOT NULL,
    FOREIGN KEY (spaceId) REFERENCES Space (spaceId) ON DELETE CASCADE
);

-- Item (Itens do inventário)
CREATE TABLE IF NOT EXISTS Item (
    itemId INT AUTO_INCREMENT PRIMARY KEY,
    itemName VARCHAR(100) NOT NULL,
    itemDescription VARCHAR(100) NOT NULL,
    itemQuantity INT NOT NULL,
    idSpaceInventory INT NOT NULL,
    FOREIGN KEY (idSpaceInventory) REFERENCES SpaceInventory (idSpaceInventory) ON DELETE CASCADE,
    
    -- Garante que a quantidade em estoque nunca fique negativa
    CONSTRAINT check_positive_quantity CHECK (itemQuantity >= 0),
    INDEX search_by_inventory_index (idSpaceInventory)
);