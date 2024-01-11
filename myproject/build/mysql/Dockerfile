FROM mysql:latest
USER root
COPY ./template.sql /docker-entrypoint-initdb.d/
RUN chmod 755 /var/lib/mysql