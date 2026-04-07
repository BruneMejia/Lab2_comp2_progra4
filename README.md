# Lab2_comp2_progra
FRANCISCA DEL CARMEN BONILLA ARGUETA
MADELINE BRUNELLA MEJIA MEJIA
FREDDY SAMUEL VASQUEZ ALVAREZ

¿De qué forma manejaste el login de usuarios? Explica con tus palabras porque en tu
página funciona de esa forma.
R// El login fue manejado mediante un formulario que envía el correo y la contraseña al servidor. Luego, se consulta la base de datos para verificar si el usuario existe. Si los datos coinciden.

• ¿Por qué es necesario para las aplicaciones web utilizar bases de datos en lugar de
variables?
R// Las bases de datos permiten almacenar información de forma permanente, mientras que las variables solo guardan datos temporalmente mientras el programa se ejecuta.
Además, las bases de datos permiten:
Guardar grandes cantidades de información
Consultar datos fácilmente
Mantener la información aunque se cierre la página

• ¿En qué casos sería mejor utilizar bases de datos para su solución y en cuáles utilizar
otro tipo de datos temporales como cookies o sesiones?
R// Las bases de datos permiten almacenar información de forma permanente, mientras que las variables solo 
guardan datos temporalmente mientras el programa se ejecuta.

• Describa brevemente sus tablas y los tipos de datos utilizados en cada campo;
justifique la elección del tipo de dato para cada uno.
R//  Descripción de tablas
Tabla: usuarios
id → INT (identificador único)
correo → VARCHAR(255) (correo del usuario, texto corto)
password → VARCHAR(8) (contraseña)

Se usa VARCHAR porque son datos de texto y se usa INT para números
