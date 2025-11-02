# Classificação de Triângulos
# Peça ao usuário os comprimentos dos três lados de um triângulo e determine se é equilátero, isósceles ou escaleno.

a = float(input("Lado A: "))
b = float(input("Lado B: "))
c = float(input("Lado C: "))

if a == b == c:
    print("Triangulo Equilátero")
elif a == b or a == c or b == c:
    print("Triangulo Isósceles")
else:
    print("Triangulo Escaleno")