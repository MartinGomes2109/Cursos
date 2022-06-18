from random import random


import random

def juego(numero,numerorandom):
    if numero == numerorandom:
        return True
    else:
        return False

def run():
    numerorandom = random.randint(1, 10)
    inte = 5
    for i in range(1,6):
        print('tienes restantes: ' + str(inte))
        numero = int(input('adivine el numero entre el 1 y el 10:  '))
        if juego(numero,numerorandom):
            print('Ganaste')
            break
        elif numero < numerorandom:
            print('el numero es mayor')
            inte -= 1
        else:
            print('el numero es menor')
            inte -= 1
    if numero != numerorandom:
        print('Perdiste, el numero era ' + str(numerorandom))


if __name__ == '__main__':
    run()