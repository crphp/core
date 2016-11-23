<?php

/** 
 * Assinatura dos métodos básicos para consultar dados e encerrar processos no host remoto
 * 
 * @package     crphp
 * @subpackage  core
 * @author      Fábio J L Ferreira <contato@fabiojanio.com>
 * @license     MIT (consulte o arquivo license disponibilizado com este pacote)
 * @copyright   (c) 2016, Fábio J L Ferreira
 */

namespace Crphp\Core\Interfaces\Sistema;

use Crphp\Core\Sistema\Conector;

interface ProcessosInterface
{    
    /**
     * Consulta os dados referentes a processos ativos no SO
     * 
     * @param \Crphp\Wmi\Conectores\Conector $conexao
     * @param string|int|null                $filtro
     */
    function __construct(Conector $conexao, $filtro = null);
    
    /**
     * Encerra o(s) processo(s)
     * 
     * @return int|null
     */
    public function killProcesso();
    
    /**
     * Altera a prioridade do processo
     * 
     * @param string $prioridade
     * @return array|null
     */
    public function alterarPrioridade($prioridade = null);
    
    /**
     * Retorna uma visão detalhada dos processos ativos no SO
     * 
     * @return array|null
     */
    public function detalhes();
}