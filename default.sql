CREATE TABLE IF NOT EXISTS landing_page_settings (
    id INT PRIMARY KEY DEFAULT 1,
    company_name VARCHAR(255) NOT NULL,
    hero_title TEXT NOT NULL,
    hero_desc TEXT NOT NULL,
    btn_primary VARCHAR(100),
    btn_secondary VARCHAR(100),
    about_title VARCHAR(255),
    about_p1 TEXT,
    contact_email VARCHAR(255),
    contact_phone VARCHAR(50),
    contact_address TEXT,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


INSERT INTO landing_page_settings (
    id, company_name, hero_title, hero_desc, btn_primary, btn_secondary, 
    about_title, about_p1, contact_email, contact_phone, contact_address
) VALUES (
    1, 
    'Lapindo.inc', 
    'Masa Depan Bisnis Anda Dimulai Di Sini', 
    'Kami menyediakan solusi inovatif yang dirancang untuk mempercepat pertumbuhan dan efisiensi operasional perusahaan Anda.', 
    'Lihat Layanan Kami', 
    'Hubungi Kami', 
    'Mengenal NamaPerusahaan Lebih Dekat', 
    'Didirikan pada tahun 2026, NamaPerusahaan telah berdedikasi...', 
    'email@namaperusahaan.com', 
    '+62 812-3456-7890', 
    'Jl. Contoh No. 123'
);