import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="rodrigo",
  database="bd_educiber"
)

if mydb.is_connected:
    print("Coneccion exitosa")
else:
    print("Error en la conexion")
