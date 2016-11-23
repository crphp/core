<?php

/** 
 * Assinatura dos métodos básicos para consultar dados referentes a interface de rede
 * 
 * @package     crphp
 * @subpackage  core
 * @author      Fábio J L Ferreira <contato@fabiojanio.com>
 * @license     MIT (consulte o arquivo license disponibilizado com este pacote)
 * @copyright   (c) 2016, Fábio J L Ferreira
 */

namespace Crphp\Core\Interfaces\Sistema;

use Crphp\Core\Sistema\Conector;

interface IpMacInterface
{  
    /**
     * Consulta os dados referentes a interface de rede
     * 
     * @param   \Crphp\Wmi\Conectores\Conector $conexao
     * @return  null
     */
    public function __construct(Conector $conexao);
    
    /**
     * Retorna uma visão geral referente a interface de rede
     * 
     * @return array
     */
    public function detalhes();
}