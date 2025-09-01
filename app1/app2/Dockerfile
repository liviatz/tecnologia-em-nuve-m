# usa a imagem oficial do php com apache
FROM php:8.2-apache

# porta usada pela render
ENV PORT=8080

#Ativa o mod_rewrite pelas urls amigaveis
RUN a2enmod rewrite

#copia o codigo da aplcaçao
COPY. /var/www/html/

#corrige permissoes
RUN chown -R www data:www-data /var/www/html && chmod -R 755 /var/www/html
