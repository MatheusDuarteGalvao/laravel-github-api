# Consumo de API do GitHub utilizando fetch com Laravel

Em exemplo de aplicação Laravel com uma consulta da API de usuários do GitHub.

## Passo a passo para consulta

Basta digitar o nome de usuário que deseja encontrar, sendo o mesmo válido uma tabela com os dados retornada, dentre esses dados há o Avatar, número de usuário, nome, localização, quantidade de repositórios públicos e privados além de um link para visualização do perfil deste usuário. Os dados são encaminhados via ajax para a rota interna de busca, a qual é responsável por realizar a consulta na api do GitHub e retornar os dados em formato JSON.

## Validações consideradas

A fim de evitar exibição de dados incorretos, há uma validação consultando se os campos de retorno são realmente passados pela API. Caso contrário uma mensagem de erro será exibida. Outro ponto de validação é o bloqueio de envio de formulários utilizando a tecla Enter, a fim de evitar erros com o arquivo da rota de busca, a qual é consultada pelo Ajax.