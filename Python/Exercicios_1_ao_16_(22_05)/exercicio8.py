neg = 0
for i in range(4):
    num = int(input(f"Digite o {i + 1} número:"))

    if num < 0:
        neg += 1

print(f"Você digitou {neg} números negativos.")