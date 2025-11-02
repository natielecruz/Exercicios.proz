# Verificação de Número Divisível por 3 e 5
# Peça ao usuário para digitar um número e verifique se é divisível por 3 e 5 ao mesmo tempo.

num = float(input("Digite um número: "))
if num % 3 == 0 and num % 5 == 0:
    print("O número é divisivel por 3 e 5.")
else:
    print("O número NÃO é divisivel por 3 e 5.")