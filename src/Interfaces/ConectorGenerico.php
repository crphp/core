<?php

/**
 * Assinatura dos métodos básicos responsáveis pela conexão e execução de instruções 
 * no host remoto
 * 
 * @package     crphp
 * @subpackage  core
 * @author      Fábio J L Ferreira <contato@fabiojanio.com>
 * @license     MIT (consulte o arquivo license disponibilizado com este pacote)
 * @copyright   (c) 2016, Fábio J L Ferreira
 */

namespace Crphp\Core\Interfaces;

interface ConectorGenerico
{
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
    public function conectar($host, $usuario = null, $senha = null, $porta = 135, $timeout = 10);
    
    /**
     * Consulta o status da conexão
     * 
     * @return bool
     */
    public function status();

    /**
     * Retorna mensagem de erro gerada durante a tentativa de conexão ou erro 
     * gerado na chamada do método "executar"
     * 
     * @return string
     */
    public function mensagemErro();

    /**
     * Executa a instrução remotamente
     * 
     * @param   string $instrucao
     * @return  object
     */
    public function executar($instrucao);
}