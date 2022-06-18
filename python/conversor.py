def conversor(tipop, dolar):
    pesos = input("cuantos pesos " + tipop + " tenes?: ")
    pesos = float(pesos)
    dolares = pesos / dolar
    dolares = round(dolares, 2)
    dolares = str(dolares)
    print('tienes $' + dolares + ' dolares')

menu = """
Conversor de Monedas:
Argentina, Colombiano y Mexicanos

1 - Pesos Argentinos
2 - Pesos Colombianos
3 - Pesos Mexicanos

elige una opcion : """
opcion = input(menu)

if opcion == '1':
    conversor("Argentinos",210)
elif opcion == '2':
    conversor("Colombianos",3875)
elif opcion == '3':
    conversor("Mexicanos",24)
else:
    print('se ingreso una opcion incorrecta')
