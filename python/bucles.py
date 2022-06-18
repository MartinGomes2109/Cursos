def run():
    LIMITE = 10
    contador=0
    while contador<=LIMITE:
        print('2 elevado a '+ str(contador) + ' es igual a ' + str(2**contador))
        contador= contador + 1


if __name__ == '__main__':
    run()