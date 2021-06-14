FROM mysql:5.7

COPY schema.sql /docker-entrypoint-inidb.d/init.sql

EXPOSE 3306

VOLUME ["/backup/"]