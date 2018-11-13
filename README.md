# Proyecto:
Tipc Phones

# Descripción del proyecto:
El proyecto de Tipc Phones busca  unir la comunidad de tecnólogos amantes de los celulares para que compartan sus experiencias en una sola página web de celulares por categorías, algo no visto antes.

# Autores:
Jorge Edison Cerón Ruíz

# Manual de instalación y uso:
1)Abrir visual Studio Code


2)Usar el comando git:clone y copiar el url del repositorio


3)Elegir donde se tenga instalado xampp, luego htdocs


4)En xampp/php/php.ini (Abrir con visual studio code) configurar el apartado mail function (linea 1042 aprox), cambiar esta fila (sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t") en este caso el disco C luego xampp porque ahi esta instalado xampp, y comentar todas las demas lineas


5)En xampp/sendmail/sendmail.ini (Abrir con visual studio code) configurar las linea 14(smtp_server=smtp.gmail.com), 18(smtp_port=587), y las lineas 46 y 47(auth_username='aqui su direccion de correo de gmail')(
auth_password='aqui su contraseña de su cuenta de correo de gmail')


6)Abrir xampp e iniciar Apache y MySQL


7)En localhost/phpmyadmin/ crear la base de datos tipc_phones e importar el archivo tipc_phones.sql del repositorio


8)Si gustas renombrar el nombre de la carpeta del repositorio


9)Abrir en localhost/'aqui el nombre de la carpeta bajada por defecto es miprimerrepositorio' y listo a usar la aplicacion web