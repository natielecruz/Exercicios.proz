# Cálculo de Desconto com Condição
# Peça ao usuário o valor de um produto e calcule o valor com desconto apenas se o valor original for maior que R$ 100.

valor = float(input("Digite o valor do produto: R$ "))
desconto = float(input("Digite o percentual de desconto: (%) "))
desconto = valor - (valor * desconto / 100)
if valor < 100:
    print("Valor abaixo de R$100,00. Negado!!!")
else:
    print(f"Valor com desconto R${desconto:.2f}")