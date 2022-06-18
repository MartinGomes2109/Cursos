def run():
    dic_paises = {
        'Argentina' : 435748393,
        'Brasil' : 7823483204,
        'Colombia' : 566234682
    }
    # print(dic_paises['Argentina'])
    # for pais in dic_paises.keys():
    #     print(pais)
    # for pais in dic_paises.values():
    #     print(pais)
    # for pais in dic_paises.keys():
    #     print('el pais ' + str(pais) + ' tiene ' + str(dic_paises[pais]) + ' habitantes')
    for pais, habitantes in dic_paises.items():
        print('el pais ' + str(pais) + ' tiene ' + str(habitantes) + ' habitantes')
    

if __name__ == '__main__':
    run()