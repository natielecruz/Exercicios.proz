# Criando uma tupla com alguns elementos
frutas = ("maçã", "banana", "cereja")

# Exibindo a tupla
print("Minha tupla de frutas", frutas)

# Acessando elementos da tupla pelo índice
print("Primeira fruta:", frutas[0]) # Índice 0 corresponde a "Maça"
print("Segunda fruta:", frutas[1]) # Índice 1 corresponde a "Banana"
print("Terceira fruta:", frutas[2]) # Índice 1 corresponde a "Cereja"

# Tentando modificar um elemento da tupla (isso gerará um erro)
# frutas[1] = "laranja" # Descomente essa linha para ver o erro

# Percorrendo a tupla com um loop
print("Listando todas as frutas na tupla:")
for fruta in frutas:
    print(fruta)

# Verificando se um elemnto está na tupla
if "banana" in frutas:
    print("Banana está na tupla!")

# Criando uma tupla de um único elemento (note a virgula no final)
unica_fruta = ("melancia" ,)
print("Tupla de um único elemento:", unica_fruta)



