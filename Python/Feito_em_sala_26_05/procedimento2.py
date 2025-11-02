def verificaSexo(sexo):
    if sexo == "F":
        print("Feminino")

    elif sexo == "M":
        print("Masculino")

    else:
        print("Digitação invalida")
        verificaSexo(sexo)

print("Digite o seu sexo (F para feminino) e (M para masculino): ")
sexo = input()
verificaSexo(sexo)