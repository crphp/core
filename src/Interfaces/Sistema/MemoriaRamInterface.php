<?php

/** 
 * Assinatura dos métodos básicos para consultar dados referentes a memória física
 * 
 * @package     crphp
 * @subpackage  core
 * @author      Fábio J L Ferreira <contato@fabiojanio.com>
 * @license     MIT (consulte o arquivo license disponibilizado com este pacote)
 * @copyright   (c) 2016, Fábio J L Ferreira
 */

namespace Crphp\Core\Interfaces\Sistema;

use Crphp\Core\Sistema\Conector;

interface MemoriaRamInterface
{    
    /**
     * Consulta as informações referentes a memória física reconhecida(s) pelo host remoto
     * 
     * @param   \Crphp\Wmi\Conectores\Conector $conexao
     * @return  null
     */
    public function __construct(Conector $conexao);
    
    /**
     * Retorna o total de memória física livre e o percentual que este total representa
     * 
     * @return array
     */
    public function memoriaLivre();
    
    /**
     * Retorna o total de memória física utilizada e o percentual que este total representa
     * 
     * @return array
     */
    public function memoriaUtilizada();

    /**
     * Retorna o total de memória física
     * 
     * @return string
     */
    public function memoriaTotal();
    
    /**
     * Retorna uma visão geral referente a memória física
     * 
     * @return array
     */
    public function detalhes();
}