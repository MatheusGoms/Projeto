ficha = list()
while True:
    nome = str(input('nome: '))
    nota1 = float (input('Primeira Nota: '))
    nota2 = float (input('Segunda Nota: '))
    nota3 = float (input('Terceira Nota: '))
    media = (nota1 + nota2 + nota3) / 3
    ficha.append([nome, [nota1, nota2, nota3], media])

    if 6 > media >= 4:
        print('O Aluno está em RECUPERAÇÃO')
    elif media < 4:
        print('O aluno está REPROVADO')
    elif media >= 6:
        print('O aluno está APROVADO')

    resp = str(input('Quer continuar? [S/N] '))
    if resp in 'Nn':
        break
    print(ficha)
    print('-=' * 20)
    print(f'{"No.":<4}{"NOME":<10}{"MÉDIA":>8}')
    print('-' * 35)
    for i, a, in enumerate(ficha):
        print(f'{i:<4}{a[0]:<10}{a[2]:>8.1f}')


