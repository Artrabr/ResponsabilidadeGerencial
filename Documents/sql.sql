CREATE DATABASE IF NOT EXISTS RGerencialDataBase;

USE RGerencialDataBase;

CREATE TABLE IF NOT EXISTS area (
    area_id INT NOT NULL AUTO_INCREMENT,
    area_name VARCHAR(150) NOT NULL,
    area_description VARCHAR(1000) NOT NULL,
    PRIMARY KEY (area_id)
);

CREATE TABLE IF NOT EXISTS indicator (
    indicator_id INT NOT NULL AUTO_INCREMENT,
    area_id INT NOT NULL,
    indicator_name VARCHAR(75) NOT NULL,
    indicator_description VARCHAR(1000) NOT NULL,
    indicator_unit VARCHAR(50) NOT NULL,
    indicator_improvement_direction VARCHAR(30) NOT NULL,
    indicator_methodology VARCHAR(1000) NOT NULL,
    PRIMARY KEY (indicator_id),
    INDEX idx_indicator_area_id (area_id),
    CONSTRAINT fk_indicator_area
        FOREIGN KEY (area_id) REFERENCES area (area_id)
        ON DELETE RESTRICT
);

CREATE TABLE IF NOT EXISTS data_source (
    source_id INT NOT NULL AUTO_INCREMENT,
    source_title VARCHAR(255) NOT NULL,
    source_organization VARCHAR(150) NOT NULL,
    source_url VARCHAR(2048) NOT NULL,
    source_access_date DATE NOT NULL,
    source_published_date DATE NOT NULL,
    PRIMARY KEY (source_id)
);

CREATE TABLE IF NOT EXISTS municipality (
    municipality_id INT NOT NULL AUTO_INCREMENT,
    municipality_name VARCHAR(150) NOT NULL,
    municipality_ibge_code INT UNSIGNED NOT NULL,
    PRIMARY KEY (municipality_id),
    UNIQUE KEY uq_municipality_ibge_code (municipality_ibge_code)
);

CREATE TABLE IF NOT EXISTS `user` (
    user_id INT NOT NULL AUTO_INCREMENT,
    user_name VARCHAR(150) NOT NULL,
    user_login VARCHAR(100) NOT NULL,
    user_email VARCHAR(254) NOT NULL,
    user_password_hash VARCHAR(255) NOT NULL,
    PRIMARY KEY (user_id),
    UNIQUE KEY uq_user_login (user_login),
    UNIQUE KEY uq_user_email (user_email)
);

CREATE TABLE IF NOT EXISTS neighborhood (
    neighborhood_id INT NOT NULL AUTO_INCREMENT,
    municipality_id INT NOT NULL,
    neighborhood_name VARCHAR(150) NOT NULL,
    PRIMARY KEY (neighborhood_id),
    UNIQUE KEY uq_neighborhood_municipality_name (municipality_id, neighborhood_name),
    CONSTRAINT fk_neighborhood_municipality
        FOREIGN KEY (municipality_id) REFERENCES municipality (municipality_id)
        ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS result (
    result_id INT NOT NULL AUTO_INCREMENT,
    indicator_id INT NOT NULL,
    source_id INT NOT NULL,
    municipality_id INT NOT NULL,
    result_value DECIMAL(15,4) NOT NULL,
    result_reference_date DATE NOT NULL,
    result_note TEXT NULL,
    PRIMARY KEY (result_id),
    INDEX idx_result_indicator_id (indicator_id),
    INDEX idx_result_source_id (source_id),
    INDEX idx_result_municipality_date (municipality_id, result_reference_date),
    CONSTRAINT fk_result_indicator
        FOREIGN KEY (indicator_id) REFERENCES indicator (indicator_id)
        ON DELETE RESTRICT,
    CONSTRAINT fk_result_source
        FOREIGN KEY (source_id) REFERENCES data_source (source_id)
        ON DELETE RESTRICT,
    CONSTRAINT fk_result_municipality
        FOREIGN KEY (municipality_id) REFERENCES municipality (municipality_id)
        ON DELETE RESTRICT
);