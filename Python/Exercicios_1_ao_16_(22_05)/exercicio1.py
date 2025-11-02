cafe = 1.70
print("=-"*20)
escolha = int(input("Olá, Quantos cafés você gostaria de pedir hoje? "))
print("--------- Valor ---------")
print("Café normal: 1,70")
valor_total = cafe * escolha
print(f"Você vai pediu {escolha}, o valor total é de R${valor_total:.2f}")
