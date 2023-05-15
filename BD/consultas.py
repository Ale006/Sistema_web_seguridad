import conexion as con

mycursor = con.mydb.cursor()

sql = "SELECT *FROM usuario"
mycursor.execute(sql)

for fila in mycursor:
    print(fila)





"""
OTRA FORMA DE CORRER CONSULTAS, SIN LLAMAR EL ARCHIVO DE CONEXION
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="rodrigo",
  database="bd_educiber"
)

mycursor = mydb.cursor()
mycursor.execute("SELECT *FROM usuario")
myresult=mycursor.fetchall()

for x in myresult:
  print(x)
"""