CREATE DATABASE IF NOT EXISTS kigali_luxury_furniture;

USE kigali_luxury_furniture;

CREATE TABLE IF NOT EXISTS products (

    id INT AUTO_INCREMENT PRIMARY KEY,

    name VARCHAR(150) NOT NULL,

    description TEXT,

    price DECIMAL(12,2) NOT NULL DEFAULT 0,

    category VARCHAR(100) NOT NULL,

    image VARCHAR(255),

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);
INSERT INTO products
(name, description, price, category, image)
VALUES

(
    'Cloud Lounge Chair',
    'Elegant modern lounge chair designed for luxury living rooms.',
    420000,
    'Living Room',
    'https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?auto=format&fit=crop&w=1000&q=85'
),

(
    'Nordic Luxury Sofa',
    'Premium modern sofa with a comfortable minimalist design.',
    1850000,
    'Living Room',
    'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=1000&q=85'
),

(
    'Luxe Dining Set',
    'Modern dining table and chairs for sophisticated spaces.',
    2400000,
    'Dining',
    'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1000&q=85'
);