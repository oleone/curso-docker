# Docker para Desenvolvedores (com Docker Swarn e Kubernetes)

## Imagens e Containers

### Listar containers
`docker container ls`

### Listar imagens 
`docker image ls`

### Rodar container
`docker run -d -p PORTA_LOCAL:PORTA_DOCKER --name NOME_CONTAINER ID_IMAGEM`

### Stopar Container
`docker stop NOME_CONTAINER`

### Baixar imagem
`docker pull IMAGEM`

### Comando para ajuda
`flag --help`

### Comando para editar nome de uma imagem
`docker tag ID_IMAGEM NOME_IMAGEM`

### Nomeando imagem no build
`docker build -t NOME_IMAGEM:TAG_IMAGEM .`

### Reiniciando container com interatividade
`docker start -i ID_IMAGEM`

### Removendo imagem
`docker rmi IMAGEM`

### Removendo imagem em uso
`docker rmi -f IMAGEM`

### Remover imagens e containers não utilizadas
`docker system prune`

### Remover container depois de usa-lo
`docker run -d -p PORTA_LOCAL:PORTA_CONTAINER --name ID_CONTAINER --rm ID_IMAGEM`

### Copiar arquivos entre containers
`docker cp ID_CONTAINER:/CAMINHO_ARQUIVO CAMINHO_PASTA`

### Verificando processos do container
`docker top ID_CONTAINER`

### Verificar dados do container
`docker inspect ID_CONTAINER`

### Verificar processamento
`docker stats`

### Logar no Hub do docker
`docker login`


# Volumes - Persistencia dos Dados

## Volume Anônimo
`docker run -v /data`

### Listar volumes
`docker volume ls`

## Volume nomeado

`docker run -v NOMEDOVOLUME:/DIRETORIO`

## Volume Bind Mount

## Criar um Volume Manualmente

`docker volume create <nome>`

# Networks
