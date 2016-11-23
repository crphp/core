<?php

/** 
 * Assinatura dos métodos básicos responsáveis por apresentar uma visão resumida do SO 
 * tais como nome, versão, total de memória física etc
 * 
 * @package     crphp
 * @subpackage  core
 * @author      Fábio J L Ferreira <contato@fabiojanio.com>
 * @license     MIT (consulte o arquivo license disponibilizado com este pacote)
 * @copyright   (c) 2016, Fábio J L Ferreira
 */

namespace Crphp\Core\Interfaces\Sistema;

use Crphp\Core\Sistema\Conector;

interface ResumoSistemaInterface
{    
    /**
     * Recupera informações no Sistema Operacional e devolve um objeto contendo
     * tais informações
     * 
     * @param \Crphp\Wmi\Conectores\Conector $conexao
     */
    function __construct(Conector $conexao);
    
    /**
     * Retorna uma visão detalhada a respeito do SO
     * 
     * @return array
     */
    public function detalhes();
}