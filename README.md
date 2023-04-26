# seqfibonacci
script para verificar se um número é uma sequência fibonacci

1. Um formulário HTML é criado com um campo de texto para o usuário digitar o número desejado e um botão para enviar o formulário.
2. Verifica-se se o parâmetro "num" foi enviado pelo formulário usando a função isset().
3. Se o parâmetro "num" foi enviado, o código continua a executar. Caso contrário, nada é exibido na tela.
4. A sequência de Fibonacci é inicializada com os valores 0 e 1 em um array chamado $fib.
5. Um loop while é usado para calcular a sequência até que o último valor seja maior ou igual ao número informado pelo usuário. A cada iteração, o próximo valor é calculado como a soma dos dois valores anteriores e adicionado ao array $fib.
6. O código verifica se o número informado pelo usuário está presente na sequência de Fibonacci usando a função in_array().
7. Uma mensagem é exibida na tela informando se o número pertence ou não à sequência de Fibonacci.
