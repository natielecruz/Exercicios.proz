# Criando matriz 4x4 vazia
MATRIZ = [[0] * 4 for _ in range(4)]

# Preenchendo a matriz com entradas do usuário
print("Digite os valores da matriz 4x4:")

for contador1 in range(4):
    for contador2 in range(4):
        MATRIZ[contador1][contador2] = int(input(f"Elemento [{contador1}][{contador2}]: "))

# Exibindo a matriz
print("\nMatriz digitada:")
print(MATRIZ)