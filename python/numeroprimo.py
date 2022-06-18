def es_primo(numero):
    contador = 2
    if (numero == 1) or (numero == 2):
        return False
    else:
        while contador != numero:
            if (numero % contador) == 0:
                return False
            contador += 1
        return True

def run():
    numero = int(input('ingrese un numero: '))
    if es_primo(numero):
        print('el numero es primo')
    else:
        print('el numero no es primo')

if __name__== "__main__":
    run()