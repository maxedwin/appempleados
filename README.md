
CONFIGURAR MYSQL
1.- crear una base con el nombre ( db_empleados )
2.- ABRIR EL PROYECYO  la carpeta( server )
3.- abrir un terminal dentro del proyecto y escribir [ php artisan migrate:fresh] este comando migra todos los datos a la BD y si hubieran tablas anterior las elimina.
4.- escribir en la terminal [ php artisan serve ] ///  [http://127.0.0.1:8000] por defecto le otorga ese puerto, puede modificarlo a sus necesidades.
5.- CON ESTOS PASOS YA TENDREMOS EL SERVIDOR DE API funcionando.
 
6.- ABRIR EL PROYECTO FRONTEND la carpeta ( consumirAPI )
7.- abrir un terminal dentro del proyecto y escribir el siguiente comando ·[ ng serve ] /// http://localhost:4200/ por fegecto nos otorga ese puerto, tambien puede ser cambiado.
8.- ingresar en el navegador http://localhost:4200 (si hubiera cambiado el puerto escribirlo en la URL)



NOTA: los servidores del server y consumirAPI deben ser distintos
los Nros de Identificacion pueden ser los mismos siempre y cuando el tipo de Documento sea distinto.
SE CONSIDERARA IDENTIFICACION DUPLICADA CUANDO EL TIPO Y EL NUMERO SEAN IGUALES
