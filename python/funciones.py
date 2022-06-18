# def imprimirmensaje():
#     print('mensaje especial: ')
#     print('funciones')


# imprimirmensaje()
# imprimirmensaje()
# imprimirmensaje()

def mensaje(opc):
    print('hola')
    print('elegiste la opcion ' + opc)
    print('adios')

opcion = input('elige una opcion: 1, 2 o 3 : ' )
if opcion=='1':
    mensaje(opcion)
elif opcion =='2':
    mensaje(opcion)
elif opcion=='3':
    mensaje(opcion)
else:
    print('opcion incorrecta')