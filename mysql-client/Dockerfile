FROM ubuntu:latest

RUN apt-get update && \
    apt-get install -y mysql-client && \
    apt-get clean

WORKDIR /app
COPY script.sql .
COPY entrypoint.sh .

RUN chmod +x /app/entrypoint.sh

ENTRYPOINT [ "/app/entrypoint.sh" ]