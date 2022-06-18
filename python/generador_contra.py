from ntpath import join
import random

def gen_contra():
    may = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z']
    min = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z']
    num = ['1','2','3','4','5','6','7','8','9','0']
    sim = ['!','#','$','%','&']

    caracteres = may + min + num + sim
    contra1 = []
    for i in range(15):
        caracter_random = random.choice(caracteres)
        contra1.append(caracter_random)
    contra1 = ''.join(contra1)
    return contra1


def run():
    contra = gen_contra()
    print('la contraseña es: ' + contra)

if __name__ == '__main__':
    run()