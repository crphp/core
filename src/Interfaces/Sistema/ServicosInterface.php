<?php

/** 
 * Assinatura dos métodos básicos para consultar dados referentes aos serviços instalados no SO
 * 
 * @package     crphp
 * @subpackage  core
 * @author      Fábio J L Ferreira <contato@fabiojanio.com>
 * @license     MIT (consulte o arquivo license disponibilizado com este pacote)
 * @copyright   (c) 2016, Fábio J L Ferreira
 */

namespace Crphp\Core\Interfaces\Sistema;

use Crphp\Core\Sistema\Conector;

interface ServicosInterface
{
    /**
     * Consulta os dados referentes aos serviços instalados no SO
     * 
     * @param   \Crphp\Wmi\Conectores\Conector $conexao
     * @param   string|null $servico
     * @return  null
     */
    function __construct(Conector $conexao, $servico = null);
        
    /**
     * Retorna o status do comando stop
     * 
     * @return string|null
     */
    public function stopServico();
    
    /**
     * Retorna o status do comando de start
     * 
     * @return string|null
     */
    public function startServico();
    
    /**
     * Retorna uma visão detalhada a respeito do(s) serviço(s)
     * 
     * @return array|null
     */
    public function detalhes();
    
    // em desenvolvimento
    //public function listarServicoDependente()
}