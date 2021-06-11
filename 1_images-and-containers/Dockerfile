# Buscar imagem para aplicação, no caso o node
FROM node

# Diretório usado para executar a aplicação no container
WORKDIR /app

# Copiar arquivos para o container
COPY package*.json /app

# Rodar comandos, no caso instalação dos pacotes
RUN npm install

# Copiar arquivos da aplicação na pasta do container
COPY . .

# Expor porta da aplicação
EXPOSE 3000

# Executa os comandos
CMD ["node", "app.js"]