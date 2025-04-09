CREATE TABLE contact(
    name VARCHAR (200),
    email VARCHAR (200),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)