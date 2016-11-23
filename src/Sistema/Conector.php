<?php

/**
 * Classe genérica responsável pela conexão e execução de instruções  no host remoto
 * 
 * @package     crphp
 * @subpackage  core
 * @author      Fábio J L Ferreira <contato@fabiojanio.com>
 * @license     MIT (consulte o arquivo license disponibilizado com este pacote)
 * @copyright   (c) 2016, Fábio J L Ferreira
 */


namespace Crphp\Core\Sistema;

use Crphp\Core\Interfaces\ConectorGenerico;

abstract class Conector implements ConectorGenerico
{
    /**
     * Recurso de conexão externa
     * 
     * @var object
     */
    protected $conexao;

    /**
     * Mensagem de erro
     * 
     * @var string
     */
    protected $mensagemErro;

    /**
     * Realiza conexão com o host alvo
     * 
     * @param   string  $host
     * @param   string  $usuario
     * @param   string  $senha
     * @param   int     $porta
     * @param   int     $timeout
     * @return  null
     */
    abstract public function conectar($host, $usuario = null, $senha = null, $porta = 135, $timeout = 10);
    
    /**
     * Consulta o status da conexão
     * 
     * @return bool
     */
    public function status()
    {
        return ($this->conexao !== null && $this->conexao !== false) ? true : false;
    }

    /**
     * Retorna mensagem de erro gerada durante a tentativa de conexão ou erro 
     * gerado na chamada do método "executar"
     * 
     * @return string
     */
    public function mensagemErro()
    {
        return $this->mensagemErro;
    }

    /**
     * Executa a instrução remotamente
     * 
     * @param   string $instrucao
     * @return  object
     */
    abstract public function executar($instrucao);
}