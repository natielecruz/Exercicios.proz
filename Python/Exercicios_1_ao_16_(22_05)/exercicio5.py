valor = float(input("Digite o valor do produto: R$ "))
desconto = float(input("Digite o percentual de desconto: (%) "))
desconto = valor - (valor * desconto / 100)
print(f"Valor com desconto: R$ {desconto:.2f}")