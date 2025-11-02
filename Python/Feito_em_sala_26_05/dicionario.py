# Dicionário para armazenar os alunos e suas idades
alunos = {}

# Lista de nomes
nomes = ["Charlie", "Ollie", "Arthur", "Justin"]

# Pergunta a idade de cada aluno e salva no dicionario
for nome_aluno in nomes:
    idade = input(f"Digite a idade de {nome_aluno}: ") # Entrada de idade
    alunos[nome_aluno] = idade # Adiciona ao dicionario

# Exibe a lista de alunos com suas idades
print("\nLista de alunos:")
for nome, idade in alunos.items():
    print(f"{nome}: {idade} anos")