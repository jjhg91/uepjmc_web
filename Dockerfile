FROM nginx:1.24.0-alpine3.17-slim
WORKDIR /var/www/html/
COPY ./ ./
