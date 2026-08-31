
CREATE DATABASE IF NOT EXISTS arias_farm;
USE arias_farm;

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2),
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO products (name, description, price, image) VALUES
('Catfish Fingerlings', 'High-quality fingerlings for aquaculture.', 150.00, 'images/fingerlings.jpg'),
('Fish Feed 25kg', 'Nutritious floating fish feed for all fish sizes.', 9000.00, 'images/fishfeed.jpg');
