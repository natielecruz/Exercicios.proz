# Contribuição INSS

print("=-"*30)
print("=-=-=-=-=-=-=-=-=-= Tabela Vigente (2023) =-=-=-=-=-=-=-=-=-")
print("=-"*30)

nome = str(input("Olá, primeiramente digite seu nome: "))
print(f"\033[0;033;46mPrazer {nome}, vamos começar.\033[0m")
salario = float(input("Digite o seu salário para calcular a aliquota sob o INSS R$: "))

if salario <= 1692.72:
    aliquota = 0.08 #8%

elif salario <= 2822.90:
    aliquota = 0.09 #9%

elif salario <= 5645.90:
    aliquota = 0.11 #11%

else:
    print("\033[0;31;47mSalário acima do teto do INSS, não há desconto.\033[0m")
    aliquota = 0.0

desconto = salario * aliquota
salario_descontado = salario - desconto

print("=-"*30)    
print(f"\033[0;033;46mSeu desconto no INSS é de R${desconto:.2f}")
print(f"\033[0;033;46m{nome}, Seu salário com o desconto é de R${salario_descontado:.2f}\033[0m")
print("=-"*30)