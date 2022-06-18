def run():
    # for contador in range(1000):
    #     if contador % 2 != 0:
    #         continue
    #     print(contador)

    # for i in range(10000):
    #     if i == 7689:
    #         break
    # print(i)

    palabra = input('Escribe una o varias palabras: ')
    for i in palabra:
        if i == 'o':
            break
        print(i)


if __name__== "__main__":
    run()