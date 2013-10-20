#Práctica 1 IV
####Práctica realizada por Javier Collado.

>Para esta práctica, se nos pide crear una aplicación sobre un PaaS. Existen diferentes PaaS que podemos utilizar para esta práctica [heroku](www.heroku.com), [
OpenShift by Red Hat ](https://www.openshift.com/‎)...

>Los diferentes PaaS nos ofrecen también diferentes características y soporte para diferentes lenguajes. 

>En este caso, he creado una aplicación en PHP. Esta simple aplicación resuelve ecuaciones de segundo grado.

>Para alojar esta aplicación, el servidor elegido es Heroku. 

>Los lenguajes soportados por heroku son: ruby, Java, Node.js, Phyton, Clojure, Scala.

>_Pero mi aplicación esta escrita en PHP ¿Puedo alojarla en Heroku?_  
>Aunque explicitamente heroku no dice que se pueda, en realidad si se pueden subir aplicaciones en PHP. Incluso, si tenemos base de datos. El único problema que podemos tener, es que la base de datos que se utiliza en Heroku es PostgreSQL así que si nuestra aplicación tiene base de datos en MySQL tendremos que cambiarla. 
>En nuestro caso no nos hara falta base de datos.  
[Más Información](http://websistente.com/blog/2013/07/usando-php-en-heroku/).

>Para utilizar Heroku, primero necesitamos preparar algunas cosas:  
 * Registro en [Heroku](www.heroku.com)  
 * Completar los primeros pasos ([Getting Started](https://devcenter.heroku.com/articles/quickstart)) En los que instalaremos Heroku Toolbelt, entraremos desde este en Heroku...  
 * Por último crearemos la aplicación.  
 	**Pulsaremos** ![crearApp](https://github.com/javiercollado/practica1/blob/master/ImagenesMemoria/crearApp.png?raw=true)  
 	** Aparecerá esta ventana:**
 	![crearApp2](https://github.com/javiercollado/practica1/blob/master/ImagenesMemoria/ventanaCrearApp.png?raw=true)  

>Aquí elegimos el nombre y pulsamos "Create App", a partir de aquí se nos muestra la informacion para poder clonar el repositorio para subir la aplicación.


##[Resuelve ecuaciones de Segundo grado](http://segundogradopractica1ivjcl.herokuapp.com/)
![Ecuación de segundo grado](https://github.com/javiercollado/practica1/blob/master/2grado.gif?raw=true "Ecuación")

>Si pulsamos el enlace anterior, seremos redirigidos a la pagina en Heroku en la que esta alojada la aplicación.
>Como podemos comprobar consiste simplemente en un formulario (Generado mediante una clase creada en PHP) en el que introducimos los valores de la ecuación (a, b y término independiente) al pulsar calcular se realiza una comprobación de los campos introducidos. Ya que estos tienen que ser numéricos. En caso de no serlo, el usuario será notificado y redireccionado al formulario de nuevo.

>En caso de que los datos sean numéricos. Se da la solución a la ecuación.

>El código de la aplicación esta disponible en [Github](https://github.com/javiercollado/practica1).

##Licencia

>Para esta aplicación se ha elegido una licencia GNU GENERAL PUBLIC LICENSE v3. 

>Para esto, tenemos que añadir a cada fichero del proyecto la licencia y el copyright. Además tenemos que añadir un fichero LICENSE con el contenido completo de la licencia. Github nos facilita este paso, ya que podemos crear el repositorio directamente con la licencia.  
![Proyecto licencia](https://github.com/javiercollado/practica1/blob/master/ImagenesMemoria/Crear%20repositorio%20con%20licencia.png?raw=true "LECENSE")


