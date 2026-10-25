# Relatório de Testes — Site de Signos

## 1. Objetivo

Avaliar o comportamento funcional do site de signos por meio de testes manuais, verificando entradas válidas, inválidas e a atualização dos resultados.

## 2. Ambiente

- Aplicação: Site de Signos
- Tecnologias: PHP, HTML, CSS e XML
- Ambiente de execução: XAMPP
- Tipo de teste: Teste funcional manual

## 3. Resultados dos testes

| ID | Cenário | Resultado observado | Status |
|---|---|---|---|
| CT001 | Data válida | O site apresentou o signo corretamente. | Aprovado |
| CT002 | Campo vazio | O formulário solicitou o preenchimento do campo. | Aprovado |
| CT003 | Data futura | O site aceitou 01/01/2030 e apresentou um signo. | Reprovado |
| CT004 | Data impossível | O navegador solicitou um valor válido para a data. | Aprovado |
| CT005 | Limite entre signos | Para 20/03/2000, o site apresentou Peixes. A regra de datas precisa ser conferida no XML. | Em verificação |
| CT006 | Nova consulta | O site apresentou o novo signo corretamente após outra consulta. | Aprovado |

## 4. Defeito identificado

**ID:** BUG001

**Título:** Sistema aceita data de nascimento futura.

**Passos para reproduzir:**
1. Abrir o formulário de signos.
2. Informar a data 01/01/2030.
3. Enviar o formulário.

**Resultado esperado:** O sistema deve impedir ou rejeitar datas futuras de nascimento.

**Resultado observado:** O sistema aceitou a data e apresentou um signo.

**Status:** Aguardando correção.

## 5. Conclusão

Foram executados seis cenários de teste funcional manual. Quatro foram aprovados, um foi reprovado e um permanece em verificação.

Os testes demonstraram a necessidade de avaliar a validação de datas futuras e confirmar os limites de datas utilizados para determinar os signos.

## 6. Aprendizados

- Elaboração e execução de casos de teste.
- Comparação entre resultado esperado e resultado observado.
- Registro de defeitos com passos para reprodução.
- Documentação de testes funcionais para portfólio de QA.

> Os resultados representam uma rodada inicial de testes manuais no ambiente local. Não foram executados testes automatizados.
