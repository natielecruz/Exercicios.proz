# Verificação de Número Positivo, Negativo ou Zero
# Solicite um número e determine se é positivo, negativo ou zero.

num = float(input("Digite um número: "))
if num > 0:
    print("O número é positivo.")
elif num < 0:
    print("O número é negativo.")
else:
    print("O número é zero.")
