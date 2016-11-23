# crphp/so
No contexto deste documento, o termo "classe" refere-se a todas as classes, interfaces e traits.

Está biblioteca representa um esqueleto inicial para se trabalhar com gerenciamento de hosts remotos. 
Já a biblioteca [crphp/wmi](https://github.com/crphp/wmi) é um bom exemplo de implementação que usa 
está coleção de classes.

As palavras-chave "DEVE", "NÃO DEVE", "REQUER", "DEVERIA", "NÃO DEVERIA", "PODERIA", "NÃO PODERIA", 
"RECOMENDÁVEL", "PODE", e "OPCIONAL" neste documento devem ser interpretadas como descritas no 
[RFC 2119](http://tools.ietf.org/html/rfc2119). Tradução livre [RFC 2119 pt-br](http://rfc.pt.webiwg.org/rfc2119).

1. [Referências](#referencia)
1. [Funcionalidades](#funcionalidades)
1. [Requisitos (recomendados)](#requisitos)
1. [Baixando o pacote crphp/wmi para o servidor](#wmi)
1. [Exemplos de uso](#exemplos)
1. [Licença (MIT)](#licenca)

## 1 - <a id="referencias"></a>Referências
 - [PSR-1](http://www.php-fig.org/psr/psr-1/)
 - [PSR-2](http://www.php-fig.org/psr/psr-2/)
 - [RFC 2119](http://tools.ietf.org/html/rfc2119). Tradução livre [RFC 2119 pt-br](http://rfc.pt.webiwg.org/rfc2119)

## 2 - <a id="funcionalidades"></a>Funcionalidades

No contexto desta biblioteca as funcionalides abaixo são classe que precisam ser implementadas. Conforme já 
foi dito, a biblioteca [crphp/wmi](https://github.com/crphp/wmi) é um bom exemplo de implementação que usa está 
coleção de classes genéricas:

- [x] Consultar CPU
- [x] Consultar RAM
- [x] Consultar Disco Rígido
- [x] Listar Serviços
- [x] Stop / Start de serviço
- [x] Listar processos
- [x] Matar / Finalizar processos
- [x] Transformação de unidades
- [x] Transformação de timestamp padrão Windows para data/hora

## 3 - <a id="preparando-o-servidor"></a>Preparando o servidor
> :exclamation: Os requisitos sugeridos logo abaixo representam as versões utilizadas em nosso ambiente 
de desenvolvimento e produção, logo não garantimos que a solução aqui apresentada irá rodar integralmente 
caso as versões dos elementos abaixo sejam outras.

### 3.1 - <a id="requisitos"></a>Requisitos (recomendados)
Servidor
- REQUER Apache >= 2.4.10
- REQUER PHP >= 5.5.12

Cliente
- NÃO REQUER instalar nenhum componente

## 4 - <a id="wmi"></a>Baixando o pacote crphp/so para o servidor

Para a etapa abaixo estou pressupondo que você tenha o composer instalado e saiba utilizá-lo:
```
composer require crphp/core
```

Ou se preferir criar um projeto:
```
composer create-project --prefer-dist crphp/core nome_projeto
```

Caso ainda não tenha o composer instalado, obtenha este em: https://getcomposer.org/download/

## 5 - <a id="exemplos"></a>Exemplos de uso

Abaixo temos um exemplo de implementação. O código completo pode ser encontrado na biblioteca [crphp/wmi](https://github.com/crphp/wmi):
```php
use COM;
use \Exception;
use \RuntimeException;
use Crphp\Core\Sistema\Conector;

class Wmi extends Conector
{
    public function conectar($host, $usuario = null, $senha = null, $porta = 135, $timeout = 10)
    {
        // Aqui você abre uma comunicação com o host remoto
    }

    public function executar($instrucao)
    {
        // Aqui você executa uma instrução remotamente
    }

    /*
     * Os métodos status() e mensagemErro() possuem um comportamento genérico, provavelmente 
     * você não irá precisar reescrevê-los
     */
}
```

## 6 - <a id="licenca">Licença (MIT)
Para maiores informações, leia o arquivo de licença disponibilizado junto desta biblioteca.