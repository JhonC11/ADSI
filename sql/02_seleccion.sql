# seleccionar una columna de la tabla
select nombredelacolumna from nombredelatabla;

# seleccionar varias columnas de la tabla
select nombredelacolumna1, nombredelacolumna2 from nombredelatabla;

# Seleccionar valores distintos
select distinct nombrecambo from nombretabla;

# seleccion un dato
select * from nombretabla where nombrecampo = valor

# Seleccionar varios datos
select * from nombretabla where nombrecampo in (valor1,valor2);

# Seleccionar valores mayores a un valor de un campo
select * from nombretabla where nombrecampo > valor;

#menor
select * from nombretabla where nombrecampo < valor;

#Seleccionar todos menos un registo en especial
select * from nombretabla where nombrecampo <>valor;

# Seleccionar varios registros con or
select * from nombretabla where nombrecampo = valor1 or nombrecampo = valor2;

# Seleccionar registro con and
select * from nombretabla where nombrecampo = valor1 and nombrecampo = valor2;

#