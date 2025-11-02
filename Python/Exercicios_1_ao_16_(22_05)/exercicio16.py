# Classificação de Idade
# Solicite a idade do usuário e classifique-a em "Criança", "Adolescente", "Adulto Jovem" ou "Adulto".
idade = float(input("Digite sua idade: "))
if idade < 10:
    print("Criança")
elif idade < 18:
    print("Adolescente")
elif idade < 25:
    print("Adulto jovem")
else:
    print("Adulto")
