# Criando um procedimento (em Python, definimos funções para procedimentos)
def saudacao(nomeUsuario):
    print(f"Olá {nomeUsuario}!")

print("Digite o seu nome:")

nome = input()
saudacao(nome)