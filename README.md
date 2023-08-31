Projeto apresentado em teste técnico.
Desenvolver um programa que para cada dia da semana exiba uma mensagem diferente.
Utilizar o padrão Strategy

* Para iniciar o projeto
`
docker-compose up -d 
`

* Para executar os testes unitários
  `
  docker exec -it teste-tecnico-php bash
  ./vendor/bin/phpunit App/Test
  `
* Para executar o programa
`
 curl --location 'localhost:8000'
`
