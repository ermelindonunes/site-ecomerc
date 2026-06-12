CREATE TABLE products (
    id INTEGER PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    imagem_principal TEXT,
    imagens TEXT[],
    price NUMERIC(10, 2) NOT NULL,
    stock INTEGER NOT NULL DEFAULT 0 CHECK (stock >= 0),
    available BOOLEAN NOT NULL DEFAULT false
);

 