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

#corrige configuraçoes da porta
RUN sed -i "s/Listen 80/Listem ${PORT}/" /etc/apache2/ports.&&\
    sed -i "s/<VirtualHost \*:80>/<VirtualHost\*:$(PORT)>/etc/apache2/sites-available/000-defaut.conf

#permite acesso ao diretorio
RUN echo '<Directory /var/www/html>' >> /etc/apache2/apache2.conf && \
    echo 'options indexes followSymLinks' » /etc/apache2/apache2. conf 8& \
    echo 'AllowOverride All' »› /etc/apache2/apache2.conf && \
    echo 'Require All granted » /etc/apachez/apache2. conf 8& \ 
    echo '</Directory> » /etc/apache2/apache2. conf

# Expõe a porta corretamente
