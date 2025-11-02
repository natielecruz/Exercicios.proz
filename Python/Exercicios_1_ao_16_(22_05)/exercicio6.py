valor = float(input("Digite o valor principal: "))
taxa = float(input("Digite a taxa: "))
anos = int(input("Digite o ano: "))

montante = (valor * taxa * anos / 100)
print(f"Montante final após {anos} anos: R$ {montante:.2f}")