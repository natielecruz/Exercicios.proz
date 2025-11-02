# Verificação de Vogal ou Consoante
# Solicite ao usuário para digitar uma letra e determine se é uma vogal ou uma consoante.

letra = (input("Digite uma letra: "))
if letra in 'aeiou':
    print("É uma vogal.")
else:
    print("É uma consoante.")