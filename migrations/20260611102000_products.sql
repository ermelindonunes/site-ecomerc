CREATE TABLE products (
    id INTEGER PRIMARY KEY,
    nome TEXT NOT NULL,
    descricao TEXT,
    imagem_principal TEXT,
    imagens TEXT[],
    price INTEGER NOT NULL,
    stock INTEGER NOT NULL,
    available BOOLEAN NOT NULL DEFAULT false
);

 