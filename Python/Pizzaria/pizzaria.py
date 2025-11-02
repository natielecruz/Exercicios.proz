# Dicionário com os preços das pizzas, tamanhos e refrigerantes
preco_pizza = {
    1: 12.00, #calabresa
    2: 15.00, #quatro queijos
    3: 20.00, #frango com catupiry
    4: 12.00, #mussarela
    5: 17.00, #portuguesa
    6: 20.00, #chocolate branco
    7: 20.00, #brigadeiro
    }

preco_refri = {
    1: 10.00, #coca-cola
    2: 8.00, #guaraná
    3: 7.00, #fanta
    4: 6.50, #sprite
    5: 10.50, #cocacola-zero
    6: 6.50, #uva
    7: 7.00, #guarapan
    }

preco_tamanho = {  
   'P': 10.00,  #Pequena
   'M': 15.00,  #Média
   'G': 20.00   #Grande
   }

tamanho_pizza = {"P": "Pequena", "M": "Média", "G": "Grande"}

# Introdução
print("PIZZARIA LA BELLA PiZZA - SEJA BEM VINDO!")
print("______Cardápio - Preços_______")
print("1 - Calabresa")
print("2 - Quatro queijos")
print("3 - Frango com catupiry")
print("4 - Mussarela")
print("5 - Portuguesa")
print("6 - Chocolate branco")
print("7 - Brigadeiro")

print("______Tamanho - Preços_______")
print("Pizza Pequena R$10,00")
print("Pizza Média R$15,00")
print("Pizza Grande R$20,00")

print("______Refrigerantes - Preços_______")
print("1 - Coca-Cola R$10,00")
print("2 - Guaraná R$8,00")
print("3 - Fanta R$7,00")
print("4 - Sprite R$6,50")
print("5 - Coca-cola Zero R$10,50")
print("6 - Uva R$6,50")
print("7 - Guarapan R$7,00")

# Escolhendo o sabor da pizza
pedidopizza = int(input("Qual o sabor da pizza você deseja (1 a 7)?"))
while pedidopizza not in preco_pizza:
    pedidopizza = int(input("Opção inválida. Escola novamente (1 a 7):"))

# Escolha o tamanho
print("Digite o tamanho da pizza (P - Pequena, M - Média, G - Grande):")
tampizza = input().upper()
while tampizza not in tamanho_pizza:
    tampizza = input("Tamanho inválido. Escolha novamente (P, M, G): ").upper()

# Escolhendo o refrigerante
print("Escolha o refrigerante:")
print("1 - Coca-Cola")
print("2 - Guaraná")
print("3 - Fanta")
print("4 - Sprite")
print("5 - Coca-cola Zero")
print("6 - Uva")
print("7 - Guarapan")
pedidorefri = int(input("Qual refrigerante você vai querer beber? "))
while pedidorefri not in preco_refri:
    pedidorefri = int(input("Opção inválida. Escolha novamente (1 a 6): "))

# Calculo preço total
preco_pizza_escolhida = preco_pizza[pedidopizza]
preco_refri_escolhido = preco_refri[pedidorefri]
preco_tamanho_escolhido = preco_tamanho[tampizza]

# Pedido
sabor_pizza = ["Calabresa", "Quatro queijos", " Frango com catupiry", " Mussarela", " Portuguesa", "Chocolate branco", "Brigadeiro"]
tamanho_pizza_escolhido = tamanho_pizza[tampizza]
refri_escolhido = ["Coca-Cola", "Guaraná", "Fanta", "Sprite", "Coca-cola Zero", "Uva", "Guarapan"][pedidorefri - 1]

# Preço total
precopagar= preco_pizza_escolhida + preco_refri_escolhido + preco_tamanho_escolhido
pedidos = f"{sabor_pizza}, {tamanho_pizza_escolhido}, {refri_escolhido}"

# # Exibe o resumo do pedido e o preço total
print("________________________________________")
print(f"O total a pagar é: R${precopagar:.2f}")
print("_________________________________________")
print("Bom apetite e seja bem-vindo!")