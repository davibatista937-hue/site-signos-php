# Casos de Teste — Site de Signos

## 1. Objetivo

Verificar se o sistema recebe uma data de nascimento e apresenta o signo correspondente corretamente.

## 2. Ambiente de teste

- **Aplicação:** Site de Signos
- **Tecnologias:** PHP, HTML, CSS e XML
- **Ambiente de execução:** XAMPP
- **Tipo de teste:** Teste funcional manual

## 3. Casos de teste

| ID | Cenário | Procedimento | Resultado esperado |
|---|---|---|---|
| CT001 | Data válida | Informar uma data de nascimento válida e enviar o formulário. | O sistema apresenta o signo correspondente. |
| CT002 | Campo vazio | Enviar o formulário sem preencher a data. | O sistema solicita uma data ou impede o envio. |
| CT003 | Data futura | Informar uma data posterior à data atual. | O sistema rejeita a data ou apresenta uma mensagem adequada. |
| CT004 | Data inválida | Tentar informar uma data inválida. | O sistema trata a entrada sem apresentar um erro inesperado. |
| CT005 | Limite entre signos | Informar uma data próxima à mudança de signo. | O sistema apresenta o signo conforme as regras implementadas. |
| CT006 | Nova consulta | Realizar duas consultas com datas diferentes. | O sistema processa a segunda consulta corretamente. |

## 4. Registro dos resultados

Os testes serão executados manualmente. Para cada caso, registrar:

- **Status:** Aprovado ou Reprovado.
- **Resultado observado:** O que aconteceu durante o teste.
- **Evidência:** Captura de tela, quando necessário.
- **Observações:** Erros ou comportamentos inesperados.

## 5. Sit
